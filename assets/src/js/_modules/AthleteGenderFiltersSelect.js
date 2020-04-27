import $ from 'jquery';

class AthleteFilters {
  constructor() {
    this.init();

    // COLLECTING SELECT
    this.$select = $('#gender-select');
    this.setEvents();
  }

  init = () => {
    console.log('ASM Gender Select Filter Init');
  };

  setEvents() {
    this.$select.on('change', this.changeHandler);
  }

  changeHandler() {
    console.log('gender clicked');
    // console.log($(this).val());
    const sportSelect = $('#sports-select');
    // console.log(sportSelect.val());
    const sport = sportSelect.val();
    console.log(sport);

    const $gender = $(this).val();
    // console.log($gender.val());
    const $theItem = $('.item-entry-asm');

    if ($gender == 'all') {
      $theItem.addClass('d-none');
      setTimeout(function () {
        $theItem.removeClass('d-none');
      });
    } else if (sport == 'all') {
      $theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${$gender}`).removeClass('d-none');
      });
    } else {
      $theItem.addClass('d-none');
      setTimeout(function () {
        $(`.${sport}.${$gender}`).removeClass('d-none');
      });
    }
  }
}

export default AthleteFilters;
