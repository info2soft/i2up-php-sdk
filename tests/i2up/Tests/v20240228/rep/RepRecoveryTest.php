<?php
namespace i2up\Test\v20240228\rep;

use i2up\rep\v20240228\RepRecovery;
use i2up\common\Auth;
                
class RepRecoveryTest extends \PHPUnit_Framework_TestCase
 {
    private $repRecovery;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> repRecovery = new RepRecovery(new Auth());
    }

    public function testCreateRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rep_recovery' => array(
                'cdp_position' => '2017-11-17_15-30-40+-2',
                'rc_name' => '',
                'cdp_time' => '2018-04-24 13:43:26.0',
                'wk_uuid' => 'Jane',
                'snapshot_size' => '1.34 GB',
                'cdp_rc_method' => 0,
                'snapshot_time' => '2017-11-17 17:24:14',
                'rc_type' => 0,
                'snapshot_name' => 'c5809dd2-e8be-4389-ac0d-0a657ff94da0_snap_2017-11-17_17-24-14',
                'bk_path' => array(),
                'oph_policy' => 0,
                'cdp_file' => 'Baseline',
                'cdp_op' => 'backup',
                'wk_path' => array(),
                'data_ip_uuid' => '',
                'biz_grp_list' => array(),
                'bk_uuid' => '',
                'bk_path_policy' => 1,
                'cdpShowOne' => 'true',
                'cdpShowTwo' => 'false',
                'compress' => 0,
                'ct_name_str1' => '',
                'ct_name_str2' => '',
                'ct_name_type' => '0',
                'data_path' => '',
                'encrypt_switch' => '0',
                'end_time' => '',
                'isShowTime' => 1,
                'merge_path' => '',
                'pointTime' => '2020-10-19T06:57:59.399Z',
                'secret_key' => '',
                'snapTable' => array(),
                'start_time' => '',
                'traversing_sync' => 1,
                'encrypt' => 1,
                'thread_num' => 1,
                'excl_path' => array(),
                'bk_file_crypt' => 1,
                'compress_switch' => 0,
                'snapshot' => 0,
                'auto_start' => 1,
                'rc_path_policy' => 0,
                'is_remote_rc' => 1,
                'storage_uuid' => '',
                'storage_pool_uuid' => '',
                'cdp_time_zone' => '',
                'pool_uuid' => '',
                'channel_uuid' => '',
                'network_type' => 1,),
        );
        $res = $repRecovery -> createRepRecovery($arr);
        $this->do_assert($res);
    }

    public function testDescribeRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $repRecovery -> describeRepRecovery($arr);
        $this->do_assert($res);
    }

    public function testUpdateRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'rep_recovery'=>array(
            'cdp_position'=>'2017-11-17_15-30-40+-2',
            'rc_name'=>'',
            'cdp_time'=>'2018-04-24 13:43:26.0',
            'wk_uuid'=>'Jane',
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
            'rep_uuid'=>'',
            'random_str'=>'',
            'thread_num'=>1,
            'excl_path'=>array(),
            'compress_switch'=>0,
            'compress'=>0,
            'auto_start'=>0,),
        );
        $res = $repRecovery -> updateRepRecovery($arr);
        $this->do_assert($res);
    }

    public function testDeleteRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rc_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force'=>1,
        );
        $res = $repRecovery -> deleteRepRecovery($arr);
        $this->do_assert($res);
    }

    public function testListRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'search_field'=>'',
            'search_value'=>'',
            'limit'=>1,
            'type'=>1,
            'page'=>1,
        );
        $res = $repRecovery -> listRepRecovery($arr);
        $this->do_assert($res);
    }

    public function testStartRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
                'operate'=>'start',
                'rc_type'=>1,
                'rc_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
        );
        $res = $repRecovery -> startRepRecovery($arr);
        $this->do_assert($res);
    }

    public function testStopRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
                'operate'=>'stop',
                'rc_type'=>1,
                'rc_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
        );
        $res = $repRecovery -> stopRepRecovery($arr);
        $this->do_assert($res);
    }

    public function testClearFinishRepRecovery()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
                'operate'=>'clear_finish',
                'rc_type'=>1,
                'rc_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
        );
        $res = $repRecovery -> clearFinishRepRecovery($arr);
        $this->do_assert($res);
    }

    public function testListRepRecoveryStatus()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rc_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
            'force_refresh'=>1,
        );
        $res = $repRecovery -> listRepRecoveryStatus($arr);
        $this->do_assert($res);
    }

    public function testListRepRecoveryCdpRange()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rep_uuid'=>'051E0501-04EF-E1ED-0CEA-2E8751135CE4',
            'rc_method'=>0,
            'data_path'=>'',
            'bk_uuid'=>'',
            'cdp_time_zone'=>'',
        );
        $res = $repRecovery -> listRepRecoveryCdpRange($arr);
        $this->do_assert($res);
    }

    public function testListRepRecoveryCdpLog()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rep_uuid'=>'051E0501-04EF-E1ED-0CEA-2E8751135CE4',
            'bk_path'=>'["G:\cdp2\G\cdp\"]',
            'expand_offset'=>'',
            'direction'=>'0',
            'cdp_time'=>'2019-01-08 01:20:54',
            'position'=>'2019-11-17_15-30-40+-2',
            'bs_time'=>'2019-01-02_16-35-21',
            'baseline_page'=>1,
            'rc_method'=>0,
            'data_path'=>'',
            'bk_uuid'=>'',
            'cdp_time_zone'=>'',
        );
        $res = $repRecovery -> listRepRecoveryCdpLog($arr);
        $this->do_assert($res);
    }

    public function testViewRepRecoveryData()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'rep_recovery'=>array(
            'cdp_position'=>'2017-11-17_15-30-40+-2',
            'rc_name'=>'',
            'cdp_time'=>'2018-04-24 13:43:26.0',
            'wk_uuid'=>'Jane',
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
            'data_ip_uuid'=>'',
            'biz_grp_list'=>array(),
            'bk_uuid'=>'',
            'bk_path_policy'=>'',
            'cdpShowOne'=>'true',
            'cdpShowTwo'=>'false',
            'compress'=>'0',
            'ct_name_str1'=>'',
            'ct_name_str2'=>'',
            'ct_name_type'=>'0',
            'data_path'=>'',
            'encrypt_switch'=>'0',
            'end_time'=>'',
            'isShowTime'=>1,
            'merge_path'=>'',
            'pointTime'=>'2020-10-19T06:57:59.399Z',
            'secret_key'=>'',
            'snapTable'=>array(),
            'start_time'=>'',
            ),
        );
        $res = $repRecovery -> viewRepRecoveryData($arr);
        $this->do_assert($res);
    }

    public function testListRcpRecoveryDataViewStatus()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'task_uuid'=>'',
            'node_uuid'=>'',
        );
        $res = $repRecovery -> listRcpRecoveryDataViewStatus($arr);
        $this->do_assert($res);
    }

    public function testList()
    {
        $repRecovery = $this -> repRecovery;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'node_uuid'=>'',
        );
        $res = $repRecovery -> list($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}