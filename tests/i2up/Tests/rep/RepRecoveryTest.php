<?php
namespace i2up\Test\rep;

use i2up\rep\v20181217\RepRecovery;
use i2up\common\Auth;

class RepRecoveryTest extends \PHPUnit_Framework_TestCase
{
    private $repRecovery;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin', 'Info1234');
        $this -> repRecovery = new RepRecovery($auth);
    }

    public function testCreateRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rep_recovery'=>array(
                'cdp_position'=>'2017-11-17_15-30-40+-2',
                'rc_name'=>'',
                'cdp_time'=>'2018-04-24 13:43:26.0',
                'wk_uuid'=>'Grey',
                'snapshot_size'=>'1.34 GB',
                'cdp_rc_method'=>0,
                'snapshot_time'=>'2017-11-17 17:24:14',
                'rc_type'=>0,
                'snapshot_name'=>'c5809dd2-e8be-4389-ac0d-0a657ff94da0_snap_2017-11-17_17-24-14',
                'bk_path'=>array(),
                'oph_policy'=>0,
                'cdp_file'=>'Baseline',
                'cdp_op'=>'backup',
                'wk_path'=>array(),
                'rep_uuid'=>''
            )
        );
        $res = $repRecovery -> createRepRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'uuid'=>''
        );
        $res = $repRecovery -> describeRepRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rc_uuids'=>array(),
        );
        $res = $repRecovery -> deleteRepRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'search_field'=>'',
            'search_value'=>'',
            'limit'=>10,
            'type'=>1,
            'page'=>1,
        );
        $res = $repRecovery -> listRepRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rc_uuids'=>array(),
        );
        $res = $repRecovery -> startRepRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rc_uuids'=>array(),
        );
        $res = $repRecovery -> stopRepRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testClearFinishRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rc_type'=>0
        );
        $res = $repRecovery -> clearFinishRepRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepRecoveryStatus()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rc_uuids'=>array(),
        );
        $res = $repRecovery -> listRepRecoveryStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepRecoveryCdpRange()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rep_uuid'=>'',
        );
        $res = $repRecovery -> listRepRecoveryCdpRange($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepRecoveryCdpLog()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rep_uuid'=>'',
            'bk_path'=>array(),
            'expand_offset'=>'',
            'direction'=>'',
            'cdp_time'=>'',
            'position'=>'',
            'bs_time'=>'',
            'baseline_page'=>1,
        );
        $res = $repRecovery -> listRepRecoveryCdpLog($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}