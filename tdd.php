<?php
/**
 * Plugin Name: Tdd Example
 * Description: Example.
 * Version:     1.0.0
/**

# unit-tested-plugin.php
 
 
/**
 * Get a plugin option from the WordPress database.
 *
 * @param string $name
 *
 * @return mixed
 */

namespace UnitTestDemo;
class UnitTestDemo{

	static function demo_get_option($name)
	{
	    return 'demo_' . $name;
	}
}
