import $ from 'jquery';

class ASMAthleteDashTasks {
  constructor() {
    const taskItems = $('.task-item');

    this.init(taskItems);

    // COLLECTING BUTTON
    this.taskStartButton = $('.asm-task-button');
    this.markCompleteButton = $('.modal-mark-complete-btn');
    this.taskResetButton = $('.modal-task-reset-btn');
    // console.log(this.$button);

    this.setEvents();
  }

  init = (taskItems) => {
    // console.log(taskItems);
    let count = 1;
    let completeCount = 0;

    for (const item of taskItems) {
      // console.log($(item));
      let taskStatus = localStorage.getItem(`task-status-${count}`);

      if (taskStatus == null) {
        localStorage.setItem(`task-status-${count}`, 'todo');
      }
      if (taskStatus == 'completed') {
        completeCount++;
      }

      const statusText = $(item).find('.status-text');
      const todoIcon = $(item).find('.fa-exclamation-circle');
      const startIcon = $(item).find('.fa-clock');
      const completeIcon = $(item).find('.fa-check-circle');

      this.setTaskStatus(
        taskStatus,
        statusText,
        todoIcon,
        startIcon,
        completeIcon
      );

      count++;
      console.log(`Complete Count: ${completeCount}`);
    }
  };

  setTaskStatus = (status, statusText, todoIcon, startIcon, completeIcon) => {
    console.log(status);

    if (status == null || status == 'todo') {
      statusText.text('TO DO');
      todoIcon.removeClass('d-none');
    }

    if (status == 'started') {
      statusText.text('STARTED');
      todoIcon.addClass('d-none');
      startIcon.removeClass('d-none');
    }

    if (status == 'completed') {
      statusText.text('COMPLETED');
      startIcon.addClass('d-none');
      completeIcon.removeClass('d-none');
    }
  };

  setEvents() {
    if (this.taskStartButton) {
      this.taskStartButton.one('click', this.taskStartHandler.bind(this));
    }
    if (this.markCompleteButton) {
      this.markCompleteButton.on('click', this.markCompleteHandler.bind(this));
    }
    if (this.taskResetButton) {
      this.taskResetButton.on('click', this.taskResetHandler.bind(this));
    }
  }

  setCurrentTask(textNew, iconOld, iconNew, storageId, taskStatus) {
    // console.log('setCurrentTask Method runs!');
    if (taskStatus == 'started') {
      iconOld.addClass('d-none');
      iconNew.removeClass('d-none');
      textNew.text('STARTED');

      localStorage.setItem(storageId, taskStatus);
    }
    if (taskStatus == 'completed') {
      // console.log(`Storage Id: ${storageId}`);

      iconOld.addClass('d-none');
      iconNew.removeClass('d-none');
      textNew.text('COMPLETED');

      localStorage.setItem(storageId, taskStatus);
      // console.log(`Task Status ${taskStatus}`);
    }
  }

  taskStartHandler(e) {
    const taskItem = $(e.target).parents('.task-item');
    const storageId = taskItem.data('task');
    const todoText = taskItem.find('.status-text');
    const todoIcon = taskItem.find('.fa-exclamation-circle');
    const startIcon = taskItem.find('.fa-clock');
    let taskStatus = localStorage.getItem(storageId);

    console.log(`Status in taskStartHandler: ${taskStatus}`);

    if (taskStatus !== 'completed') {
      taskStatus = 'started';
      this.setCurrentTask(todoText, todoIcon, startIcon, storageId, taskStatus);
    }
  }

  markCompleteHandler(e) {
    // console.log('mark complete clicked');
    const taskStatus = 'completed';
    const taskItem = $(e.target).parents('.task-item');
    const storageId = taskItem.data('task');
    const startText = taskItem.find('.status-text');
    const startIcon = taskItem.find('.fa-clock');
    const completeIcon = taskItem.find('.fa-check-circle');

    // console.log(`Storage Id in handler: ${storageId}`);
    // console.log(`Task Item Id in handler: ${taskItem}`);

    this.setCurrentTask(
      startText,
      startIcon,
      completeIcon,
      storageId,
      taskStatus
    );
  }

  taskResetHandler(e) {
    console.log('reset Completed clicked');
    const taskStatus = 'started';
    const taskItem = $(e.target).parents('.task-item');
    const storageId = taskItem.data('task');
    const startText = taskItem.find('.status-text');
    const startIcon = taskItem.find('.fa-clock');
    const completeIcon = taskItem.find('.fa-check-circle');

    this.setCurrentTask(
      startText,
      completeIcon,
      startIcon,
      storageId,
      taskStatus
    );
  }
}

export default ASMAthleteDashTasks;
