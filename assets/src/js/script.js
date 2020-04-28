import ASMDropdownMenu from './_modules/ASMDropdownMenu';
import ASMProfileEditMenu from './_modules/ASMProfileEditMenu';
import UniversityFilters from './_modules/UniversityFilters';
import AthleteSportsFiltersSelect from './_modules/AthleteSportsFiltersSelect';
import AthleteFiltersSelect from './_modules/AthleteFiltersSelect';
import AthleteGenderFiltersSelect from './_modules/AthleteGenderFiltersSelect';
import AthleteAvailFiltersSelect from './_modules/AthleteAvailFiltersSelect';

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
    const filtersSelect = new AthleteFiltersSelect();
    // ATHLETE SPORTS SELECT
    const AthleteSportsFilter = new AthleteSportsFiltersSelect();
    // ATHLETE GENDER SELECT
    const athleteGenderFilter = new AthleteGenderFiltersSelect();
    // ATHLETE AVAILABLILITY SELECT
    const athleteAvailFilter = new AthleteAvailFiltersSelect();
  }
}

const app = new App();
