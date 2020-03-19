/**
 * This is to enable the Depth 3 submenu on a bootstrap 4 Nav which won't work by default
 */
// import './depth3-submenu.css';

class DepthThreeSubMenu {
  constructor() {
    this.orderForm = document.querySelector('#menu-item-6590');
    this.orderFormDropdown = document.querySelector(
      '#navbar-dropdown-menu-link-6590'
    );
    this.orderFormDropdown.classList.add = 'navbar-dropdown-menu-link-6590';

    console.log(this.orderFormDropdown);

    this.loadEventListners();
  }

  loadEventListners = () => {
    this.orderForm.addEventListener('click', this.clickHandler);
  };

  clickHandler = () => {
    console.log('Clicked Order Form');
    this.orderFormDropdown.style.display = 'block !important';
    this.orderForm.classList.add = 'test';
  };
}

export default DepthThreeSubMenu;
