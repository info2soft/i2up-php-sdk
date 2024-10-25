<?php
namespace i2up\Test\v20240819\common;

use i2up\common\v20240819\Webhook;
use i2up\common\Auth;
                
class WebhookTest extends \PHPUnit_Framework_TestCase
 {
    private $webhook;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> webhook = new Webhook(new Auth());
    }

    public function testCreateWebhook()
    {
        $webhook = $this -> webhook;
        $arr = array(
            'id'=>'',
            'name'=>'',
            'type'=>'',
            'config'=>array(
            'method'=>'',
            'secret'=>'',
            'headers'=>array(),),
            'url'=>'',
        );
        
        
        $res = $webhook -> createWebhook($arr);
        $this->do_assert($res);
    }

    public function testModifyWebhook()
    {
        $webhook = $this -> webhook;
        $arr = array(
            'name'=>'',
            'random_str'=>'',
            'config'=>array(),
            'url'=>'',
            'id'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $webhook -> modifyWebhook($arr);
        $this->do_assert($res);
    }

    public function testListWebhook()
    {
        $webhook = $this -> webhook;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'where_args'=>array(
            'type'=>'',),
            'like_args'=>array(
            'name'=>'',),
        );
        
        
        $res = $webhook -> listWebhook($arr);
        $this->do_assert($res);
    }

    public function testDescribeWebhook()
    {
        $webhook = $this -> webhook;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $webhook -> describeWebhook($arr);
        $this->do_assert($res);
    }

    public function testDeleteWebhook()
    {
        $webhook = $this -> webhook;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $webhook -> deleteWebhook($arr);
        $this->do_assert($res);
    }

    public function testCreateWebhookContentTemplate()
    {
        $webhook = $this -> webhook;
        $arr = array(
            'name'=>'',
            'warn_type'=>'',
            'config'=>array(
            'dd|qywx|fs|kafka|generalsms'=>array(
            'language'=>'zh',
            'title'=>'',
            'content'=>'',
            'method'=>'',
            'count'=>1,
            'mentioned_range'=>1,
            'mentioned_type'=>1,
            'mentioned_list'=>'',),),
            'id'=>'',
        );
        
        
        $res = $webhook -> createWebhookContentTemplate($arr);
        $this->do_assert($res);
    }

    public function testModifyWebhookContentTemplate()
    {
        $webhook = $this -> webhook;
        $arr = array(
            'id'=>'',
            'name'=>'',
            'warn_type'=>'',
            'webhook_type'=>'',
            'random_str'=>'',
            'config'=>array(
            'language'=>'',
            'title'=>'',
            'content'=>'',),
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $webhook -> modifyWebhookContentTemplate($arr);
        $this->do_assert($res);
    }

    public function testListWebhookContentTemplate()
    {
        $webhook = $this -> webhook;
        $arr = array(
            'uuid'=>'',
            'limit'=>1,
            'page'=>1,
            'like_args'=>array(
            'name'=>'',),
            'where_args'=>array(
            'warn_type'=>'',),
        );
        
        
        $res = $webhook -> listWebhookContentTemplate($arr);
        $this->do_assert($res);
    }

    public function testDelteWebhookContentTemplate()
    {
        $webhook = $this -> webhook;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $webhook -> delteWebhookContentTemplate($arr);
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