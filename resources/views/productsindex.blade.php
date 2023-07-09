<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="display-4 mt-5">Lista de Productos</h1>
        <div class="mb-3">
            <form action="{{ route('products.search') }}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Buscar productos por nombre">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>
        </div>
            

        <table class="table table-striped">
            <thead>
                <tr class="table-dark">
                    <th>ID</th>
                    <th>Pais</th>
                    <th>Nombre</th>
                    <th>tipo</th>
                    <th>Acciones</th>

                    <!-- Agrega más columnas según tus necesidades -->
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->Pais }}</td>
                        <td>{{ $product->Nombre }}</td>
                        <td>{{ $product->Tipo_vehiculo }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Ver detalles</a>
                        </td>
                        <!-- Agrega más celdas según tus necesidades -->
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Agrega la paginación -->
        <div class="pagination">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
