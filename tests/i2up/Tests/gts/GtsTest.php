<?php
namespace i2up\Test\gts;

use i2up\gts\v20190805\Gts;
use i2up\common\Auth;

class GtsTest extends \PHPUnit_Framework_TestCase
{
    private $gts;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $params = array(
            'username' => 'admin',
            'pwd' => 'Info1234',
            'cache_path' => __DIR__ . '/../',
            'ip' => Config::baseUrl
        );
        $auth = new Auth($params);
        $this -> gts = new Gts($auth);
    }


    public function testDescribeLic()
    {
        $gts = $this -> gts;
        $arr = array(
            'num'=>1,
            'sn'=>array(
                '0'=>'20-4570098558-01',
            ),
            'key'=>'5BrDir',
            'sign'=>'',
            'license'=>array(
                '20-4570098558-01'=>array(
                    'feature'=>'cdp',
                    'lic'=>'joEsLGQImYbDo2/DSG2RGR7VorckQmnPAAvFgLNCVd78KFDFb0Y0xtShHFyQVF6VXRUcHvyeqJEu1/nuMOyyJiO8RMoU4GHZMrK6iLDRoPZHV87tp0Jd80MfuTHrpBc209IjM+AkSsTM66Wdfy0tvLJMfPqhaYdg7M80X+fhRfeP6kj9ikSVvmJMHJ/ms7lrgz5D+s9jhtzW7tv9cz07bbankTgwyZf6rnjbgOI76tsKzYq8rsBttYSGf+oy1qa2nM7x/pQHE6oRiXVy8+Ju2dzpwvLlMurF75r7lWyMRPSniPHBQGrx4yEEeKVwuWCMRaSJVyId13qyP7gPBqes4jgsiVHvt1okhydrAeoq89KOgnOHPqrpS+qI9dvXFmFRiP9AB0i9ra67tDx5ItYNh/neNgxsNpV3q0Tf9PfoTKiKwcYMg0AiFeKuSpynDIL530Ek8Jm/7LbXU7+mUkeGO7BJo9gxEMJRTHuSRLCLIXWm2LY2S58WccsXkL7GFaamkh6lE1VX3quXavLpHC0ishL4D0ocEdAh507s6GKd59oVErFAyBOifEE9EONR+95wD9MQMc4SdNt4l4Z7ATj67JN86UFZ5xZpGEOnMgCSUuuzX/Nx0HSF6uUf3Zs6HcViudmXcvLwwaFeRScRDwHYVLhiABda/qAp8Ovoc8Aw/3w=',),),
            'is_trial'=>1,
        );
        $res = $gts -> describeLic($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCloseService()
    {
        $gts = $this -> gts;
        $arr = array();
        $res = $gts -> closeService($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListService()
    {
        $gts = $this -> gts;
        $arr = array(
            'tenant_id@guid'=>'',
        );
        $res = $gts -> listService($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateServer()
    {
        $gts = $this -> gts;
        $arr = array(
            'ip'=>'152.167.159.87',
        );
        $res = $gts -> createServer($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeQuota()
    {
        $gts = $this -> gts;
        $arr = array(
        );
        $res = $gts -> describeQuota($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeSummary()
    {
        $gts = $this -> gts;
        $arr = array(
        );
        $res = $gts -> describeSummary($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}