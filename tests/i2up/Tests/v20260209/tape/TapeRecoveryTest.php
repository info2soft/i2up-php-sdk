<?php
namespace i2up\Test\v20260209\tape;

use i2up\tape\v20260209\TapeRecovery;
use i2up\common\Auth;
                
class TapeRecoveryTest extends \PHPUnit_Framework_TestCase
 {
    private $tapeRecovery;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> tapeRecovery = new TapeRecovery(new Auth());
    }

    public function testListTapeRecovery()
    {
        $tapeRecovery = $this -> tapeRecovery;
        $arr = array(
            'page'=>1,
            'limit'=>10,
        );
        
        
        $res = $tapeRecovery -> listTapeRecovery($arr);
        $this->do_assert($res);
    }

    public function testCreateTapeRecovery()
    {
        $tapeRecovery = $this -> tapeRecovery;
        $arr = array(
            'node_uuid'=>'',
            'library_sn'=>'',
            'slot_index'=>'',
            'slot_barcode'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'bk_index'=>'',
            'bk_path'=>'',
            'bk_files'=>array(
            '0'=>array(
            'file_path_name'=>'',),),
            'rec_path'=>'',
            'rule_name'=>'',
            'recover_all'=>0,
            'bk_data_type'=>1,
            'pool_uuid'=>'',
            'volume_uuid'=>'',
            'tape_pool_uuid'=>'',
            'tape_uuid'=>'',
            'auto_start'=>1,
            'appointment_time'=>1664248414,
        );
        
        
        $res = $tapeRecovery -> createTapeRecovery($arr);
        $this->do_assert($res);
    }

    public function testDescribeTapeRecovery()
    {
        $tapeRecovery = $this -> tapeRecovery;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $tapeRecovery -> describeTapeRecovery($arr);
        $this->do_assert($res);
    }

    public function testDeleteTapeRecovery()
    {
        $tapeRecovery = $this -> tapeRecovery;
        $arr = array(
            'rule_uuids'=>array(),
        );
        
        
        $res = $tapeRecovery -> deleteTapeRecovery($arr);
        $this->do_assert($res);
    }

    public function testListTapeRecoveryStatus()
    {
        $tapeRecovery = $this -> tapeRecovery;
        $arr = array(
            'rule_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $tapeRecovery -> listTapeRecoveryStatus($arr);
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