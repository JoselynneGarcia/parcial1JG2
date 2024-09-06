<!DOCTYPE html>
<html lang="ed">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Editar Producto</title>
</head>
<body class="container-mt5">
    <h1 class="mb-4">Editar Producto</h1>
    <form action="<?= site_url('productos/update')?>" method="post">
        <input type="hidden" name="producto_id" value="<?= $producto['producto_id']?>">

    <div class="mb-3">
        <label for="" class="form-label">Nombre: </label>
        <input type="text" name="nombre" id="" class="form-control" value="<?=$producto['nombre']?>" required><br>
        
        <label for="" class="form-label">Descripción: </label>
        <textarea name="descripcion" id="" class="form-control" required><?=$producto['descripcion']?></textarea><br>
        
        <label for="" class="form-label">Cantidad en Existencia: </label>
        <input type="number" name="cantidad_existencia" id="" class="form-control" value="<?= $producto['cantidad_existencia']?>" required>br
        
        <label for="" class="form-label">Fecha de vencimiento: </label>
        <input type="date" name="fecha_vencimiento" id="" class="form-control" value="<?=$producto['fecha_vencimiento']?>"><br>
        
        <label for="" class="form-label">Tipo de Producto_id: </label>
        <input type="text" name="tipo_producto_id" id="" class="form-control" value="<?=$producto['tipo_producto_id']?>"><br>
    </div>

    <input type="submit" value="Actualizar" class="form-control">
    </form>
    <a href="<?= site_url('productos')?>" class="btn btn-secondary">Cancelar</a>
</body>
</html>