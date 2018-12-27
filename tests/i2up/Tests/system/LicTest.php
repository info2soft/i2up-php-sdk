<?php
namespace i2up\Test\system;

use i2up\system\v20181217\Lic;
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
            'group_sn'=>'',
        );
        $res = $lic -> describeActivateInfo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDownloadLicInfo()
    {
        $lic = $this -> lic;
        $arr = array(
            'uuid'=>''
        );
        $res = $lic -> downloadLicInfo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeLicCcHwCode()
    {
        $lic = $this -> lic;
        $res = $lic -> describeLicCcHwCode();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeLicObjHwCode()
    {
        $lic = $this -> lic;
        $arr = array(
            'obj_uuids'=>array(),
        );
        $res = $lic -> describeLicObjHwCode($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testActivateLicAll()
    {
        $lic = $this -> lic;
        $res = $lic -> activateLicAll();
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateLic()
    {
        $lic = $this -> lic;
        $arr = array(
            'license'=>array(
                '10-111111-3333'=>array(
                    'lic'=>'fMdsgzYMzelvzqGMzsIMA+5cSBfgSZJarq2gF/vUODTpxtl2gfmpLzHi3/IGOSe7rZ',
                    'cat'=>'06'
                ),
                '20-111111-3333'=>array(
                    'lic'=>'ce7nmPMrxsPfRn6t4xbnWeW2roARspsBubdiDnEm46R3NGBbtlXas/x',
                    'cat'=>'09'
                )
            ),
            'key'=>'fDTpxtl2gfmpLasldkfjklasdjflksjdflkjsajsldfzHi3/IGOSe',
            'num'=>2,
            'sign'=>'asldkfjklasdjflksjdflkjsajsldf',
            'sn'=>'10-111111-3333',
        );
        $res = $lic -> createLic($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUpdateLic()
    {
        $lic = $this -> lic;
        $arr = array(
            'uuid'=>'',
            'key'=>'fDTpxtl2gfmpLasldkfjklasdjflksjdflkjsajsldfzHi3/IGOSe',
            'sn'=>'20-111111-3333',
            'license'=>array(
                '20-111111-3333'=>array(
                    'lic'=>'ce7nmPMrxsPfRn6t4xbnWeW2roARspsBubdiDnEm46R3NGBbtlXas/x',
                    'cat'=>'09'
                )
            ),
            'num'=>1,
            'sign'=>'asldkfjklasdjflksjdflkjsajsldf',
        );
        $res = $lic -> updateLic($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUpdateBatchLic()
    {
        $lic = $this -> lic;
        $arr = array(
            'sn'=>'10-111111-3333',
            'sign'=>'asldkfjklasdjflksjdflkjsajsldf',
            'num'=>2,
            'key'=>'fDTpxtl2gfmpLasldkfjklasdjflksjdflkjsajsldfzHi3/IGOSe',
            'license'=>array(
                '10-111111-3333'=>array(
                    'cat'=>'06',
                    'lic'=>'fMdsgzYMzelvzqGMzsIMA+5cSBfgSZJarq2gF/vUODTpxtl2gfmpLzHi3/IGOSe7rZ'
                ),
                '20-111111-3333'=>array(
                    'lic'=>'ce7nmPMrxsPfRn6t4xbnWeW2roARspsBubdiDnEm46R3NGBbtlXas/x',
                    'cat'=>'09'
                )
            ),
            'is_trial'=>'',
        );
        $res = $lic -> updateBatchLic($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeLic()
    {
        $lic = $this -> lic;
        $arr = array(
            'uuid'=>''
        );
        $res = $lic -> describeLic($arr);
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteLic()
    {
        $lic = $this -> lic;
        $arr = array(
            'lic_uuids'=>array()
        );
        $res = $lic -> deleteLic($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListLicObjBind()
    {
        $lic = $this -> lic;
        $arr = array(
            'obj_uuid'=>'',
            'obj_type'=>1,
            'config_addr'=>'',
            'config_port'=>''
        );
        $res = $lic -> listLicObjBind($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListLicBind()
    {
        $lic = $this -> lic;
        $arr = array(
            'lic_uuid'=>'C23BD84A-3895-0F06-4478-2312E022F8F0'
        );
        $res = $lic -> listLicBind($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUpdateLicBind()
    {
        $lic = $this -> lic;
        $arr = array(
            'obj_uuids'=>'7C6A64CB-F4C6-7876-03AA-9ACF61012274',
            'lic_uuid'=>'9B41A083-96F6-F06F-C646-B84462FA205C'
        );
        $res = $lic -> updateLicBind($arr);
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
            'where_args[obj_uuid]'=>'42DDC23C-17B7-60D4-0695-A6E69938D00E',
            'filter_by_biz_grp'=>'1',
        );
        $res = $lic -> listLicObj($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}