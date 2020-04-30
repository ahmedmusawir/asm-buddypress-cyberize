import ASMDropdownMenu from './_modules/ASMDropdownMenu';
import ASMProfileEditMenu from './_modules/ASMProfileEditMenu';
import UniversityFilters from './_modules/UniversityFilters';
import AthleteSportsFiltersSelect from './_modules/AthleteSportsFiltersSelect';
import AthleteFiltersSelect from './_modules/AthleteFiltersSelect';
import AthleteGenderFiltersSelect from './_modules/AthleteGenderFiltersSelect';
import AthleteAvailFiltersSelect from './_modules/AthleteAvailFiltersSelect';
import AthleteClassYearFiltersSelect from './_modules/AthleteClassYearFiltersSelect';
import AthleteLocationFiltersSelect from './_modules/AthleteLocationFiltersSelect';
import AthleteVerificationFiltersSelect from './_modules/AthleteVerificationFiltersSelect';

class App {
  constructor() {
    console.info('ES6 App Initialized!');

    // ASM Global Dropdown Navigation
    const ASMDropdownNav = new ASMDropdownMenu();
    // ASM Athlete Profile Edit Menu Toggle
    const ASMProfileEditNav = new ASMProfileEditMenu();
    // University Filters
    const univFilters = new UniversityFilters();

    // Athlete Filters Select
    const filtersSelect = new AthleteFiltersSelect();
    // ATHLETE SPORTS SELECT
    const athleteSportsFilter = new AthleteSportsFiltersSelect();
    // ATHLETE GENDER SELECT
    const athleteGenderFilter = new AthleteGenderFiltersSelect();
    // ATHLETE AVAILABLILITY SELECT
    const athleteAvailFilter = new AthleteAvailFiltersSelect();
    // ATHLETE CLASS YEAR SELECT
    const athleteClassYearFilter = new AthleteClassYearFiltersSelect();
    // ATHLETE LOCATION SELECT
    const athleteLocationFilter = new AthleteLocationFiltersSelect();
    // ATHLETE VERIFY SELECT
    new AthleteVerificationFiltersSelect();
  }
}

const app = new App();
