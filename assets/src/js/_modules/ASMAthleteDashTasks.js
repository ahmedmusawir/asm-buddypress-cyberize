import $ from 'jquery';

class ASMAthleteDashTasks {
  constructor() {
    this.todoIcon1 = $('.fas.fa-exclamation-circle.task-1');
    this.todoText1 = $('.status-text.task-1');
    this.startIcon1 = $('.far.fa-clock.task-1');

    this.init();
    // COLLECTING BUTTON
    this.taskButton = $('.asm-task-button');
    // console.log(this.$button);

    this.setEvents();
  }

  init = () => {
    // console.log('University Filter Init');
    let taskStatus1 = localStorage.getItem('task-status-1');

    if (taskStatus1 == null) {
      localStorage.setItem('task-status-1', 'todo');
    }

    // console.log(taskStatus1);
    this.setTaskStatus(taskStatus1);
  };

  setTaskStatus = (status) => {
    console.log(status);

    if (status == null || status == 'todo') {
      this.todoText1.text('TO DO');
      this.todoIcon1.removeClass('d-none');
    }

    if (status == 'started') {
      this.todoText1.text('STARTED');
      this.todoIcon1.addClass('d-none');
      this.startIcon1.removeClass('d-none');
    }
  };

  setEvents() {
    if (this.taskButton) {
      this.taskButton.one('click', this.clickTaskHandler.bind(this));
    }
  }

  setCurrentTask(textTodo, iconTodo, iconStart, status) {
    console.log('setCurrentTask Method runs!');
    iconTodo.addClass('d-none');
    iconStart.removeClass('d-none');
    textTodo.text('STARTED');
  }

  clickTaskHandler(e) {
    const taskItem = $(e.target).parents('.task-item');
    const todoText = taskItem.find('.status-text');
    const todoIcon = taskItem.find('.fa-exclamation-circle');
    const startIcon = taskItem.find('.fa-clock');

    // todoIcon.addClass('d-none');
    // startIcon.removeClass('d-none');
    // todoText.text('STARTED');

    this.setCurrentTask(todoText, todoIcon, startIcon, 'task-status-1');

    // console.warn(itemData);
    // console.warn(taskId);
  }
}

export default ASMAthleteDashTasks;
