<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\DbConvert;
use i2up\common\Auth;
                
class DbConvertTest extends \PHPUnit_Framework_TestCase
 {
    private $dbConvert;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> dbConvert = new DbConvert(new Auth());
    }

    public function testDbConvertImport()
    {
        $dbConvert = $this -> dbConvert;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $dbConvert -> dbConvertImport($arr);
        $this->do_assert($res);
    }

    public function testDbConvertListConverts()
    {
        $dbConvert = $this -> dbConvert;
        $arr = array(
            'type'=>'',
        );
        $res = $dbConvert -> dbConvertListConverts($arr);
        $this->do_assert($res);
    }

    public function testDbConvertMigrate()
    {
        $dbConvert = $this -> dbConvert;
        $arr = array(
            'version'=>'',
            'type'=>'',
        );
        $res = $dbConvert -> dbConvertMigrate($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}