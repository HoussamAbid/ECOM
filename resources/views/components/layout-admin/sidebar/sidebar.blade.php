<div class="d-flex flex-column flex-shrink-0 p-3 bg-danger vh-100 overflow-auto position-fixed">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">Houssam's space</span>
    </a>
    <hr>
    @php
        $menu_elements = [
            'Home' => [
                'text' => 'gestion des clients  ',
                'url' => url('http://127.0.0.1:8000/users'),
            ],
            'element112' => [
                'text' => 'gestion des produits ',
                'url' => url('http://127.0.0.1:8000/admin/products'),
            ],
            'Crear Categoría' => [
                'text' => 'gestion des catégories',
                'url' => url('http://127.0.0.1:8000/admin/categories'),
            ],
            'element10' => [
                'text' => ' emails au clients',
                'url' => route('email-page'),
            ],
            'element88' => [
                'text' => 'gestion des commandes ',
                'url' =>  url('http://127.0.0.1:8000/admin/orders'),
            ],
            'Tienda' => [
                'text' => ' Home',
                'url' => route('store'),
            ],
        ];
    @endphp
    <ul class="nav nav-pills flex-column mb-auto">
        @foreach ($menu_elements as $element)
            @php
                $text = $element['text'];
                $url = $element['url'];
            @endphp

            <li class="nav-item">
                <a class="nav-link text-white" href="{{ $url }}">{{ $text }}</a>
            </li>
        @endforeach
    </ul>
</div>
