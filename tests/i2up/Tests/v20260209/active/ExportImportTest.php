<?php
namespace i2up\Test\v20260209\active;

use i2up\active\v20260209\ExportImport;
use i2up\common\Auth;
                
class ExportImportTest extends \PHPUnit_Framework_TestCase
 {
    private $exportImport;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> exportImport = new ExportImport(new Auth());
    }

    public function testBatchImportActiveRules()
    {
        $exportImport = $this -> exportImport;
        $arr = array(
            'file'=>'',
            'ext'=>'',
        );
        
        
        $res = $exportImport -> batchImportActiveRules($arr);
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