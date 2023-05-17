<x-layout>
    <x-layout-admin>
        <h1 class="text-3xl font-fantasy text-center mb-4">Catégorie:</h1>
        <x-layout-admin.form-components.errors />
        <form action="{{ route('create-category') }}" method="post">
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="name" id="name" placeholder="Nom de la catégorie"
                    value="{{ old('name') }}">
                <label for="name">Nom de la catégorie (name) </label>
            </div>
            <button type="submit" class="btn btn-primary bg-tomato">Créer Catégorie +</button>
        </form>
    </x-layout-admin>
</x-layout>
