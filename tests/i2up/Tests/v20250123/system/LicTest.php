<?php
namespace i2up\Test\v20250123\system;

use i2up\system\v20250123\Lic;
use i2up\common\Auth;
                
class LicTest extends \PHPUnit_Framework_TestCase
 {
    private $lic;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> lic = new Lic(new Auth());
    }

    public function testDownloadLicInfo()
    {
        $lic = $this -> lic;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $lic -> downloadLicInfo($arr);
        $this->do_assert($res);
    }

    public function testDescribeLicCcHwCode()
    {
        $lic = $this -> lic;
        $arr = array();
        
        
        $res = $lic -> describeLicCcHwCode($arr);
        $this->do_assert($res);
    }

    public function testDescribeLicObjHwCode()
    {
        $lic = $this -> lic;
        $arr = array(
            'obj_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
        );
        
        
        $res = $lic -> describeLicObjHwCode($arr);
        $this->do_assert($res);
    }

    public function testActivateLicAll()
    {
        $lic = $this -> lic;
        $arr = array();
        
        
        $res = $lic -> activateLicAll($arr);
        $this->do_assert($res);
    }

    public function testListLic()
    {
        $lic = $this -> lic;
        $arr = array(
            'search_value'=>'',
            'search_field'=>'',
            'direction'=>'',
            'page'=>1,
            'limit'=>1,
            'order_by'=>'',
        );
        
        
        $res = $lic -> listLic($arr);
        $this->do_assert($res);
    }

    public function testCreateLic()
    {
        $lic = $this -> lic;
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
        );
        
        
        $res = $lic -> createLic($arr);
        $this->do_assert($res);
    }

    public function testDeleteLic()
    {
        $lic = $this -> lic;
        $arr = array(
            'lic_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
        );
        
        
        $res = $lic -> deleteLic($arr);
        $this->do_assert($res);
    }

    public function testUpdateBatchLic()
    {
        $lic = $this -> lic;
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
        
        
        $res = $lic -> updateBatchLic($arr);
        $this->do_assert($res);
    }

    public function testDescribeLic()
    {
        $lic = $this -> lic;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $lic -> describeLic($arr);
        $this->do_assert($res);
    }

    public function testListLicBind()
    {
        $lic = $this -> lic;
        $arr = array(
            'lic_uuid'=>'11111111-1111-1111-1111-111111111111',
            'order_by'=>'',
            'direction'=>'',
        );
        
        
        $res = $lic -> listLicBind($arr);
        $this->do_assert($res);
    }

    public function testListLicObjBind()
    {
        $lic = $this -> lic;
        $arr = array(
            'obj_uuid'=>'11111111-1111-1111-1111-111111111111',
            'obj_type'=>0,
            'config_addr'=>'192.168.72.76',
            'config_port'=>'26821',
            'proxy_switch'=>1,
            'proxy_id'=>'',
            'obj_subtype'=>1,
        );
        
        
        $res = $lic -> listLicObjBind($arr);
        $this->do_assert($res);
    }

    public function testUpdateLicBind()
    {
        $lic = $this -> lic;
        $arr = array();
        
        
        $res = $lic -> updateLicBind($arr);
        $this->do_assert($res);
    }

    public function testListLicObj()
    {
        $lic = $this -> lic;
        $arr = array(
            'feature'=>'coopy',
            'obj_type'=>0,
            'filter_by_biz_grp'=>'1',
            'obj_subtype'=>1,
            'order_by'=>'',
            'direction'=>'',
            'filter_by_service_cls'=>1,
            'filter_by_rule'=>1,
            'is_rc_wk'=>0,
            'i2vp_plugin_node'=>1,
            'roles'=>array(),
            'support_obs'=>1,
            'where_args'=>array(
            'obj_uuid'=>'11111111-1111-1111-1111-111111111111',
            'os_type'=>'',
            'node_uuid'=>'0B2421D6-C6C1-C3C1-ECEF-C484B69C6878',
            'pool_uuid'=>'',),
            'where'=>array(
            'hive_switch'=>1,),
        );
        
        
        $res = $lic -> listLicObj($arr);
        $this->do_assert($res);
    }

    public function testDescribeMoveLicBind()
    {
        $lic = $this -> lic;
        $arr = array(
            'sn'=>'sn=40-4622191169-01',
        );
        
        
        $res = $lic -> describeMoveLicBind($arr);
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