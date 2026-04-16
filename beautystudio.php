<?php

declare(strict_types=1);

/**
 * EstetStudio Core Plugin
 *
 * @package           @smrtcode
 * @author            Sergey Skorobagatko
 * @copyright         2026 Sergey Skorobagatko
 * @license           GPL-2.0-or-later
 * 
 * @wordpress-plugin
 * Plugin Name: EstetStudio Core
 * Description: Description of the plugin.
 * Author: Sergey Skorobagatko
 * Author URI: https://smrcore.com
 * Version: 0.1.1
 * Requires at least: 6.9
 * Tested up to: 6.9.4
 * Requires PHP: 8.3
 * License: GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: beautystudio
 * Domain Path: /languages
 */

if (! defined('ABSPATH')) {
    exit;
}

define('BEAUTYSTUDIO_DIR', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('BEAUTYSTUDIO_FILE', __FILE__);

require_once __DIR__ . '/src/Support/Autoloader.php';

BeautyStudio\Support\Autoloader::register();

$plugin = new BeautyStudio\Bootstrap();
$plugin->init();
