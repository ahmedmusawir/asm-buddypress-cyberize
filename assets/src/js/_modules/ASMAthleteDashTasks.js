import $ from 'jquery';

class ASMAthleteDashTasks {
  constructor() {
    this.init();
    // COLLECTING BUTTON
    this.taskButton = $('.asm-task-button');
    // console.log(this.$button);

    this.setEvents();
  }

  init = () => {
    // console.log('University Filter Init');
  };

  setEvents() {
    if (this.taskButton) {
      this.taskButton.one('click', this.clickHandler);
    }
  }

  clickHandler() {
    // console.log(this);
    // const itemData = $(this).data('target');
    const taskId = $(this).data('task');
    const todoIcon1 = $('.fas.fa-exclamation-circle.task-1');
    const todoText1 = $('.status-text-task-1');
    const startIcon1 = $('.far.fa-clock.task-1');
    const todoIcon2 = $('.fas.fa-exclamation-circle.task-2');
    const todoText2 = $('.status-text-task-2');
    const startIcon2 = $('.far.fa-clock.task-2');
    const todoIcon3 = $('.fas.fa-exclamation-circle.task-3');
    const startIcon3 = $('.far.fa-clock.task-3');
    const todoText3 = $('.status-text-task-3');

    if (taskId == 'task-1') {
      todoIcon1.addClass('d-none');
      startIcon1.removeClass('d-none');
      todoText1.text('Started');
    }
    if (taskId == 'task-2') {
      todoIcon2.addClass('d-none');
      startIcon2.removeClass('d-none');
      todoText3.text('Started');
    }
    if (taskId == 'task-3') {
      todoIcon3.addClass('d-none');
      startIcon3.removeClass('d-none');
      todoText3.text('Started');
    }

    // console.warn(itemData);
    // console.warn(taskId);
  }
}

export default ASMAthleteDashTasks;
