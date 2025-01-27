<?php
namespace i2up\Test\v20250123\fspBackupRule;

use i2up\fspBackupRule\v20250123\FspBackupRule;
use i2up\common\Auth;
                
class FspBackupRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $fspBackupRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> fspBackupRule = new FspBackupRule(new Auth());
    }

    public function testListFspBackupRule()
    {
        $fspBackupRule = $this -> fspBackupRule;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'search_value'=>'test',
            'search_field'=>'rule_name',
            'order_by'=>'rule_name',
            'direction'=>'DESC',
            'filter_by_biz_grp'=>1,
            'status'=>'',
            'node_name'=>'',
            'where_args'=>array(
            'rule_uuid'=>'',),
            'like_args'=>array(
            'rule_name'=>'',
            'unit_name'=>'',),
        );
        
        
        $res = $fspBackupRule -> listFspBackupRule($arr);
        $this->do_assert($res);
    }

    public function testCreateFspBackupRule()
    {
        $fspBackupRule = $this -> fspBackupRule;
        $arr = array(
            'rule_name'=>'',
            'rule_type'=>1,
            'biz_grp_list'=>array(),
            'timeout'=>1,
            'priority'=>1,
            'disable'=>1,
            'client_list'=>array(
            '0'=>array(
            'node_uuid'=>'',),),
            'unit_uuid'=>'',
            'tape_pool_uuid'=>'',
            'replica_uuids'=>array(),
            'trans_mode'=>1,
            'wk_path'=>array(
            '0'=>array(
            'path'=>'PhysicalDrive0\\\\',
            'name'=>'PhysicalDrive0',
            'icon'=>'folder',
            'size'=>42949672960,
            'file'=>'',
            'attr'=>1,
            'leaf'=>'',
            'subNodes'=>array(),
            'nodeUuid'=>'0986CDE6-85C6-4D03-8D78-9DD5E367916D',
            'showSize'=>'40.00 GB',
            'disabled'=>'',
            'has_policy'=>'',
            'right_path'=>'',
            'is_show'=>'',),),
            'database_switch'=>1,
            'database_type'=>1,
            'oracle_dbagent_param'=>array(
            'oracle_sid'=>'',
            'sql_plus_path'=>'',
            'username'=>'',
            'password'=>'',
            'port'=>'',
            'table_space'=>'',
            'timeout'=>'',),
            'sqlserver_dbagent_param'=>array(
            'timeout'=>'',),
            'custom_dbagent_param'=>array(
            'pre_snapshot_script'=>'',
            'post_snapshot_script'=>'',),
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
            'compress'=>1,
            'compress_switch'=>0,
            'encrypt_switch'=>1,
            'encrypt'=>1,
            'bk_file_crypt'=>1,
            'bk_crypt_type'=>1,
            'bk_crypt_key'=>'',
            'band_width'=>'',
            'block_stor_format'=>1,
            'data_encrypt_compress_switch'=>1,
            'data_encrypt_compress_thread_num'=>1,
            'data_encrypt_source'=>1,
            'data_compress_level'=>1,
            'data_encrypt_type'=>1,
        );
        
        
        $res = $fspBackupRule -> createFspBackupRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeFspBackupRule()
    {
        $fspBackupRule = $this -> fspBackupRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $fspBackupRule -> describeFspBackupRule($arr);
        $this->do_assert($res);
    }

    public function testModifyFspBackupRule()
    {
        $fspBackupRule = $this -> fspBackupRule;
        $arr = array(
            'rule_name'=>'',
            'rule_uuid'=>'',
            'random_str'=>'',
            'create_time'=>'',
            'rule_type'=>'',
            'biz_grp_list'=>array(),
            'timeout'=>1,
            'priority'=>1,
            'disable'=>1,
            'client_list'=>array(
            '0'=>array(
            'node_uuid'=>'',),),
            'unit_uuid'=>'',
            'tape_pool_uuid'=>'',
            'replica_uuids'=>array(),
            'trans_mode'=>1,
            'wk_path'=>array(
            '0'=>array(
            'path'=>'PhysicalDrive0',
            'name'=>'PhysicalDrive0',
            'icon'=>'folder',
            'size'=>42949672960,
            'file'=>'',
            'attr'=>1,
            'leaf'=>'',
            'subNodes'=>array(),
            'nodeUuid'=>'0986CDE6-85C6-4D03-8D78-9DD5E367916D',
            'showSize'=>'40.00 GB',
            'disabled'=>'',
            'has_policy'=>'',
            'right_path'=>'',
            'is_show'=>'',),),
            'database_switch'=>1,
            'database_type'=>1,
            'oracle_dbagent_param'=>array(
            'oracle_sid'=>'',
            'sql_plus_path'=>'',
            'username'=>'',
            'password'=>'',
            'port'=>'',
            'table_space'=>'',
            'timeout'=>'',),
            'sqlserver_dbagent_param'=>array(
            'timeout'=>'',),
            'custom_dbagent_param'=>array(
            'pre_snapshot_script'=>'',
            'post_snapshot_script'=>'',),
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
            'compress'=>1,
            'compress_switch'=>0,
            'encrypt_switch'=>1,
            'encrypt'=>1,
            'bk_file_crypt'=>1,
            'bk_crypt_type'=>1,
            'bk_crypt_key'=>'',
            'band_width'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $fspBackupRule -> modifyFspBackupRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteFspBackupRule()
    {
        $fspBackupRule = $this -> fspBackupRule;
        $arr = array(
            'rule_uuids'=>array(),
            'force'=>0,
        );
        
        
        $res = $fspBackupRule -> deleteFspBackupRule($arr);
        $this->do_assert($res);
    }

    public function testEnableFspBackupRule()
    {
        $fspBackupRule = $this -> fspBackupRule;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>array(),
            'client_list'=>array(
            '0'=>array(
            'rule_uuid'=>'',
            'node_uuid'=>'',),),
            'sched_name'=>'',
            'new_rule_name'=>'',
        );
        
        
        $res = $fspBackupRule -> enableFspBackupRule($arr);
        $this->do_assert($res);
    }

    public function testDisableFspBackupRule()
    {
        $fspBackupRule = $this -> fspBackupRule;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>array(),
            'client_list'=>array(
            '0'=>array(
            'rule_uuid'=>'',
            'node_uuid'=>'',),),
            'sched_name'=>'',
            'new_rule_name'=>'',
        );
        
        
        $res = $fspBackupRule -> disableFspBackupRule($arr);
        $this->do_assert($res);
    }

    public function testManualStartFspBackupRule()
    {
        $fspBackupRule = $this -> fspBackupRule;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>array(),
            'client_list'=>array(
            '0'=>array(
            'rule_uuid'=>'',
            'node_uuid'=>'',),),
            'sched_name'=>'',
            'new_rule_name'=>'',
        );
        
        
        $res = $fspBackupRule -> manualStartFspBackupRule($arr);
        $this->do_assert($res);
    }

    public function testCloneFspBackupRule()
    {
        $fspBackupRule = $this -> fspBackupRule;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>array(),
            'client_list'=>array(
            '0'=>array(
            'rule_uuid'=>'',
            'node_uuid'=>'',),),
            'sched_name'=>'',
            'new_rule_name'=>'',
        );
        
        
        $res = $fspBackupRule -> cloneFspBackupRule($arr);
        $this->do_assert($res);
    }

    public function testListFspBackupRuleStatus()
    {
        $fspBackupRule = $this -> fspBackupRule;
        $arr = array(
            'rule_uuids'=>array(),
        );
        
        
        $res = $fspBackupRule -> listFspBackupRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testListFspBackupDeviceInfo()
    {
        $fspBackupRule = $this -> fspBackupRule;
        $arr = array(
            'node_uuid'=>'',
        );
        
        
        $res = $fspBackupRule -> listFspBackupDeviceInfo($arr);
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