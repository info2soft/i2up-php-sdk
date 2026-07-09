<?php
namespace i2up\bigdata\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class Recovery {
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
     * 还原 - 准备 - 获取备份列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackupHistory(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery/bak_history';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 还原 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBigdataRecovery(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 还原 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBigdataRecovery(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/bigdata/recovery/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 还原 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBigdataRecovery(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 还原 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigdataRecovery(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 还原 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBigdataRecoveryStatus(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 还原 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startBigdataRecovery(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 还原 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopBigdataRecovery(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 还原 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function pauseBigdataRecovery(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 还原 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeBigdataRecovery(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 大数据 - 获取hive分区详细信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getBigdataRecoveryPartitionInfoDetail(array $body = array())
    {
        $url = $this -> url . '/bigdata/recovery/partition_info_detail';
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