import $ from 'jquery';

class UniversityFiltersParent {
  constructor() {
    // this.init();
    this.doc = $(document);
    // COLLECTING RESET BUTTON
    this.resetBtn = $('#univ-filter-reset');
    // COLLECTING RESET BUTTON
    this.locationBtn = $('#location-dropdown-btn');
    // COLLECTIN DROPDOWN
    this.dropDownBox = $('#menu-university-menu');

    // console.log(this.button);
    this.setEvents();
  }

  init = () => {
    console.log('Univ Parent Filter Reset');
  };

  setEvents() {
    this.resetBtn.on('click', this.resetFilters);
    this.locationBtn.on('click', this.locationDropdownIn);
    this.dropDownBox.on('mouseleave', this.locationDropdownOut);
    this.doc.on('mouseup', this.docClick);
  }

  docClick = (e) => {
    // console.log('doc mouse up');
    // const dropDownBox = $('#menu-university-menu');
    if (!this.dropDownBox.is(e.target)) {
      this.dropDownBox.removeClass('is-active');
    }
  };

  locationDropdownIn = (e) => {
    console.log('location btn clicked');
    this.dropDownBox.addClass('is-active');
  };

  locationDropdownOut = (e) => {
    // console.log('location btn clicked');
    this.dropDownBox.addClass('d-none');
  };

  resetFilters = () => {
    const theItem = $('.univ-post-item');
    console.log('Univ Reset btn clicked');

    const division = $('#division-select');
    division.val('all');

    const men = $('#men-select');
    men.val('all');

    const women = $('#women-select');
    women.val('all');

    const locationState = $('#location-state-select');
    locationState.val('all');

    theItem.addClass('d-none');
    setTimeout(function () {
      theItem.removeClass('d-none');
    });
  };

  // noDataFound() {
  //   // ITEMS WITH d-none CLASS
  //   const dNoneItem = $('.univ-post-item.d-none');
  //   const dNoneItemCount = dNoneItem.length;
  //   console.log(`Total d-none item count: ${dNoneItemCount}`);

  //   // ITEMS
  //   const listItem = $('.univ-post-item');
  //   const itemCount = listItem.length;
  //   console.log(`Total item count: ${itemCount}`);
  // }
}

export default UniversityFiltersParent;
