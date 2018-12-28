<?php
namespace i2up\Test\rep;

use i2up\rep\v20181217\RepRecovery;
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
                'cdp_position'=>'',
                'rc_name'=>'test',
                'cdp_time'=>'',
                'wk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
                'snapshot_size'=>'',
                'cdp_rc_method'=>0,
                'snapshot_time'=>'',
                'rc_type'=>0,
                'snapshot_name'=>'',
                'bk_path'=>array(
                    '0'=>'E:\test2\E\t\\'
                ),
                'oph_policy'=>0,
                'cdp_file'=>'Baseline',
                'cdp_op'=>'backup',
                'wk_path'=>array(
                    '0'=>'E:\rc\\'
                ),
                'rep_uuid'=>'488EB72D-0F1B-A18A-4BAA-079BD4E3203E',
                'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84'
            )
        );
        $res = $repRecovery -> createRepRecovery($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'uuid'=>'E3FAC4E2-D8AA-41E7-5BDA-FF39527EE14A'
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
            'rc_uuids'=>array(
                '0'=>'E3FAC4E2-D8AA-41E7-5BDA-FF39527EE14A'
            ),
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
            'rc_uuids'=>array(
                '0'=>'E3FAC4E2-D8AA-41E7-5BDA-FF39527EE14A'
            ),
        );
        $res = $repRecovery -> startRepRecovery($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rc_uuids'=>array(
                '0'=>'E3FAC4E2-D8AA-41E7-5BDA-FF39527EE14A'
            ),
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
            'rc_uuids'=>array(
                '0'=>'E3FAC4E2-D8AA-41E7-5BDA-FF39527EE14A'
            ),
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
            'rep_uuid'=>'3558E306-361D-5A0E-174F-D66ECF3EB4C4',
        );
        $res = $repRecovery -> listRepRecoveryCdpRange($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListRepRecoveryCdpLog()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rep_uuid'=>'3558E306-361D-5A0E-174F-D66ECF3EB4C4',
            'bk_path'=>array(
                '0'=>'E:\t2\E\t\\'
            ),
            'cdp_time'=>'2018-12-28 10:14:11',
            'bs_time'=>'2018-12-28_10-14-11'
        );
        $res = $repRecovery -> listRepRecoveryCdpLog($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}