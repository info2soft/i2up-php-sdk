<?php
namespace i2up\Test\v20240228\recycleBin;

use i2up\common\Auth;
use i2up\recycleBin\v20240228\RecycleBin;

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
            'where_args[type]'=>'',
            'search_field'=>'',
            'search_value'=>'',
        );
        $res = $recycleBin -> listRecycleBin($arr);
        $this->do_assert($res);
    }

    public function testDescribeRecycleBin()
    {
        $recycleBin = $this -> recycleBin;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $recycleBin -> describeRecycleBin($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}