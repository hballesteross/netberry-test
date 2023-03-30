
function getCategories(){

    $.ajax({
        type: 'GET',
        url: 'http://localhost:8000/api/categories',
        dataType: 'json',        
        success: function(response) {
           

            const categoriesDiv = document.getElementById('categories');

            for(category of response){


                let divCategory = document.createElement("div");
                divCategory.classList.add("form-check-inline");
                divCategory.classList.add("align-middle");
                


                let categoryCheck = document.createElement("input");
                
                categoryCheck.setAttribute('type','checkbox');
                categoryCheck.setAttribute('id', category.id);
                categoryCheck.classList.add('form-check-input');
                categoryCheck.classList.add('me-2');
                divCategory.append(categoryCheck);
                
                let categoryLabel = document.createElement("label");

                categoryLabel.setAttribute('for', category.id);
                categoryLabel.classList.add('form-check-label');
                categoryLabel.innerHTML = category.description;
                divCategory.append(categoryLabel);

                categoriesDiv.append(divCategory);

            }
        }     
    });
    

}

const createTask = async(payload) => {

    const response = await fetch('http://localhost:8000/api/tasks', {
            method: "POST", 
            mode: "cors",
            headers: {
            "Content-Type": "application/json",
            
            },
            body: JSON.stringify(payload)}
            );
    
   
}

const deleteTask = async(id) => {

    await fetch('http://localhost:8000/api/tasks/' + id,{
        method: 'DELETE',
        mode: "cors",
    });


}

const listTasks = async() => {

    const tasks = await fetch('http://localhost:8000/api/tasks').then(r => r.json())
    const categories = await fetch('http://localhost:8000/api/categories').then(r => r.json())

    const table = document.getElementById('taskTableContent');
    table.innerHTML = "";

    for(taskItem of tasks){

        const tr = document.createElement('tr')

        const taskTd = document.createElement('td');
        taskTd.innerHTML = taskItem.task;
        tr.appendChild(taskTd);

        const categoriesTd = document.createElement('td');
   
        let pillColor;

        for(cat in taskItem.categories){

            for(categoryData of categories) {
                if(taskItem.categories[cat] == categoryData.description)
                    pillColor = categoryData.color;
            };


            let span = document.createElement('span');
            span.classList.add('badge');
            span.classList.add('bg-' + pillColor);
            span.classList.add('rounded-pill');
            span.classList.add('ms-2');
            span.innerHTML = taskItem.categories[cat];
            
            categoriesTd.append(span);
        }
        
        tr.appendChild(categoriesTd);


        const actionsTd = document.createElement('td');
        actionsTd.classList.add('text-center');

    
        let delButton = document.createElement('button');
        delButton.setAttribute('id', taskItem.id)
        delButton.classList.add('btn');
        delButton.classList.add('btn-outline-danger');
        delButton.classList.add('btn-sm');
        delButton.innerHTML = 'X'

        delButton.addEventListener('click', function() {
            deleteTask(this.id);
            listTasks();
        });
        
        actionsTd.append(delButton);

        tr.appendChild(actionsTd);

        table.append(tr);

    }


}

const addTask = () => {

    if( !document.getElementById("task").value ) return alert('Debe completar el nombre de la tarea.');

    const checkboxes = document.getElementsByClassName('form-check-input');

    let anyCheck = false;
    let categoryArr = [];
    const task = document.getElementById("task").value;


    for (let item of checkboxes) {
        if(item.checked){
            anyCheck = true;
            categoryArr.push(item.id);
        }
            
            
    }

    if(!anyCheck)
        return alert('Debe elegir al menos una categoria.');
    
    let payload = {
        task,
        categories: categoryArr
    }
    
    createTask(payload);
    listTasks();



}