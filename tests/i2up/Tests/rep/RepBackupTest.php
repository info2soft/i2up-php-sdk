<?php

namespace i2up\Tests\rep;

use i2up\rep\v20181217\RepBackup;
use i2up\common\Auth;


class RepBackupTest extends \PHPUnit_Framework_TestCase
{
    private $repBackup;
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin','Info1234');
        var_dump($auth -> token());
        $this -> repBackup = new RepBackup($auth);
    }

    public function testCreateRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array('rep_backup' => array(
            'rep_uuid' => '',
            'rep_name' => 'qaaaaa2',
            'ruleUnit' => '',
            'secret_key' => '',
            "bk_path_policy" => "1",
            "rep_mode" => 0,
            "cdp_path" => "",
            "wk_uuid" => "4A9A3EF9-BE3E-9F68-BC04-AE3219C7913E",
            "bk_uuid" => "4A9A3EF9-BE3E-9F68-BC04-AE3219C7913E",
            "file_type_filter" => "",
            "policy_interval" => "",
            "mirr_file_check" => "0",
            "mirr_sync_flag" => "0",
            "mirr_open_type" => "0",
            "mirr_sync_attr" => "1",
            "encrypt_switch" => "0",
            "snapshot_switch" => 0,
            "cdp_snap_on" => "0",
            "cdp_snap_interval" => 30,
            "cdp_snap_count" => 240,
            "snapshot_interval" => "1",
            "snapshot_limit" => "24",
            "snapshot_policy" => "0",
            "snapshot_start" => "",
            "compress" => "0",
            "oph_policy" => "0",
            "oph_path" => "",
            "del_policy" => "0",
            "file_type_filter_switch" => 0,
            "wk_node_name" => "88.72",
            "bk_node_name" => "88.72",
            "cdp_switch" => "0",
            "cdp_detail_copy" => 3,
            "cdp_daily_copy" => 30,
            "cdp_process_time" => "05:22:18",
            "cdp_baseline_format" => "0",
            "cdp_bl_bkup_switch" => 0,
            "cdp_bl_sched_switch" => 0,
            "band_width" => "",
            "cdp_bl_sched" => "",
            "wk_path" => array("E:\\test3\\"),
            "bk_path" => array("E:\\test4\\"),
            "excl_path" => array(),
            "bkup_one_time" => null,
            "auto_start" => "1",
            "rep_type" => 0,
            "mirr_sched" => "",
            "mirr_sched_switch" => 0,
            "cmp_file_check" => 0,
            "cmp_schedule" => array(),
            "cmp_switch" => 0,
            "biz_grp_list" => array(),
            "mirr_skip" => "0",
            "thread_num" => "0",
            "ct_name_type" => 0,
            "ct_name_str1" => "",
            "ct_name_str2" => "",
            "cdp_param" => "3,30,0"
            ));
        $this->assertNotNull($repBackup -> createRepBackup($arr));
    }
    public function testDeleteRepBackup()
    {
        $repBackup = $this -> repBackup;
        $arr = array('rep_uuids' => array('38195B9E-5DEE-7AFC-83D5-F9A4A5A5726D'));
        var_dump($repBackup -> deleteRepBackup($arr));
    }
}