<?php

//include the Mobile Detect class
require_once('Mobile-Detect/Mobile_Detect.php');

class Plugin_Mobile_Detect extends Plugin {

    var $meta = array(
        'name'       => 'Mobile Detect',
        'version'    => '0.1',
        'author'     => 'Sergei Filippov',
        'author_url' => 'http://sergeif.me'
    );

  /**
   * Detect what type of device is requesting the page
   *
   * @param   none
   * @return  string (device type)
   */
    public function index() {
        // instantiate Mobile_Detect Object
        $detect = new Mobile_Detect;

        // get the device type e.g. Mobile, Tablet, Computer
        $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

        // return string value of device type, else return string "computer"
        return $deviceType;
    }
}
