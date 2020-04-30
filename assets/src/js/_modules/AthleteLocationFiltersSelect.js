import $ from 'jquery';
import AthleteFiltersSelect from './AthleteFiltersSelect';

class AthleteLocationFiltersSelect extends AthleteFiltersSelect {
  constructor() {
    super();
    this.init();

    // COLLECTING SELECT
    this.select = $('#location-select');
    this.setEvents();
  }

  init = () => {
    // console.log('ASM Location Select Filter Init');
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

    const location = $(this).val();
    // console.log(location);
    const theItem = $('.item-entry-asm');

    if (location == 'all') {
      theItem.addClass('d-none');
      super.resetFilters();

      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (
      sport != 'all' &&
      gender != 'all' &&
      avail != 'all' &&
      classYr != 'all'
    ) {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${classYr}.${sport}.${gender}.${avail}`).removeClass(
          'd-none'
        );
      });
    } else if (sport != 'all' && gender != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${sport}.${gender}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${sport}.${gender}`).removeClass('d-none');
      });
    } else if (gender != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${gender}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${sport}`).removeClass('d-none');
      });
    } else if (gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${gender}`).removeClass('d-none');
      });
    } else if (avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${avail}`).removeClass('d-none');
      });
    } else if (classYr != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}.${classYr}`).removeClass('d-none');
      });
    } else {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${location}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteLocationFiltersSelect;
