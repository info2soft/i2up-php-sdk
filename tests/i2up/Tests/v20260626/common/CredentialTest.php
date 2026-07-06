<?php
namespace i2up\Test\v20260626\common;

use i2up\common\v20260626\Credential;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class CredentialTest extends TestCase
 {
    private $credential;
    
    public function setUp():void
    {
        parent::setup();
        $this -> credential = new Credential(new Auth());
    }

    public function testListCredential()
    {
        $credential = $this -> credential;
        $arr = array(
            'cred_type'=>1,
        );
        
        
        $res = $credential -> listCredential($arr);
        $this->do_assert($res);
    }

    public function testCreateCredential()
    {
        $credential = $this -> credential;
        $arr = array(
            'cred_type'=>1,
            'cred_name'=>'',
            'os_user'=>'',
            'os_pwd'=>'',
            'description'=>'',
            'node_uuid'=>'',
            'ukey_uuid'=>'',
        );
        
        
        $res = $credential -> createCredential($arr);
        $this->do_assert($res);
    }

    public function testDescribeCredential()
    {
        $credential = $this -> credential;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $credential -> describeCredential($arr);
        $this->do_assert($res);
    }

    public function testModifyCredential()
    {
        $credential = $this -> credential;
        $arr = array(
            'cred_type'=>1,
            'cred_name'=>'',
            'os_user'=>'',
            'os_pwd'=>'',
            'description'=>'',
            'random_str'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $credential -> modifyCredential($arr);
        $this->do_assert($res);
    }

    public function testDeleteCredential()
    {
        $credential = $this -> credential;
        $arr = array(
            'cred_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $credential -> deleteCredential($arr);
        $this->do_assert($res);
    }

    public function testDownloadTemplate()
    {
        $credential = $this -> credential;
        $arr = array(
            'type'=>'cred_csv',
        );
        
        
        $res = $credential -> downloadTemplate($arr);
        $this->do_assert($res);
    }

    public function testBatchImportCredential()
    {
        $credential = $this -> credential;
        $arr = array();
        
        
        $res = $credential -> batchImportCredential($arr);
        $this->do_assert($res);
    }

    public function testListBindUkey()
    {
        $credential = $this -> credential;
        $arr = array(
            'cred_uuid'=>'',
        );
        
        
        $res = $credential -> listBindUkey($arr);
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