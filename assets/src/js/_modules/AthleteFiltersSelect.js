import $ from 'jquery';

class AthleteFilters {
  constructor() {
    this.init();
    // COLLECTING BUTTON
    this.$button = $('.moose-item');
    // COLLECTING SELECT
    this.$select = $('#sports-select');
    this.setEvents();
  }

  init = () => {
    console.log('ASM JQ Filter Init');
  };

  setEvents() {
    if (this.$button) {
      this.$button.on('click', this.clickHandler);
    }
    if (this.$select) {
      this.$select.on('change', this.changeHandler);
    }
  }

  changeHandler() {
    console.log(this.$select.val);
  }

  clickHandler() {
    // console.log(this);
    const $sport = $(this).attr('id');
    const $theItem = $('.item-entry-asm');

    if ($sport == 'all') {
      $theItem.addClass('d-none');
      setTimeout(function () {
        $theItem.removeClass('d-none');
      });
    } else {
      $theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${$sport}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteFilters;
