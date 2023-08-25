@php $editing = isset($contact) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="nom_prenom"
            label="Nom et prénom"
            :value="old('nom_prenom', ($editing ? $contact->nom_prenom : ''))"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.email
            name="email"
            label="Email"
            :value="old('email', ($editing ? $contact->email : ''))"
            maxlength="255"
            required
        ></x-inputs.email>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="objet"
            label="Objet"
            :value="old('objet', ($editing ? $contact->objet : ''))"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="telephone"
            label="Telephone"
            :value="old('telephone', ($editing ? $contact->telephone : ''))"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="message" label="Message" maxlength="255"
            >{{ old('message', ($editing ? $contact->message : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>
</div>
