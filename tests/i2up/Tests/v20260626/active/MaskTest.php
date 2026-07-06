<?php
namespace i2up\Test\v20260626\active;

use i2up\active\v20260626\Mask;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class MaskTest extends TestCase
 {
    private $mask;
    
    public function setUp():void
    {
        parent::setup();
        $this -> mask = new Mask(new Auth());
    }

    public function testListTypes()
    {
        $mask = $this -> mask;
        $arr = array(
            'page'=>0,
            'limit'=>10,
        );
        
        
        $res = $mask -> listTypes($arr);
        $this->do_assert($res);
    }

    public function testListSummaryView()
    {
        $mask = $this -> mask;
        $arr = array(
            'src'=>'',
            'dst'=>'',
            'status'=>'',
            'type'=>'',
            'ip'=>'',
        );
        
        
        $res = $mask -> listSummaryView($arr);
        $this->do_assert($res);
    }

    public function testModifySensType()
    {
        $mask = $this -> mask;
        $arr = array(
            'algo_name'=>'屏蔽姓名',
            'algo_desc'=>'屏蔽姓名中的名字',
            'algo_params'=>'[{"name":"偏移量","key":"off","value":"1","setted":1,"type":"int"},{"name":"长度","key":"len","value":"0","setted":1,"type":"int"},{"name":"屏蔽字符","key":"val","value":"*","setted":0,"type":"string"}]',
            'username'=>'test',
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
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $mask -> modifySensType($arr);
        $this->do_assert($res);
    }

    public function testDescriptSensType()
    {
        $mask = $this -> mask;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $mask -> descriptSensType($arr);
        $this->do_assert($res);
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
        $this->do_assert($res);
    }

    public function testListAlgos()
    {
        $mask = $this -> mask;
        $arr = array(
            'page'=>0,
            'limit'=>10,
        );
        
        
        $res = $mask -> listAlgos($arr);
        $this->do_assert($res);
    }

    public function testDescriptAlgo()
    {
        $mask = $this -> mask;
        $arr = array();
        
        $arr['id'] = "123456";
        $res = $mask -> descriptAlgo($arr);
        $this->do_assert($res);
    }

    public function testListMaskRules()
    {
        $mask = $this -> mask;
        $arr = array(
            'limit'=>10,
            'page'=>0,
        );
        
        
        $res = $mask -> listMaskRules($arr);
        $this->do_assert($res);
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
            'time_policy'=>'',),
            'etl_settings'=>array(
            'etl_table'=>array(
            '0'=>array(
            'table'=>'',
            'user'=>'',
            'addInfo'=>'',
            'oprType'=>'',
            'process'=>'',),),),
            'can_approve'=>0,),
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
            'modify'=>false,
            'bw_settings'=>array(
            'bw_limit'=>'',),
        );
        
        
        $res = $mask -> createMaskRules($arr);
        $this->do_assert($res);
    }

    public function testStartMaskRule()
    {
        $mask = $this -> mask;
        $arr = array(
            'operate'=>'',
            'uuids'=>'',
        );
        
        
        $res = $mask -> startMaskRule($arr);
        $this->do_assert($res);
    }

    public function testStopMaskRule()
    {
        $mask = $this -> mask;
        $arr = array(
            'operate'=>'',
            'uuids'=>'',
        );
        
        
        $res = $mask -> stopMaskRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteMaskRule()
    {
        $mask = $this -> mask;
        $arr = array(
            'uuids'=>'',
        );
        
        
        $res = $mask -> deleteMaskRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeMaskRule()
    {
        $mask = $this -> mask;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $mask -> describeMaskRule($arr);
        $this->do_assert($res);
    }

    public function testListMaskRuleStatus()
    {
        $mask = $this -> mask;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $mask -> listMaskRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testDescriptMap()
    {
        $mask = $this -> mask;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $mask -> descriptMap($arr);
        $this->do_assert($res);
    }

    public function testListMap()
    {
        $mask = $this -> mask;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $mask -> listMap($arr);
        $this->do_assert($res);
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
            'src_type'=>'',
            'src_path'=>'',
        );
        
        
        $res = $mask -> createMap($arr);
        $this->do_assert($res);
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
            'src_type'=>'',
            'src_path'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $mask -> modifyMap($arr);
        $this->do_assert($res);
    }

    public function testDeleteMap()
    {
        $mask = $this -> mask;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $mask -> deleteMap($arr);
        $this->do_assert($res);
    }

    public function testCreateDbMap()
    {
        $mask = $this -> mask;
        $arr = array(
            'map_uuid'=>'',
            'map_name'=>'test',
            'db_uuid'=>'40E3E340-8C1B-40DD-B86B-273D58C30037',
            'type_algo_map'=>array(
            '0'=>array(
            'type_name'=>'test',
            'id'=>1002,
            'algo_name'=>'test的基础算法',
            'default_algo'=>10004,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'test的基础算法',),
            '1'=>array(
            'type_name'=>'姓名',
            'id'=>1003,
            'algo_name'=>'屏蔽姓名',
            'default_algo'=>10005,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'屏蔽姓名中的名字',),
            '2'=>array(
            'type_name'=>'身份证号',
            'id'=>1004,
            'algo_name'=>'屏蔽身份证出生月日',
            'default_algo'=>10006,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'屏蔽身份证号码中的出生月日（区间[11,14]）',),
            '3'=>array(
            'type_name'=>'手机号码',
            'id'=>1005,
            'algo_name'=>'屏蔽手机号码',
            'default_algo'=>10007,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'屏蔽手机号码中的地区编码（区间[4,7]）',),
            '4'=>array(
            'type_name'=>'地址',
            'id'=>1006,
            'algo_name'=>'屏蔽地址关键信息',
            'default_algo'=>10008,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'屏蔽关键信息，只保留省市信息和“区县镇路街道弄幢号楼栋单元室”等关键字',),
            '5'=>array(
            'type_name'=>'银行卡号',
            'id'=>1007,
            'algo_name'=>'屏蔽银行卡号',
            'default_algo'=>10009,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'屏蔽银行卡号中前四位和后四位外的其它位（区间[4,-4]）',),
            '6'=>array(
            'type_name'=>'电子邮箱',
            'id'=>1008,
            'algo_name'=>'屏蔽邮箱用户名',
            'default_algo'=>10010,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'屏蔽邮箱用户名，保留邮箱域名',),
            '7'=>array(
            'type_name'=>'组织机构名称',
            'id'=>1009,
            'algo_name'=>'屏蔽组织机构名称关键信息',
            'default_algo'=>10011,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'屏蔽关键信息，只保留“公司所局厅部院”等关键字',),
            '8'=>array(
            'type_name'=>'组织机构代码',
            'id'=>1010,
            'algo_name'=>'屏蔽组织机构代码',
            'default_algo'=>10012,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'屏蔽组织机构代码（区间[3,7]）',),
            '9'=>array(
            'type_name'=>'营业执照号码',
            'id'=>1011,
            'algo_name'=>'屏蔽营业执照号码',
            'default_algo'=>10013,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'屏蔽营业执照号码中的顺序码（区间[7,14]）',),
            '10'=>array(
            'type_name'=>'统一社会信用代码',
            'id'=>1012,
            'algo_name'=>'屏蔽统一社会信用代码',
            'default_algo'=>10014,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'屏蔽统一社会信用代码中的主体标识码（区间[9,17]）',),
            '11'=>array(
            'type_name'=>'中国护照号码',
            'id'=>1013,
            'algo_name'=>'屏蔽中国护照号码',
            'default_algo'=>10015,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'屏蔽中国护照号码中间三位字符（区间[3,5]）',),
            '12'=>array(
            'type_name'=>'固定电话号码',
            'id'=>1014,
            'algo_name'=>'屏蔽固定电话号码',
            'default_algo'=>10016,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'屏蔽固定电话号码中其中三位（区间[-5,-2]）',),
            '13'=>array(
            'type_name'=>'港澳来往内地通行证',
            'id'=>1015,
            'algo_name'=>'屏蔽港澳居民来往内地通行证',
            'default_algo'=>10017,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'屏蔽港澳居民来往内地通行证号码（区间[4,7]）',),
            '14'=>array(
            'type_name'=>'往来港澳通行证',
            'id'=>1016,
            'algo_name'=>'屏蔽往来港澳通行证',
            'default_algo'=>10018,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'屏蔽往来港澳通行证号码（区间[4,7]）',),
            '15'=>array(
            'type_name'=>'IPv4地址',
            'id'=>1017,
            'algo_name'=>'屏蔽IPv4地址',
            'default_algo'=>10019,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'屏蔽IPv4地址的点分十进制后两段',),
            '16'=>array(
            'type_name'=>'日期',
            'id'=>1018,
            'algo_name'=>'保留日期类型的年份',
            'default_algo'=>10020,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'保留日期类型的年份不变',),
            '17'=>array(
            'type_name'=>'日期字符串',
            'id'=>1019,
            'algo_name'=>'保留日期字符串的年份',
            'default_algo'=>10021,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'保留日期字符串的年份不变',),
            '18'=>array(
            'type_name'=>'通用字符串',
            'id'=>1020,
            'algo_name'=>'区间删除',
            'default_algo'=>10022,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'删除指定区间的字符，其余部分保留',),
            '19'=>array(
            'type_name'=>'数值',
            'id'=>1021,
            'algo_name'=>'',
            'default_algo'=>10023,
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
            'value'=>'2',
            'setted'=>1,
            'type'=>'int',),
            '2'=>array(
            'name'=>'指定字符串',
            'key'=>'val',
            'value'=>'3',
            'setted'=>1,
            'type'=>'string',),),
            'algo_desc'=>'',),),
            'sens_check_id'=>'F1CAC820-4C54-40CB-B30D-94194F7B9E35',
            'src_type'=>'kingbase',
            'src_path'=>'/var/iadata/cache/',
            'delimiter'=>'',
        );
        
        
        $res = $mask -> createDbMap($arr);
        $this->do_assert($res);
    }

    public function testListDbMap()
    {
        $mask = $this -> mask;
        $arr = array(
            'page'=>0,
            'limit'=>10,
        );
        
        
        $res = $mask -> listDbMap($arr);
        $this->do_assert($res);
    }

    public function testDeleteDbMap()
    {
        $mask = $this -> mask;
        $arr = array(
            'uuid'=>'',
        );
        
        
        $res = $mask -> deleteDbMap($arr);
        $this->do_assert($res);
    }

    public function testModifyDbMap()
    {
        $mask = $this -> mask;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $mask -> modifyDbMap($arr);
        $this->do_assert($res);
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
            'src_type'=>'',
            'src_path'=>'',
            'delimiter'=>'',
            'check_lines'=>1,
        );
        
        
        $res = $mask -> createSensCheck($arr);
        $this->do_assert($res);
    }

    public function testModifySensCheck()
    {
        $mask = $this -> mask;
        $arr = array(
            'username'=>'admin',
            'user_uuid'=>'1BCFCAA3-E3C8-3E28-BDC5-BE36FDC2B5DC',
            'rule_uuid'=>'F895D958-F435-47AC-664D-805BA7DFEE89',
            'rule_name'=>'asd',
            'map_type'=>'db',
            'src_db_uuid'=>'38F1AD45-5F72-2E51-DC01-0593A14A8D17',
            'user'=>'',
            'tabs'=>'',
            'row'=>100,
            'min'=>90,
            'sens_types'=>'1,2,3,4,5,6,7,8,9,10,12,13,14,15,20',
            'create_time'=>'1601344305',
            'mask_node_uuid'=>'A6ABF8BC-38AF-41FE-ACF7-DD9F28B0FA3F',
            'mix'=>0,
            'status'=>0,
            'start'=>'2020-09-29 09:51:45',
            'end'=>'',
            'white'=>1,
            'info'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $mask -> modifySensCheck($arr);
        $this->do_assert($res);
    }

    public function testDeleteSensCheck()
    {
        $mask = $this -> mask;
        $arr = array(
            'uuids'=>'',
        );
        
        
        $res = $mask -> deleteSensCheck($arr);
        $this->do_assert($res);
    }

    public function testListSensCheck()
    {
        $mask = $this -> mask;
        $arr = array(
            'page'=>0,
            'limit'=>10,
        );
        
        
        $res = $mask -> listSensCheck($arr);
        $this->do_assert($res);
    }

    public function testDescriptSensCheck()
    {
        $mask = $this -> mask;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $mask -> descriptSensCheck($arr);
        $this->do_assert($res);
    }

    public function testListSensCheckStatus()
    {
        $mask = $this -> mask;
        $arr = array(
            'uuids'=>'',
        );
        
        
        $res = $mask -> listSensCheckStatus($arr);
        $this->do_assert($res);
    }

    public function testListSensCheckResult()
    {
        $mask = $this -> mask;
        $arr = array(
            'uuid'=>'',
            'type'=>'',
            'user'=>'',
            'table'=>'',
            'limit'=>1,
            'page'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $mask -> listSensCheckResult($arr);
        $this->do_assert($res);
    }

    public function testListSensCheckIgnoreCol()
    {
        $mask = $this -> mask;
        $arr = array(
            'rule_uuid'=>'',
            'col'=>'',
        );
        
        
        $res = $mask -> listSensCheckIgnoreCol($arr);
        $this->do_assert($res);
    }

    public function testListSummary()
    {
        $mask = $this -> mask;
        $arr = array();
        
        
        $res = $mask -> listSummary($arr);
        $this->do_assert($res);
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
        );
        
        
        $res = $mask -> algoTest($arr);
        $this->do_assert($res);
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
            'row_map_mode'=>'',
            'map_type'=>'db',
            'table_map'=>'',
            'dbmap_topic'=>'',
            'sync_mode'=>'1',
            'start_scn'=>'',
            'storage_settings'=>array(),
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
            'error_handling'=>array(),
            'bw_settings'=>array(),
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
            'inc_sync_ddl_filter'=>'',
            'filter_table_settings'=>'',
            'etl_settings'=>'',
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
            'modify'=>true,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $mask -> modifyMaskRules($arr);
        $this->do_assert($res);
    }

    public function testCreateApprove()
    {
        $mask = $this -> mask;
        $arr = array(
            'uuids'=>'Dcfd455b-79Cc-C9CB-bcc9-AbCE34b7Eaf9',
        );
        
        
        $res = $mask -> createApprove($arr);
        $this->do_assert($res);
    }

    public function testImportMaskRuleInfo()
    {
        $mask = $this -> mask;
        $arr = array(
            'db_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $mask -> importMaskRuleInfo($arr);
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