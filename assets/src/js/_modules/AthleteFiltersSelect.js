import $ from 'jquery';

class AthleteFilters {
  constructor() {
    this.init();

    // COLLECTING SELECT
    this.select = $('#ath-filter-reset');
    this.setEvents();
  }

  init = () => {
    console.log('ASM Select Filter Reset');
  };

  setEvents() {
    this.select.on('click', this.changeHandler);
  }

  changeHandler() {
    const theItem = $('.item-entry-asm');

    const sport = $('#sports-select');
    sport.val('all');

    const gender = $('#gender-select');
    gender.val('all');

    const avail = $('#avail-select');
    avail.val('all');

    theItem.addClass('d-none');
    setTimeout(function () {
      theItem.removeClass('d-none');
    });
  }
}

export default AthleteFilters;
