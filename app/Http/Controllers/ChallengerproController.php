<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Challengerpro;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailChallengerPro;
use App\Mail\InfoService;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ChallengerproStoreRequest;
use App\Http\Requests\ChallengerproUpdateRequest;
use DataTables;

class ChallengerproController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Challengerpro::class);

        $search = $request->get('search', '');

        $challengerpros = Challengerpro::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.challengerpros.index',
            compact('challengerpros', 'search')
        );
    }

    public function getChallengers(Request $request, $single)
    {
        $del = '<form action="/challengerpros/';
        $token = csrf_token();
        $del2 = '" method="POST" onsubmit="return confirm(\'Voulez-vous vraiment supprimé?\')"><input type="hidden" name="_token" value="'.$token.'"> <input type="hidden" name="_method" value="DELETE"> <button type="submit" class="btn btn-light text-danger"><i class="icon ion-md-trash"></i></button></form>';
        
        if ($request->ajax()) {
            if($single == 0){
                $data = Challengerpro::latest()->get();
            }else{
                $data = Challengerpro::where("id", $single)->get();
            }
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) use($del, $del2, $single, $data){
                    if($single == 0){
                        $actionBtn = '<a href="/challengerpros/'.$row->id.'/edit"><button type="button" class="btn btn-light"><i class="icon ion-md-create"></i></button></a> <a href="/challengerpros/'.$row->id.'"><button type="button" class="btn btn-light"><i class="icon ion-md-eye"></i></button></a>'.$del.$row->id.$del2;
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
        $this->authorize('create', Challengerpro::class);

        return view('app.challengerpros.create');
    }
    
    public function checkdate(Request $request)
    {
        $num = Challengerpro::where("rdventre", $request->rdv)->count();
        if($num >= 2){
            return response()->json("{\"passed\":false}", 200);
        }
        
        return response()->json("{\"passed\":true}", 200);
        
    }

    /**
     * @param \App\Http\Requests\ChallengerproStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChallengerproStoreRequest $request)
    {
        if(Auth::user()){
            $this->authorize('create', Challengerpro::class);

            $validated = $request->validated();

            $challengerpro = Challengerpro::create($validated);

            return redirect()
                ->route('challengerpros.edit', $challengerpro)
                ->withSuccess(__('crud.common.created'));
        }else{
            $validated = $request->validated();

            $challengerpro = Challengerpro::create($validated);
            
            $passer = new \stdClass();
            // $passer->email = $challengerpro->email;
            $passer->nom = $challengerpro->nompre;
            $passer->prenom = "";
            //if(isset($passer->email)!=false) {
                // try{
                //     Mail::to($passer->email)->send(new MailAcquereur($passer));
                // }catch(\Exception $e){
                
                // }
                
            //}
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

            $challengerpro = Challengerpro::create($request->all());
            
            $passer = new \stdClass();
            $passer->email = $challengerpro->email;
            $passer->nom = $challengerpro->nompredirig;
            $passer->prenom = "";
            if(isset($passer->email)!=false) {
                try{
                    Mail::to($passer->email)->send(new MailChallengerPro($passer));
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
     * @param \App\Models\Challengerpro $challengerpro
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Challengerpro $challengerpro)
    {
        $this->authorize('view', $challengerpro);

        return view('app.challengerpros.show', compact('challengerpro'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Challengerpro $challengerpro
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Challengerpro $challengerpro)
    {
        $this->authorize('update', $challengerpro);

        return view('app.challengerpros.edit', compact('challengerpro'));
    }

    /**
     * @param \App\Http\Requests\ChallengerproUpdateRequest $request
     * @param \App\Models\Challengerpro $challengerpro
     * @return \Illuminate\Http\Response
     */
    public function update(
        ChallengerproUpdateRequest $request,
        Challengerpro $challengerpro
    ) {
        $this->authorize('update', $challengerpro);

        $validated = $request->validated();

        $challengerpro->update($validated);

        return redirect()
            ->route('challengerpros.edit', $challengerpro)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Challengerpro $challengerpro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Challengerpro $challengerpro)
    {
        $this->authorize('delete', $challengerpro);

        $challengerpro->delete();

        return redirect()
            ->route('challengerpros.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
