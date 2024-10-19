<?php

namespace Admin;

class mypluginAdmin{
   function __construct()
   {
       add_action('admin_menu', array($this, 'loadifypreloader_admin_menu'));
   }

   // Add the settings page to the admin menu
   public function loadifypreloader_admin_menu()
   {
       add_menu_page(
           __('Test My Plugin', 'test'),  // Updated text domain
           'Test My Plugin',
           'manage_options',
           'loadify-preloader',
           array($this, 'loadifypreloader_setting')
       );
   }

   // Display the markup for the settings page
   public function loadifypreloader_setting()
   {
       echo "This is markup";
   }


}