<?php
namespace i2up\Test\ha;

use i2up\ha\v20181217\AppHighAvailability;
use i2up\common\Auth;

class AppHighAvailabilityTest extends \PHPUnit_Framework_TestCase
{
    private $appHighAvailability;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin', 'Info1234');
        $this -> appHighAvailability = new AppHighAvailability($auth);
    }

    public function testListHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'filter_value'=>'',
            'filter_type'=>'',
            'page'=>'1',
            'limit'=>'10',
        );
        $res = $appHighAvailability -> listHA($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'ha_uuid'=>array(),
            'node_uuid'=>'',
            'type'=>'',
        );
        $res = $appHighAvailability -> startHA($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'ha_uuid'=>array(),
        );
        $res = $appHighAvailability -> deleteHA($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListHAStatus()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'ha_uuid'=>array(),
        );
        $res = $appHighAvailability -> listHAStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeHAScriptPath()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'master_uuid'=>'',
        );
        $res = $appHighAvailability -> describeHAScriptPath($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'ha_object'=>array(
                '0'=>array(
                    'sync_data'=>array(
                        'create_start'=>1,
                        'rule_relation'=>array(
                            '0'=>array(
                                'rep_name'=>'',
                                'path'=>array(),
                                'append_name'=>1,
                                'autostart_rep'=>1,
                                'uuid'=>'',),
                            '1'=>array(
                                'rep_name'=>'',
                                'path'=>array(),
                                'append_name'=>1,
                                'autostart_rep'=>1,
                                'uuid'=>'',),),
                        'wait_cache'=>1,
                        'need_rep_status'=>1,
                        'back_rule'=>1,
                        'excludes'=>array(),),
                    'monitorn'=>array(),
                    'ha_name'=>'',
                    'heartbeatn'=>array(),
                    'node_priorityn'=>array(),
                    'master_uuid'=>'',
                    'arbitration'=>array(
                        'node'=>array(
                            'arbit_port'=>1,
                            'arbit_addr'=>'',
                            'arbit_protocol'=>'',),
                        'disk'=>array(),
                        'radio'=>1,),
                    'res_switchn'=>array(),
                    'auto_switch'=>1,
                    'ha_uuid'=>'',),),
        );
        $res = $appHighAvailability -> modifyHA($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'ha_object'=>array(
                '0'=>array(
                    'heartbeatn'=>array(),
                    'sync_data'=>array(
                        'back_rule'=>1,
                        'need_rep_status'=>1,
                        'create_start'=>1,
                        'wait_cache'=>1,
                        'rule_relation'=>array(
                            '0'=>array(
                                'rep_name'=>'',
                                'autostart_rep'=>1,
                                'path'=>array(),
                                'uuid'=>'',
                                'append_name'=>1
                            ),
                            '1'=>array(
                                'rep_name'=>'',
                                'autostart_rep'=>1,
                                'path'=>array(),
                                'uuid'=>'',
                                'append_name'=>1
                            )
                        ),
                        'excludes'=>array()
                    ),
                    'arbitration'=>array(
                        'radio'=>1,
                        'node'=>array(
                            'arbit_protocol'=>'',
                            'arbit_addr'=>'',
                            'arbit_port'=>1
                        ),
                        'disk'=>array(
                            'path'=>''
                        )
                    ),
                    'master_uuid'=>'',
                    'ha_name'=>'',
                    'res_switchn'=>array(),
                    'auto_switch'=>1,
                    'monitorn'=>array(),
                    'node_priorityn'=>array(),
                    'ctrl_switch'=>1
                )
            ),
        );
        $res = $appHighAvailability -> createHA($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNicInfo()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
            'node_uuid'=>array(),
            'master_uuid'=>'',
        );
        $res = $appHighAvailability -> listNicInfo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeHA()
    {
        $appHighAvailability = $this -> appHighAvailability;
        $arr = array(
        );
        $res = $appHighAvailability -> describeHA($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}