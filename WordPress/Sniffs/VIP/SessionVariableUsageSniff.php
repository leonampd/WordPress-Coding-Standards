<?php
/**
 * WordPress Coding Standard.
 *
 * @package WPCS\WordPressCodingStandards
 * @link    https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards
 * @license https://opensource.org/licenses/MIT MIT
 */

namespace WordPressCS\WordPress\Sniffs\VIP;

use WordPressCS\WordPress\PHPCSHelper;

/*
 * Alias the PHPCS 3.x classes to their PHPCS 2.x equivalent if necessary.
 */
if ( version_compare( PHPCSHelper::getVersion(), '2.99.99', '>' ) ) {
    include_once __DIR__ . DIRECTORY_SEPARATOR . 'PHPCSAliases.php';
}

/**
 * Discourages the use of the session variable.
 * Creating a session writes a file to the server and is unreliable in a multi-server environment.
 *
 * @link    https://vip.wordpress.com/documentation/vip/code-review-what-we-look-for/#session_start-and-other-session-related-functions
 *
 * @package WPCS\WordPressCodingStandards
 *
 * @since   0.3.0
 * @since   0.10.0 The sniff no longer needlessly extends the
 *                 \PHP_CodeSniffer\Standards\Generic\Sniffs\PHP\ForbiddenFunctionsSniff
 *                 which it didn't use.
 */
class SessionVariableUsageSniff implements \PHP_CodeSniffer_Sniff {

	/**
	 * Returns an array of tokens this test wants to listen for.
	 *
	 * @return array
	 */
	public function register() {
		return array(
			T_VARIABLE,
		);

	}

	/**
	 * Processes this test, when one of its tokens is encountered.
	 *
	 * @param \PHP_CodeSniffer_File $phpcsFile The file being scanned.
	 * @param int                   $stackPtr  The position of the current token
	 *                                         in the stack passed in $tokens.
	 * @return void
	 */
	public function process( \PHP_CodeSniffer_File $phpcsFile, $stackPtr ) {
		$tokens = $phpcsFile->getTokens();

		if ( '$_SESSION' === $tokens[ $stackPtr ]['content'] ) {
			$phpcsFile->addError( 'Usage of $_SESSION variable is prohibited.', $stackPtr, 'SessionVarsProhibited' );
		}

	}

} // End class.
