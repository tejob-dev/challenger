<?php

namespace App\Http\Controllers\Api;

use App\Models\Parraine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ParraineResource;
use App\Http\Resources\ParraineCollection;
use App\Http\Requests\ParraineStoreRequest;
use App\Http\Requests\ParraineUpdateRequest;

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
            ->paginate();

        return new ParraineCollection($parraines);
    }

    /**
     * @param \App\Http\Requests\ParraineStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParraineStoreRequest $request)
    {
        $this->authorize('create', Parraine::class);

        $validated = $request->validated();

        $parraine = Parraine::create($validated);

        return new ParraineResource($parraine);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Parraine $parraine
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Parraine $parraine)
    {
        $this->authorize('view', $parraine);

        return new ParraineResource($parraine);
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

        return new ParraineResource($parraine);
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

        return response()->noContent();
    }
}
