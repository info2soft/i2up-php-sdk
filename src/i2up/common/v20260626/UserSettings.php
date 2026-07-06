<?php
namespace i2up\common\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class UserSettings {
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
     * 用户Profile(all user)-获取用户Profile
     * 
     * @return array
     */
    public function listProfile()
    {
        $url = $this -> url . '/user/profile';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 用户Profile(all user)-修改密码
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyUserPwd(array $body = array())
    {
        $url = $this -> url . '/user/password';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 用户修改个人资料
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyProfile(array $body = array())
    {
        $url = $this -> url . '/user/profile';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 用户修改消息推送地址
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyUserNotifyAddr(array $body = array())
    {
        $url = $this -> url . '/user/notify_addr';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 用户Profile(all user)-退出登录
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function logout(array $body = array())
    {
        $url = $this -> url . '/user/logout';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2FA - 当前信息
     * 
     * @return array
     */
    public function describeTwoFactor()
    {
        $url = $this -> url . '/2fa';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 2FA - 获取绑定信息
     * 
     * @return array
     */
    public function describeOtp()
    {
        $url = $this -> url . '/2fa/otp';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 2FA - 生成新恢复码
     * 
     * @return array
     */
    public function renewRecoveryCode()
    {
        $url = $this -> url . '/2fa/recovery_code';
        $res = $this -> httpRequest('put', $url);
        return $res;
    }

    /**
     * 2FA - 配置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function configTwoFactor(array $body = array())
    {
        $url = $this -> url . '/2fa';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * AccessKey列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listAk(array $body = array())
    {
        $url = $this -> url . '/vers/v3/ak';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * AccessKey新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createAk(array $body = array())
    {
        $url = $this -> url . '/vers/v3/ak';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * AccessKey更新
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyAk(array $body = array())
    {
        $url = $this -> url . '/vers/v3/ak';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * AccessKey删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteAk(array $body = array())
    {
        $url = $this -> url . '/vers/v3/ak';
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