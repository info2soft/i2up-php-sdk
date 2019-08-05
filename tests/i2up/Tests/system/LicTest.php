<?php
namespace i2up\Test\system;

use i2up\system\v20190805\Lic;
use i2up\common\Auth;
use i2up\Config;

class LicTest extends \PHPUnit_Framework_TestCase
{
    private $lic;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> lic = new Lic($auth);
    }

    public function testDescribeActivateInfo()
    {
        $lic = $this -> lic;
        $arr = array(
            'group_sn'=>'20-4570098558',
        );
        $res = $lic -> describeActivateInfo($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDownloadLicInfo()
    {
        $lic = $this -> lic;
        $arr = array(
            'uuid'=>'9D167FAC-F5A3-F577-8629-2A25070A49E1'
        );
        $res = $lic -> downloadLicInfo($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeLicCcHwCode()
    {
        $lic = $this -> lic;
        $res = $lic -> describeLicCcHwCode();
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeLicObjHwCode()
    {
        $lic = $this -> lic;
        $arr = array(
            'obj_uuids'=>array(
                '0'=>'9D167FAC-F5A3-F577-8629-2A25070A49E1'
            ),
        );
        $res = $lic -> describeLicObjHwCode($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testActivateLicAll()
    {
        $lic = $this -> lic;
        $res = $lic -> activateLicAll();
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateLic()
    {
        $lic = $this -> lic;
        $arr = array(
            'license'=>array(
                '20-4570098558-01'=>array(
                    'feature'=>'cdp',
                    'lic'=>'joEsLGQImYbDo2/DSG2RGR7VorckQmnPAAvFgLNCVd78KFDFb0Y0xtShHFyQVF6VXRUcHvyeqJEu1/nuMOyyJiO8RMoU4GHZMrK6iLDRoPZHV87tp0Jd80MfuTHrpBc209IjM+AkSsTM66Wdfy0tvLJMfPqhaYdg7M80X+fhRfeP6kj9ikSVvmJMHJ/ms7lrgz5D+s9jhtzW7tv9cz07bbankTgwyZf6rnjbgOI76tsKzYq8rsBttYSGf+oy1qa2nM7x/pQHE6oRiXVy8+Ju2dzpwvLlMurF75r7lWyMRPSniPHBQGrx4yEEeKVwuWCMRaSJVyId13qyP7gPBqes4jgsiVHvt1okhydrAeoq89KOgnOHPqrpS+qI9dvXFmFRiP9AB0i9ra67tDx5ItYNh/neNgxsNpV3q0Tf9PfoTKiKwcYMg0AiFeKuSpynDIL530Ek8Jm/7LbXU7+mUkeGO7BJo9gxEMJRTHuSRLCLIXWm2LY2S58WccsXkL7GFaamkh6lE1VX3quXavLpHC0ishL4D0ocEdAh507s6GKd59oVErFAyBOifEE9EONR+95wD9MQMc4SdNt4l4Z7ATj67JN86UFZ5xZpGEOnMgCSUuuzX/Nx0HSF6uUf3Zs6HcViudmXcvLwwaFeRScRDwHYVLhiABda/qAp8Ovoc8Aw/3w=',
                )
            ),
            'key'=>'5BrDir',
            'num'=>1,
            'sign'=>'',
            'sn'=>array(
                '0'=>'20-4570098558-01'
            ),
        );
        $res = $lic -> createLic($arr);
        var_export($res);

    }


    public function testUpdateBatchLic()
    {
        $lic = $this -> lic;
        $arr = array(
            'sn'=>array(
                '0'=>'20-4570098558-01'
            ),
            'sign'=>'',
            'num'=>1,
            'key'=>'5BrDir',
            'license'=>array(
                '20-4570098558-01'=>array(
                    'feature'=>'cdp',
                    'lic'=>'joEsLGQImYbDo2/DSG2RGR7VorckQmnPAAvFgLNCVd78KFDFb0Y0xtShHFyQVF6VXRUcHvyeqJEu1/nuMOyyJiO8RMoU4GHZMrK6iLDRoPZHV87tp0Jd80MfuTHrpBc209IjM+AkSsTM66Wdfy0tvLJMfPqhaYdg7M80X+fhRfeP6kj9ikSVvmJMHJ/ms7lrgz5D+s9jhtzW7tv9cz07bbankTgwyZf6rnjbgOI76tsKzYq8rsBttYSGf+oy1qa2nM7x/pQHE6oRiXVy8+Ju2dzpwvLlMurF75r7lWyMRPSniPHBQGrx4yEEeKVwuWCMRaSJVyId13qyP7gPBqes4jgsiVHvt1okhydrAeoq89KOgnOHPqrpS+qI9dvXFmFRiP9AB0i9ra67tDx5ItYNh/neNgxsNpV3q0Tf9PfoTKiKwcYMg0AiFeKuSpynDIL530Ek8Jm/7LbXU7+mUkeGO7BJo9gxEMJRTHuSRLCLIXWm2LY2S58WccsXkL7GFaamkh6lE1VX3quXavLpHC0ishL4D0ocEdAh507s6GKd59oVErFAyBOifEE9EONR+95wD9MQMc4SdNt4l4Z7ATj67JN86UFZ5xZpGEOnMgCSUuuzX/Nx0HSF6uUf3Zs6HcViudmXcvLwwaFeRScRDwHYVLhiABda/qAp8Ovoc8Aw/3w='
                )
            )
        );
        $res = $lic -> updateBatchLic($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeLic()
    {
        $lic = $this -> lic;
        $arr = array(
            'uuid'=>'9D167FAC-F5A3-F577-8629-2A25070A49E1'
        );
        $res = $lic -> describeLic($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListLic()
    {
        $lic = $this -> lic;
        $arr = array(
            'search_value'=>'',
            'search_field'=>'',
            'direction'=>'',
            'page'=>1,
            'limit'=>10,
            'order_by'=>'',
        );
        $res = $lic -> listLic($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteLic()
    {
        $lic = $this -> lic;
        $arr = array(
            'lic_uuids'=>array(
                '0'=>'9D167FAC-F5A3-F577-8629-2A25070A49E1'
            )
        );
        $res = $lic -> deleteLic($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListLicObjBind()
    {
        $lic = $this -> lic;
        $arr = array(
            'obj_uuid'=>'9D167FAC-F5A3-F577-8629-2A25070A49E1',
            'obj_type'=>0,
            'config_addr'=>'192.168.72.76',
            'config_port'=>'26821'
        );
        $res = $lic -> listLicObjBind($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListLicBind()
    {
        $lic = $this -> lic;
        $arr = array(
            'lic_uuid'=>'9D167FAC-F5A3-F577-8629-2A25070A49E1'
        );
        $res = $lic -> listLicBind($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUpdateLicBind()
    {
        $lic = $this -> lic;
        $arr = array(
            'obj_uuids'=>array(
                '0'=>'9D167FAC-F5A3-F577-8629-2A25070A49E1'
            ),
            'lic_uuid'=>'9D167FAC-F5A3-F577-8629-2A25070A49E1'
        );
        $res = $lic -> updateLicBind($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListLicObj()
    {
        $lic = $this -> lic;
        $arr = array(
            'feature'=>'coopy',
            'obj_type'=>0,
            'where_args[obj_uuid]'=>'9D167FAC-F5A3-F577-8629-2A25070A49E1',
            'filter_by_biz_grp'=>'1',
        );
        $res = $lic -> listLicObj($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}