<style>
.btn-outline-danger {
    font-size: 1rem;
    font-weight: bold;
    color: #ff5c5c;
    text-decoration: none;
    background-color: transparent;
    border: 2px solid #ff5c5c;
    padding: 5px;
    border-radius: 5px;
    transition: all 0.3s ease-in-out;
    font-family: Arial, sans-serif;
}

.btn-outline-danger:hover {
    background-color: #db2400;
    color: #ffffff;
    cursor: pointer;
}

    </style>
<x-layout>
    <x-layout-admin>
        <h1>Liste de produits</h1>
        <a href="http://127.0.0.1:8000/admin/new-product"  class="btn btn-outline-danger btn-sm"> create produits </a><br><hr>
        <a href="{{ route('excel.export') }}" class="btn btn-outline-danger btn-sm">Exporter comme un fichier Excel</a> <hr>

        <div class="mt-3 container">
            <div class="row mb-1">
                <div class="col-12 col-md-4 fs-3">
                    Nom de produits
                </div>
                <div class="col-12 col-md-2 fs-3">
                    Prix
                </div>
                <div class="col-12 col-md-2 fs-3">
                    Action
                </div>
                <div class="col-12 col-md-2 fs-3">
                    Ventes
                </div>
                <div class="col-12 col-md-2 fs-3">
                    Modifier/Supprimer 
                </div>
            </div>
            <hr>
            @foreach ($products as $product)
                <div class="row mb-1">
                    <div class="col-12 col-md-4">
                        {{ $product->name }}
                    </div>
                    <div class="col-12 col-md-2">
                        {{ $product->price }} €
                    </div>
                    <div class="col-12 col-md-2">
                        {{ $product->stock }} Unités
                    </div>
                    <div class="col-12 col-md-2">
                        {{ $product->orders->count() }}
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="col-12 col-md-2 ">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('edit-product', $product->id) }}" class="btn btn-primary h-25">Modifier</a>
                                <form action="{{ route('delete-product', $product->id) }}" method="POST" onsubmit="return confirm('Etes-vous sure ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">supprimer</button>
                                </form>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    
                </div>
            @endforeach
        </div>
    </x-layout-admin>
</x-layout>
