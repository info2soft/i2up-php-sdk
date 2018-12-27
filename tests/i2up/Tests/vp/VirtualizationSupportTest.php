<?php
namespace i2up\Test\vp;

use i2up\vp\v20181217\VirtualizationSupport;
use i2up\common\Auth;
use i2up\Config;

class VirtualizationSupportTest extends \PHPUnit_Framework_TestCase
{
    private $virtualizationSupport;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth(Config::baseUrl, 'admin', 'Info1234', __DIR__ . '/../');
        $this -> virtualizationSupport = new VirtualizationSupport($auth);
    }

    public function testCreateVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'comment'=>'',
            'config_addr'=>'192.168.72.75',
            'config_port'=>58083,
            'os_pwd'=>'12345678',
            'os_usr'=>'root',
            'vp_addr'=>'192.168.88.107',
            'vp_name'=>'test',
            'vp_type'=>0,
            'bind_lic_list'=>array(),
            'biz_grp_list'=>array(),
        );
        $res = $virtualizationSupport -> createVp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '7BC084ED-E02D-5C82-6A98-EFCFCEEAEB3A'
        );
        $res = $virtualizationSupport -> describeVp($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '7BC084ED-E02D-5C82-6A98-EFCFCEEAEB3A',
            'comment'=>'',
            'config_addr'=>'192.168.72.75',
            'config_port'=>58083,
            'os_pwd'=>'12345678',
            'os_usr'=>'root',
            'vp_addr'=>'192.168.88.107',
            'vp_name'=>'test1',
            'vp_type'=>0,
            'bind_lic_list'=>array(),
            'biz_grp_list'=>array(),
        );
        $res = $virtualizationSupport -> modifyVp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'page'=>1,
            'limit'=>10,
        );
        $res = $virtualizationSupport -> listVp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_uuids'=>array(
                '0'=>'7BC084ED-E02D-5C82-6A98-EFCFCEEAEB3A'
            ),
        );
        $res = $virtualizationSupport -> listVpStatus($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_uuids'=>array(
                '0'=>'950820A8-12AF-01DA-9011-DA425B061DD8'
            ),
        );
        $res = $virtualizationSupport -> deleteVp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVM()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '4D130492-334A-42FC-46B6-E7F95FA3D6AC',
            'path'=>'/',
            'force_rpc'=>0,
        );
        $res = $virtualizationSupport -> listVM($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVpAttribute()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '4D130492-334A-42FC-46B6-E7F95FA3D6AC'
        );
        $res = $virtualizationSupport -> describeVpAttribute($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBakVer()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '7BC084ED-E02D-5C82-6A98-EFCFCEEAEB3A',
            'bk_path'=>'H:\vp_bk5\test2_BAK_vm-11880_192.168.88.22\\',
            'bk_uuid'=>'730B1B39-9906-F084-3C8F-DA7779141EA0',
        );
        $res = $virtualizationSupport -> listBakVer($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBakVerInfo()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '7BC084ED-E02D-5C82-6A98-EFCFCEEAEB3A',
            'bk_uuid'=>'730B1B39-9906-F084-3C8F-DA7779141EA0',
            'bk_path'=>'H:\vp_bk5\test2_BAK_vm-11880_192.168.88.22\\',
            'ver_sig'=>'6277F526-6D3D-4A44-B323-B2D96AF85CEC',
            'time'=>'2018-12-27_10-40-45',
        );
        $res = $virtualizationSupport -> listBakVerInfo($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDatastoreFile()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '4D130492-334A-42FC-46B6-E7F95FA3D6AC',
            'dir_file'=>'/',
            'ds_name'=>'103-数据盘',
            'dc_name'=>'i2test',
        );
        $res = $virtualizationSupport -> listDatastoreFile($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDatacenter()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '4D130492-334A-42FC-46B6-E7F95FA3D6AC'
        );
        $res = $virtualizationSupport -> listDatacenter($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDatacenterHost()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '4D130492-334A-42FC-46B6-E7F95FA3D6AC',
            'dc_name'=>'i2test',
            'dc_mor'=>'datacenter-2',
        );
        $res = $virtualizationSupport -> listDatacenterHost($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDatastore()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '4D130492-334A-42FC-46B6-E7F95FA3D6AC',
            'host_name'=>'192.168.88.103',
        );
        $res = $virtualizationSupport -> listDatastore($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDatastoreInfo()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '4D130492-334A-42FC-46B6-E7F95FA3D6AC',
            'ds_name'=>'103-数据盘',
        );
        $res = $virtualizationSupport -> listDatastoreInfo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'del_bkup_data'=>0,
            'quiet_snap'=>0,
            'quick_back'=>1,
            'vp_uuid'=>'4D130492-334A-42FC-46B6-E7F95FA3D6AC',
            'bk_path'=>"E:\\vp_bk5\\",
            'vm_list'=>array(
                '0'=>array(
                    'vm_name'=>'新建虚拟机3',
                    'vm_ref'=>'vm-11880'
                )
            ),
            'bk_uuid'=>'730B1B39-9906-F084-3C8F-DA7779141EA0',
            'lan_free'=>23,
            'rule_name'=>'vp_bk',
            'bkup_policy'=>0,
            'bkup_one_time'=>1545876670,
            'bkup_schedule'=>array(),
            'biz_grp_list'=>array(),
            'rule_type'=>0,
            'band_width'=>'-1',
            'compress'=>0,
            'mem_snap'=>0
        );
        $res = $virtualizationSupport -> createVpBackup($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '581F14F0-AFA5-B63D-07C1-818524B5978C',
            'del_bkup_data'=>0,
            'quiet_snap'=>1,
            'quick_back'=>1,
            'bk_path'=>"E:\\vp_bk5\\",
            'bk_uuid'=>'730B1B39-9906-F084-3C8F-DA7779141EA0',
            'lan_free'=>23,
            'rule_name'=>'temp',
            'bkup_policy'=>0,
            'bkup_one_time'=>1545876670,
            'bkup_schedule'=>array(),
            'biz_grp_list'=>array(),
            'rule_type'=>10,
            'band_width'=>'-1',
            'compress'=>0,
            'mem_snap'=>0
        );
        $res = $virtualizationSupport -> modifyVpBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => 'A1A2E1A9-C388-7254-BFBE-F4ACDC9DFE36'
        );
        $res = $virtualizationSupport -> describeVpBackup($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVpBackupGroup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => 'E5CC8E45-04BD-5277-A245-613242E393DE'
        );
        $res = $virtualizationSupport -> describeVpBackupGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'type'=>0,
        );
        $res = $virtualizationSupport -> listVpBackup($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpBackupGroup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'page'=>1,
            'limit'=>10,
            'type'=>0,
            'where_args[bk_path]'=>'H:\\vp_bk5\\',
        );
        $res = $virtualizationSupport -> listVpBackupGroup($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpBackupStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'A1A2E1A9-C388-7254-BFBE-F4ACDC9DFE36'
            )
        );
        $res = $virtualizationSupport -> listVpBackupStatus($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'A1A2E1A9-C388-7254-BFBE-F4ACDC9DFE36'
            )
        );
        $res = $virtualizationSupport -> startVpBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'A1A2E1A9-C388-7254-BFBE-F4ACDC9DFE36'
            )
        );
        $res = $virtualizationSupport -> stopVpBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'A1A2E1A9-C388-7254-BFBE-F4ACDC9DFE36'
            )
        );
        $res = $virtualizationSupport -> deleteVpBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'bk_path'=>'H:\vp_bk5\test2_BAK_vm-11880_192.168.88.22',
            'bk_uuid'=>'730B1B39-9906-F084-3C8F-DA7779141EA0',
            'new_ds'=>'103-数据盘',
            'vm_list'=>array(
                '0'=>array(
                    'vm_cfg'=>array(
                        'alt_name'=>'',
                        'anno'=>'',
                        'bk_path'=>'H:\vp_bk5\test2_BAK_vm-11880_192.168.88.22\\',
                        'cdrom'=>'4,datastore-10,3,3000,200,0',
                        'chg_id'=>'52 0a 10 06 51 70 ea 31-43 5c 6d 09 64 77 70 ae/6',
                        'controller'=>'1,1000,100,3,0,3,noSharing,0',
                        'core_per_sock'=>'1',
                        'cpu'=>'1',
                        'dc'=>'i2test',
                        'disk'=>'2,[103-数据盘] 新建虚拟机3/新建虚拟机3.vmdk,persistent,1,4096,2000,1000,0,52 0a 10 06 51 70 ea 31-43 5c 6d 09 64 77 70 ae/6,0,0',
                        'disk_count'=>'1',
                        'disk_list'=>array(
                            '0'=>'新建虚拟机3.vmdk'
                        ),
                        'ds'=> '103-数据盘',
                        'floppy'=>'',
                        'guest_os_id'=>'rhel6_64Guest',
                        'hostname'=>'192.168.88.103',
                        'mem_mb'=>'1024',
                        'nic'=>'3,00:50:56:84:26:9f,1,4000,100,7,1,VM Network',
                        'nic_count'=>'1',
                        'storeMem'=>'0',
                        'time'=>'2018-12-27_10-40-45',
                        'valid_data'=>4194304,
                        'ver_sig'=>'6277F526-6D3D-4A44-B323-B2D96AF85CEC',
                        'vm_name'=>'新建虚拟机3',
                        'vm_ref'=>'vm-11880',
                        'vm_version'=>'vmx-08',
                        'vp_uuid'=>'4D130492-334A-42FC-46B6-E7F95FA3D6AC'
                    ),
                    'ver_sig'=>'6277F526-6D3D-4A44-B323-B2D96AF85CEC',
                    'vm_ref'=>'vm-11880',
                    'vm_name'=>'新建虚拟机3',
                    'disk_list'=>array(
                        '0'=>array(
                            'disk_name'=>'新建虚拟机3.vmdk',
                            'disk_path'=>'/',
                            'is_same'=>1,
                            'new_ds'=>'103-数据盘'
                        )
                    )
                )
            ),
            'new_hostname'=>'192.168.88.103',
            'new_dc'=>'i2test',
            'is_create'=>0,
            'vp_uuid'=>'4D130492-334A-42FC-46B6-E7F95FA3D6AC',
            'new_ds_path'=>'/',
            'new_vp_uuid'=>'4D130492-334A-42FC-46B6-E7F95FA3D6AC',
            'rule_name'=>'test2',
            'lan_free'=>23,
            'rule_type'=>0,
            'automate'=>0,
            'new_vm_name'=>'新建虚拟机3',
            'new_dc_mor'=>'datacenter-2',
            'api_type'=>'VirtualCenter',
            'biz_grp_list'=>array(),
            'cpu'=>1,
            'core_per_sock'=>1,
            'mem_snap'=>1,
            'mem_mb'=>1024,
            'mac'=>'3,00:50:56:84:26:9f,1,4000,100,7,1,VM Network',
            'group_recovery'=>0,
            'bind_width'=>-1,
            'backup_rule_name'=>'test2',
        );
        $res = $virtualizationSupport -> createVpRecovery($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVpRecoveryGroup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '13A4AD25-0B88-4416-7729-D9E6283A9825'
        );
        $res = $virtualizationSupport -> describeVpRecoveryGroup($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'type'=>1,
            'limit'=>10,
            'page'=>1,
        );
        $res = $virtualizationSupport -> listVpRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpRecoveryStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>'3132E130-82C2-7678-530C-E976F68F89F1',
        );
        $res = $virtualizationSupport -> listVpRecoveryStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'3132E130-82C2-7678-530C-E976F68F89F1'
            )
        );
        $res = $virtualizationSupport -> startVpRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'3132E130-82C2-7678-530C-E976F68F89F1'
            )
        );
        $res = $virtualizationSupport -> stopVpRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testClearFinishVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_type'=>0,
            'rule_uuids' => ''
        );
        $res = $virtualizationSupport -> clearFinishVpRecovery($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'3132E130-82C2-7678-530C-E976F68F89F1'
            )
        );
        $res = $virtualizationSupport -> deleteVpRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'new_ds'=>'datastore107（1）',
            'support_cbt'=>1,
            'tgt_uuid'=>'7BC084ED-E02D-5C82-6A98-EFCFCEEAEB3A',
            'del_bkup_swap'=>0,
            'src_uuid'=>'4D130492-334A-42FC-46B6-E7F95FA3D6AC',
            'bk_uuid'=>'730B1B39-9906-F084-3C8F-DA7779141EA0',
            'automate'=>0,
            'rule_name'=>'testMove',
            'new_dc'=>'ha-datacenter',
            'bk_path'=>'H:\vp_rep\\',
            'backup_type'=>'i',
            'new_host'=>'dev-esxi.6.6.6',
            'quiet_snap'=>0,
            'bkup_schedule'=>array(
                'sched_time_start'=>'2018-12-27T03:28:39.977Z',
                'limit'=>0,
                'sched_day'=>array(),
                'sched_every'=>0,
                'sched_time'=>array(),
                'sched_gap_min'=>0
            ),
            'quick_back'=>1,
            'del_bkup_data'=>0,
            'lan_free'=>23,
            'vm_list'=>array(
                '0'=>array(
                    'vm_name'=>'新建虚拟机6',
                    'vm_ref'=>'vm-11890',
                    'shd_name'=>'新建虚拟机6_move',
                    'overwrite'=>0
                )
            ),
            'time_window'=>'',
            'new_dc_mor'=>'ha-datacenter',
            'bkup_policy'=>0,
            'band_width'=>-1,
            'mem_snap'=>0,
            'rule_type'=>1
        );
        $res = $virtualizationSupport -> createVpMove($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'new_ds'=>'datastore107（1）',
            'support_cbt'=>1,
            'tgt_uuid'=>'7BC084ED-E02D-5C82-6A98-EFCFCEEAEB3A',
            'del_bkup_swap'=>0,
            'src_uuid'=>'4D130492-334A-42FC-46B6-E7F95FA3D6AC',
            'bk_uuid'=>'730B1B39-9906-F084-3C8F-DA7779141EA0',
            'automate'=>0,
            'rule_name'=>'testRep',
            'new_dc'=>'ha-datacenter',
            'bk_path'=>'H:\vp_rep\\',
            'backup_type'=>'i',
            'new_host'=>'dev-esxi.6.6.6',
            'quiet_snap'=>0,
            'bkup_schedule'=>array(
                'sched_time_start'=>0,
                'limit'=>0,
                'sched_day'=>array(),
                'sched_every'=>3,
                'sched_time'=>array(),
                'sched_gap_min'=>0
            ),
            'quick_back'=>1,
            'del_bkup_data'=>0,
            'lan_free'=>23,
            'vm_list'=>array(
                '0'=>array(
                    'vm_name'=>'新建虚拟机1',
                    'vm_ref'=>'vm-11877',
                    'shd_name'=>'新建虚拟机1_ha',
                    'overwrite'=>0
                )
            ),
            'time_window'=>'',
            'new_dc_mor'=>'ha-datacenter',
            'bkup_policy'=>0,
            'band_width'=>-1,
            'mem_snap'=>0,
            'rule_type'=>0
        );
        $res = $virtualizationSupport -> createVpRep($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => 'D3C02FDB-2BFF-95EB-4916-16C76E25F824'
        );
        $res = $virtualizationSupport -> describeVpMove($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '979AAA6F-7877-2600-C177-6AF8ACCC9111'
        );
        $res = $virtualizationSupport -> describeVpRep($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'new_ds'=>'datastore107（1）',
            'support_cbt'=>1,
            'tgt_uuid'=>'7BC084ED-E02D-5C82-6A98-EFCFCEEAEB3A',
            'del_bkup_swap'=>1,
            'src_uuid'=>'7BC084ED-E02D-5C82-6A98-EFCFCEEAEB3A',
            'bk_uuid'=>'730B1B39-9906-F084-3C8F-DA7779141EA0',
            'automate'=>1,
            'rule_name'=>'testTemp',
            'new_dc'=>'ha-datacenter',
            'bk_path'=>'H:\vp_rep\\',
            'backup_type'=>'i',
            'new_host'=>'dev-esxi.6.6.6',
            'quiet_snap'=>1,
            'bkup_schedule'=>array(
                'limit'=>0,
                'sched_day'=>array(),
                'sched_every'=>3,
                'sched_gap_min'=>0,
                'sched_time'=>array(),
                'sched_time_start'=>0
            ),
            'quick_back'=>1,
            'del_bkup_data'=>0,
            'lan_free'=>23,
            'vm_list'=>array(),
            'time_window'=>'',
            'new_dc_mor'=>'ha-datacenter',
            'bkup_policy'=>0,
            'rule_type'=>10,
            'band_width'=>-1
        );
        $res = $virtualizationSupport -> modifyVpMove($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'new_ds'=>'datastore107（1）',
            'support_cbt'=>1,
            'tgt_uuid'=>'7BC084ED-E02D-5C82-6A98-EFCFCEEAEB3A',
            'del_bkup_swap'=>1,
            'src_uuid'=>'7BC084ED-E02D-5C82-6A98-EFCFCEEAEB3A',
            'bk_uuid'=>'730B1B39-9906-F084-3C8F-DA7779141EA0',
            'automate'=>1,
            'rule_name'=>'testTemp',
            'new_dc'=>'ha-datacenter',
            'bk_path'=>'H:\vp_rep\\',
            'backup_type'=>'i',
            'new_host'=>'dev-esxi.6.6.6',
            'quiet_snap'=>1,
            'bkup_schedule'=>array(
                'limit'=>0,
                'sched_day'=>array(),
                'sched_every'=>3,
                'sched_gap_min'=>0,
                'sched_time'=>array(),
                'sched_time_start'=>0
            ),
            'quick_back'=>1,
            'del_bkup_data'=>0,
            'lan_free'=>23,
            'vm_list'=>array(),
            'time_window'=>'',
            'new_dc_mor'=>'ha-datacenter',
            'bkup_policy'=>0,
            'rule_type'=>10,
            'band_width'=>-1
        );
        $res = $virtualizationSupport -> modifyVpRep($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'limit'=>10,
            'page'=>1
        );
        $res = $virtualizationSupport -> listVpMove($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'limit'=>10,
            'page'=>1
        );
        $res = $virtualizationSupport -> listVpRep($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpMoveStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'D3C02FDB-2BFF-95EB-4916-16C76E25F824'
            ),
        );
        $res = $virtualizationSupport -> listVpMoveStatus($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpRepStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'979AAA6F-7877-2600-C177-6AF8ACCC9111'
            ),
        );
        $res = $virtualizationSupport -> listVpRepStatus($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'D3C02FDB-2BFF-95EB-4916-16C76E25F824'
            )
        );
        $res = $virtualizationSupport -> stopVpMove($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'979AAA6F-7877-2600-C177-6AF8ACCC9111'
            )
        );
        $res = $virtualizationSupport -> stopVpRep($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'D3C02FDB-2BFF-95EB-4916-16C76E25F824'
            )
        );
        $res = $virtualizationSupport -> startVpMove($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'979AAA6F-7877-2600-C177-6AF8ACCC9111'
            )
        );
        $res = $virtualizationSupport -> startVpRep($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testMoveVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'D3C02FDB-2BFF-95EB-4916-16C76E25F824'
            )
        );
        $res = $virtualizationSupport -> moveVpMove($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testFailoverVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'979AAA6F-7877-2600-C177-6AF8ACCC9111'
            ),
            'snap_point'=>'',
            'op_code'=>'0',
        );
        $res = $virtualizationSupport -> failoverVpRep($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testFailbackVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'979AAA6F-7877-2600-C177-6AF8ACCC9111'
            )
        );
        $res = $virtualizationSupport -> failbackVpRep($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'D3C02FDB-2BFF-95EB-4916-16C76E25F824',),
        );
        $res = $virtualizationSupport -> deleteVpMove($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'979AAA6F-7877-2600-C177-6AF8ACCC9111'
            )
        );
        $res = $virtualizationSupport -> deleteVpRep($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpRepPointList()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '979AAA6F-7877-2600-C177-6AF8ACCC9111'
        );
        $res = $virtualizationSupport -> listVpRepPointList($arr);
        var_dump($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}