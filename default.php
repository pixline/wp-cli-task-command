<?php
/**
 * wp-cli devtools
 *
 * Wrappers around common development utilities
 *
 * @author Paolo Tresso <plugins@swergroup.com>
 * @version 0.2.5
 */

define( 'WPCS_PATH', dirname( __FILE__ ) . '/vendor/WordPress-Coding-Standards/WordPress-Coding-Standards/' );

// work in progress: php-minify
#include( 'commands/minify-command.php' );

// work in progress: PHP Coverage
#include( 'commands/phpcov-command.php' );

// PHP Copy/Paste Detector
include( 'commands/phpcpd-command.php' );

// PHP CodeSniffer
include( 'commands/phpcs-command.php' );

// PHP Dead Code Detector
include( 'commands/phpdcd-command.php' );

// work in progress: PHP Documentor
#include( 'commands/phpdoc-command.php' );

// PHP Lines of Code
include( 'commands/phploc-command.php' );

// PHP Mess Detector
include( 'commands/phpmd-command.php' );

// PHP Report (bundled commands)
include( 'commands/phpreport-command.php' );

// PHPunit
include( 'commands/phpunit-command.php' );

?>