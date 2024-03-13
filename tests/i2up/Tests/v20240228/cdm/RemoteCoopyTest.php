<?php
namespace i2up\Test\v20240228\cdm;

use i2up\cdm\v20240228\RemoteCoopy;
use i2up\common\Auth;
                
class RemoteCoopyTest extends \PHPUnit_Framework_TestCase
 {
    private $remoteCoopy;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> remoteCoopy = new RemoteCoopy(new Auth());
    }

    public function testVerifyDuplicateCdmCoopyRule()
    {
        $remoteCoopy = $this -> remoteCoopy;
        $arr = array(
            'fsp_uuids'=>array(),
        );
        $res = $remoteCoopy -> verifyDuplicateCdmCoopyRule($arr);
        $this->do_assert($res);
    }

    public function testCreateCdmRemoteCoopy()
    {
        $remoteCoopy = $this -> remoteCoopy;
        $arr = array(
            'old_bk_uuid'=>'',
            'old_platform_uuid'=>'',
            'old_storage_uuid'=>'',
            'rule_uuids'=>array(),
            'proxy_uuid'=>'',
            'new_bk_uuid'=>'',
            'new_platform_uuid'=>'',
            'data_addr'=>'',
            'new_storage_uuid'=>'',
            'bkup_policy'=>'',
            'bkup_one_time'=>'',
            'bkup_schedule'=>array(
                'sched_gap_min'=>'60',
                'sched_time'=>'[
  "00:00:00"
]',
                'sched_day'=>'[
  "1"
]',
                'sched_time_end'=>'23:59
',
                'limit'=>'5',
                'sched_time_start'=>'00:00',
                'sched_every'=>'0',),
            'compress_switch'=>'',
            'encrypt_switch'=>'',
            'band_width'=>'',
            'rule_uuid'=>'',
            'start_type'=>'',
            'prefix'=>'',
        );
        $res = $remoteCoopy -> createCdmRemoteCoopy($arr);
        $this->do_assert($res);
    }

    public function testListCdmRemoteCoopy()
    {
        $remoteCoopy = $this -> remoteCoopy;
        $arr = array(
            'limit'=>'',
            'page'=>'',
            'search_args'=>'',
            'search_value'=>'',
        );
        $res = $remoteCoopy -> listCdmRemoteCoopy($arr);
        $this->do_assert($res);
    }

    public function testStartCdmRemoteCoopy()
    {
        $remoteCoopy = $this -> remoteCoopy;
        $arr = array(
            'rule_uuids'=>'',
            'operate'=>'start',
            'modify_original_rule_name'=>'',
        );
        $res = $remoteCoopy -> startCdmRemoteCoopy($arr);
        $this->do_assert($res);
    }
    public function testStopCdmRemoteCoopy()
    {
        $remoteCoopy = $this -> remoteCoopy;
        $arr = array(
            'rule_uuids'=>'',
            'operate'=>'stop',
            'modify_original_rule_name'=>'',
        );
        $res = $remoteCoopy -> stopCdmRemoteCoopy($arr);
        $this->do_assert($res);
    }
    public function testStartImmediatelyCdmRemoteCoopy()
    {
        $remoteCoopy = $this -> remoteCoopy;
        $arr = array(
            'rule_uuids'=>'',
            'operate'=>'start_immediately',
            'modify_original_rule_name'=>'',
        );
        $res = $remoteCoopy -> startImmediatelyCdmRemoteCoopy($arr);
        $this->do_assert($res);
    }
    public function testMigrateCdmRemoteCoopy()
    {
        $remoteCoopy = $this -> remoteCoopy;
        $arr = array(
            'rule_uuids'=>'',
            'operate'=>'migrate',
            'modify_original_rule_name'=>'',
        );
        $res = $remoteCoopy -> migrateCdmRemoteCoopy($arr);
        $this->do_assert($res);
    }

    public function testListCdmRemoteCoopyStatus()
    {
        $remoteCoopy = $this -> remoteCoopy;
        $arr = array(
            'rule_uuids'=>'',
            'force_refresh'=>1,
        );
        $res = $remoteCoopy -> listCdmRemoteCoopyStatus($arr);
        $this->do_assert($res);
    }

    public function testDeleteCdmRemoteCoopy()
    {
        $remoteCoopy = $this -> remoteCoopy;
        $arr = array(
            'del_policy'=>'',
            'rule_uuids'=>array(),
        );
        $res = $remoteCoopy -> deleteCdmRemoteCoopy($arr);
        $this->do_assert($res);
    }

    public function testDescribeCdmRemoteCoopy()
    {
        $remoteCoopy = $this -> remoteCoopy;
        $arr = array(
            'uuid' => '11111111-1111-1111-1111-111111111111',
        );
        $res = $remoteCoopy -> describeCdmRemoteCoopy($arr);
        $this->do_assert($res);
    }

    public function testVerifyCdmCapacity()
    {
        $remoteCoopy = $this -> remoteCoopy;
        $arr = array(
            'old_storage_uuid'=>'',
            'new_storage_uuid'=>'',
            'old_vp_uuid'=>'',
            'new_vp_uuid'=>'',
        );
        $res = $remoteCoopy -> verifyCdmCapacity($arr);
        $this->do_assert($res);
    }

    public function testListCdmRemoteCoopyLicense()
    {
        $remoteCoopy = $this -> remoteCoopy;
        $arr = array(
            'old_storage_uuid'=>'',
            'new_storage_uuid'=>'',
        );
        $res = $remoteCoopy -> listCdmRemoteCoopyLicense($arr);
        $this->do_assert($res);
    }

    public function testVerifyCdmDirExist()
    {
        $remoteCoopy = $this -> remoteCoopy;
        $arr = array(
            'vp_uuid'=>'',
            'storage_uuid'=>'',
            'wk_uuids'=>array(),
            'bk_uuid'=>'',
        );
        $res = $remoteCoopy -> verifyCdmDirExist($arr);
        $this->do_assert($res);
    }

    private function do_assert($res)
    {
        $this->assertNotNull($res[0]);
        $this->assertArrayHasKey('code',$res[0]);
        $this->assertEquals(0, $res[0]['code']);
    }
}