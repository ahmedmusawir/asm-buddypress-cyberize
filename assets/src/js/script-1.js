/**
 * Manage global libraries like jQuery or THREE from the package.json file
 */

// Import custom modules example
import App from './modules/app-es6.js';

const app = new App();

/**
 * DEPTH 3 SUBMENU FOR BOOTSTRAP 4
 */
import DepthThreeSubMenu from './modules/depth3-submenu';

// const d3Menu = new DepthThreeSubMenu();

/**
 *
 * MAKE DROPDOWN MENU PARENT CLICKABLE. TURNS 'CLICK TO DROP' TO 'HOVER TO DROP'
 *
 */

// jQuery(function($) {

//   if ($(window).width() > 769) {
//     $('.navbar .dropdown').hover(function() {
//       $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

//     }, function() {
//       $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

//     });

//     $('.navbar .dropdown > a').click(function() {
//       location.href = this.href;
//     });

//   }

// });
