<?php
namespace i2up\vp\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class VirtualizationSupport {
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
     *  虚机规则 成功率
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeVpRuleRate(array $body = array())
    {
        
        $url = $this -> url . '/dashboard/vp_rule';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  虚机 保护率
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeVmProtectRate(array $body = array())
    {
        
        $url = $this -> url . '/dashboard/vp_vm';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVpBackup(array $body = array())
    {
        
        $url = $this -> url . '/vp/backup';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyVpBackup(array $body = array())
    {
        
        $url = $this -> url . '/vp/backup/group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeVpBackup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vp/backup/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  获取单个（组）
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeVpBackupGroup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vp/backup/group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpBackup(array $body = array())
    {
        
        $url = $this -> url . '/vp/backup';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  列表（组）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpBackupGroup(array $body = array())
    {
        
        $url = $this -> url . '/vp/backup/group';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpBackupStatus(array $body = array())
    {
        
        $url = $this -> url . '/vp/backup/status';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  操作 启动
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startVpBackup(array $body = array())
    {
        
        $url = $this -> url . '/vp/backup/operate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopVpBackup(array $body = array())
    {

        $url = $this -> url . '/vp/backup/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 立即启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startImmediatelyVpBackup(array $body = array())
    {

        $url = $this -> url . '/vp/backup/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 虚机发现
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function autoDiscoveryVpBackup(array $body = array())
    {

        $url = $this -> url . '/vp/backup/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVpBackup(array $body = array())
    {
        
        $url = $this -> url . '/vp/backup';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  删除备份点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVpBackupPoint(array $body = array())
    {
        
        $url = $this -> url . '/vp/backup/backup_data';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVpRecovery(array $body = array())
    {
        
        $url = $this -> url . '/vp/recovery';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  获取单个 组
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeVpRecoveryGroup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vp/recovery/group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpRecovery(array $body = array())
    {
        
        $url = $this -> url . '/vp/recovery';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpRecoveryStatus(array $body = array())
    {
        
        $url = $this -> url . '/vp/recovery/status';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  操作 - 启动
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startVpRecovery(array $body = array())
    {
        
        $url = $this -> url . '/vp/recovery/operate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopVpRecovery(array $body = array())
    {

        $url = $this -> url . '/vp/recovery/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 清除已完成
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function clearFinishVpRecovery(array $body = array())
    {

        $url = $this -> url . '/vp/recovery/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVpRecovery(array $body = array())
    {
        
        $url = $this -> url . '/vp/recovery';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  新建 - 迁移
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVpMove(array $body = array())
    {
        
        $url = $this -> url . '/vp/move';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  新建 - 复制
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVpRep(array $body = array())
    {

        $url = $this -> url . '/vp/rep';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  批量创建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchCreateVpRep(array $body = array())
    {
        
        $url = $this -> url . '/vp/rep/batch';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  修改 - 迁移
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyVpMoveGroup(array $body = array())
    {
        
        $url = $this -> url . '/vp/rep/group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  修改- 复制
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyVpRepGroup(array $body = array())
    {

        $url = $this -> url . '/vp/rep/group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  获取单个 - 迁移
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeVpMove(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vp/move/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  获取单个 - 复制
     *
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeVpRep(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vp/rep/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  修改模板 - 迁移
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyVpMove(array $body = array())
    {
        
        $url = $this -> url . '/vp/move/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  修改模板 - 复制
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyVpRep(array $body = array())
    {

        $url = $this -> url . '/vp/rep/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  获取列表 - 迁移
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpMove(array $body = array())
    {
        
        $url = $this -> url . '/vp/move';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取列表 - 复制
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpRep(array $body = array())
    {

        $url = $this -> url . '/vp/rep';

        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  状态 - 迁移
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpMoveStatus(array $body = array())
    {
        
        $url = $this -> url . '/vp/move/status';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  状态 - 复制
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpRepStatus(array $body = array())
    {

        $url = $this -> url . '/vp/rep/status';

        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  操作迁移规则 - 启动
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startVpMove(array $body = array())
    {
        
        $url = $this -> url . '/vp/move/operate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作迁移规则 - 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopVpMove(array $body = array())
    {

        $url = $this -> url . '/vp/move/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作迁移规则 - 迁移
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function moveVpMove(array $body = array())
    {

        $url = $this -> url . '/vp/move/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作迁移规则 - 创建目标虚机
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTargetVmVpMove(array $body = array())
    {

        $url = $this -> url . '/vp/move/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作迁移规则 - 迁移完成
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function finishVpMove(array $body = array())
    {

        $url = $this -> url . '/vp/move/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作复制规则 - 启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startVpRep(array $body = array())
    {

        $url = $this -> url . '/vp/rep/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作复制规则 - 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopVpRep(array $body = array())
    {

        $url = $this -> url . '/vp/rep/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除 - 迁移
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVpMove(array $body = array())
    {
        
        $url = $this -> url . '/vp/move';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  删除 - 复制
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVpRep(array $body = array())
    {

        $url = $this -> url . '/vp/rep';

        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  获取快照
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpRepPointList(array $body = array())
    {
        
        $url = $this -> url . '/vp/rep/' . $body['uuid'] . '/point_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpDrill(array $body = array())
    {
        
        $url = $this -> url . '/vp/drill';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVpDrill(array $body = array())
    {
        
        $url = $this -> url . '/vp/drill';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  获取单个（组）
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeVpDrill(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vp/drill/group/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVpDrill(array $body = array())
    {
        
        $url = $this -> url . '/vp/drill';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpDrillStatus(array $body = array())
    {
        
        $url = $this -> url . '/vp/drill/status';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取控制台地址
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getConsoleUrl(array $body = array())
    {
        
        $url = $this -> url . '/vp/drill/console_url';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  操作 - 启动
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startVpDrill(array $body = array())
    {
        
        $url = $this -> url . '/vp/drill/operate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopVpDrill(array $body = array())
    {

        $url = $this -> url . '/vp/drill/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 设置状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function setStatusVpDrill(array $body = array())
    {

        $url = $this -> url . '/vp/drill/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVpFileRecovery(array $body = array())
    {
        
        $url = $this -> url . '/vp/file_recovery';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyVpFileRecovery(array $body = array())
    {
        
        $url = $this -> url . '/vp/file_recovery/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpFileRecovery(array $body = array())
    {
        
        $url = $this -> url . '/vp/file_recovery';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeVpFileRecovery(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vp/file_recovery/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function attachVpFileRecovery(array $body = array())
    {
        
        $url = $this -> url . '/vp/file_recovery/operate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpFileRecoveryStatus(array $body = array())
    {
        
        $url = $this -> url . '/vp/file_recovery/status';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVpFileRecovery(array $body = array())
    {
        
        $url = $this -> url . '/vp/file_recovery';
        
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
        return array($r, null);
    }
}