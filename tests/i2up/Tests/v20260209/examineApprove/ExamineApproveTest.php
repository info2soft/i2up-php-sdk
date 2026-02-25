<?php
namespace i2up\Test\v20260209\examineApprove;

use i2up\examineApprove\v20260209\ExamineApprove;
use i2up\common\Auth;
                
class ExamineApproveTest extends \PHPUnit_Framework_TestCase
 {
    private $examineApprove;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> examineApprove = new ExamineApprove(new Auth());
    }

    public function testCreateExamineApprove()
    {
        $examineApprove = $this -> examineApprove;
        $arr = array(
            'name'=>'',
            'approver_uuid'=>'',
            'rule_uuid'=>'',
            'rule_file'=>'',
            'confirm_email'=>'',
            'uuid'=>'',
        );
        
        
        $res = $examineApprove -> createExamineApprove($arr);
        $this->do_assert($res);
    }

    public function testListExamineApprove()
    {
        $examineApprove = $this -> examineApprove;
        $arr = array(
            'limit'=>15,
            'page'=>1,
            'search_value'=>'',
            'search_field'=>'',
            'where_args'=>array(
            '0'=>array(
            'status'=>'',
            'rule_type'=>1,),),
        );
        
        
        $res = $examineApprove -> listExamineApprove($arr);
        $this->do_assert($res);
    }

    public function testApproveExamineApprove()
    {
        $examineApprove = $this -> examineApprove;
        $arr = array(
            'uuids'=>array(),
            'operate'=>'',
            'approve_result'=>'',
            'approve_time'=>'',
            'comment'=>'',
        );
        
        
        $res = $examineApprove -> approveExamineApprove($arr);
        $this->do_assert($res);
    }

    public function testEnableExamineApprove()
    {
        $examineApprove = $this -> examineApprove;
        $arr = array(
            'uuids'=>array(),
            'operate'=>'',
            'approve_result'=>'',
            'approve_time'=>'',
            'comment'=>'',
        );
        
        
        $res = $examineApprove -> enableExamineApprove($arr);
        $this->do_assert($res);
    }

    public function testReceiptExamineApprove()
    {
        $examineApprove = $this -> examineApprove;
        $arr = array(
            'uuids'=>array(),
            'operate'=>'',
            'approve_result'=>'',
            'approve_time'=>'',
            'comment'=>'',
        );
        
        
        $res = $examineApprove -> receiptExamineApprove($arr);
        $this->do_assert($res);
    }

    public function testDeleteExamineApprove()
    {
        $examineApprove = $this -> examineApprove;
        $arr = array(
            'uuids'=>array(),
            'operate'=>'',
            'approve_result'=>'',
            'approve_time'=>'',
            'comment'=>'',
        );
        
        
        $res = $examineApprove -> deleteExamineApprove($arr);
        $this->do_assert($res);
    }

    public function testListExamineApproveApproverList()
    {
        $examineApprove = $this -> examineApprove;
        $arr = array();
        
        
        $res = $examineApprove -> listExamineApproveApproverList($arr);
        $this->do_assert($res);
    }

    public function testExamineApproveImport()
    {
        $examineApprove = $this -> examineApprove;
        $arr = array(
            'examine_approve_file'=>'',
            'uuid'=>'',
            'name'=>'',
        );
        
        
        $res = $examineApprove -> examineApproveImport($arr);
        $this->do_assert($res);
    }

    public function testListExamineApproveFileInfo()
    {
        $examineApprove = $this -> examineApprove;
        $arr = array(
            'uuid'=>'',
        );
        
        
        $res = $examineApprove -> listExamineApproveFileInfo($arr);
        $this->do_assert($res);
    }

    public function testExamineApproveDownlowdFile()
    {
        $examineApprove = $this -> examineApprove;
        $arr = array(
            'uuid'=>'',
            'column'=>'',
        );
        
        
        $res = $examineApprove -> examineApproveDownlowdFile($arr);
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