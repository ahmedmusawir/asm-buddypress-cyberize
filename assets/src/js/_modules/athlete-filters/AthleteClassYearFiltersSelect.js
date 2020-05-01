import $ from 'jquery';
import AthleteFiltersParent from './AthleteFiltersParent';

class AthleteGenderFiltersSelect extends AthleteFiltersParent {
  constructor() {
    super();
    this.init();

    // COLLECTING SELECT
    this.selectClassYr = $('#class-year-select');
    this.setEvents();
  }

  init = () => {
    console.log('ASM ClassYr Filter Init');
  };

  setEvents = () => {
    this.selectClassYr.on('change', this.changeHandler);
  };

  changeHandler() {
    // console.log($(this).val());
    const sport = $('#sports-select').val();
    const gender = $('#gender-select').val();
    const avail = $('#avail-select').val();
    const location = $('#location-select').val();
    const verify = $('#verify-select').val();

    const classYr = $(this).val();
    const theItem = $('.item-entry-asm');

    if (classYr == 'all') {
      theItem.addClass('d-none');
      super.resetFilters();

      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      classYr != 'all' &&
      location != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(
          `.${gender}.${sport}.${avail}.${classYr}.${location}.${verify}`
        ).removeClass('d-none');
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      classYr != 'all' &&
      location != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}.${avail}.${classYr}.${location}`).removeClass(
          'd-none'
        );
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      classYr != 'all' &&
      verify != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}.${avail}.${classYr}.${verify}`).removeClass(
          'd-none'
        );
      });
    } else if (sport != 'all' && gender != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}.${avail}.${classYr}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}.${avail}.${location}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}.${avail}.${verify}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && location != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${classYr}.${location}.${verify}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && location != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${classYr}.${location}.${avail}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && verify != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${classYr}.${verify}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${sport}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${sport}.${classYr}`).removeClass('d-none');
      });
    } else if (sport != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${sport}.${location}`).removeClass('d-none');
      });
    } else if (sport != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${sport}.${verify}`).removeClass('d-none');
      });
    } else if (gender != 'all' && classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${avail}.${classYr}`).removeClass('d-none');
      });
    } else if (gender != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${avail}.${location}`).removeClass('d-none');
      });
    } else if (gender != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${gender}.${avail}.${verify}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${classYr}.${location}`).removeClass('d-none');
      });
    } else if (classYr != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${classYr}.${verify}`).removeClass('d-none');
      });
    } else if (location != 'all' && verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${location}.${verify}`).removeClass('d-none');
      });
    } else if (sport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${sport}`).removeClass('d-none');
      });
    } else if (gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${gender}`).removeClass('d-none');
      });
    } else if (avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${avail}`).removeClass('d-none');
      });
    } else if (location != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${location}`).removeClass('d-none');
      });
    } else if (verify != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${avail}.${verify}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteGenderFiltersSelect;
