document.addEventListener("DOMContentLoaded", function () {
    const newTaskForm = document.getElementById("new-task-form");
    const newTaskInput = document.getElementById("new-task-input");
    const tasksContainer = document.getElementById("tasks");

    // Load tasks from localStorage on page load
    loadTasks();

    newTaskForm.addEventListener("submit", function (event) {
        event.preventDefault();

        // Get the task input value
        const taskText = newTaskInput.value.trim();

        if (taskText !== "") {
            // Create a new task element
            const taskElement = document.createElement("div");
            taskElement.classList.add("task");
            taskElement.innerHTML = `<span>${taskText}</span><i class="fas fa-trash-alt delete-task"></i>`;

            // Add the task to the tasks container
            tasksContainer.appendChild(taskElement);

            // Save tasks to localStorage
            saveTasks();

            // Clear the input field
            newTaskInput.value = "";
        }
    });

    // Delete task when clicking on the delete icon
    tasksContainer.addEventListener("click", function (event) {
        if (event.target.classList.contains("delete-task")) {
            const taskElement = event.target.parentElement;
            tasksContainer.removeChild(taskElement);

            // Save tasks to localStorage after deletion
            saveTasks();
        }
    });

    // Function to save tasks to localStorage
    function saveTasks() {
        const tasks = Array.from(tasksContainer.children).map(taskElement => taskElement.firstChild.textContent);
        localStorage.setItem("tasks", JSON.stringify(tasks));
    }

    // Function to load tasks from localStorage
    function loadTasks() {
        const savedTasks = localStorage.getItem("tasks");
        if (savedTasks) {
            const tasks = JSON.parse(savedTasks);
            tasks.forEach(taskText => {
                const taskElement = document.createElement("div");
                taskElement.classList.add("task");
                taskElement.innerHTML = `<span>${taskText}</span><i class="fas fa-trash-alt delete-task"></i>`;
                tasksContainer.appendChild(taskElement);
            });
        }
    }
});
