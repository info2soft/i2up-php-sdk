<?php
namespace i2up\Test\v20260626\hw;

use i2up\hw\v20260626\GTS;
use i2up\common\Auth;
use PHPUnit\Framework\TestCase;
                
class GTSTest extends TestCase
 {
    private $gTS;
    
    public function setUp():void
    {
        parent::setup();
        $this -> gTS = new GTS(new Auth());
    }

    public function testDescribeLic()
    {
        $gTS = $this -> gTS;
        $arr = array(
            'num'=>1,
            'sn'=>array(
            '0'=>'20-4570098558-01',),
            'key'=>'5BrDir',
            'sign'=>'',
            'license'=>array(
            '20-4570098558-01'=>array(
            'feature'=>'cdp',
            'lic'=>'joEsLGQImYbDo2/DSG2RGR7VorckQmnPAAvFgLNCVd78KFDFb0Y0xtShHFyQVF6VXRUcHvyeqJEu1/nuMOyyJiO8RMoU4GHZMrK6iLDRoPZHV87tp0Jd80MfuTHrpBc209IjM+AkSsTM66Wdfy0tvLJMfPqhaYdg7M80X+fhRfeP6kj9ikSVvmJMHJ/ms7lrgz5D+s9jhtzW7tv9cz07bbankTgwyZf6rnjbgOI76tsKzYq8rsBttYSGf+oy1qa2nM7x/pQHE6oRiXVy8+Ju2dzpwvLlMurF75r7lWyMRPSniPHBQGrx4yEEeKVwuWCMRaSJVyId13qyP7gPBqes4jgsiVHvt1okhydrAeoq89KOgnOHPqrpS+qI9dvXFmFRiP9AB0i9ra67tDx5ItYNh/neNgxsNpV3q0Tf9PfoTKiKwcYMg0AiFeKuSpynDIL530Ek8Jm/7LbXU7+mUkeGO7BJo9gxEMJRTHuSRLCLIXWm2LY2S58WccsXkL7GFaamkh6lE1VX3quXavLpHC0ishL4D0ocEdAh507s6GKd59oVErFAyBOifEE9EONR+95wD9MQMc4SdNt4l4Z7ATj67JN86UFZ5xZpGEOnMgCSUuuzX/Nx0HSF6uUf3Zs6HcViudmXcvLwwaFeRScRDwHYVLhiABda/qAp8Ovoc8Aw/3w=',),),
            'is_trial'=>1,
        );
        
        
        $res = $gTS -> describeLic($arr);
        $this->do_assert($res);
    }

    public function testCloseService()
    {
        $gTS = $this -> gTS;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $gTS -> closeService($arr);
        $this->do_assert($res);
    }

    public function testListService()
    {
        $gTS = $this -> gTS;
        $arr = array(
            'tenant_id@guid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $gTS -> listService($arr);
        $this->do_assert($res);
    }

    public function testCreateServer()
    {
        $gTS = $this -> gTS;
        $arr = array(
            'ip'=>'236.232.197.140',
        );
        
        
        $res = $gTS -> createServer($arr);
        $this->do_assert($res);
    }

    public function testDescribeQuota()
    {
        $gTS = $this -> gTS;
        $arr = array();
        
        
        $res = $gTS -> describeQuota($arr);
        $this->do_assert($res);
    }

    public function testDescribeSummary()
    {
        $gTS = $this -> gTS;
        $arr = array();
        
        
        $res = $gTS -> describeSummary($arr);
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