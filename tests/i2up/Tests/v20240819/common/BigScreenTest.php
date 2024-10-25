<?php
namespace i2up\Test\v20240819\common;

use i2up\common\v20240819\BigScreen;
use i2up\common\Auth;
                
class BigScreenTest extends \PHPUnit_Framework_TestCase
 {
    private $bigScreen;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> bigScreen = new BigScreen(new Auth());
    }

    public function testCreateBigScreen()
    {
        $bigScreen = $this -> bigScreen;
        $arr = array(
            'rule_name'=>'',
            'rule_type'=>0,
            'config'=>array(),
            'comment'=>'',
            'logo_name'=>'I2Infomation2',
        );
        
        
        $res = $bigScreen -> createBigScreen($arr);
        $this->do_assert($res);
    }

    public function testModifyBigScreen()
    {
        $bigScreen = $this -> bigScreen;
        $arr = array(
            'rule_name'=>'',
            'comment'=>'',
            'logo_name'=>'',
            'random_str'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bigScreen -> modifyBigScreen($arr);
        $this->do_assert($res);
    }

    public function testDescribeBigScreen()
    {
        $bigScreen = $this -> bigScreen;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bigScreen -> describeBigScreen($arr);
        $this->do_assert($res);
    }

    public function testListBigScreen()
    {
        $bigScreen = $this -> bigScreen;
        $arr = array(
            'rule_type'=>1,
            'rule_name'=>'',
        );
        
        
        $res = $bigScreen -> listBigScreen($arr);
        $this->do_assert($res);
    }

    public function testDeleteBigScreen()
    {
        $bigScreen = $this -> bigScreen;
        $arr = array(
            'rule_uuids'=>array(),
        );
        
        
        $res = $bigScreen -> deleteBigScreen($arr);
        $this->do_assert($res);
    }

    public function testUploadBigScreenLogo()
    {
        $bigScreen = $this -> bigScreen;
        $arr = array(
            'logo_file'=>'',
            'logo_name'=>'',
        );
        
        
        $res = $bigScreen -> uploadBigScreenLogo($arr);
        $this->do_assert($res);
    }

    public function testDeleteBigScreenLogo()
    {
        $bigScreen = $this -> bigScreen;
        $arr = array(
            'logo_name'=>'',
        );
        
        
        $res = $bigScreen -> deleteBigScreenLogo($arr);
        $this->do_assert($res);
    }

    public function testListBigScreenLogo()
    {
        $bigScreen = $this -> bigScreen;
        $arr = array();
        
        
        $res = $bigScreen -> listBigScreenLogo($arr);
        $this->do_assert($res);
    }

    public function testConfigBigScreen()
    {
        $bigScreen = $this -> bigScreen;
        $arr = array(
            'type'=>1,
            'rule_uuid'=>'',
            'config'=>array(
            '0'=>array(
            'mod_type'=>'data_stat',
            'title'=>array(),
            'location'=>1,
            'graph_num'=>4,
            'scroll_limit'=>20,
            'rule_uuids'=>array(),
            'node_uuids'=>array(),
            'db_uuids'=>array(),
            'warn_limit'=>1,
            'node_group_uuids'=>array(),
            'warn_modules'=>array(),
            'stat_days'=>1,
            'stat_modules'=>array(),
            'vp_uuids'=>array(),
            'display'=>'',
            'dst_node_biz_grp_uuid'=>'',
            'src_node_biz_grp_uuid'=>'',
            'dst_title'=>'',
            'src_title'=>'',),
            '1'=>array(
            'mod_type'=>'data_stat',
            'title'=>array(),
            'location'=>1,
            'graph_num'=>4,
            'scroll_limit'=>20,
            'rule_uuids'=>array(),
            'node_uuids'=>array(),
            'db_uuids'=>array(),
            'warn_limit'=>1,
            'node_group_uuids'=>array(),
            'warn_modules'=>array(),
            'stat_days'=>1,
            'stat_modules'=>array(),
            'vp_uuids'=>array(),
            'display'=>'',
            'dst_node_biz_grp_uuid'=>'',
            'src_node_biz_grp_uuid'=>'',
            'dst_title'=>'',
            'src_title'=>'',),),
        );
        
        
        $res = $bigScreen -> configBigScreen($arr);
        $this->do_assert($res);
    }

    public function testDescribeBigScreenConfig()
    {
        $bigScreen = $this -> bigScreen;
        $arr = array(
            'rule_uuid'=>'',
            'type'=>1,
        );
        
        
        $res = $bigScreen -> describeBigScreenConfig($arr);
        $this->do_assert($res);
    }

    public function testClearBigScreenStatData()
    {
        $bigScreen = $this -> bigScreen;
        $arr = array(
            'rule_uuid'=>'',
        );
        
        
        $res = $bigScreen -> clearBigScreenStatData($arr);
        $this->do_assert($res);
    }

    public function testListBigScreenStatRules()
    {
        $bigScreen = $this -> bigScreen;
        $arr = array(
            'rule_uuid'=>'',
            'mod_type'=>'',
            'type'=>'',
        );
        
        
        $res = $bigScreen -> listBigScreenStatRules($arr);
        $this->do_assert($res);
    }

    public function testDescribeBigScreenStat()
    {
        $bigScreen = $this -> bigScreen;
        $arr = array(
            'rule_uuid'=>'',
            'mod_type'=>'',
        );
        
        
        $res = $bigScreen -> describeBigScreenStat($arr);
        $this->do_assert($res);
    }

    public function testListBigScreenGraph()
    {
        $bigScreen = $this -> bigScreen;
        $arr = array(
            'mod_type'=>'',
            'rule_uuid'=>'',
            'rule_uuids'=>array(),
        );
        
        
        $res = $bigScreen -> listBigScreenGraph($arr);
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