<?php
namespace i2up\Test\v20260209\common;

use i2up\common\v20260209\BigScreenV3;
use i2up\common\Auth;
                
class BigScreenV3Test extends \PHPUnit_Framework_TestCase
 {
    private $bigScreenV3;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> bigScreenV3 = new BigScreenV3(new Auth());
    }

    public function testCreateBigScreen()
    {
        $bigScreenV3 = $this -> bigScreenV3;
        $arr = array(
            'rule_name'=>'',
            'rule_type'=>0,
            'config'=>array(),
            'comment'=>'',
            'logo_name'=>'I2Infomation2',
        );
        
        
        $res = $bigScreenV3 -> createBigScreen($arr);
        $this->do_assert($res);
    }

    public function testModifyBigScreen()
    {
        $bigScreenV3 = $this -> bigScreenV3;
        $arr = array(
            'logo_name'=>'',
            'rule_name'=>'',
            'comment'=>'',
            'random_str'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bigScreenV3 -> modifyBigScreen($arr);
        $this->do_assert($res);
    }

    public function testListBigScreen()
    {
        $bigScreenV3 = $this -> bigScreenV3;
        $arr = array(
            'rule_type'=>1,
            'rule_name'=>'',
        );
        
        
        $res = $bigScreenV3 -> listBigScreen($arr);
        $this->do_assert($res);
    }

    public function testDeleteBigScreen()
    {
        $bigScreenV3 = $this -> bigScreenV3;
        $arr = array(
            'rule_uuids'=>array(),
        );
        
        
        $res = $bigScreenV3 -> deleteBigScreen($arr);
        $this->do_assert($res);
    }

    public function testDescribeBigScreen()
    {
        $bigScreenV3 = $this -> bigScreenV3;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bigScreenV3 -> describeBigScreen($arr);
        $this->do_assert($res);
    }

    public function testUploadBigScreenLogo()
    {
        $bigScreenV3 = $this -> bigScreenV3;
        $arr = array(
            'logo_file'=>'',
            'logo_name'=>'',
        );
        
        
        $res = $bigScreenV3 -> uploadBigScreenLogo($arr);
        $this->do_assert($res);
    }

    public function testListBigScreenLogo()
    {
        $bigScreenV3 = $this -> bigScreenV3;
        $arr = array();
        
        
        $res = $bigScreenV3 -> listBigScreenLogo($arr);
        $this->do_assert($res);
    }

    public function testDeleteBigScreenLogo()
    {
        $bigScreenV3 = $this -> bigScreenV3;
        $arr = array(
            'logo_name'=>'',
        );
        
        
        $res = $bigScreenV3 -> deleteBigScreenLogo($arr);
        $this->do_assert($res);
    }

    public function testConfigBigScreen()
    {
        $bigScreenV3 = $this -> bigScreenV3;
        $arr = array(
            'type'=>1,
            'rule_uuid'=>'',
            'config'=>array(
            '0'=>array(
            'warn_limit'=>1,
            'mod_type'=>'data_stat',
            'title'=>array(),
            'graph_num'=>4,
            'location'=>1,
            'scroll_limit'=>20,
            'rule_uuids'=>array(),
            'db_uuids'=>array(),
            'node_uuids'=>array(),
            'node_group_uuids'=>array(),
            'warn_modules'=>array(),
            'stat_days'=>1,
            'vp_uuids'=>array(),
            'display'=>'',
            'dst_node_biz_grp_uuid'=>'',
            'src_title'=>'',
            'storage_unit_types'=>array(),
            'src_node_biz_grp_uuid'=>'',
            'dst_title'=>'',
            'stat_modules'=>array(),
            'platform_uuids'=>array(),
            'lic_uuids'=>array(),),
            '1'=>array(
            'warn_limit'=>1,
            'mod_type'=>'data_stat',
            'title'=>array(),
            'graph_num'=>4,
            'location'=>1,
            'scroll_limit'=>20,
            'rule_uuids'=>array(),
            'db_uuids'=>array(),
            'node_uuids'=>array(),
            'node_group_uuids'=>array(),
            'warn_modules'=>array(),
            'stat_days'=>1,
            'vp_uuids'=>array(),
            'display'=>'',
            'dst_node_biz_grp_uuid'=>'',
            'src_title'=>'',
            'storage_unit_types'=>array(),
            'src_node_biz_grp_uuid'=>'',
            'dst_title'=>'',
            'stat_modules'=>array(),
            'platform_uuids'=>array(),
            'lic_uuids'=>array(),),),
        );
        
        
        $res = $bigScreenV3 -> configBigScreen($arr);
        $this->do_assert($res);
    }

    public function testDescribeBigScreenConfig()
    {
        $bigScreenV3 = $this -> bigScreenV3;
        $arr = array(
            'rule_uuid'=>'',
            'type'=>1,
        );
        
        
        $res = $bigScreenV3 -> describeBigScreenConfig($arr);
        $this->do_assert($res);
    }

    public function testClearBigScreenStatData()
    {
        $bigScreenV3 = $this -> bigScreenV3;
        $arr = array(
            'rule_uuid'=>'',
            'mod_type'=>'',
        );
        
        
        $res = $bigScreenV3 -> clearBigScreenStatData($arr);
        $this->do_assert($res);
    }

    public function testListBigScreenStatRules()
    {
        $bigScreenV3 = $this -> bigScreenV3;
        $arr = array(
            'rule_uuid'=>'',
            'mod_type'=>'',
            'type'=>'',
        );
        
        
        $res = $bigScreenV3 -> listBigScreenStatRules($arr);
        $this->do_assert($res);
    }

    public function testDescribeBigScreenStat()
    {
        $bigScreenV3 = $this -> bigScreenV3;
        $arr = array(
            'rule_uuid'=>'',
            'mod_type'=>'',
        );
        
        
        $res = $bigScreenV3 -> describeBigScreenStat($arr);
        $this->do_assert($res);
    }

    public function testListBigScreenGraph()
    {
        $bigScreenV3 = $this -> bigScreenV3;
        $arr = array(
            'mod_type'=>'',
            'rule_uuid'=>'',
        );
        
        
        $res = $bigScreenV3 -> listBigScreenGraph($arr);
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