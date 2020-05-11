import $ from 'jquery';

class AthleteFiltersParent {
  constructor() {
    // this.init();

    // COLLECTING RESET BUTTON
    this.button = $('#ath-filter-reset');

    this.showNoDataFound();
    this.setEvents();
  }

  init = () => {
    console.log('ASM Parent Filter Reset');
  };

  setEvents() {
    this.button.on('click', this.resetFilters);
  }

  showNoDataFound() {
    const noDataItem = $('.no-data-found');
    setTimeout(function () {
      noDataItem.removeClass('d-none');
    }, 2000);
  }

  resetFilters() {
    const theItem = $('.item-entry-asm');

    const sport = $('#sports-select');
    sport.val('all');

    const gender = $('#gender-select');
    gender.val('all');

    const avail = $('#avail-select');
    avail.val('all');

    const classYr = $('#class-year-select');
    classYr.val('all');

    const location = $('#location-select');
    location.val('all');

    const verify = $('#verify-select');
    verify.val('all');

    theItem.addClass('d-none');
    setTimeout(function () {
      theItem.removeClass('d-none');
    });
  }
}

export default AthleteFiltersParent;
