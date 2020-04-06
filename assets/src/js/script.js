import ASMDropdownMenu from './_modules/ASMDropdownMenu';
import ASMProfileEditMenu from './_modules/ASMProfileEditMenu';
import ASMJQFilter from './_modules/ASMJQFilter';
import UniversityFilters from './_modules/UniversityFilters';
import AthleteFilters from './_modules/AthleteFilters';

class App {
  constructor() {
    console.info('ES6 App Initialized!');

    // ASM Global Dropdown Navigation
    const ASMDropdownNav = new ASMDropdownMenu();
    // ASM Athlete Profile Edit Menu Toggle
    const ASMProfileEditNav = new ASMProfileEditMenu();
    // ASM Jquery Test
    // const jQTest = new ASMTestJQModule();
    // ASM Jquery Test
    // const jQFilter = new ASMJQFilter();
    // University Filters
    const univFilters = new UniversityFilters();
    // Athlete Filters
    const athleteFilters = new AthleteFilters();
  }
}

const app = new App();
