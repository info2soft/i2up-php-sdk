<?php
namespace i2up\Test\v20240819\common;

use i2up\common\v20240819\DbConvert;
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