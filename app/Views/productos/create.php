<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Crear Producto</title>
</head>
<body class="container mt5">
    <h1 class="mb-4">Crear Producto</h1>
    <form action="<?= site_url('productos/store') ?>" method="post">
        <div class="mb-3">
            <label for="" class="form-label">Nombre: </label>
            <input type="text" name="nombre" id="" class="form-control"><br>
            <label for="" class="form-label">Descripción: </label>
            <textarea name="descripcion" id="" class="form-control"></textarea><br>
            <label for="" class="form-label">Cantidad en Existencia: </label>
            <input type="number" name="cantidad_existencia" id="" class="form-control"><br>
            <label for="" class="form-label">Fecha de vencimiento: </label>
            <input type="date" name="fecha_vencimiento" id="" class="form-control"><br>
            <label for="" class="form-label">Tipo de Producto_id: </label>
            <input type="text" name="tipo_producto_id" id="" class="form-control"><br>
        </div>
        <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Guardar
    </form>
    <a href="<?= site_url('productos')?>"><i class="bi bi-arrow-left"></i> Volver</a>
    
</body>
</html>
