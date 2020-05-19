/**
A MODAL FULL OF SPORTS CHOICES THAT HELPS TRANSITION FROM STANDARD FILTER TO 
THE ADVANCE FILTERS
*/
import $ from 'jquery';
import Bootstrap from 'bootstrap';

class FilterSwitchModal {
  constructor() {
    // COLLECTING BUTTON
    this.modalBtn = $('#athAdvanceFilter');
    this.radioBtnBox = $('#modalSportsChoiceBox');

    // COLLECTING ADVANCE FILTER BOX
    this.athAdvfilter = $('#top-advanced-filter');
    //COLLECTING MODAL
    this.filterSwitchModal = $('#filterSwitchModal');

    // LOADING init METHODS TO CREATE THE SPORTS CHOICE RADIO BTNS
    this.init();

    // RADIO BTN - CUZ THESE ARE CREATED AFTER THE this.ini() HAS RUN
    this.sportsRadioItem = $('.sports-radio-item').find(':radio');
    this.setEvents();
  }

  init = () => {
    console.log('Filter Switch Modal ...');
    // COLLECTING SPORTS ITEMS FROM THE LOCAL STORAGE
    const rawSportsData = localStorage.getItem('localSports');
    const sportStrArr1 = rawSportsData.split('\\');

    // console.log(rawSportsData);

    sportStrArr1.map((item) => {
      // Remove all entries with 'option' in them
      if (!item.includes('option')) {
        const newItem = item.substr(1); // Remove first char for the string
        // GENERATING HTML - RADIO BUTTONS
        const newRadioBtn = `
        <label class="sports-radio-item">
          <input type="radio" name="sportsRadioAdvFilter" value="${newItem}">
          ${newItem}
        </label><br>`;
        this.radioBtnBox.append(newRadioBtn);
      }
    });
  };

  setEvents = () => {
    this.modalBtn.on('click', this.clickModalBtnHandler);
    this.sportsRadioItem.on('click', this.sportsRadioItemHandler.bind(this));
    // $(':radio').on('change', this.sportsRadioItemHandler);
  };

  clickModalBtnHandler() {
    $('#filterSwitchModal').modal({
      backdrop: 'static',
      keyboard: false,
    });
  }

  sportsRadioItemHandler(e) {
    e.stopImmediatePropagation();
    console.log(e.target.value);
    const sportChoice = e.target.value;
    const advFilterTitle = this.athAdvfilter.find('.menu-title');

    console.log(advFilterTitle.text());

    advFilterTitle.text(sportChoice);

    // SHOWING THE ADVANCED FILTER BOX
    this.athAdvfilter.removeClass('d-none');

    // HIDING THE MODAL
    this.filterSwitchModal.modal('hide');
  }
}

export default FilterSwitchModal;
