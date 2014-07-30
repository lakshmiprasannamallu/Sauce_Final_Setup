<?php

require_once 'vendor/autoload.php';

class SampleTest extends Sauce\Sausage\WebDriverTestCase
{

    protected $start_url = 'http://position2.com';

    public static $browsers = array(
        // run FF15 on Windows 8 on Sauce
        array(
            'browserName' => 'firefox',
            'desiredCapabilities' => array(
                'version' => '28',
                'platform' => 'Windows 2012',
            )
        ),
 }
