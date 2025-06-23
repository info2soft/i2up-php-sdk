<?php
namespace i2up\Test\v20250630\common;

use i2up\common\v20250630\Lic;
use i2up\common\Auth;
                
class LicTest extends \PHPUnit_Framework_TestCase
 {
    private $lic;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> lic = new Lic(new Auth());
    }

    public function testDescribeActivateInfo()
    {
        $lic = $this -> lic;
        $arr = array(
            'group_sn'=>'20-4570098558',
        );
        
        
        $res = $lic -> describeActivateInfo($arr);
        $this->do_assert($res);
    }

    public function testCdmCapacity()
    {
        $lic = $this -> lic;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $lic -> cdmCapacity($arr);
        $this->do_assert($res);
    }

    public function testUnsubscribeLic()
    {
        $lic = $this -> lic;
        $arr = array(
            'sn'=>'',
            'operate'=>'unsubscribe',
        );
        
        
        $res = $lic -> unsubscribeLic($arr);
        $this->do_assert($res);
    }

    public function testHdfsCapacity()
    {
        $lic = $this -> lic;
        $arr = array();
        
        
        $res = $lic -> hdfsCapacity($arr);
        $this->do_assert($res);
    }

    public function testListNearExpirationLicenses()
    {
        $lic = $this -> lic;
        $arr = array();
        
        
        $res = $lic -> listNearExpirationLicenses($arr);
        $this->do_assert($res);
    }

    public function testUpdateLic()
    {
        $lic = $this -> lic;
        $arr = array(
            'config'=>array(
            'warn_sw'=>1,
            'usage_threshold'=>1,),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $lic -> updateLic($arr);
        $this->do_assert($res);
    }

    public function testDescribeVpAuthDetail()
    {
        $lic = $this -> lic;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $lic -> describeVpAuthDetail($arr);
        $this->do_assert($res);
    }

    public function testGetNodeListForLicense()
    {
        $lic = $this -> lic;
        $arr = array();
        
        
        $res = $lic -> getNodeListForLicense($arr);
        $this->do_assert($res);
    }

    public function testListLicBackupAuthDetail()
    {
        $lic = $this -> lic;
        $arr = array(
            'page'=>'',
            'limit'=>'',
        );
        
        
        $res = $lic -> listLicBackupAuthDetail($arr);
        $this->do_assert($res);
    }

    public function testListLicAlert()
    {
        $lic = $this -> lic;
        $arr = array();
        
        
        $res = $lic -> listLicAlert($arr);
        $this->do_assert($res);
    }

    public function testAvoidAlert()
    {
        $lic = $this -> lic;
        $arr = array(
            'lic_uuids'=>array(),
        );
        
        
        $res = $lic -> avoidAlert($arr);
        $this->do_assert($res);
    }

    public function testDescribeLatestExpireLicense()
    {
        $lic = $this -> lic;
        $arr = array();
        
        
        $res = $lic -> describeLatestExpireLicense($arr);
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