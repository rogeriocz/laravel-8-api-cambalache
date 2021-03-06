
## Api cambalache

Creación de API para proyecto cambalache.

## Documentación de proyecto cambalache

El proyecto esta creado en el framework [Laravel versión 8]( https://laravel.com/docs/8.x). no tiene implementado sistema de autenticación ya que lo único que se requiere es mostrar datos de tipo get, post, delete, y update , para efectos de práctica y aprender a consumir Api desde cualquier frontEnt o lenguaje de programación.

Dentro del framework de laravel se crea tres rutas de tipo api que se encuentran dentro del archivo [api.php]( https://github.com/rogeriocz/laravel-8-api-cambalache/blob/master/routes/api.php), a su vez para estas tres rutas se crean sus respectivos [controladores]( https://github.com/rogeriocz/laravel-8-api-cambalache/tree/master/app/Http/Controllers), [modelos]( https://github.com/rogeriocz/laravel-8-api-cambalache/tree/master/app/Models) y [migraciones]( https://github.com/rogeriocz/laravel-8-api-cambalache/tree/master/database/migrations).

* Los nombres que ocupo para identificar los archivos contienen las palabras type, message y anuncio.

    * Type: se ocupa para darle una categoría a cada anuncio que se genere o se guarde en la tabla anuncio el cual esta relaciona entre anuncio y type.
    * Anuncio: se ocupa para identificar los archivos que servirán para hacer la API anuncio y la tabla.
    * Message: se ocupa para identificar los archivos y tabla que se ocupara de guardar los mensajes que se envíen desde el formulario de contacto.

### Base de datos.
La base de datos que se hicieron pruebas en local es Postgresql y Mysql, puedes configurar los paramtros dentro del archivo .env 

_Postgresql configuración de parámetros en el archivo .env_

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=demo
DB_USERNAME=user
DB_PASSWORD=
```
Mysql configuración de parámetros en el archivo .env_

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=demo_data_base
DB_USERNAME=root
DB_PASSWORD=
```

# Documentación de API 
## Ejemplos Válidos de URLs Anuncios
* Lista de Anuncios:

  * GET http://localhost/api/anuncios

* Lista de anuncios query params type_id, price_min, price_max
  * GET http://localhost/api/anuncios?type_id=1&price_min=1000&price_max=5000
  

* Crear Anuncios:

  * POST http://localhost/api/anuncios
  ```
    {
        "title": "celular usado",
        "description": "samsung ml2345",
        "price": "200",
        "type_id": "1",
        "image": "https://via.placeholder.com/600x600.png/007733?text=technics+ut"
    }
  ```
* Actualiza un Anuncio:

  * PUT http://localhost/api/anuncios/1
  ```
    {
        "title": "celular usado",
        "description": "samsung ml2345",
        "price": "110",
        "type_id": "1",
        "image": "https://via.placeholder.com/600x600.png/007733?text=technics+ut"
    }
  ```
* Elimina un Anuncio:

  * DELETE http://localhost/api/anuncios/50
  ```
    {
       El Anuncio con el id: 50 ha sido eliminado
    }
  ```
## Ejemplos Válidos de URLs Mensajes

* Lista de Mensajes:

  * GET http://localhost/api/emails

* Crear Mensaje:

  * POST http://localhost/api/emails
  ```
    {
        "name": "Rogerio cuervo z",
        "email": "demo@correo.com",
        "message": "Aprender VUE"
    }
  ```
* Actualiza un Mensaje:

  * PUT http://localhost/api/emails/1
  ```
    {
         "name": "Rogerio cuervo z",
        "email": "demo@correo.com",
        "message": "Aprender VUE y Docker"
    }
  ```
* Elimina un Mensaje:

  * DELETE http://localhost/api/emails/1
  ```
    {
       El mensaje con el id: 1 ha sido eliminado
    }
  ```
## Ejemplos Válidos de URLs Tipos

* Lista de Tipos:

  * GET http://localhost/api/types
## Pruebas en postMan
- [Documentación de la API generado por POSTMAN](https://documenter.getpostman.com/view/2148064/TzY68tzK).

## License
Eres libre de descargar el proyecto e instalarlo.
