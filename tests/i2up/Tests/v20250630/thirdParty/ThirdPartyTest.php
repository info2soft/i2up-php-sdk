<?php
namespace i2up\Test\v20250630\thirdParty;

use i2up\thirdParty\v20250630\ThirdParty;
use i2up\common\Auth;
                
class ThirdPartyTest extends \PHPUnit_Framework_TestCase
 {
    private $thirdParty;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> thirdParty = new ThirdParty(new Auth());
    }

    public function testGetThirdPartiesUrl()
    {
        $thirdParty = $this -> thirdParty;
        $arr = array(
            'key'=>'表争平铁组该最',
        );
        
        
        $res = $thirdParty -> getThirdPartiesUrl($arr);
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