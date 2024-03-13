<?php
namespace i2up\common\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class Lic {
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
     *  获取激活所需信息（组激活，离线激活）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeActivateInfo(array $body = array())
    {
        
        $url = $this -> url . 'lic/activate';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  下载lic绑定信息、mac变更记录
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function downloadLicInfo(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . 'lic/' . $body['uuid'] . '/download_lic_info';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  获取控制机识别码
     * 
     * @return array
     */
    public function describeLicCcHwCode()
    {
        
        $url = $this -> url . 'lic/cc_hw_code';
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  获取节点识别码
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeLicObjHwCode(array $body = array())
    {
        
        $url = $this -> url . 'lic/obj_hw_code';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  在线更新
     * 
     * @return array
     */
    public function activateLicAll()
    {
        
        $url = $this -> url . 'lic/activate';
        
        $res = $this -> httpRequest('put', $url);
        return $res;
    }
    /**
     *  获取 lic 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listLic(array $body = array())
    {
        
        $url = $this -> url . 'lic';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  添加 lic
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createLic(array $body = array())
    {
        
        $url = $this -> url . 'lic';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 7 删除 lic
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteLic(array $body = array())
    {
        
        $url = $this -> url . 'lic';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  更新 lic（批量，离线）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateBatchLic(array $body = array())
    {
        
        $url = $this -> url . 'lic/batch';
        
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  获取单个 lic
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeLic(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . 'lic/' . $body['uuid'] . '';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  获取许可绑的资源（许可管理）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listLicBind(array $body = array())
    {
        
        $url = $this -> url . 'lic/lic_bind';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取资源绑的许可（节点/VP管理）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listLicObjBind(array $body = array())
    {
        
        $url = $this -> url . 'lic/obj_bind';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  更新许可绑的资源（许可管理）
     * 
     * @return array
     */
    public function updateLicBind()
    {
        
        $url = $this -> url . 'lic/lic_bind';
        
        $res = $this -> httpRequest('put', $url);
        return $res;
    }
    /**
     *  获取 Obj 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listLicObj(array $body = array())
    {
        
        $url = $this -> url . 'lic/obj';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * CDM容量管理
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cdmCapacity(array $body = array())
    {
        
        $url = $this -> url . 'lic/cdm_capacity';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  退订操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function unsubscribeLic(array $body = array())
    {
        
        $url = $this -> url . 'lic/unsubscribe';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  Move已占用节点及其识别码
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeMoveLicBind(array $body = array())
    {
        
        $url = $this -> url . 'lic/move_lic_bind';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * hdfs容量管理
     * 
     * @return array
     */
    public function hdfsCapacity()
    {
        
        $url = $this -> url . 'lic/hdfs_capacity';
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  即将过期提示许可列表
     * 
     * @return array
     */
    public function listNearExpirationLicenses()
    {
        
        $url = $this -> url . 'lic/list_near_expiration';
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  更新许可 单个
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateLic(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . 'lic/' . $body['uuid'];
        
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     * VP许可授权详情
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeVpAuthDetail(array $body = array())
    {
        
        $url = $this -> url . 'lic/vp_auth_detail';
        
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
        return array($r, null);
    }
}