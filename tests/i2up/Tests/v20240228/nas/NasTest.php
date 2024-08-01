<?php
namespace i2up\Test\v20240228\nas;

use i2up\nas\v20240228\Nas;
use i2up\common\Auth;
                
class NasTest extends \PHPUnit_Framework_TestCase
 {
    private $nas;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> nas = new Nas(new Auth());
    }

    public function testCreate()
    {
        $nas = $this -> nas;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'compress' => 0,
            'secret_key' => '',
            'wk_list' => array(
                '0' => array(
                    'wk_uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
                    'wk_path' => 'E:\\nas\\',),),
            'type' => 0,
            'sync_path' => '',
            'encrypt_switch' => 0,
            'band_width' => '',
            'bk_uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'bk_path' => 'E:\\t\\',
            'sync_uuid' => '',
            'nas_name' => 'test2',
            'cmp_schedule' => array(),
            'cmp_file_check' => 0,
            'cmp_switch' => 0,
            'file_type_filter_switch' => 1,
            'file_type_filter' => '',
            'thread_num' => 1,
            'mirr_sync_attr' => 1,
            'cmp_sync_file' => 1,
            'runtime_range' => '12345*09:00-18:00,06*10:00-14:00',
            'runtime_switch' => 1,
            'filter_delete' => 0,
            'cmp_limit' => '',
            'data_ip_uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'sync_data_ip_uuid' => '67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'oph_path' => 'E:\\test4\\',
            'oph_policy' => 0,
            'dir_type_filter' => '',
            'dir_type_filter_switch' => 1,
            'bk_path_policy' => 1,
            'bk_file_crypt' => 0,
            'encrypt' => 0,
            'compress_switch' => 0,
            'nas_type' => 1,
            'traversing_sync' => 1,
        );
        $res = $nas -> create($arr);
        $this->do_assert($res);
    }

    public function testDescribe()
    {
        $nas = $this -> nas;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $nas -> describe($arr);
        $this->do_assert($res);
    }

    public function testModify()
    {
        $nas = $this -> nas;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
            'random_str'=>'11111111-1111-1111-1111-111111111111',
        );
        $res = $nas -> modify($arr);
        $this->do_assert($res);
    }

    public function testListNas()
    {
        $nas = $this -> nas;
        $arr = array(
            'limit'=>10,
            'page'=>1,
        );
        $res = $nas -> listNas($arr);
        $this->do_assert($res);
    }

    public function testListNasStatus()
    {
        $nas = $this -> nas;
        $arr = array(
            'nas_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
            'force_refresh'=>1,
        );
        $res = $nas -> listNasStatus($arr);
        $this->do_assert($res);
    }

    public function testStartNas()
    {
        $nas = $this -> nas;
        $arr = array(
            'nas_uuids'=>array(
                '0'=>-111100003333,
            ),
            'operate'=>'start',
        );
        $res = $nas -> startNas($arr);
        $this->do_assert($res);
    }

    public function testStopNas()
    {
        $nas = $this -> nas;
        $arr = array(
            'nas_uuids'=>array(
                '0'=>-111100003333,
            ),
            'operate'=>'stop',
        );
        $res = $nas -> stopNas($arr);
        $this->do_assert($res);
    }

    public function testDelete()
    {
        $nas = $this -> nas;
        $arr = array(
            'nas_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111',
            ),
            'force'=>1,
        );
        $res = $nas -> delete($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}