<?php

namespace i2up\vp\v20181217;

use i2up\Config;
use i2up\Http\Client;
use i2up\Http\Error;

class VirtualizationSupport {
    private $url;
    private $token;
    public function __construct($auth)
    {
        $this -> url = Config::baseUrl . 'vp';
        $this -> token = $auth -> token();
    }

    /**
     * 虚拟平台（vp）- 新建
     * @param array $body
     * @return array
     */
    public function createVp(array $body = array())
    {
        $url = $this -> url . '/platform';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 获取单个
     * @param array $body
     * $body['uuid'] String
     * @return array
     */
    public function describeVp(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/platform/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 编辑
     * @param array $body
     * @return array
     */
    public function modifyVp(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/platform/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 获取列表
     * @param array $body
     * $body['limit'] String  可选，每页显示条数
     * $body['page'] String  可选，页数
     * @return array
     */
    public function listVp(array $body = array())
    {
        $url = $this -> url . '/platform/';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 获取状态
     * @param array $body
     * $body['vp_uuids'] Array  vp_uuid 数组
     * @return array
     */
    public function listVpStatus(array $body = array())
    {
        $url = $this -> url . '/platform/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 更新数据代理
     * @param array $body  更新数据代理版本
     * $body['operate'] String
     * $body['vp_uuids'] Array  平台uuid数组
     * @return array
     */
    public function updateDataAgentVp(array $body = array())
    {
        $url = $this -> url . '/platform/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 删除
     * @param array $body
     * $body['vp_uuids'] Array  要删的平台uuid数组
     * @return array
     */
    public function deleteVp(array $body = array())
    {
        $url = $this -> url . '/platform/status';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 查询 虚机列表
     * @param array $body
     * $body['uuid'] String   必填 vp_uuid
     * $body['path'] String  （*必填）存储路径，（根目录“/”） 当平台为esxi主机时，可以设置HostAgent，直接获取所有虚机列表
     * $body['force_rpc'] Number  1: 强制从RPC获取最新内容；0：从数据库缓存读取
     * @return array
     */
    public function listVM(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/platform/'. $body['uuid'] .'/vm';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 查询 平台属性
     * @param array $body
     * $body['uuid'] String  必填 vp_uuid
     * @return array
     */
    public function describeVpAttribute(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/platform/' . $body['uuid'] . '/info';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 查询 备机上备份列表（RC）
     * @param array $body
     * $body['uuid'] String  必填 vp_uuid
     * $body['bk_path'] String  路径
     * $body['bk_uuid'] String  备机节点uuid
     * @return array
     */
    public function listBakVer(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/platform/' . $body['uuid'] . '/bak_ver';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 查询 备份点信息/虚机配置信息（RC）
     * @param array $body
     * $body['uuid'] String  必填 vp_uuid
     * $body['bk_uuid'] String  必填 备机uuid
     * $body['bk_path'] String  必填 备机规则备份路径
     * $body['group_uuid'] String  可选，用来获取组，备份规则group_uuid，获取此组下所有vm的list
     * $body['time'] String  可选，用来获取单个，用户选择的时间点，格式 2018-10-25_16-08-12
     * $body['ver_sig'] String  可选，用来获取单个，配置信息ID；备份列表返回的 backup_rule_uuid
     * @return array
     */
    public function listBakVerInfo(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/platform/' . $body['uuid'] . '/bak_ver_info';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台（vp）- 查询 数据存储下文件列表（RC）
     * @param array $body
     * $body['uuid'] String  必填 vp_uuid
     * $body['dir_file'] String  必填 文件路径（"/"：查询根目录所有文件）
     * $body['ds_name'] String  必填 数据存储名称
     * $body['dc_name'] String  必填 数据中心名称
     * @return array
     */
    public function listDatastoreFile(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/platform/' . $body['uuid'] . '/datastore_file';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  查询 数据中心列表（MOVE/REP）
     * @param array $body
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function listDatacenter(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/platform/' . $body['uuid'] . '/datacenter';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     *  查询 数据中心主机列表 （MOVE/REP）2
     *
     * $body['uuid'] String  必填 uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDatacenterHost(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/platform/' . $body['uuid'] . '/datacenter_host';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  查询 存储列表 （MOVE/REP）3
     *
     * $body['uuid'] String  必填 uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDatastore(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/platform/' . $body['uuid'] . '/datastore';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  查询 存储信息 （MOVE/REP）4
     *
     * $body['uuid'] String  必填 uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDatastoreInfo(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/platform/' . $body['uuid'] . '/datastore_info';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  虚机备份（vp_backup) - 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVpBackup(array $body = array())
    {
        $url = $this -> url . '/backup';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     *  修改（仅模板）
     *
     * @param array $body  参数详见 API 手册
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function modifyVpBackup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/backup/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     *  获取单个
     * @param array $body
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function describeVpBackup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/backup/';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     *  获取单个（组）
     * @param $body array
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function describeVpBackupGroup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/backup/' . $body['uuid'] . '/group';
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
        $url = $this -> url . '/backup';
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

        $url = $this -> url . '/backup/group';
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

        $url = $this -> url . '/backup/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     *  操作 启停
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startVpBackup(array $body = array())
    {

        $url = $this -> url . '/backup/operate';
        $body['operate'] = 'start';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    public function stopVpBackup(array $body = array())
    {
        $url = $this -> url . '/backup/operate';
        $body['operate'] = 'stop';
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

        $url = $this -> url . '/backup';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 虚机恢复（vp_recovery）- 新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVpRecovery(array $body = array())
    {

        $url = $this -> url . '/recovery';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 虚机恢复（vp_recovery）-  获取单个（组）
     *
     * @param array $body
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function describeVpRecoveryGroup(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/recovery/' . $body['uuid'] . '/group';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 虚机恢复（vp_recovery）-  获取列表
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpRecovery(array $body = array())
    {

        $url = $this -> url . '/recovery';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚机恢复（vp_recovery）-  状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpRecoveryStatus(array $body = array())
    {

        $url = $this -> url . '/recovery/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚机恢复（vp_recovery）-  操作 启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startVpRecovery(array $body = array())
    {
        $url = $this -> url . '/recovery/operate';
        $body['operate'] = 'start';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 虚机恢复（vp_recovery）-  操作 停止
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopVpRecovery(array $body = array())
    {
        $url = $this -> url . '/recovery/operate';
        $body['operate'] = 'stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 虚机恢复（vp_recovery）-  操作 清除已完成
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function clearFinishVpRecovery(array $body = array())
    {
        $url = $this -> url . '/recovery/operate';
        $body['operate'] = 'clear_finish';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 虚机恢复（vp_recovery）-  删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVpRecovery(array $body = array())
    {

        $url = $this -> url . '/recovery';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 虚机迁移（vp_move）-  新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVpMove(array $body = array())
    {
        $url = $this -> url . '/move';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 虚机复制（vp_rep）-  新建
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVpRep(array $body = array())
    {

        $url = $this -> url . '/rep';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 虚机迁移（vp_move）-  获取单个
     *
     * @param array $body
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function describeVpMove(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/move/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * 虚机复制（vp_rep）-  获取单个
     *
     * @param array $body
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function describeVpRep(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/rep/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 虚机迁移（vp_move）- 修改（模板）
     *
     * @body['uuid'] String  必填
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyVpMove(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/move/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     * 虚机复制（vp_rep）- 修改（模板）
     *
     * @body['uuid'] String  必填
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyVpRep(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/rep/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 虚机迁移（vp_move）-  获取列表
     *
     * @param array $body
     * @return array
     */
    public function listVpMove(array $body = array())
    {
        $url = $this -> url . '/move';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 虚机复制（vp_rep）-  获取列表
     *
     * @param array $body
     * @return array
     */
    public function listVpRep(array $body = array())
    {
        $url = $this -> url . '/rep';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚机迁移（vp_move）- 状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpMoveStatus(array $body = array())
    {
        $url = $this -> url . '/move/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚机复制（vp_rep）- 状态
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpRepStatus(array $body = array())
    {
        $url = $this -> url . '/move/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚机迁移（vp_move）-  启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startVpMove(array $body = array())
    {
        $url = $this -> url . '/move/operate';
        $body['operate'] = 'start';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 虚机复制（vp_rep）-  启动
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startVpRep(array $body = array())
    {
        $url = $this -> url . '/rep/operate';
        $body['operate'] = 'start';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 虚机迁移（vp_move）-  停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopVpMove(array $body = array())
    {
        $url = $this -> url . '/move/operate';
        $body['operate'] = 'stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 虚机复制（vp_rep）-  停止
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopVpRep(array $body = array())
    {
        $url = $this -> url . '/rep/operate';
        $body['operate'] = 'stop';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 虚机迁移（vp_move）-  开始迁移
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function moveVpMove(array $body = array())
    {
        $url = $this -> url . '/move/operate';
        $body['operate'] = 'move';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 虚机复制（vp_rep）-  切换
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function failoverVpRep(array $body = array())
    {
        $url = $this -> url . '/rep/operate';
        $body['operate'] = 'failover';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 虚机复制（vp_rep）-  回切
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function failbackVpRep(array $body = array())
    {
        $url = $this -> url . '/rep/operate';
        $body['operate'] = 'failback';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 虚机迁移（vp_move）-  删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVpMove(array $body = array())
    {

        $url = $this -> url . '/move';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 虚机复制（vp_rep）- 删除
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVpRep(array $body = array())
    {
        $url = $this -> url . '/rep';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }


    /**
     * 虚机复制（vp_rep）- 获取快照列表信息
     *
     * @param array $body
     * $body['uuid'] String  必填 uuid
     * @return array
     */
    public function listVpRepPointList(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/rep/' . $body['uuid'] . '/point_list';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 虚机恢复（vp_file_recovery）- 文件恢复 - 1 获取恢复虚机ip
     *
     * @param array $body 参数详见 API 手册
     * @return array
     */
    public function describeVpFileRecoveryVmIp(array $body = array())
    {
        $url = $this -> url . '/file_recovery/vm_ip';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚机恢复（vp_file_recovery）- 文件恢复 - 2 livecd磁盘分区
     *
     * @param array $body 参数详见 API 手册
     * @return array
     */
    public function vpFileRecoveryLivecdPartition(array $body = array())
    {
        $url = $this -> url . '/file_recovery/livecd_partition';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 虚机恢复（vp_file_recovery）- 文件恢复 - 新建
     *
     * @param array $body 参数详见 API 手册
     * @return array
     */
    public function createVpFileRecovery(array $body = array())
    {
        $url = $this -> url . '/file_recovery';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 虚机恢复（vp_file_recovery）- 文件恢复 - 获取单个
     *
     * @param array $body 参数详见 API 手册
     * @return array
     */
    public function describeVpFileRecovery(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/file_recovery/' . $body['uuid'];
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 虚机恢复（vp_file_recovery）- 文件恢复 - 获取获取列表
     *
     * @param array $body 参数详见 API 手册
     * @return array
     */
    public function listVpFileRecovery(array $body = array())
    {
        $url = $this -> url . '/file_recovery';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚机恢复（vp_file_recovery）- 文件恢复 - 状态
     *
     * @param array $body 参数详见 API 手册
     * @return array
     */
    public function listVpFileRecoveryStatus(array $body = array())
    {
        $url = $this -> url . '/file_recovery/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚机恢复（vp_file_recovery）- 文件恢复 - 删除
     *
     * @param array $body 参数详见 API 手册
     * @return array
     */
    public function deleteVpFileRecovery(array $body = array())
    {
        $url = $this -> url . '/file_recovery';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    private function httpRequest($method, $url, $body = null)
    {
        if (isset($this -> token)) {
            $header = array('Authorization' => $this -> token);
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