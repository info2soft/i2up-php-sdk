<?php
namespace i2up\Test\v20240228\resource;

use i2up\resource\v20240228\DedupePool;
use i2up\common\Auth;
                
class DedupePoolTest extends \PHPUnit_Framework_TestCase
 {
    private $dedupePool;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> dedupePool = new DedupePool(new Auth());
    }

    public function testCreateDedupePool()
    {
        $dedupePool = $this -> dedupePool;
        $arr = array(
            'pool_name'=>'',
            'node_uuid'=>'',
            'server_port'=>1,
            'time_out'=>1,
            'block_size'=>1,
            'slice_size'=>1,
            'hash_path'=>array(),
            'index_path'=>array(),
            'data_path'=>array(),
            'compress'=>1,
            'encrypt'=>1,
            'secret_key'=>'',
            'encrypt_switch'=>0,
            'ssd_mode'=>0,
        );
        $res = $dedupePool -> createDedupePool($arr);
        $this->do_assert($res);
    }

    public function testModifyDedupePool()
    {
        $dedupePool = $this -> dedupePool;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'pool_uuid'=>'',
            'random_str'=>'',
            'index_path'=>array(),
            'data_path'=>array(),
        );
        $res = $dedupePool -> modifyDedupePool($arr);
        $this->do_assert($res);
    }

    public function testDescribeDedupePool()
    {
        $dedupePool = $this -> dedupePool;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $dedupePool -> describeDedupePool($arr);
        $this->do_assert($res);
    }

    public function testDedupePoolList()
    {
        $dedupePool = $this -> dedupePool;
        $arr = array();
        $res = $dedupePool -> dedupePoolList($arr);
        $this->do_assert($res);
    }

    public function testDeleteDedupePool()
    {
        $dedupePool = $this -> dedupePool;
        $arr = array(
            'pool_uuids'=>array(),
            'force'=>1,
            'del_data'=>1,
        );
        $res = $dedupePool -> deleteDedupePool($arr);
        $this->do_assert($res);
    }

    public function testListDedupePoolStatus()
    {
        $dedupePool = $this -> dedupePool;
        $arr = array(
            'pool_uuids'=>array(),
            'force_refresh'=>1,
        );
        $res = $dedupePool -> listDedupePoolStatus($arr);
        $this->do_assert($res);
    }

    public function testStartDedupePool()
    {
        $dedupePool = $this -> dedupePool;
        $arr = array(
            'pool_uuids'=>array(),
            'operate'=>'start',
        );
        $res = $dedupePool -> startDedupePool($arr);
        $this->do_assert($res);
    }

    public function testStopDedupePool()
    {
        $dedupePool = $this -> dedupePool;
        $arr = array(
            'pool_uuids'=>array(),
            'operate'=>'stop',
        );
        $res = $dedupePool -> stopDedupePool($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}