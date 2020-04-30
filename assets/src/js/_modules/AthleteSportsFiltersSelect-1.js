import $ from 'jquery';

class AthleteFilters {
  constructor() {
    this.init();

    // COLLECTING SELECT
    this.select = $('#sports-select');
    this.setEvents();
  }

  init = () => {
    console.log('ASM Select Filter Init');
  };

  setEvents() {
    this.select.on('change', this.changeHandler);
  }

  changeHandler() {
    console.log($(this).val());
    const sport = $(this).val();
    const theItem = $('.item-entry-asm');

    const gender = $('#gender-select');
    gender.val('all');

    const avail = $('#avail-select');
    avail.val('all');

    const classYr = $('#class-year-select');
    classYr.val('all');

    if (sport == 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteFilters;
