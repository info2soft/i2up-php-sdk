<?php
namespace i2up\recoveryDrill\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class RecoveryDrill {
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
     * 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRecoveryDrill(array $body = array())
    {
        $url = $this -> url . '/vers/v3/recovery_drill';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 恢复演练 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createRecoveryDrill(array $body = array())
    {
        $url = $this -> url . '/vers/v3/recovery_drill';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 演练规则-获取详情
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeRecoveryDrill(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/recovery_drill/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 演练规则 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyRecoveryDrill(array $body = array())
    {
        $url = $this -> url . '/vers/v3/recovery_drill/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 演练规则 - 获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRecoveryDrillStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/recovery_drill/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 演练规则 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRecoveryDrill(array $body = array())
    {
        $url = $this -> url . '/vers/v3/recovery_drill';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 演练规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function enableRecoveryDrill(array $body = array())
    {
        $url = $this -> url . '/vers/v3/recovery_drill/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 演练规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function disableRecoveryDrill(array $body = array())
    {
        $url = $this -> url . '/vers/v3/recovery_drill/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 演练规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function manualDrillRecoveryDrill(array $body = array())
    {
        $url = $this -> url . '/vers/v3/recovery_drill/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 演练副本-列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDrillInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/drill_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 演练副本-操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function operateDrillInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/drill_info/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 演练副本-状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDrillInfoStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/drill_info/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 演练副本-删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDrillInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/drill_info';
        $res = $this -> httpRequest('delete', $url, $body);
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