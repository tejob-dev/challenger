<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Challengerpro;
use App\Http\Controllers\Controller;
use App\Http\Resources\ChallengerproResource;
use App\Http\Resources\ChallengerproCollection;
use App\Http\Requests\ChallengerproStoreRequest;
use App\Http\Requests\ChallengerproUpdateRequest;

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
            ->paginate();

        return new ChallengerproCollection($challengerpros);
    }

    /**
     * @param \App\Http\Requests\ChallengerproStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChallengerproStoreRequest $request)
    {
        $this->authorize('create', Challengerpro::class);

        $validated = $request->validated();

        $challengerpro = Challengerpro::create($validated);

        return new ChallengerproResource($challengerpro);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Challengerpro $challengerpro
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Challengerpro $challengerpro)
    {
        $this->authorize('view', $challengerpro);

        return new ChallengerproResource($challengerpro);
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

        return new ChallengerproResource($challengerpro);
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

        return response()->noContent();
    }
}
