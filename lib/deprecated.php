<?php
/**
 * Classes and functions deprecated
 * @package ItalyStrap
 */

use \ItalyStrap;
use \ItalyStrap\Core;
use \ItalyStrap\Core\Bootstrap_Navwalker;

/**
 * Class deprecated, use Bootstrap_Navwalker instead
 * @deprecated 3.1.0 Class deprecated
 */
class wp_bootstrap_navwalker extends Bootstrap_Navwalker{

	/**
	 * Deprecated class
	 */
	public function __construct() {

		_deprecated_function( 'wp_bootstrap_navwalker', '3.1.0', 'Bootstrap_Navwalker' );

	}

}

// End of file.