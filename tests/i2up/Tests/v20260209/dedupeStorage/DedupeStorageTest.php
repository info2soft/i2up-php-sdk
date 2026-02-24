<?php
namespace i2up\Test\v20260209\dedupeStorage;

use i2up\dedupeStorage\v20260209\DedupeStorage;
use i2up\common\Auth;
                
class DedupeStorageTest extends \PHPUnit_Framework_TestCase
 {
    private $dedupeStorage;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> dedupeStorage = new DedupeStorage(new Auth());
    }

    public function testCreateDedupeStorage()
    {
        $dedupeStorage = $this -> dedupeStorage;
        $arr = array(
            'sto_name'=>'',
            'bk_uuid'=>'',
            'data_addr'=>'',
            'meta_server_port'=>1,
            'block_server_port'=>1,
            'hash_path'=>'',
            'block_path'=>'',
            'recycle_strategy'=>array(
            'day'=>'',
            'every'=>1,
            'time'=>'00:00',),
            'description'=>'',
            'sto_type'=>1,
            'dto_sto_uuid'=>'',
            'bucket_uuid'=>'',
            'meta_server_type'=>1,
            'dedupe_type'=>1,
            'cluster_uuid'=>'',
            'bk_server_list'=>array(
            '0'=>array(
            'node_uuid'=>'',
            'meta_server'=>1,
            'addr'=>'',
            'fp_server'=>1,
            'gateway_server'=>1,),),
        );
        
        
        $res = $dedupeStorage -> createDedupeStorage($arr);
        $this->do_assert($res);
    }

    public function testModifyDedupeStorage()
    {
        $dedupeStorage = $this -> dedupeStorage;
        $arr = array(
            'sto_name'=>'',
            'bk_uuid'=>'',
            'data_addr'=>'',
            'meta_server_port'=>1,
            'fp_server_port'=>1,
            'block_server_port'=>1,
            'hash_path'=>'',
            'block_path'=>'',
            'recycle_strategy'=>array(
            'day'=>'',
            'every'=>1,
            'time'=>'00:00',),
            'description'=>'',
            'random_str'=>'',
            'sto_uuid'=>'',
            'sto_type'=>1,
            'dto_sto_uuid'=>'',
            'bucket_uuid'=>'',
            'meta_server_type'=>1,
            'dedupe_type'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dedupeStorage -> modifyDedupeStorage($arr);
        $this->do_assert($res);
    }

    public function testModifyDedupeStorageService()
    {
        $dedupeStorage = $this -> dedupeStorage;
        $arr = array(
            'node_uuid'=>'',
            'type'=>1,
            'operation'=>'',
            'addr'=>'',
            'force'=>1,
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dedupeStorage -> modifyDedupeStorageService($arr);
        $this->do_assert($res);
    }

    public function testDeleteDedupeStorage()
    {
        $dedupeStorage = $this -> dedupeStorage;
        $arr = array(
            'sto_uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $dedupeStorage -> deleteDedupeStorage($arr);
        $this->do_assert($res);
    }

    public function testListDedupeStorage()
    {
        $dedupeStorage = $this -> dedupeStorage;
        $arr = array(
            'page'=>1,
            'limit'=>1,
            'status'=>'',
            'search_field'=>'',
            'search_value'=>'',
            'where_args'=>array(
            'sto_type'=>1,
            'dedupe_type'=>1,),
        );
        
        
        $res = $dedupeStorage -> listDedupeStorage($arr);
        $this->do_assert($res);
    }

    public function testDescribeDedupeStorage()
    {
        $dedupeStorage = $this -> dedupeStorage;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dedupeStorage -> describeDedupeStorage($arr);
        $this->do_assert($res);
    }

    public function testListDedupeStorageStatus()
    {
        $dedupeStorage = $this -> dedupeStorage;
        $arr = array(
            'sto_uuids'=>array(),
            'force_refresh'=>0,
        );
        
        
        $res = $dedupeStorage -> listDedupeStorageStatus($arr);
        $this->do_assert($res);
    }

    public function testRecoverSpaceDedupeStorage()
    {
        $dedupeStorage = $this -> dedupeStorage;
        $arr = array(
            'sto_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $dedupeStorage -> recoverSpaceDedupeStorage($arr);
        $this->do_assert($res);
    }

    public function testListBkSvrUsedPorts()
    {
        $dedupeStorage = $this -> dedupeStorage;
        $arr = array(
            'bk_uuid'=>'',
        );
        
        
        $res = $dedupeStorage -> listBkSvrUsedPorts($arr);
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