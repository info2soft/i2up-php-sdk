<?php
namespace i2up\rep\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class RepBackup {
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
     *  获取 cdp zfs池列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRepBackupCdpZfs(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/cdp_zfs';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  检查是否挂载盘
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function repBackupVerifyDevice(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/verify_device';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  获取可配置CDP快照数
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getRepBackupCdpSnapNum(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/cdp_snap_num';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createRepBackup(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeRepBackup(array $body = array())
    {
        $url = $this -> url . '/rep/backup/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyRepBackup(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/' . $body['uuid'];
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRepBackup(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  操作 - 开始
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startRepBackup(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/operate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopRepBackup(array $body = array())
    {

        $url = $this -> url . '/rep/backup/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 开始同步
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startSyncRepBackup(array $body = array())
    {

        $url = $this -> url . '/rep/backup/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 停止同步
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopSyncRepBackup(array $body = array())
    {

        $url = $this -> url . '/rep/backup/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRepBackupStatus(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/status';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取同步任务状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRepBackupSyncStatus(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/sync_status';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRepBackup(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  cdp baseline 列表 获取
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRepBackupBaseLine(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/cdp_bl_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  cdp baseline 列表 删除
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRepBackupBaseline(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/' . $body['uuid'] . '/cdp_bl_list';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  孤儿文件 列表 获取
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRepBackupOrphan(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/' . $body['uuid'] . '/orphan_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  孤儿文件 列表 删除
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRepBackupOrphan(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/' . $body['uuid'] . '/orphan_list';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  孤儿文件 下载
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadRepBackupOrphan(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/' . $body['uuid'] . '/orphan_download';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  快照 列表 获取
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRepBackupSnapshot(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/snapshot_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  快照 删除
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteRepBackupSnapshot(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/' . $body['uuid'] . '/snapshot_list';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  快照 创建
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function createRepBackupSnapshot(array $body = array())
    {
        $url = $this -> url . '/rep/backup/' . $body['uuid'] . '/snapshot_list';
        $res = $this -> httpRequest('post', $url);
        return $res;
    }
    /**
     *  获取集群组信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRepBackupMscsGroup(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/mscs_group';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取规则列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function repBackup(array $body = array())
    {
        
        $url = $this -> url . '/dashboard/rep';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  批量新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchCreateRepBackup(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/batch';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  检查目标路径
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkBkPath(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/check_bk_path';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  提交前检查
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function chkRules(array $body = array())
    {
        
        $url = $this -> url . '/rep/backup/rules_chk';
        
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