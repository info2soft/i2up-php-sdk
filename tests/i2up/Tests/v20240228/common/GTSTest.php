<?php
namespace i2up\Test\v20240228\common;

use i2up\common\v20240228\GTS;
use i2up\common\Auth;
                
class GTSTest extends \PHPUnit_Framework_TestCase
 {
    private $gTS;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
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
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $gTS -> closeService($arr);
        $this->do_assert($res);
    }

    public function testListService()
    {
        $gTS = $this -> gTS;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'tenant_id'=>'',
        );
        $res = $gTS -> listService($arr);
        $this->do_assert($res);
    }

    public function testCreateServer()
    {
        $gTS = $this -> gTS;
        $arr = array(
            'ip'=>'152.211.1.122',
        );
        $res = $gTS -> createServer($arr);
        $this->do_assert($res);
    }

    public function testDescribeQuota()
    {
        $gTS = $this -> gTS;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $gTS -> describeQuota($arr);
        $this->do_assert($res);
    }

    public function testDescribeSummary()
    {
        $gTS = $this -> gTS;
        $arr = array('11111111-1111-1111-1111-111111111111');
        $res = $gTS -> describeSummary($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}