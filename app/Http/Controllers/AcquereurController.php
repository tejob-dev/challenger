<?php

namespace App\Http\Controllers;

use App\Models\Acquereur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailAcquereur;
use App\Mail\InfoService;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AcquereurStoreRequest;
use App\Http\Requests\AcquereurUpdateRequest;
use DataTables;

class AcquereurController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Acquereur::class);

        $search = $request->get('search', '');

        $acquereurs = Acquereur::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.acquereurs.index', compact('acquereurs', 'search'));
    }

    public function getAcquereurs(Request $request, $single)
    {
        $del = '<form action="/acquereurs/';
        $token = csrf_token();
        $del2 = '" method="POST" onsubmit="return confirm(\'Voulez-vous vraiment supprimé?\')"><input type="hidden" name="_token" value="'.$token.'"> <input type="hidden" name="_method" value="DELETE"> <button type="submit" class="btn btn-light text-danger"><i class="icon ion-md-trash"></i></button></form>';
        
        if ($request->ajax()) {
            if($single == 0){
                $data = Acquereur::latest()->get();
            }else{
                $data = Acquereur::where("id", $single)->get();
            }
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) use($del, $del2, $single, $data){
                    if($single == 0){
                        $actionBtn = '<a href="/acquereurs/'.$row->id.'/edit"><button type="button" class="btn btn-light"><i class="icon ion-md-create"></i></button></a> <a href="/acquereurs/'.$row->id.'"><button type="button" class="btn btn-light"><i class="icon ion-md-eye"></i></button></a>'.$del.$row->id.$del2;
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
        $this->authorize('create', Acquereur::class);

        return view('app.acquereurs.create');
    }

    /**
     * @param \App\Http\Requests\AcquereurStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcquereurStoreRequest $request)
    {

        if(Auth::user()){
            $this->authorize('create', Acquereur::class);
            $validated = $request->validated();
    
            $acquereur = Acquereur::create($validated);
    
            return redirect()
                ->route('acquereurs.edit', $acquereur)
                ->withSuccess(__('crud.common.created'));
            
        }else{
            //$validated = $request->validated();
            $acquereur = Acquereur::create($request->all());
            
            $passer = new \stdClass();
            $passer->email = $acquereur->email;
            $passer->nom = $acquereur->nompre;
            $passer->prenom = "";
            if(isset($passer->email)!=false) {
                try{
                    Mail::to($passer->email)->send(new MailAcquereur($passer));
                }catch(\Exception $e){
                
                }
                
                try{
                    Mail::to("challenge-toit@heyz.ci")->send(new InfoService($passer));
                }catch(\Exception $e){
                
                }
            }
    
            return redirect()->route('frontend.op-success');
        }
        
    }
    
    public function store2(Request $request)
    {
        
        $acquereur = Acquereur::create($request->all());
        
        $passer = new \stdClass();
        $passer->email = $acquereur->email;
        $passer->nom = $acquereur->nompre;
        $passer->prenom = "";
        if(isset($passer->email)!=false) {
            try{
                Mail::to($passer->email)->send(new MailAcquereur($passer));
            }catch(\Exception $e){
            
            }
            
            try{
                Mail::to("challenge-toit@heyz.ci")->send(new InfoService($passer));
            }catch(\Exception $e){
            
            }
        }

        return redirect()->route('frontend.op-success');
    
        
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Acquereur $acquereur
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Acquereur $acquereur)
    {
        $this->authorize('view', $acquereur);

        return view('app.acquereurs.show', compact('acquereur'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Acquereur $acquereur
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Acquereur $acquereur)
    {
        $this->authorize('update', $acquereur);

        return view('app.acquereurs.edit', compact('acquereur'));
    }

    /**
     * @param \App\Http\Requests\AcquereurUpdateRequest $request
     * @param \App\Models\Acquereur $acquereur
     * @return \Illuminate\Http\Response
     */
    public function update(
        AcquereurUpdateRequest $request,
        Acquereur $acquereur
    ) {
        $this->authorize('update', $acquereur);

        $validated = $request->validated();

        $acquereur->update($validated);

        return redirect()
            ->route('acquereurs.edit', $acquereur)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Acquereur $acquereur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Acquereur $acquereur)
    {
        $this->authorize('delete', $acquereur);

        $acquereur->delete();

        return redirect()
            ->route('acquereurs.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
