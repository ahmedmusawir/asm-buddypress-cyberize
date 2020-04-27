import ASMDropdownMenu from './_modules/ASMDropdownMenu';
import ASMProfileEditMenu from './_modules/ASMProfileEditMenu';
import UniversityFilters from './_modules/UniversityFilters';
import AthleteFilters from './_modules/AthleteFilters';
import AthleteFiltersSelect from './_modules/AthleteFiltersSelect';

class App {
  constructor() {
    console.info('ES6 App Initialized!');

    // ASM Global Dropdown Navigation
    const ASMDropdownNav = new ASMDropdownMenu();
    // ASM Athlete Profile Edit Menu Toggle
    const ASMProfileEditNav = new ASMProfileEditMenu();
    // University Filters
    const univFilters = new UniversityFilters();
    // Athlete Filters
    // const athleteFilters = new AthleteFilters();
    // Athlete Filters Select
    // const filtersSelect = new AthleteFiltersSelect();
  }
}

const app = new App();
