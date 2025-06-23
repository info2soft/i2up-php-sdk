<?php
namespace i2up\Test\v20250630\TapeCopy;

use i2up\TapeCopy\v20250630\TapeCopy;
use i2up\common\Auth;
                
class TapeCopyTest extends \PHPUnit_Framework_TestCase
 {
    private $tapeCopy;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> tapeCopy = new TapeCopy(new Auth());
    }

    public function testListTapeCopy()
    {
        $tapeCopy = $this -> tapeCopy;
        $arr = array(
            'page'=>1,
            'limit'=>10,
        );
        
        
        $res = $tapeCopy -> listTapeCopy($arr);
        $this->do_assert($res);
    }

    public function testCreateTapeCopy()
    {
        $tapeCopy = $this -> tapeCopy;
        $arr = array(
            'task_name'=>'',
            'node_uuid'=>'',
            'src_library_sn'=>'',
            'dst_library_sn'=>'',
            'pool_copy'=>0,
            'done_export_tape'=>0,
            'src_pool_uuid'=>'',
            'dst_pool_uuid'=>'',
            'src_slot_info'=>array(),
            'dst_slot_info'=>array(),
            'tape_uuid'=>'',
        );
        
        
        $res = $tapeCopy -> createTapeCopy($arr);
        $this->do_assert($res);
    }

    public function testDescribeTapeCopy()
    {
        $tapeCopy = $this -> tapeCopy;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $tapeCopy -> describeTapeCopy($arr);
        $this->do_assert($res);
    }

    public function testListTapeCopyStatus()
    {
        $tapeCopy = $this -> tapeCopy;
        $arr = array(
            'task_uuids'=>array(),
        );
        
        
        $res = $tapeCopy -> listTapeCopyStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteTapeCopy()
    {
        $tapeCopy = $this -> tapeCopy;
        $arr = array(
            'task_uuids'=>array(),
        );
        
        
        $res = $tapeCopy -> deleteTapeCopy($arr);
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