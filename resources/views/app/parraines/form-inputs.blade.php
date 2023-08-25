@php $editing = isset($parraine) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="nomprep"
            label="Nom et prénom du parrain"
            :value="old('nomprep', ($editing ? $parraine->nomprep : ''))"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="eamilp"
            label="Email"
            :value="old('eamilp', ($editing ? $parraine->eamilp : ''))"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="telephonp"
            label="Telephone du parrain"
            :value="old('telephonp', ($editing ? $parraine->telephonp : ''))"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="nomprepp"
            label="Nom et prénom du parrainé"
            :value="old('nomprepp', ($editing ? $parraine->nomprepp : ''))"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="emailpp"
            label="Email"
            :value="old('emailpp', ($editing ? $parraine->emailpp : ''))"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="telephonpp"
            label="Telephone du parrainé"
            :value="old('telephonpp', ($editing ? $parraine->telephonpp : ''))"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
