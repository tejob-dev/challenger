<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectConstuct;
use App\Http\Requests\ProjectConstuctStoreRequest;
use App\Http\Requests\ProjectConstuctUpdateRequest;

class ProjectConstuctController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', ProjectConstuct::class);

        $search = $request->get('search', '');

        $projectConstucts = ProjectConstuct::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.project_constucts.index',
            compact('projectConstucts', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', ProjectConstuct::class);

        return view('app.project_constucts.create');
    }

    /**
     * @param \App\Http\Requests\ProjectConstuctStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectConstuctStoreRequest $request)
    {
        $this->authorize('create', ProjectConstuct::class);

        $validated = $request->validated();

        $projectConstuct = ProjectConstuct::create($validated);

        return redirect()
            ->route('project-constucts.edit', $projectConstuct)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProjectConstuct $projectConstuct
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ProjectConstuct $projectConstuct)
    {
        $this->authorize('view', $projectConstuct);

        return view('app.project_constucts.show', compact('projectConstuct'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProjectConstuct $projectConstuct
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ProjectConstuct $projectConstuct)
    {
        $this->authorize('update', $projectConstuct);

        return view('app.project_constucts.edit', compact('projectConstuct'));
    }

    /**
     * @param \App\Http\Requests\ProjectConstuctUpdateRequest $request
     * @param \App\Models\ProjectConstuct $projectConstuct
     * @return \Illuminate\Http\Response
     */
    public function update(
        ProjectConstuctUpdateRequest $request,
        ProjectConstuct $projectConstuct
    ) {
        $this->authorize('update', $projectConstuct);

        $validated = $request->validated();

        $projectConstuct->update($validated);

        return redirect()
            ->route('project-constucts.edit', $projectConstuct)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ProjectConstuct $projectConstuct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ProjectConstuct $projectConstuct)
    {
        $this->authorize('delete', $projectConstuct);

        $projectConstuct->delete();

        return redirect()
            ->route('project-constucts.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
