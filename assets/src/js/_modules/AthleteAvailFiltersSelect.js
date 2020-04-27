import $ from 'jquery';

class AthleteFilters {
  constructor() {
    this.init();

    // COLLECTING SELECT
    this.select = $('#avail-select');
    this.setEvents();
  }

  init = () => {
    console.log('ASM Avail Select Filter Init');
  };

  setEvents() {
    this.select.on('change', this.changeHandler);
  }

  changeHandler() {
    // console.log($(this).val());
    const sport = $('#sports-select').val();
    const gender = $('#gender-select').val();

    const avail = $(this).val();
    const theItem = $('.item-entry-asm');

    if (avail == 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (sport == 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${sport}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteFilters;
