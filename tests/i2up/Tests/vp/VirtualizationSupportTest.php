<?php
namespace i2up\Test\vp;

use i2up\vp\v20181217\VirtualizationSupport;
use i2up\common\Auth;

class VirtualizationSupportTest extends \PHPUnit_Framework_TestCase
{
    private $virtualizationSupport;

    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $auth = new Auth('admin', 'Info1234');
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
            'uuid' => ''
        );
        $res = $virtualizationSupport -> describeVp($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyVp()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '',
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
            'vp_uuids'=>'[7BC084ED-E02D-5C82-6A98-EFCFCEEAEB3A]',
        );
        $res = $virtualizationSupport -> listVpStatus($arr);
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
            'uuid' => '',
            'path'=>'/',
            'force_rpc'=>0,
        );
        $res = $virtualizationSupport -> listVM($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVpAttribute()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => ''
        );
        $res = $virtualizationSupport -> describeVpAttribute($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBakVer()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '',
            'bk_path'=>'E:\vp_bk\\',
            'bk_uuid'=>'B8566905-411E-B2CD-A742-77B1346D8E84',
        );
        $res = $virtualizationSupport -> listBakVer($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListBakVerInfo()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '',
            'bk_uuid'=>'20CFF36E-219D-0E56-B36b-ddf79ec299Dc',
            'bk_path'=>'',
            'ver_sig'=>'',
            'group_uuid'=>'',
            'time'=>'',
        );
        $res = $virtualizationSupport -> listBakVerInfo($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDatastoreFile()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '',
            'dir_file'=>'',
            'ds_name'=>'',
            'dc_name'=>'',
        );
        $res = $virtualizationSupport -> listDatastoreFile($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDatacenter()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => ''
        );
        $res = $virtualizationSupport -> listDatacenter($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDatacenterHost()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '',
            'dc_name'=>'',
            'dc_mor'=>'',
        );
        $res = $virtualizationSupport -> listDatacenterHost($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListDatastore()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => '',
            'host_name'=>'',
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
            'uuid' => '',
            'ds_name'=>'',
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
            'vp_uuid'=>'7BC084ED-E02D-5C82-6A98-EFCFCEEAEB3A',
            'bk_path'=>'E:\vp_bk2\\',
            'vm_list'=>array(
                '0'=>array(
                    'vm_name'=>'新建虚拟机3',
                    'vm_ref'=>'vm-11880',),
                '1'=>array(
                    'vm_name'=>'新建虚拟机3',
                    'vm_ref'=>'vm-11880',),),
            'bk_uuid'=>'C02B76DB-EBE8-E029-B645-072B2E1A7460',
            'lan_free'=>23,
            'rule_name'=>'vp_bk',
            'bkup_policy'=>0,
            'bkup_one_time'=>1545701206,
            'bkup_schedule'=>array(
                '0'=>array(
                    'limit'=>3,
                    'sched_day'=>array(
                        '0'=>1,
                        '1'=>2,
                        '2'=>3,),
                    'sched_time'=>array(
                        '0'=>'00:00',),
                    'sched_every'=>0,
                    'bkup_type'=>0,),),
            'biz_grp_list'=>array(
                '0'=>'88cc4DC1-7b8c-DBAf-5F15-C22B3EdA501e',),
            'rule_type'=>0,
            'band_width'=>'-1',
            'compress'=>0,
        );
        $res = $virtualizationSupport -> createVpBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testModifyVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => ''
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
            'uuid' => ''
        );
        $res = $virtualizationSupport -> describeVpBackup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVpBackupGroup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => ''
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
            'where_args[bk_path]'=>'H:\tmp\\',
        );
        $res = $virtualizationSupport -> listVpBackupGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpBackupStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(),
        );
        $res = $virtualizationSupport -> listVpBackupStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStartVpBackup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>''
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
            'rule_uuids'=>''
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
            'rule_uuids'=>array()
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
            'bk_path'=>'/temp/',
            'bk_uuid'=>'A9Eae57a-8cd8-F142-26FE-92e7FFC9AeCb',
            'new_ds'=>'datastore(1)',
            'vm_list'=>array(
                '0'=>array(
                    'vm_cfg'=>1212,
                    'ver_sig'=>'111',
                    'vm_ref'=>'119',
                    'vm_name'=>'qwerty',
                    'disk_list'=>array(
                        '0'=>array(
                            'disk_name'=>'',
                            'disk_path'=>'/temp/',
                            'is_same'=>0,
                            'new_ds'=>'datastore(1)'
                        )
                    )
                )
            ),
            'new_hostname'=>'temp',
            'new_dc'=>'datacenter(1)',
            'is_create'=>0,
            'vp_uuid'=>'a7A6BA98-9CB5-f47B-afBE-dF1D6e6BCC36',
            'new_ds_path'=>'/',
            'new_vp_uuid'=>'f6b5d28a-8D31-BffD-cb6d-F79d3FC7a9d9',
            'rule_name'=>'temp',
            'lan_free'=>23,
            'rule_type'=>0,
            'automate'=>0,
            'new_vm_name'=>'qwerty',
            'new_dc_mor'=>'BbfE71bb-2FE6-2dDA-4FC7-cABcf8Bf753A',
            'api_type'=>'HostAgent',
            'biz_grp_list'=>array(),
            'cpu'=>2,
            'core_per_sock'=>1,
            'mem_mb'=>1234,
            'mac'=>'',
            'group_recovery'=>0,
            'backup_rule_name'=>'',
        );
        $res = $virtualizationSupport -> createVpRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDescribeVpRecoveryGroup()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'uuid' => ''
        );
        $res = $virtualizationSupport -> describeVpRecoveryGroup($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'type'=>1,
            'limit'=>1,
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
            'rule_uuids'=>'5771849e-656D-F594-eECE-FfA8ad2bA333',
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
            'rule_uuids'=>'8BE3eddD-47eB-B9DD-cB7F-eC1EB4ddEC89'
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
            'rule_uuids'=>'8BE3eddD-47eB-B9DD-cB7F-eC1EB4ddEC89'
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
            'rule_uuids'=>'8BE3eddD-47eB-B9DD-cB7F-eC1EB4ddEC89',
            'rule_type'=>0,
        );
        $res = $virtualizationSupport -> clearFinishVpRecovery($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testDeleteVpRecovery()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(),
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
            'new_ds'=>'',
            'support_cbt'=>1,
            'tgt_uuid'=>'',
            'del_bkup_swap'=>1,
            'src_uuid'=>'31693552-D4c6-be5D-eACf-ABAdE3832D7A',
            'bk_uuid'=>'',
            'automate'=>1,
            'rule_name'=>'',
            'new_dc'=>'',
            'bk_path'=>'',
            'backup_type'=>'',
            'new_host'=>'',
            'quiet_snap'=>1,
            'bkup_schedule'=>array(
                'sched_time_start'=>'',
                'limit'=>1,
                'sched_day'=>19,
                'sched_every'=>1,
                'sched_time'=>array(),
                'sched_gap_min'=>1,),
            'quick_back'=>1,
            'del_bkup_data'=>1,
            'lan_free'=>1,
            'vm_list'=>array(
                '0'=>array(
                    'vm_name'=>'',
                    'vm_ref'=>'',
                    'shd_name'=>'',
                    'overwrite'=>1,),
                '1'=>array(
                    'vm_name'=>'',
                    'vm_ref'=>'',
                    'shd_name'=>'',
                    'overwrite'=>1,),),
            'time_window'=>'',
            'new_dc_mor'=>'',
            'bkup_policy'=>1,
        );
        $res = $virtualizationSupport -> createVpMove($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testCreateVpRep()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'new_ds'=>'',
            'support_cbt'=>1,
            'tgt_uuid'=>'',
            'del_bkup_swap'=>1,
            'src_uuid'=>'31693552-D4c6-be5D-eACf-ABAdE3832D7A',
            'bk_uuid'=>'',
            'automate'=>1,
            'rule_name'=>'',
            'new_dc'=>'',
            'bk_path'=>'',
            'backup_type'=>'',
            'new_host'=>'',
            'quiet_snap'=>1,
            'bkup_schedule'=>array(
                'sched_time_start'=>'',
                'limit'=>1,
                'sched_day'=>19,
                'sched_every'=>1,
                'sched_time'=>array(),
                'sched_gap_min'=>1,),
            'quick_back'=>1,
            'del_bkup_data'=>1,
            'lan_free'=>1,
            'vm_list'=>array(
                '0'=>array(
                    'vm_name'=>'',
                    'vm_ref'=>'',
                    'shd_name'=>'',
                    'overwrite'=>1,),
                '1'=>array(
                    'vm_name'=>'',
                    'vm_ref'=>'',
                    'shd_name'=>'',
                    'overwrite'=>1,),),
            'time_window'=>'',
            'new_dc_mor'=>'',
            'bkup_policy'=>1,
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
            'uuid' => ''
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
            'uuid' => ''
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
            'new_ds'=>'',
            'support_cbt'=>1,
            'tgt_uuid'=>'',
            'del_bkup_swap'=>1,
            'src_uuid'=>'Fac1ECEA-ce9E-e637-4D72-5b1Cee667B33',
            'bk_uuid'=>'',
            'automate'=>1,
            'rule_name'=>'',
            'new_dc'=>'',
            'bk_path'=>'',
            'backup_type'=>'',
            'new_host'=>'',
            'quiet_snap'=>1,
            'bkup_schedule'=>array(),
            'quick_back'=>1,
            'del_bkup_data'=>1,
            'lan_free'=>1,
            'vm_list'=>array(),
            'time_window'=>'',
            'new_dc_mor'=>'',
            'bkup_policy'=>1,
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
            'new_ds'=>'',
            'support_cbt'=>1,
            'tgt_uuid'=>'',
            'del_bkup_swap'=>1,
            'src_uuid'=>'Fac1ECEA-ce9E-e637-4D72-5b1Cee667B33',
            'bk_uuid'=>'',
            'automate'=>1,
            'rule_name'=>'',
            'new_dc'=>'',
            'bk_path'=>'',
            'backup_type'=>'',
            'new_host'=>'',
            'quiet_snap'=>1,
            'bkup_schedule'=>array(),
            'quick_back'=>1,
            'del_bkup_data'=>1,
            'lan_free'=>1,
            'vm_list'=>array(),
            'time_window'=>'',
            'new_dc_mor'=>'',
            'bkup_policy'=>1,
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
            'rule_uuids'=>array(),
        );
        $res = $virtualizationSupport -> listVpMoveStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testListVpRepStatus()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(),
        );
        $res = $virtualizationSupport -> listVpRepStatus($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testStopVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'E3DBbdb3-3D8F-2871-687a-caF4Cb19AB03'
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
                '0'=>'E3DBbdb3-3D8F-2871-687a-caF4Cb19AB03'
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
                '0'=>'E3DBbdb3-3D8F-2871-687a-caF4Cb19AB03'
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
                '0'=>'E3DBbdb3-3D8F-2871-687a-caF4Cb19AB03'
            )
        );
        $res = $virtualizationSupport -> startVpRep($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }

    public function testMoveVpMove()
    {
        $virtualizationSupport = $this -> virtualizationSupport;
        $arr = array(
            'rule_uuids'=>array(
                '0'=>'E3DBbdb3-3D8F-2871-687a-caF4Cb19AB03'
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
                '0'=>'E3DBbdb3-3D8F-2871-687a-caF4Cb19AB03'
            ),
            'snap_point'=>'',
            'op_code'=>'',
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
                '0'=>'E3DBbdb3-3D8F-2871-687a-caF4Cb19AB03'
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
                '0'=>'D21c411A-8F71-f7B3-a8aD-53A248f7ED14',),
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
                '0'=>'D21c411A-8F71-f7B3-a8aD-53A248f7ED14'
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
            'uuid' => ''
        );
        $res = $virtualizationSupport -> listVpRepPointList($arr);
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}