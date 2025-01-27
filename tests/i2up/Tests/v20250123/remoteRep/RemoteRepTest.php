<?php
namespace i2up\Test\v20250123\remoteRep;

use i2up\remoteRep\v20250123\RemoteRep;
use i2up\common\Auth;
                
class RemoteRepTest extends \PHPUnit_Framework_TestCase
 {
    private $remoteRep;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> remoteRep = new RemoteRep(new Auth());
    }

    public function testCreateRemoteRep()
    {
        $remoteRep = $this -> remoteRep;
        $arr = array(
            'rep_name'=>'',
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'rep_type'=>0,
            'wk_pool_uuid'=>'',
            'bk_pool_uuid'=>'',
            'rule_uuid'=>'',
            'file_system'=>'',
            'volume_uuid'=>'',
            'snapshot'=>'',
            'clone_uuid'=>'',
            'sec_snapshot'=>'',
            'sec_clone_uuid'=>'',
            'bkup_policy'=>1,
            'bkup_one_time'=>1,
            'bkup_schedule'=>array(
            'limit'=>1,
            'sched_day'=>array(),
            'sched_every'=>1,
            'sched_time'=>array(),
            'sched_gap_min'=>1,
            'backup_type'=>1,),
            'bkup_window'=>array(
            'sched_time_start'=>'',
            'sched_time_end'=>'',),
            'encrypt_switch'=>0,
            'encrypt'=>'',
            'compress_switch'=>0,
            'compress'=>1,
            'secret_key'=>'',
            'remote_volume_uuid'=>'',
            'band_width'=>'',
        );
        
        
        $res = $remoteRep -> createRemoteRep($arr);
        $this->do_assert($res);
    }

    public function testModifyRemoteRep()
    {
        $remoteRep = $this -> remoteRep;
        $arr = array(
            'rep_name'=>'',
            'wk_uuid'=>'',
            'bk_uuid'=>'',
            'rep_type'=>0,
            'wk_pool_uuid'=>'',
            'bk_pool_uuid'=>'',
            'rule_uuid'=>'',
            'file_system'=>'',
            'volume_uuid'=>'',
            'snapshot'=>'',
            'clone_uuid'=>'',
            'sec_snapshot'=>'',
            'sec_clone_uuid'=>'',
            'bkup_policy'=>1,
            'bkup_one_time'=>1,
            'bkup_schedule'=>array(
            'limit'=>1,
            'sched_day'=>array(),
            'sched_every'=>1,
            'sched_time'=>array(),
            'sched_gap_min'=>1,
            'backup_type'=>1,),
            'bkup_window'=>array(
            'sched_time_start'=>'',
            'sched_time_end'=>'',),
            'random_str'=>'',
            'remote_volume_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $remoteRep -> modifyRemoteRep($arr);
        $this->do_assert($res);
    }

    public function testListRemoteRep()
    {
        $remoteRep = $this -> remoteRep;
        $arr = array(
            'search_field'=>'',
            'limit'=>10,
            'page'=>1,
            'search_value'=>'',
        );
        
        
        $res = $remoteRep -> listRemoteRep($arr);
        $this->do_assert($res);
    }

    public function testDescribeRemoteRep()
    {
        $remoteRep = $this -> remoteRep;
        $arr = array();
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $remoteRep -> describeRemoteRep($arr);
        $this->do_assert($res);
    }

    public function testStartRemoteRep()
    {
        $remoteRep = $this -> remoteRep;
        $arr = array(
            'rep_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $remoteRep -> startRemoteRep($arr);
        $this->do_assert($res);
    }

    public function testStopRemoteRep()
    {
        $remoteRep = $this -> remoteRep;
        $arr = array(
            'rep_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $remoteRep -> stopRemoteRep($arr);
        $this->do_assert($res);
    }

    public function testStartImmediatelyRemoteRep()
    {
        $remoteRep = $this -> remoteRep;
        $arr = array(
            'rep_uuids'=>array(),
            'operate'=>'',
        );
        
        
        $res = $remoteRep -> startImmediatelyRemoteRep($arr);
        $this->do_assert($res);
    }

    public function testDeleteRemoteRep()
    {
        $remoteRep = $this -> remoteRep;
        $arr = array(
            'rep_uuids'=>array(),
            'force'=>1,
            'del_policy'=>1,
        );
        
        
        $res = $remoteRep -> deleteRemoteRep($arr);
        $this->do_assert($res);
    }

    public function testListRemoteRepStatus()
    {
        $remoteRep = $this -> remoteRep;
        $arr = array(
            'rep_uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $remoteRep -> listRemoteRepStatus($arr);
        $this->do_assert($res);
    }

    public function testListStoragePoolRuleList()
    {
        $remoteRep = $this -> remoteRep;
        $arr = array(
            'rep_type'=>1,
            'pool_uuid'=>'',
        );
        
        
        $res = $remoteRep -> listStoragePoolRuleList($arr);
        $this->do_assert($res);
    }

    public function testListFileSystem()
    {
        $remoteRep = $this -> remoteRep;
        $arr = array(
            'pool_uuid'=>'',
        );
        
        
        $res = $remoteRep -> listFileSystem($arr);
        $this->do_assert($res);
    }

    public function testListFirstCloneVolume()
    {
        $remoteRep = $this -> remoteRep;
        $arr = array(
            'volume_uuid'=>'',
        );
        
        
        $res = $remoteRep -> listFirstCloneVolume($arr);
        $this->do_assert($res);
    }

    public function testDescribeCloneVolume()
    {
        $remoteRep = $this -> remoteRep;
        $arr = array(
            'volume_uuid'=>'',
            'snapshot_time'=>'',
        );
        
        
        $res = $remoteRep -> describeCloneVolume($arr);
        $this->do_assert($res);
    }

    public function testFilterStorageNode()
    {
        $remoteRep = $this -> remoteRep;
        $arr = array(
            'uuid'=>'',
        );
        
        
        $res = $remoteRep -> filterStorageNode($arr);
        $this->do_assert($res);
    }

    public function testListFileSnapshot()
    {
        $remoteRep = $this -> remoteRep;
        $arr = array(
            'uuid'=>'',
            'pool_uuid'=>'',
        );
        
        
        $res = $remoteRep -> listFileSnapshot($arr);
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