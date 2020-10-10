<?php
namespace i2up\Test\active;

use i2up\active\v20200721\Mask;
use i2up\common\Auth;
use i2up\Config;

class MaskTest extends \PHPUnit_Framework_TestCase
{
    private $mask;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $params = array(
            'username' => 'admin',
            'pwd' => 'Info1234',
            'cache_path' => __DIR__ . '/../',
            'ip' => Config::baseUrl
        );
        $auth = new Auth($params);
        $this -> mask = new Mask($auth);
    }

    public function testTempFuncName()
    {
        $mask = $this -> mask;
        $arr = array(
        );
        $res = $mask -> tempFuncName($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListTypes()
    {
        $mask = $this -> mask;
        $arr = array(
            'page'=>0,
            'limit'=>10,
        );
        $res = $mask -> listTypes($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifySensType()
    {
        $mask = $this -> mask;
        $arr = array(
            'algo_name'=>'屏蔽姓名',
            'algo_desc'=>'屏蔽姓名中的名字',
            'algo_params'=>array(
                '0'=>array(
                    'name'=>'偏移量',
                    'key'=>'off',
                    'value'=>'1',
                    'setted'=>1,
                    'type'=>'int',),
                '1'=>array(
                    'name'=>'长度',
                    'key'=>'len',
                    'value'=>'0',
                    'setted'=>1,
                    'type'=>'int',),
                '2'=>array(
                    'name'=>'屏蔽字符',
                    'key'=>'val',
                    'value'=>'*',
                    'setted'=>0,
                    'type'=>'string',),),
            'username'=> '',
            'user_uuid'=>'00000000-0000-0000-0000-000000000000',
            'id'=>1,
            'type_name'=>'姓名',
            'description'=>'由姓氏与名字组成，用于识别某一个人。',
            'sort'=>0,
            'create_time'=>'0',
            'params'=>'',
            'parent_id'=>1,
            'default_algo'=>1301,
            'default_algo_params'=>array(
                '0'=>array(
                    'name'=>'偏移量',
                    'key'=>'off',
                    'value'=>'1',
                    'setted'=>1,
                    'type'=>'int',),
                '1'=>array(
                    'name'=>'长度',
                    'key'=>'len',
                    'value'=>'0',
                    'setted'=>2,
                    'type'=>'int',),
                '2'=>array(
                    'name'=>'屏蔽字符',
                    'key'=>'val',
                    'value'=>'*',
                    'setted'=>3,
                    'type'=>'string',),),
            '_'=>'704098f4051d7',
        );
        $res = $mask -> modifySensType($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescriptSensType()
    {
        $mask = $this -> mask;
        $arr = array(
        );
        $res = $mask -> descriptSensType($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateAlgo()
    {
        $mask = $this -> mask;
        $arr = array(
            'ava_sens_type'=>1,
            'parent_id'=>1,
            'algo_name'=>'',
            'description'=>'',
            'params'=>'',
            'sort'=>'',
        );
        $res = $mask -> createAlgo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListAlgos()
    {
        $mask = $this -> mask;
        $arr = array(
            'page'=>0,
            'limit'=>10,
        );
        $res = $mask -> listAlgos($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescriptAlgo()
    {
        $mask = $this -> mask;
        $arr = array(
        );
        $res = $mask -> descriptAlgo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }


    public function testListMaskRules()
    {
        $mask = $this -> mask;
        $arr = array(
            'limit'=>10,
            'page'=>0,
        );
        $res = $mask -> listMaskRules($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateMaskRules()
    {
        $mask = $this -> mask;
        $arr = array(
            'rule_name'=>'1231',
            'node_uuid'=>'A6ABF8BC-38AF-41FE-ACF7-DD9F28B0FA3F',
            'tgt_db_uuid'=>'32C50055-A267-1E9E-65EE-FC6AAB75D390',
            'src_db_uuid'=>'38F1AD45-5F72-2E51-DC01-0593A14A8D17',
            'other_settings'=>array(
                'src_type'=>'oracle',
                'tgt_type'=>'oracle',
                'src_path'=>'/var/i2data/cache/',
                'file_names'=>array(),
                'size'=>1024,
                'tgt_path'=>'/var/i2data/cache/',
                'compress_level'=>0,
                'policy'=>array(
                    'policy_type'=>'immediate',
                    'one_time'=>'',
                    'time_policy'=>'',),),
            'table_space_map'=>array(
                'tgt_table_space'=>'',
                'table_mapping_way'=>'ptop',
                'table_path_map'=>array(),
                'table_space_name'=>array(),),
            'full_sync_obj_filter'=>array(
                '0'=>'INDEX',
                '1'=>'VIEW',
                '2'=>'FUNCTION',
                '3'=>'PROCEDURE',
                '4'=>'PACKAGE',
                '5'=>'PACKAGE BODY',
                '6'=>'SYNONYM',
                '7'=>'TRIGGER',
                '8'=>'SEQUENCE',
                '9'=>'JAVA CLASS',
                '10'=>'TYPE',
                '11'=>'TYPE BODY',
                '12'=>'MATERIALIZED VIEW',
                '13'=>'OLD JOB',
                '14'=>'JOB',
                '15'=>'PRIVS',
                '16'=>'CONSTRAINT',
                '17'=>'JAVA RESOURCE',
                '18'=>'JAVA SOURCE',),
            'db_user_map'=>'',
            'table_map'=>'',
            'map_type'=>'db',
            'full_sync_settings'=>array(
                'his_thread'=>1,),
            'db_map_uuid'=>'71D59BCE-17F3-ED0D-BC76-132833F72498',
            'strate'=>'',
            'modify'=> '',
            '_'=>'a39e1c5b7e511',
        );
        $res = $mask -> createMaskRules($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testOperateMaskRule()
    {
        $mask = $this -> mask;
        $arr = array(
            'operate'=>'',
            'uuids'=>'',
        );
        $res = $mask -> OperateMaskRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteMaskRule()
    {
        $mask = $this -> mask;
        $arr = array(
            'uuids'=>'',
        );
        $res = $mask -> deleteMaskRule($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListMaskRuleStatus()
    {
        $mask = $this -> mask;
        $arr = array(
            'uuids'=>array(),
        );
        $res = $mask -> listMaskRuleStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescriptMap()
    {
        $mask = $this -> mask;
        $arr = array(
        );
        $res = $mask -> descriptMap($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListMap()
    {
        $mask = $this -> mask;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        $res = $mask -> listMap($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateMap()
    {
        $mask = $this -> mask;
        $arr = array(
            'map_name'=>'',
            'sens_type_id'=>'',
            'sens_column'=>array(
                '0'=>array(
                    'user'=>'I2MASK',
                    'table'=>'MP',
                    'column'=>'MP',),),
        );
        $res = $mask -> createMap($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyMap()
    {
        $mask = $this -> mask;
        $arr = array(
            'map_name'=>'',
            'sens_type_id'=>'',
            'sens_column'=>array(
                '0'=>array(
                    'user'=>'I2MASK',
                    'table'=>'MP',
                    'column'=>'MP',),),
        );
        $res = $mask -> modifyMap($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteMap()
    {
        $mask = $this -> mask;
        $arr = array(
            'uuids'=>array(),
        );
        $res = $mask -> deleteMap($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateDbMap()
    {
        $mask = $this -> mask;
        $arr = array(
            'db_uuid'=>'',
            'map_name'=>'',
        );
        $res = $mask -> createDbMap($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDbMap()
    {
        $mask = $this -> mask;
        $arr = array(
            'page'=>0,
            'limit'=>10,
        );
        $res = $mask -> listDbMap($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteDbMap()
    {
        $mask = $this -> mask;
        $arr = array(
            'uuid'=>'',
        );
        $res = $mask -> deleteDbMap($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyDbMap()
    {
        $mask = $this -> mask;
        $arr = array(
        );
        $res = $mask -> modifyDbMap($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateSensCheck()
    {
        $mask = $this -> mask;
        $arr = array(
            'rule_uuid'=>'',
            'rule_name'=>'adsas',
            'src_db_uuid'=>'38F1AD45-5F72-2E51-DC01-0593A14A8D17',
            'mask_node_uuid'=>'A6ABF8BC-38AF-41FE-ACF7-DD9F28B0FA3F',
            'user'=>'',
            'tabs'=>'',
            'row'=>100,
            'min'=>90,
            'sens_types'=>'1,2,3,4,5,6,7,8,9,10,12,13,14,15,20',
            'map_type'=>'db',
            'mix'=>0,
            'white'=>1,
            '_'=>'25bc5f36e5175',
        );
        $res = $mask -> createSensCheck($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifySensCheck()
    {
        $mask = $this -> mask;
        $arr = array(
            'task_name'=>'',
            'src_db_uuid'=>'38F1AD45-5F72-2E51-DC01-0593A14A8D17',
            'users'=>'',
            'tabs'=>'',
            'row'=>100,
            'min'=>90,
            'types'=>array(
                '0'=>array(
                    'type_id'=>1,
                    'type_arg'=>'',),),
            'username'=>'admin',
            'user_uuid'=>'1BCFCAA3-E3C8-3E28-BDC5-BE36FDC2B5DC',
            'rule_uuid'=>'F895D958-F435-47AC-664D-805BA7DFEE89',
            'rule_name'=>'asd',
            'map_type'=>'db',
            'user'=>'',
            'sens_types'=>'1,2,3,4,5,6,7,8,9,10,12,13,14,15,20',
            'create_time'=>'1601344305',
            'mask_node_uuid'=>'A6ABF8BC-38AF-41FE-ACF7-DD9F28B0FA3F',
            'mix'=>0,
            'status'=>0,
            'start'=>'2020-09-29 09:51:45',
            'end'=>'',
            'white'=>1,
            'info'=>'',
            'is_biz_admin'=>1,
            'can_del'=>1,
            'can_op'=>1,
            'can_up'=>1,
            '_'=>'2bbafa2a992d7',
        );
        $res = $mask -> modifySensCheck($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteSensCheck()
    {
        $mask = $this -> mask;
        $arr = array(
            'uuids'=>'',
        );
        $res = $mask -> deleteSensCheck($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListSensCheck()
    {
        $mask = $this -> mask;
        $arr = array(
            'page'=>0,
            'limit'=>10,
        );
        $res = $mask -> listSensCheck($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescriptSensCheck()
    {
        $mask = $this -> mask;
        $arr = array(
        );
        $res = $mask -> descriptSensCheck($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testAlgoTest()
    {
        $mask = $this -> mask;
        $arr = array(
            'example'=>array(
                'orig'=>'1231',
                'mask'=>'-',),
            'parent_id'=>308,
            'ava_sens_type'=>8,
            'type_arg'=>'',
            'id'=>308,
            'params'=>array(),
            '_'=>'713d0acaa3283',
        );
        $res = $mask -> algoTest($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyMaskRules()
    {
        $mask = $this -> mask;
        $arr = array(
            'username'=>'admin',
            'user_uuid'=>'1BCFCAA3-E3C8-3E28-BDC5-BE36FDC2B5DC',
            'rule_uuid'=>'BFD56508-9FCB-1FFF-749B-FCA2E78B4CD6',
            'src_db_uuid'=>'38F1AD45-5F72-2E51-DC01-0593A14A8D17',
            'tgt_db_uuid'=>'32C50055-A267-1E9E-65EE-FC6AAB75D390',
            'rule_type'=>1,
            'rule_name'=>'123123',
            'node_uuid'=>'A6ABF8BC-38AF-41FE-ACF7-DD9F28B0FA3F',
            'tgt_type'=>'oracle',
            'db_user_map'=>'',
            'row_map_mode'=> '',
            'map_type'=>'db',
            'table_map'=>'',
            'dbmap_topic'=> '',
            'sync_mode'=>'1',
            'start_scn'=> '',
            'storage_settings'=> '',
            'table_space_map'=>array(
                'tgt_table_space'=>'',
                'table_mapping_way'=>'ptop',
                'table_path_map'=>array(),
                'table_space_name'=>array(),),
            'other_settings'=>array(
                'src_type'=>'oracle',
                'tgt_type'=>'oracle',
                'src_path'=>'/var/i2data/cache/',
                'file_names'=>array(),
                'size'=>1024,
                'tgt_path'=>'/var/i2data/cache/',
                'compress_level'=>0,
                'policy'=>array(
                    'policy_type'=>'immediate',
                    'one_time'=>'',
                    'time_policy'=>'',),),
            'error_handling'=> '',
            'bw_settings'=> '',
            'strate'=>array(
                '0'=>array(
                    'type_id'=>1,
                    'type_arg'=>'',
                    'algo_pid'=>4,
                    'algo_id'=>1301,
                    'sens_column'=>array(
                        '0'=>array(
                            'user'=>'123',
                            'table'=>'123',
                            'column'=>'123',),),
                    'algo_arg'=>array(
                        '0'=>array(
                            'name'=>'偏移量',
                            'key'=>'off',
                            'value'=>'1',
                            'setted'=>1,
                            'type'=>'int',),
                        '1'=>array(
                            'name'=>'长度',
                            'key'=>'len',
                            'value'=>'0',
                            'setted'=>2,
                            'type'=>'int',),
                        '2'=>array(
                            'name'=>'屏蔽字符',
                            'key'=>'val',
                            'value'=>'*',
                            'setted'=>3,
                            'type'=>'string',),),
                    'sens_map_id'=>'1',
                    'algo_name'=>'屏蔽姓名',
                    'sens_type_name'=>'姓名',),
                '1'=>array(
                    'type_id'=>2,
                    'type_arg'=>'',
                    'algo_pid'=>4,
                    'algo_id'=>1302,
                    'sens_column'=>array(
                        '0'=>array(
                            'user'=>'123',
                            'table'=>'123',
                            'column'=>'123',),),
                    'algo_arg'=>array(
                        '0'=>array(
                            'name'=>'偏移量',
                            'key'=>'off',
                            'value'=>'1',
                            'setted'=>4,
                            'type'=>'int',),
                        '1'=>array(
                            'name'=>'长度',
                            'key'=>'len',
                            'value'=>'0',
                            'setted'=>5,
                            'type'=>'int',),
                        '2'=>array(
                            'name'=>'屏蔽字符',
                            'key'=>'val',
                            'value'=>'*',
                            'setted'=>6,
                            'type'=>'string',),),
                    'sens_map_id'=>'2',
                    'algo_name'=>'屏蔽身份证出生月日',
                    'sens_type_name'=>'身份证号',),),
            'full_sync_settings'=>array(
                'his_thread'=>1,),
            'full_sync_obj_filter'=>array(
                '0'=>'INDEX',
                '1'=>'VIEW',
                '2'=>'FUNCTION',
                '3'=>'PROCEDURE',
                '4'=>'PACKAGE',
                '5'=>'PACKAGE BODY',
                '6'=>'SYNONYM',
                '7'=>'TRIGGER',
                '8'=>'SEQUENCE',
                '9'=>'JAVA CLASS',
                '10'=>'TYPE',
                '11'=>'TYPE BODY',
                '12'=>'MATERIALIZED VIEW',
                '13'=>'OLD JOB',
                '14'=>'JOB',
                '15'=>'PRIVS',
                '16'=>'CONSTRAINT',
                '17'=>'JAVA RESOURCE',
                '18'=>'JAVA SOURCE',),
            'inc_sync_ddl_filter'=> '',
            'filter_table_settings'=> '',
            'etl_settings'=> '',
            'create_time'=>1601345043,
            'start_rule_now'=>1,
            'db_map_uuid'=>'71D59BCE-17F3-ED0D-BC76-132833F72498',
            'dml_track'=>'',
            'kafka_time_out'=>'12000',
            'part_load_balance'=>'by_key',
            'kafka_message_encoding'=>'UTF-8',
            'kafka'=>'',
            'biz_grp_list'=>array(),
            'biz_grp_name'=>array(),
            'modify'=>1,
            '_'=>'4d058aa7a4ce1',
        );
        $res = $mask -> modifyMaskRules($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}