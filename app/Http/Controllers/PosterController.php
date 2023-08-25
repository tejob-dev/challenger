<?php

namespace App\Http\Controllers;

use App\Models\Poster;
use Illuminate\Http\Request;
use App\Models\ProjectConstuct;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PosterStoreRequest;
use App\Http\Requests\PosterUpdateRequest;

class PosterController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Poster::class);

        $search = $request->get('search', '');

        $posters = Poster::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.posters.index', compact('posters', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Poster::class);

        $projectConstucts = ProjectConstuct::pluck('libel', 'id');

        return view('app.posters.create', compact('projectConstucts'));
    }

    /**
     * @param \App\Http\Requests\PosterStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PosterStoreRequest $request)
    {
        $this->authorize('create', Poster::class);

        $validated = $request->validated();
        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('public');
        }

        $poster = Poster::create($validated);

        return redirect()
            ->route('posters.edit', $poster)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Poster $poster
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Poster $poster)
    {
        $this->authorize('view', $poster);

        return view('app.posters.show', compact('poster'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Poster $poster
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Poster $poster)
    {
        $this->authorize('update', $poster);

        $projectConstucts = ProjectConstuct::pluck('libel', 'id');

        return view('app.posters.edit', compact('poster', 'projectConstucts'));
    }

    /**
     * @param \App\Http\Requests\PosterUpdateRequest $request
     * @param \App\Models\Poster $poster
     * @return \Illuminate\Http\Response
     */
    public function update(PosterUpdateRequest $request, Poster $poster)
    {
        $this->authorize('update', $poster);

        $validated = $request->validated();
        if ($request->hasFile('photo')) {
            if ($poster->photo) {
                Storage::delete($poster->photo);
            }

            $validated['photo'] = $request->file('photo')->store('public');
        }

        $poster->update($validated);

        return redirect()
            ->route('posters.edit', $poster)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Poster $poster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Poster $poster)
    {
        $this->authorize('delete', $poster);

        if ($poster->photo) {
            Storage::delete($poster->photo);
        }

        $poster->delete();

        return redirect()
            ->route('posters.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
