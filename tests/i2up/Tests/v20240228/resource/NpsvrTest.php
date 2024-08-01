<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\Npsvr;
use i2up\common\Auth;
                
class NpsvrTest extends \PHPUnit_Framework_TestCase
 {
    private $npsvr;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> npsvr = new Npsvr(new Auth());
    }

    public function testCreateNpsvr()
    {
        $npsvr = $this -> npsvr;
        $arr = array(
            'npsvr_name'=>'',
            'config_addr'=>'',
            'config_port'=>'',
            'username'=>'',
            'password'=>'',
            'maintenance'=>'',
            'comment'=>'',
            'cc_ip'=>'',
        );
        $res = $npsvr -> createNpsvr($arr);
        $this->do_assert($res);
    }

    public function testAuthNpsvr()
    {
        $npsvr = $this -> npsvr;
        $arr = array(
            'config_addr'=>'',
            'config_port'=>'',
            'username'=>'',
            'password'=>'',
        );
        $res = $npsvr -> authNpsvr($arr);
        $this->do_assert($res);
    }

    public function testListNpsvr()
    {
        $npsvr = $this -> npsvr;
        $arr = array(
            'search_value'=>'',
            'search_field'=>'',
            'limit'=>'',
            'page'=>'',
            'order_by'=>'',
        );
        $res = $npsvr -> listNpsvr($arr);
        $this->do_assert($res);
    }

    public function testModifyNpsvr()
    {
        $npsvr = $this -> npsvr;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'npsvr_name'=>'',
            'config_addr'=>'',
            'config_port'=>'',
            'username'=>'',
            'password'=>'',
            'maintenance'=>'',
            'comment'=>'',
            'cc_ip'=>'',
        );
        $res = $npsvr -> modifyNpsvr($arr);
        $this->do_assert($res);
    }

    public function testDeleteNpsvr()
    {
        $npsvr = $this -> npsvr;
        $arr = array(
            'npsvr_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force'=>1,
        );
        $res = $npsvr -> deleteNpsvr($arr);
        $this->do_assert($res);
    }

    public function testGetNpsvrStatus()
    {
        $npsvr = $this -> npsvr;
        $arr = array(
            'npsvr_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $npsvr -> getNpsvrStatus($arr);
        $this->do_assert($res);
    }

    public function testMaintainNpsvr()
    {
        $npsvr = $this -> npsvr;
        $arr = array(
            'operate'=>'maintain',
            'npsvr_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'switch'=>0,
        );
        $res = $npsvr -> maintainNpsvr($arr);
        $this->do_assert($res);
    }

    public function testRenewKeyNpsvr()
    {
        $npsvr = $this -> npsvr;
        $arr = array(
            'operate'=>'renew_key',
            'npsvr_uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'switch'=>0,
        );
        $res = $npsvr -> renewKeyNpsvr($arr);
        $this->do_assert($res);
    }

    public function testListConfigItems()
    {
        $npsvr = $this -> npsvr;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $npsvr -> listConfigItems($arr);
        $this->do_assert($res);
    }

    public function testUpdateConfigItems()
    {
        $npsvr = $this -> npsvr;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'config_items'=>array(
                '0'=>array(
                    'name'=>'',
                    'value'=>'',
                ),
            ),
        );
        $res = $npsvr -> updateConfigItems($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}