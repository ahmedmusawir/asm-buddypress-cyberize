import $ from 'jquery';
import AdvanceFiltersParent from './AdvanceFiltersParent';

class AdvGenderFiltersSelect extends AdvanceFiltersParent {
  constructor() {
    super();
    this.init();

    // COLLECTING SELECT
    this.selectGender = $('#gender-select-adv');
    this.setEvents();
  }

  init = () => {
    console.log('ASM Gender Filter Init');
  };

  setEvents = () => {
    // console.log(this.selectSport);
    this.selectGender.on('change', this.changeHandler.bind(this));
  };

  changeHandler() {
    // BASE FILTERS
    const sport = $('.menu-title.sport-title').text();
    const avail = $('#avail-select-adv').val();
    const classYr = $('#class-year-select-adv').val();
    const location = $('#location-select-adv').val();
    const verify = $('#verify-select-adv').val();

    // US FOOTBALL FILTER
    const positionUsFootball = $('#position-us-football').val();

    // CLICKED CURRENT SELECT FILTER
    const gender = $('#gender-select-adv').val();
    const theItem = $('.item-entry-asm');

    // PARENT FUNCTION BUT IT'S AN ARROW FUNC SO MUST BE CALLED WITH this.ParentFunc
    // NORMAL FUNCTION NEEDS BE CALLED WITH super.ParentFunc
    this.applyAdvFilters(
      theItem,
      sport,
      gender,
      avail,
      classYr,
      location,
      verify,
      positionUsFootball
    );
  }
}

export default AdvGenderFiltersSelect;
