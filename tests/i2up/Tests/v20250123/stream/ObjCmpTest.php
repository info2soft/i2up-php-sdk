<?php
namespace i2up\Test\v20250123\stream;

use i2up\stream\v20250123\ObjCmp;
use i2up\common\Auth;
                
class ObjCmpTest extends \PHPUnit_Framework_TestCase
 {
    private $objCmp;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> objCmp = new ObjCmp(new Auth());
    }

    public function testCreateDatacheckObjCmp()
    {
        $objCmp = $this -> objCmp;
        $arr = array(
            'src_db_auth_uuid'=>'',
            'tgt_db_auth_uuid'=>'',
            'db_user_map'=>"{'src_user':'dst_user'}",
            'config'=>array(
            'one_task'=>'immediate',),
            'policies'=>'',
            'policy_type'=>'periodic',
            'one_time'=>'2019-05-27 16:07:08',
            'repair'=>1,
            'obj_cmp_name'=>'test',
            'src_db_uuid'=>'4CA773F4-36E3-A091-122C-ACDFB2112C21',
            'tgt_db_uuid'=>'40405FD3-DB86-DC8A-81C9-C137B6FDECE5',
            'cal_table_recoders'=>1,
            'cmp_type'=>'user',
            'rule_uuid'=>'751A03F5-C97D-645B-82B2-316A5D198528',
            'obj_cmp_type'=>'',
        );
        
        
        $res = $objCmp -> createDatacheckObjCmp($arr);
        $this->do_assert($res);
    }

    public function testDeleteDatacheckObjCmp()
    {
        $objCmp = $this -> objCmp;
        $arr = array(
            'uuids'=>array(),
            'force'=>false,
        );
        
        
        $res = $objCmp -> deleteDatacheckObjCmp($arr);
        $this->do_assert($res);
    }

    public function testStopObjCmp()
    {
        $objCmp = $this -> objCmp;
        $arr = array(
            'operate'=>'',
            'obj_cmp_uuids'=>array(),
        );
        
        
        $res = $objCmp -> stopObjCmp($arr);
        $this->do_assert($res);
    }

    public function testRestartObjCmp()
    {
        $objCmp = $this -> objCmp;
        $arr = array(
            'operate'=>'',
            'obj_cmp_uuids'=>array(),
        );
        
        
        $res = $objCmp -> restartObjCmp($arr);
        $this->do_assert($res);
    }

    public function testCmpStopTimeObjCmp()
    {
        $objCmp = $this -> objCmp;
        $arr = array(
            'operate'=>'',
            'obj_cmp_uuids'=>array(),
        );
        
        
        $res = $objCmp -> cmpStopTimeObjCmp($arr);
        $this->do_assert($res);
    }

    public function testCmpResumeTimeObjCmp()
    {
        $objCmp = $this -> objCmp;
        $arr = array(
            'operate'=>'',
            'obj_cmp_uuids'=>array(),
        );
        
        
        $res = $objCmp -> cmpResumeTimeObjCmp($arr);
        $this->do_assert($res);
    }

    public function testCmpImmediateObjCmp()
    {
        $objCmp = $this -> objCmp;
        $arr = array(
            'operate'=>'',
            'obj_cmp_uuids'=>array(),
        );
        
        
        $res = $objCmp -> cmpImmediateObjCmp($arr);
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