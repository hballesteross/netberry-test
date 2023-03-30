# pasos para la instalacion

.1 git clone https://github.com/hballesteross/netberry-test.git
.2 cd netberry-test
.3 composer install
.4 cp .env.example .env
.5 php artisan key:generate
.6 php artisan migrate:fresh --seed
.7 php artisan serve



# Descripcion del proyecto.

Se ha realizado el backend con laravel 10. Se han creado las migraciones para la tabla tasks y categories y su correspondiente tabla pivot ya que la relacion es muchos a muchos dado que una tarea puede contener multiples categorias y una categoria puede estar en multiples tareas. Se ha generado la relacion en el modelo de tarea. Se geneero una ruta apiresource con su controlador para gestionar en /tasks las operaciones CRUD sobre las tareas. Tambien se genero una ruta /categories en la api para poder levantar las categorias desde el frontend. Decidi hacerlo asi para no hardcodear en el frontend las categorias y tener que hacer condicir los id a mano con respecto al backend. 
Con respecto al frontend se realizo con html/css/javascript como fue solicitado. Se creo una ruta en web que apunta al / para hacer la llamada a una vista donde tenemos el main y el archivo .js en el public. Aproveche la instancia del webserver de laravel para montar el frontend aqui y no enviar el frontend por separado para tener que montarlo en una instancia aparte de apache. 
EL desarrollo del frontend se hizo utilizando bootstrap y jQuery para las llamadas ajax. Si bien ajax es algo que esta en desuso ultimamente y ha sido reemplazado tanto por el fetch de Javascript ES6 o paquetes como axios decidi hacer la peticion http get para obtener las categorias para los checkbox con ajax como fue solicitado y el resto de las peticiones para el crud fueron hechas con fetch para poder aprovechar tambien las funciones de flecha y otras caracteristicas del ES6. 
Toda la manipulacion del DOM para conseguir un funcionamiento del sitio sin recarga fue hecha directamente con JS. Para una prueba tan sencilla no genera problemsa pero para aplicaciones mas grandes, generar tantas llamadas al DOM no es lo recomendable hacer de esta manera y se podria utilzar algun framework (vue.js por ejemplo) para trabajar el manejo por componentes del DOM. 

Lamentablemente no tuve oportunidad de realizar el desarrollo de forma continua en el tiempo y lo fui haciendo por partes a medida que tenia tiempo libre. He realizado el backend primero el cual me ha llevado aproximadamente 1:30hs y el frontend 2hs tratando de dejar bien presentada la UI siendo responsive y utilizando flexbox. 