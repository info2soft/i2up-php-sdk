<?php
namespace i2up\Test\v20240228\dashboard;

use i2up\dashboard\v20240228\Dashboard;
use i2up\common\Auth;
                
class DashboardTest extends \PHPUnit_Framework_TestCase
 {
    private $dashboard;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> dashboard = new Dashboard(new Auth());
    }

    public function testHa()
    {
        $dashboard = $this -> dashboard;
        $arr = array();
        $res = $dashboard -> ha($arr);
        $this->do_assert($res);
    }

    public function testResourceView()
    {
        $dashboard = $this -> dashboard;
        $arr = array();
        $res = $dashboard -> resourceView($arr);
        $this->do_assert($res);
    }

    public function testResourceProtectionCoverage()
    {
        $dashboard = $this -> dashboard;
        $arr = array(
            'level_a'=>1,
            'level_b'=>1,
            'level_c'=>1,
            'vp_uuid'=>'',
        );
        $res = $dashboard -> resourceProtectionCoverage($arr);
        $this->do_assert($res);
    }

    public function testTaskView()
    {
        $dashboard = $this -> dashboard;
        $arr = array();
        $res = $dashboard -> taskView($arr);
        $this->do_assert($res);
    }
    public function testListBackupCenter()
    {
        $dashboard = $this -> dashboard;
        $arr = array();
        $res = $dashboard -> listBackupCenter($arr);
        $this->do_assert($res);
    }

    public function testGetBackupCenterInfo()
    {
        $dashboard = $this -> dashboard;
        $arr = array(
            'vp_uuid'=>'',
        );
        $res = $dashboard -> getBackupCenterInfo($arr);
        $this->do_assert($res);
    }

    public function testListHosts()
    {
        $dashboard = $this -> dashboard;
        $arr = array();
        $res = $dashboard -> listHosts($arr);
        $this->do_assert($res);
    }
    
    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}