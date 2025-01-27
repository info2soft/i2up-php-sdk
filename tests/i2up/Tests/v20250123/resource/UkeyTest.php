<?php
namespace i2up\Test\v20250123\resource;

use i2up\resource\v20250123\Ukey;
use i2up\common\Auth;
                
class UkeyTest extends \PHPUnit_Framework_TestCase
 {
    private $ukey;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> ukey = new Ukey(new Auth());
    }

    public function testCreateUkey()
    {
        $ukey = $this -> ukey;
        $arr = array(
            'ukey_name'=>'',
            'ukey_type'=>'',
            'node_uuid'=>'',
            'ukey_id'=>'',
            'ukey_pwd'=>'',
            'comment'=>'',
            'import_pwd_switch'=>1,
        );
        
        
        $res = $ukey -> createUkey($arr);
        $this->do_assert($res);
    }

    public function testModifyUkey()
    {
        $ukey = $this -> ukey;
        $arr = array(
            'ukey_name'=>'',
            'comment'=>'',
            'ukey_pwd'=>'',
            'random_str'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $ukey -> modifyUkey($arr);
        $this->do_assert($res);
    }

    public function testDiscribeUkey()
    {
        $ukey = $this -> ukey;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $ukey -> discribeUkey($arr);
        $this->do_assert($res);
    }

    public function testListUkey()
    {
        $ukey = $this -> ukey;
        $arr = array();
        
        
        $res = $ukey -> listUkey($arr);
        $this->do_assert($res);
    }

    public function testDeleteUkey()
    {
        $ukey = $this -> ukey;
        $arr = array(
            'ukey_uuids'=>array(
            '0'=>'81296F62-C542-5D68-3282-9B5815742290',),
            'force'=>0,
        );
        
        
        $res = $ukey -> deleteUkey($arr);
        $this->do_assert($res);
    }

    public function testResetUkey()
    {
        $ukey = $this -> ukey;
        $arr = array(
            'operate'=>'',
            'node_uuid'=>'',
            'ukey_id'=>'',
            'ukey_name'=>'',
            'ukey_pwd'=>'',
            'ukey_uuid'=>'',
        );
        
        
        $res = $ukey -> resetUkey($arr);
        $this->do_assert($res);
    }

    public function testKeyUkey()
    {
        $ukey = $this -> ukey;
        $arr = array(
            'operate'=>'',
            'node_uuid'=>'',
            'ukey_id'=>'',
            'ukey_name'=>'',
            'ukey_pwd'=>'',
            'ukey_uuid'=>'',
        );
        
        
        $res = $ukey -> keyUkey($arr);
        $this->do_assert($res);
    }

    public function testCloneUkey()
    {
        $ukey = $this -> ukey;
        $arr = array(
            'operate'=>'',
            'node_uuid'=>'',
            'ukey_id'=>'',
            'ukey_name'=>'',
            'ukey_pwd'=>'',
            'ukey_uuid'=>'',
        );
        
        
        $res = $ukey -> cloneUkey($arr);
        $this->do_assert($res);
    }

    public function testGetPwdUkey()
    {
        $ukey = $this -> ukey;
        $arr = array(
            'operate'=>'',
            'node_uuid'=>'',
            'ukey_id'=>'',
            'ukey_name'=>'',
            'ukey_pwd'=>'',
            'ukey_uuid'=>'',
        );
        
        
        $res = $ukey -> getPwdUkey($arr);
        $this->do_assert($res);
    }

    public function testBindNodeUkey()
    {
        $ukey = $this -> ukey;
        $arr = array(
            'operate'=>'',
            'node_uuid'=>'',
            'ukey_id'=>'',
            'ukey_name'=>'',
            'ukey_pwd'=>'',
            'ukey_uuid'=>'',
        );
        
        
        $res = $ukey -> bindNodeUkey($arr);
        $this->do_assert($res);
    }

    public function testUntieNodeUkey()
    {
        $ukey = $this -> ukey;
        $arr = array(
            'operate'=>'',
            'node_uuid'=>'',
            'ukey_id'=>'',
            'ukey_name'=>'',
            'ukey_pwd'=>'',
            'ukey_uuid'=>'',
        );
        
        
        $res = $ukey -> untieNodeUkey($arr);
        $this->do_assert($res);
    }

    public function testListUkeyStatus()
    {
        $ukey = $this -> ukey;
        $arr = array(
            'ukey_uuids'=>array(),
        );
        
        
        $res = $ukey -> listUkeyStatus($arr);
        $this->do_assert($res);
    }

    public function testListUkeyNodeList()
    {
        $ukey = $this -> ukey;
        $arr = array(
            'ukey_uuid'=>'',
        );
        
        
        $res = $ukey -> listUkeyNodeList($arr);
        $this->do_assert($res);
    }

    public function testScanUkey()
    {
        $ukey = $this -> ukey;
        $arr = array(
            'node_uuid'=>'',
            'ukey_type'=>'',
        );
        
        
        $res = $ukey -> scanUkey($arr);
        $this->do_assert($res);
    }

    public function testExportUkeyInfo()
    {
        $ukey = $this -> ukey;
        $arr = array(
            'export_pwd'=>'',
            'ukey_uuids'=>array(),
        );
        
        
        $res = $ukey -> exportUkeyInfo($arr);
        $this->do_assert($res);
    }

    public function testImportUkeyInfo()
    {
        $ukey = $this -> ukey;
        $arr = array(
            'export_pwd'=>'',
            'import_pwd'=>'',
            'ukey_info'=>array(
            '0'=>array(
            'ukey_name'=>'',
            'ukey_type'=>'',
            'node_list'=>array(
            '0'=>array(
            'node_name'=>'',
            'config_addr'=>'',),),
            'ukey_id'=>'',
            'ukey_pwd'=>'',
            'Ukey_uuid'=>'',),),
        );
        
        
        $res = $ukey -> importUkeyInfo($arr);
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