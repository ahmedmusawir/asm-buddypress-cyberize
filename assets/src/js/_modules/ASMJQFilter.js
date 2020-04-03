import $ from 'jquery';

class ASMTestJQModule {
  constructor() {
    this.init();
    // COLLECTING BUTTON
    this.button = $('.list-inline-item');

    this.events();
  }

  init = () => {
    console.log('ASM JQ Filter Init');
  };

  // events() {
  //   this.button.on('click', this.clickHandler);
  // }

  events = () => {
    this.button.on('click', function() {
      // console.log($(this).attr('id'));
      const sport = $(this).attr('id');
      const $theItem = $('.item-entry-asm');
      if (sport == 'all') {
        $theItem.addClass('d-none');
        setTimeout(function() {
          $theItem.removeClass('d-none');
        });
      } else {
        $theItem.addClass('d-none');
        setTimeout(function() {
          $(`.${sport}`).removeClass('d-none');
        });
      }
    });
  };

  // clickHandler() {
  //   // console.log('sports btn clicked ...');
  //   // const sport = this.attr('id');
  //   console.log(this);
  // }
}

export default ASMTestJQModule;
