<?php

namespace i2up\common;

use i2up\Http\Client;
use i2up\Http\Error;

class Storage {
    private $url;
    private $token;
    private $accessKey;
    private $secretKey;
    public function __construct($auth)
    {
        $this -> url = $auth -> ip . 'storage';
        if ($auth -> tokenAuthType) {
            $this -> token = $auth -> token();
        } else {
            $this -> accessKey = $auth -> accessKey();
            $this -> secretKey = $auth -> secretKey();
        }
    }

    /**
     * 存储配置 - 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createStorageConfig(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 存储配置 - 修改
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyStorageConfig(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 存储配置 - 获取单个
     *
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeStorageConfig(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 存储配置 - 获取列表
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listStorageConfig(array $body = array())
    {

        $url = $this -> url;
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 存储配置 - 删除
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteStorageConfig(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 容量信息
     * @param array $body
     * $body['node_uuid'] String  节点uuid与复制规则uuid二选一, 节点uuid
     * $body['rep_uuid'] String  复制规则uuid和节点二选一, 复制规则uuid
     * $body['byte_format'] Number  1，有且仅有1enable，其他值忽略, 格式化bytes
     * @return array
     */
    public function listStorageInfo(array $body = array())
    {
        $url = $this -> url . '/info';
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
        $url = $this -> url . '/node';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 设备 - 获取列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDevice(array $body = array())
    {
        $url = $this -> url . '/dev';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 设备 - 获取可用列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listAvailableDevice(array $body = array())
    {
        $url = $this -> url . '/available_dev';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 存储池 - 创建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createPool(array $body = array())
    {
        $url = $this -> url . '/pool';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 存储池 - 扩展
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function expandPool(array $body = array())
    {
        $url = $this -> url . '/pool';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 存储池 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deletePool(array $body = array())
    {
        $url = $this -> url . '/pool';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 存储池 - 获取
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listPool(array $body = array())
    {
        $url = $this -> url . '/pool';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 存储池 - 获取信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listPoolInfo(array $body = array())
    {
        $url = $this -> url . '/pool/info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 文件系统 - 创建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createFs(array $body = array())
    {
        $url = $this -> url . '/file_system';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 文件系统 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteFs(array $body = array())
    {
        $url = $this -> url . '/file_system';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 文件系统 - 获取
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFs(array $body = array())
    {
        $url = $this -> url . '/file_system';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 文件系统/快照 - 创建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createFsSnapshot(array $body = array())
    {
        $url = $this -> url . '/file_system/snap';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 文件系统/快照 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteFsSnapshot(array $body = array())
    {
        $url = $this -> url . '/file_system/snap';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 文件系统/快照 - 获取
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFsSnapshot(array $body = array())
    {
        $url = $this -> url . '/file_system/snap';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 文件系统 / 快照 / 克隆 - 创建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createFsCloneSnapshot(array $body = array())
    {
        $url = $this -> url . '/file_system/snap/clone';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 文件系统 / 快照 / 克隆 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteFsCloneSnapshot(array $body = array())
    {
        $url = $this -> url . '/file_system/snap/clone';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     *  文件系统 / 快照 / 克隆 - 列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listFsCloneSnapshot(array $body = array())
    {
        $url = $this -> url . '/file_system/snap/clone';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }


    /**
     * 卷 - 创建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVolume(array $body = array())
    {
        $url = $this -> url . '/volume';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 卷 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVolume(array $body = array())
    {
        $url = $this -> url . '/volume';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 卷 - 获取
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVolume(array $body = array())
    {
        $url = $this -> url . '/volume';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 卷/快照 - 创建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVolumeSnapshot(array $body = array())
    {

        $url = $this -> url . '/volume/snap';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 卷/快照 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVolumeSnapshot(array $body = array())
    {
        $url = $this -> url . '/volume/snap';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 卷/快照 - 获取
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVolumeSnapshot(array $body = array())
    {
        $url = $this -> url . '/volume/snap';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 卷/快照/克隆 - 创建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVolumeCloneSnapshot(array $body = array())
    {

        $url = $this -> url . '/volume/snap/clone';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 卷/快照/克隆 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVolumeCloneSnapshot(array $body = array())
    {

        $url = $this -> url . '/volume/snap/clone';

        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 卷/快照/克隆 - 列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVolumeCloneSnapshot(array $body = array())
    {

        $url = $this -> url . '/volume/snap/clone';

        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * backStore - 创建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBackStore(array $body = array())
    {
        $url = $this -> url . '/backstore';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * backStore - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBackStore(array $body = array())
    {
        $url = $this -> url . '/backstore';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * backStore - 获取信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackStore(array $body = array())
    {

        $url = $this -> url  . '/backstore/info';

        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * backStore - 分配给ISCSI发起者
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createAssignBackStore(array $body = array())
    {
        $url = $this -> url . '/backstore/assign';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * backStore - 查看被分配给哪些ISCSI发起者
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listAssignBackStore(array $body = array())
    {
        $url = $this -> url . '/backstore/assign';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * backStore - 获取可创建 块 的 盘 的 路径
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackStoreAvailablePath(array $body = array())
    {
        $url = $this -> url . '/backstore/available_path';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * iSCSI - 获取版本信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeIscsiVersion(array $body = array())
    {
        $url = $this -> url . '/iscsi/version';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * iSCSI - 获取发现权限
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeIscsiAuth(array $body = array())
    {
        $url = $this -> url . '/iscsi/auth';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * iSCSI - 设置发现权限
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createIscsiDiscoverAuth(array $body = array())
    {
        $url = $this -> url . '/iscsi/auth';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * iSCSI - 取消发现权限
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteIscsiDiscoverAuth(array $body = array())
    {
        $url = $this -> url . '/iscsi/auth';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * iSCSI - 全局参数设置：自动添加 ISCSI目标端 门户
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createAutoAddPortal(array $body = array())
    {
        $url = $this -> url . '/iscsi/auto_add_portal';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * iSCSI - 全局参数设置：自动添加 单元逻辑号映射
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createAutoAddLun(array $body = array())
    {
        $url = $this -> url . '/iscsi/auto_add_luns';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * iSCSI - 获取全局参数：自动添加ISCSI目标端 门户
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeAutoAddPortal(array $body = array())
    {
        $url = $this -> url . '/iscsi/auto_add_portal';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * iSCSI - 获取全局参数：自动添加单元逻辑映射
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeAutoAddLun(array $body = array())
    {
        $url = $this -> url . '/iscsi/auto_add_luns';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * iSCSI目标端 - 获取状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeIscsiTargetStatus(array $body = array())
    {
        $url = $this -> url . '/target/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * iSCSI目标端 - 获取信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listIscsiTarget(array $body = array())
    {
        $url = $this -> url . '/target/info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * iSCSI目标端 - 添加
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createIscsiTarget(array $body = array())
    {
        $url = $this -> url . '/target';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * iSCSI目标端 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteIscsiTarget(array $body = array())
    {
        $url = $this -> url;
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * iSCSI发起者 - 添加
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createIscsiInitiator(array $body = array())
    {
        $url = $this -> url . '/initiator';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * iSCSI发起者 - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteIscsiInitiator(array $body = array())
    {
        $url = $this -> url . '/initiator';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * iSCSI发起者 - 设置连接权限
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createIscsiInitiatorConnectAuth(array $body = array())
    {
        $url = $this -> url . '/initiator/auth';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * iSCSI发起者 - 添加 逻辑单元号（LUN）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createIscsiInitiatorLun(array $body = array())
    {
        $url = $this -> url . '/initiator/lun';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * iSCSI发起者 - 删除 逻辑单元号（LUN）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteIscsiInitiatorLun(array $body = array())
    {
        $url = $this -> url . '/initiator/lun';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * iSCSI发起者 - 发现目标端
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createIscsiInitiatorDiscoverTarget(array $body = array())
    {
        $url = $this -> url . '/initiator/discover';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * iSCSI发起者 - 连接目标端
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createIscsiInitiatorConnectTarget(array $body = array())
    {
        $url = $this -> url . '/initiator/connect';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * iSCSI发起者 - 断开目标段连接
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteIscsiInitiatorConnectTarget(array $body = array())
    {
        $url = $this -> url . '/initiator/connect';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * iSCSI发起者 - 获取发现门户列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listIscsiInitiatorPortal(array $body = array())
    {
        $url = $this -> url . '/initiator/portal';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * iSCSI发起者 - 删除发现门户
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteIscsiInitiatorPortal(array $body = array())
    {
        $url = $this -> url . '/initiator/portal';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 目标门户组(TPG) - 获取信息
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTpg(array $body = array())
    {
        $url = $this -> url . '/tpg/info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  目标门户组(TPG) - 添加
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTpg(array $body = array())
    {
        $url = $this -> url . '/tpg';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 目标门户组(TPG) - 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTpg(array $body = array())
    {
        $url = $this -> url . '/tpg';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 目标门户组(TPG) - 设置连接权限
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTpgConnectAuth(array $body = array())
    {
        $url = $this -> url . '/tpg/auth';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 目标门户组(TPG) - 取消连接权限
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTpgConnectAuth(array $body = array())
    {
        $url = $this -> url . '/tpg/auth';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 目标门户组(TPG) - 添加 逻辑单元（LUN）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTpgLun(array $body = array())
    {
        $url = $this -> url . '/tpg/lun';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 目标门户组(TPG) - 是否开启连接权限
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTpgConnectAuth(array $body = array())
    {
        $url = $this -> url . '/tpg/auth';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 目标门户组(TPG) - 删除 逻辑单元号（LUN）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTpgLun(array $body = array())
    {
        $url = $this -> url . '/tpg/lun';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 目标门户组(TPG) - 添加 门户（Portal）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTpgPortal(array $body = array())
    {
        $url = $this -> url . '/tpg/portal';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 目标门户组(TPG) - 删除 门户（Portal）
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTpgPortal(array $body = array())
    {
        $url = $this -> url . '/tpg/portal';
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
        }

        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        return array($r, null);
    }
}