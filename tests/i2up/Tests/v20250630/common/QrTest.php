<?php
namespace i2up\Test\v20250630\common;

use i2up\common\v20250630\Qr;
use i2up\common\Auth;
                
class QrTest extends \PHPUnit_Framework_TestCase
 {
    private $qr;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> qr = new Qr(new Auth());
    }

    public function testDescribeTimeStamp()
    {
        $qr = $this -> qr;
        $arr = array(
            'timestamp'=>1546847673,
        );
        
        
        $res = $qr -> describeTimeStamp($arr);
        $this->do_assert($res);
    }

    public function testObtainQrContent()
    {
        $qr = $this -> qr;
        $arr = array(
            'app_name'=>'enterpriseApp',
        );
        
        
        $res = $qr -> obtainQrContent($arr);
        $this->do_assert($res);
    }

    public function testCreateQrPic()
    {
        $qr = $this -> qr;
        $arr = array(
            'point_size'=>1,
            'text'=>'test',
            'format'=>'',
        );
        
        
        $res = $qr -> createQrPic($arr);
        $this->do_assert($res);
    }

    public function testConfirmLogin()
    {
        $qr = $this -> qr;
        $arr = array(
            'action'=>1,
            'uuid'=>'9169240e9e5fa86a115578b9ed151c34771ca22e',
        );
        
        
        $res = $qr -> confirmLogin($arr);
        $this->do_assert($res);
    }

    public function testCancelLogin()
    {
        $qr = $this -> qr;
        $arr = array(
            'action'=>1,
            'uuid'=>'9169240e9e5fa86a115578b9ed151c34771ca22e',
        );
        
        
        $res = $qr -> cancelLogin($arr);
        $this->do_assert($res);
    }

    public function testCheckQrValidity()
    {
        $qr = $this -> qr;
        $arr = array(
            'action'=>1,
            'uuid'=>'9169240e9e5fa86a115578b9ed151c34771ca22e',
        );
        
        
        $res = $qr -> checkQrValidity($arr);
        $this->do_assert($res);
    }

    public function testCheckQrStatus()
    {
        $qr = $this -> qr;
        $arr = array(
            'uuid'=>'0d6e290f9c8414bac0bb105b97232771ec3e5178',
        );
        
        
        $res = $qr -> checkQrStatus($arr);
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