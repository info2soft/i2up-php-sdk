<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\DtoStorage;
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
            'sto_name'=>'',
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
            'ssl_verify'=>1,
        );
        $res = $dtoStorage -> createDtoStorage($arr);
        $this->do_assert($res);
    }

    public function testModifyDtoStorage()
    {
        $dtoStorage = $this -> dtoStorage;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
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
        $res = $dtoStorage -> modifyDtoStorage($arr);
        $this->do_assert($res);
    }

    public function testDescribeDtoStorage()
    {
        $dtoStorage = $this -> dtoStorage;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
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
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
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
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}