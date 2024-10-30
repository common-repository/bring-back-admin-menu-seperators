<?php
/**
 * Plugin Name: Bring Back Admin Seperators
 * Plugin URI: http://themegarden.de/infos/bring-back-admin-separators/
 * Description: Get back the menu seperators in WordPress 3.8+ Admin Interface
 * Version: 1.0
 * Author: Björn Dammann
 * Author URI: http://themegarden.de
 * License: GPL2
 */
 
function admin_seperators() {
   echo '<style type="text/css">
   		#adminmenu li.wp-menu-separator {margin: 0;}
   		.admin-color-fresh #adminmenu li.wp-menu-separator {background: #444;}
   		.admin-color-midnight #adminmenu li.wp-menu-separator {background: #4a5258;}
   		.admin-color-light #adminmenu li.wp-menu-separator {background: #c2c2c2;}
   		.admin-color-blue #adminmenu li.wp-menu-separator {background: #3c85a0;}
   		.admin-color-coffee #adminmenu li.wp-menu-separator {background: #83766d;}
   		.admin-color-ectoplasm #adminmenu li.wp-menu-separator {background: #715d8d;}
   		.admin-color-ocean #adminmenu li.wp-menu-separator {background: #8ca8af;}
   		.admin-color-sunrise #adminmenu li.wp-menu-separator {background: #a43d39;}
         </style>';
}
add_action('admin_head', 'admin_seperators');

 ?>