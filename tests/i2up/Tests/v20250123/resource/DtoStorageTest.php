<?php
namespace i2up\Test\v20250123\resource;

use i2up\resource\v20250123\DtoStorage;
use i2up\common\Auth;
                
class DtoStorageTest extends \PHPUnit_Framework_TestCase
 {
    private $dtoStorage;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> dtoStorage = new DtoStorage(new Auth());
    }

    public function testCreateDtoStorage()
    {
        $dtoStorage = $this -> dtoStorage;
        $arr = array(
            'sto_name'=>'aaa',
            'sto_type'=>0,
            'address'=>'',
            'access_key'=>'',
            'secret_key'=>'',
            'part_size'=>0,
            'comment'=>'',
            'user'=>'',
            'pwd'=>'',
            'remote_path'=>'',
            'region'=>'',
            'signature_version'=>'v2',
            'access_mode'=>1,
            'bind_lic_list'=>array(),
            'bucket'=>'',
            'ssl_verify'=>true,
            'gateway_uuid'=>'',
            'region_uuid'=>'',
            'protocol'=>1,
        );
        
        
        $res = $dtoStorage -> createDtoStorage($arr);
        $this->do_assert($res);
    }

    public function testModifyDtoStorage()
    {
        $dtoStorage = $this -> dtoStorage;
        $arr = array(
            'random_str'=>'',
            'sto_name'=>'',
            'access_key'=>'',
            'secret_key'=>'',
            'part_size'=>0,
            'address'=>'',
            'user'=>'',
            'pwd'=>'',
            'comment'=>'',
            'remote_path'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dtoStorage -> modifyDtoStorage($arr);
        $this->do_assert($res);
    }

    public function testDescribeDtoStorage()
    {
        $dtoStorage = $this -> dtoStorage;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dtoStorage -> describeDtoStorage($arr);
        $this->do_assert($res);
    }

    public function testListDtoStorage()
    {
        $dtoStorage = $this -> dtoStorage;
        $arr = array(
            'limit'=>1,
            'search_value'=>'',
            'search_field'=>'',
            'page'=>1,
        );
        
        
        $res = $dtoStorage -> listDtoStorage($arr);
        $this->do_assert($res);
    }

    public function testDeleteDtoStorage()
    {
        $dtoStorage = $this -> dtoStorage;
        $arr = array(
            'sto_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
        );
        
        
        $res = $dtoStorage -> deleteDtoStorage($arr);
        $this->do_assert($res);
    }

    public function testModifyDtoStorageType()
    {
        $dtoStorage = $this -> dtoStorage;
        $arr = array(
            'list'=>array(),
            'type'=>'',
        );
        
        
        $res = $dtoStorage -> modifyDtoStorageType($arr);
        $this->do_assert($res);
    }

    public function testListBuckets()
    {
        $dtoStorage = $this -> dtoStorage;
        $arr = array(
            'sto_uuid'=>'',
            'address'=>'',
            'access_key'=>'',
            'secret_key'=>'',
        );
        
        
        $res = $dtoStorage -> listBuckets($arr);
        $this->do_assert($res);
    }

    public function testCreateBucket()
    {
        $dtoStorage = $this -> dtoStorage;
        $arr = array(
            'sto_uuid'=>'',
            'bucket_name'=>'',
        );
        
        
        $res = $dtoStorage -> createBucket($arr);
        $this->do_assert($res);
    }

    public function testGetDtoStorageStatus()
    {
        $dtoStorage = $this -> dtoStorage;
        $arr = array(
            'uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $dtoStorage -> getDtoStorageStatus($arr);
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