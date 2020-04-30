import $ from 'jquery';
import AthleteFiltersSelect from './AthleteFiltersSelect';

class AthleteAvailFiltersSelect extends AthleteFiltersSelect {
  constructor() {
    super();
    this.init();

    // COLLECTING SELECT
    this.select = $('#avail-select');
    this.setEvents();
  }

  init = () => {
    // console.log('ASM Avail Select Filter Init');
  };

  setEvents() {
    this.select.on('change', this.changeHandler);
  }

  changeHandler() {
    // console.log($(this).val());
    const sport = $('#sports-select').val();
    const gender = $('#gender-select').val();
    const classYr = $('#class-year-select').val();
    const location = $('#location-select').val();
    const verify = $('#verify-select').val();

    const avail = $(this).val();
    const theItem = $('.item-entry-asm');

    if (avail == 'all') {
      theItem.addClass('d-none');
      super.resetFilters();

      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      location != 'all' &&
      classYr != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(
          `.${avail}.${location}.${verify}.${classYr}.${sport}.${gender}`
        ).removeClass('d-none');
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      location != 'all' &&
      classYr != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${location}.${classYr}.${sport}.${gender}`).removeClass(
          'd-none'
        );
      });
    } else if (sport != 'all' && classYr != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${gender}.${sport}.${classYr}`).removeClass('d-none');
      });
    } else if (location != 'all' && classYr != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${location}.${verify}.${classYr}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${gender}.${sport}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${gender}.${classYr}`).removeClass('d-none');
      });
    } else if (sport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${sport}`).removeClass('d-none');
      });
    } else if (classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${classYr}`).removeClass('d-none');
      });
    } else if (gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${gender}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteAvailFiltersSelect;
