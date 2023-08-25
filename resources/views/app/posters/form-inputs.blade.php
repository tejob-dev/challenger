@php $editing = isset($poster) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="libel"
            label="Libel"
            :value="old('libel', ($editing ? $poster->libel : ''))"
            maxlength="255"
            placeholder="Libel"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <div
            x-data="imageViewer('{{ $editing && $poster->photo ? \Storage::url($poster->photo) : '' }}')"
        >
            <x-inputs.partials.label
                name="photo"
                label="Photo"
            ></x-inputs.partials.label
            ><br />

            <!-- Show the image -->
            <template x-if="imageUrl">
                <img
                    :src="imageUrl"
                    class="object-cover rounded border border-gray-200"
                    style="width: 100px; height: 100px;"
                />
            </template>

            <!-- Show the gray box when image is not available -->
            <template x-if="!imageUrl">
                <div
                    class="border rounded border-gray-200 bg-gray-100"
                    style="width: 100px; height: 100px;"
                ></div>
            </template>

            <div class="mt-2">
                <input
                    type="file"
                    name="photo"
                    id="photo"
                    @change="fileChosen"
                />
            </div>

            @error('photo') @include('components.inputs.partials.error')
            @enderror
        </div>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select
            name="project_constuct_id"
            label="Projet enrégistré"
            required
        >
            @php $selected = old('project_constuct_id', ($editing ? $poster->project_constuct_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Faites un choix</option>
            @foreach($projectConstucts as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
