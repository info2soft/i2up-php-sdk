<?php
namespace i2up\Test\active;

use i2up\active\v20200721\Mysql;
use i2up\common\Auth;

class MysqlTest extends \PHPUnit_Framework_TestCase
{
    private $mysql;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> mysql = new Mysql(new Auth());
    }

    public function testCreateStreamRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'mysql_name'=>1,
            'src_db_uuid'=>' 1B1153F6-DAD9-BC39-888A-A743FCC208E5',
            'tgt_db_uuid'=>' D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
            'tgt_type'=>'oracle',
            'start_rule_now'=>0,
            'dbmap_topic'=>'',
            'map_type'=>'table',
            'tab_map'=>array(
                '0'=>array(
                    'src_table'=>'src_table',
                    'dst_table'=>'dst_table',
                    'src_db'=>'111',
                    'dst_db'=>'222',),),
            'full_sync'=>0,
            'incre_sync'=>1,
            'model_type'=>'1:0',
            'full_sync_mode'=>'auto',
            'db_set'=>array(
                'binlog_format'=>'row',
                'binlog_row_image'=>'full',
                'default_storage_engine'=>'innoDB',
                'sync_binlog'=>'1',
                'innodb_flush_log'=>'2',
                'innodb_flush_method'=>'O_DIRECT',
                'max_allowed_packet'=>'52',
                'open_files_limit'=>'65535',
                'server_id'=>'123456',
                'expire_logs_days'=>'7',
                'nat_mode'=>0,
                'ip'=>'',),
            'full_sync_set'=>array(
                'support_ddl'=>1,
                'change_tf_path'=>'',
                'tf_file_save_time'=>7,
                'nat_mode'=>0,
                'foreign_ip'=>'',
                'extraction'=>0,
                'start_lsn'=>1,),
            'primary_db_one'=>'',
            'primary_map_type_one'=>'',
            'primary_map_one'=>'',
            'primary_db_two'=>'',
            'primary_map_type_two'=>'',
            'primary_map_two'=>'',
            'db_map'=>array(
                '0'=>array(
                    'dst_table'=>'',
                    'src_table'=>'',),),
            'modify'=>'',
            'start_src_db_set'=>0,
            'dst_db_set'=>array(
                'binlog_format'=>'',
                'binlog_row_image'=>'',
                'default_storage_engine'=>'',
                'sync_binlog'=>'',
                'innodb_flush_log'=>'',
                'innodb_flush_method'=>'',
                'max_allowed_packet'=>'',
                'open_files_limit'=>'',
                'server_id'=>'',
                'expire_logs_days'=>'',
                'nat_mode'=>1,
                'ip'=>'',),
            'dst_full_sync_set'=>array(
                'support_ddl'=>1,
                'change_tf_path'=>'',
                'tf_file_save_time'=>'',
                'nat_mode'=>'',
                'foreign_ip'=>'',
                'extraction'=>0,
                'start_lsn'=>1,),
            'start_dst_db_set'=>0,
        );
        $res = $mysql -> createStreamRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteStreamRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'mysql_uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $mysql -> deleteStreamRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListStreamRules()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'where_args'=>array(
                'mysql_uuid'=>'',),
        );
        $res = $mysql -> listStreamRules($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListStreamStatus()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $mysql -> listStreamStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListStreamLog()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'offset'=>0,
            'limit'=>10,
            'date_start'=>'',
            'date_end'=>'',
            'type'=>1,
            'module_type'=>1,
            'query_type'=>1,
            'mysql_uuid'=>'d96bBAD0-dfca-d45C-9A46-A7F82f62e2D2',
        );
        $res = $mysql -> listStreamLog($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListStreamSyncStatus()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'node_uuid'=>'5BA4957E-cEF4-fb37-3181-DD4515DD6Ddb',
            'mysql_uuid'=>'',
        );
        $res = $mysql -> listStreamSyncStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeHistory()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'mysql_uuid'=>'9A2B7043-7a8b-A5fd-D763-b093b7A266DF',
            'start_time'=>'2019-10-11 14:23:13',
            'end_time'=>'2019-10-11 15:23:13',
        );
        $res = $mysql -> describeHistory($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeResource()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'set_time'=>1,
            'type'=>'',
            'interval'=>'时间间隔',
            'set_time_init'=>'',
            'rule_uuid'=>'',
        );
        $res = $mysql -> describeResource($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyStreamRule()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'mysql_name'=>'mysql',
            'src_db_uuid'=>' 1B1153F6-DAD9-BC39-888A-A743FCC208E5',
            'tgt_db_uuid'=>' D42BF707-C971-EEA9-521F-BB0F3F7A92FC',
            'tgt_type'=>'kafka',
            'start_rule_now'=>0,
            'node_uuid'=>' 6B1153F6-DAD9-BC39-888A-A743FCC208E6',
            'dbmap_topic'=>'',
            'map_type'=>'table',
            'tab_map'=>array(
                '0'=>array(
                    'src_table'=>'src_table',
                    'topic'=>'topic',),),
            'full_sync'=>0,
            'incre_sync'=>1,
            'model_type'=>'1:0',
            'full_sync_mode'=>'auto',
            'db_set'=>array(
                'db_node'=>'1B1153F6-DAD9-BC39-888A-A743FCC208E5',
                'binlog_format'=>'row',
                'binlog_row_image'=>'full',
                'default_storage_engine'=>'innoDB',
                'sync_binlog'=>'1',
                'innodb_flush_log'=>'2',
                'innodb_flush_method'=>'O_DIRECT',
                'max_allowed_packet'=>'52',
                'open_files_limit'=>'65535',
                'server_id'=>'123456',
                'expire_logs_days'=>'7',
                'nat_mode'=>0,
                'ip'=>'',),
            'full_sync_set'=>array(
                'support_ddl'=>1,
                'node'=>' 6B1153F6-DAD9-BC39-888A-A743FCC208E6',
                'change_tf_path'=>'',
                'tf_file_save_time'=>7,
                'nat_mode'=>0,
                'foreign_ip'=>'',),
            'primary_node_one'=>'',
            'primary_node_two'=>'',
            'primary_db_one'=>'',
            'primary_map_type_one'=>'',
            'primary_map_one'=>array(),
            'primary_db_two'=>'',
            'primary_map_type_two'=>'',
            'primary_map_two'=>array(),
            'db_map'=>array(
                '0'=>array(
                    'src_db'=>'src_db',
                    'dst_db'=>'dst_db',),),
            'mysql_uuid'=>'5349E2CF-7DBO-OAF2-13CB-BB7DFD8A9D86',
        );
        $res = $mysql -> modifyStreamRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeStreamRules()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'mysql_uuid'=>'',
        );
        $res = $mysql -> describeStreamRules($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateStreamCmp()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'tb_cmp_name'=>'ctt->ctt',
            'src_db_uuid'=>'4CA773F4-36E3-A091-122C-ACDFB2112C21',
            'tgt_db_uuid'=>'40405FD3-DB86-DC8A-81C9-C137B6FDECE5',
            'cmp_type'=>'table, database, all',
            'db_user_map'=>array(
                'CTT'=>'CTT',),
            'filter_table'=>array(
                '0'=>'用户.表名',),
            'db_tb_map'=>'表映射',
            'dump_thd'=>1,
            'rule_uuid'=>'3266e301-5137-95ff-3f1b-eC3e673F535A',
            'polices'=>'"0|00:00',
            'policy_type'=>'one_time',
            'try_split_part_table'=>0,
            'one_time'=>'',
            'concurrent_table'=>array(),
            'repair'=>1,
            'fix_related'=>1,
        );
        $res = $mysql -> createStreamCmp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeStreamCmp()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuid'=>'',
        );
        $res = $mysql -> describeStreamCmp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteStreamRules()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuids'=>'c835A2AF-4b1e-4952-15a4-ECd7A99f13Ce',
        );
        $res = $mysql -> deleteStreamRules($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListStreamCmps()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
        );
        $res = $mysql -> listStreamCmps($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListStreamCmpStatus()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $mysql -> listStreamCmpStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteCmpResult()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'time_list'=>'1C5CA0A9-bADc-f5AF-44Fd-FBC4D1291CfA',
            'uuid'=>'',
        );
        $res = $mysql -> deleteCmpResult($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListCmpResult()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuid'=>'',
            'limit'=>'',
            'offset'=>'',
        );
        $res = $mysql -> listCmpResult($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeTbCmpResult()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'uuid'=>'fe93D6dF-Ae5b-F78d-C69c-BaA27eFc3851',
            'start_time'=>'',
        );
        $res = $mysql -> describeTbCmpResult($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeCmpErrorMsg()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'offset'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
            'uuid'=>'EDC684f4-d708-305b-5F5B-9bF3cEEe6B54',
            'start_time'=>'',
            'name'=>'',
            'owner'=>'admin',
        );
        $res = $mysql -> describeCmpErrorMsg($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListFixResult()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuid'=>'',
        );
        $res = $mysql -> listFixResult($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testExportCmpResult()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuid'=>'',
        );
        $res = $mysql -> exportCmpResult($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListCmpDiffMap()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuid'=>'',
            'time'=>'',
        );
        $res = $mysql -> listCmpDiffMap($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateBkTakeover()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'mysql_uuid'=>'761D8DA6-1113-25Bb-6eCf-47aEe177Ad94',
            'start_val'=>1000,
            'scan_ip'=>array(
                '0'=>'c01D7F86-A631-b79f-E2AA-7ccb7f2bE851',
                '1'=>'c01D7F86-A631-b79f-E2AA-7ccb7f2bE851',
                '2'=>'c01D7F86-A631-b79f-E2AA-7ccb7f2bE851',),
            'hosts'=>array(
                '0'=>array(
                    'ip'=>'192.168.12.200',
                    'password'=>'',),),
            'use_ip_sw'=>1,
        );
        $res = $mysql -> createBkTakeover($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeBkTakeover()
    {
        $mysql = $this -> mysql;
        $arr = array(
        );
        $res = $mysql -> describeBkTakeover($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateObjCmp()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'db_user_map'=>'',
            'policies'=>'',
            'policy_type'=>'periodic',
            'one_time'=>'2019-05-27 16:07:08',
            'repair'=>1,
            'obj_cmp_name'=>'test',
            'src_db_uuid'=>'4CA773F4-36E3-A091-122C-ACDFB2112C21',
            'tgt_db_uuid'=>'40405FD3-DB86-DC8A-81C9-C137B6FDECE5',
            'cal_table_recoders'=>1,
            'cmp_type'=>'user',
            'rule_uuid'=>'751A03F5-C97D-645B-82B2-316A5D198528',
        );
        $res = $mysql -> createObjCmp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteBkTakeover()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $mysql -> deleteBkTakeover($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListTakeoverResult()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'bk_takeover_uuid'=>'',
        );
        $res = $mysql -> listTakeoverResult($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListTakeoverStatus()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $mysql -> listTakeoverStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListTakeoverList()
    {
        $mysql = $this -> mysql;
        $res = $mysql -> listTakeoverList();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateObjFix()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'obj_fix_name'=>'test',
            'src_db_uuid'=>'4CA773F4-36E3-A091-122C-ACDFB2112C21',
            'tgt_db_uuid'=>'40405FD3-DB86-DC8A-81C9-C137B6FDECE5',
            'rule_uuid'=>'751A03F5-C97D-645B-82B2-316A5D198528',
            'obj_map'=>array(
                '0'=>array(
                    'type'=>'owner.name',),
                '1'=>array(
                    'type'=>'owner.name',),),
        );
        $res = $mysql -> createObjFix($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeObjFix()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuid'=>'CFDea449-1FD4-08eb-A39b-FBCe27DdBE2c',
        );
        $res = $mysql -> describeObjFix($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteObjFix()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuids'=>'EcC8BBeD-BF3D-152B-9987-fcfd1bdBC7fD',
        );
        $res = $mysql -> deleteObjFix($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListObjFix()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
        );
        $res = $mysql -> listObjFix($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testTempFuncName()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'obj_fix_uuids'=>'F7333F4a-dBB8-2fbd-dcBd-A4aED22c5315',
        );
        $res = $mysql -> tempFuncName($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeObjFixResult()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuid'=>'21F43AC1-7376-EFA6-daEF-eEDFf4Bb859b',
        );
        $res = $mysql -> describeObjFixResult($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListObjFixStatus()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $mysql -> listObjFixStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }


    public function testListObjCmp()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'search_field'=>'',
            'search_value'=>'',
        );
        $res = $mysql -> listObjCmp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeObjCmpResultTimeList()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuid'=>'db40F9fA-9Bfc-b9D2-38Fe-99De5bb6f246',
            'time_list'=>array(),
        );
        $res = $mysql -> describeObjCmpResultTimeList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeObjCmp()
    {
        $mysql = $this -> mysql;
        $arr = array(
        );
        $res = $mysql -> describeObjCmp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListObjCmpResultTimeList()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuid'=>'76cAEfBb-FDFD-ED3A-6AE8-aCB7A61CCC24',
        );
        $res = $mysql -> listObjCmpResultTimeList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteObjCmp()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',),
        );
        $res = $mysql -> deleteObjCmp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListObjCmpStatus()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $mysql -> listObjCmpStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListObjCmpCmpInfo()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'filed'=>'',
            'uuid'=>'',
            'start_time'=>'',
            'offset'=>1,
            'limit'=>10,
            'search_value'=>'',
            'usr'=>'I2',
        );
        $res = $mysql -> listObjCmpCmpInfo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeObjCmpResult()
    {
        $mysql = $this -> mysql;
        $arr = array(
            'BackLackOnly'=>0,
            'uuid'=>'9941ddc8-84C6-b8a4-e1E8-2BdDFD3c286e',
            'start_time'=>'',
            'limit'=>1,
            'offset'=>'',
            'search_value'=>'',
        );
        $res = $mysql -> describeObjCmpResult($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}