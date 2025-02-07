<?php
namespace i2up\Test\v20250123\hw;

use i2up\hw\v20250123\HDR;
use i2up\common\Auth;
                
class HDRTest extends \PHPUnit_Framework_TestCase
 {
    private $hDR;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> hDR = new HDR(new Auth());
    }

    public function testUpdateSetting()
    {
        $hDR = $this -> hDR;
        $arr = array(
            'hcs_url'=>'',
        );
        
        
        $res = $hDR -> updateSetting($arr);
        $this->do_assert($res);
    }

    public function testModifyProfile()
    {
        $hDR = $this -> hDR;
        $arr = array(
            'hcs_username'=>'',
            'hcs_password'=>'',
        );
        
        
        $res = $hDR -> modifyProfile($arr);
        $this->do_assert($res);
    }

    public function testListProfile()
    {
        $hDR = $this -> hDR;
        $arr = array();
        
        
        $res = $hDR -> listProfile($arr);
        $this->do_assert($res);
    }

    public function testGetOpLogUsers()
    {
        $hDR = $this -> hDR;
        $arr = array();
        
        
        $res = $hDR -> getOpLogUsers($arr);
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