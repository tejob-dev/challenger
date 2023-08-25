@php $editing = isset($acquereur) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="nompre"
            label="Nom et prénom"
            :value="old('nompre', ($editing ? $acquereur->nompre : ''))"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="telephone"
            label="Telephone"
            :value="old('telephone', ($editing ? $acquereur->telephone : ''))"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.email
            name="email"
            label="Email"
            :value="old('email', ($editing ? $acquereur->email : ''))"
            maxlength="255"
        ></x-inputs.email>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.select name="typlog" label="Type du logement">
            @php $selected = old('typlog', ($editing ? $acquereur->typlog : '')) @endphp
            <option value="Villa basse" {{ $selected == 'Villa basse' ? 'selected' : '' }} >Villa basse</option>
            <option value="Appartement" {{ $selected == 'Appartement' ? 'selected' : '' }} >Appartement</option>
            <option value="Villa duplex" {{ $selected == 'Villa duplex' ? 'selected' : '' }} >Villa duplex</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="emplacement"
            label="Emplacement"
            :value="old('emplacement', ($editing ? $acquereur->emplacement : ''))"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.select name="nbrpiece" label="Nombre de pièce">
            @php $selected = old('nbrpiece', ($editing ? $acquereur->nbrpiece : '')) @endphp
            <option value="Studio" {{ $selected == 'Studio' ? 'selected' : '' }} >Studio</option>
            <option value="2 pièces" {{ $selected == '2 pièces' ? 'selected' : '' }} >2 pi ces</option>
            <option value="3 pièces" {{ $selected == '3 pièces' ? 'selected' : '' }} >3 pi ces</option>
            <option value="4 pièces" {{ $selected == '4 pièces' ? 'selected' : '' }} >4 pi ces</option>
            <option value="plus de 4" {{ $selected == 'plus de 4' ? 'selected' : '' }} >Plus de 4</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="budget"
            label="Budget"
            :value="old('budget', ($editing ? $acquereur->budget : ''))"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="apporinit"
            label="Apport initial"
            :value="old('apporinit', ($editing ? $acquereur->apporinit : ''))"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="engagannee"
            label="Engagement annuelle"
            :value="old('engagannee', ($editing ? $acquereur->engagannee : ''))"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.checkbox
            name="peopletype"
            label="Type de personne"
            :checked="old('peopletype', ($editing ? $acquereur->peopletype : 0))"
        ></x-inputs.checkbox>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.select name="nbrannee" label="Nombre année">
            @php $selected = old('nbrannee', ($editing ? $acquereur->nbrannee : '')) @endphp
            <option value="7 ans" {{ $selected == '7 ans' ? 'selected' : '' }} >7 ans</option>
            <option value="10 ans" {{ $selected == '10 ans' ? 'selected' : '' }} >10 ans</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="result1"
            label="Result1"
            :value="old('result1', ($editing ? $acquereur->result1 : ''))"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="result2"
            label="Result2"
            :value="old('result2', ($editing ? $acquereur->result2 : ''))"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.text
            name="result3"
            label="Result3"
            :value="old('result3', ($editing ? $acquereur->result3 : ''))"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>
</div>
