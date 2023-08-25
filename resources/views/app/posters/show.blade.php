@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('posters.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.posters.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.posters.inputs.libel')</h5>
                    <span>{{ $poster->libel ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.posters.inputs.photo')</h5>
                    <x-partials.thumbnail
                        src="{{ $poster->photo ? \Storage::url($poster->photo) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.posters.inputs.project_constuct_id')</h5>
                    <span
                        >{{ optional($poster->projectConstuct)->libel ?? '-'
                        }}</span
                    >
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('posters.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Poster::class)
                <a href="{{ route('posters.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
