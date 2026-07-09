<?php
namespace i2up\common\v20260626;

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
     * 其他 - 获取激活所需信息（组激活，离线激活）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeActivateInfo(array $body = array())
    {
        $url = $this -> url . '/lic/activate';
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
        $url = $this -> url . '/lic/cdm_capacity';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * Lic - 退订操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function unsubscribeLic(array $body = array())
    {
        $url = $this -> url . '/lic/unsubscribe';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * hdfs容量管理
     * 
     * @return array
     */
    public function hdfsCapacity()
    {
        $url = $this -> url . '/lic/hdfs_capacity';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * Lic - 即将过期提示许可列表
     * 
     * @return array
     */
    public function listNearExpirationLicenses()
    {
        $url = $this -> url . '/lic/list_near_expiration';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * Lic - 更新许可 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateLic(array $body = array())
    {
        $url = $this -> url . '/lic/' . $body['uuid'];
        unset($body['uuid']);
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
        $url = $this -> url . '/lic/vp_auth_detail';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * LIC - 获取节点列表（sysadmin角色下无用户权限过滤）
     * 
     * @return array
     */
    public function getNodeListForLicense()
    {
        $url = $this -> url . '/lic/node_list';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * Backup9授权详情
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listLicBackupAuthDetail(array $body = array())
    {
        $url = $this -> url . '/lic/backup9_auth_detail';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * Backup9授权详情 - 资源列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackup9LicRes(array $body = array())
    {
        $url = $this -> url . '/lic/backup9_res';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 消息 - 许可消息弹窗
     * 
     * @return array
     */
    public function listLicAlert()
    {
        $url = $this -> url . '/lic/list_alert';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 许可弹窗消息 - 不再提醒
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function avoidAlert(array $body = array())
    {
        $url = $this -> url . '/lic/forbid_alert';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取最近一个即将到期的许可
     * 
     * @return array
     */
    public function describeLatestExpireLicense()
    {
        $url = $this -> url . '/lic/latest_expire_license';
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
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}