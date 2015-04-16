<?php
/**
 * Plugin
 * Mobile Device detection implementation for Statamic
 *
 * @author      Sergei Filippov
 *
 * @copyright   2015 Haiku Lab Limited
 * @link        https://github.com/haikulab
 * @license     http://haikulab.co.nz
 * @ref         https://github.com/serbanghita/Mobile-Detect
 */

require_once('Mobile-Detect/Mobile_Detect.php');

class Plugin_Mobile_Detect extends Plugin {

   var $meta = array(
        'name'       => 'Mobile Detect',
        'version'    => '0.2.5',
        'author'     => 'Sergei Filippov',
        'author_url' => 'http://haiku.co.nz'
   );

   function __construct() {

       parent::__construct();

   }
   /**
    * Detect what type of device is requesting the page
    *
    * @param   none
    * @return  string $deviceType
   */
   public function index() {

       // instantiate Mobile_Detect Object
       $detect = new Mobile_Detect;

       // return string value of device type, else return string "computer"
       return ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
   }

   /**
    * Lets you know what version of the Mobile Detect library you are using
    *
    * @param   none
    * @return  string $scriptVersion
   */
   public function library_version() {

       // instantiate Mobile_Detect Object
       $detect = new Mobile_Detect;

       return $detect->getScriptVersion();
   }
}