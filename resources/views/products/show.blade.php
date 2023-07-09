<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Producto</title>
    <link rel="stylesheet" href="css/stilo.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card text-center mt-5">
            <div class="card-header text-bg-secondary ">
                Detalles del Producto
            </div>
            <div class="card-body">
                <p>ID: {{ $product->id }}</p>
                <p>Nombre: {{ $product->Nombre }}</p>
                <p>Pais: {{ $product->Pais }}</p>
                <p>Fecha: {{ $product->Actualizacion }}</p>
    
            </div>
            <div class="card-footer text-body-secondary">
                {{ $product->wmi }}
            </div>
        </div>

    </div>
    
    
    
    <!-- Agrega más detalles del producto según tus necesidades -->
</body>
</html>
