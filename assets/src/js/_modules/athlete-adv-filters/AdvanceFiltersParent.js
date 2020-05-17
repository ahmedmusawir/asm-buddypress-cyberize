import $ from 'jquery';

class AdvanceFiltersParent {
  constructor() {
    this.init();

    // COLLECTING RESET BUTTON
    this.buttonReset = $('#ath-adv-filter-reset');
    this.buttonBack = $('#back-to-filters');

    this.showNoDataFound();
    this.setEvents();
  }

  init = () => {
    console.log('ASM Parent AdvanceFilter');
  };

  showNoDataFound() {
    const noDataItem = $('.no-data-found');
    setTimeout(function () {
      noDataItem.removeClass('d-none');
    }, 2000);
  }

  setEvents() {
    if (this.buttonReset) {
      this.buttonReset.on('click', this.resetFilters);
    }
    if (this.buttonBack) {
      this.buttonBack.on('click', this.removeAdvFilters);
    }
  }

  removeAdvFilters() {
    // console.log('Remove Adv Filters');
    // e.stopImmediatePropagation();

    const athAdvfilter = $('#top-advanced-filter');
    athAdvfilter.addClass('d-none');
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

export default AdvanceFiltersParent;
