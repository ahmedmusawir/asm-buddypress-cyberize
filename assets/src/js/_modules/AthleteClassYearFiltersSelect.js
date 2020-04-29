import $ from 'jquery';
import AthleteFiltersSelect from './AthleteFiltersSelect';

class AthleteClassYearFiltersSelect extends AthleteFiltersSelect {
  constructor() {
    super();
    this.init();

    // COLLECTING SELECT
    this.select = $('#class-year-select');
    this.setEvents();
  }

  init = () => {
    console.log('ASM Class Year Select Filter Init');
  };

  setEvents() {
    this.select.on('change', this.changeHandler);
  }

  changeHandler() {
    // console.log($(this).val());
    const sport = $('#sports-select').val();
    const gender = $('#gender-select').val();
    const avail = $('#avail-select').val();

    const classYr = $(this).val();
    const theItem = $('.item-entry-asm');

    if (classYr == 'all') {
      theItem.addClass('d-none');
      super.resetFilters();

      setTimeout(function () {
        theItem.removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${sport}.${gender}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all' && gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${sport}.${gender}`).removeClass('d-none');
      });
    } else if (gender != 'all' && avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${gender}.${avail}`).removeClass('d-none');
      });
    } else if (sport != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${sport}`).removeClass('d-none');
      });
    } else if (gender != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${gender}`).removeClass('d-none');
      });
    } else if (avail != 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}.${avail}`).removeClass('d-none');
      });
    } else if (sport == 'all') {
      theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${classYr}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteClassYearFiltersSelect;
