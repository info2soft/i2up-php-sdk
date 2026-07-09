<?php
namespace i2up\Test\v20260626\nbuBackupSet;

use i2up\nbuBackupSet\v20260626\NbuBackupSet;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class NbuBackupSetTest extends TestCase
 {
    private $nbuBackupSet;
    
    public function setUp():void
    {
        parent::setup();
        $this -> nbuBackupSet = new NbuBackupSet(new Auth());
    }

    public function testListBackupWork()
    {
        $nbuBackupSet = $this -> nbuBackupSet;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'nbu_bk_set_uuid'=>'',
        );
        
        
        $res = $nbuBackupSet -> listBackupWork($arr);
        $this->do_assert($res);
    }

    public function testListQueryArgsNbuBackupSet()
    {
        $nbuBackupSet = $this -> nbuBackupSet;
        $arr = array(
            'search_field'=>'',
            'search_value'=>'',
        );
        
        
        $res = $nbuBackupSet -> listQueryArgsNbuBackupSet($arr);
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