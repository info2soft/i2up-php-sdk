<?php
namespace i2up\Test\v20260209\backupSetRulePolicy;

use i2up\backupSetRulePolicy\v20260209\BackupSetCompare;
use i2up\common\Auth;
                
class BackupSetCompareTest extends \PHPUnit_Framework_TestCase
 {
    private $backupSetCompare;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> backupSetCompare = new BackupSetCompare(new Auth());
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