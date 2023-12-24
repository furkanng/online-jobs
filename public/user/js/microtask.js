
    function addTask() {
    var taskInput = document.getElementById('taskInput');
    var taskList = document.getElementById('taskList');

    if (taskInput.value.trim() !== '') {
    var taskItem = document.createElement('div');
    taskItem.className = 'd-flex align-items-center border-bottom py-2';

    var formCheck = document.createElement('div');
    formCheck.className = 'form-check';

    var checkbox = document.createElement('input');
    checkbox.className = 'form-check-input';
    checkbox.type = 'checkbox';
    checkbox.addEventListener('change', function () {
    toggleTaskCompleted(taskItem, checkbox.checked);
});

    var taskText = document.createElement('div');
    taskText.className = 'ms-3 w-100';

    var taskContent = document.createElement('div');
    taskContent.className = 'd-flex w-100 align-items-center justify-content-between';

    var taskSpan = document.createElement('span');
    taskSpan.textContent = taskInput.value;

    var deleteButton = document.createElement('button');
    deleteButton.className = 'btn btn-sm btn-danger';
    deleteButton.innerHTML = '<i class="fa fa-times"></i>';
    deleteButton.addEventListener('click', function () {
    taskItem.remove();
});

    taskContent.appendChild(taskSpan);
    taskContent.appendChild(deleteButton);
    taskText.appendChild(taskContent);
    formCheck.appendChild(checkbox);
    taskItem.appendChild(formCheck);
    taskItem.appendChild(taskText);

    taskList.appendChild(taskItem);

    // Clear input after adding task
    taskInput.value = '';
}
}

    function toggleTaskCompleted(taskItem, completed) {
    var taskSpan = taskItem.querySelector('span');
    if (completed) {
    taskSpan.innerHTML = '<del>' + taskSpan.textContent + '</del>';
} else {
    taskSpan.innerHTML = taskSpan.textContent.replace('<del>', '').replace('</del>', '');
}
}
