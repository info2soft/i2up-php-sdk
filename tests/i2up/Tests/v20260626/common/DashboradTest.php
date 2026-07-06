<?php
namespace i2up\Test\v20260626\common;

use i2up\common\v20260626\Dashborad;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class DashboradTest extends TestCase
 {
    private $dashborad;
    
    public function setUp():void
    {
        parent::setup();
        $this -> dashborad = new Dashborad(new Auth());
    }

    public function testUpMonitorOverall()
    {
        $dashborad = $this -> dashborad;
        $arr = array();
        
        
        $res = $dashborad -> upMonitorOverall($arr);
        $this->do_assert($res);
    }

    public function testOverall()
    {
        $dashborad = $this -> dashborad;
        $arr = array();
        
        
        $res = $dashborad -> overall($arr);
        $this->do_assert($res);
    }

    public function testSysadmin()
    {
        $dashborad = $this -> dashborad;
        $arr = array();
        
        
        $res = $dashborad -> sysadmin($arr);
        $this->do_assert($res);
    }

    public function testStatusOverall()
    {
        $dashborad = $this -> dashborad;
        $arr = array();
        
        
        $res = $dashborad -> statusOverall($arr);
        $this->do_assert($res);
    }

    public function testGetDashboardStatOverall()
    {
        $dashborad = $this -> dashborad;
        $arr = array(
            'statistics_days'=>1,
            'backup_set_days'=>'',
        );
        
        
        $res = $dashborad -> getDashboardStatOverall($arr);
        $this->do_assert($res);
    }

    public function testListOverallLogs()
    {
        $dashborad = $this -> dashborad;
        $arr = array(
            'get_all'=>0,
            'limit'=>1,
            'days'=>'',
        );
        
        
        $res = $dashborad -> listOverallLogs($arr);
        $this->do_assert($res);
    }

    public function testListOverallResourceSta()
    {
        $dashborad = $this -> dashborad;
        $arr = array();
        
        
        $res = $dashborad -> listOverallResourceSta($arr);
        $this->do_assert($res);
    }

    public function testListOverallRealTimeCopy()
    {
        $dashborad = $this -> dashborad;
        $arr = array();
        
        
        $res = $dashborad -> listOverallRealTimeCopy($arr);
        $this->do_assert($res);
    }

    public function testListOverallHa()
    {
        $dashborad = $this -> dashborad;
        $arr = array();
        
        
        $res = $dashborad -> listOverallHa($arr);
        $this->do_assert($res);
    }

    public function testListOverallCdm()
    {
        $dashborad = $this -> dashborad;
        $arr = array();
        
        
        $res = $dashborad -> listOverallCdm($arr);
        $this->do_assert($res);
    }

    public function testListOverallFspMv()
    {
        $dashborad = $this -> dashborad;
        $arr = array();
        
        
        $res = $dashborad -> listOverallFspMv($arr);
        $this->do_assert($res);
    }

    public function testNodeRepSummary()
    {
        $dashborad = $this -> dashborad;
        $arr = array(
            'summary'=>'',
            'cache'=>'',
            'rep_rule'=>'',
            'filter'=>'',
        );
        
        
        $res = $dashborad -> nodeRepSummary($arr);
        $this->do_assert($res);
    }

    public function testListVpRuleStat()
    {
        $dashborad = $this -> dashborad;
        $arr = array(
            'type'=>'VP_PT',
            'wk_uuid'=>'AC7A5A1F-5BB1-41D6-E075-1648ADC5C60B',
            'mode'=>'month',
            'up_uuids'=>array(),
        );
        
        
        $res = $dashborad -> listVpRuleStat($arr);
        $this->do_assert($res);
    }

    public function testListSchedule()
    {
        $dashborad = $this -> dashborad;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $dashborad -> listSchedule($arr);
        $this->do_assert($res);
    }

    public function testGetDashboardHotColdData()
    {
        $dashborad = $this -> dashborad;
        $arr = array();
        
        
        $res = $dashborad -> getDashboardHotColdData($arr);
        $this->do_assert($res);
    }

    public function testUpdateDashboardPlate()
    {
        $dashborad = $this -> dashborad;
        $arr = array(
            'plate_info'=>array(
            '0'=>array(
            'name'=>'',
            'display'=>1,),),
        );
        
        
        $res = $dashborad -> updateDashboardPlate($arr);
        $this->do_assert($res);
    }

    public function testGetDashboardPlate()
    {
        $dashborad = $this -> dashborad;
        $arr = array();
        
        
        $res = $dashborad -> getDashboardPlate($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        if ($res == null) {
            print "Invalid parameter: body is null or empty, or uuid/id is empty.\n";
        }

        if (isset($res[1])){
            print("Response.statusCode = " . ($res[1])->getResponse()->statusCode);
            print("\nResponse.body = " . ($res[1])->getResponse()->body);
        }
        
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('ret',$res[0]);
        $this->assertEquals(200, $res[0]['ret']);
    }
}