<?php
namespace i2up\Test\v20260626\resource;

use i2up\resource\v20260626\Npsvr;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class NpsvrTest extends TestCase
 {
    private $npsvr;
    
    public function setUp():void
    {
        parent::setup();
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
            'etcd_url_uuid'=>'',
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
            'npsvr_name'=>'',
            'config_addr'=>'',
            'config_port'=>'',
            'username'=>'',
            'password'=>'',
            'maintenance'=>'',
            'comment'=>'',
            'cc_ip'=>'',
            'etcd_url_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $npsvr -> modifyNpsvr($arr);
        $this->do_assert($res);
    }

    public function testDeleteNpsvr()
    {
        $npsvr = $this -> npsvr;
        $arr = array(
            'npsvr_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $npsvr -> deleteNpsvr($arr);
        $this->do_assert($res);
    }

    public function testGetNpsvrStatus()
    {
        $npsvr = $this -> npsvr;
        $arr = array(
            'npsvr_uuids'=>array(),
        );
        
        
        $res = $npsvr -> getNpsvrStatus($arr);
        $this->do_assert($res);
    }

    public function testNpsvrOperate()
    {
        $npsvr = $this -> npsvr;
        $arr = array(
            'operate'=>'maintain',
            'npsvr_uuids'=>array(),
            'switch'=>0,
        );
        
        
        $res = $npsvr -> npsvrOperate($arr);
        $this->do_assert($res);
    }

    public function testListConfigItems()
    {
        $npsvr = $this -> npsvr;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $npsvr -> listConfigItems($arr);
        $this->do_assert($res);
    }

    public function testUpdateConfigItems()
    {
        $npsvr = $this -> npsvr;
        $arr = array(
            'config_items'=>array(
            '0'=>array(
            'name'=>'',
            'value'=>'',),),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $npsvr -> updateConfigItems($arr);
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