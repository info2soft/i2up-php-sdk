<?php
namespace i2up\Test\v20260626\hw;

use i2up\hw\v20260626\HDR;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class HDRTest extends TestCase
 {
    private $hDR;
    
    public function setUp():void
    {
        parent::setup();
        $this -> hDR = new HDR(new Auth());
    }

    public function testUpdateSetting()
    {
        $hDR = $this -> hDR;
        $arr = array(
            'hcs_url'=>'',
        );
        
        
        $res = $hDR -> updateSetting($arr);
        $this->do_assert($res);
    }

    public function testModifyProfile()
    {
        $hDR = $this -> hDR;
        $arr = array(
            'hcs_username'=>'',
            'hcs_password'=>'',
        );
        
        
        $res = $hDR -> modifyProfile($arr);
        $this->do_assert($res);
    }

    public function testListProfile()
    {
        $hDR = $this -> hDR;
        $arr = array();
        
        
        $res = $hDR -> listProfile($arr);
        $this->do_assert($res);
    }

    public function testGetOpLogUsers()
    {
        $hDR = $this -> hDR;
        $arr = array();
        
        
        $res = $hDR -> getOpLogUsers($arr);
        $this->do_assert($res);
    }

    public function testGetLicenseData()
    {
        $hDR = $this -> hDR;
        $arr = array(
            'controlItems'=>array(
            '0'=>array(
            'itemType'=>1,
            'itemCode'=>'',),),
        );
        
        
        $res = $hDR -> getLicenseData($arr);
        $this->do_assert($res);
    }

    public function testGetLicenseItems()
    {
        $hDR = $this -> hDR;
        $arr = array();
        
        
        $res = $hDR -> getLicenseItems($arr);
        $this->do_assert($res);
    }

    public function testGetLicenseDescribe()
    {
        $hDR = $this -> hDR;
        $arr = array(
            'num'=>1,
            'sn'=>array(
            '0'=>'10-4167409378-01',
            '1'=>'10-4167409378-02',
            '2'=>'10-4167409378-03',
            '3'=>'10-4167409378-04',
            '4'=>'10-4167409378-05',),
            'key'=>'z2fpC6',
            'sign'=>'',
            'feature'=>array(
            'ha'=>'10-4167409378-01',
            'move'=>'10-4167409378-02',
            'active'=>'10-4167409378-03',
            'nas'=>'10-4167409378-04',
            'dto'=>'10-4167409378-05',),
            'license'=>array(
            '10-4167409378-01'=>array(
            'feature'=>'',
            'lic'=>'',
            'v2lic'=>'',),
            '10-4167409378-02'=>array(
            'feature'=>'',
            'lic'=>'',
            'v2lic'=>'',),
            '10-4167409378-03'=>array(
            'feature'=>'',
            'lic'=>'',
            'v2lic'=>'',),
            '10-4167409378-04'=>array(
            'feature'=>'',
            'lic'=>'',
            'v2lic'=>'',),
            '10-4167409378-05'=>array(
            'feature'=>'',
            'lic'=>'',
            'v2lic'=>'',),),
        );
        
        
        $res = $hDR -> getLicenseDescribe($arr);
        $this->do_assert($res);
    }

    public function testGetLicenseFiles()
    {
        $hDR = $this -> hDR;
        $arr = array();
        
        
        $res = $hDR -> getLicenseFiles($arr);
        $this->do_assert($res);
    }

    public function testUpdateLicenseFile()
    {
        $hDR = $this -> hDR;
        $arr = array(
            'lsn'=>'',
            'regionId'=>'',
            'systemId'=>'',
            'esn'=>'',
            'applyType'=>0,
            'revoke'=>'true',
            'fileContent'=>array(
            '0'=>array(
            'feature'=>'',
            'lic'=>'',
            'v2lic'=>'',),),
        );
        
        
        $res = $hDR -> updateLicenseFile($arr);
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