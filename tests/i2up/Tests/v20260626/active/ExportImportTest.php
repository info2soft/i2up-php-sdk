<?php
namespace i2up\Test\v20260626\active;

use i2up\active\v20260626\ExportImport;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class ExportImportTest extends TestCase
 {
    private $exportImport;
    
    public function setUp():void
    {
        parent::setup();
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