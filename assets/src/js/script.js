import ASMDropdownMenu from './_modules/ASMDropdownMenu';
import ASMProfileEditMenu from './_modules/ASMProfileEditMenu';

import AthleteFiltersParent from './_modules/athlete-filters/AthleteFiltersParent';
import AthleteSportsFiltersSelect from './_modules/athlete-filters/AthleteSportsFiltersSelect';
import AthleteGenderFiltersSelect from './_modules/athlete-filters/AthleteGenderFiltersSelect';
import AthleteAvailFiltersSelect from './_modules/athlete-filters/AthleteAvailFiltersSelect';
import AthleteClassYearFiltersSelect from './_modules/athlete-filters/AthleteClassYearFiltersSelect';
import AthleteLocationFiltersSelect from './_modules/athlete-filters/AthleteLocationFiltersSelect';
import AthleteVerificationFiltersSelect from './_modules/athlete-filters/AthleteVerificationFiltersSelect';

import UniversityFiltersParent from './_modules/univ-filters/UnivFiltersParent';
import UnivDivisionsFiltersSelect from './_modules/univ-filters/UnivDivisionsFiltersSelect';
import UnivMensSportsFiltersSelect from './_modules/univ-filters/UnivMenSportsFiltersSelect';
import UnivWomensSportsFiltersSelect from './_modules/univ-filters/UnivWomenSportsFiltersSelect';

class App {
  constructor() {
    console.info('ES6 App Initialized!');

    // ASM Global Dropdown Navigation
    new ASMDropdownMenu();
    // ASM Athlete Profile Edit Menu Toggle
    new ASMProfileEditMenu();

    // ATHLETE FILTER PARENT
    new AthleteFiltersParent();
    // ATHLETE SPORTS SELECT
    new AthleteSportsFiltersSelect();
    // ATHLETE GENDER SELECT
    new AthleteGenderFiltersSelect();
    // ATHLETE AVAILABLILITY SELECT
    new AthleteAvailFiltersSelect();
    // ATHLETE CLASS YEAR SELECT
    new AthleteClassYearFiltersSelect();
    // ATHLETE LOCATION SELECT
    new AthleteLocationFiltersSelect();
    // ATHLETE VERIFY SELECT
    new AthleteVerificationFiltersSelect();

    // UNIVERSITY FILTER PARENT
    new UniversityFiltersParent();
    // UNIVERSITY DIVISION FILTER SELECT
    new UnivDivisionsFiltersSelect();
    // UNIVERSITY MEN'S SPORTS FILTER SELECT
    new UnivMensSportsFiltersSelect();
    // UNIVERSITY WOMEN'S SPORTS FILTER SELECT
    new UnivWomensSportsFiltersSelect();
  }
}

const app = new App();
