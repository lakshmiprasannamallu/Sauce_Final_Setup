<?php

require_once 'vendor/autoload.php';

require_once 'php-webdriver';
class SampleTest extends Sauce\Sausage\WebDriverTestCase
$wd = new WebDriver();
$session = $wd->session();

function cookies_contain($cookies, $name) {
    foreach ($cookies as $arr) {
        if ($arr['name'] == $name) {
            return true;
        }
    }
    return false;
}

function get_cookie($cookies, $name) {
    foreach ($cookies as $arr) {
        if ($arr['name'] == $name) {
            return $arr;
        }
    }
    return false;
}

function alert_present($session) {
    try {
        $session->alert_text();
        return true;
    } catch (NoAlertOpenWebDriverError $e) {
       return false;
    }
}

function split_keys($toSend){
    $payload = array("value" => preg_split("//u", $toSend, -1, PREG_SPLIT_NO_EMPTY));
    return $payload;
}

$session->open("http://www.position2.com/");
if (! (strpos($session->element("tag name", "html")->text(), "SOLUTIONS") !== false)) {
    echo "verifyTextPresent failed";
}
$session->element("link text", "SOLUTIONS")->click();
$session->element("xpath", "//header/div[1]/div/div[2]/div[2]/div/div/div/ul/li[2]/a")->click();
$session->element("link text", "MARKETING AUTOMATION")->click();

$session->close();
 }
