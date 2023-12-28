<?php
/**
 * croquis functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package croquis
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}



/**
 * Theme Update Checker
 */
require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
	'https://github.com/The-Code-Beast/croquis',
	__FILE__,
	'croquis'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');
//this is a new update to branch
