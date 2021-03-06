<?php
/**
 * Subsidiary Sidebar Template
 *
 * Displays widgets for the Subsidiary dynamic sidebar if any have been added to the sidebar through the 
 * widgets screen in the admin by the user.  Otherwise, nothing is displayed.
 *
 * @package Murmur
 * @subpackage Functions
 * @version 0.1.0
 * @author Tung Do <tung@devpress.com>
 * @copyright Copyright (c) 2012, Tung Do
 * @link http://devpress.com/themes/murmur
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

if ( is_active_sidebar( 'subsidiary' ) ) : ?>

	<?php do_atomic( 'before_sidebar_subsidiary' ); // murmur_before_sidebar_subsidiary ?>

	<div id="sidebar-subsidiary" class="sidebar sidebar-subsidiary">
	
		<div class="sidebar-wrap">

			<?php do_atomic( 'open_sidebar_subsidiary' ); // murmur_open_sidebar_subsidiary ?>

			<?php dynamic_sidebar( 'subsidiary' ); ?>

			<?php do_atomic( 'close_sidebar_subsidiary' ); // murmur_close_sidebar_subsidiary ?>
		
		</div><!-- .sidebar-wrap -->

	</div><!-- #sidebar-subsidiary -->

	<?php do_atomic( 'after_sidebar_subsidiary' ); // murmur_after_sidebar_subsidiary ?>

<?php endif; ?>