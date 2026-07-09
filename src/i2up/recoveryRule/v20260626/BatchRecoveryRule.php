<?php
namespace i2up\recoveryRule\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class BatchRecoveryRule {
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
     * 场景化恢复 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRestoreWizardRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/restore_wizard';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 场景化恢复 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRestoreWizardRuleStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/restore_wizard/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 场景化恢复 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createRestoreWizardRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/restore_wizard';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 场景化恢复 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyRestoreWizardRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/restore_wizard/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 场景化恢复 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function regenerateRestoreWizardRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/restore_wizard/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 场景化恢复 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restoreRestoreWizardRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/restore_wizard/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 场景化恢复 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startRestoreWizardRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/restore_wizard/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 场景化恢复 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopRestoreWizardRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/restore_wizard/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 场景化恢复 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRestoreWizardRule(array $body = array())
    {
        $url = $this -> url . '/vers/v3/restore_wizard';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 场景化恢复 - 下载清单文件
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadRestoreWizardList(array $body = array())
    {
        $url = $this -> url . '/vers/v3/restore_wizard/download';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 场景化恢复 - 查看
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeRestoreWizardRule(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/restore_wizard/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
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