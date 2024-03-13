<?php
namespace i2up\common\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class Settings {
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
     * 获取配置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSysSetting(array $body = array())
    {
        
        $url = $this -> url . 'sys/settings';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 更新配置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateSetting(array $body = array())
    {
        
        $url = $this -> url . 'sys/settings';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 获取公开配置
     * 
     * @return array
     */
    public function listPublicSettings()
    {
        
        $url = $this -> url . 'sys/public_settings';
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * 控制台主机IP
     * 
     * @return array
     */
    public function describe()
    {
        
        $url = $this -> url . 'sys/settings/ips';
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * 获取节点参数
     * 
     * @return array
     */
    public function listNodeConf()
    {
        
        $url = $this -> url . 'sys/settings/node_conf';
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * 更新节点参数
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateNodeConf(array $body = array())
    {
        
        $url = $this -> url . 'sys/settings/node_conf';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 新增用户
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createUser(array $body = array())
    {
        
        $url = $this -> url . 'user';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 用户列表(admin)
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listUser(array $body = array())
    {
        
        $url = $this -> url . 'user';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 获取用户
     * 
     * @return array
     */
    public function describeUser(array $body = array())
    {
        if (empty($body) || !isset($body['id'])) return $body;
        $url = $this -> url . 'user/' . $body['id'];
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * 删除账户
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteUser(array $body = array())
    {
        
        $url = $this -> url . 'user';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     * 修改用户信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyUser(array $body = array())
    {
        if (empty($body) || !isset($body['id'])) return $body;
        $url = $this -> url . 'user/' . $body['id'];
        
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  解除用户登录锁定
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function clearLoginAttempt(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . 'user/' . $body['uuid'] . '/clear_login_attempt';
        unset($body['uuid']);
        $res = $this -> httpRequest('post', $url);
        return $res;
    }
    /**
     *  手机号/邮箱 - 修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyUserEmailOrMobile(array $body = array())
    {
        
        $url = $this -> url . 'user/email_mobile';
        
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     * 修改密码
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyUserPwd(array $body = array())
    {
        
        $url = $this -> url . 'user/password';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 获取用户Profile
     * 
     * @return array
     */
    public function listProfile()
    {
        
        $url = $this -> url . 'user/profile';
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * 修改Profile
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyProfile(array $body = array())
    {
        
        $url = $this -> url . 'user/profile';
        
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     * 退出登录
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function logout(array $body = array())
    {
        
        $url = $this -> url . 'user/logout';
        
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
        
        $url = $this -> url . 'ak';
        
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
        
        $url = $this -> url . 'ak';
        
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
        
        $url = $this -> url . 'ak';
        
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
        
        $url = $this -> url . 'ak';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  角色列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRole(array $body = array())
    {
        
        $url = $this -> url . 'role';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * npsvr列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNpsvr(array $body = array())
    {
        
        $url = $this -> url . 'cc/npsvr_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * npsvr获取单个
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeNpsvr(array $body = array())
    {
        
        $url = $this -> url . 'cc/npsvr';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * npsvr修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyNpsvr(array $body = array())
    {
        
        $url = $this -> url . 'cc/npsvr';
        
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     * npsvr删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteNpsvr(array $body = array())
    {
        
        $url = $this -> url . 'cc/npsvr';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     * npsvr状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNpsvrStatus(array $body = array())
    {
        
        $url = $this -> url . 'cc/npsvr_status';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * npsvr 备份历史列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNpsvrBakList(array $body = array())
    {
        
        $url = $this -> url . 'cc/npsvr_bak_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * npsvr 备份历史操作 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteNpsvrBak(array $body = array())
    {

        $url = $this -> url . 'cc/npsvr_operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * npsvr 备份历史操作
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function recoveryNpsvrBak(array $body = array())
    {

        $url = $this -> url . 'cc/npsvr_operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBakConfig(array $body = array())
    {
        
        $url = $this -> url . 'cc/bak_config_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  单个
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeBakConfig(array $body = array())
    {
        
        $url = $this -> url . 'cc/bak_config';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyBakConfig(array $body = array())
    {
        
        $url = $this -> url . 'cc/bak_config';
        
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBakConfig(array $body = array())
    {
        
        $url = $this -> url . 'cc/bak_config';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBakConfigStatus(array $body = array())
    {
        
        $url = $this -> url . 'cc/bak_config_status';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取备份历史列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBakHistory(array $body = array())
    {
        
        $url = $this -> url . 'cc/bak_history_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  备份历史操作 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBakConfigInfo(array $body = array())
    {
        
        $url = $this -> url . 'cc/bak_history_operate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  备份历史操作 - 恢复
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function recoveryBakConfigInfo(array $body = array())
    {

        $url = $this -> url . 'cc/bak_history_operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  获取Ctrl备份配置
     * 
     * @return array
     */
    public function describeCtrlBakSetting()
    {
        
        $url = $this -> url . 'cc/bak_setting';
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  修改Ctrl备份配置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyCtrlBakSetting(array $body = array())
    {
        
        $url = $this -> url . 'cc/bak_setting';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 查看音频文件
     * 
     * @return array
     */
    public function listDownloadCustomAudio()
    {
        
        $url = $this -> url . 'sys/settings/custom_audio_list';
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * 上传音频文件
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function uploadDownloadCustomAudio(array $body = array())
    {
        
        $url = $this -> url . 'sys/settings/custom_audio';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 删除音频文件
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDownloadCustomAudio(array $body = array())
    {
        
        $url = $this -> url . 'sys/settings/custom_audio';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     * 下载音频文件
     * 
     * @return array
     */
    public function downloadCustomAudio()
    {
        
        $url = $this -> url . 'sys/settings/custom_audio';
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * etcd有效性检查
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function chkEtcdUrl(array $body = array())
    {
        
        $url = $this -> url . 'etcd/etcd_url_chk';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  新建/更新
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createUpdateScheduleSvr(array $body = array())
    {
        
        $url = $this -> url . 'schedule_svr';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  列表
     * 
     * @return array
     */
    public function listScheduleSvr()
    {
        
        $url = $this -> url . 'schedule_svr';
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  删除(废弃)
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteScheduleSvr(array $body = array())
    {
        
        $url = $this -> url . 'schedule_svr';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  发现
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function scanEtcdConf(array $body = array())
    {
        
        $url = $this -> url . 'etcd/scan';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  新建/更新
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createUpdateEtcd(array $body = array())
    {
        
        $url = $this -> url . 'etcd';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  列表
     * 
     * @return array
     */
    public function listEtcd()
    {
        
        $url = $this -> url . 'etcd';
        
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
        return array($r, null);
    }
}