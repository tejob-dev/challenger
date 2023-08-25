<?php

namespace App\Http\Controllers;

use App\Models\Parraine;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailParrain;
use App\Mail\InfoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ParraineStoreRequest;
use App\Http\Requests\ParraineUpdateRequest;
use DataTables;

class ParraineController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Parraine::class);

        $search = $request->get('search', '');

        $parraines = Parraine::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.parraines.index', compact('parraines', 'search'));
    }

    public function getParrains(Request $request, $single)
    {
        $del = '<form action="/parraines/';
        $token = csrf_token();
        $del2 = '" method="POST" onsubmit="return confirm(\'Voulez-vous vraiment supprimé?\')"><input type="hidden" name="_token" value="'.$token.'"> <input type="hidden" name="_method" value="DELETE"> <button type="submit" class="btn btn-light text-danger"><i class="icon ion-md-trash"></i></button></form>';
        
        if ($request->ajax()) {
            if($single == 0){
                $data = Parraine::latest()->get();
            }else{
                $data = Parraine::where("id", $single)->get();
            }
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) use($del, $del2, $single, $data){
                    if($single == 0){
                        $actionBtn = '<a href="/parraines/'.$row->id.'/edit"><button type="button" class="btn btn-light"><i class="icon ion-md-create"></i></button></a> <a href="/parraines/'.$row->id.'"><button type="button" class="btn btn-light"><i class="icon ion-md-eye"></i></button></a>'.$del.$row->id.$del2;
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
        $this->authorize('create', Parraine::class);

        return view('app.parraines.create');
    }

    /**
     * @param \App\Http\Requests\ParraineStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParraineStoreRequest $request)
    {

        if(Auth::user()){
            $this->authorize('create', Parraine::class);

            $validated = $request->validated();

            $parraine = Parraine::create($validated);

            return redirect()
                ->route('parraines.edit', $parraine)
                ->withSuccess(__('crud.common.created'));
        }else{
            $validated = $request->validated();

            $parraine = Parraine::create($validated);
            
            $passer = new \stdClass();
            $passer->email = $parraine->eamilp;
            $passer->nom = $parraine->nomprep;
            $passer->prenom = "";
            if(isset($passer->email)!=false) {
                Mail::to($passer->email)->send(new MailParrain($passer));
                // try{
                // }catch(\Exception $e){
                
                // }
                
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

        //$validated = $request->validated();

        $parraine = Parraine::create($request->all());
        
        $passer = new \stdClass();
        $passer->email = $parraine->eamilp;
        $passer->nom = $parraine->nomprep;
        $passer->prenom = "";
        if(isset($passer->email)!=false) {
            Mail::to($passer->email)->send(new MailParrain($passer));
            // try{
            // }catch(\Exception $e){
            
            // }
            
            try{
                Mail::to("challenge-toit@heyz.ci")->send(new InfoService($passer));
            }catch(\Exception $e){
            
            }
        }

        return redirect()->route('frontend.op-success');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Parraine $parraine
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Parraine $parraine)
    {
        $this->authorize('view', $parraine);

        return view('app.parraines.show', compact('parraine'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Parraine $parraine
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Parraine $parraine)
    {
        $this->authorize('update', $parraine);

        return view('app.parraines.edit', compact('parraine'));
    }

    /**
     * @param \App\Http\Requests\ParraineUpdateRequest $request
     * @param \App\Models\Parraine $parraine
     * @return \Illuminate\Http\Response
     */
    public function update(ParraineUpdateRequest $request, Parraine $parraine)
    {
        $this->authorize('update', $parraine);

        $validated = $request->validated();

        $parraine->update($validated);

        return redirect()
            ->route('parraines.edit', $parraine)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Parraine $parraine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Parraine $parraine)
    {
        $this->authorize('delete', $parraine);

        $parraine->delete();

        return redirect()
            ->route('parraines.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
