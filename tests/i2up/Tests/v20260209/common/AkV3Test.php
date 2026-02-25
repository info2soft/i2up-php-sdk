<?php
namespace i2up\Test\v20260209\common;

use i2up\common\v20260209\AkV3;
use i2up\common\Auth;
                
class AkV3Test extends \PHPUnit_Framework_TestCase
 {
    private $akV3;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> akV3 = new AkV3(new Auth());
    }

    public function testListAk()
    {
        $akV3 = $this -> akV3;
        $arr = array(
            'type'=>1,
        );
        
        
        $res = $akV3 -> listAk($arr);
        $this->do_assert($res);
    }

    public function testCreateAk()
    {
        $akV3 = $this -> akV3;
        $arr = array(
            'type'=>1,
        );
        
        
        $res = $akV3 -> createAk($arr);
        $this->do_assert($res);
    }

    public function testModifyAk()
    {
        $akV3 = $this -> akV3;
        $arr = array(
            'access_key'=>'pytDWihn3NscXewH8UYLIZq2gE7ufGoQ',
            'status'=>0,
            'comment'=>'',
        );
        
        
        $res = $akV3 -> modifyAk($arr);
        $this->do_assert($res);
    }

    public function testDeleteAk()
    {
        $akV3 = $this -> akV3;
        $arr = array(
            'access_key'=>'pytDWihn3NscXewH8UYLIZq2gE7ufGoQ',
        );
        
        
        $res = $akV3 -> deleteAk($arr);
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