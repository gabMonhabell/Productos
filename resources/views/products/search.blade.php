<!DOCTYPE html>
<html>
<head>
    <title>Resultados de búsqueda</title>
</head>
<body>
    <h1>Resultados de búsqueda</h1>

    <p>Término de búsqueda: {{ $searchTerm }}</p>

    @if ($products->isEmpty())
        <p>No se encontraron productos.</p>
    @else
        <ul>
            @foreach ($products as $product)
                <li>{{ $product->Nombre }}
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Ver detalles</a>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
