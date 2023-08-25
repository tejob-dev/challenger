@php $editing = isset($challengerpro) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="nomentr"
            label="Nom de l entreprise"
            :value="old('nomentr', ($editing ? $challengerpro->nomentr : ''))"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="telephone"
            label="Telephone"
            :value="old('telephone', ($editing ? $challengerpro->telephone : ''))"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.date
            name="creation"
            label="Date de creation"
            value="{{ old('creation', ($editing ? optional($challengerpro->creation)->format('Y-m-d') : '')) }}"
            max="255"
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="nompredirig"
            label="Nom prenom du dirigeant"
            :value="old('nompredirig', ($editing ? $challengerpro->nompredirig : ''))"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.select name="typeprog" label="Type du programme">
            @php $selected = old('typeprog', ($editing ? $challengerpro->typeprog : '')) @endphp
            <option value="Programme en cours" {{ $selected == 'Programme en cours' ? 'selected' : '' }} >Programme en cours</option>
            <option value="Programme achevé" {{ $selected == 'Programme achevé' ? 'selected' : '' }} >Programme achevés</option>
            <option value="Programme en démarrage" {{ $selected == 'Programme en démarrage' ? 'selected' : '' }} >Programme en d en démarrage</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.select name="objectif" label="Objectif">
            @php $selected = old('objectif', ($editing ? $challengerpro->objectif : '')) @endphp
            <option value="Des clients" {{ $selected == 'Des clients' ? 'selected' : '' }} >Des clients</option>
            <option value="Un marché de construction" {{ $selected == 'Un marché de construction' ? 'selected' : '' }} >Un marchés de construction</option>
        </x-inputs.select>
    </x-inputs.group>
    
    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="typeentr" label="Type d'enregistrement">
            @php $selected = old('typeentr', ($editing ? $challengerpro->typeentr : '')) @endphp
            <option value="Agence immobilière" {{ $selected == 'Agence immobilière' ? 'selected' : '' }} >Agence immobilière</option>
            <option value="Promoteur immobilier" {{ $selected == 'Promoteur immobilier' ? 'selected' : '' }} >Promoteur immobilier</option>
            <option value="Constructeur" {{ $selected == 'Constructeur' ? 'selected' : '' }} >Constructeur</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="messagacquis"
            label="Acquisition"
            maxlength="255"
            >{{ old('messagacquis', ($editing ? $challengerpro->messagacquis :
            '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.date
            name="rdventre"
            label="Rdventre"
            value="{{ old('rdventre', ($editing ? optional($challengerpro->rdventre)->format('Y-m-d') : '')) }}"
            max="255"
            required
        ></x-inputs.date>
    </x-inputs.group>
</div>
