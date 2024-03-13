<?php
namespace i2up\Test\v20240228\active;

use i2up\active\v20240228\QianBaseSync;
use i2up\common\Auth;
                
class QianBaseSyncTest extends \PHPUnit_Framework_TestCase
 {
    private $qianBaseSync;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> qianBaseSync = new QianBaseSync(new Auth());
    }

    public function testListQianbaseRule()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'group_uuid'=>'',
            'where_args'=>array(
            'rule_uuid'=>'',
            'status'=>'',
            'src_db_name'=>'',
            'tgt_db_name'=>'',
            'db_ip'=>'',
            'node_ip'=>'',
            'username'=>'',
            'rule_name'=>'',),
        );
        $res = $qianBaseSync -> listQianbaseRule($arr);
        $this->do_assert($res);
    }

    public function testCreateQianbaseRule()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'rule_name'=>'test',
            'src_db_uuid'=>'7B1BE386-4CB1-86AA-D39D-B644C2EADD57',
            'map_type'=>'table',
            'config'=>array(
            'start_rule_now'=>1,
            'db_set'=>array(
            '0'=>array(
            'tgt_db_uuid'=>'CD52E44B-D25A-4CE3-126F-6F5A460731E4',
            'filter_type'=>'[1:filter_table,0:no_fileter]',
            'table_map'=>array(
            '0'=>array(
            'src_table'=>'',
            'dst_table'=>'',),),
            'custom_config'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'tgt_type'=>'',),),
            'all_custom_config'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'sync_content'=>array(
            '0'=>array(
            'sync_col'=>'',),),
            'jointing'=>array(
            'table'=>'',
            'op'=>'',
            'content'=>'',),
            'save_json_text'=>'',
            'kafka_db_uuid'=>'',
            'conn_num'=>1,
            'loader'=>1,
            'schema_name'=>'',),
        );
        $res = $qianBaseSync -> createQianbaseRule($arr);
        $this->do_assert($res);
    }

    public function testModifyQianbaseRule()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'rule_name'=>'',
            'src_db_uuid'=>'',
            'tgt_db_uuid'=>'',
            'tgt_type'=>'sqlserver',
            'map_type'=>'db',
            'config'=>array(
            'start_rule_now'=>1,
            'table_map'=>array(),
            'full_sync'=>0,
            'incre_sync'=>1,
            'full_sync_mode'=>'1',
            'db_user_map'=>'',
            'dbmap_topic'=>'',
            'row_map_mode'=>'',
            'kafka_time_out'=>'',
            'part_load_balance'=>'',
            'kafka_message_encoding'=>'',
            'db_set'=>array(
            '0'=>array(
            'tgt_db_uuid'=>'',
            'filter_type'=>'',
            'tgt_type'=>'',
            'table_map'=>array(
            '0'=>array(
            'src_table'=>'',
            'dst_table'=>'',),),
            'custom_config'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),),),
            'all_custom_config'=>array(
            '0'=>array(
            'key'=>'',
            'value'=>'',),),
            'sync_content'=>array(
            '0'=>array(
            'sync_col'=>'',),),),
            'rule_uuid'=>'',
        );
        $res = $qianBaseSync -> modifyQianbaseRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteQianbaseRule()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'uuids'=>array(),
            'force'=>'true',
        );
        $res = $qianBaseSync -> deleteQianbaseRule($arr);
        $this->do_assert($res);
    }

    public function testListQianbaseStatus()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'uuids'=>array(),
        );
        $res = $qianBaseSync -> listQianbaseStatus($arr);
        $this->do_assert($res);
    }

    public function testResumeQianbaseRule()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'operate'=>'',
            'uuids'=>array(),
            'scn'=>'',
        );
        $res = $qianBaseSync -> resumeQianbaseRule($arr);
        $this->do_assert($res);
    }

    public function testListQianbaseRuleLog()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'date_start'=>'',
            'date_end'=>'',
            'type'=>1,
            'module_type'=>1,
            'query_type'=>1,
            'rule_uuid'=>'d4d4bcA1-4567-ACE2-41CF-1e67dAFed5b9',
        );
        $res = $qianBaseSync -> listQianbaseRuleLog($arr);
        $this->do_assert($res);
    }

    public function testDescribeQianbaseRules()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'rule_uuid'=>'',
        );
        $res = $qianBaseSync -> describeQianbaseRules($arr);
        $this->do_assert($res);
    }

    public function testCreateQbTbCmp()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'tb_cmp_name'=>'ctt->ctt',
            'src_db_uuid'=>'4CA773F4-36E3-A091-122C-ACDFB2112C21',
            'tgt_db_uuid'=>'40405FD3-DB86-DC8A-81C9-C137B6FDECE5',
            'cmp_type'=>'user,table,db',
            'db_user_map'=>'{"CTT":"CTT"}',
            'filter_table'=>'[用户.表名]',
            'db_tb_map'=>'表映射',
            'dump_thd'=>1,
            'rule_uuid'=>'a7583c2A-4fdb-bA62-96cb-ac1d0d8d01Fd',
            'polices'=>'"0|00:00',
            'policy_type'=>'one_time',
            'concurrent_table'=>array(
            '0'=>'hh.ww',),
            'try_split_part_table'=>0,
            'one_time'=>'2019-05-27 16:07:08',
            'repair'=>0,
            'fix_related'=>0,
            'config'=>array(
            'tab_cmp_filter'=>array(
            '0'=>array(
            'user'=>'test',
            'table'=>'test',
            'condition'=>'select * from xxx',),),),
        );
        $res = $qianBaseSync -> createQbTbCmp($arr);
        $this->do_assert($res);
    }

    public function testListQbTbCmpStatus()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'uuids'=>'ec1e3d54-Cb6f-666d-2FB5-F94A439189F0',
        );
        $res = $qianBaseSync -> listQbTbCmpStatus($arr);
        $this->do_assert($res);
    }

    public function testDescribeQbTbCmp()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $qianBaseSync -> describeQbTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDeleteQbTbCmp()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'force'=>false,
            'uuids'=>'90f60680-EcC2-AbEC-849c-CCA7CAedBC2E',
        );
        $res = $qianBaseSync -> deleteQbTbCmp($arr);
        $this->do_assert($res);
    }

    public function testListQbTbCmp()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
        );
        $res = $qianBaseSync -> listQbTbCmp($arr);
        $this->do_assert($res);
    }

    public function testListQbTbCmpResultTimeList()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'uuid'=>'',
        );
        $res = $qianBaseSync -> listQbTbCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testStopQbTbCmp()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'operate'=>'',
            'tb_cmp_uuids'=>'5e78b8b4-cf6E-79Fa-49D4-71aF4e8BCbeD',
        );
        $res = $qianBaseSync -> stopQbTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDescribeQbTbCmpResuluTimeList()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'time_list'=>'F27e3C09-A772-39Eb-D6C3-D3faccbFC0Ec',
            'uuid'=>'',
        );
        $res = $qianBaseSync -> describeQbTbCmpResuluTimeList($arr);
        $this->do_assert($res);
    }

    public function testDescribeQbTbCmpResult()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'uuid'=>'Ad6bCAd1-30DF-88bc-FBF0-3c00d9fe1959',
            'start_time'=>'',
        );
        $res = $qianBaseSync -> describeQbTbCmpResult($arr);
        $this->do_assert($res);
    }

    public function testDescribeQbTbCmpErrorMsg()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'offset'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'uuid'=>'BFdE9FDc-ADCd-63b9-6C7B-Ac1C3AedB1D3',
            'start_time'=>'',
            'name'=>'',
            'owner'=>'admin',
        );
        $res = $qianBaseSync -> describeQbTbCmpErrorMsg($arr);
        $this->do_assert($res);
    }

    public function testDescribeQbTbCmpCmpResult()
    {
        $qianBaseSync = $this -> qianBaseSync;
        $arr = array(
            'uuid'=>'',
        );
        $res = $qianBaseSync -> describeQbTbCmpCmpResult($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}