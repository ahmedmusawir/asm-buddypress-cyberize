import $ from 'jquery';
import AthleteFiltersSelect from './AthleteFiltersSelect';

class AthleteSportsFiltersSelect extends AthleteFiltersSelect {
  constructor() {
    super();
    this.init();

    // COLLECTING SELECT
    this.select = $('#sports-select');
    this.setEvents();
  }

  init = () => {
    // console.log('ASM Select Filter Init');
  };

  setEvents() {
    this.select.on('change', this.changeHandler);
  }

  changeHandler() {
    // console.log($(this).val());
    const gender = $('#gender-select').val();
    const avail = $('#avail-select').val();
    const classYr = $('#class-year-select').val();
    const location = $('#location-select').val();
    const verify = $('#verify-select').val();

    const sport = $(this).val();
    const theItem = $('.item-entry-asm');

    if (sport == 'all') {
      theItem.addClass('d-none');
      super.resetFilters();

      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (
      avail != 'all' &&
      gender != 'all' &&
      location != 'all' &&
      classYr != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(
          `.${sport}.${avail}.${location}.${verify}.${classYr}.${gender}`
        ).removeClass('d-none');
      });
    } else if (
      avail != 'all' &&
      gender != 'all' &&
      location != 'all' &&
      classYr != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${avail}.${location}.${classYr}.${gender}`).removeClass(
          'd-none'
        );
      });
    } else if (avail != 'all' && classYr != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${avail}.${gender}.${classYr}`).removeClass('d-none');
      });
    } else if (avail != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${avail}.${gender}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}.${classYr}`).removeClass('d-none');
      });
    } else if (avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${avail}`).removeClass('d-none');
      });
    } else if (classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${classYr}`).removeClass('d-none');
      });
    } else if (gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${gender}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteSportsFiltersSelect;
