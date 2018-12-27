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
            'timestamp'=>1545639362,
        );
        $res = $qr -> describeTimeStamp($arr);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testConfirmLogin()
    {
        $qr = $this -> qr;
        $arr = array(
            'action'=>1,
            'uuid'=>'7db1dae2b4131e718e885edf29b5cf739e6438e7',
        );
        $res = $qr -> confirmLogin($arr);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCheckQrStatus()
    {
        $qr = $this -> qr;
        $arr = array(
            'uuid'=>'94c15a475c46656220f40cb259ba4c945010a671',
        );
        $res = $qr -> checkQrStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}