# Prueba POK

Hola, esta es la entrega de la prueba técnica . 

## Utilicé

- [Laravel 7.x](https://laravel.com/)
- [Bootstrap 4](https://getbootstrap.com/)
- [Font Awesome](https://fontawesome.com/)


## Consultas SQL

Aqui agregaré las respuestas para el apartado de consultas SQL.

### 2.i

```
SELECT c.id, c.rut, c.nombre, tp.descripcion
FROM cliente c
INNER JOIN cotizacion co ON c.id = co.idCliente 
INNER JOIN cotizacion_producto cp ON co.idCotizacion = cp.idCotizacion 
INNER JOIN producto p ON p.idProducto = cp.idProducto
INNER JOIN tipo_producto tp ON tp.idTipoProducto = p.idTipoProducto
WHERE p.idTipoProducto = 2 and p.sector = "Santiago"
```

### 2.ii

```
SELECT count(p.idProducto) "Productos vendidos"
FROM producto p
INNER JOIN cotizacion_producto cp ON p.idProducto = cp.idProducto
INNER JOIN cotizacion co ON cp.idCotizacion = co.idCotizacion
INNER JOIN usuario u ON co.idUsuario = u.id
WHERE u.nombre = "PILAR" AND u.apellido = "PINO" AND p.estado = "VENDIDO" and p.sector = "Las Condes" AND p.idTipoProducto = 1
```

### 2.iii

```
SELECT *
FROM producto
WHERE fechaCreacion BETWEEN "2018-01-03" and "2018-01-20"
```

### 2.iv

```
SELECT SUM(valorLista)
FROM producto
WHERE sector = "Santiago" and estado = "VENDIDO"
```



