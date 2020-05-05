import $ from 'jquery';

class UniversityFiltersParent {
  constructor() {
    // this.init();

    // COLLECTING RESET BUTTON
    this.button = $('#univ-filter-reset');
    // console.log(this.button);
    this.setEvents();
  }

  init = () => {
    console.log('Univ Parent Filter Reset');
  };

  setEvents() {
    this.button.on('click', this.resetFilters);
  }

  noDataFound() {
    // ITEMS WITH d-none CLASS
    const dNoneItem = $('.univ-post-item.d-none');
    const dNoneItemCount = dNoneItem.length;
    console.log(`Total d-none item count: ${dNoneItemCount}`);

    // ITEMS
    const listItem = $('.univ-post-item');
    const itemCount = listItem.length;
    console.log(`Total item count: ${itemCount}`);
  }

  resetFilters() {
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
  }
}

export default UniversityFiltersParent;
