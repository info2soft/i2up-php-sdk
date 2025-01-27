<?php
namespace i2up\cdm\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class Drill {
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
     * 自动演练规则 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createCdmDrill(array $body = array())
    {
        $url = $this -> url . '/cdm_drill';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 自动演练规则 - 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeCdmDrill(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/cdm_drill/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 自动演练规则 - 获取组
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeCdmDrillGroup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/cdm_drill/' . $body['uuid'] . '/group';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 自动演练规则 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteCdmDrill(array $body = array())
    {
        $url = $this -> url . '/cdm_drill';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 自动演练规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopCdmDrill(array $body = array())
    {
        $url = $this -> url . '/cdm_drill/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 自动演练规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startCdmDrill(array $body = array())
    {
        $url = $this -> url . '/cdm_drill/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 自动演练规则 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function setStatusCdmDrill(array $body = array())
    {
        $url = $this -> url . '/cdm_drill/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 自动演练规则 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listCdmDrillStatus(array $body = array())
    {
        $url = $this -> url . '/cdm_drill/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 自动演练规则 - 获取虚机状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function queryGroupVmStatus(array $body = array())
    {
        $url = $this -> url . '/cdm_drill/vm_status';
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