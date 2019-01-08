<?php
namespace i2up\Test\common;

use i2up\common\Qr;
use i2up\common\Auth;
use i2up\Config;
                
class QrTest extends \PHPUnit_Framework_TestCase
 {
    private $qr;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> qr = new Qr($auth);
    }

    public function testDescribeTimeStamp()
    {
        $qr = $this -> qr;
        $arr = array(
            'timestamp'=>1546847456,
        );
        $res = $qr -> describeTimeStamp($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
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
        var_export($res);
        $this->assertNotNull($res[0]);
    }

    public function testConfirmLogin()
    {
        $qr = $this -> qr;
        $arr = array(
            'action'=>1,
            'uuid'=>'3f6ed5ee2ff74b02092d0685c2b9328a55aa27db',
        );
        $res = $qr -> confirmLogin($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testObtainQrContent()
    {
        $qr = $this -> qr;
        $arr = array(
            'app_name'=>'enterpriseApp',
        );
        $res = $qr -> obtainQrContent($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCheckQrStatus()
    {
        $qr = $this -> qr;
        $arr = array(
            'uuid'=>'cfb4729bf1030c04dbf402ba9456fe443c3f053a',
        );
        $res = $qr -> checkQrStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}