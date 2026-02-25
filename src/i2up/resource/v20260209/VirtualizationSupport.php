<?php
namespace i2up\resource\v20260209;

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
     * 虚拟平台 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createVp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/platform';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyVp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/platform/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/platform';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeVp(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/vp/platform/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 虚拟平台 - 状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/platform/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateDataAgentVp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/platform/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteVp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/platform';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 查 虚机列表
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVM(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/vm';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取不带层级结构的虚机列表
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVmNoHierarchy(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/vm_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 查 单个虚机的详细信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getVmInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/platform/vm_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 查 平台属性
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeVpAttribute(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/info';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 虚拟平台 - 备机上备份列表（RC）1
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBakVer(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/bak_ver';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 查 备份点信息（RC）2
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBakVerInfo(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/bak_ver_info';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 存储下文件列表（RC）3
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDatastoreFile(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/datastore_file';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 数据中心列表
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listDatacenter(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/datacenter';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 虚拟平台 - 查 数据中心主机列表 （MOVE/REP）2
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDatacenterHost(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/datacenter_host';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 查 主机下资源池列表
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listResourcePool(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/resource_pool';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 查 存储列表 （MOVE/REP/RC）3
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDatastore(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/datastore';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 查 存储信息 （MOVE/REP/RC）4
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDatastoreInfo(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/datastore_info';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 创建存储目录
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDatastore(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/datastore';
        unset($body['uuid']);
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 数据存储视图对象列表查询
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDatastoreDir(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/datastore_dir';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 查 虚机磁盘
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVmDisk(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/vm_disk';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 通过UUID获取虚机磁盘
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVmDiskByUuid(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/vm_disk_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 查 平台网卡
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNetwork(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/network';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 演练配置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function drilConfigInfo(array $body = array())
    {
        $url = $this -> url . '/vp/platform/drill_config';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 -导入虚机 IP映射，模板下载
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function dl(array $body = array())
    {
        $url = $this -> url . '/dl';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 导入虚机 IP映射
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function importVmIpMapping(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/platform/batch_vm_ip_mapping';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 获取虚机网卡信息列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNetworkInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/platform/network_info_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 获取指定操作系统的信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeOsVersion(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/platform/os_version';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 获取安全组
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSecurityGroup(array $body = array())
    {
        $url = $this -> url . '/vp/platform/security_group';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 获取物理出口列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listPhysicalInterface(array $body = array())
    {
        $url = $this -> url . '/vp/platform/physical_interface_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取 虚机复制/整机备份 目标机状态信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function tgtVmStatusInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/platform/tgt_vm_status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 应急演练，获取华云平台登录虚机地址
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function archerVmConsole(array $body = array())
    {
        $url = $this -> url . '/vp/platform/archer_vm_console';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟平台 - 获取虚机状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVmStatus(array $body = array())
    {
        $url = $this -> url . '/vp/platform/vm_status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 单个平台存储列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listPlatformStorage(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/storage/platform_storage_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 修改存储授权容量、启用状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function platformAuthorize(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/storage/platform_authorize';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 存储列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpStorage(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/storage';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 通过ip和port，获取备份点列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBakVerByIp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/platform/bk_ver_by_ip';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 通过ip和port，获取备份点信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBakVerInfoByIp(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/platform/bk_ver_info_by_ip';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 测试连接节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function testNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/platform/test_node';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取规则目标机信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getTargetVmInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/platform/target_vm_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取平台卷类型列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDiskType(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/platform/disk_type';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 发现虚机
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function discoveryVm(array $body = array())
    {
        $url = $this -> url . '/vers/v3/vp/platform/discovery_vm';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * Winstack - 获取主机池列表
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listPools(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/pool_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * Winstack - 获取主机池主机列表
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listPoolHosts(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/pool_host_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * AIO - 获取集群列表
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listAioClusters(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/aio_cluster_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * AIO - 获取主机列表
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listAioHosts(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/aio_host_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * AIO - 获取主机下存储池
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listAioPools(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/aio_pool_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * AIO - 获取主机架构和仿真机类型
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeAioHostCapability(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/aio_host_capability';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * SCP - 获取主机列表
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listScpHosts(array $body = array())
    {
        $url = $this -> url . '/vp/platform/' . $body['uuid'] . '/scp_host_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟化管理 - 分页获取虚机列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVmPagination(array $body = array())
    {
        $url = $this -> url . '/vp/platform/list_vm_pagination';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 虚拟化管理 - 导出虚机列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function exportVmList(array $body = array())
    {
        $url = $this -> url . '/vp/platform/list_vm_export';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * Smartx - 获取vpc列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpc(array $body = array())
    {
        $url = $this -> url . '/vp/platform/list_vpc';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * Smartx - 获取vpc子网列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVpcSubnets(array $body = array())
    {
        $url = $this -> url . '/vp/platform/list_vpc_subnets';
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
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}