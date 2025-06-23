<?php
namespace i2up\Test\v20250630\stream;

use i2up\stream\v20250630\MaskRule;
use i2up\common\Auth;
                
class MaskRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $maskRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> maskRule = new MaskRule(new Auth());
    }

    public function testListSummary()
    {
        $maskRule = $this -> maskRule;
        $arr = array();
        
        
        $res = $maskRule -> listSummary($arr);
        $this->do_assert($res);
    }

    public function testListSummaryView()
    {
        $maskRule = $this -> maskRule;
        $arr = array(
            'src'=>'',
            'dst'=>'',
            'status'=>'',
            'type'=>'',
            'ip'=>'',
        );
        
        
        $res = $maskRule -> listSummaryView($arr);
        $this->do_assert($res);
    }

    public function testListMaskRules()
    {
        $maskRule = $this -> maskRule;
        $arr = array(
            'limit'=>10,
            'page'=>0,
        );
        
        
        $res = $maskRule -> listMaskRules($arr);
        $this->do_assert($res);
    }

    public function testCreateMaskRules()
    {
        $maskRule = $this -> maskRule;
        $arr = array(
            'rule_name'=>'1231',
            'node_uuid'=>'A6ABF8BC-38AF-41FE-ACF7-DD9F28B0FA3F',
            'tgt_db_uuid'=>'32C50055-A267-1E9E-65EE-FC6AAB75D390',
            'src_db_uuid'=>'38F1AD45-5F72-2E51-DC01-0593A14A8D17',
            'other_settings'=>array(
            'can_approve'=>0,
            'etl_settings'=>array(
            'etl_table'=>array(
            '0'=>array(
            'table'=>'',
            'user'=>'',
            'addInfo'=>'',
            'oprType'=>'',
            'process'=>'',),),),
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
            'modify'=>false,
            'bw_settings'=>array(
            'bw_limit'=>'',),
            'mask_algo_id'=>1,
        );
        
        
        $res = $maskRule -> createMaskRules($arr);
        $this->do_assert($res);
    }

    public function testStartMaskRule()
    {
        $maskRule = $this -> maskRule;
        $arr = array(
            'operate'=>'',
            'uuids'=>'',
        );
        
        
        $res = $maskRule -> startMaskRule($arr);
        $this->do_assert($res);
    }

    public function testStopMaskRule()
    {
        $maskRule = $this -> maskRule;
        $arr = array(
            'operate'=>'',
            'uuids'=>'',
        );
        
        
        $res = $maskRule -> stopMaskRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteMaskRule()
    {
        $maskRule = $this -> maskRule;
        $arr = array(
            'uuids'=>'',
        );
        
        
        $res = $maskRule -> deleteMaskRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeMaskRule()
    {
        $maskRule = $this -> maskRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $maskRule -> describeMaskRule($arr);
        $this->do_assert($res);
    }

    public function testListMaskRuleStatus()
    {
        $maskRule = $this -> maskRule;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $maskRule -> listMaskRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testImportMaskRuleInfo()
    {
        $maskRule = $this -> maskRule;
        $arr = array(
            'db_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $maskRule -> importMaskRuleInfo($arr);
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