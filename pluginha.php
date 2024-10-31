<?php
/*
Plugin Name: pluginha
Description: ALL the latest plugin's from pluginha.com
Plugin URI: http://www.pluginha.com
Version: 1.1
Author: Morteza
License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
License:
 ==============================================================================
 Copyright 2014-2015 pluginha  (email : mortezanano@gmail.com)

 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

// Add pluginha Feed Dashboard Widget
function pluginha_setup_function() {
    add_meta_box( 'pluginha_widget', 'جدیدترین افزونه ها', 'pluginha_widget_function', 'dashboard', 'normal', 'high' );
}
function pluginha_widget_function() {
    include ('feed.php'); // new file where RSS Feed will be called from
}
 
add_action( 'wp_dashboard_setup', 'pluginha_setup_function' );

?>