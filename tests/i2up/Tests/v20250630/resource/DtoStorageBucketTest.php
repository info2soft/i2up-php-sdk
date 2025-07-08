<?php
namespace i2up\Test\v20250630\resource;

use i2up\resource\v20250630\DtoStorageBucket;
use i2up\common\Auth;
                
class DtoStorageBucketTest extends \PHPUnit_Framework_TestCase
 {
    private $dtoStorageBucket;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> dtoStorageBucket = new DtoStorageBucket(new Auth());
    }

    public function testCreateDtoStorageBucket()
    {
        $dtoStorageBucket = $this -> dtoStorageBucket;
        $arr = array(
            'sto_uuid'=>'',
            'bucket_name'=>'',
            'quota_size'=>'',
        );
        
        
        $res = $dtoStorageBucket -> createDtoStorageBucket($arr);
        $this->do_assert($res);
    }

    public function testModifyDtoStorageBucket()
    {
        $dtoStorageBucket = $this -> dtoStorageBucket;
        $arr = array(
            'quota_size'=>'',
            'bucket_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dtoStorageBucket -> modifyDtoStorageBucket($arr);
        $this->do_assert($res);
    }

    public function testDescribeDtoStorageBucket()
    {
        $dtoStorageBucket = $this -> dtoStorageBucket;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dtoStorageBucket -> describeDtoStorageBucket($arr);
        $this->do_assert($res);
    }

    public function testListDtoStorageBucket()
    {
        $dtoStorageBucket = $this -> dtoStorageBucket;
        $arr = array(
            'limit'=>1,
            'search_value'=>'',
            'search_field'=>'',
            'page'=>10,
        );
        
        
        $res = $dtoStorageBucket -> listDtoStorageBucket($arr);
        $this->do_assert($res);
    }

    public function testDeleteDtoStorageBucket()
    {
        $dtoStorageBucket = $this -> dtoStorageBucket;
        $arr = array(
            'bucket_uuids'=>array(
            '0'=>'11111111-1111-1111-1111-111111111111',),
        );
        
        
        $res = $dtoStorageBucket -> deleteDtoStorageBucket($arr);
        $this->do_assert($res);
    }

    public function testImportDtoStorageBucket()
    {
        $dtoStorageBucket = $this -> dtoStorageBucket;
        $arr = array(
            'bucket_names'=>array(),
            'sto_uuid'=>'',
        );
        
        
        $res = $dtoStorageBucket -> importDtoStorageBucket($arr);
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