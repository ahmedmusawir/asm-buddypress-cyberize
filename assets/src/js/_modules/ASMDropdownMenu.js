class ASMDropdownMenu {
  constructor() {
    console.info('ASM Dropdown Menu initialized!');

    // THE PAGE
    this.fullPage = document.getElementById('page');
    // THE DROPDOWN BUTTON
    this.hamburgerButton = document.querySelector('.dropdown-nav-button');
    // THE DROPDOWN MENU
    this.dropdownMenuWindow = document.getElementById('dropdown-navigation');
    // THE DROPDOWN MENU CLOSE BUTTON
    this.dropdownMenuWindowCloseButton = document.getElementById(
      'dropdown-close-button'
    );

    console.log(`button: ${this.hamburgerButton}`);
    // console.log(`dropdown menu: ${this.dropdownMenuWindow}`);
    // console.log(`dropdown menu button: ${this.dropdownMenuWindowCloseButton}`);

    // ADDING CLICK EVENTS
    this.addEvents();
  }

  addEvents = () => {
    this.hamburgerButton.addEventListener('click', this.menuOpen);
    this.dropdownMenuWindowCloseButton.addEventListener(
      'click',
      this.justClose
    );
  };

  menuOpen = () => {
    // console.log('Button Clicked');
    this.dropdownMenuWindow.classList.add('box-open');
    this.fullPage.classList.add('box-close');
  };

  justClose = () => {
    console.log('Button Clicked');
    this.dropdownMenuWindow.classList.remove('box-open');
    this.dropdownMenuWindow.classList.add('box-close');
    this.fullPage.classList.remove('box-close');
  };
}

export default ASMDropdownMenu;
