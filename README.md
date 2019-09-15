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
- [1 Introducción 1:00 min](https://platzi.com/clases/1462-php-avanzado/16280-introduccion9360/)

#### 2 Herramientas
- [2 Herramientas IDEs 2:00 min](https://platzi.com/clases/1462-php-avanzado/16205-ides/)
    - php-storm
- [3 Virtualización 15:00 min](https://platzi.com/clases/1462-php-avanzado/16204-virtualizacion/)
    - Vagrant y Docker
    - Vagrant
        - Maquinas virtuales completas
    - Docker
        - Pequeños contenedores que tienen instalaciones aisladas de php, mysql, apache y que tenemos que hacer que actuen en conjunto
    - Usaremos Vagrant
        - Vagrant trabaja sobre linux, windows o mac
    - Laravel Homestead (proyecto creado por la comunidad laravel)
        - [Laravel Homestead](https://laravel.com/docs/5.8/homestead)
        - Homestead = Granja
    - Instalamos Vagrant
        - `vagrant -v`
    - Instalamos laravel homestead
        - `vagrant box add laravel/homestead`
        - las imagenes de vagrant ya creadas se llaman box
        - Seleccionamos la opción 3: **virtualbox**
        - Vagrant al ser una maq. virtual necesita un motor que maneje las maquinas virtuales, en este caso **virtualbox**
        - ... mientras se instala la imagen trabajaremos con **homestead** (un repo de git)
        - `git clone ../laravel/homestead.git`
        - `cd homestead`
        - `init.bat` para windows
            - `Homestead initialized`
        - Esto crea un nuevo fichero de config **homestead.yaml**
        - La maquina virtual tiene su pripia ip
        - En el fichero **homestead.yaml**
        ```js
        Vamos a ligar una carpeta en la maq local y  la virtual
        folders:
          - map: <carpeta-local>
            to: <carpeta-en-vagrant> /home/vagrant/code
        sites:
          - map: homestead.test
            to: /home/vagrant/code/public 
          - map: cursophp.test
            to: /home/vagrant/code/curso-introduccion-php/public
            //esto se hizo en el curso pasado. Para el cusrso actual hay que usar el branch 2
        databases:
           - homestead
           - cursophp //agregamos esta bd            
        ```
        - Despues de la descarga de la imágen de vagrant
        - `vagrant up` se creará una nueva mv con nombre **homestead-<numero>** se ejecuta un paso que se llama **aprovisionamiento**
        - instala y/o configura todo lo que necesite para esa mv (importa la "caja" base **laravel/homestead**)
        - despues de la instalación vamos a "levantar" la caja base 
        - vamos al dir: **homestead**
        - `vagrant up` crea la mv si no existe (y ejecuta el provisionamiento) sino la reinicia 
- [4 Configuración de virtual host 7:00 min](https://platzi.com/clases/1462-php-avanzado/16206-configuracion-de-virtual-host/)
    - De momento no podemos acceder al proyecto
    - Configuramos el archivo **hosts**
        - 192.168.11.10 cursophp.test 
    - entramos en el navegador a: cursophp.test
    - `vagrant ssh` entramos por consola a la maq virtual
    - `cd code; ls; cd curso-introduccion-php; composer install`
    ```js
    //entrando a la bd
    host:     localhost
    username: homestead
    password: secret
    database: cursophp
    ssh host: 192.168.11.10
    ssh user: vagrant
    ssh pass: vagrant
    ```
    - se crea una tabla **jobs** y ya funciona el proyecto
#### 3 Características avanzadas del lenguaje 
- [5 Closures 9:00 min](https://platzi.com/clases/1462-php-avanzado/16208-closures8895/)
    - son variables tipo funciones
    ```php
    $closure = function(){
        echo "hola"
    }
    $closure(); //se muestra hola

    $limitmonths = 15
    $filterfn = function($job) use($limitmonths) {
        return $job["months"] >= $limitmonths;
    }

    $jobs = array_filter($jobs->toArray(),$filterfn);
    ```
- [6 Type Hinting 6:00 min](https://platzi.com/clases/1462-php-avanzado/16207-type-hinting/)
    - A partir de la version de php 7.1 existe esta caracteristica
- [7 Agregar imágenes en Jobs 1:00 min](https://www.youtube.com/watch?v=P06lOrg8Oig)
    - document con tarea
- [8 Salvar imágenes en Jobs 6:00 min](https://platzi.com/clases/1462-php-avanzado/16209-salvar-imagenes-en-jobs/)
    - Se aplica herencia simple
    - Uso de Traits (existen también en Ruby)
    - Se agrega columna **image** tipo texto
    - [/app/Controllers/JobsController.php](https://github.com/eacevedof/prj_platziphp/blob/master/app/Controllers/JobsController.php)
    ```php
    use Respect\Validation\Validator as v;
    ...
    if ($request->getMethod() == 'POST') {
        $postData = $request->getParsedBody();
        $jobValidator = v::key('title', v::stringType()->notEmpty())
                ->key('description', v::stringType()->notEmpty());
        try {
            $jobValidator->assert($postData);
            $postData = $request->getParsedBody();
            $files = $request->getUploadedFiles();
            $logo = $files['logo'];
            if($logo->getError() == UPLOAD_ERR_OK) {
                $fileName = $logo->getClientFilename();
                $fullPath = "uploads/$fileName";
                $logo->moveTo($fullPath);
            }
            $job = new Job();
            $job->title = $postData['title'];
            $job->description = $postData['description'];
            $job->image = $fullPath;
            $job->save();
    ```
- [9 Traits 8:00 min](https://platzi.com/clases/1462-php-avanzado/16210-traits6325/)
    - [app/Traits/HasDefaultImage.php](https://github.com/eacevedof/prj_platziphp/blob/master/app/Traits/HasDefaultImage.php)
- [10 Endpoint to delete Jobs 9:00 min](https://platzi.com/clases/1462-php-avanzado/16211-endpoint-to-delete-jobs/)
    - Borrado fisico
    ```php
    public function deleteAction(ServerRequest $request) {
        $this->jobService->deleteJob($request->getAttribute('id'));
        return new RedirectResponse('/jobs');
    }
    ```
    - Interesante función **compac('nombre_var_definida')**
        - hace un tipo de explode devolviendo un array tipo `["nombre_var_definida"=>$nombre_var_definida]`
- [11 Third party Traits - Soft Delete 6:00 min](https://platzi.com/clases/1462-php-avanzado/16212-third-party-traits-soft-delete/)
    - Soft delete (borrado lógico)
    - [Eloquent - Soft Deleting](https://laravel.com/docs/5.8/eloquent#soft-deleting)
    - Método **obj::withTrashed()->where(..)->get()**
        - Devuelve todo incluso lo que se ha borrado por flag

#### 4 Técnicas de programación 
- [12 SOLID 4:00 min](https://platzi.com/clases/1462-php-avanzado/16214-solid/)
    - Principios de Robert C. Martin
        - ![Solid - Robert C. Martin](https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Robert_Cecil_Martin.png/330px-Robert_Cecil_Martin.png)
    - 1 Responsabilidad única (**S**ingle responsability)
        - Ejemplo dos responsabilidades:
            - Clase que lee una tabla de la base de datos y pinta un html
            - Podría acarrear el problema de que si se modifica la parte de renderizado y por esto ocurra un error, la clase deje de operar correctamente en la consulta a la bd.
    - 2 Abierto - Cerrado (**O**pen - closed) 
        - Clases abiertas a la extensión 
        - Cerradas a la modificación
        - Que las clases esten preparadas para ser hereadas y que si se tiene que usar una funcionalidad concreta no acarree modificar la clase padre. Esto se puede llevar acabo con interfaces o inyección de dependencias
    - 3 Sustitución de Liskof (**L**iskov substitution principle)
        - Si tengo una clase padre que la estoy usando en distintos puntos de mi app debería poder substituirla por cualquiera de sus hijas sin crear ningún conflicto
        - Es decir, las clases hijas deben implementar todo los métodos públicos de la clase padre
    - 4 Segregación de interfaces (**I**nterface segregation principle)
        - Supongamos que tenemos una interfaz que **clona** y **copia**
        - Tenemos un objeto que solo necesita clonar o copiar
        - Estos objetos estarían implementando una interfaz que haría ambas cosas
        - En este caso deberiamos tener dos interfaces: 
            - **IClone** 
            - **ICopy**
        ```php
        interface IClone {}
        interface ICopy {}
        ...
        class Cloner implements IClone {}
        class Copier implements ICopy {}
        class Mixed implements IClone, ICopy {}
        ```
    - 5 Inversión de dependencias (**D**ependency inversion principle)
        - Trata de desacoplar el código
        - Cuando tienes una clase donde haces instancia de otra clase:
            ```php
            //ejemplo de acople permanente
            class A {
                private $oB;
                public function __construct(){
                    $this->oB = new B();
                }
            }
            ```
        - Si quisieramos extender **A** substituyendo **`$this->oB`** por otra clase no podríamos
            - `$this->oB = new C()` para esto habría que modificar el construct de **A**
        - Con la inyección de dependencias se agregarían (o inyectarían) desde otra forma
        - Como se haría esto? **siguiente clase :)**
        - > La **inyección** de dependencias es una parte fundamental de la **inversión** de dependencias
- [13 SOLID a profundidad 3:00 min](https://platzi.com/clases/1462-php-avanzado/16234-solid-a-profundidad5654/)
    - Lectura 
    ```php
    //v1
    //código acoplado y multifunción
    class Reporter 
    {
        public function getExpensesReport($idReport) {
            $expenses = $this->queryDBToGetExpenses($idReport);
            return $this->renderHTML($expenses);
        }
        … // El código de las funciones va aquí
    }
    
    //v2
    //Aplicamos Responsabilidad única
    //no estariamos cumpliendo con la inversión de dependencias por Reporter::__construct()
    class ExpensesRepository {
        public function getExpensesForReport() {...}
    }//ExpensesRepository

    class ExpensesReportHTMLFormatter {
        public function renderHTML($expenses) {...}
    }//ExpensesReportHTMLFormatter

    class Reporter {
        private $repository;
        private $formatter;

        public function __construct() {
            $this->repository = new ExpensesRepository();
            $this->formatter = new ExpensesReportHTMLFormatter();
        }

        public function getExpensesReport($idReport) {
            $expenses = $this->repository->getExpensesForReport($idReport);
            return $this->formatter->renderHTML($expenses);
        }
    }//Reporter

    //v3 
    //Se inverte el control de las dependencias
    //de ser instanciadas en el cuerpo de __construct se inverte y se inyecta como parámetros
    class Reporter {
        private $repository;
        private $formatter;

        //inyeccion de dependencias
        public function __construct(ExpensesRepository $repo, ExpensesReportHTMLFormatter $formatter) {
            $this->repository = $repo;
            $this->formatter = $formatter;
        }

        public function getExpensesReport($idReport) {
            $expenses = $this->repository->getExpensesForReport($idReport);
            return $this->formatter->renderHTML($expenses);
        }    
    }//Reporter

    //v4
    //Esto no resuelve el poder regresar los valores usando otro formato
    //aplicamos la otra premisa de la inversion de dependencias que es: no depender de clases sino de abstracciones
    interface ExpensesReportFormatterInterface {
	    public function render($expenses);
    }
    
    class ExpensesReportHTMLFormatter implements ExpensesReportFormatterInterface {
        public function render($expenses) {...}
    }    

    class ExpensesReportJSONFormatter implements ExpensesReportFormatterInterface {
        public function render($expenses) {...}
    }
       
    class Reporter {
        private $repository;
        private $formatter;

        public function __construct(
            ExpensesRepository $repo, 
            //el formatter ahora puede ser Json o Html
            ExpensesReportFormatterInterface $oIFormatter) 
        {
            $this->repository = $repo;
            $this->formatter = $oIFormatter;
        }

        public function getExpensesReport($idReport) {
            $expenses = $this->repository->getExpensesForReport($idReport);
            return $this->formatter->render($expenses);
        }
    }//Reporter
    ```
    - Duda, `ExpensesRepository $repo,` esto no tendría que ser una inyección de interfaz?
- [14 Inyección de dependencias 9:00 min](https://platzi.com/clases/1462-php-avanzado/16215-inyeccion-de-dependencias6997/)
    - Se usa en varios frameworks
    - Al tener tanto código en los controladores si se desea reutiliza el código habría que duplicarlo
    - Entra la figura de **Services**
    - [app/Services/JobService.php](https://github.com/eacevedof/prj_platziphp/blob/master/app/Services/JobService.php)
        - con método `public function deleteJob($id) {`
    ```php
    //en lugar de construir el jobService en deleteAction vamos a aplicar la inyección de dependencias
    //para esto se usa una variable privada y se retoca el __construct()
    class JobsController extends BaseController {
        private $jobService;
        public function __construct(JobService $jobService)
        {
            parent::__construct();
            $this->jobService = $jobService;
        }
    //esto daría eror ya que en ningún momento estamos pasando al constructor (desde el frontcontroller)
    //una instancia de JobService
    ```
- [15 Contenedor de inyección de dependencias 8:00 min](https://platzi.com/clases/1462-php-avanzado/16216-contenedor-de-inyeccion-de-dependencias/)
    ```php
    //podriamos hacer esto en el frontcontroller
    if($controllerName == "App\Controller\JobsController")
        $controller = new $controllerName(new \App\Services\JobsServices())
    else
        $controller = new $controllerName
    
    //esto no es muy robusto
    //que pasaría si JobsServices también necesitaría un parámetro?
    ```
    - Existen patrones de diseño que estan pensados para solucionar problemas de este estilo
    - El patrón **factory** por ejemplo
    - **abstractfactory** que permitiría crear diferentes tipos de objetos
    - Vamos a implementar un **contenedor** de inyección de dependencias que se encargará de esta tarea
    - Revisará las dependencias implicadas y las agregará al código
    - usaremos [composer require php-di/php-di](https://packagist.org/packages/php-di/php-di)
    - Nos apoyaremos en el **typehinting** para que el paquete sepa que es lo que tiene que inyectar **autowriting**
    - Inicialmente esta solución está bien, pero si se desea desacoplar más se podría usar **clases abstractas** y para eso si habría que definir ciertas **reglas de configuración** **expresive configuration** para explicarle a contenedor que:
    - > ...en esta clase que depende de esta clase abstracta quieres que se introduzca una clase hija concreta
    - homestead ya viene con composer incluido 
    ```php
    //creando el contenedor
    $oInjectContainer = new DI\Container();
    //si desearamos agregar reglas de configuración lo hariamos usando \Di\ContainerBuilder();
    $oInjectBuilder = new Di\ContainerBuilder();
    $oInjectBuilder->...
    $oInjectContainer = $oInjectBuilder->build();
    ...
    //en index.php (frontcontroller)
    //el inyector detecta, para el caso de JobsController, que necesita JobsService entonces lo inyecta
    $controller = $oInjectContainer->get($controllerName);
    ```
- [16 Middlewares y PSR15 15:00 min](https://platzi.com/clases/1462-php-avanzado/16281-middlewares-y-psr157700/)
    - [www.php-fig.org/psr/psr-15/](https://www.php-fig.org/psr/psr-15/)
    - ![psr15 - Middlewares](https://trello-attachments.s3.amazonaws.com/5d7383cbd9f3313700b066f2/1154x809/2977c884986fd7afae1962fb0540dbb0/image.png)
    - ![psr15 - phpfig](https://trello-attachments.s3.amazonaws.com/5d7383cbd9f3313700b066f2/1045x100/ff90d39e0eb83ba50da78d080ec86872/image.png)
    - Se pueden ver como filtros en los cuales se puede inyectar cierta funcionalidad de modo que una petición pase al core de la app si y solo sí ha cumplido ciertas reglas
    - Por ejemplo, aqui se podría ejecutar:
        - La autenticación
        - Revisión de permisos
        - Revisar si es una llamada desde una API o una app
    - Con los ejemplos anteriores, si en la primera capa no se cumple algúna de estas se delega la respuesta a otro punto fuera de nuestro core
    - Ya se tiene una forma de gestionar la respuesta con el ServerRequestHandler, se cambiará para que se pueda implementar los middlewares
    ```php
    //index.php (frontcontroller)
    ...
    //esta parte del código es lo que se define como el server request handler
    $response = $controller->$actionName($request);
    foreach($response->getHeaders() as $name=>$values)
    {
        foreach($values as $value){
            header(sprintf("%s: %s", $name, $value), );
        }
    }
    http_response_code($response->getStatusCode());
    echo $response->getBody();
    ```
    - **Harmony** was born to be a totally flexible and almost invisible framework for your application.
    - Harmony fomenta que se trabaje con ciertas funcionalidades concretas de los frameworks y no con todo el framework. [Leer: Frameworks dont make sense](https://catonmat.net/frameworks-dont-make-sense)
    - Instalación de **harmony** `composer require woohoolabs/harmony`
    - Siempre que trabajemos con librerias PSR estas ofrecen las interfaces que cumplen con el standard
    - En el caso de **harmony** tiene dependencias de:
        - **psr/http-server-handler**
        - **psr/http-server-middleware**
    - **harmony** recomienda usar: 
        - **nikic/fast-route** Permite usar el enrutador de middleware por defecto
        - **zendframework/zend-httphadlerrunner** Permite usar el middleware emisor por defecto de respuestas HTTP 
        - Nosotros usamos **Aura\Router** en lugar de fast-route ~~que al cumplir con el psr son compatibles, es decir, se puede sustituir uno por otro.~~
    - Instalación del SapiEmitter: `composer require zendframework/zend-httphandlerrunner`
        - `use Zend\HttpHandlerRunner\Emitter\SapiEmitter`
        - Este ejecuta una **RequestHandlerInterface** y emite respuestas generadas por la petición
    - Hay un problema con AuraRouter ya que no es compatible con psr15 (si lo es con **psr7 Http Message Interface**)
    - Hay que instalar un wrapper (adpater) para que haga **Aura\Router** compatible con **psr15 HTTP Server Request Handlers**
    - Instalamos un middleware wrapper: `composer require middlewares/aura-router`
        - [Repo Middlewares](https://github.com/middlewares)
        - Dependencias:
        - `psr/http-factory`
        - `middlewares/utils`
        - `middlewares/aura-router`
    ```php
    //ejemplo en https://packagist.org/packages/woohoolabs/harmony
    use WoohooLabs\Harmony\Harmony;
    use WoohooLabs\Harmony\Middleware\FastRouteMiddleware; //usamos aura
    use WoohooLabs\Harmony\Middleware\DispatcherMiddleware;
    use WoohooLabs\Harmony\Middleware\HttpHandlerRunnerMiddleware;
    use Zend\Diactoros\ServerRequestFactory;
    use Zend\Diactoros\Response;
    use Zend\HttpHandlerRunner\Emitter\SapiEmitter;

    $harmony = new Harmony(ServerRequestFactory::fromGlobals(), new Response());
    $harmony
        ->addMiddleware(new HttpHandlerRunnerMiddleware(new SapiEmitter()))
        ->addMiddleware(new FastRouteMiddleware($router))
        ->addMiddleware(new DispatcherMiddleware())
        ->run();
    ```
    - Refactor del **server request handler** usando **Harmony**
    ```php
    //el código anterior (server request handler) se refactoriza así:
    //index.php (frontcontroller)
    ...
    use Aura\Router\RouterContainer;

    //el request que ya tenemos
    $request = Zend\Diatoros\ServerRequestFactory:.fromG...(...);

    $routeContainer = new RouterContainer();
    $map = $routerContainer->getMap();
    $map->get(...);
    $map->get(..:);
    ....

    $harmony = new Harmony($request, new Response());
    $harmony
        //el HttpHandlerRunnerMiddleware no lo tenemos en "use" hay que agregarlo
        //lo mismo con SapiEmitter. SappiEmiter está en zendframework/zend-httphandlerrunner
        //es un middleware que va a emitir la respuesta
        ->addMiddleware(new HttpHandlerRunnerMiddleware(new SapiEmitter()))
        //En lugar de FastRouteMiddleware tenemos Aura\Router
        //->addMiddleware(new FastRouteMiddleware($router))
        ->addMiddleware(new Middlewares\AuraRouter($routerContainer))
        //tenemos que importar este DispatcherMiddleware
        ->addMiddleware(new DispatcherMiddleware())
        ->run();
    /*
    $response = $controller->$actionName($request);
    foreach($response->getHeaders() as $name=>$values)
    {
        foreach($values as $value){
            header(sprintf("%s: %s", $name, $value), );
        }
    }
    http_response_code($response->getStatusCode());
    echo $response->getBody(); 
    */
    ```
    - En este punto el refactor da un error en el **DispatcherMiddleware()** ya que no comprende los parámtros de los **$map**. Se resolverá en el prox capítulo
- [17 Implementando el server request handler 11:00 min](https://platzi.com/clases/1462-php-avanzado/16282-implementando-el-server-request-handler7049/)
    - Revisamos el código fuente de **DispatcherMiddleware** y ponemos trazas para ver como trata el **request-handler**
    - El problema está que en el constructor hay que pasar como segundo parámetro un string "action" y no un array request-handler
    ```php
    //index.php
    ...
    //contenedor de inyección de dependencias
    $container = new DI\Container();
    ...
    //originalmente se tiene configurada la ruta así:
    $map->get("index","/",["controller"=>"App\Controller\IndexController","action"=>"indexAction"]);
    //DispatcherMiddleware espera algo como (que no sea asociativo):
    $map->get("index","/",["App\Controller\IndexController","indexAction"]);
    ...
    //todo esto ya no se va a usar porque se gestiona ahora con los middlewares
    //$handlerData = $route->handler;
    //$controllerName = $handlerData["controller"];
    //$actionName = $handlerData["action"]; 
    //$needsAuth = $handlerData["auth"] ?? false;

    //$sessionUserId = $_SESSION["userId"] ?? null;
    //if($needsAuth && !$sessionUserId){
    //    echo "Protected route";
    //    die;
    //}

    $harmony = new H...
    ...
        //DispatcherMiddleware(oContInyeccionDependencias, accion)
        //->addMiddleware(new DispatcherMiddleware())
        ->addMiddleware(new DispatcherMiddleware($container,"request-handler"))
        ->run();

    /*
    $response = $controller->$actionName($request);
    //envia los encabezados
    foreach($response->getHeaders() as $name=>$values)
    {
        foreach($values as $value){
            header(sprintf("%s: %s", $name, $value), );
        }
    }
    http_response_code($response->getStatusCode()); //envia el estado 
    echo $response->getBody();  //envía el cuerpo
    */
    ```
    - Tip: `is_callable($action)` detecta si es un closure
    - Ya no controlamos:
        - como se envia la respuesta
        - como se hace el dispatcher: `new Controller(..)`
        - como se detecta el controlador y la acción
    - El **DispatcherMiddleware** llamará el controlador y la acción
    - El **SapiEmitter**:
        - tiene un método principal: **public function emit(ResponseInterface $response):bool**
        - Verifica que no haya una salida (un echo u output x)
        - Envia los encabezados
        - Envía el estado de la respuesta
        - Envía el cuerpo
- [18 Creando un middleware 14:00 min](https://platzi.com/clases/1462-php-avanzado/16283-creando-un-middleware8452/)
    - Se crea una carpeta middlewares
    - Clase: **AuthenticationMiddleware**
    - Para que nuestro middleware funcione sobre **PSR-15 HTTP Server Request Handlers** debemos implenetar la interfaz correspondiente
    - [AuthenticationMiddleware.php](https://github.com/eacevedof/prj_platziphp/blob/master/app/Middlewares/AuthenticationMiddleware.php)
    - El **RequestHandlerInterface** gestionará la ejecución en Pipeline, lanzará el **next**
    - El middleware puede usarse antes o despues de la capa de la aplicación
    - No podemos colocarlo antes del
    ```php
    namespace App\Middlewares;

    use Psr\Http\Server\MiddlewareInterface;    //interfaz middleware
    use Psr\Http\Message\ServerRequestInterface;//interfaz request
    use Psr\Http\Server\RequestHandlerInterface;//interfaz request handler (psr-15)
    use Psr\Http\Message\ResponseInterface;     //interfaz response

    //implementa ResponseInterface
    use Zend\Diactoros\Response\EmptyResponse;  //respuesta vacia con status

    class AuthenticationMiddleware implements MiddlewareInterface
    {
        /**
        * Process an incoming server request.
        * Processes an incoming server request in order to produce a response.
        * If unable to produce the response itself, it may delegate to the provided
        * request handler to do so.
        * @param ServerRequestInterface $request
        * @param RequestHandlerInterface $handler
        * @param ResponseInterface
        */
        public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
        {
            if (substr($request->getUri()->getPath(), 0, 6) === '/admin') {
                $sessionUserId = $_SESSION['userId'] ?? null;
                if (!$sessionUserId) {
                    //acaba el pipeline
                    return new EmptyResponse(401);
                }
            }
            //llama al siguiente middleware
            return $handler->handle($request);
        }//process

    }//class AuthenticationMiddleware

    //en index.php
    $harmony = new Harmony($request, new Response());
    $harmony
        //este, el SapiEmitter es el que devuelve la respuesta final, antes de este no puede ir ninguno
        ->addMiddleware(new HttpHandlerRunnerMiddleware(new SapiEmitter()))
        ->addMiddleware(new Middlewares\AuraRouter($routerContainer))  //comprueba si la ruta existe
        ->addMiddleware(new \App\Middlewares\AuthenticationMiddleware()) //comprueba si ha usuario en sesion
        ->addMiddleware(new DispatcherMiddleware($container,"request-handler"))
        ->run();    
    ```

#### 5 Errores y debug 
- [19 Error Handling 13:00 min](https://platzi.com/clases/1462-php-avanzado/16285-error-handling5612/)
    ```php
    //si no llega un id delete daria un 
    //Fatal error: Uncaught Error call to a member function delete on null
    //esto lo podemos interceptar con un try catch o podemos crear nuestra excepcion
    class JobsService
    {
        public function deleteJob($id){
            //$job = Job::find($id);
            //if(!$job)
                //throw new \Exception("job not found");

            //alternativa al cod anterior que lanza una excepción
            //en caso de error
            $job = Job::findOrFail($id); 
            $job->delete();
        }
    }

    //index.php
    ...
    if(!$route)
    {
        echo "no route";
    }
    else
    {
        try {
            $harmony = new Harmony(...)
            $harmony
                ->addMiddleware(...)
            ...
        }
        //aqui se escucharia todas las excepciones lanzadas por el programador con:
        //throw new \Exception(mensaje);
        catch(Exception $oEx)
        {
            $emitter = new SapiEmitter();
            //400 indica que el parámetro enviado es incorrecto
            $emitter->emit(new Response\EmptyResponse(400));//emite la respuesta
            //con 400+EmptyResponse se muestra una página cruda de error
            //esta se podría customizar a otra con mejor diseño
        }
        //son acciones inválidas que se intenta hacer, division por cero, sumar objetos, etc
        //es decir, es un error del programador y no está controlado 
        catch(Error $oErr)
        {
            $emitter = new SapiEmitter();
            $emitter->emit(new Response\EmptyResponse(500));
        }
    }
    ```
    - La diferencia entre errores y excepciones es que las segundas son enviadas por el programador
    - Los errores son acciones que php detecta que no pueden ser realizadas, por ejemplo llamar una función delete en un objeto null
    - A partir de php 7 si podemos capturar los errores 
    - En php.net se puede ver la Jerarquía de errores:
        - Throwable (Interfaz que hace que se puedan gestionar con try...catch)
            - Error
                - ArithmeticError
                    - DivisionByZeroError
                - AssertionError
                - ParseError
                - TypeError
                    - ArgumentCountError
            - Exception
    - No debemos de Implementar nunca la interfaz Trhowable sino tenemos que heredar de Exception
    - Podemos agregar un catch para cada caso y así evitar que la excepcion sea tan genérica
    - **SPL** Biblioteca estándar de PHP
    - Aqui podemos ver una lista de excepciones que podemos devolver
        - BadFunctionCallException, DomainException, LogicException, RangeException, UnderflowException ...
- [20 La biblioteca SPL 3:00 min](https://platzi.com/clases/1462-php-avanzado/16233-la-biblioteca-spl/)
```
La biblioteca SPL (Standard PHP Library) es un conjunto de Clases e Interfaces para PHP que fue diseñada para ayudarnos con nuestras aplicaciones. SPL se distribuye directamente con PHP desde su versión 5.0 y aunque no es obligatorio usarla, el aprender de ella te permitirá tener un mejor código, más robusto y también más orientado a objetos.

Uno de los puntos más usados en el pasado fue la función spl_autoload_register que nos permitía indicar a nuestro código la forma en la que haríamos el autocargado de clases, obviamente esto ya no es tan usado (al menos ya no lo hacemos de forma manual) debido a que podemos solucionar el problema usando composer, pero en su momento fue una herramienta muy popular y usada dentro de las aplicaciones PHP.

Además de spl_autoload_register, SPL nos ofrece otras herramientas muy interesantes para nuestro código:

Iteradores
Los iteradores sirven para recorrer conjuntos de elementos. Un iterador es un objeto que sirve para recorrer algo. En esta area SPL nos ofrece muchas clases nuevas que mejoran drásticamente la forma en la que escribimos código, entre las clases más populares nos encontramos con ArrayIterator que sirve para recorrer arreglos optimizando la memoria usada por el sistema y DirectoryIterator que nos permite recorrer los archivos y las carpetas de una ubicación.

En caso de que ninguna clase cumpla con lo que queremos hacer, SPL también nos ofrece ciertas interfaces que nos permitirán mejorar la forma en la que usaremos nuestros objetos, por ejemplo podemos implementar la Interfaz Iterator si queremos que nuestro objeto pueda ser iterado o podemos implementar la interfaz ArrayAccess si queremos usar la sintaxis de acceso a elementos tipo arreglo en nuestros objetos, por ejemplo $object[0].

Estructuras de Datos
Los arrays dentro de PHP son muy versátiles, sin embargo es verdad que no solucionan todas las funciones que a veces necesitamos, en lugar de que intentemos forzar la forma en la que usamos los arrays, una buena idea siempre será echar un ojo a las estructuras que SPL nos ofrece.

Entre las estructuras más usadas dentro de SPL podemos encontrar listas, pilas y colas, las cuales sin lugar a dudas darán mucha más claridad a lo que estamos intentando resolver dentro de nuestra aplicación.

Excepciones
A la hora de enviar excepciones para indicar que ocurrió un error, la forma más sencilla de hacerlo es utilizando la clase Exception, sin embargo SPL nos ofrece una variedad mayor de excepciones, las cuales podemos aprovechar para tener un mejor control de los errores que ocurren en nuestra app.

Por ejemplo LogicException y sus derivadas indican que se encontró un error que probablemente es culpa de nosotros como programadores, algo estamos haciendo mal y debemos tratar de evitar que esto llegue a producción.

Por otro lado RuntimeException y sus derivadas nos indican que algo pasó y no teníamos control de eso durante el desarrollo, por ejemplo una conexión interrumpida a la base de datos o algún archivo al que no podemos acceder, y aunque esto podría pasar en producción, el controlar bien las excepciones nos permitirá al menos tener una falla más amigable y no mostrar al usuario una horrible pantalla con datos de nuestro código.

Algo que también puedes hacer es extender de estas clases y crear tus propias excepciones, de este modo podrás tener aun más información acerca de los que pasa en tu proyecto.

Siempre trata de enviar la excepción que más claramente indique lo que sucedió, esto no hará tu control de errores más sencillo, pero sí te ayudará a entender las causas de los errores que aparecen en tu código.

Conclusión
Revisa la documentación oficial de SPL donde además de la forma de uso, también encontrarás muchos ejemplos y aportes de la comunidad. Estoy seguro de que una vez que conozcas todo lo que SPL te puede ofrecer, tu experiencia programando con PHP mejorara muchísimo.
```
- [21 Debug 8:00 min](https://platzi.com/clases/1462-php-avanzado/16286-xdebug2974/)
    - `var_dump($var)`
    - Hay que tener cuidado que cuando se esta captuarando errores con try..catch que en el catch no ocurra otro error porque entonces si llegaría al cliente
    - nuevo middleware **whoops**
    - `composer require filp/whoops`
    - Se puede usar con middlewares de psr7
    - `composer require franzl/whoops-middleware` ya viene preparado para integrarlo con nuestra app
    - Whoops intercepta los errores y muestra una página con más detalles y los datos de configuración del servidor
    - También permite navegar por la pila de llamadas
    ```php
    $harmony = new Harmony($request, new Response());
    $harmony->addMiddleware(new HttpHandlerRunnerMiddleware(new SapiEmitter()));
    if (getenv('DEBUG') === "true") {
        $harmony->addMiddleware(new \Franzl\Middleware\Whoops\WhoopsMiddleware);
    }
    $harmony->addMiddleware(new Middlewares\AuraRouter($routerContainer))
        ->addMiddleware(new AuthenticationMiddleware())
        ->addMiddleware(new DispatcherMiddleware($container, 'request-handler'));
    ```
- [22 Xdebug 11:00 min](https://platzi.com/clases/1462-php-avanzado/16286-xdebug2974/)
    - con info.php podemos ver si tenemos instalado xdebug
    - ![xdebug ok](https://trello-attachments.s3.amazonaws.com/5b014dcaf4507eacfc1b4540/5d7d417df5d88b1db3750086/05c1485f8df38897ee10bdaecb6be16f/image.png)
    - ![remote_enable](https://trello-attachments.s3.amazonaws.com/5b014dcaf4507eacfc1b4540/5d7d417df5d88b1db3750086/378f4af6c8d7faf1c89596b0a565c6bc/image.png)
        - si se va a trabajar desde localhost no hace falta esto
        - como se está usando homestead se asume que es otra maquina y si se necesita
    - Necesitamos instalar un complemento que nos permitirá crear sesiones de debug **xdebug helper**
    - En phpstorm:
        - Preferencias
        - Lenguajes y frameworks
        - php > servers > en Name: Homestead, ponemos la ip del archivo de homestead.yml
        - Use path mappings (le decimos cual es la raiz)
        - aplicamos cambios
        - habilitamos en chrome el boton de xdebug
        - Ejecutamos la escucha de xdebug ![escuchar xdebug](https://trello-attachments.s3.amazonaws.com/5d7d417df5d88b1db3750086/197x123/e7d1d1732a56c0a1cf53d9cb913c57a8/image.png)
        - configuramos breakpoints
        - hay que configurar en path mappings con la ruta de homestead para que sepa (phpstorm) donde instanciar las clases
- [23 Logs 12:00 min](https://platzi.com/clases/1462-php-avanzado/16287-logs5146/)
    - los logs se encuentra en `var/log/nginx/`
    - tenemos un **cursophp.test-error.log, homestead.test-error.log** que hemos configurado en el fichero homestead.yml
    - instalamos monolog `composer require monolog/monolog`
    ```php
    //index.php
    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    //app sería como el nombre del servidor
    $log = new Logger("app"); //la linea de escritura será: [y-m-d HH:i:s] <name>.<logger::constant>
    $log->pushHandler(new StreamHandler(__DIR__."/../logs/app.log", Logger::WARNING));
    ```
    - se agrega un **.gitignore** dentro de la carpeta de logs
    - en el **.gitignore** se introduce estas dos lineas
        - ignora todo menos el .gitignore
        - *
        - !.gitignore
    
- [24 Trabajando con Monolog 7:00 min](https://platzi.com/clases/1462-php-avanzado/16288-trabajando-con-monolog9231/)
    ```php
    //index.php
    //tratamos getenv("DEBUG") 
    if(getenv("DEBUG") === "true")
    {
        ini_set("display_errors",1);
        ini_set("display_startup_error",1);
        error_reporting(E_ALL):
    }

    catch(Exception $oEx)
    {
        //$log->error("this job was not found");
        $log->warning($oEx->getMessage())
        $emitter = new SapiEmitter();
        $emitter->emit(new Response\EmptyResponse(400));
    }
    catch(Error $oErr)
    {
        $emitter = new SapiEmitter();
        $emitter->emit(new Response\EmptyResponse(500));
    }    
    ```

#### 6 Databases 
- [25 Migraciones de bases de datos 14:00 min](https://platzi.com/clases/1462-php-avanzado/16289-migraciones-de-bases-de-datos5955/)
    - Instalaremos el paquete de migraciones **phinx**
    - `composer require robmorgan/phinx`
    - desde linea de comando: `vendor/bin/phinx`
    - `vendor/bin/phinx init .`  crea un archivo nuevo phinx.yml
    - en phinx.yml se configuraran las carpetas y las bases de datos
    - creamos las carpetas:
        - /db
        -   /migrations
        -   /seeds
    - `vendor/bin/phinx create CreateJobsTable` debe ser un nombre descriptivo
    - se creará un fichero: `/db/migrations/<timestamp>_crate_jobs_table.php`
    - configuramos la creación de una tabla
    - en el fichero anterior, en el metodo change():
    ```php
    $table = $this->table("jobs");
    $table->addColumn("title","string")
        ->addColumn("descripton","string")
        ...
        ->addColumn("updated_at","datetime")
    ```
    - se creará una tabla phinxlog que llevará un registro de los cambios
    - `vendor/bin/phinx rollback` deshara los cambios
    - `vendor/bin/phinx migrate` volverá a crear la tabla

#### 7 Comandos y Tareas asíncronas 
- [26 Comandos 13:00 min](https://platzi.com/clases/1462-php-avanzado/16290-comandos3183/)
    - A veces necesitamos hacer acciones que no esten ligadas al navegador
    - Por ejemplo, la creación del usuario 1 
    - Tareas asincronas, tareas que toman mucho tiempo.
    - para esto php ofrece la posibilidad de crear comandos, algo como **phinx** (migraciones)
    - instalaremos **Symfony Console**
    - [`composer require symfony/console`](https://symfony.com/doc/current/components/console.html)
    ```php
    #!/usr/bin/env php   --> linea shban indica hacia donde debe ir su ejecución, en este caso lo 
    //intentaría enviar a php

    require __DIR__.'/vendor/autoload.php';
    use Symfony\Component\Console\Application;
    $application = new Application();
    // ... register commands
    //$application->add(new GenerateAdminCommand());
    $application->run();
    ```
    - En la raiz se crea fichero **console.php**
    - Entramos a la raiz del proyecto y probamos el fichero: `php console.php` veremos una ayuda por defecto
    - Ahora tenemos que crear los comandos que utilizaremos
    - [Crear el comando](https://symfony.com/doc/current/console.html)
    - Creamos carpeta en **App/Commdas**
    ```php
    //CreateUserCommand.php

    //el nombre tiene la palabra app: que no es obligatoria per le da una descripción más intuitiva al comando ya que cuando
    //lo vaya a usar alguien le informará que se usa en la parte de app
    protected static $defaultName = 'app:create-user'; 

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'User Creator',
            '============',
            '',
        ]);

        $user = new User();
        //este argumento se configura en el metodo "configure"
        $user->email = $input->getArgument('email');
        $user->password = password_hash('123456', PASSWORD_DEFAULT);
        $user->save();
        $output->writeln('Done.');
    }   
     
    //ahora hay que decirle al gestor de comandos que existe un nuevo comando 
    //index.php
    $application = new Application();
    $application->add(new CreateUserCommand());
    $application->run();
    //para mandar mensajes de salida podríamos usar echo, pero usarémos 
    //OutputInterface que es lo que trae Symfony: $output->writln(texto)

    # configurando argumentos
    //CreateUserCommand.php
    protected function configure()
    {
        $this
            ->addArgument('email', InputArgument::REQUIRED, 'The email of the user.')
        ;
    }
    ```
- [27 Formulario para contacto 8:00 min](https://platzi.com/clases/1462-php-avanzado/16292-fomulario-para-contacto5434/)
    - Se configura el formulario de contacto en twig
    - Se configura el Controlador y las rutas implicadas
- [28 Emails 10:00 min](https://platzi.com/clases/1462-php-avanzado/16291-emails1266/)
    - instalamos [**swiftmailer**](https://swiftmailer.symfony.com/docs/introduction.html) que es una libreria de symfony
    - [doc de swiftmailer usando Symfony 4](https://symfony.com/doc/current/email.html#installation) no es nuestro caso
    - En el video vemos que se instala explicitamete la versión: 6:0
    - Según la docu de symfony ahora viene en bundle ^^ no entiendo pq se separan en ver bundle y sin bundle.
    - `composer require "swiftmailer/swiftmailer:^6.0"`
    - Para pruebas de envio de correos usarémos [**mailtrap.io**](https://mailtrap.io), es una plataforma que nos permite probar envios de correos electronicos
    - ![mailtrap config](https://trello-attachments.s3.amazonaws.com/5d7d417df5d88b1db3750086/693x202/2d1fc9ce4d7ae1ffc2a27fa153a94133/image.png)
    - [mailtrap/settings](https://mailtrap.io/inboxes/699342/settings) aqui se encuentra la configuración smtp y pop3    
    - ![datos smtp y pop3](https://trello-attachments.s3.amazonaws.com/5b014dcaf4507eacfc1b4540/5d7d417df5d88b1db3750086/a2fa3801de811544bf39646bb48b9538/image.png)
    - 
    ```php
    //SendMailsCommand.php
    use App\Models\Message;
    use Swift_Mailer;
    use Swift_Message;
    use Swift_SmtpTransport;
    use Symfony\Component\Console\Command\Command;
    use Symfony\Component\Console\Input\InputArgument;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Output\OutputInterface;

    class SendMailsCommand extends Command
    {
        protected static $defaultName = 'app:send-mails';

        protected function execute(InputInterface $input, OutputInterface $output)
        {
            $pendingMessage = Message::where('email_sent', false)->first();
            
            if( $pendingMessage) {
                //se configura por entornos.
                //Transport es el tipo de servicio de envio
                $transport = (new Swift_SmtpTransport(getenv('SMTP_HOST'), getenv('SMTP_PORT')))
                    ->setUsername(getenv('SMTP_USER'))
                    ->setPassword(getenv('SMTP_PASS'));

                $mailer = new Swift_Mailer($transport);
                $message = (new Swift_Message('Contact request'))
                    ->setFrom(['resume@domain.com' => 'Contact'])
                    ->setTo(['yourmail@domain.org'])
                    ->setBody('Hi, you have a new contact request from ' . $pendingMessage->name
                        . '. Contact: ' . $pendingMessage->mail . ' with message: ' . $pendingMessage->message
                    );

                $mailer->send($message);
                $pendingMessage->email_sent = true;
                $pendingMessage->save();
            }
            return true;
        }
    }//SendMailsCommand
    ```
    - En el envio, al ser un servicio externo el hilo se queda bloqueado con lo cual el usuario no sabe lo que pasa
    - Esto lo solucionaremos usando un proceso asincrono de envio
- [29 Async tasks 14:00 min](https://platzi.com/clases/1462-php-avanzado/16294-async-tasks1970/)
    - crearemos una tabla donde se almacenarán los correos electrónicos
    - a posteriori habrá un comando que los envie
    - por esto tenemos que configurar un cron que este constantemente comprobando los correos
    - Creamos el comando **SendMailsCommand**
    - Registramos el comando `$application->add(new SendMailsCommand());`
    - `vendor/bin/phinx create CreateMessageTable` nos crea una nueva migracion. Fichero:`<timestamp>_create_messages_table.php`
    - En este fichero configuramos la nueva tabla de mensajes
    - Hay que importar la configuración en **console.php** porque se van a usar los modelos en los comandos `$dotenv`
    - Hay que importar la conf de **eloquent** `$capsule`
    - Enviamos el email: `php console.php app:send-mail`
    - Comprobamos en mailtrap a ver si se ha procesado el envio

- [30 Procesar tareas asíncronas 8:00 min](https://platzi.com/clases/1462-php-avanzado/16293-procesar-tareas-asincronas9633/)
    ```php
    Es necesario lograr que el envío de correos se haga de manera automática pues no sería sostenible llamar comandos de manera manual. 
    Para esto existe el Cron Job disponible en Linux y Unix que nos permite ejecutar una tarea cada cierto tiempo.
    https://crontab.guru nos ayudará a traducir lo que necesitamos poner en el Cron.

    Dentro de Linux todos los procesos que están corriendo son conocidos como servicios y cuando queremos recargarlos es necesario reconfigurar y reiniciar.

    //fichero: /etc/crontab
    solo se puede modifcar con sudo vi /etc/crontab
    ```
    - [crontab.guru](https://crontab.guru/)
    - Despues de configurar el cron con: `* *  * * *  root  php /home/vagrant/code/curso-introduccion-php/console.php app:send-email`
        - Se ejecutará cada minuto
    - Hay que reiniciar el servicio con: `sudo systemctl restart cron` 
    - comprobamos el email en **mailtrap**
- [31 Crear un comando para agregar usuarios 3:00 min](https://platzi.com/clases/1462-php-avanzado/16402-crear-un-comando-para-agregar-usuarios/)
    - Crear comando que permita insertar nuevos usuarios en la bd
    - [Clase: CreateUserCommand.php](https://github.com/eacevedof/prj_platziphp/blob/master/app/Commands/CreateUserCommand.php)

#### 8 Seguridad
- [32 Seguridad Security 14:00 min]()
- [33 Security Examples 1:00 min]()

#### 9 Conclusiones 
- [34 Crea una API Rest Cierre 1:00 min]()

## FrontController
- [public/index.php](https://github.com/eacevedof/prj_platziphp/blob/master/public/index.php)
```php
//public/index.php
ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
error_reporting(E_ALL);
require_once '../vendor/autoload.php';
session_start();
$dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
$dotenv->load();
use App\Middlewares\AuthenticationMiddleware;
use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;
use WoohooLabs\Harmony\Harmony;
use WoohooLabs\Harmony\Middleware\DispatcherMiddleware;
use WoohooLabs\Harmony\Middleware\HttpHandlerRunnerMiddleware;
use Zend\Diactoros\Response;
use Zend\HttpHandlerRunner\Emitter\SapiEmitter;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$container = new DI\Container();
$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => getenv('DB_DRIVER'),
    'host'      => getenv('DB_HOST'),
    'database'  => getenv('DB_NAME'),
    'username'  => getenv('DB_USER'),
    'password'  => getenv('DB_PASS'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
    'port'      => getenv('DB_PORT')
]);
// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();
$log = new Logger('app');
$log->pushHandler(new StreamHandler(__DIR__ . '/../logs/app.log', Logger::WARNING));
$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);
$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();
$map->get('index', '/', [
    'App\Controllers\IndexController',
    'indexAction'
]);
$map->get('contact', '/contact', [
    'App\Controllers\ContactController',
    'indexAction'
]);
$map->post('sendContact', '/contact/send', [
    'App\Controllers\ContactController',
    'sendAction'
]);
$map->get('indexJobs', '/admin/jobs', [
    'App\Controllers\JobsController',
    'indexAction'
]);
$map->get('deleteJobs', '/admin/jobs/{id}/delete', [
    'App\Controllers\JobsController',
    'deleteAction'
]);
$map->get('addJobs', '/admin/jobs/add', [
    'App\Controllers\JobsController',
    'getAddJobAction'
]);
$map->post('saveJobs', '/admin/jobs/add', [
    \App\Controllers\JobsController::class,
    'getAddJobAction'
]);
$map->get('addUser', '/admin/users/add', [
    'App\Controllers\UsersController',
    'getAddUser'
]);
$map->post('saveUser', '/admin/users/save', [
    'App\Controllers\UsersController',
    'postSaveUser'
]);
$map->get('loginForm', '/login', [
    'App\Controllers\AuthController',
    'getLogin'
]);
$map->get('logout', '/logout', [
    'App\Controllers\AuthController',
    'getLogout'
]);
$map->post('auth', '/auth', [
    'App\Controllers\AuthController',
    'postLogin'
]);
$map->get('admin', '/admin', [
    'App\Controllers\AdminController',
    'getIndex'
]);
$map->get('admin.profile.changePassword', '/admin/profile/changePassword', [
    'App\Controllers\ProfileController',
    'changePassword'
]);
$map->post('admin.profile.savePassword', '/admin/profile/savePassword', [
    'App\Controllers\ProfileController',
    'savePassword'
]);
$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);
try{
    $harmony = new Harmony($request, new Response());
    $harmony->addMiddleware(new HttpHandlerRunnerMiddleware(new SapiEmitter()));
    if (getenv('DEBUG') === "true") {
        $harmony->addMiddleware(new \Franzl\Middleware\Whoops\WhoopsMiddleware);
    }
    $harmony->addMiddleware(new Middlewares\AuraRouter($routerContainer))
        ->addMiddleware(new AuthenticationMiddleware())
        ->addMiddleware(new DispatcherMiddleware($container, 'request-handler'));
    $harmony();
} catch (Exception $e) {
    $log->error($e->getMessage());
    $emitter = new SapiEmitter();
    $emitter->emit(new Response\EmptyResponse(500));
} catch (Error $e) {
    $log->error($e->getMessage());
    $emitter = new SapiEmitter();
    $emitter->emit(new Response\EmptyResponse(500));
}
```