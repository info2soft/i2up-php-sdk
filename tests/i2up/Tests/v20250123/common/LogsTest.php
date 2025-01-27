<?php
namespace i2up\Test\v20250123\common;

use i2up\common\v20250123\Logs;
use i2up\common\Auth;
                
class LogsTest extends \PHPUnit_Framework_TestCase
 {
    private $logs;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> logs = new Logs(new Auth());
    }

    public function testListTaskLog()
    {
        $logs = $this -> logs;
        $arr = array(
            'uuid'=>'F97B3FD5-4D5D-41EE-22A9-740A74E1E13C',
            'level'=>1,
            'start'=>1,
            'page'=>1,
            'end'=>1,
            'limit'=>10,
            'search_content'=>'',
        );
        
        
        $res = $logs -> listTaskLog($arr);
        $this->do_assert($res);
    }

    public function testListHaLog()
    {
        $logs = $this -> logs;
        $arr = array(
            'uuid'=>'',
            'end'=>1,
            'level'=>1,
            'start'=>1,
            'node_uuid'=>'',
            'page'=>1,
            'limit'=>1,
        );
        
        
        $res = $logs -> listHaLog($arr);
        $this->do_assert($res);
    }

    public function testListNodeLog()
    {
        $logs = $this -> logs;
        $arr = array(
            'level'=>1,
            'page'=>1,
            'limit'=>10,
            'start'=>1,
            'uuid'=>'67E33CDB-D75B-15B3-367D-50C764F5A26F',
            'end'=>1,
            'log_type'=>1,
        );
        
        
        $res = $logs -> listNodeLog($arr);
        $this->do_assert($res);
    }

    public function testListNpsvrLog()
    {
        $logs = $this -> logs;
        $arr = array();
        
        
        $res = $logs -> listNpsvrLog($arr);
        $this->do_assert($res);
    }

    public function testListTrafficLog()
    {
        $logs = $this -> logs;
        $arr = array(
            'start_stamp'=>1545637314,
            'type'=>'month',
            'uuid'=>'F97B3FD5-4D5D-41EE-22A9-740A74E1E13C',
            'month_range'=>'1',
        );
        
        
        $res = $logs -> listTrafficLog($arr);
        $this->do_assert($res);
    }

    public function testCollectStatistics()
    {
        $logs = $this -> logs;
        $arr = array(
            'bkup_window'=>'00:00-00:00',
            'create_time'=>'2019-09-02 09:18:44',
            'data_writed_num'=>'0',
            'dir_failed_num'=>'--',
            'dup_rate'=>'0',
            'end_time'=>'2019-09-02 09:14:00',
            'file_skiped_num'=>0,
            'name'=>'g',
            'policy'=>3,
            'project_failed_num'=>'',
            'result'=>0,
            'space_occu'=>'0',
            'src_size'=>'0',
            'src_type'=>'GAUSSDB A',
            'stage'=>0,
            'start_time'=>'2019-09-02 09:14:00',
            'sync_obj_num'=>0,
            'tran_rate'=>'0',
            'trans_data_num'=>'0',
            'type'=>'I2BAK_BK',
            'used_time'=>'0',
            'uuid'=>'C2CE5A8C-79FA-AFA3-1382-1B434B393BC2',
            'wk_uuid'=>'C2CE5A8C-79FA-AFA3-1382-1B434B393BC2',
            'bk_uuid'=>'C2CE5A8C-79FA-AFA3-1382-1B434B393BC2',
            'other_uuid'=>'C2CE5A8C-79FA-AFA3-1382-1B434B393BC2',
            'version_time'=>'2019-09-02 09:14:00',
            'error_message'=>'""',
            'data_type'=>'o',
            'host_name'=>'',
            'bk_set_info'=>'',
            'rule_version'=>'20230728210507',
            'job'=>'',
            'recover_type'=>0,
        );
        
        
        $res = $logs -> collectStatistics($arr);
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