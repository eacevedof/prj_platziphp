# prj_platziphp
- [Github - Repo Original](https://github.com/hectorbenitez/curso-introduccion-php)

## Curso completo de php 
- Parte 1: [https://platzi.com/clases/php/](https://platzi.com/clases/php/)
    - [Abajo 1](https://github.com/eacevedof/prj_platziphp#parte-1-curso-de-introducci%C3%B3n-a-php)
- Parte 2: [https://platzi.com/clases/php-avanzado/](https://platzi.com/clases/php-avanzado/)
    - [Abajo 2](https://github.com/eacevedof/prj_platziphp#parte-2-curso-avanzado-de-php)

## Parte 1: [Curso de Introducción a PHP](https://platzi.com/clases/php/)

#### 1. Introducción a PHP
- [1 Presentación del curso 1:00 min]()
- [2 ¿Qué es PHP? 4:00 min]()
- [3 Setup y Herramientas 11:00 min]()

#### 2. Conceptos Básicos de PHP 
- [4 Revisando el template que usaremos 2:00 min]()
- [5 Sintaxis de PHP 5:00 min]()
- [6 Variables tipos de datos y cadenas 9:00 min]()
- [7 Tipos de Datos en PHP 2:00 min]()
- [8 Arreglos 10:00 min]()
- [9 Ejercicios Arreglos 1:00 min]()
- [10 Condicionales y Ciclos 13:00 min]()
- [11 While vs. Do While 2:00 min]()
- [12 Operadores, Condicionales, Continue y Break 14:00 min]()
- [13 Operadores 2:00 min]()
- [14 Ejercicios Operadores 1:00 min]()
- [15 Funciones 13:00 min]()
- [16 Agregando archivos externos 8:00 min](https://platzi.com/clases/1338-php/12928-agregando-archivos-externos/)
    - include: si no existe lanza warning
    - require: si no existe termina con error

#### 3. Programación Orientada a Objetos 
- [17 Programación Orientada a Objetos 13:00 min](https://platzi.com/clases/1338-php/12929-programacion-orientada-a-objetos1172/)
- [18 Constructor y Métodos 10:00 min](https://platzi.com/clases/1338-php/12930-constructor-y-metodos/)
- [19 Herencia 17:00 min](https://platzi.com/clases/1338-php/12931-herencia4055/)
- [20 Herencia y polimorfismo 2:00 min](https://platzi.com/clases/1338-php/16406-herencia-y-polimorfismo9153/)
    - Herencia: permite la reutilizar un código 
    - Polimorfismo: sobreescritura que permite cambiar el comportamiento de un método y por ende de un objeto
- [21 Interfaces 8:00 min](https://platzi.com/clases/1338-php/12932-interfaces6240/)
    - Las interfaces solo usan métodos públicos
- [22 Namespaces 9:00 min](https://platzi.com/clases/1338-php/12933-namespaces8948/) 

#### 4. Herramientas para Proyectos 
- [23 PHP PSR y PHPFIG 2:00 min](https://platzi.com/clases/1338-php/12934-psr-y-phpfig/)
    - Varios programadores se unieron para crear un grupo llamado [PHP-FIG](https://www.php-fig.org) con el objetivo de avanzar en la interoperabilidad de librerías en PHP.
    Este grupo creo el PSR que son recomendaciones y estándares para tu código de PHP.
    - PSR: PHP Standard Recomendations
- [24 Composer 9:00 min](https://platzi.com/clases/1338-php/12935-composer/)
    - PSR4: Standard de autoloading
    - PSR4 es la segunda versión de autoloading, antes PSR0
    - Relación entre rutas físicas de las clases y los namespaces.
    - En composer.json hay que indicar dentro de autoload: psr-4:{...}
    - phar: son archivos de empaquetado completo similar a los .jar de Java
    - A partir de la instalación de composer solo se necesitaría un require_once 'vendor/autoload'

#### 5. Bases de Datos 
- [25 Introducción a las Bases de Datos 3:00 min](https://platzi.com/clases/1338-php/12936-introduccion-a-las-bases-de-datos/)
- [26 ORM 3:00 min](https://platzi.com/clases/1338-php/12937-orm/)
    - Object Relational Mapping
- [27 Formularios 10:00 min](https://platzi.com/clases/1338-php/12938-formularios7301/)
- [28 Eloquent 15:00 min](https://platzi.com/clases/1338-php/12939-eloquent8724/)
    - composer require illuminate/database
    - composer.lock sirve para evitar que se actualice el proyecto con versiones posteriores de modo que no funcione
    - congela también las dependencias
    - nunca se debe subir vendor al repositorio
    - Por convenio se llama capsule al manager:  `use Illuminate\Database\Capsule\Manager as Capsule`
    - deben existir: `created_at` y `updated_at`
    - `$capsule->addConnection([])`
    - métodos: `setAsGlobal()` permite reutilizar esta conexión a nivel global y `bootEloquent()` sirve para trabajar con eventos
- [29 Listar registros de la base de datos con Eloquent 5:00 min](https://platzi.com/clases/1338-php/12940-listar-registros-de-la-base-de-datos-con-eloquent/)
    - Método estático `Job::all()`
    - Por defecto todos los atributos mapeados de la bd en el modelo son públicos (se puede cambiar)
    
- [30 Insertar datos en MySql con PHP 22:00 min](https://platzi.com/clases/1338-php/12941-insertar-datos-en-mysql-con-php/)
    ```php
    class User extends Illuminate\Database\Eloquent\Model {}
    $users = User::where('votes', '>', 1)->get();
    ```

#### 6. Estructura/Arquitectura de una applicacion web 
- [31 Front Controller 12:00 min](https://platzi.com/clases/1338-php/12942-front-controller/)
    - 
- [32 PSR7 14:00 min]()
- [33 Router 10:00 min]()
- [34 MVC, Creando Controllers 12:00 min]()
- [35 MVC Reestructurando Vistas y Controladores 10:00 min]()
- [36 MVC Controller de la entidad Job 9:00 min]()

#### 7. Template engines
- [37 Template engines 4:00 min]()
- [38 Twig 13:00 min]()
- [39 Templates con Twig 11:00 min]()
- [40 Extendiendo Templates con Twig 7:00 min]()

#### 8. Validaciones 
- [41 Validaciones 15:00 min]()

#### 9. Subida de archivos
- [42 Ejemplo de subida de archivos 13:00 min]()
- [43 Tips de seguridad para subir archivos en PHP 2:00 min]()

#### 10. Autenticación de usuarios y manejo de sesiones Reto. 
- [44 Creación de usuarios 2:00 min]()
- [45 Autenticando usuarios 16:00 min]()
- [46 Formulario de Login 10:00 min]()
- [47 Manejo de sesiones 14:00 min]()

#### 11. Liberación de código/release 
- [48 Variables de entorno 8:00 min]()
- [49 Deploy en Heroku 6:00 min]()
- [50 Instalación de pgAdmin 1:00 min]()
- [51 Creando la base de datos en Heroku 6:00 min]()
- [52 Conclusiones del curso 1:00 min]()

## Parte 2: [Curso Avanzado de PHP](https://platzi.com/clases/php-avanzado/)

#### 1 Introducción 
- [1 Introducción 1:00 min]()

#### 2 Herramientas
- [2 Herramientas IDEs 2:00 min]()
- [3 Virtualización 15:00 min]()
- [4 Configuración de virtual host 7:00 min]()

#### 3 Características avanzadas del lenguaje 
- [5 Closures 9:00 min]()
- [6 Type Hinting 6:00 min]()
- [7 Agregar imágenes en Jobs 1:00 min]()
- [8 Salvar imágenes en Jobs 6:00 min]()
- [9 Traits 8:00 min]()
- [10 Endpoint to delete Jobs 9:00 min]()
- [11 Third party Traits - Soft Delete 6:00 min]()

#### 4 Técnicas de programación 
- [12 SOLID 4:00 min]()
- [13 SOLID a profundidad 3:00 min]()
- [14 Inyección de dependencias 9:00 min]()
- [15 Contenedor de inyección de dependencias 8:00 min]()
- [16 Middlewares y PSR15 15:00 min]()
- [17 Implementando el server request handler 11:00 min]()
- [18 Creando un middleware 14:00 min]()

#### 5 Errores y debug 
- [19 Error Handling 13:00 min]()
- [20 La biblioteca SPL 3:00 min]()
- [21 Debug 8:00 min]()
- [22 Xdebug 11:00 min]()
- [23 Logs 12:00 min]()
- [24 Trabajando con Monolog 7:00 min]()

#### 6 Databases 
- [25 Migraciones de bases de datos 14:00 min]()

#### 7 Comandos y Tareas asíncronas 
- [26 Comandos 13:00 min]()
- [27 Formulario para contacto 8:00 min]()
- [28 Emails 10:00 min]()
- [29 Async tasks 14:00 min]()
- [30 Procesar tareas asíncronas 8:00 min]()
- [31 Crear un comando para agregar usuarios 3:00 min]()

#### 8 Seguridad
- [32 Seguridad Security 14:00 min]()
- [33 Security Examples 1:00 min]()

#### 9 Conclusiones 
- [34 Crea una API Rest Cierre 1:00 min]()