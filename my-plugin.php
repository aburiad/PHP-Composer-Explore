<?php
/**
 * Plugin Name: My Plugin
 * Description: A description of my plugin.
 * Version: 1.0
 * Author: Your Name
 */

// Include Composer's autoloader
require_once __DIR__ . '/vendor/autoload.php';

// Your plugin code here


// use MyPlugin\Admin\mypluginAdmin;

// // Initialize the admin class
// $admin = new mypluginAdmin();

$admin = new Admin\mypluginAdmin();