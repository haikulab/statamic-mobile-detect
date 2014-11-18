<?php
/**
 * Plugin
 * Mobile Device detection implementation for Statamic
 *
 * @author      Sergei Filippov
 *
 * @copyright   2014 Haiku Lab Limited
 * @link        https://github.com/haikulab
 * @license     http://haikulab.co.nz
 * @ref         https://github.com/serbanghita/Mobile-Detect
 */
class Plugin_Mobile_Detect extends Plugin {

   var $meta = array(
        'name'       => 'Mobile Detect',
        'version'    => '0.1.3',
        'author'     => 'Sergei Filippov',
        'author_url' => 'http://haiku.co.nz'
    );

    function __construct() {
        parent::__construct();

        require_once('Mobile-Detect/Mobile_Detect.php');

        // todo: fix the detection!!
        $_folder = $this->addon_location . DIRECTORY_SEPARATOR ."Mobile-Detect";
        $_file = $_folder . DIRECTORY_SEPARATOR . "Mobile_Detect.php";
        if (is_dir($_folder)) {
            if(file_exists($_file)){
                //include the Mobile Detect class
                require_once('Mobile-Detect/Mobile_Detect.php');
            } else {
                $this->log->fatal("Mobile_Detect.php is missing\n Refer to the README.md, specifically Git Submodules");
            }
        }
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

        // get the device type e.g. Mobile, Tablet, Computer
        $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

        // return string value of device type, else return string "computer"
        return $deviceType;
    }

    /**
     * Lets you know what version of the Mobile Detect library you are using
     *
     * @param   none
     * @return  string $scriptVersion
     */
    public function library_version() {

        $detect = new Mobile_Detect; // instantiate Mobile_Detect Object

        $scriptVersion = $detect->getScriptVersion(); // get version of the Mobile Detector library

        return $scriptVersion;
    }
}
