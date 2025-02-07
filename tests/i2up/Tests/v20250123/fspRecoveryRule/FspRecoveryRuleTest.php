<?php
namespace i2up\Test\v20250123\fspRecoveryRule;

use i2up\fspRecoveryRule\v20250123\FspRecoveryRule;
use i2up\common\Auth;
                
class FspRecoveryRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $fspRecoveryRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> fspRecoveryRule = new FspRecoveryRule(new Auth());
    }

    public function testCreateFspRecoveryRule()
    {
        $fspRecoveryRule = $this -> fspRecoveryRule;
        $arr = array(
            'rule_name'=>'',
            'rule_type'=>1,
            'auto_start'=>1,
            'priority'=>1,
            'bk_set_uuid'=>'',
            'backup_chain_policy'=>1,
            'wk_uuid'=>'',
            'wk_path'=>array(),
            'bk_path'=>array(),
            'bios_convert'=>1,
            'bios_type'=>1,
            'driver_url'=>'',
            'compress_switch'=>1,
            'compress'=>1,
            'encrypt_switch'=>1,
            'encrypt'=>1,
            'start_time'=>1,
            'net_mapping'=>array(
            '0'=>array(
            'bk_nic'=>array(
            'name'=>'',
            'type'=>'',
            'ip'=>'',
            'dns'=>'',
            'gw'=>'',),
            'wk_nic'=>array(
            'name'=>'Ethernet0',),),),
            'net_mapping_type'=>1,
            'dst_path'=>'',
            'excl_path'=>array(),
            'rc_path_policy'=>1,
            'wk_path_list'=>array(),
            'rc_type'=>1,
        );
        
        
        $res = $fspRecoveryRule -> createFspRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testListFspRecoveryRules()
    {
        $fspRecoveryRule = $this -> fspRecoveryRule;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'filter_by_biz_grp'=>1,
            'status'=>'',
            'where_args'=>array(
            'rule_uuid'=>'',),
            'like_args'=>array(
            'bk_set_id'=>'',
            'src_node_name'=>'',
            'rule_name'=>'',
            'wk_node_name'=>'',),
        );
        
        
        $res = $fspRecoveryRule -> listFspRecoveryRules($arr);
        $this->do_assert($res);
    }

    public function testListFspRecoveryRule()
    {
        $fspRecoveryRule = $this -> fspRecoveryRule;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $fspRecoveryRule -> listFspRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testDeleteFspRecoveryRule()
    {
        $fspRecoveryRule = $this -> fspRecoveryRule;
        $arr = array(
            'rule_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $fspRecoveryRule -> deleteFspRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testModifyFspRecoveryRule()
    {
        $fspRecoveryRule = $this -> fspRecoveryRule;
        $arr = array(
            'rule_name'=>'',
            'rule_uuid'=>'',
            'rule_type'=>'',
            'random_str'=>'',
            'create_time'=>'',
            'auto_start'=>1,
            'priority'=>1,
            'bk_set_uuid'=>'',
            'backup_chain_policy'=>1,
            'wk_uuid'=>'',
            'wk_path'=>'',
            'bk_path'=>'',
            'bios_convert'=>1,
            'bios_type'=>1,
            'driver_url'=>'',
            'compress_switch'=>1,
            'compress'=>1,
            'encrypt_switch'=>1,
            'encrypt'=>1,
            'start_time'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $fspRecoveryRule -> modifyFspRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testStartFspRecoveryRule()
    {
        $fspRecoveryRule = $this -> fspRecoveryRule;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>array(),
        );
        
        
        $res = $fspRecoveryRule -> startFspRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testStopFspRecoveryRule()
    {
        $fspRecoveryRule = $this -> fspRecoveryRule;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>array(),
        );
        
        
        $res = $fspRecoveryRule -> stopFspRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testRebootFspRecoveryRule()
    {
        $fspRecoveryRule = $this -> fspRecoveryRule;
        $arr = array(
            'operate'=>'',
            'rule_uuids'=>array(),
        );
        
        
        $res = $fspRecoveryRule -> rebootFspRecoveryRule($arr);
        $this->do_assert($res);
    }

    public function testListFspRecoveryRuleStatus()
    {
        $fspRecoveryRule = $this -> fspRecoveryRule;
        $arr = array(
            'rule_uuids'=>array(),
        );
        
        
        $res = $fspRecoveryRule -> listFspRecoveryRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testGetFspRecoveryRuleBiosType()
    {
        $fspRecoveryRule = $this -> fspRecoveryRule;
        $arr = array(
            'device_list'=>array(),
            'node_uuid'=>'',
        );
        
        
        $res = $fspRecoveryRule -> getFspRecoveryRuleBiosType($arr);
        $this->do_assert($res);
    }

    public function testListFspRecoveryRuleDriverListUrl()
    {
        $fspRecoveryRule = $this -> fspRecoveryRule;
        $arr = array();
        
        
        $res = $fspRecoveryRule -> listFspRecoveryRuleDriverListUrl($arr);
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