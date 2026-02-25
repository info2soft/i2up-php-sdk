<?php
namespace i2up\Test\v20260209\active;

use i2up\active\v20260209\RoutingRule;
use i2up\common\Auth;
                
class RoutingRuleTest extends \PHPUnit_Framework_TestCase
 {
    private $routingRule;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> routingRule = new RoutingRule(new Auth());
    }

    public function testCreateReportRule()
    {
        $routingRule = $this -> routingRule;
        $arr = array(
            'rule_name'=>'',
            'check_list'=>array(
            'check_type'=>1,
            'tb_cmp_list'=>array(),
            'obj_cmp_list'=>array(),
            'rule_list'=>array(),),
            'save_limit'=>array(
            'save_num'=>'',
            'save_type'=>'',),
            'policy_config'=>array(
            'policy_type'=>1,
            'policies'=>'',
            'one_time'=>'',
            'is_interval'=>1,),
            'check_window'=>array(
            'check_num'=>1,
            'check_type'=>1,),
            'ignore_num'=>1,
        );
        
        
        $res = $routingRule -> createReportRule($arr);
        $this->do_assert($res);
    }

    public function testModifyReportRule()
    {
        $routingRule = $this -> routingRule;
        $arr = array(
            'rule_name'=>'',
            'check_list'=>array(
            'check_type'=>1,
            'tb_cmp_list'=>array(),
            'obj_cmp_list'=>array(),
            'rule_list'=>array(),),
            'save_limit'=>array(
            'save_num'=>'',
            'save_type'=>'',),
            'policy_config'=>array(
            'policy_type'=>1,
            'policies'=>'',),
            'check_window'=>array(
            'check_num'=>1,
            'check_type'=>1,),
        );
        
        
        $res = $routingRule -> modifyReportRule($arr);
        $this->do_assert($res);
    }

    public function testListReportRule()
    {
        $routingRule = $this -> routingRule;
        $arr = array(
            'limit'=>'',
            'page'=>'',
        );
        
        
        $res = $routingRule -> listReportRule($arr);
        $this->do_assert($res);
    }

    public function testListReportRuleStatus()
    {
        $routingRule = $this -> routingRule;
        $arr = array(
            'rule_uuids'=>array(),
        );
        
        
        $res = $routingRule -> listReportRuleStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteReportRule()
    {
        $routingRule = $this -> routingRule;
        $arr = array(
            'rule_uuids'=>array(),
        );
        
        
        $res = $routingRule -> deleteReportRule($arr);
        $this->do_assert($res);
    }

    public function testOperateReportRule()
    {
        $routingRule = $this -> routingRule;
        $arr = array(
            'rule_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $routingRule -> operateReportRule($arr);
        $this->do_assert($res);
    }

    public function testListReportRuleHistory()
    {
        $routingRule = $this -> routingRule;
        $arr = array(
            'limit'=>'',
            'page'=>'',
            'rule_uuid'=>'77f3F5b5-0Fdc-97Bb-5693-DdA88dCB24CC',
        );
        
        
        $res = $routingRule -> listReportRuleHistory($arr);
        $this->do_assert($res);
    }

    public function testModifyStreamRoutingConf()
    {
        $routingRule = $this -> routingRule;
        $arr = array(
            'stream_routing_settings'=>array(
            'content_temp_uuid'=>array(),
            'kafka_switch'=>'',),
        );
        
        
        $res = $routingRule -> modifyStreamRoutingConf($arr);
        $this->do_assert($res);
    }

    public function testListStreamRoutingConf()
    {
        $routingRule = $this -> routingRule;
        $arr = array();
        
        
        $res = $routingRule -> listStreamRoutingConf($arr);
        $this->do_assert($res);
    }

    public function testDeleteReportRuleHistory()
    {
        $routingRule = $this -> routingRule;
        $arr = array(
            'task_names'=>array(),
            'rule_uuid'=>'',
        );
        
        
        $res = $routingRule -> deleteReportRuleHistory($arr);
        $this->do_assert($res);
    }

    public function testListReportRuleResult()
    {
        $routingRule = $this -> routingRule;
        $arr = array(
            'task_name'=>'',
            'rule_uuid'=>'',
        );
        
        
        $res = $routingRule -> listReportRuleResult($arr);
        $this->do_assert($res);
    }

    public function testListBizGroupResource()
    {
        $routingRule = $this -> routingRule;
        $arr = array(
            'type'=>1,
            'subtype'=>0,
        );
        
        
        $res = $routingRule -> listBizGroupResource($arr);
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