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
    // CHEERLEADING FILTER
    const positionCheerleading = $('#position-cheerleading').val();
    // GOLF FILTERS
    const positionGolf = $('#position-golf').val();
    const wagrGolf = $('#wagr-golf').val();
    const nationalRankingGolf = $('#national-ranking-golf').val();
    const swingHandGolf = $('#swing-hand-golf').val();
    // BASKETBALL FILTERS
    const positionPrimaryBasketball = $('#position-primary-basketball').val();
    const positionSecondaryBasketball = $(
      '#position-secondary-basketball'
    ).val();
    // BASEBALL FILTERS
    const positionPrimaryBaseball = $('#position-primary-baseball').val();
    const positionSecondaryBaseball = $('#position-secondary-baseball').val();

    // CLICKED CURRENT SELECT FILTER
    const gender = $('#gender-select-adv').val();
    const theItem = $('.item-entry-asm');

    switch (sport) {
      case 'US-FOOTBALL':
        console.log(`Sport Filters for ${sport}`);
        console.log(`Sport Filters for ${positionUsFootball}`);
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
        // code block
        break;
      case 'BASEBALL':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionPrimaryBaseball,
          positionSecondaryBaseball
        );
        // code block
        break;
      case 'BASKETBALL':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionPrimaryBasketball,
          positionSecondaryBasketball
        );
        // code block
        break;
      case 'CHEERLEADING':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionCheerleading
        );
        // code block
        break;
      case 'GOLF':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify,
          positionGolf,
          wagrGolf,
          nationalRankingGolf,
          swingHandGolf
        );
        // code block
        break;
      case 'LATER':
        console.log(`Sport Filters for ${sport}`);
        this.applyAdvFilters(
          theItem,
          sport,
          gender,
          avail,
          classYr,
          location,
          verify
        );
        // code block
        break;
      default:
        console.log(`Unknown Sport Filters for ${sport}`);
      // code block
    }
  }
}

export default AdvGenderFiltersSelect;
