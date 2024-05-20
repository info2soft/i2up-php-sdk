<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\Webhook;
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
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'name'=>'',
            'random_str'=>'',
            'config'=>array(),
            'url'=>'',
            'id'=>'',
        );
        $res = $webhook -> modifyWebhook($arr);
        $this->do_assert($res);
    }

    public function testListWebhook()
    {
        $webhook = $this -> webhook;
        $arr = array(
            'where_args[type]'=>'',
            'page'=>1,
            'limit'=>1,
            'like_args[name]'=>'',
        );
        $res = $webhook -> listWebhook($arr);
        $this->do_assert($res);
    }

    public function testDescribeWebhook()
    {
        $webhook = $this -> webhook;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $webhook -> describeWebhook($arr);
        $this->do_assert($res);
    }

    public function testDeleteWebhook()
    {
        $webhook = $this -> webhook;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
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
            'count'=>1,),),
            'id'=>'',
        );
        $res = $webhook -> createWebhookContentTemplate($arr);
        $this->do_assert($res);
    }

    public function testModifyWebhookContentTemplate()
    {
        $webhook = $this -> webhook;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
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
            'like_args[name]'=>'',
            'where_args[warn_type]'=>'',
        );
        $res = $webhook -> listWebhookContentTemplate($arr);
        $this->do_assert($res);
    }

    public function testDelteWebhookContentTemplate()
    {
        $webhook = $this -> webhook;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $webhook -> delteWebhookContentTemplate($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}