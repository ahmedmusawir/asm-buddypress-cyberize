import $ from 'jquery';
import AthleteFiltersSelect from './AthleteFiltersSelect';

class AthleteGenderFiltersSelect extends AthleteFiltersSelect {
  constructor() {
    super();
    this.init();

    // COLLECTING SELECT
    this.select = $('#gender-select');
    this.setEvents();
  }

  init = () => {
    // console.log('ASM Gender Select Filter Init');
  };

  setEvents() {
    this.select.on('change', this.changeHandler);
  }

  changeHandler() {
    const sport = $('#sports-select').val();
    const avail = $('#avail-select').val();
    const classYr = $('#class-year-select').val();
    const location = $('#location-select').val();
    const verify = $('#verify-select').val();

    const gender = $(this).val();
    const theItem = $('.item-entry-asm');

    if (gender == 'all') {
      theItem.addClass('d-none');
      super.resetFilters();

      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (
      sport != 'all' &&
      avail != 'all' &&
      location != 'all' &&
      classYr != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(
          `.${gender}.${avail}.${location}.${verify}.${classYr}.${sport}`
        ).removeClass('d-none');
      });
    } else if (
      sport != 'all' &&
      location != 'all' &&
      avail != 'all' &&
      classYr != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${avail}.${location}.${classYr}.${sport}`).removeClass(
          'd-none'
        );
      });
    } else if (sport != 'all' && classYr != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}.${classYr}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}.${avail}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${avail}.${classYr}`).removeClass('d-none');
      });
    } else if (sport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}`).removeClass('d-none');
      });
    } else if (classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${classYr}`).removeClass('d-none');
      });
    } else if (avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${avail}`).removeClass('d-none');
      });
    } else if (location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${location}`).removeClass('d-none');
      });
    } else if (verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${verify}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteGenderFiltersSelect;
