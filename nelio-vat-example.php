<?php
/**
 * The plugin bootstrap file.
 *
 * Plugin Name: Nelio VAT Example
 * Description: Example.
 * Version:     1.0.0
 *
 * Author:      Nelio Software
 * Author URI:  https://neliosoftware.com
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package    VAT_Example
 * @subpackage Root
 * @author     David Aguilera <david.aguilera@neliosoftware.com>
 * @since      1.0.0
 */

/**
 * This function returns the VAT value for the given quantity.
 *
 * @param int $quantity a given quantity.
 *
 * @return float quantity's VAT.
 *
 * @since 1.0.0
 */
function neliovat_get_vat( $quantity ) {
	return 0.21 * $quantity;
}//end neliovat_get_vat()

