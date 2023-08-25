<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailContact;
use App\Mail\InfoService;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ContactStoreRequest;
use App\Http\Requests\ContactUpdateRequest;
use DataTables;

class ContactController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Contact::class);

        $search = $request->get('search', '');

        $contacts = Contact::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.contacts.index', compact('contacts', 'search'));
    }

    public function getContacts(Request $request, $single)
    {
        $del = '<form action="/contacts/';
        $token = csrf_token();
        $del2 = '" method="POST" onsubmit="return confirm(\'Voulez-vous vraiment supprimé?\')"><input type="hidden" name="_token" value="'.$token.'"> <input type="hidden" name="_method" value="DELETE"> <button type="submit" class="btn btn-light text-danger"><i class="icon ion-md-trash"></i></button></form>';
        
        if ($request->ajax()) {
            if($single == 0){
                $data = Contact::latest()->get();
            }else{
                $data = Contact::where("id", $single)->get();
            }
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) use($del, $del2, $single, $data){
                    $itemId = print_r($row[0]);
                    $ids = $data[$itemId-1]->id;
                    $itemId = $ids;
                    if($single == 0){
                        $actionBtn = '<a href="/contacts/'.$row->id.'/edit"><button type="button" class="btn btn-light"><i class="icon ion-md-create"></i></button></a> <a href="/contacts/'.$row->id.'"><button type="button" class="btn btn-light"><i class="icon ion-md-eye"></i></button></a>'.$del.$row->id.$del2;
                    }else $actionBtn = "";
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Contact::class);

        return view('app.contacts.create');
    }

    /**
     * @param \App\Http\Requests\ContactStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactStoreRequest $request)
    {
        if(Auth::user()){
            $this->authorize('create', Contact::class);

            $validated = $request->validated();

            $contact = Contact::create($validated);

            return redirect()
                ->route('contacts.edit', $contact)
                ->withSuccess(__('crud.common.created'));
        }else{
            $validated = $request->validated();

            $contact = Contact::create($validated);
            
            $passer = new \stdClass();
            $passer->email = $contact->email;
            
            try{
                $passer->nom = $contact->nom_prenom;
                $passer->prenom = "";
                $passer->telephone = $contact->telephone;
                $passer->message = $contact->message;
            }catch(\Exception $e){
            
            }
            
            if($passer->email){
                try{
                    Mail::to($passer->email)->send(new MailContact($passer));
                }catch(\Exception $e){
                
                }
            }
            
            
            try{
                Mail::to("challenge-toit@heyz.ci")->send(new InfoService($passer));
            }catch(\Exception $e){
            
            }

            return redirect()->route('frontend.op-success');
        }
    }
    
    public function store2(Request $request)
    {
        //dd($request);
        $contact = Contact::create($request->all());
        
        $passer = new \stdClass();
        $passer->email = $request->email;
        
        try{
            $passer->nom = $request->nom_prenom;
            $passer->prenom = "";
            $passer->telephone = $request->telephone;
            $passer->message = $request->message;
        }catch(\Exception $e){
        
        }
        
        if($passer->email){
            try{
                Mail::to($passer->email)->send(new MailContact($passer));
            }catch(\Exception $e){
            
            }
        }
        
        
        try{
            Mail::to("challenge-toit@heyz.ci")->send(new InfoService($passer));
        }catch(\Exception $e){
        
        }

        return redirect()->route('frontend.op-success');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Contact $contact)
    {
        $this->authorize('view', $contact);

        return view('app.contacts.show', compact('contact'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Contact $contact)
    {
        $this->authorize('update', $contact);

        return view('app.contacts.edit', compact('contact'));
    }

    /**
     * @param \App\Http\Requests\ContactUpdateRequest $request
     * @param \App\Models\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function update(ContactUpdateRequest $request, Contact $contact)
    {
        $this->authorize('update', $contact);

        $validated = $request->validated();

        $contact->update($validated);

        return redirect()
            ->route('contacts.edit', $contact)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Contact $contact)
    {
        $this->authorize('delete', $contact);

        $contact->delete();

        return redirect()
            ->route('contacts.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
