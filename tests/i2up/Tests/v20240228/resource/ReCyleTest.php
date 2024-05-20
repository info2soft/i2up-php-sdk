<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\ReCyle;
use i2up\common\Auth;
                
class ReCyleTest extends \PHPUnit_Framework_TestCase
 {
    private $reCyle;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> reCyle = new ReCyle(new Auth());
    }

    public function testListRecycle()
    {
        $reCyle = $this -> reCyle;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'type'=>'',
            'where_args[]'=>'',
        );
        $res = $reCyle -> listRecycle($arr);
        $this->do_assert($res);
    }

    public function testCleanRecycle()
    {
        $reCyle = $this -> reCyle;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
            'operate'=>'clean',
        );
        $res = $reCyle -> cleanRecycle($arr);
        $this->do_assert($res);
    }

    public function testDeleteRecycle()
    {
        $reCyle = $this -> reCyle;
        $arr = array(
            'uuids'=>array('11111111-1111-1111-1111-111111111111'),
        );
        $res = $reCyle -> deleteRecycle($arr);
        $this->do_assert($res);
    }

    public function testListRecycleStatus()
    {
        $reCyle = $this -> reCyle;
        $arr = array(
            'uuids'=>array(
                '0'=>'63dEfca6-A21c-ff45-e37e-FECE39bd271F',
            ),
            'force_refresh'=>1,
        );
        $res = $reCyle -> listRecycleStatus($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}