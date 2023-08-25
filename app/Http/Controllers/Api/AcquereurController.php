<?php

namespace App\Http\Controllers\Api;

use App\Models\Acquereur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AcquereurResource;
use App\Http\Resources\AcquereurCollection;
use App\Http\Requests\AcquereurStoreRequest;
use App\Http\Requests\AcquereurUpdateRequest;

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
            ->paginate();

        return new AcquereurCollection($acquereurs);
    }

    /**
     * @param \App\Http\Requests\AcquereurStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AcquereurStoreRequest $request)
    {
        $this->authorize('create', Acquereur::class);

        $validated = $request->validated();

        $acquereur = Acquereur::create($validated);

        return new AcquereurResource($acquereur);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Acquereur $acquereur
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Acquereur $acquereur)
    {
        $this->authorize('view', $acquereur);

        return new AcquereurResource($acquereur);
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

        return new AcquereurResource($acquereur);
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

        return response()->noContent();
    }
}
