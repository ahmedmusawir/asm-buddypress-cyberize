class ASMProfileEditMenu {
  constructor() {
    // console.info('ASM Edit Menu initialized!');

    // EDIT PROFILE NAV BUTTON
    this.editProfileButton = document.getElementById(
      'edit-athlete-profile-button'
    );
    // EDIT PROFILE BOX
    this.editProfileBox = document.getElementById('athlete-profile-edit-box');

    if (this.editProfileBox) {
      this.addEvents();
    }
  }

  addEvents = () => {
    this.editProfileButton.addEventListener('click', this.menuToggle);
  };

  menuToggle = () => {
    // console.log('Btn clicked');
    this.editProfileBox.classList.toggle('d-none');
  };
}

export default ASMProfileEditMenu;
