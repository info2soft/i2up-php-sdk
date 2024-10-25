<?php
namespace i2up\Test\v20240819\bigdataRecoveryRule;

use i2up\bigdataRecoveryRule\v20240819\BigdataRecoveryRule;
use i2up\common\Auth;
                
class BigdataRecoveryRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $bigdataRecoveryRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> bigdataRecoveryRule = new BigdataRecoveryRule(new Auth());
    }

    public function testListBigdataRecoveryRule()
    {
        $bigdataRecoveryRule = $this -> bigdataRecoveryRule;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'filter_by_biz_grp'=>1,
            'status'=>'',
            'where_args'=>array(
            'rule_uuid'=>'',),
            'like_args'=>array(
            'rule_name'=>'',),
        );
        
        
        $res = $bigdataRecoveryRule -> listBigdataRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testCreateBigdataRecoveryRule()
    {
        $bigdataRecoveryRule = $this -> bigdataRecoveryRule;
        $arr = array(
            'rule_name'=>'',
            'data_type'=>1,
            'biz_grp_list'=>array(),
            'auto_start'=>1,
            'start_time'=>1,
            'priority'=>90000,
            'bk_set_uuid'=>'',
            'rc_mode'=>1,
            'platform_uuid'=>'',
            'rc_path_policy'=>1,
            'backup_chain_policy'=>1,
            'bk_path'=>array(),
            'wk_path'=>array(),
            'mirr_file_check'=>1,
            'mirr_sync_flag'=>1,
            'oph_policy'=>1,
            'sel_db'=>array(),
            'sel_tbl'=>array(),
            'sel_part'=>array(),
            'hive_bk_type'=>'',
            'band_width'=>'',
        );
        
        
        $res = $bigdataRecoveryRule -> createBigdataRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testModifyBigdataRecoveryRule()
    {
        $bigdataRecoveryRule = $this -> bigdataRecoveryRule;
        $arr = array(
            'rule_name'=>'',
            'data_type'=>1,
            'biz_grp_list'=>array(),
            'auto_start'=>1,
            'start_time'=>1,
            'priority'=>90000,
            'bk_set_uuid'=>'',
            'rc_mode'=>1,
            'platform_uuid'=>'',
            'rc_path_policy'=>1,
            'backup_chain_policy'=>1,
            'bk_path'=>array(),
            'wk_path'=>array(),
            'mirr_file_check'=>1,
            'mirr_sync_flag'=>1,
            'oph_policy'=>1,
            'random_str'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bigdataRecoveryRule -> modifyBigdataRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testDescribeBigdataRecoveryRule()
    {
        $bigdataRecoveryRule = $this -> bigdataRecoveryRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $bigdataRecoveryRule -> describeBigdataRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testListBigdataRecoveryRuleStatus()
    {
        $bigdataRecoveryRule = $this -> bigdataRecoveryRule;
        $arr = array(
            'rule_uuids'=>'',
        );
        
        
        $res = $bigdataRecoveryRule -> listBigdataRecoveryRuleStatus($arr);
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