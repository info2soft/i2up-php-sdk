<?php
namespace i2up\Test\v20240819\resource;

use i2up\resource\v20240819\LanfreeChannel;
use i2up\common\Auth;
                
class LanfreeChannelTest extends \PHPUnit_Framework_TestCase
 {
    private $lanfreeChannel;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> lanfreeChannel = new LanfreeChannel(new Auth());
    }

    public function testCreateLanfreeChannel()
    {
        $lanfreeChannel = $this -> lanfreeChannel;
        $arr = array(
            'channel_name'=>'',
            'channel_uuid'=>'',
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'protocol'=>1,
            'fc_target_wwpn'=>'',
            'fc_initiator_wwpn'=>'',
            'iscsi_initiator'=>'',
            'target_port'=>'',
            'data_ip_uuid'=>'',
            'sub_channel_num'=>1,
        );
        
        
        $res = $lanfreeChannel -> createLanfreeChannel($arr);
        $this->do_assert($res);
    }

    public function testListLanfreeChannel()
    {
        $lanfreeChannel = $this -> lanfreeChannel;
        $arr = array();
        
        
        $res = $lanfreeChannel -> listLanfreeChannel($arr);
        $this->do_assert($res);
    }

    public function testDescribeLanfreeChannel()
    {
        $lanfreeChannel = $this -> lanfreeChannel;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $lanfreeChannel -> describeLanfreeChannel($arr);
        $this->do_assert($res);
    }

    public function testModifyLanfreeChannel()
    {
        $lanfreeChannel = $this -> lanfreeChannel;
        $arr = array(
            'channel_name'=>'',
            'channel_uuid'=>'',
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'protocol'=>1,
            'fc_target_wwpn'=>'',
            'fc_initiator_wwpn'=>'',
            'random_str'=>'1CCDB5EB848C180F02814E96C2909202',
            'iscsi_initiator'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $lanfreeChannel -> modifyLanfreeChannel($arr);
        $this->do_assert($res);
    }

    public function testDeleteLanfreeChannel()
    {
        $lanfreeChannel = $this -> lanfreeChannel;
        $arr = array(
            'channel_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $lanfreeChannel -> deleteLanfreeChannel($arr);
        $this->do_assert($res);
    }

    public function testListLanfreeChannelStatus()
    {
        $lanfreeChannel = $this -> lanfreeChannel;
        $arr = array(
            'channel_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $lanfreeChannel -> listLanfreeChannelStatus($arr);
        $this->do_assert($res);
    }

    public function testListLanfreeChannelByWkBk()
    {
        $lanfreeChannel = $this -> lanfreeChannel;
        $arr = array(
            'wk_uuids'=>array(),
            'unit_uuid'=>'',
            'bk_set_uuids'=>array(),
            'bk_uuids'=>array(),
            'unit_uuids'=>array(),
        );
        
        
        $res = $lanfreeChannel -> listLanfreeChannelByWkBk($arr);
        $this->do_assert($res);
    }

    public function testListLanfreeChannelInfo()
    {
        $lanfreeChannel = $this -> lanfreeChannel;
        $arr = array(
            'channel_uuid'=>'',
        );
        
        
        $res = $lanfreeChannel -> listLanfreeChannelInfo($arr);
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