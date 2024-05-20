<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\Credential;
use i2up\common\Auth;
                
class CredentialTest extends \PHPUnit_Framework_TestCase
 {
    private $credential;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
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
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $credential -> describeCredential($arr);
        $this->do_assert($res);
    }

    public function testModifyCredential()
    {
        $credential = $this -> credential;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'cred_type'=>1,
            'cred_name'=>'',
            'os_user'=>'',
            'os_pwd'=>'',
            'description'=>'',
            'random_str'=>'',
        );
        $res = $credential -> modifyCredential($arr);
        $this->do_assert($res);
    }

    public function testDeleteCredential()
    {
        $credential = $this -> credential;
        $arr = array(
            'cred_uuids'=>array('11111111-1111-1111-1111-111111111111'),
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
        $arr = array('11111111-1111-1111-1111-111111111111');
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}