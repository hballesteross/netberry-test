<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netberry Test</title> 

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href='app.css'>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/main.js"></script>

</head>
<body onload="getCategories();listTasks()">  
    <div class='container'>
        
        <h3 class="text-center border-bottom mt-4 mb-4 pb-3">Gestor de Tareas</h3>

        <div class='d-flex align-items-center justify-content-between mb-4'>

            <div class="flex-grow-1">
                <input type="text" class="form-control" placeholder="Nueva tarea.." name='task' id='task' required>                        
            </div>

            <div id='categories' class="ms-4 me-4"></div>
            
            <div>
                <button class="btn btn-primary" type="button" onclick="addTask()">Añadir</button>
            </div>

        </div>

        <div>
            <table class='table table-striped table-hover table-bordered'>
                <thead>
                    <tr>
                        <th>Tarea</th>
                        <th>Categorias</th>
                        <th class='text-center'>Acciones</th>
                    </tr>
                </thead>
                <tbody id='taskTableContent'>

                </tbody>
            </table>
        </div>

    </div>
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>