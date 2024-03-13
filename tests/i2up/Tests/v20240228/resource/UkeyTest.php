<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\Ukey;
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
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'ukey_name'=>'',
            'comment'=>'',
            'ukey_pwd'=>'',
            'random_str'=>'',
        );
        $res = $ukey -> modifyUkey($arr);
        $this->do_assert($res);
    }

    public function testDiscribeUkey()
    {
        $ukey = $this -> ukey;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
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
            'operate'=>'reset',
            'node_uuid'=>'',
            'ukey_id'=>'',
            'ukey_name'=>'',
            'ukey_pwd'=>'',
            'ukey_uuid'=>'',
        );
        $res = $ukey -> resetUkey($arr);
        $this->do_assert($res);
    }

    public function testCloneUkey()
    {
        $ukey = $this -> ukey;
        $arr = array(
            'operate'=>'clone',
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
            'operate'=>'get_pwd',
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
            'operate'=>'bind_node',
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
            'operate'=>'untie_node',
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}