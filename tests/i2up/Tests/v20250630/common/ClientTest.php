<?php
namespace i2up\Test\v20250630\common;

use i2up\common\v20250630\Client;
use i2up\common\Auth;
                
class ClientTest extends \PHPUnit_Framework_TestCase
 {
    private $client;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> client = new Client(new Auth());
    }

    public function testListRestRpcCcip()
    {
        $client = $this -> client;
        $arr = array(
            'method'=>'',
            'uuid'=>'',
            'cc_uuid'=>'',
        );
        
        
        $res = $client -> listRestRpcCcip($arr);
        $this->do_assert($res);
    }

    public function testUpdateTapeMedia()
    {
        $client = $this -> client;
        $arr = array(
            'slot_barcode'=>'',
            'slot_flag'=>'',
            'pool_name'=>'',
            'last_write'=>'',
            'move_times'=>1,
            'slot_expiretime'=>'',
            'slot_index'=>1,
            'slot_mtype'=>'',
            'slot_tapename'=>'',
            'slot_tapesequence'=>'',
            'status'=>1,
            'write_protected'=>1,
        );
        
        
        $res = $client -> updateTapeMedia($arr);
        $this->do_assert($res);
    }

    public function testRegisterNodeFromNode()
    {
        $client = $this -> client;
        $arr = array(
            'node_name'=>'',
            'os_type'=>1,
            'os_user'=>'',
            'i2id'=>'',
            'cc_ip'=>'',
            'config_addr'=>'',
            'root'=>'',
            'disk_limit'=>'',
            'mem_limit'=>'',
            'disk_free_space_limit'=>'',
            'log_path'=>'',
            'cache_path'=>'',
            'data_addr'=>'',
        );
        
        
        $res = $client -> registerNodeFromNode($arr);
        $this->do_assert($res);
    }

    public function testUpdateSlaveNode()
    {
        $client = $this -> client;
        $arr = array(
            'config'=>'',
            'cc_uuid'=>'',
            'aes_key'=>'',
            'aes_iv'=>'',
        );
        
        
        $res = $client -> updateSlaveNode($arr);
        $this->do_assert($res);
    }

    public function testAddRestRpcresult()
    {
        $client = $this -> client;
        $arr = array(
            'type'=>'result',
            'code'=>1,
            'ip'=>'',
            'cc_uuid'=>'',
        );
        
        
        $res = $client -> addRestRpcresult($arr);
        $this->do_assert($res);
    }

    public function testAddRestRpcHa()
    {
        $client = $this -> client;
        $arr = array(
            'rule_uuid'=>'',
            'failed_node_uuid'=>'',
            'new_node_uuid'=>'',
            'cc_uuid'=>'',
        );
        
        
        $res = $client -> addRestRpcHa($arr);
        $this->do_assert($res);
    }

    public function testAddRestRpcCluster()
    {
        $client = $this -> client;
        $arr = array(
            'cluster_uuid'=>'',
            'center_node_ip'=>'',
        );
        
        
        $res = $client -> addRestRpcCluster($arr);
        $this->do_assert($res);
    }

    public function testCreateCompareResult()
    {
        $client = $this -> client;
        $arr = array(
            'uuid'=>'65DA3916-AF53-CE70-0B47-A142414AA140',
            'result_uuid'=>'25DA3916-AF13-CE70-0B47-B142414AA142',
            'result'=>array(
            'code'=>'0',
            'time'=>'10',
            'files'=>'100',
            'bytes'=>'1111111',
            'missing'=>'2',
            'diff'=>'48',
            'equal'=>'50',
            'erro'=>'',),
            'result_type'=>'rep',
            'cc_uuid'=>'',
        );
        
        
        $res = $client -> createCompareResult($arr);
        $this->do_assert($res);
    }

    public function testUploadCompareDiffDetail()
    {
        $client = $this -> client;
        $arr = array(
            'files'=>array(),
            'missing_files'=>array(
            '0'=>'file',
            '1'=>'file',),
            'diff_files'=>array(),
            'uuid'=>'',
            'cc_uuid'=>'',
            'is_new'=>0,
        );
        
        
        $res = $client -> uploadCompareDiffDetail($arr);
        $this->do_assert($res);
    }

    public function testCollectCompareResult()
    {
        $client = $this -> client;
        $arr = array(
            'code'=>'',
            'time'=>'1632453814-1632453816',
            'files'=>'',
            'bytes'=>'',
            'missing'=>'',
            'diff'=>'',
            'erro'=>'',
            'equal'=>'',
            'task_uuid'=>'',
            'cc_uuid'=>'',
            'send_bytes'=>'',
        );
        
        
        $res = $client -> collectCompareResult($arr);
        $this->do_assert($res);
    }

    public function testModifyEcs()
    {
        $client = $this -> client;
        $arr = array(
            'restored_uuid'=>'',
            'ecs_id'=>'',
            'code'=>1,
        );
        
        
        $res = $client -> modifyEcs($arr);
        $this->do_assert($res);
    }

    public function testGetVirtualPlatforms()
    {
        $client = $this -> client;
        $arr = array(
            'npsvr_uuid'=>'',
            'cc_uuid'=>'',
        );
        
        
        $res = $client -> getVirtualPlatforms($arr);
        $this->do_assert($res);
    }

    public function testGetVirtualPlatformRules()
    {
        $client = $this -> client;
        $arr = array(
            'vp_uuids'=>array(
            '0'=>'3C334EF3',
            '1'=>'3C334EF3',),
            'config_addr'=>array(
            '0'=>array(
            ''=>'',),),
            'cc_uuid'=>'',
        );
        
        
        $res = $client -> getVirtualPlatformRules($arr);
        $this->do_assert($res);
    }

    public function testGetDtoStorageList()
    {
        $client = $this -> client;
        $arr = array(
            'cc_uuid'=>'',
        );
        
        
        $res = $client -> getDtoStorageList($arr);
        $this->do_assert($res);
    }

    public function testGetAllActiveRules()
    {
        $client = $this -> client;
        $arr = array(
            'cc_uuid'=>'',
            'rule_uuids'=>array(),
        );
        
        
        $res = $client -> getAllActiveRules($arr);
        $this->do_assert($res);
    }

    public function testUploadHdfsCompareResult()
    {
        $client = $this -> client;
        $arr = array(
            'cc_uuid'=>'',
            'policy_uuid'=>'',
            'session_uuid'=>'',
            'comparison_results'=>array(
            '0'=>array(
            'diff_name'=>'',
            'diff_name_type'=>'',
            'result'=>'',
            'existence_state'=>'',),),
            'statistical_result'=>array(
            'start_time'=>'',
            'end_time'=>'',
            'comparison_count'=>'',
            'difference_count'=>'',),
            'comparison_detail_results'=>array(
            '0'=>array(
            'diff_name'=>'',
            'comparison_term'=>'',
            'source'=>'',
            'destination'=>'',),),
        );
        
        
        $res = $client -> uploadHdfsCompareResult($arr);
        $this->do_assert($res);
    }

    public function testCfsNodeMove()
    {
        $client = $this -> client;
        $arr = array(
            'cfs_uuid'=>'',
            'fs_id'=>'',
            'src_server_id'=>'',
            'dst_server_id'=>'',
        );
        
        
        $res = $client -> cfsNodeMove($arr);
        $this->do_assert($res);
    }

    public function testCfsStopRule()
    {
        $client = $this -> client;
        $arr = array(
            'cfs_uuid'=>'',
            'fs_id'=>'',
            'src_server_id'=>'',
            'dst_server_id'=>'',
        );
        
        
        $res = $client -> cfsStopRule($arr);
        $this->do_assert($res);
    }

    public function testListSlotTapeName()
    {
        $client = $this -> client;
        $arr = array();
        
        
        $res = $client -> listSlotTapeName($arr);
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