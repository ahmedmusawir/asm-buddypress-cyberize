import $ from 'jquery';

class ASMTestJQModule {
  constructor() {
    this.init();
    // COLLECTING BUTTON
    this.$button = $('.list-inline-item');

    this.setEvents();
  }

  init = () => {
    console.log('ASM JQ Filter Init');
  };

  setEvents() {
    this.$button.on('click', this.clickHandler);
  }

  clickHandler() {
    const $sport = $(this).attr('id');
    const $theItem = $('.item-entry-asm');

    if ($sport == 'all') {
      $theItem.addClass('d-none');
      setTimeout(function() {
        $theItem.removeClass('d-none');
      });
    } else {
      $theItem.addClass('d-none');
      setTimeout(function() {
        $(`.${$sport}`).removeClass('d-none');
      });
    }

    console.log('list-inline-item clicked!');
    console.log(this);
  }
}

export default ASMTestJQModule;
