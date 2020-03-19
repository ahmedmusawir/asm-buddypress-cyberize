class ASMDropdownMenu {
  constructor() {
    console.info('ASM Dropdown Menu initialized!');

    this.hamburgerButton = document.getElementById(
      'dropdown-nav-button-holder'
    );

    console.log(`button: ${this.hamburgerButton}`);
  }
}

export default ASMDropdownMenu;
