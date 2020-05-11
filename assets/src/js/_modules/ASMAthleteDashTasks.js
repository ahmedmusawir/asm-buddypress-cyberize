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
    const itemData = $(this).data('target');
    const todoIcon = $('.fas.fa-exclamation-circle');
    const startIcon = $('.far.fa-clock');

    todoIcon.addClass('d-none');
    startIcon.removeClass('d-none');

    console.warn(itemData);
  }
}

export default ASMAthleteDashTasks;
