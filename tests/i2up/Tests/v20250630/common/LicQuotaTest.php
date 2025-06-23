<?php
namespace i2up\Test\v20250630\common;

use i2up\common\v20250630\LicQuota;
use i2up\common\Auth;
                
class LicQuotaTest extends \PHPUnit_Framework_TestCase
 {
    private $licQuota;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> licQuota = new LicQuota(new Auth());
    }

    public function testQuotaOverview()
    {
        $licQuota = $this -> licQuota;
        $arr = array(
            'limit'=>'15',
            'page'=>'1',
        );
        
        
        $res = $licQuota -> quotaOverview($arr);
        $this->do_assert($res);
    }

    public function testCreateLicQuota()
    {
        $licQuota = $this -> licQuota;
        $arr = array(
            'user_uuid'=>'',
            'quota_list'=>array(
            '0'=>array(
            'feature'=>'backup9',
            'vm_num'=>1,
            'db_num'=>1,
            'sqlserver_num'=>1,
            'mysql_num'=>1,
            'phy_num'=>1,
            'move_num'=>1,
            'postgresql_num'=>0,
            'dm_num'=>0,
            'mongodb_num'=>0,
            'redis_num'=>0,
            'kafka_num'=>0,),),
            'split_license'=>1,
        );
        
        
        $res = $licQuota -> createLicQuota($arr);
        $this->do_assert($res);
    }

    public function testUnsubscribeLicQuota()
    {
        $licQuota = $this -> licQuota;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $licQuota -> unsubscribeLicQuota($arr);
        $this->do_assert($res);
    }

    public function testListLicQuota()
    {
        $licQuota = $this -> licQuota;
        $arr = array(
            'user_uuid'=>'dbB45C1B-D6eE-dD41-4770-3dA45F87ffCe',
            'search_field'=>'quota_uuid',
            'search_value'=>'D83dDAEA-5A39-a274-bedA-1ACe9E5783f2',
            'limit'=>15,
            'page'=>1,
        );
        
        
        $res = $licQuota -> listLicQuota($arr);
        $this->do_assert($res);
    }

    public function testDescribeLicQuota()
    {
        $licQuota = $this -> licQuota;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $licQuota -> describeLicQuota($arr);
        $this->do_assert($res);
    }

    public function testUpdateLicQuota()
    {
        $licQuota = $this -> licQuota;
        $arr = array(
            'vm_num'=>1,
            'db_num'=>1,
            'sqlserver_num'=>1,
            'mysql_num'=>1,
            'phy_num'=>1,
            'move_num'=>1,
            'postgresql_num'=>1,
            'dm_num'=>1,
            'mongodb_num'=>1,
            'redis_num'=>1,
            'kafka_num'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $licQuota -> updateLicQuota($arr);
        $this->do_assert($res);
    }

    public function testGetLicQuotaBindList()
    {
        $licQuota = $this -> licQuota;
        $arr = array(
            'quota_uuid'=>'',
        );
        
        
        $res = $licQuota -> getLicQuotaBindList($arr);
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