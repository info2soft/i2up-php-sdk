<?php
namespace i2up\cfs\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class CfsBackup {
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
     * CFS - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createCfsBackup(array $body = array())
    {
        $url = $this -> url . '/vers/v3/cfs_backup';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * CFS - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyCfsBackup(array $body = array())
    {
        $url = $this -> url . '/vers/v3/cfs_backup/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * CFS - 获取详情
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeCfsBackup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/cfs_backup/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * CFS - 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCfsBackup(array $body = array())
    {
        $url = $this -> url . '/vers/v3/cfs_backup';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * CFS - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCfsBackup(array $body = array())
    {
        $url = $this -> url . '/vers/v3/cfs_backup';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * CFS - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startCfsBackup(array $body = array())
    {
        $url = $this -> url . '/vers/v3/cfs_backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * CFS - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopCfsBackup(array $body = array())
    {
        $url = $this -> url . '/vers/v3/cfs_backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * CFS - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startSyncCfsBackup(array $body = array())
    {
        $url = $this -> url . '/vers/v3/cfs_backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * CFS - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopSyncCfsBackup(array $body = array())
    {
        $url = $this -> url . '/vers/v3/cfs_backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * CFS - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function moveCfsBackup(array $body = array())
    {
        $url = $this -> url . '/vers/v3/cfs_backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * CFS - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function failoverCfsBackup(array $body = array())
    {
        $url = $this -> url . '/vers/v3/cfs_backup/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * CFS - 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCfsBackupStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/cfs_backup/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * CFS - 获取同步任务状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCfsBackupSyncStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/cfs_backup/sync_status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取节点等待迁移规则数
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getWatingMoveNumber(array $body = array())
    {
        $url = $this -> url . '/vers/v3/cfs_backup/waiting_move_number';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * CFS - 获取历史规则列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCfsBackupHistory(array $body = array())
    {
        $url = $this -> url . '/vers/v3/cfs_backup/list_history';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * CFS - 查询历史延时信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeCfsBackupLetency(array $body = array())
    {
        $url = $this -> url . '/cfs_backup/latency';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * CFS - （回切操作前）检查缓存数据
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkCfsBackupCachedData(array $body = array())
    {
        $url = $this -> url . '/cfs_backup/check_cached_data';
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