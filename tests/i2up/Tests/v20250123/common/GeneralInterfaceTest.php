<?php
namespace i2up\Test\v20250123\common;

use i2up\common\v20250123\GeneralInterface;
use i2up\common\Auth;
                
class GeneralInterfaceTest extends \PHPUnit_Framework_TestCase
 {
    private $generalInterface;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> generalInterface = new GeneralInterface(new Auth());
    }

    public function testDescribeVersion()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> describeVersion($arr);
        $this->do_assert($res);
    }

    public function testLatestVersion()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'plat'=>'example_plat',
        );
        
        
        $res = $generalInterface -> latestVersion($arr);
        $this->do_assert($res);
    }

    public function testListVersionHistory()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> listVersionHistory($arr);
        $this->do_assert($res);
    }

    public function testNodeConnectTest()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'ip'=>'',
            'port'=>'',
            'type'=>'node',
            'node_uuids'=>array(),
        );
        
        
        $res = $generalInterface -> nodeConnectTest($arr);
        $this->do_assert($res);
    }

    public function testUpMonitorOverall()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> upMonitorOverall($arr);
        $this->do_assert($res);
    }

    public function testOverall()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> overall($arr);
        $this->do_assert($res);
    }

    public function testSysadmin()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> sysadmin($arr);
        $this->do_assert($res);
    }

    public function testStatusOverall()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> statusOverall($arr);
        $this->do_assert($res);
    }

    public function testStatusStreamOverall()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> statusStreamOverall($arr);
        $this->do_assert($res);
    }

    public function testListOverallLogs()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'get_all'=>0,
            'limit'=>1,
            'days'=>'',
        );
        
        
        $res = $generalInterface -> listOverallLogs($arr);
        $this->do_assert($res);
    }

    public function testListOverallResourceSta()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> listOverallResourceSta($arr);
        $this->do_assert($res);
    }

    public function testListOverallRealTimeCopy()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> listOverallRealTimeCopy($arr);
        $this->do_assert($res);
    }

    public function testListOverallHa()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> listOverallHa($arr);
        $this->do_assert($res);
    }

    public function testListOverallCdm()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> listOverallCdm($arr);
        $this->do_assert($res);
    }

    public function testListOverallFspMv()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> listOverallFspMv($arr);
        $this->do_assert($res);
    }

    public function testNodeRepSummary()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'summary'=>'',
            'cache'=>'',
            'rep_rule'=>'',
            'filter'=>'',
        );
        
        
        $res = $generalInterface -> nodeRepSummary($arr);
        $this->do_assert($res);
    }

    public function testListVpRuleStat()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'type'=>'VP_PT',
            'wk_uuid'=>'AC7A5A1F-5BB1-41D6-E075-1648ADC5C60B',
            'mode'=>'month',
            'up_uuids'=>array(),
        );
        
        
        $res = $generalInterface -> listVpRuleStat($arr);
        $this->do_assert($res);
    }

    public function testListSchedule()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $generalInterface -> listSchedule($arr);
        $this->do_assert($res);
    }

    public function testGetDashboardHotColdData()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> getDashboardHotColdData($arr);
        $this->do_assert($res);
    }

    public function testGetDashboardStatOverall()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'statistics_days'=>1,
        );
        
        
        $res = $generalInterface -> getDashboardStatOverall($arr);
        $this->do_assert($res);
    }

    public function testUpdateDashboardPlate()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'plate_info'=>array(
            '0'=>array(
            'name'=>'',
            'display'=>1,),),
        );
        
        
        $res = $generalInterface -> updateDashboardPlate($arr);
        $this->do_assert($res);
    }

    public function testGetDashboardPlate()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> getDashboardPlate($arr);
        $this->do_assert($res);
    }

    public function testCreateColumnExt()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'type'=>'',
            'list_col'=>array(
            'wk_ip'=>array(
            'display'=>'1',
            'width'=>'100',),
            'bk_ip'=>array(
            'display'=>'1',),
            'cdp_switch'=>array(
            'display'=>'1',),
            'name'=>array(
            'display'=>1,
            'width'=>80,),),
        );
        
        
        $res = $generalInterface -> createColumnExt($arr);
        $this->do_assert($res);
    }

    public function testDescribeColumnext()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'type'=>'',
        );
        
        
        $res = $generalInterface -> describeColumnext($arr);
        $this->do_assert($res);
    }

    public function testExportRules()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'suffix'=>'csv',
            'type'=>'rep_backup',
            'sub_type'=>'0',
            'where_args'=>array(
            'timing_type'=>'',
            'raw_uuid'=>'',),
            'uuids'=>array(),
            'for_import'=>0,
            'filter_uuid'=>'',
        );
        
        
        $res = $generalInterface -> exportRules($arr);
        $this->do_assert($res);
    }

    public function testImportRules()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'type'=>'',
            'file'=>'',
        );
        
        
        $res = $generalInterface -> importRules($arr);
        $this->do_assert($res);
    }

    public function testListStatisticsReport()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'start_time'=>'',
            'end_time'=>'',
        );
        
        
        $res = $generalInterface -> listStatisticsReport($arr);
        $this->do_assert($res);
    }

    public function testCsrSign()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'csr_file'=>'-----BEGIN CERTIFICATE REQUEST-----
