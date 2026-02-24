<?php
namespace i2up\Test\v20260209\bigdataBackupRule;

use i2up\bigdataBackupRule\v20260209\BigdataBackupRule;
use i2up\common\Auth;
                
class BigdataBackupRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $bigdataBackupRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> bigdataBackupRule = new BigdataBackupRule(new Auth());
    }

    public function testListBigdataBackupRule()
    {
        $bigdataBackupRule = $this -> bigdataBackupRule;
        $arr = array();
        
        
        $res = $bigdataBackupRule -> listBigdataBackupRule($arr);
        $this->do_assert($res);
    }

    public function testCreateBigdataBackupRule()
    {
        $bigdataBackupRule = $this -> bigdataBackupRule;
        $arr = array(
            'rule_name'=>'',
            'data_type'=>'',
            'biz_grp_list'=>array(),
            'timeout'=>1,
            'priority'=>1,
            'disable'=>1,
            'plat_list'=>array(
            '0'=>array(
            'plat_uuid'=>'',),),
            'unit_uuid'=>'',
            'tape_pool_uuid'=>'',
            'replica_uuids'=>array(),
            'wk_path'=>array(),
            'mirr_file_check'=>'',
            'mirr_sync_flag'=>'',
            'thread_num_max'=>1,
            'thread_num_min'=>1,
            'hive_bk_type'=>1,
            'select_mode'=>1,
            'db_exp'=>'',
            'table_exp'=>'',
            'partition_exp'=>'',
            'sel_db'=>array(),
            'sel_tbl'=>array(),
            'sel_part'=>array(),
            'bkup_schedule'=>array(
            '0'=>array(
            'sched_name'=>'',
            'backup_type'=>1,
            'retention'=>1,
            'start_window'=>array(
            '0'=>array(
            'wday'=>1,
            'from'=>'',
            'to'=>'',),),
            'bkup_window'=>array(
            '0'=>array(
            'wday'=>1,
            'from'=>'',
            'to'=>'',),),
            'bkup_one_time'=>1,
            'bkup_policy'=>1,
            'exclude_days'=>array(
            '0'=>'2023-06-02',),
            'cron_policies'=>'',),),
            'effective_time_switch'=>1,
            'effective_time'=>1,
            'pre_backup_script'=>'',
            'post_backup_script'=>'',
            'expire_policy'=>1,
            'band_width'=>'',
            'script_timeout'=>1,
            'excl_path'=>array(),
            'file_type_filter_switch'=>0,
            'file_type_filter'=>'',
            'fragment_size'=>1,
            'fragment_switch'=>1,
            'data_encrypt_compress_switch'=>1,
            'data_encrypt_compress_thread_num'=>1,
            'data_encrypt_source'=>1,
            'data_compress_level'=>1,
            'data_encrypt_type'=>1,
            'backup_host_list'=>array(
            '0'=>array(
            'host_uuid'=>'',),),
            'retry_switch'=>1,
            'retry_times'=>1,
            'retry_interval'=>1,
            'bk_granularity'=>1,
            'bk_namespaces'=>array(),
            'namespace_exp'=>'',
            'stream_cfg_swtich'=>1,
            'read_stream_num'=>1,
        );
        
        
        $res = $bigdataBackupRule -> createBigdataBackupRule($arr);
        $this->do_assert($res);
    }

    public function testModifyBigdataBackupRule()
    {
        $bigdataBackupRule = $this -> bigdataBackupRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bigdataBackupRule -> modifyBigdataBackupRule($arr);
        $this->do_assert($res);
    }

    public function testBatchModifyBigdataBackupRule()
    {
        $bigdataBackupRule = $this -> bigdataBackupRule;
        $arr = array(
            'rule_uuids'=>array(),
            'band_width'=>'',
        );
        
        
        $res = $bigdataBackupRule -> batchModifyBigdataBackupRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeBigdataBackupRule()
    {
        $bigdataBackupRule = $this -> bigdataBackupRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bigdataBackupRule -> describeBigdataBackupRule($arr);
        $this->do_assert($res);
    }

    public function testListBigdataBackupRuleStatus()
    {
        $bigdataBackupRule = $this -> bigdataBackupRule;
        $arr = array(
            'rule_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $bigdataBackupRule -> listBigdataBackupRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testManualStartBigdataBackupRule()
    {
        $bigdataBackupRule = $this -> bigdataBackupRule;
        $arr = array(
            'operate'=>'manual_start',
            'plat_list'=>array(
            '0'=>array(
            'rule_uuid'=>'2F343194-2AE6-4583-A8C1-5EAC23203766',
            'platform_uuid'=>'840D24E3-C594-46CC-BC5C-C57C291773B6',
            'host_uuid'=>'7D265778-8917-42DF-A5C9-7E2C91E31EBF',),),
            'sched_name'=>'full',
            'rule_uuids'=>array(
            '0'=>'2F343194-2AE6-4583-A8C1-5EAC23203766',),
        );
        
        
        $res = $bigdataBackupRule -> manualStartBigdataBackupRule($arr);
        $this->do_assert($res);
    }

    public function testDisableBigdataBackupRule()
    {
        $bigdataBackupRule = $this -> bigdataBackupRule;
        $arr = array(
            'operate'=>'manual_start',
            'plat_list'=>array(
            '0'=>array(
            'rule_uuid'=>'2F343194-2AE6-4583-A8C1-5EAC23203766',
            'platform_uuid'=>'840D24E3-C594-46CC-BC5C-C57C291773B6',
            'host_uuid'=>'7D265778-8917-42DF-A5C9-7E2C91E31EBF',),),
            'sched_name'=>'full',
            'rule_uuids'=>array(
            '0'=>'2F343194-2AE6-4583-A8C1-5EAC23203766',),
        );
        
        
        $res = $bigdataBackupRule -> disableBigdataBackupRule($arr);
        $this->do_assert($res);
    }

    public function testEnableBigdataBackupRule()
    {
        $bigdataBackupRule = $this -> bigdataBackupRule;
        $arr = array(
            'operate'=>'manual_start',
            'plat_list'=>array(
            '0'=>array(
            'rule_uuid'=>'2F343194-2AE6-4583-A8C1-5EAC23203766',
            'platform_uuid'=>'840D24E3-C594-46CC-BC5C-C57C291773B6',
            'host_uuid'=>'7D265778-8917-42DF-A5C9-7E2C91E31EBF',),),
            'sched_name'=>'full',
            'rule_uuids'=>array(
            '0'=>'2F343194-2AE6-4583-A8C1-5EAC23203766',),
        );
        
        
        $res = $bigdataBackupRule -> enableBigdataBackupRule($arr);
        $this->do_assert($res);
    }

    public function testListBigdataBackupRuleBakHistory()
    {
        $bigdataBackupRule = $this -> bigdataBackupRule;
        $arr = array(
            'bk_path'=>'',
        );
        
        
        $res = $bigdataBackupRule -> listBigdataBackupRuleBakHistory($arr);
        $this->do_assert($res);
    }

    public function testListBigdataBackupRuleHiveTableInfo()
    {
        $bigdataBackupRule = $this -> bigdataBackupRule;
        $arr = array(
            'bk_path'=>'',
            'table_name'=>'',
        );
        
        
        $res = $bigdataBackupRule -> listBigdataBackupRuleHiveTableInfo($arr);
        $this->do_assert($res);
    }

    public function testListBigdataBackupRuleHivePartitionInfo()
    {
        $bigdataBackupRule = $this -> bigdataBackupRule;
        $arr = array(
            'bk_path'=>'',
            'table_name'=>'',
            'partition_name'=>'',
        );
        
        
        $res = $bigdataBackupRule -> listBigdataBackupRuleHivePartitionInfo($arr);
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