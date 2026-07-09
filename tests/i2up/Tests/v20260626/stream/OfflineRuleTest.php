<?php
namespace i2up\Test\v20260626\stream;

use i2up\stream\v20260626\OfflineRule;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class OfflineRuleTest extends TestCase
 {
    private $offlineRule;
    
    public function setUp():void
    {
        parent::setup();
        $this -> offlineRule = new OfflineRule(new Auth());
    }

    public function testListOfflineRule()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'limit'=>'',
            'page'=>'',
            'search_field'=>'',
            'search_value'=>'',
            'group_uuid'=>'',
            'where_args'=>array(
            '0'=>array(
            'status'=>'dump',
            'rule_uuid'=>'8Ec0A47F-87bf-7db6-bFAb-7a874223C1Ea',),),
        );
        
        
        $res = $offlineRule -> listOfflineRule($arr);
        $this->do_assert($res);
    }

    public function testCreateActiveOfflineRule()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'tgt_type'=>'',
            'src_type'=>'',
            'node_uuid'=>'',
            'maintenance'=>1,
            'comment'=>'',
            'start_rule_now'=>1,
            'table_map'=>array(
            '0'=>array(
            'src_table'=>'',
            'tgt_table'=>'',
            'src_db'=>'',
            'dst_db'=>'',
            'column'=>array(
            '0'=>array(
            'dst_column'=>'',
            'src_column'=>'',),),
            'src_db_uuid'=>'',
            'tgt_db_uuid'=>'',),),
            'format'=>array(
            'header'=>1,
            'delimiter'=>'',
            'quote'=>'',
            'force_quote'=>1,
            'escape'=>'',
            'null'=>'',
            'date_format'=>'',
            'datetime_format'=>'',
            'timestamp_format'=>'',
            'time_format'=>'',
            'byte_encode'=>'',
            'encode'=>'',
            'datatag'=>'',
            'outpath'=>'',
            'line_break'=>'',
            'delimiterAfterLastColumn'=>false,
            'delimiterUtf8Code'=>false,
            'linesTerminatedByUtf8Code'=>false,),
            'full_map_switch'=>1,
            'virtual_table'=>array(
            '0'=>array(
            'user'=>'',
            'tab'=>'',
            'sql'=>'',
            'srcuser'=>'',
            'srctab'=>'',
            'dbUuid'=>'',
            'metasql'=>'',
            'colDefs'=>array(
            '0'=>array(
            'name'=>'',
            'typename'=>'',
            'length'=>'',
            'precision'=>'',
            'scale'=>'',
            'jdbcType'=>1,
            'nullable'=>1,
            'defaults'=>'',),),
            'splitInfo'=>array(
            'tableName'=>array(
            'schema'=>'',
            'name'=>'',),
            'aliasName'=>'',
            'colName'=>'',),
            'metaUsingColDefs'=>false,),),
            'rule_name'=>'',
            'map_type'=>'',
            'src_db_uuid'=>'',
            'src_db_auth_uuid'=>'',
            'tgt_db_uuid'=>'',
            'tgt_db_auth_uuid'=>'',
            'tgt_file_path'=>'',
            'advanced_table_map'=>array(
            '0'=>array(
            'column'=>array(
            'sync_by_default'=>1,
            'column_map_list'=>array(
            '0'=>array(
            'src_column_name'=>'',
            'operate'=>'a',
            'expression'=>'col1+col2',
            'column_name'=>'newCol',
            'column_type'=>'int',),),),
            'src'=>array(
            'user'=>'',
            'tab'=>'',),
            'tgt'=>array(
            'user'=>'',
            'tab'=>'',),),),
            'db_user_map'=>array(
            '0'=>array(
            'src'=>array(
            'user'=>'',
            'dbUuid'=>'',),
            'tgt'=>array(
            'user'=>'',
            'dbUuid'=>'',),),),
            'src_file_path'=>'',
            'src_node_uuid'=>'',
            'advanced_settings'=>array(
            'exclude_table_by_features'=>array(
            'PK'=>false,
            'UK'=>false,
            'FK'=>false,
            'INDEX'=>false,),
            'dump_thd'=>1,
            'load_thd'=>1,),
            'etl_settings'=>array(
            'etl_table'=>array(
            '0'=>array(
            'oprType'=>'',
            'table'=>'',
            'user'=>'',
            'process'=>'',
            'addInfo'=>'',),),),
            'full_sync_custom_cfg'=>array(
            '0'=>array(
            'enable'=>'',
            'key'=>'',
            'value'=>'',),),
            'policies'=>array(),
            'policy_type'=>'',
            'file_map'=>array(
            '0'=>array(
            'src_file_path'=>'',
            'src_file_name'=>'',
            'tgt_topic'=>'',),),
            'src_db_uuids'=>array(),
            'src_db_type_uuids'=>array(),
            'src_db_auth_info'=>array(
            '0'=>array(
            'db_uuid'=>'',
            'auth_uuid'=>'',),),
        );
        
        
        $res = $offlineRule -> createActiveOfflineRule($arr);
        $this->do_assert($res);
    }

    public function testUpdateActiveOfflineRule()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'file_map'=>5,
            'tgt_type'=>'',
            'src_type'=>'',
            'node_uuid'=>'',
            'table_map'=>array(
            '0'=>array(
            'src_table'=>'',
            'tgt_table'=>'',
            'src_db'=>'',
            'dst_db'=>'',
            'column'=>array(
            '0'=>array(
            'dst_column'=>'',
            'src_column'=>'',),),),),
            'format'=>array(
            'header'=>1,
            'delimiter'=>'',
            'quote'=>'',
            'force_quote'=>1,
            'escape'=>'',
            'null'=>'',
            'date_format'=>'',
            'datetime_format'=>'',
            'timestamp_format'=>'',
            'time_format'=>'',
            'byte_encode'=>'',
            'encode'=>'',
            'datatag'=>'',
            'outpath'=>'',
            'line_break'=>'',),
            'full_map_switch'=>1,
            'virtual_table'=>array(
            '0'=>array(
            'user'=>'',
            'tab'=>'',
            'sql'=>'',),),
            'rule_name'=>'',
            'map_type'=>'',
            'src_db_uuid'=>'',
            'src_db_auth_uuid'=>'',
            'tgt_db_uuid'=>'',
            'tgt_db_auth_uuid'=>'',
            'tgt_file_path'=>'',
            'advanced_table_map'=>array(
            '0'=>array(
            'column'=>array(
            'sync_by_default'=>1,
            'column_map_list'=>array(
            '0'=>array(
            'src_column_name'=>'',
            'operate'=>'a',
            'expression'=>'col1+col2',
            'column_name'=>'newCol',
            'column_type'=>'int',),),),
            'src'=>array(
            'user'=>'',
            'tab'=>'',),
            'tgt'=>array(
            'user'=>'',
            'tab'=>'',),),),
            'db_user_map'=>array(
            '0'=>array(
            'src'=>array(
            'user'=>'',),
            'tgt'=>array(
            'user'=>'',),),),
            'advanced_settings'=>array(
            'dump_thd'=>1,
            'load_thd'=>1,),
            'etl_settings'=>array(
            'etl_table'=>array(
            '0'=>array(
            'oprType'=>'',
            'table'=>'',
            'user'=>'',
            'process'=>'',
            'addInfo'=>'',),),),
            'full_sync_custom_cfg'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'policies'=>array(),
            'policy_type'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $offlineRule -> updateActiveOfflineRule($arr);
        $this->do_assert($res);
    }

    public function testListOfflineRuleStatus()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'rule_uuids'=>array(),
        );
        
        
        $res = $offlineRule -> listOfflineRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testListOfflineRuleGroupStatus()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'rule_uuids'=>array(),
        );
        
        
        $res = $offlineRule -> listOfflineRuleGroupStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteOfflineRule()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'rule_uuids'=>array(),
        );
        
        
        $res = $offlineRule -> deleteOfflineRule($arr);
        $this->do_assert($res);
    }

    public function testResumeOfflineRule()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $offlineRule -> resumeOfflineRule($arr);
        $this->do_assert($res);
    }

    public function testStopOfflineRule()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $offlineRule -> stopOfflineRule($arr);
        $this->do_assert($res);
    }

    public function testRestartOfflineRule()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $offlineRule -> restartOfflineRule($arr);
        $this->do_assert($res);
    }

    public function testStopScheduleOfflineRule()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $offlineRule -> stopScheduleOfflineRule($arr);
        $this->do_assert($res);
    }

    public function testResumeScheduleOfflineRule()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $offlineRule -> resumeScheduleOfflineRule($arr);
        $this->do_assert($res);
    }

    public function testGetOfflineRuleCharset()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array();
        
        
        $res = $offlineRule -> getOfflineRuleCharset($arr);
        $this->do_assert($res);
    }

    public function testDescribeOfflineRule()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $offlineRule -> describeOfflineRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeOfflineRuleGroup()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $offlineRule -> describeOfflineRuleGroup($arr);
        $this->do_assert($res);
    }

    public function testModifyOfflineRuleGroup()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $offlineRule -> modifyOfflineRuleGroup($arr);
        $this->do_assert($res);
    }

    public function testSwitchOfflineRuleMaintenance()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'maintenance_switch'=>1,
            'uuid'=>'',
        );
        
        
        $res = $offlineRule -> switchOfflineRuleMaintenance($arr);
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