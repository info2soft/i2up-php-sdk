<?php
namespace i2up\Test\v20240228\active;

use i2up\active\v20240228\OfflineRule;
use i2up\common\Auth;
                
class OfflineRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $offlineRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
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
                'where_args'=>array(),
        );
        $res = $offlineRule -> listOfflineRule($arr);
        $this->do_assert($res);
    }

    public function testCreateActiveOfflineRule()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'rule_name'=>'',
            'map_type'=>'',
            'src_db_uuid'=>'',
            'src_db_auth_uuid'=>'',
            'tgt_db_uuid'=>'',
            'tgt_db_auth_uuid'=>'',
            'tgt_file_path'=>'',
            'advanced_table_map'=>array(
            '0'=>array(
            'src'=>array(
            'user'=>'',
            'tab'=>'',),
            'tgt'=>array(
            'user'=>'',
            'tab'=>'',),
            'column'=>array(
            'sync_by_default'=>1,
            'column_map_list'=>array(
            '0'=>array(
            'operate'=>'a',
            'expression'=>'col1+col2',
            'column_name'=>'newCol',
            'column_type'=>'int',
            'src_column_name'=>'',),),),),),
            'db_user_map'=>array(
            '0'=>array(
            'src'=>array(
            'user'=>'',),
            'tgt'=>array(
            'user'=>'',),),),
            'advanced_settings'=>array(
            'dump_thd'=>1,
            'load_thd'=>1,
            'exclude_table_by_features'=>array(
            'PK'=>false,
            'UK'=>false,
            'FK'=>false,
            'INDEX'=>false,),),
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
            'value'=>'',
            'enable'=>'',),),
            'policies'=>array(),
            'policy_type'=>'',
            'tgt_type'=>'',
            'src_type'=>'',
            'node_uuid'=>'',
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
            'outpath'=>'',
            'datatag'=>'',
            'line_break'=>'',),
            'full_map_switch'=>1,
            'virtual_table'=>array(
            '0'=>array(
            'user'=>'',
            'tab'=>'',
            'sql'=>'',
            'srcuser'=>'',
            'srctab'=>'',),),
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
            'file_map'=>array(
            '0'=>array(
            'src_file_path'=>'',
            'src_file_name'=>'',
            'tgt_topic'=>'',),),
            'src_file_path'=>'',
            'src_node_uuid'=>'',
        );
        $res = $offlineRule -> createActiveOfflineRule($arr);
        $this->do_assert($res);
    }

    public function testUpdateActiveOfflineRule()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
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
            'file_map'=>5,
        );
        $res = $offlineRule -> updateActiveOfflineRule($arr);
        $this->do_assert($res);
    }

    public function testListOfflineRuleStatus()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $offlineRule -> listOfflineRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteOfflineRule()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'rule_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $offlineRule -> deleteOfflineRule($arr);
        $this->do_assert($res);
    }

    public function testOperateOfflineRule()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'',
        );
        $res = $offlineRule -> operateOfflineRule($arr);
        $this->do_assert($res);
    }

    public function testGetOfflineRuleCharset()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $offlineRule -> getOfflineRuleCharset($arr);
        $this->do_assert($res);
    }

    public function testDescribeOfflineRule()
    {
        $offlineRule = $this -> offlineRule;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $offlineRule -> describeOfflineRule($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}