@php $editing = isset($projectConstuct) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="libel"
            label="Libel"
            :value="old('libel', ($editing ? $projectConstuct->libel : ''))"
            maxlength="255"
            placeholder="Libel"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.date
            name="date_fin"
            label="Date Fin"
            value="{{ old('date_fin', ($editing ? optional($projectConstuct->date_fin)->format('Y-m-d') : '')) }}"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="descript" label="Descript"
            >{{ old('descript', ($editing ? $projectConstuct->descript : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>
</div>
