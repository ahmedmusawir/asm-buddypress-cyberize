import $ from 'jquery';

class UniversityFilters {
  constructor() {
    this.init();
    // COLLECTING BUTTON
    this.$button = $('.university-item');
    // console.log(this.$button);

    this.setEvents();
  }

  init = () => {
    console.log('University Filter Init');
  };

  setEvents() {
    if (this.$button) {
      this.$button.on('click', this.clickHandler);
    }
  }

  clickHandler() {
    // console.log(this);
    const $sport = $(this).attr('id');
    const $theItem = $('.post-item');

    if ($sport == 'all') {
      $theItem.addClass('d-none');
      setTimeout(function() {
        $theItem.removeClass('d-none');
      });
    } else {
      $theItem.addClass('d-none');
      setTimeout(function() {
        $(`.${$sport}`).removeClass('d-none');
      });
    }
  }
}

export default UniversityFilters;
