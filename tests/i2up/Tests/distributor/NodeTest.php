<?php
namespace i2up\Test\distributor;

use i2up\distributor\v20200721\Node;
use i2up\common\Auth;

class NodeTest extends \PHPUnit_Framework_TestCase
{
    private $node;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> node = new Node(new Auth());
    }

    public function testReadme()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuid'=>'278D0E2C-2156-3F7F-D75F-2628E46F6B35',
            'node_name'=>'',
            'node_version'=>'4.0-19110518',
            'log_day'=>10,
            'os_type'=>0,
            'group_uuid'=>'',
            'group_name'=>'',
            'user_uuid'=>'278D0E2C-2156-3F7F-D75F-2628E46F6B35',
            'username'=>'xxx',
            'system_time'=>1577160228,
            'create_time'=>1577160228,
            'node_type'=>1,
            'node_role'=>1,
            'node_addr'=>array(
                '0'=>array(
                    'ip'=>'172.20.2.75',
                    'port'=>1234,),),
            'parent_addr'=>array(
                '0'=>array(
                    'ip'=>'172.20.2.75',
                    'port'=>1234,
                    'ip_config'=>array(
                        'target_id'=>'',
                        'target_pwd'=>'',
                        'market_type'=>'',
                        'resend_port'=>1,
                        'gw'=>1,
                        'i2'=>1,),),),
            'work_time'=>'00:00:00|23:59:59',
            'target_max'=>100,
            'node_number'=>2,
            'send_bytes'=>2,
            'update_time'=>1577160228,
            'last_time_lag'=>1577160228,
            'status'=>'WARN',
            'res_monitor'=>array(
                'cpu_transit'=>'',
                'memory_transit'=>'',
                'process_transit'=>'',
                'cpu_server'=>'',
                'memory_server'=>'',
                'process_server'=>'',
                'cpu_client'=>'',
                'memory_client'=>'',
                'process_client'=>'',),
            'write_block'=>'',
            'last_recv_file'=>'',
            'last_recv_time'=>'',
            'last_send_file'=>'',
            'last_send_time'=>'',
            'send_files'=>array(
                '0'=>array(
                    'market_type'=>'港交所行情',
                    'group'=>0,
                    'enable'=>0,
                    'dir'=>0,
                    'recursive'=>0,
                    'path'=>'C:\HGInfo\HGHQ.DBF',
                    'filter_by_fn'=>'',
                    'event_trigger'=>0,
                    'time_check'=>0,
                    'checksum_func'=>'block',
                    'scan'=>200,
                    'compress'=>4,
                    'filter_by_ft'=>'0|0',
                    'work_time'=>'00-00-00|23-59-59',
                    'play'=>0,),),
            'recv_files'=>array(
                '0'=>array(
                    'market_type'=>'港交所行情',
                    'path'=>'',
                    'timeout'=>0,
                    'chk_tm_am'=>'09-00-00|11-30-00',
                    'chk_tm_pm'=>'13-00-00|15-30-00',
                    'record'=>0,
                    'group'=>1,
                    'enable'=>0,
                    'guard'=>0,
                    'watch'=>0,),),
            'send_status'=>array(
                '0'=>array(
                    'market_type'=>'xxxx',
                    'file_name'=>'',
                    'file_size'=>0,
                    'update_time'=>1577160228,
                    'send_bytes'=>0,),),
            'recv_status'=>array(
                '0'=>array(
                    'market_type'=>'xxxx',
                    'file_name'=>'',
                    'file_size'=>0,
                    'update_time'=>1577160228,
                    'send_bytes'=>0,),),
            'recv_package'=>1,
            'send_package'=>1,
            'send_speed'=>1,
            'recv_bytes'=>1,
            'recv_bytes_last'=>1,
            'protocol'=>'',
            'version_id'=>'',
            'sender_id'=>'',
            'heart_beat'=>1,
            'auth_enable'=>1,
            'auth_id'=>'',
            'compress'=>1,
            'warn_config'=>array(
                '0'=>array(
                    'market_type'=>'',
                    'file_name'=>'',
                    'warn_tick'=>1,
                    'error_tick'=>1,
                    'check_begin'=>'',
                    'check_end'=>'',
                    'check_begin_pm'=>'',
                    'check_end_pm'=>'',
                    'check_node_number'=>1,
                    'traffic_begin'=>'',
                    'traffic_end'=>'',
                    'traffic_begin_pm'=>'',
                    'traffic_end_pm'=>'',
                    'traffic_upper'=>'',
                    'traffic_lower'=>'',
                    'traffic_upper_pm'=>'',
                    'traffic_lower_pm'=>'',
                    'file_size'=>1,
                    'send_bytes'=>1,
                    'system_time'=>1,
                    'update_time'=>1,
                    'warn_level'=>'',),),
        );
        $res = $node -> readme($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testRegister()
    {
        $node = $this -> node;
        $arr = array(
            'common'=>array(
                'node_uuid'=>'278D0E2C-2156-3F7F-D75F-2628E46F6B35',
                'node_name'=>'node1',
                'node_version'=>'4.0-19110518',
                'log_day'=>10,
                'os_type'=>0,
                'group_uuid'=>'',
                'system_time'=>1577160228,),
            'node_list'=>array(
                '0'=>array(
                    'node_type'=>1,
                    'node_role'=>1,
                    'node_addr'=>array(
                        '0'=>array(
                            'ip'=>'172.20.2.75',
                            'port'=>1234,),),
                    'parent_addr'=>array(
                        '0'=>array(
                            'ip'=>'172.20.2.75',
                            'port'=>1234,
                            'ip_config'=>array(
                                'target_id'=>'',
                                'target_pwd'=>'',
                                'market_type'=>'6666',
                                'resend_port'=>-1,
                                'gw'=>1,
                                'i2'=>0,),),),
                    'work_time'=>'00:00:00|23:59:59',
                    'target_max'=>100,
                    'write_block'=>'',
                    'send_files'=>array(
                        '0'=>array(
                            'market_type'=>'港交所行情',
                            'group'=>0,
                            'enable'=>0,
                            'dir'=>0,
                            'recursive'=>0,
                            'path'=>'C:\HGInfo\HGHQ.DBF',
                            'filter_by_fn'=>'',
                            'event_trigger'=>0,
                            'time_check'=>0,
                            'checksum_func'=>'block',
                            'scan'=>200,
                            'compress'=>4,
                            'filter_by_ft'=>'0|0',
                            'work_time'=>'00-00-00|23-59-59',
                            'play'=>0,),),
                    'recv_files'=>array(
                        '0'=>array(
                            'market_type'=>'港交所行情',
                            'path'=>'',
                            'timeout'=>0,
                            'chk_tm_am'=>'09-00-00|11-30-00',
                            'chk_tm_pm'=>'13-00-00|15-30-00',
                            'record'=>0,
                            'group'=>1,
                            'enable'=>0,
                            'guard'=>0,
                            'watch'=>0,),),
                    'protocol'=>'binary',
                    'version_id'=>'1.01',
                    'sender_id'=>'0',
                    'heart_beat'=>10,
                    'auth_enable'=>0,
                    'auth_id'=>'0',
                    'compress'=>0,),),
        );
        $res = $node -> register($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUpdateStatus()
    {
        $node = $this -> node;
        $arr = array(
            'node_type'=>1,
            'node_version'=>'4.0-19110518',
            'system_time'=>1577160228,
            'last_time_lag'=>1577160228,
            'node_number'=>2,
            'send_bytes'=>317146,
            'res_monitor'=>array(
                'cpu_transit'=>'0%',
                'memory_transit'=>'8032KB',
                'process_transit'=>0,
                'cpu_server'=>'0%',
                'memory_server'=>'7448KB',
                'process_server'=>0,
                'cpu_client'=>'0%',
                'memory_client'=>'0KB',
                'process_client'=>0,),
            'last_recv_file'=>'E:\test3\namelst-2019-01-28_05-07-28',
            'last_recv_time'=>1577160221,
            'last_send_file'=>'E:\test3\namelst-2019-01-28_05-07-28',
            'last_send_time'=>1577160219,
            'send_status'=>array(
                '0'=>array(
                    'market_type'=>'港交所行情',
                    'file_name'=>'C:\\HGInfo\\HGXXN.DBF',
                    'file_size'=>123,
                    'update_time'=>1577160228,
                    'send_bytes'=>3567,),),
            'recv_status'=>array(
                '0'=>array(
                    'market_type'=>'港交所行情',
                    'file_name'=>'C:\\HGInfo\\HGXXN.DBF',
                    'file_size'=>123,
                    'update_time'=>1577160228,
                    'send_bytes'=>3567,),),
            'recv_package'=>2,
            'send_package'=>3,
            'send_speed'=>4,
            'recv_bytes'=>5,
            'recv_bytes_last'=>6,
            'topography'=>array(
                'node_uuid'=>'278D0E2C-2156-3F7F-D75F-2628E46F6B35',
                'byte_receive'=>0,
                'byte_send'=>47040,
                'consume'=>0,
                'current_seq'=>0,
                'current_time'=>'20201111222222556',
                'market_time'=>'20201111222222664',
                'last_market_time'=>'20201111222222664',
                'last_seq'=>0,
                'pkt_receive'=>34306,
                'pkt_send'=>0,
                'node_list'=>array(
                    '0'=>array(
                        'byte_send'=>0,
                        'ip'=>'172.20.2.76',
                        'port'=>41438,
                        'speed'=>3,
                        'target_id'=>'66661111',
                        'node_uuid'=>'',),),),
        );
        $res = $node -> updateStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNode()
    {
        $node = $this -> node;
        $arr = array(
            'limit'=>1,
            'page'=>1,
            'node_type'=>1,
            'node_role'=>1,
            'status'=>'',
        );
        $res = $node -> listNode($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListNodeStatus()
    {
        $node = $this -> node;
        $arr = array(
            'node_uuids'=>array(
                '0'=>'Deb3Ae8d-9A26-9cCD-663E-8f2DC3Cdcd7E',),
            'node_type'=>1,
        );
        $res = $node -> listNodeStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeNode()
    {
        $node = $this -> node;
        $arr = array(
            'node_type'=>'',
        );
        $res = $node -> describeNode($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testFileConfig()
    {
        $node = $this -> node;
        $arr = array(
            'send_files'=>array(
                '0'=>array(
                    'market_type'=>'港交所行情',
                    'group'=>0,
                    'enable'=>0,
                    'dir'=>0,
                    'recursive'=>0,
                    'path'=>'C:\HGInfo\HGHQ.DBF',
                    'filter_by_fn'=>'',
                    'event_trigger'=>0,
                    'time_check'=>0,
                    'checksum_func'=>'block',
                    'scan'=>200,
                    'compress'=>4,
                    'filter_by_ft'=>'0|0',
                    'work_time'=>'00-00-00|23-59-59',
                    'play'=>0,),),
            'recv_files'=>array(
                '0'=>array(
                    'market_type'=>'港交所行情',
                    'path'=>'',
                    'timeout'=>0,
                    'chk_tm_am'=>'09-00-00|11-30-00',
                    'chk_tm_pm'=>'13-00-00|15-30-00',
                    'record'=>0,
                    'group'=>1,
                    'enable'=>0,
                    'guard'=>0,
                    'watch'=>0,),),
            'random_str'=>'',
            'node_role'=>1,
        );
        $res = $node -> fileConfig($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testWarnConfig()
    {
        $node = $this -> node;
        $arr = array(
            'node_type'=>'',
            'random_str'=>'',
            'warn_config'=>array(
                '0'=>array(
                    'market_type'=>'',
                    'file_name'=>'',
                    'warn_tick'=>1,
                    'error_tick'=>1,
                    'check_begin'=>'',
                    'check_end'=>'',
                    'check_begin_pm'=>'',
                    'check_end_pm'=>'',
                    'check_node_number'=>1,
                    'traffic_begin'=>'',
                    'traffic_end'=>'',
                    'traffic_begin_pm'=>'',
                    'traffic_end_pm'=>'',
                    'traffic_upper'=>'',
                    'traffic_lower'=>'',
                    'traffic_upper_pm'=>'',
                    'traffic_lower_pm'=>'',),),
            'node_role'=>1,
        );
        $res = $node -> warnConfig($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUpgrade()
    {
        $node = $this -> node;
        $arr = array(
            'upgrade_type'=>1,
            'node_type'=>'',
        );
        $res = $node -> upgrade($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDelete()
    {
        $node = $this -> node;
        $arr = array(
            'node_type'=>'',
        );
        $res = $node -> delete($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testTopography()
    {
        $node = $this -> node;
        $arr = array(
            'is_static'=>1,
            'node_uuid'=>'',
        );
        $res = $node -> topography($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testLatency()
    {
        $node = $this -> node;
        $arr = array(
            'start'=>1,
            'end'=>1,
            'type'=>'',
        );
        $res = $node -> latency($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}