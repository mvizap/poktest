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


## Instalación Proyecto
 
Ante cualquier duda lea la guía oficial de laravel [Official Documentation](https://laravel.com/docs/7.x/installation)


Clonar el repositorio

```git clone https://github.com/mvizap/poktest.git poktest```

Ingresar a la carpeta generada

```cd poktest```

Instalar las dependencias

```composer install```

Copiar el archivo de ejemplo y configure en el archivo .env según sus credenciales

```cp .env.example .env```

Generar una llave del proyecto

    php artisan key:generate
    

(**Para este proyecto se entregó un archivo SQL, el cual debería tener ejecutado para correr este proyecto**)

 
Corra el servidor


```php artisan serve```

Podrá ver el proyecto en  http://localhost:8000 o http://127.0.0.1:8000/



