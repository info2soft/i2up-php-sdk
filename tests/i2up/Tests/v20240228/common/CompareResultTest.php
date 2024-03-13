<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\CompareResult;
use i2up\common\Auth;
                
class CompareResultTest extends \PHPUnit_Framework_TestCase
 {
    private $compareResult;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> compareResult = new CompareResult(new Auth());
    }

    public function testListCompareResult()
    {
        $compareResult = $this -> compareResult;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'page'=>'',
            'limit'=>'',
        );
        $res = $compareResult -> listCompareResult($arr);
        $this->do_assert($res);
    }

    public function testDownloadCompareResult()
    {
        $compareResult = $this -> compareResult;
        $arr = array(
            'result_uuids'=>array(),
            'operate'=>'download',
        );
        $res = $compareResult -> downloadCompareResult($arr);
        $this->do_assert($res);
    }

    public function testDeleteCompareResult()
    {
        $compareResult = $this -> compareResult;
        $arr = array(
            'result_uuids'=>array(),
        );
        $res = $compareResult -> deleteCompareResult($arr);
        $this->do_assert($res);
    }

    public function testViewConfig()
    {
        $compareResult = $this -> compareResult;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $compareResult -> viewConfig($arr);
        $this->do_assert($res);
    }

    public function testListDiffDetail()
    {
        $compareResult = $this -> compareResult;
        $arr = array(
            'uuid'=>'',
            'type'=>'',
            'page'=>1,
            'limit'=>10,
        );
        $res = $compareResult -> listDiffDetail($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}