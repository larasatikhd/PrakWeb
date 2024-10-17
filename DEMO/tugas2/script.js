document.getElementById('todo-form').addEventListener('submit', function(e) { 
    e.preventDefault(); 

    const todoInput = document.getElementById('todo-input').value; 
    if (todoInput === '') return; 

    const todoList = document.getElementById('todo-list');  
    const li = document.createElement('li'); 

    li.innerHTML = ` 
        <span class="task-text">${todoInput}</span>
        <div class="action-buttons">
            <button class="edit-btn">&#x270E;</button>
            <button class="delete-btn">&#x1F5D1;</button>
        </div>
    `;

    todoList.appendChild(li); 
    document.getElementById('todo-input').value = ''; 

    li.querySelector('.delete-btn').addEventListener('click', function() {
        li.remove();  
    });

   
    li.querySelector('.edit-btn').addEventListener('click', function() {
        const taskText = li.querySelector('.task-text');  
        const input = document.createElement('input'); 
        input.type = 'text'; 
        input.value = taskText.innerText; 
        taskText.parentNode.replaceChild(input, taskText); 
        this.innerHTML = '&#x2714;'; 
        this.classList.add('save-btn'); 
        
        this.addEventListener('click', function() {
            if (this.classList.contains('save-btn')) { 
                const newText = input.value; 
                const span = document.createElement('span'); 
                span.className = 'task-text'; 
                span.innerText = newText; 
                input.parentNode.replaceChild(span, input); 
                this.innerHTML = '&#x270E;';
                this.classList.remove('save-btn'); 
            }
        });
    });
});