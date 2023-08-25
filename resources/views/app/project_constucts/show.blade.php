@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('project-constucts.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.project_constucts.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.project_constucts.inputs.libel')</h5>
                    <span>{{ $projectConstuct->libel ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.project_constucts.inputs.date_fin')</h5>
                    <span>{{ $projectConstuct->date_fin ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.project_constucts.inputs.descript')</h5>
                    <span>{{ $projectConstuct->descript ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('project-constucts.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\ProjectConstuct::class)
                <a
                    href="{{ route('project-constucts.create') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
