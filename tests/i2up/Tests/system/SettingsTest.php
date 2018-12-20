<?php

namespace i2up\Tests\system;

use i2up\system\v20181217\Settings;
use i2up\common\Auth;

class SettingsTest extends \PHPUnit_Framework_TestCase
{
    private $user;
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin','Info1234');
        $this -> user = new Settings($auth);
    }

    public function testListSysSetting()
    {
        $user = $this -> user;
        $this->assertNotNull($user -> listSysSetting());
        var_dump($user -> listSysSetting());
    }
    public function testUpdateSetting()
    {
        $user = $this -> user;
        $this->assertNotNull($user -> updateSetting());
    }
    public function testDescribeCCip()
    {
        $hostIp = $this -> user;
        $this->assertNotNull($hostIp -> describeCCip());
    }
}