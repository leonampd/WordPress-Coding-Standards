<?php
/**
 * WordPress Coding Standard.
 *
 * @package WPCS\WordPressCodingStandards
 * @link    https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards
 * @license https://opensource.org/licenses/MIT MIT
 */

namespace WordPressCS\WordPress\Sniffs\PHP;

/**
 * Discourages the use of various native PHP functions and suggests alternatives.
 *
 * @package    WPCS\WordPressCodingStandards
 *
 * @since      0.1.0
 * @since      0.10.0 The checks for the POSIX functions have been replaced by the stand-alone
 *                    sniff \WordPressCS\WordPress\Sniffs\PHP\POSIXFunctionsSniff.
 * @deprecated 0.11.0 The checks for the PHP development functions have been replaced by the
 *                    stand-alone \WordPressCS\WordPress\Sniffs\PHP\DevelopmentFunctionsSniff.
 *                    The checks for the WP deprecated functions have been replaced by the
 *                    stand-alone \WordPressCS\WordPress\Sniffs\WP\DeprecatedFunctionsSniff.
 *                    The checks for the PHP functions which have a WP alternative has been replaced
 *                    by the stand-alone \WordPressCS\WordPress\Sniffs\WP\AlternativeFunctionsSniff.
 *                    The checks for the WP discouraged functions have been replaced by the
 *                    stand-alone sniff \WordPressCS\WordPress\Sniffs\WP\DiscouragedFunctionsSniff.
 *                    The checks for the PHP discouraged functions have been replaced by the
 *                    stand-alone sniff \WordPressCS\WordPress\Sniffs\WP\DiscouragedPHPFunctionsSniff.
 *                    The check for the `register_globals` has been removed as there is no such
 *                    function. To check for `register_globals` ini directive use
 *                    PHPCompatibility.PHP.DeprecatedIniDirectives from wimg/PHPCompatibility.
 */
class DiscouragedFunctionsSniff {

	/**
	 * Don't use.
	 *
	 * @deprecated 0.11.0
	 *
	 * @return int[]
	 */
	public function register() {
		return array();
	}

	/**
	 * Don't use.
	 *
	 * @deprecated 0.11.0
	 *
	 * @param \PHP_CodeSniffer_File $phpcsFile A PHP_CodeSniffer file.
	 * @param int                   $stackPtr  The position of the token.
	 *
	 * @return void
	 */
	public function process( \PHP_CodeSniffer_File $phpcsFile, $stackPtr ) {}

}
