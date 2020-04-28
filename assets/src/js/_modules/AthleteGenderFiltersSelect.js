import $ from 'jquery';

class AthleteFilters {
  constructor() {
    this.init();

    // COLLECTING SELECT
    this.$select = $('#gender-select');
    this.setEvents();
  }

  init = () => {
    console.log('ASM Gender Select Filter Init');
  };

  setEvents() {
    this.$select.on('change', this.changeHandler);
  }

  changeHandler() {
    const sport = $('#sports-select').val();
    const avail = $('#avail-select').val();

    const gender = $(this).val();
    const theItem = $('.item-entry-asm');

    if (gender == 'all') {
      $theItem.addClass('d-none');
      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (sport == 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}`).removeClass('d-none');
      });
    } else if (sport != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteFilters;