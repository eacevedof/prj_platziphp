# prj_platziphp
- [Github - Repo Original](https://github.com/hectorbenitez/curso-introduccion-php)

## Curso completo de php Profesor Héctor Benitez
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
    - Es un patrón de diseño
    - Recibirá todas las peticiones y ejecutará un dispatcher
    - Se crea carpeta public
- [32 PSR7 14:00 min](https://platzi.com/clases/1338-php/12943-psr7/)
    - Standard Http Message
    - Usamos una libreria de Zend
    - `composer require zendframework/zend-diactoros`
    - [doc](https://docs.zendframework.com/zend-diactoros/v2/usage/)
    ```php
    $request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
        $_SERVER,
        $_GET,
        $_POST,
        $_COOKIE,
        $_FILES
    );
    
    //en la raiz del proyecto
    RewriteEngine On
    # si ya estamos en la carpeta public con algo no se haga la redirección
    RewriteCond %{THE_REQUEST} /public/([^\s?]*) [NC]
    # cuando se haga la redirección a public que envie un 302
    RewriteRule ^ %1 [L,NE,R=302]
    # cuando encuentre cualquier cosa la mande directo a public
    RewriteRule ^((?!public/).*)$ public/$1 [L,NC]
  
    //en public
    RewriteEngine On
    # si el archivo que estamos pidiendo no es un directorio seguimos probando
    RewriteCond %{REQUEST_FILENAME} !-d
    # si el archivo no existe
    RewriteCond %{REQUEST_FILENAME} !-f
    # se envia la petición a index.php QSA: Query String Append, L: la ultima regla
    # QSA todo lo que mandamos se agrega al querystring
    RewriteRule ^ index.php [QSA,L]
    ```
    - Siempre que se pida la raiz se enviará a public
    - Siempre que se pida algo se enviará a index.php
    - En este punto ya es compatible con psr-7
- [33 Router 10:00 min](https://platzi.com/clases/1338-php/12944-router/)
    - `composer require aura/router`
    - [https://github.com/auraphp/Aura.Router/blob/HEAD/docs/index.md](https://github.com/auraphp/Aura.Router/blob/HEAD/docs/index.md)
    ```php
    use Aura\Router\RouterContainer;
    $routerContainer = new RouterContainer();
    $map = $routerContainer->getMap();
    $request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
        $_SERVER,
        $_GET,
        $_POST,
        $_COOKIE, 
        $_FILES
    );  
    $matcher = $routerContainer->getMatcher();
    $route = $matcher->match($request);
    $route->handler; //devuelve el string, tercer parámetro configurado
    ```
- [34 MVC, Creando Controllers 12:00 min](https://platzi.com/clases/1338-php/12945-mvc-creando-controllers/)
    - Patrón de diseño
    - Los modelos y las vistas nunca deberían hablar entre si.
- [35 MVC Reestructurando Vistas y Controladores 10:00 min](https://platzi.com/clases/1338-php/12946-mvc-reestructurando-vistas-y-controladores/)
    - Se separa la vista con includes
- [36 MVC Controller de la entidad Job 9:00 min](https://platzi.com/clases/1338-php/12983-mvc-controller-de-la-entidad-job/)
    - Cuando enviamos parámetros en POST no lo hacemos en la url sino que lo hacemos dentro del cuerpo de código.
    - Ahora ya tenemos organizado todo en controladores, vistas y modelos además de estár implementados los estandares PSR4 y PSR7. 
    - Ya no trabajamos con $_POST o $_GET usamos **$request->getBody()**
    
#### 7. Template engines
- [37 Template engines 4:00 min](https://platzi.com/clases/1338-php/12984-template-engines/)
- [38 Twig 13:00 min](https://platzi.com/clases/1338-php/12985-twig/)
    - a Symfony Product
    - `composer require twig/twig`
    ```php
    class BaseController 
    {
        protected $oTwigEnviroment;

        public function __construct()
        {
            $oTwigLoader = new \Twig_Loader_Filesystem("../views");
            $this->oTwigEnviroment = new \Twig_Enviroment($oTwigLoader,["debug"=>true,"cache"=>false]);
        }

        public function renderHTML($fileName,$data=[])
        {
            return $this->oTwigEnviroment->render($filename,$data);
        }
    }

    //en otro controlador_hijo.metodo
    echo $this->renderHTML("index.twig",["name"=>$datos,"jobs"=>$jobs]);
    ```
- [39 Templates con Twig 11:00 min](https://platzi.com/clases/1338-php/12986-templates-con-twig/)
    - Twig ya no permite meter php directamente en los .twig
    - Las flechas: `$obj->atributo` ahora se transforman en `obj.atributo`
    - Se define un objeto **$response**
    - `return new HtmlResponse($this->oTwigEnviroment->render($filename,$data));`
    - En el frontcontroller se hace un `echo $response->getBody()`
- [40 Extendiendo Templates con Twig 7:00 min](https://platzi.com/clases/1338-php/12987-extendiendo-templates-con-twig/)
    - **layout.twig**
    - Se crearán bloques que pueden ser remplazables.
    - Los bloques son como variables
    - En la zona dinámica del layout se crea un bloque tipo: `{% block content %}{% endblock %}`
    - Para recubrir los templates hijos se debe incluir las siguientes sentencias:
        ```php
        //archivo twig hijo con zona dinámica
        {% extends "layout.twig" %}

        // se define el bloque que se inyectará en layout.twig.block.content
        {% block content %}
            ...
            todo el contenido a inyectar 
            ...
        {% endblock %}
        ```
#### 8. Validaciones 
- [41 Validaciones 15:00 min](https://platzi.com/clases/1338-php/12991-validaciones/)
    - [`composer require respect/validation`](https://packagist.org/packages/respect/validation)
    - `use Respect\Validation\Validator as v;`
    - con **v::key(...)** se configuran todas las reglas de validación sobre claves del **$_POST**
    - con el metodo `$validator->validate` comprobamos si es válido pero si deseamos podemos forzar una excepción
    - `$validator->assert($postData) lanza una excepción`
    ```php
    try{
        $validator->assert($postData);
        $job = new Job();
        $job->title = $postData["title"];
        $job->description = $postData["description"];
        $job->save();
        $message = "Saved";
    }catch(\Exception $e){
        $message = $e->getMeesage();
    }

    return $this->renderHTML("addJob.twig",["message"=>$message]);
    ```
#### 9. Subida de archivos
- [42 Ejemplo de subida de archivos 13:00 min](https://platzi.com/clases/1338-php/12988-ejemplo-de-subida-de-archivos/)
    - `<form action="/jobs/add" method="post" enctype="multipart/form-data">`
    ```php
    $files = $request->getUploadedFiles();
    //lo ideal es tener un servidor CDN para las imágenes
    $logo = $files["logo"];
    if($logo->getError() == UPLOAD_ERR_OK){
        $fileName = $logo->getClientFilename();
        //antes de llamar a moveTo, el archivo se encuentra en una zona de memoria que usa php
        //para gestionar los archivos intermedios
        $logo->moveTo("uploads/$filename");
    }

    //chmod 777 sobre uploads
    ```
    - se recomienda aplicar unos filtros antes de subir, una buena práctica es aplicar captcha
- [43 Tips de seguridad para subir archivos en PHP 2:00 min](https://platzi.com/clases/1338-php/12989-tips-de-seguridad-para-subir-archivos-en-php/)
    - De ser posible almacena los archivos en un servicio externo a tu aplicación como Amazon S3.
        - [Ejemplo](https://docs.aws.amazon.com/es_es/AmazonS3/latest/dev/UploadObjSingleOpPHP.html)
    - Cuida los permisos.
    - Verifica el tipo de archivo que están subiendo.
    - Limita el tamaño de los archivos permitidos
    - Si tu aplicación usa login
    - Genera un nombre de archivo aleatorio y añade la extensión previamente generada.
    - No confíes sólo en una validación por el lado del cliente, no es suficiente.
    - No uses solo una medida de protección.

#### 10. Autenticación de usuarios y manejo de sesiones Reto. 
- [44 Creación de usuarios 2:00 min](https://platzi.com/clases/1338-php/12993-reto-creacion-de-usuarios/)
    - **Nunca** se guarda en texto plano
    - funciones nativas de php: 
    - **`password_hash(string $password, integer $algo [, array $options])`**
    - **`password_verify()`**
- [45 Autenticando usuarios 16:00 min](https://platzi.com/clases/1338-php/12990-autenticando-usuarios/)
    ```php
    //AuthController.php
    $postData = $request->getParsedBody();
    $user = User::where("email",$postData["email"])->first();
    if($user){
        if(\password_verify($postData["password"], $user->password)){

        }
        else{

        }
    }
    else{

    }
    ```
- [46 Formulario de Login 10:00 min](https://platzi.com/clases/1338-php/12992-formulario-de-login/)
    ```php
    //AuthController.php
    $postData = $request->getParsedBody();
    $user = User::where("email",$postData["email"])->first();
    if($user){
        if(\password_verify($postData["password"], $user->password)){
            $_SESSION["userId"] = $user->id;
            return new \Zend\Diactoros\Response\RedirectResponse("/admin");
        }
        else{
            $responsemsg = "bad credentials";
        }
    }
    else{
        $responsemsg = "bad credentials";
    }
    return $this->renderHTML("login.twig",["responsemsg"=>$responsemsg]);

    //index.php
    foreach($reponse->getHeaders() as $name => $values)
        foreach($values as $value)
            header(sprintf("%s: %s",$name,$value));
    response_code($response->getStatusCode());
    ```
- [47 Manejo de sesiones 14:00 min](https://platzi.com/clases/1338-php/12994-manejo-de-sesiones6416/)
    ```php
    //index.php
    $map->get("admin","/admin",[
        "controller" => ...
        ...
        //se define esta variable extra en la ruta que indica que solo se puede ver el contenido si se ha iniciado sesion        
        "auth" => true 
    ])

    $handlerData = $route->handler;
    ...
    //se trata el nuevo parametro auth
    $needsAuth = $handlerData["auth"] ?? false;
    $sessionUserId = $_SESSION["userId"] ?? false;
    if($needsAuth && !$sessionUserId){
        echo "protected route";
    }

    //authcontroller.php
        if(\password_verify($postData["password"], $user->password)){
            $_SESSION["userId"] = $user->id;
            return new \Zend\Diactoros\Response\RedirectResponse("/admin");
        }
    //logout
        unset($_SESSION["userId"])
        return new RedirectResponse("/login");
    ```

#### 11. Liberación de código/release 
- [48 Variables de entorno 8:00 min](https://platzi.com/clases/1338-php/12995-variables-de-entorno/)
    - [pacagist vlucas/phpdotenv](https://packagist.org/packages/vlucas/phpdotenv)
    - `composer require vlucas/phpdotenv`
    ```php
    //index.php
    ...
    session_start();
    //Dotenv(...) en que directorio debe encontrar el fichero que vamos a importar
    //__DIR__ apunta a public
    $dotenv = new Dotenv\Dotenv(__DIR__."/..");
    $dotenv->load();

    //se crea archivo .env
    DB_HOST=localhost
    DB_NAME=cursophp
    ...
    
    //index.php
    $capsule->addConnection([
        "driver"    => ...
        "host"      => getenv("DB_HOST"),
        ...
    ]);

    //se crea archivo: .env.sample 
    ```
- [49 Deploy en Heroku 6:00 min](https://platzi.com/clases/1338-php/12996-deploy-en-heroku/)
    - se usa la app heroku git
    - `heroku git:remote -a curso-introduccion-php`
- [50 Instalación de pgAdmin 1:00 min](https://platzi.com/clases/1338-php/12997-instalacion-de-pgadmin/)
- [51 Creando la base de datos en Heroku 6:00 min](https://platzi.com/clases/1338-php/12998-creando-la-base-de-datos-en-heroku/)
- [52 Conclusiones del curso 1:00 min](https://platzi.com/clases/1338-php/12999-conclusiones-del-curso1287/)

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