MIID7jCCAlYCAQAwgagxCzAJBgNVBAYTAkNOMREwDwYDVQQIDAhTaGFuZ2hhaTEU
MBIGA1UEBwwLR2xhc3RvbmJ1cnkxHjAcBgNVBAoMFUluZm9ybWF0aW9uMiBTb2Z0
d2FyZTEcMBoGA1UECwwTSTJzb2Z0IERldmVsb3AgVGVhbTEMMAoGA1UEAwwDZGV2
MSQwIgYJKoZIhvcNAQkBFhVzdXBwb3J0QGluZm8yc29mdC5jb20wggGiMA0GCSqG
SIb3DQEBAQUAA4IBjwAwggGKAoIBgQDXfZ9/Kxgwyaa9OyYbxbFzn8D4C35PlvyA
XwW7tRrYr9BVfO2k9ZmSb2rVIokhmC69ZSYtpeQkmX8hEdNDraDs+Ikvia5nj96K
MfbVuepfOKEXhVGaLGaXZ/FAlIcobYTTk57KF7k51leSStqc3IC8V+hKfwaMH651
qFXIUZAC/+WZxZU43hedr2+HyDlatkLqluzWAeZLzAYzaad/7sW9MDP9sPQ8Gp1o
J4ib4bDqIP1CtC6ud6A47zjKai1wVfMsZIL2m8AjW39LQQmEx34tDfiv5UKAPOt4
/Oy7x5XlFN5KJNSMnAN+z+Hd6F08jcIUxyMQ8F1rriVS+XlE5ZzM8a93sH80IH2U
odMSkxwy3e6Jm1hgz60+K0Q3KZX3xeH48G7SqVa8iHVsmaqa0BpGEAII73ANDIVr
JFAdQa44AX/080YeUdwZG82ArlCesrE90K7qXu1HEGc9XA2fixYWNbZIuVUxMl2Q
+TEtYTMuREfU4wLvOWWzIcc/JrF5vwkCAwEAAaAAMA0GCSqGSIb3DQEBDAUAA4IB
gQBPnbOV9BuAtEkmVOXO7tu/ZBFc6WbcRAesCb9N+M4Z+JoFwFZBsUTQdrpuIsPQ
SJk6FDB4DyALQ0C0kbnUUczeSTYOc0/tpfarc1cTHU9CYit73UW6Ww/vT1eLB5H1
6vV3b3mRklIPE9dKLYG8lVOGuiKatjL41CI1TdUd+ZuYolCuxcJBBCamMdTCjl3m
cnTDOgPZr9LdWgfYXUpLfZg12+4AyQ1tztPouX6Ux+TMGG7vpV+SzhQmywohwCiv
V/V83RoKbR2IClnaRGnzUg77/KSrP7c1JBmRXNPusos1Yt9qecuoBE3Ky0t7px2k
PTIS4vnLtICCpPHGtsxVHq9ylcu6uSz/ZPGgA0xmzXeilELLvoAzYW+S41qds3XV
UyJ+NLO7M4scciU5zMemBdSbKNbbi4DfofMg15Lc6ljDz2llFhpMdDLOVmbzohkg
SzxWfxCZU7I3oSHr9/WmHxZiDGdzgJKv0WnmIxv0CEfeauzj+tn4vzy/CnutQwY2
K+M=
-----END CERTIFICATE REQUEST-----
',
        );
        
        
        $res = $generalInterface -> csrSign($arr);
        $this->do_assert($res);
    }

    public function testListCerts()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> listCerts($arr);
        $this->do_assert($res);
    }

    public function testDownloadCa()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> downloadCa($arr);
        $this->do_assert($res);
    }

    public function testListRpcTask()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> listRpcTask($arr);
        $this->do_assert($res);
    }

    public function testListCronTask()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array();
        
        
        $res = $generalInterface -> listCronTask($arr);
        $this->do_assert($res);
    }

    public function testDeleteCronTask()
    {
        $generalInterface = $this -> generalInterface;
        $arr = array(
            'ids'=>array(),
        );
        
        
        $res = $generalInterface -> deleteCronTask($arr);
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