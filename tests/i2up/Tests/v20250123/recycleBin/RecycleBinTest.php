<?php
namespace i2up\Test\v20250123\recycleBin;

use i2up\recycleBin\v20250123\RecycleBin;
use i2up\common\Auth;
                
class RecycleBinTest extends \PHPUnit_Framework_TestCase
 {
    private $recycleBin;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> recycleBin = new RecycleBin(new Auth());
    }

    public function testListRecycleBin()
    {
        $recycleBin = $this -> recycleBin;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'search_field'=>'',
            'search_value'=>'',
            'where_args'=>array(
            'type'=>'',),
        );
        
        
        $res = $recycleBin -> listRecycleBin($arr);
        $this->do_assert($res);
    }

    public function testDescribeRecycleBin()
    {
        $recycleBin = $this -> recycleBin;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $recycleBin -> describeRecycleBin($arr);
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