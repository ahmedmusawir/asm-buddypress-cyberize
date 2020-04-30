import $ from 'jquery';
import AthleteFiltersSelect from './AthleteFiltersSelect';

class AthleteVerificationFiltersSelect extends AthleteFiltersSelect {
  constructor() {
    super();
    this.init();

    // COLLECTING SELECT
    this.select = $('#verify-select');
    this.setEvents();
  }

  init = () => {
    console.log('ASM Verify Select Filter Init');
  };

  setEvents() {
    this.select.on('change', this.changeHandler);
  }

  changeHandler() {
    // console.log($(this).val());
    const sport = $('#sports-select').val();
    const gender = $('#gender-select').val();
    const avail = $('#avail-select').val();
    const classYr = $('#class-year-select').val();
    const location = $('#location-select').val();

    const verify = $(this).val();
    console.log(verify);
    const theItem = $('.item-entry-asm');

    if (verify == 'all') {
      theItem.addClass('d-none');
      super.resetFilters();

      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      avail != 'all' &&
      classYr != 'all' &&
      location != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(
          `.${verify}.${location}.${classYr}.${sport}.${gender}.${avail}`
        ).removeClass('d-none');
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      avail != 'all' &&
      classYr != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${classYr}.${sport}.${gender}.${avail}`).removeClass(
          'd-none'
        );
      });
    } else if (sport != 'all' && gender != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${sport}.${gender}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all' && classYr != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${sport}.${classYr}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${sport}.${gender}`).removeClass('d-none');
      });
    } else if (gender != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${gender}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${sport}`).removeClass('d-none');
      });
    } else if (gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${gender}`).removeClass('d-none');
      });
    } else if (avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${avail}`).removeClass('d-none');
      });
    } else if (classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${classYr}`).removeClass('d-none');
      });
    } else if (location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}.${location}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${verify}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteVerificationFiltersSelect;
