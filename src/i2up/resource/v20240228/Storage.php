<?php
namespace i2up\resource\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class Storage {
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
     *  新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createStorageConfig(array $body = array())
    {
        
        $url = $this -> url . 'storage';
        
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
    public function modifyStorageConfig(array $body = array())
    {
        
        $url = $this -> url . 'storage/' . $body['uuid'];
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
    public function describeStorageConfig(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . 'storage/' . $body['uuid'];
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
    public function listStorageConfig(array $body = array())
    {
        
        $url = $this -> url . 'storage';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteStorageConfig(array $body = array())
    {
        
        $url = $this -> url . 'storage';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStorageStatus(array $body = array())
    {
        
        $url = $this -> url . 'storage/status';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  上传设备信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function https(array $body = array())
    {
        
        $url = $this -> url . 'storage/device_info';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  获取设备信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeStorageDeviceInfo(array $body = array())
    {
        
        $url = $this -> url . 'storage/device_info';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取曲线图
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeStorageHistoryData(array $body = array())
    {
        
        $url = $this -> url . 'storage/' . $body['uuid'] . '/chart';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取容量信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStorageInfo(array $body = array())
    {
        
        $url = $this -> url . 'storage/info';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取可用节点列表
     * 
     * @return array
     */
    public function listAvailableNode()
    {
        
        $url = $this -> url . 'storage/node';
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  修改开关值
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function switchStorageQuota(array $body = array())
    {
        
        $url = $this -> url . 'storage/' . $body['uuid'] . '/switch';
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  新建
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createStorageQuota(array $body = array())
    {
        
        $url = $this -> url . 'storage/' . $body['uuid'] . '/quota';
        unset($body['uuid']);
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
    public function modifyStorageQuota(array $body = array())
    {
        
        $url = $this -> url . 'storage/' . $body['uuid'] . '/quota/' . $body['quota_uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  获取列表
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listStorageQuota(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . 'storage/' . $body['uuid'] . '/quota';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  删除
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteStorageQuota(array $body = array())
    {
        
        $url = $this -> url . 'storage/' . $body['uuid'] . '/quota';
        unset($body['uuid']);
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDevice(array $body = array())
    {
        
        $url = $this -> url . 'storage/dev';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取可用列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listAvailableDevice(array $body = array())
    {
        
        $url = $this -> url . 'storage/available_dev';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  创建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createPool(array $body = array())
    {
        
        $url = $this -> url . 'storage/pool';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  扩展
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function expandPool(array $body = array())
    {
        
        $url = $this -> url . 'storage/pool';
        
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deletePool(array $body = array())
    {
        
        $url = $this -> url . 'storage/pool';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  获取
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listPool(array $body = array())
    {
        
        $url = $this -> url . 'storage/pool';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listPoolInfo(array $body = array())
    {
        
        $url = $this -> url . 'storage/pool/info';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 通过节点rpc来获取池列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listPoolFromNode(array $body = array())
    {
        
        $url = $this -> url . 'storage/pool_from_node';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  创建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createFs(array $body = array())
    {
        
        $url = $this -> url . 'storage/file_system';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteFs(array $body = array())
    {
        
        $url = $this -> url . 'storage/file_system';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  获取
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFs(array $body = array())
    {
        
        $url = $this -> url . 'storage/file_system';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  创建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createFsSnapshot(array $body = array())
    {
        
        $url = $this -> url . 'storage/file_system/snap';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteFsSnapshot(array $body = array())
    {
        
        $url = $this -> url . 'storage/file_system/snap';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  获取
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFsSnapshot(array $body = array())
    {
        
        $url = $this -> url . 'storage/file_system/snap';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  创建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createFsCloneSnapshot(array $body = array())
    {
        
        $url = $this -> url . 'storage/file_system/snap/clone';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteFsCloneSnapshot(array $body = array())
    {
        
        $url = $this -> url . 'storage/file_system/snap/clone';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFsCloneSnapshot(array $body = array())
    {
        
        $url = $this -> url . 'storage/file_system/snap/clone';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  创建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVolume(array $body = array())
    {
        
        $url = $this -> url . 'storage/volume';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVolume(array $body = array())
    {
        
        $url = $this -> url . 'storage/volume';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  获取
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVolume(array $body = array())
    {
        
        $url = $this -> url . 'storage/volume';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  创建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVolumeSnapshot(array $body = array())
    {
        
        $url = $this -> url . 'storage/volume/snap';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVolumeSnapshot(array $body = array())
    {
        
        $url = $this -> url . 'storage/volume/snap';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  获取
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVolumeSnapshot(array $body = array())
    {
        
        $url = $this -> url . 'storage/volume/snap';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  创建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVolumeCloneSnapshot(array $body = array())
    {
        
        $url = $this -> url . 'storage/volume/snap/clone';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVolumeCloneSnapshot(array $body = array())
    {
        
        $url = $this -> url . 'storage/volume/snap/clone';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVolumeCloneSnapshot(array $body = array())
    {
        
        $url = $this -> url . 'storage/volume/snap/clone';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  创建
     * 
     * @return array
     */
    public function create()
    {
        
        $url = $this -> url . 'storage/vmdk';
        
        $res = $this -> httpRequest('post', $url);
        return $res;
    }
    /**
     *  删除
     * 
     * @return array
     */
    public function delete()
    {
        
        $url = $this -> url . 'storage/vmdk';
        
        $res = $this -> httpRequest('delete', $url);
        return $res;
    }
    /**
     *  创建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBackStore(array $body = array())
    {
        
        $url = $this -> url . 'storage/backstore';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBackStore(array $body = array())
    {
        
        $url = $this -> url . 'storage/backstore';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  获取信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackStore(array $body = array())
    {
        
        $url = $this -> url . 'storage/backstore/info';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  分配给ISCSI发起者
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createAssignBackStore(array $body = array())
    {
        
        $url = $this -> url . 'storage/backstore/assign';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  查看被分配给哪些ISCSI发起者
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listAssignBackStore(array $body = array())
    {
        
        $url = $this -> url . 'storage/backstore/assign';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取可创建 块 的 盘 的 路径
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackStoreAvailablePath(array $body = array())
    {
        
        $url = $this -> url . 'storage/backstore/available_path';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取版本信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeIscsiVersion(array $body = array())
    {
        
        $url = $this -> url . 'storage/iscsi/version';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取发现权限
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeIscsiAuth(array $body = array())
    {
        
        $url = $this -> url . 'storage/iscsi/auth';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  设置发现权限
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createIscsiDiscoverAuth(array $body = array())
    {
        
        $url = $this -> url . 'storage/iscsi/auth';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  取消发现权限
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteIscsiDiscoverAuth(array $body = array())
    {
        
        $url = $this -> url . 'storage/iscsi/auth';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  全局参数设置：自动添加 ISCSI目标端 门户
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createAutoAddPortal(array $body = array())
    {
        
        $url = $this -> url . 'storage/iscsi/auto_add_portal';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  全局参数设置：自动添加 单元逻辑号映射
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createAutoAddLun(array $body = array())
    {
        
        $url = $this -> url . 'storage/iscsi/auto_add_luns';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  获取全局参数：自动添加ISCSI目标端 门户
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeAutoAddPortal(array $body = array())
    {
        
        $url = $this -> url . 'storage/iscsi/auto_add_portal';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取全局参数：自动添加单元逻辑映射
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeAutoAddLun(array $body = array())
    {
        
        $url = $this -> url . 'storage/iscsi/auto_add_luns';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeIscsiTargetStatus(array $body = array())
    {
        
        $url = $this -> url . 'storage/target/status';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listIscsiTarget(array $body = array())
    {
        
        $url = $this -> url . 'storage/target/info';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  添加
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createIscsiTarget(array $body = array())
    {
        
        $url = $this -> url . 'storage/target';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteIscsiTarget(array $body = array())
    {
        
        $url = $this -> url . 'storage/target';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  获取目标端列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listIscsiTargetList(array $body = array())
    {
        
        $url = $this -> url . 'storage/target_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  添加
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createIscsiInitiator(array $body = array())
    {
        
        $url = $this -> url . 'storage/initiator';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteIscsiInitiator(array $body = array())
    {
        
        $url = $this -> url . 'storage/initiator';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  设置连接权限
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createIscsiInitiatorConnectAuth(array $body = array())
    {
        
        $url = $this -> url . 'storage/initiator/auth';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  添加 逻辑单元号（LUN）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createIscsiInitiatorLun(array $body = array())
    {
        
        $url = $this -> url . 'storage/initiator/lun';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除 逻辑单元号（LUN）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteIscsiInitiatorLun(array $body = array())
    {
        
        $url = $this -> url . 'storage/initiator/lun';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  发现目标端
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createIscsiInitiatorDiscoverTarget(array $body = array())
    {
        
        $url = $this -> url . 'storage/initiator/discover';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  连接目标端
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createIscsiInitiatorConnectTarget(array $body = array())
    {
        
        $url = $this -> url . 'storage/initiator/connect';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  断开目标段连接
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteIscsiInitiatorConnectTarget(array $body = array())
    {
        
        $url = $this -> url . 'storage/initiator/connect';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  获取发现门户列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listIscsiInitiatorPortal(array $body = array())
    {
        
        $url = $this -> url . 'storage/initiator/portal';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  删除发现门户
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteIscsiInitiatorPortal(array $body = array())
    {
        
        $url = $this -> url . 'storage/initiator/portal';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  刷新会话
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function iscsiInitiatorRefreshSession(array $body = array())
    {
        
        $url = $this -> url . 'storage/initiator/refresh_session';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  获取信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTpg(array $body = array())
    {
        
        $url = $this -> url . 'storage/tpg/info';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  添加
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTpg(array $body = array())
    {
        
        $url = $this -> url . 'storage/tpg';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTpg(array $body = array())
    {
        
        $url = $this -> url . 'storage/tpg';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  设置连接权限
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTpgConnectAuth(array $body = array())
    {
        
        $url = $this -> url . 'storage/tpg/auth';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  取消连接权限
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTpgConnectAuth(array $body = array())
    {
        
        $url = $this -> url . 'storage/tpg/auth';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  添加 逻辑单元（LUN）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTpgLun(array $body = array())
    {
        
        $url = $this -> url . 'storage/tpg/lun';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  是否开启连接权限
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTpgConnectAuth(array $body = array())
    {
        
        $url = $this -> url . 'storage/tpg/auth';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  删除 逻辑单元号（LUN）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTpgLun(array $body = array())
    {
        
        $url = $this -> url . 'storage/tpg/lun';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  添加 门户（Portal）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTpgPortal(array $body = array())
    {
        
        $url = $this -> url . 'storage/tpg/portal';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  删除 门户（Portal）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTpgPortal(array $body = array())
    {
        
        $url = $this -> url . 'storage/tpg/portal';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     * Server是否注册
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function registerServer(array $body = array())
    {
        
        $url = $this -> url . 'storage/server_register';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTape(array $body = array())
    {
        
        $url = $this -> url . 'tape';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  扫描
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function scanTapes(array $body = array())
    {
        
        $url = $this -> url . 'tape/scan_tapes';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTape(array $body = array())
    {
        
        $url = $this -> url . 'tape';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeTape(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . 'tape/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  更新
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyTape(array $body = array())
    {
        
        $url = $this -> url . 'tape/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     *  删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTape(array $body = array())
    {
        
        $url = $this -> url . 'tape';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  获取slot列表（废弃）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSlot(array $body = array())
    {
        
        $url = $this -> url . 'tape/slot_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  操作 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function eraseTape(array $body = array())
    {
        
        $url = $this -> url . 'tape/operate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 格式化
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function formatTape(array $body = array())
    {

        $url = $this -> url . 'tape/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 浏览
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function browseTape(array $body = array())
    {

        $url = $this -> url . 'tape/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 重构
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function rebuildCatalogTape(array $body = array())
    {

        $url = $this -> url . 'tape/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 磁带卸载
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function unloadTape(array $body = array())
    {

        $url = $this -> url . 'tape/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 磁带导入
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function importTape(array $body = array())
    {

        $url = $this -> url . 'tape/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 磁带导出
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function exportTape(array $body = array())
    {

        $url = $this -> url . 'tape/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  操作 - 磁带池更新
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateTapePools(array $body = array())
    {

        $url = $this -> url . 'tape/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  slot：获取备份数据
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBkData(array $body = array())
    {
        
        $url = $this -> url . 'tape/bkdata_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  查看备份数据下的详细文件
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBkFile(array $body = array())
    {
        
        $url = $this -> url . 'tape/bkfile_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取有磁带的驱动索引
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBusyDrive(array $body = array())
    {
        
        $url = $this -> url . 'tape/busy_drive_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取没有磁带的空闲槽
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFreeSlot(array $body = array())
    {
        
        $url = $this -> url . 'tape/free_slot_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取有磁带的IE槽
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBusy(array $body = array())
    {
        
        $url = $this -> url . 'tape/busy_ieslot_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取空闲的IE Slot
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFree(array $body = array())
    {
        
        $url = $this -> url . 'tape/free_ieslot_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取有磁带的Slot
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBusySlot(array $body = array())
    {
        
        $url = $this -> url . 'tape/busy_slot_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  查看磁带详情
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function discribeTapeDetail(array $body = array())
    {
        
        $url = $this -> url . 'tape/details';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTapePools(array $body = array())
    {
        
        $url = $this -> url . 'tape_pool';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取磁带列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTapePoolSlots(array $body = array())
    {
        
        $url = $this -> url . 'tape_pool/list_slots';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTapePool(array $body = array())
    {
        
        $url = $this -> url . 'tape_pool';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  磁带池操作 - 移入
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function addSlotTapePool(array $body = array())
    {
        
        $url = $this -> url . 'tape_pool/operate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  磁带池操作 - 移除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function removeSlotTapePool(array $body = array())
    {

        $url = $this -> url . 'tape_pool/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  磁带池操作 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTapePool(array $body = array())
    {

        $url = $this -> url . 'tape_pool/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  磁带池操作 - 更新
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateTapePool(array $body = array())
    {

        $url = $this -> url . 'tape_pool/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  获取磁带名
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTapeNames(array $body = array())
    {
        
        $url = $this -> url . 'tape_pool/tape_names';
        
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