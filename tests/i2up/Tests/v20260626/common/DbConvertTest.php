<?php
namespace i2up\Test\v20260626\common;

use i2up\common\v20260626\DbConvert;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class DbConvertTest extends TestCase
 {
    private $dbConvert;
    
    public function setUp():void
    {
        parent::setup();
        $this -> dbConvert = new DbConvert(new Auth());
    }

    public function testDbConvertImport()
    {
        $dbConvert = $this -> dbConvert;
        $arr = array();
        
        
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