<?php
namespace i2up\Test\v20260209\recoveryRule;

use i2up\recoveryRule\v20260209\BatchRecoveryRule;
use i2up\common\Auth;
                
class BatchRecoveryRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $batchRecoveryRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> batchRecoveryRule = new BatchRecoveryRule(new Auth());
    }

    public function testListRestoreWizardRule()
    {
        $batchRecoveryRule = $this -> batchRecoveryRule;
        $arr = array(
            'limit'=>15,
            'search_field'=>'rule_name',
            'search_value'=>'',
            'direction'=>'',
            'order_by'=>'',
            'page'=>1,
            'where_args'=>array(
            'task_name'=>'',),
        );
        
        
        $res = $batchRecoveryRule -> listRestoreWizardRule($arr);
        $this->do_assert($res);
    }

    public function testListRestoreWizardRuleStatus()
    {
        $batchRecoveryRule = $this -> batchRecoveryRule;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $batchRecoveryRule -> listRestoreWizardRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testCreateRestoreWizardRule()
    {
        $batchRecoveryRule = $this -> batchRecoveryRule;
        $arr = array(
            'task_name'=>'',
            'wk_data_type'=>1,
            'task_type'=>1,
            'restore_type'=>1,
            'priority'=>1,
            'auto_start'=>1,
            'start_time'=>1,
            'bk_set_uuids'=>array(),
            'pattern'=>'',
            'bk_server_uuid'=>'',
            'bk_server_addr'=>'',
            'recover_bk_server'=>1,
            'wk_uuid'=>'',
            'rc_path_policy'=>1,
            'wk_path'=>'',
            'biz_grp_list'=>array(),
            'trans_mode'=>1,
            'timeout'=>1,
            'thread_num_max'=>1,
            'thread_num_min'=>1,
            'mirr_file_check'=>1,
            'mirr_sync_flag'=>1,
            'compress_switch'=>1,
            'compress'=>1,
            'encrypt_switch'=>1,
            'encrypt'=>1,
            'bk_path'=>array(),
            'bucket_uuid'=>'',
            'sto_uuid'=>'',
            'dst_type'=>'',
            'excl_path'=>array(),
            'band_width'=>'',
        );
        
        
        $res = $batchRecoveryRule -> createRestoreWizardRule($arr);
        $this->do_assert($res);
    }

    public function testModifyRestoreWizardRule()
    {
        $batchRecoveryRule = $this -> batchRecoveryRule;
        $arr = array(
            'task_name'=>'',
            'wk_data_type'=>1,
            'task_type'=>1,
            'restore_type'=>1,
            'priority'=>1,
            'auto_start'=>1,
            'start_time'=>1,
            'bk_set_uuids'=>array(),
            'pattern'=>'',
            'bk_server_uuid'=>'',
            'bk_server_addr'=>'',
            'recover_bk_server'=>1,
            'wk_uuid'=>'',
            'rc_path_policy'=>'',
            'wk_path'=>'',
            'biz_grp_list'=>array(),
            'trans_mode'=>1,
            'timeout'=>1,
            'thread_num_max'=>'',
            'thread_num_min'=>'',
            'mirr_file_check'=>'',
            'mirr_sync_flag'=>'',
            'compress_switch'=>'',
            'compress'=>'',
            'encrypt_switch'=>'',
            'encrypt'=>'',
            'bk_path'=>array(),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $batchRecoveryRule -> modifyRestoreWizardRule($arr);
        $this->do_assert($res);
    }

    public function testRegenerateRestoreWizardRule()
    {
        $batchRecoveryRule = $this -> batchRecoveryRule;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
        );
        
        
        $res = $batchRecoveryRule -> regenerateRestoreWizardRule($arr);
        $this->do_assert($res);
    }

    public function testRestoreRestoreWizardRule()
    {
        $batchRecoveryRule = $this -> batchRecoveryRule;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
        );
        
        
        $res = $batchRecoveryRule -> restoreRestoreWizardRule($arr);
        $this->do_assert($res);
    }

    public function testStartRestoreWizardRule()
    {
        $batchRecoveryRule = $this -> batchRecoveryRule;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
        );
        
        
        $res = $batchRecoveryRule -> startRestoreWizardRule($arr);
        $this->do_assert($res);
    }

    public function testStopRestoreWizardRule()
    {
        $batchRecoveryRule = $this -> batchRecoveryRule;
        $arr = array(
            'operate'=>'',
            'task_uuids'=>array(),
        );
        
        
        $res = $batchRecoveryRule -> stopRestoreWizardRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteRestoreWizardRule()
    {
        $batchRecoveryRule = $this -> batchRecoveryRule;
        $arr = array(
            'force'=>false,
            'task_uuids'=>array(),
        );
        
        
        $res = $batchRecoveryRule -> deleteRestoreWizardRule($arr);
        $this->do_assert($res);
    }

    public function testDownloadRestoreWizardList()
    {
        $batchRecoveryRule = $this -> batchRecoveryRule;
        $arr = array(
            'rule_uuid'=>'',
        );
        
        
        $res = $batchRecoveryRule -> downloadRestoreWizardList($arr);
        $this->do_assert($res);
    }

    public function testDescribeRestoreWizardRule()
    {
        $batchRecoveryRule = $this -> batchRecoveryRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $batchRecoveryRule -> describeRestoreWizardRule($arr);
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