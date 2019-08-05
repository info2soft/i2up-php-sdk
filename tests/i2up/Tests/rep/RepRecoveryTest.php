<?php
namespace i2up\Test\rep;

use i2up\rep\v20190805\RepRecovery;
use i2up\common\Auth;
use i2up\Config;

class RepRecoveryTest extends \PHPUnit_Framework_TestCase
{
    private $repRecovery;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> repRecovery = new RepRecovery($auth);
    }

    public function testCreateRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rep_recovery'=>array(
                'cdp_position'=>'2019-01-02_16-35-21+-2',
                'rc_name'=>'rep_recovery',
                'cdp_time'=>'2019-01-02 16:35:21.0',
                'wk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
                'snapshot_size'=>'1.34 GB',
                'cdp_rc_method'=>0,
                'snapshot_time'=>'2017-11-17 17:24:14',
                'rc_type'=>1,
                'snapshot_name'=>'c5809dd2-e8be-4389-ac0d-0a657ff94da0_snap_2017-11-17_17-24-14',
                'bk_path'=>array(
                    '0'=>'G:\\cdp2\\G\\cdp\\'
                ),
                'oph_policy'=>0,
                'cdp_file'=>'Baseline',
                'cdp_op'=>'backup',
                'wk_path'=>array(
                    '0'=>'G:\\cdp_rc\\'
                ),
                'rep_uuid'=>'051E0501-04EF-E1ED-0CEA-2E8751135CE4',
                'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F'
            )
        );
        $res = $repRecovery -> createRepRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'uuid'=>'11111111-1111-1111-1111-111111111111'
        );
        $res = $repRecovery -> describeRepRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rc_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
        );
        $res = $repRecovery -> deleteRepRecovery($arr);
        var_export($res);
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
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rc_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
        );
        $res = $repRecovery -> startRepRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rc_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
        );
        $res = $repRecovery -> stopRepRecovery($arr);
        var_export($res);
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
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepRecoveryStatus()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rc_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
        );
        $res = $repRecovery -> listRepRecoveryStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepRecoveryCdpRange()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rep_uuid'=>'051E0501-04EF-E1ED-0CEA-2E8751135CE4',
        );
        $res = $repRecovery -> listRepRecoveryCdpRange($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepRecoveryCdpLog()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rep_uuid'=>'051E0501-04EF-E1ED-0CEA-2E8751135CE4',
            'bk_path'=>array(
                '0'=>'E:\t2\E\t\\'
            ),
            'cdp_time'=>'2018-12-28 10:14:11',
            'bs_time'=>'2018-12-28_10-14-11'
        );
        $res = $repRecovery -> listRepRecoveryCdpLog($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}