<?php
namespace i2up\Test\v20240228\active;

use i2up\active\v20240228\Sqlserver;
use i2up\common\Auth;
                
class SqlserverTest extends \PHPUnit_Framework_TestCase
 {
    private $sqlserver;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> sqlserver = new Sqlserver(new Auth());
    }

    public function testDescribeSyncRules()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'offset'=>1,
            'limit'=>'10',
            'usr'=>'',
            'rule_uuid'=>'D6eC7fb7-61Ad-cccA-2E25-d6A13ed6a41A',
            'sort_order'=>'asc',
            'search'=>'',
            'sort'=>'',
        );
        $res = $sqlserver -> describeSyncRules($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesObjInfo()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'rule_uuid'=>'5EaeC63b-D816-1F70-6BbE-Fd4DaCDEB54A',
            'usr'=>'',
            'sort'=>'',
            'sort_order'=>'',
            'search'=>'',
        );
        $res = $sqlserver -> describeSyncRulesObjInfo($arr);
        $this->do_assert($res);
    }

    public function testCreateRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'rule_name'=>'',
            'src_db_uuid'=>'',
            'tgt_db_uuid'=>'',
            'tgt_type'=>'sqlserver',
            'map_type'=>'db',
            'config'=>array(
            'start_rule_now'=>1,
            'table_map'=>array(
            '0'=>array(
            'src_table'=>'',
            'dst_table'=>'',
            'src_user'=>'',
            'dst_user'=>'',
            'column'=>array(
            '0'=>array(
            'src_column'=>'',
            'dst_column'=>'',),),),),
            'enable_cdc'=>0,
            'mirror_db_uuid'=>'',
            'sync_mode'=>1,
            'dump_thd'=>1,
            'drop_old_tab'=>1,
            'lsn'=>'',
            'etl_settings'=>array(
            'etl_table'=>array(
            '0'=>array(
            'oprType'=>'',
            'table'=>'',
            'user'=>'',
            'process'=>'',
            'addInfo'=>'',),),),
            'loader'=>1,
            'ip'=>'',
            'datport'=>'',
            'db_user_map'=>array(),
            'src_connect_user'=>'',
            'dst_connect_user'=>'',
            'bw_settings'=>array(
            'bw_limit'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'inc_sync_ddl_data'=>array(),
            'filter_table_settings'=>array(
            'exclude_table'=>array(),),
            'full_sync_obj_filter'=>array(
            'full_sync_obj_data'=>array(
            '0'=>'PROCEDURE',
            '1'=>'PACKAGE',
            '2'=>'PACKAGE BODY',
            '3'=>'DATABASE LINK',
            '4'=>'OLD JOB',
            '5'=>'JOB',
            '6'=>'PRIVS',
            '7'=>'CONSTRAINT',
            '8'=>'JAVA RESOURCE',
            '9'=>'JAVA SOURCE',),),
            'run_time'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',
            'save_json_text'=>false,
            'enable_cdc_table'=>'',
            'publish_sub_switch'=>1,
            'incre_sync'=>1,),
        );
        $res = $sqlserver -> createRule($arr);
        $this->do_assert($res);
    }

    public function testBatchCreateRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'tgt_type'=>'sqlserver',
            'map_type'=>'db',
            'config'=>array(
            'enable_cdc'=>0,
            'start_rule_now'=>1,
            'dump_thd'=>1,
            'sync_mode'=>1,
            'drop_old_tab'=>1,
            'table_map'=>'',
            'etl_settings'=>array(
            'etl_table'=>array(
            '0'=>array(
            'oprType'=>'',
            'table'=>'',
            'user'=>'',
            'process'=>'',
            'addInfo'=>'',),),),),
            'rule_list'=>array(
            '0'=>array(
            'rule_name'=>'',
            'src_db_uuid'=>'',
            'tgt_db_uuid'=>'',
            'mirror_db_uuid'=>'',),),
        );
        $res = $sqlserver -> batchCreateRule($arr);
        $this->do_assert($res);
    }

    public function testModifyRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'rule_name'=>'test',
            'src_db_uuid'=>'7B1BE386-4CB1-86AA-D39D-B644C2EADD57',
            'tgt_db_uuid'=>'CD52E44B-D25A-4CE3-126F-6F5A460731E4',
            'tgt_type'=>'sqlserver',
            'map_type'=>'table',
            'config'=>array(
            'etl_settings'=>array(
            'etl_table'=>array(
            '0'=>array(
            'oprType'=>'',
            'table'=>'',
            'user'=>'',
            'process'=>'',
            'addInfo'=>'',),),),
            'loader'=>1,
            'ip'=>'',
            'datport'=>'',
            'db_user_map'=>array(),
            'bw_settings'=>array(
            'bw_limit'=>'',),
            'run_time'=>'"12*00:00-13:00*40M,3*00:00-13:00*40M"',),
            'start_rule_now'=>1,
            'table_map'=>'[{"src_user":"1","src_table":"2","dst_user":"1","dst_table":"2","column":[]}]',
            'enable_cdc'=>0,
            'mirror_db_uuid'=>'',
            'sync_mode'=>1,
            'dump_thd'=>1,
            'drop_old_tab'=>1,
        );
        $res = $sqlserver -> modifyRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'force'=>'true',
        );
        $res = $sqlserver -> deleteRule($arr);
        $this->do_assert($res);
    }

    public function testResumeSqlserverRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'operate'=>'',
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $sqlserver -> resumeSqlserverRule($arr);
        $this->do_assert($res);
    }

    public function testListRuleStatus()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $sqlserver -> listRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testCheckName()
    {
        $sqlserver = $this -> sqlserver;
        $res = $sqlserver -> checkName();
        $this->do_assert($res);
    }

    public function testListRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'group_uuid'=>'',
            'where_args'=>array(
            'rule_uuid'=>'',),
        );
        $res = $sqlserver -> listRule($arr);
        $this->do_assert($res);
    }

    public function testCreateTbCmp()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'tb_cmp_name'=>'ctt->ctt',
            'src_db_uuid'=>'4CA773F4-36E3-A091-122C-ACDFB2112C21',
            'tgt_db_uuid'=>'40405FD3-DB86-DC8A-81C9-C137B6FDECE5',
            'cmp_type'=>'user,table,db',
            'db_user_map'=>'{"CTT":"CTT"}',
            'filter_table'=>'[用户.表名]',
            'db_tb_map'=>'表映射',
            'dump_thd'=>1,
            'rule_uuid'=>'AB12cddE-d2Ba-054F-4E81-Ecd8A9d473E1',
            'polices'=>'"0|00:00',
            'policy_type'=>'one_time',
            'concurrent_table'=>array(
            '0'=>'hh.ww',),
            'try_split_part_table'=>0,
            'one_time'=>'2019-05-27 16:07:08',
            'repair'=>0,
            'fix_related'=>0,
        );
        $res = $sqlserver -> createTbCmp($arr);
        $this->do_assert($res);
    }

    public function testListRuleLog()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'date_start'=>'2005-01-22',
            'date_end'=>'1973-03-01',
            'type'=>-1,
            'module_type'=>-1,
            'query_type'=>1,
            'rule_uuid'=>'F530FB0E-0208-9071-66D3-E595AE7D5A4C',
        );
        $res = $sqlserver -> listRuleLog($arr);
        $this->do_assert($res);
    }

    public function testDescribeListRule()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'rule_uuid'=>'6FBC9EB9-A10A-E226-9F2B-A77B3CF1D337',
        );
        $res = $sqlserver -> describeListRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmp()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $sqlserver -> describeTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDeleteTbCmp()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'force'=>false,
            'uuids'=>'21A657df-2f4f-c83E-bDcF-568e2527eEe5',
        );
        $res = $sqlserver -> deleteTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDescribeSyncRulesFailObj()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'rule_uuid'=>'aEF4fc46-b2fC-17aA-3cEB-F6ceEdA0bDcF',
            'search'=>'',
            'type'=>1,
            'stage'=>1,
        );
        $res = $sqlserver -> describeSyncRulesFailObj($arr);
        $this->do_assert($res);
    }

    public function testListTbCmp()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
        );
        $res = $sqlserver -> listTbCmp($arr);
        $this->do_assert($res);
    }

    public function testListTbCmpStatus()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'uuids'=>'aDe5dDDf-8ae2-8cB6-7521-ce9F69AdFd6C',
        );
        $res = $sqlserver -> listTbCmpStatus($arr);
        $this->do_assert($res);
    }

    public function testListTbCmpResultTimeList()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'uuid'=>'',
        );
        $res = $sqlserver -> listTbCmpResultTimeList($arr);
        $this->do_assert($res);
    }

    public function testStopTbCmp()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'operate'=>'',
            'tb_cmp_uuids'=>'95feAC78-6140-506e-5E82-B907974519cB',
        );
        $res = $sqlserver -> stopTbCmp($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpResuluTimeList()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'time_list'=>'beC42Ea8-AD98-4cCD-7852-371fBfcdDBFD',
            'uuid'=>'',
        );
        $res = $sqlserver -> describeTbCmpResuluTimeList($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpResult()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'uuid'=>'411f7caD-8eD8-5f3F-9E97-03Df4C9D892A',
            'start_time'=>'',
        );
        $res = $sqlserver -> describeTbCmpResult($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpErrorMsg()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'offset'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'uuid'=>'14AEFEF1-570C-76f6-ee86-dfeaAbccfA6A',
            'start_time'=>'',
            'name'=>'',
            'owner'=>'admin',
        );
        $res = $sqlserver -> describeTbCmpErrorMsg($arr);
        $this->do_assert($res);
    }

    public function testDescribeTbCmpCmpResult()
    {
        $sqlserver = $this -> sqlserver;
        $arr = array(
            'uuid'=>'',
        );
        $res = $sqlserver -> describeTbCmpCmpResult($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}