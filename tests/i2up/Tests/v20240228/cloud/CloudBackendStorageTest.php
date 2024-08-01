<?php
namespace i2up\Test\v20240228\cloud;

use i2up\cloud\v20240228\CloudBackendStorage;
use i2up\common\Auth;

class CloudBackendStorageTest extends \PHPUnit_Framework_TestCase
{
    private $cloudBackendStorage;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> cloudBackendStorage = new CloudBackendStorage(new Auth());
    }

    public function testListBackendStorages()
    {
        $cloudBackendStorage = $this -> cloudBackendStorage;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'where_args[vp_uuid]'=>'',
        );
        $res = $cloudBackendStorage -> listBackendStorages($arr);
        $this->do_assert($res);
    }

    public function testDescribeBackendStorage()
    {
        $cloudBackendStorage = $this -> cloudBackendStorage;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $cloudBackendStorage -> describeBackendStorage($arr);
        $this->do_assert($res);
    }

    public function testCreateBackendStorage()
    {
        $cloudBackendStorage = $this -> cloudBackendStorage;
        $arr = array(
            'ip'=>'',
            'port'=>1,
            'vp_uuid'=>'',
            'type'=>1,
            'link_type'=>1,
            'user_name'=>'',
            'password'=>'',
        );
        $res = $cloudBackendStorage -> createBackendStorage($arr);
        $this->do_assert($res);
    }

    public function testModifyBackendStorage()
    {
        $cloudBackendStorage = $this -> cloudBackendStorage;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'ip'=>'',
            'port'=>1,
            'vp_uuid'=>'',
            'type'=>1,
            'link_type'=>1,
            'user_name'=>'',
            'password'=>'',
        );
        $res = $cloudBackendStorage -> modifyBackendStorage($arr);
        $this->do_assert($res);
    }

    public function testDeleteBackendStorage()
    {
        $cloudBackendStorage = $this -> cloudBackendStorage;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force'=>1,
        );
        $res = $cloudBackendStorage -> deleteBackendStorage($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}