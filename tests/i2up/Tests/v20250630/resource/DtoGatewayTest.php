<?php
namespace i2up\Test\v20250630\resource;

use i2up\resource\v20250630\DtoGateway;
use i2up\common\Auth;
                
class DtoGatewayTest extends \PHPUnit_Framework_TestCase
 {
    private $dtoGateway;
    
    public function __construct($name = null, array $data = array(), $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this -> dtoGateway = new DtoGateway(new Auth());
    }

    public function testCreateDtoGateway()
    {
        $dtoGateway = $this -> dtoGateway;
        $arr = array(
            'gateway_name'=>'',
            'enable'=>1,
            'http_port'=>1,
            'https_port'=>1,
            'domain'=>'',
            'comment'=>'',
            'region'=>array(
            '0'=>array(
            'name'=>'',
            'type'=>1,
            'path'=>'',
            'sto_uuid'=>'',
            'domain_uuid'=>'',
            'dedupe_path'=>'',),),
            'bk_uuid'=>'',
            'cert_uuid'=>'',
            'https_switch'=>1,
        );
        
        
        $res = $dtoGateway -> createDtoGateway($arr);
        $this->do_assert($res);
    }

    public function testModifyDtoGateway()
    {
        $dtoGateway = $this -> dtoGateway;
        $arr = array(
            'gateway_name'=>'',
            'enable'=>1,
            'http_port'=>'',
            'https_port'=>'',
            'domain'=>'',
            'comment'=>'',
            'region'=>array(
            '0'=>array(
            'name'=>'',
            'type'=>1,
            'path'=>'',
            'uuid'=>'',),),
            'bk_uuid'=>'',
            'gateway_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dtoGateway -> modifyDtoGateway($arr);
        $this->do_assert($res);
    }

    public function testDescribeDtoGateway()
    {
        $dtoGateway = $this -> dtoGateway;
        $arr = array(
            'gateway_name'=>'',
            'enable'=>1,
            'http_port'=>'',
            'https_port'=>'',
            'domain'=>'',
            'comment'=>'',
            'region'=>array(
            '0'=>array(
            'name'=>'',
            'type'=>1,
            'path'=>'',
            'uuid'=>'',),),
            'bk_uuid'=>'',
            'gateway_uuid'=>'',
        );
        $arr['uuid'] = "22D03E06-94D0-5E2C-336E-4BEEC2D28EC4";
        
        $res = $dtoGateway -> describeDtoGateway($arr);
        $this->do_assert($res);
    }

    public function testListDtoGateway()
    {
        $dtoGateway = $this -> dtoGateway;
        $arr = array(
            'search_field'=>'gateway_name',
            'search_value'=>'',
        );
        
        
        $res = $dtoGateway -> listDtoGateway($arr);
        $this->do_assert($res);
    }

    public function testDeleteDtoGateway()
    {
        $dtoGateway = $this -> dtoGateway;
        $arr = array(
            'uuids'=>array(),
            'force'=>1,
        );
        
        
        $res = $dtoGateway -> deleteDtoGateway($arr);
        $this->do_assert($res);
    }

    public function testResetDtoGatewayAccessKey()
    {
        $dtoGateway = $this -> dtoGateway;
        $arr = array(
            'uuids'=>array(),
        );
        
        
        $res = $dtoGateway -> resetDtoGatewayAccessKey($arr);
        $this->do_assert($res);
    }

    public function testListDtoGatewayRegions()
    {
        $dtoGateway = $this -> dtoGateway;
        $arr = array(
            'gateway_uuid'=>'',
        );
        
        
        $res = $dtoGateway -> listDtoGatewayRegions($arr);
        $this->do_assert($res);
    }

    public function testGetDtoGatewayStatus()
    {
        $dtoGateway = $this -> dtoGateway;
        $arr = array(
            'uuids'=>array(),
            'force_refresh'=>1,
        );
        
        
        $res = $dtoGateway -> getDtoGatewayStatus($arr);
        $this->do_assert($res);
    }

    public function testListDtoGatewayCert()
    {
        $dtoGateway = $this -> dtoGateway;
        $arr = array(
            'search_field'=>'gateway_name',
            'search_value'=>'',
        );
        
        
        $res = $dtoGateway -> listDtoGatewayCert($arr);
        $this->do_assert($res);
    }

    public function testDeleteDtoGatewayCert()
    {
        $dtoGateway = $this -> dtoGateway;
        $arr = array(
            'force'=>1,
            'uuids'=>array(),
        );
        
        
        $res = $dtoGateway -> deleteDtoGatewayCert($arr);
        $this->do_assert($res);
    }

    public function testCreateDtoGatewayCert()
    {
        $dtoGateway = $this -> dtoGateway;
        $arr = array(
            'cert_name'=>'',
            'cert_file'=>'',
            'cert_key_file'=>'',
            'cert_file_name'=>'',
            'cert_key_file_name'=>'',
        );
        
        
        $res = $dtoGateway -> createDtoGatewayCert($arr);
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