<?php
namespace i2up\Test\v20240819\fingerprintDomain;

use i2up\fingerprintDomain\v20240819\FingerprintDomain;
use i2up\common\Auth;
                
class FingerprintDomainTest extends \PHPUnit_Framework_TestCase
 {
    private $fingerprintDomain;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> fingerprintDomain = new FingerprintDomain(new Auth());
    }

    public function testCreateFingerprintDomain()
    {
        $fingerprintDomain = $this -> fingerprintDomain;
        $arr = array(
            'domain_name'=>'',
            'sto_uuid'=>'',
            'chunk_type'=>1,
            'chunk_size'=>1,
            'chunk_max'=>1,
            'chunk_min'=>1,
            'compress'=>1,
            'description'=>'',
        );
        
        
        $res = $fingerprintDomain -> createFingerprintDomain($arr);
        $this->do_assert($res);
    }

    public function testModifyFingerprintDomain()
    {
        $fingerprintDomain = $this -> fingerprintDomain;
        $arr = array(
            'domain_name'=>'',
            'sto_uuid'=>'',
            'chunk_type'=>1,
            'chunk_size'=>1,
            'chunk_max'=>1,
            'chunk_min'=>1,
            'compress'=>1,
            'description'=>'',
            'domain_uuid'=>'',
            'random_str'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $fingerprintDomain -> modifyFingerprintDomain($arr);
        $this->do_assert($res);
    }

    public function testDeleteFingerprintDomain()
    {
        $fingerprintDomain = $this -> fingerprintDomain;
        $arr = array(
            'domain_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $fingerprintDomain -> deleteFingerprintDomain($arr);
        $this->do_assert($res);
    }

    public function testListFingerprintDomain()
    {
        $fingerprintDomain = $this -> fingerprintDomain;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'search_field'=>'',
            'search_value'=>'',
            'status'=>'',
        );
        
        
        $res = $fingerprintDomain -> listFingerprintDomain($arr);
        $this->do_assert($res);
    }

    public function testDescribeFingerprintDomain()
    {
        $fingerprintDomain = $this -> fingerprintDomain;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $fingerprintDomain -> describeFingerprintDomain($arr);
        $this->do_assert($res);
    }

    public function testListFingerprintDomainStatus()
    {
        $fingerprintDomain = $this -> fingerprintDomain;
        $arr = array(
            'domain_uuids'=>array(),
            'force_refresh'=>0,
        );
        
        
        $res = $fingerprintDomain -> listFingerprintDomainStatus($arr);
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