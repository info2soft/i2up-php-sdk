<?php
namespace i2up\Test\vp;

use i2up\vp\v20190805\VirtualizationSupport;
use i2up\common\Auth;
use i2up\Config;

class VirtualizationSupportTest extends \PHPUnit_Framework_TestCase
{
    private $virtualizationSupport;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $params = array(
            'username' => 'admin',
            'pwd' => 'Info1234',
            'cache_path' => __DIR__ . '/../',
            'ip' => Config::baseUrl
        );
        $auth = new Auth($params);
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
        var_export($res);
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
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111'
        );
        $res = $virtualizationSupport -> describeVp($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
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
            'random_str'=>'11111111-1111-1111-1111-111111111111'
        );
        $res = $virtualizationSupport -> modifyVp($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
        );
        $res = $virtualizationSupport -> listVpStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'vp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            ),
        );
        $res = $virtualizationSupport -> deleteVp($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVM()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => 'C6335F62-2565-1957-4BB9-587F2FF46B00',
            'path'=>'/',
            'force_rpc'=>0,
        );
        $res = $virtualizationSupport -> listVM($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVpAttribute()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => 'C6335F62-2565-1957-4BB9-587F2FF46B00'
        );
        $res = $virtualizationSupport -> describeVpAttribute($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBakVer()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '928B88A6-CDBA-6F55-ADCB-15A8A935C9C2',
            'bk_path'=>'H:\vp_bk5\test2_BAK_vm-11880_192.168.88.22\\',
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
        );
        $res = $virtualizationSupport -> listBakVer($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBakVerInfo()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '928B88A6-CDBA-6F55-ADCB-15A8A935C9C2',
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'bk_path'=>'H:\vp_bk5\testRC1_BAK_99_192.168.85.139',
            'ver_sig'=>'A59DB76E-E33D-4E22-BB08-59723B1FC539',
            'time'=>'2019-01-07_13-10-45',
        );
        $res = $virtualizationSupport -> listBakVerInfo($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDatastoreFile()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '928B88A6-CDBA-6F55-ADCB-15A8A935C9C2',
            'dir_file'=>'/',
            'ds_name'=>'datastore1',
            'dc_name'=>'ha-datacenter',
        );
        $res = $virtualizationSupport -> listDatastoreFile($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDatacenter()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '928B88A6-CDBA-6F55-ADCB-15A8A935C9C2'
        );
        $res = $virtualizationSupport -> listDatacenter($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDatacenterHost()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '928B88A6-CDBA-6F55-ADCB-15A8A935C9C2',
            'dc_name'=>'ha-datacenter',
            'dc_mor'=>'ha-datacenter',
        );
        $res = $virtualizationSupport -> listDatacenterHost($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDatastore()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '928B88A6-CDBA-6F55-ADCB-15A8A935C9C2',
            'host_name'=>'localhost.localdomain',
        );
        $res = $virtualizationSupport -> listDatastore($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDatastoreInfo()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '928B88A6-CDBA-6F55-ADCB-15A8A935C9C2',
            'ds_name'=>'datastore1',
        );
        $res = $virtualizationSupport -> listDatastoreInfo($arr);
        var_export($res);
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
            'vp_uuid'=>'C6335F62-2565-1957-4BB9-587F2FF46B00',
            'bk_path'=>"E:\\vp_bk5\\",
            'vm_list'=>array(
                '0'=>array(
                    'vm_name'=>'测试5',
                    'vm_ref'=>'vm-10811'
                )
            ),
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'lan_free'=>23,
            'rule_name'=>'vp_bk',
            'bkup_policy'=>0,
            'bkup_one_time'=>1546831899,
            'bkup_schedule'=>array(),
            'biz_grp_list'=>array(),
            'rule_type'=>0,
            'band_width'=>'-1',
            'compress'=>0,
            'mem_snap'=>0
        );
        $res = $virtualizationSupport -> createVpBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => 'D3D8883C-12DD-F1C5-BE78-934E08135463',
            'del_bkup_data'=>0,
            'quiet_snap'=>1,
            'quick_back'=>1,
            'bk_path'=>"E:\\vp_bk5\\",
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'lan_free'=>23,
            'rule_name'=>'temp',
            'bkup_policy'=>0,
            'bkup_one_time'=>1546831899,
            'bkup_schedule'=>array(),
            'biz_grp_list'=>array(),
            'rule_type'=>10,
            'band_width'=>'-1',
            'compress'=>0,
            'mem_snap'=>0,
            'random_str'=>'4A469A79-16F0-18DF-2EDB-4F08FDB26BAB'
        );
        $res = $virtualizationSupport -> modifyVpBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => 'EC5A3225-C388-F935-6BC2-15AAA4EB5B23'
        );
        $res = $virtualizationSupport -> describeVpBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVpBackupGroup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => 'D3D8883C-12DD-F1C5-BE78-934E08135463'
        );
        $res = $virtualizationSupport -> describeVpBackupGroup($arr);
        var_export($res);
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
        var_export($res);
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
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpBackupStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'EC5A3225-C388-F935-6BC2-15AAA4EB5B23'
            )
        );
        $res = $virtualizationSupport -> listVpBackupStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'EC5A3225-C388-F935-6BC2-15AAA4EB5B23'
            )
        );
        $res = $virtualizationSupport -> startVpBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'EC5A3225-C388-F935-6BC2-15AAA4EB5B23'
            )
        );
        $res = $virtualizationSupport -> stopVpBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $virtualizationSupport -> deleteVpBackup($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'bk_path'=>'H:\vp_bk5\testRC1_BAK_99_192.168.85.139',
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'new_ds'=>'datastore1',
            'vm_list'=>array(
                '0'=>array(
                    'vm_cfg'=>array(
                        'alt_name'=>'',
                        'anno'=>'',
                        'bk_path'=>'H:\vp_bk5\testRC1_BAK_99_192.168.85.139\\',
                        'cdrom'=>'',
                        'chg_id'=>'52 19 10 74 e2 c2 b3 63-de 7a 2e d2 9d 40 91 bf/107',
                        'controller'=>'1,1000,100,3,0,3,noSharing,0',
                        'core_per_sock'=>'1',
                        'cpu'=>'1',
                        'dc'=>'ha-datacenter',
                        'disk'=>'2,[datastore1] 测试5/proxy gateway1.vmdk,persistent,1,2048,2000,1000,0,52 19 10 74 e2 c2 b3 63-de 7a 2e d2 9d 40 91 bf/107,0,1',
                        'disk_count'=>'1',
                        'disk_list'=>array(
                            '0'=>'proxy gateway1.vmdk'
                        ),
                        'ds'=> 'datastore1',
                        'floppy'=>'',
                        'guest_os_id'=>'rhel6_64Guest',
                        'hostname'=>'localhost.localdomain',
                        'mem_mb'=>'1024',
                        'nic'=>'3,00:50:56:90:ff:ad,1,4000,100,7,1,VM Network;3,00:50:56:90:7b:51,1,4001,100,8,1,VM Network',
                        'nic_count'=>'2',
                        'storeMem'=>'0',
                        'time'=>'2019-01-07_13-10-45',
                        'valid_data'=>4194304,
                        'ver_sig'=>'A59DB76E-E33D-4E22-BB08-59723B1FC539',
                        'vm_name'=>'测试5',
                        'vm_ref'=>'99',
                        'vm_version'=>'vmx-08',
                        'vp_uuid'=>'928B88A6-CDBA-6F55-ADCB-15A8A935C9C2'
                    ),
                    'ver_sig'=>'A59DB76E-E33D-4E22-BB08-59723B1FC539',
                    'vm_ref'=>'99',
                    'vm_name'=>'测试5',
                    'disk_list'=>array(
                        '0'=>array(
                            'disk_name'=>'proxy gateway1.vmdk',
                            'disk_path'=>'/',
                            'is_same'=>1,
                            'new_ds'=>'datastore1'
                        )
                    )
                )
            ),
            'new_hostname'=>'localhost.localdomain',
            'new_dc'=>'ha-datacenter',
            'is_create'=>0,
            'vp_uuid'=>'928B88A6-CDBA-6F55-ADCB-15A8A935C9C2',
            'new_ds_path'=>'/',
            'new_vp_uuid'=>'928B88A6-CDBA-6F55-ADCB-15A8A935C9C2',
            'rule_name'=>'testRC3',
            'lan_free'=>23,
            'rule_type'=>0,
            'automate'=>0,
            'new_vm_name'=>'测试5',
            'new_dc_mor'=>'ha-datacenter',
            'api_type'=>'HostAgent',
            'biz_grp_list'=>array(),
            'cpu'=>1,
            'core_per_sock'=>1,
            'mem_snap'=>1,
            'mem_mb'=>1024,
            'mac'=>'3,00:50:56:90:ff:ad,1,4000,100,7,1,VM Network;3,00:50:56:90:7b:51,1,4001,100,8,1,VM Network',
            'group_recovery'=>0,
            'band_width'=>-1,
            'backup_rule_name'=>'testRC1',
        );
        $res = $virtualizationSupport -> createVpRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVpRecoveryGroup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '641A27BB-B4D1-F482-1FB8-E856898626DA'
        );
        $res = $virtualizationSupport -> describeVpRecoveryGroup($arr);
        var_export($res);
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
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpRecoveryStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>'2E92D816-AFF0-A807-D90F-87991F789976',
        );
        $res = $virtualizationSupport -> listVpRecoveryStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'2E92D816-AFF0-A807-D90F-87991F789976'
            )
        );
        $res = $virtualizationSupport -> startVpRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'2E92D816-AFF0-A807-D90F-87991F789976'
            )
        );
        $res = $virtualizationSupport -> stopVpRecovery($arr);
        var_export($res);
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
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'2E92D816-AFF0-A807-D90F-87991F789976'
            )
        );
        $res = $virtualizationSupport -> deleteVpRecovery($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'new_ds'=>'103-数据盘',
            'support_cbt'=>1,
            'tgt_uuid'=>'7F16E670-1A61-D565-6905-9C68B9520907',
            'del_bkup_swap'=>0,
            'src_uuid'=>'7F16E670-1A61-D565-6905-9C68B9520907',
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'automate'=>0,
            'rule_name'=>'testMove',
            'new_dc'=>'i2test',
            'bk_path'=>'H:\vp_rep\\',
            'backup_type'=>'i',
            'new_host'=>'192.168.88.103',
            'quiet_snap'=>0,
            'bkup_schedule'=>array(
                'sched_time_start'=>'2019-01-07T06:16:32.611Z',
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
                    'vm_name'=>'新建虚拟机1',
                    'vm_ref'=>'vm-11877',
                    'shd_name'=>'新建虚拟机1_move',
                    'overwrite'=>0
                )
            ),
            'time_window'=>'',
            'new_dc_mor'=>'datacenter-2',
            'bkup_policy'=>0,
            'band_width'=>-1,
            'mem_snap'=>0,
            'rule_type'=>1
        );
        $res = $virtualizationSupport -> createVpMove($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'new_ds'=>'103-数据盘',
            'support_cbt'=>1,
            'tgt_uuid'=>'7F16E670-1A61-D565-6905-9C68B9520907',
            'del_bkup_swap'=>0,
            'src_uuid'=>'7F16E670-1A61-D565-6905-9C68B9520907',
            'bk_uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'automate'=>0,
            'rule_name'=>'testRep',
            'new_dc'=>'i2test',
            'bk_path'=>'H:\vp_rep\\',
            'backup_type'=>'i',
            'new_host'=>'192.168.88.103',
            'quiet_snap'=>0,
            'bkup_schedule'=>array(
                'sched_time_start'=>'2019-01-07T06:16:32.611Z',
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
                    'vm_name'=>'新建虚拟机1',
                    'vm_ref'=>'vm-11877',
                    'shd_name'=>'新建虚拟机1_HA',
                    'overwrite'=>0
                )
            ),
            'time_window'=>'',
            'new_dc_mor'=>'datacenter-2',
            'bkup_policy'=>0,
            'band_width'=>-1,
            'mem_snap'=>0,
            'rule_type'=>0
        );
        $res = $virtualizationSupport -> createVpRep($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '16C1C399-6146-AD56-6D5D-7DBCC14804D9'
        );
        $res = $virtualizationSupport -> describeVpMove($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => 'F64AA5FC-48F0-B593-907A-958E5E95AD13'
        );
        $res = $virtualizationSupport -> describeVpRep($arr);
        var_export($res);
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
        var_export($res);
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
        var_export($res);
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
        var_export($res);
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
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpMoveStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'16C1C399-6146-AD56-6D5D-7DBCC14804D9'
            ),
        );
        $res = $virtualizationSupport -> listVpMoveStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpRepStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'F64AA5FC-48F0-B593-907A-958E5E95AD13'
            ),
        );
        $res = $virtualizationSupport -> listVpRepStatus($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'16C1C399-6146-AD56-6D5D-7DBCC14804D9'
            )
        );
        $res = $virtualizationSupport -> stopVpMove($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'F64AA5FC-48F0-B593-907A-958E5E95AD13'
            )
        );
        $res = $virtualizationSupport -> stopVpRep($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'16C1C399-6146-AD56-6D5D-7DBCC14804D9'
            )
        );
        $res = $virtualizationSupport -> startVpMove($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'F64AA5FC-48F0-B593-907A-958E5E95AD13'
            )
        );
        $res = $virtualizationSupport -> startVpRep($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testMoveVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'16C1C399-6146-AD56-6D5D-7DBCC14804D9'
            )
        );
        $res = $virtualizationSupport -> moveVpMove($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testFailoverVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'F64AA5FC-48F0-B593-907A-958E5E95AD13'
            ),
            'snap_point'=>'',
            'op_code'=>'0',
        );
        $res = $virtualizationSupport -> failoverVpRep($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testFailbackVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'F64AA5FC-48F0-B593-907A-958E5E95AD13'
            )
        );
        $res = $virtualizationSupport -> failbackVpRep($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'16C1C399-6146-AD56-6D5D-7DBCC14804D9'
            )
        );
        $res = $virtualizationSupport -> deleteVpMove($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'F64AA5FC-48F0-B593-907A-958E5E95AD13'
            )
        );
        $res = $virtualizationSupport -> deleteVpRep($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpRepPointList()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => 'F64AA5FC-48F0-B593-907A-958E5E95AD13'
        );
        $res = $virtualizationSupport -> listVpRepPointList($arr);
        var_export($res);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVpFileRecoveryVmIp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'recovery_uuid'=>'',
        );
        $res = $virtualizationSupport -> describeVpFileRecoveryVmIp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testVpFileRecoveryLivecdPartition()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'recovery_uuid'=>'FdDBC2BB-ddB2-5845-1d58-44f97B4d5C39',
            'bk_ip'=>'',
        );
        $res = $virtualizationSupport -> vpFileRecoveryLivecdPartition($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateVpFileRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'wk_ip'=>'',
            'os_user'=>'',
            'os_pwd'=>'',
            'wk_port'=>26888,
            'wk_path'=>array(),
            'is_override'=>0,
            'rule_name'=>'',
            'recovery_uuid'=>'',
            'bk_path'=>array(),
            'bk_ip'=>'',
            'is_remote'=>1,
        );
        $res = $virtualizationSupport -> createVpFileRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVpFileRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
        );
        $res = $virtualizationSupport -> describeVpFileRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpFileRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'page'=>1,
            'limit'=>1,
        );
        $res = $virtualizationSupport -> listVpFileRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpFileRecoveryStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $virtualizationSupport -> listVpFileRecoveryStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteVpFileRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $virtualizationSupport -> deleteVpFileRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testUpdateDataAgentVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'operate'=>'update_data_agent',
            'vp_uuids'=>array(
                '0'=>'11111111-1111-1111-1111-111111111111'
            )
        );
        $res = $virtualizationSupport -> updateDataAgentVp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}