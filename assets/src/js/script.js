import ASMDropdownMenu from './_modules/ASMDropdownMenu';
import ASMProfileEditMenu from './_modules/ASMProfileEditMenu';
import ASMTestJQModule from './_modules/ASMTestJQModule';

class App {
  constructor() {
    console.info('ES6 App Initialized!');

    // ASM Global Dropdown Navigation
    const ASMDropdownNav = new ASMDropdownMenu();
    // ASM Athlete Profile Edit Menu Toggle
    const ASMProfileEditNav = new ASMProfileEditMenu();
    // ASM Jquery Test
    const jQTest = new ASMTestJQModule();
  }
}

const app = new App();
