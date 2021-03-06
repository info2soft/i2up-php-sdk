<?php

namespace i2up\system\v20190805;

use i2up\Http\Client;
use i2up\Http\Error;
use i2up\util\RSA;

class User {
    private $userUrl;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __construct($auth)
    {
        $this -> userUrl = $auth -> ip;
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     * 获取用户列表
     * @param array $body
     * @return array
     */
    public function listUser(array $body = array())
    {
        $url = $this -> userUrl . 'user';
        $userList = $this -> httpRequest('get', $url, $body);
        return $userList;
    }

    /**
     * 修改用户信息
     * @param array $body
     * @return array
     */
    public function modifyUser(array $body = array())
    {
        if (empty($body) || !isset($body['id'])) return $body;
        $url = $this -> userUrl . 'user/' . $body['id'];
        $RSA = new RSA();
        $body['password'] = $RSA -> encrypt_with_public_key($body['password']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 新增用户
     * @param array $body
     * @return array
     */
    public function createUser(array $body = array())
    {
        if (empty($body) || !isset($body['password'])) return $body;
        $RSA = new RSA();
        $body['password'] = $RSA -> encrypt_with_public_key($body['password']);
        $url = $this -> userUrl . 'user';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 删除账户
     * @param array $body
     * @return array
     */
    public function deleteUser(array $body = array())
    {
        $url = $this -> userUrl . 'user';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 修改密码
     * @param array $body
     * @return array
     */
    public function modifyUserPwd(array $body = array())
    {
        $url = $this -> userUrl . 'user/password';
        $RSA = new RSA();
        $body['password'] = $RSA -> encrypt_with_public_key($body['password']);
        $body['old_password'] = $RSA -> encrypt_with_public_key($body['old_password']);
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取用户profile
     * @return array
     */
    public function listProfile()
    {
        $url = $this -> userUrl . 'user/profile';
        $profile = $this -> httpRequest('get', $url);
        return $profile;
    }

    /**
     * 修改profile
     * @param array $body
     * * $body[mobile] string 手机号
     * $body[email] string 邮箱
     * $body[nickname] string 名称
     * $body[company] string  公司
     * $body[address] string  地址
     * @return array
     */
    public function modifyProfile(array $body = array())
    {
        $url = $this -> userUrl . 'user/profile';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 获取用户
     * @param array $body
     * $body['id'] String id
     * @return array|bool
     */
    public function describeUser(array $body = array())
    {
        if (empty($body) || !isset($body['id'])) return $body;
        $url = $this -> userUrl . 'user/' . $body['id'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * 退出登录
     * @return array
     */
    public function logout()
    {
        $url = $this -> userUrl . 'user/logout';
        $res = $this -> httpRequest('post', $url);
        return $res;
    }

    /**
     * AccessKey列表
     * @param array $body
     * @return array
     */
    public function listAk(array $body = array())
    {
        $url = $this -> userUrl . 'ak';
        $res =  $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * AccessKey新建
     * @param array $body
     * @return array
     */
    public function createAk(array $body = array())
    {
        $url = $this -> userUrl . 'ak';
        $res =  $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * AccessKey更新
     * @param array $body
     * @return array
     */
    public function modifyAk(array $body = array())
    {
        $url = $this -> userUrl . 'ak';
        $res =  $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * AccessKey删除
     * @param array $body
     * $body['access_key'] String access_key
     * @return array
     */
    public function deleteAk(array $body = array())
    {
        $url = $this -> userUrl . 'ak';
        $res =  $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 角色管理 - 角色列表
     * @param array $body
     * @return array
     */
    public function listRole(array $body = array())
    {
        $url = $this -> userUrl . 'role';
        $res =  $this -> httpRequest('get', $url, $body);
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
        } else if ($method === 'put') {
            $ret = Client::put($url, $body, $header);
        } else if ($method === 'post') {
            $ret = Client::post($url, $body, $header);
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