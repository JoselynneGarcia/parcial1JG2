<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Productos</title>
</head>
<body class="container mt-5">
    <h1 class="mb-4">Productos</h1>
    <a href="<?=site_url('productos/create')?>" class="btn btn-primary mb-3"> Crear nuevo producto</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Producto_id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Cantidad en Existencia</th>
                <th>Fecha de vencimiento</th>
                <th>Tipo de Producto_id</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?= $producto['producto_id']?></td>
                    <td><?= $producto['nombre']?></td>
                    <td><?= $producto['descripcion']?></td>
                    <td><?= $producto['cantidad_existencia']?></td>
                    <td><?= $producto['fecha_vencimiento']?></td>
                    <td><?= $producto['tipo_producto_id']?></td>
                    <td>
                        <a href="<?= site_url('productos/edit/'.$producto['producto_id'])?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="<?= site_url('productos/delete/'.$producto['producto_id']) ?>" class="btn btn-danger btn-sm"  onclick="return confirm('¿Seguro de eliminar?')">Eliminar</a>
                </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>