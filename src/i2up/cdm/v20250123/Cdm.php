<?php
namespace i2up\cdm\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class Cdm {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;

    public function __construct($auth)
    {
        $this -> url = $auth -> ip;
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     * 整机复制 --- 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createCdm(array $body = array())
    {
        $url = $this -> url . '/cdm';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机复制 --- 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeCdm(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/cdm/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 整机复制 --- 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyCdm(array $body = array())
    {
        $url = $this -> url . '/cdm/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 整机复制 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCdm(array $body = array())
    {
        $url = $this -> url . '/cdm';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 整机复制 --- 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCdm(array $body = array())
    {
        $url = $this -> url . '/cdm';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 整机复制 --- 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCdmStatus(array $body = array())
    {
        $url = $this -> url . '/cdm/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 整机复制 --- 根据工作机获取规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getByWk(array $body = array())
    {
        $url = $this -> url . '/cdm/get_by_wk';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份点列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getPointList(array $body = array())
    {
        $url = $this -> url . '/cdm/point_full_info_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取网卡列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getNetworkList(array $body = array())
    {
        $url = $this -> url . '/cdm/network_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 根据存储获取工作机列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getNodeList(array $body = array())
    {
        $url = $this -> url . '/cdm/restore_node_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取资源列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getResourceList(array $body = array())
    {
        $url = $this -> url . '/cdm/drp_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取主机存储资源
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getHostStorageList(array $body = array())
    {
        $url = $this -> url . '/cdm/host_storage_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 按虚机恢复获取磁盘
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getVmInfo(array $body = array())
    {
        $url = $this -> url . '/cdm/vm_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取备份点列表(刷新虚机规则对应关系)
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDrillRestorePoint(array $body = array())
    {
        $url = $this -> url . '/cdm/auto_drill_restore_point_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 环境检测 -- Oracle是否开启归档
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function verifyOracleArchiveMode(array $body = array())
    {
        $url = $this -> url . '/cdm/verify_oracle_archive_mode';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 整机复制 - 数据库保护自定义脚本检测
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cdmScriptPathCheck(array $body = array())
    {
        $url = $this -> url . '/cdm/script_path_check';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 整机复制 - 获取节点设备列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCdmDriverInfo(array $body = array())
    {
        $url = $this -> url . '/cdm/device_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    private function httpRequest($method, $url, $body = null)
    {
        if (isset($this -> token)) {
            $header = array('Authorization' => $this -> token);
        } else if (isset($this -> accessKey)) {
            $header = array(
                'ACCESS-KEY' => $this -> accessKey,
                'SECRET-KEY' => $this -> secretKey
            );
        } else {
            $header = array();
        }
        $ret = null;
        
        if ($method === 'get') {
            $ret = Client::get($url, $body, $header);
        } else if ($method === 'post') {
            $ret = Client::post($url, $body, $header);
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
        } else if ($method === 'delete') {
            $ret = Client::delete($url, $body, $header);
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}