<?php
namespace i2up\resource\v20240228;

use i2up\Http\Client;
use i2up\Http\Error;

class Node {
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
     * 节点认证
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function authNode(array $body = array())
    {
        
        $url = $this -> url . 'node/auth';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 获取节点安装包列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodePackageList(array $body = array())
    {
        
        $url = $this -> url . 'node/package_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 获取节点容量
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkCapacity(array $body = array())
    {
        
        $url = $this -> url . 'node/check_capacity';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 获取节点卷组列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVg(array $body = array())
    {
        
        $url = $this -> url . 'node/vg';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  扫描集群IP获取节点信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHostInfo(array $body = array())
    {
        
        $url = $this -> url . 'node/host_info';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 检查节点在线
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkNodeOnline(array $body = array())
    {
        
        $url = $this -> url . 'node/hello';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 按端口批量搜索节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchSearchByPort(array $body = array())
    {
        
        $url = $this -> url . 'node/hello_port_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取绑定云主机信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodeBindEcs(array $body = array())
    {
        
        $url = $this -> url . 'node/ecs_info';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 新建节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createNode(array $body = array())
    {
        
        $url = $this -> url . 'node';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 修改节点
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyNode(array $body = array())
    {
        
        $url = $this -> url . 'node/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }
    /**
     * 获取单个节点
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeNode(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . 'node/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * 新建节点 - 批量
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBatchNode(array $body = array())
    {
        
        $url = $this -> url . 'node/batch';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 获取节点存储信息
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDeviceInfo(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . 'node/' . $body['uuid'] . '/device_info';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  (Win)节点获取磁盘挂载点
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDriverLetter(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . 'node/' . $body['uuid'] . '/driver_letter';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * 添加从类型节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function addSlaveNode(array $body = array())
    {
        
        $url = $this -> url . 'node/add_slave_node';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 修改节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchModifyNode(array $body = array())
    {
        
        $url = $this -> url . 'node/batch_update';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  获取节点信息
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeNodeInfo(array $body = array())
    {
        
        $url = $this -> url . 'node/' . $body['uuid'] . '/info';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 节点列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNode(array $body = array())
    {
        
        $url = $this -> url . 'node';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 节点操作 - 升级
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function upgradeNode(array $body = array())
    {

        $url = $this -> url . 'node/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 节点操作 - 切换维护模式
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function maintainNode(array $body = array())
    {

        $url = $this -> url . 'node/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 节点操作 - 更新
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateNode(array $body = array())
    {

        $url = $this -> url . 'node/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 节点操作 - 更新公钥
     *
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function renewKeyNode(array $body = array())
    {

        $url = $this -> url . 'node/operate';

        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 节点状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodeStatus(array $body = array())
    {
        
        $url = $this -> url . 'node/status';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 删除节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteNode(array $body = array())
    {
        
        $url = $this -> url . 'node';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  获取节点列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function node(array $body = array())
    {
        
        $url = $this -> url . 'dashboard/node';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  表空间
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function nodeGetOracleInfo(array $body = array())
    {
        
        $url = $this -> url . 'node/oracle_info';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  数据库名
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function nodeGetMysqlInfo(array $body = array())
    {
        
        $url = $this -> url . 'node/mysql_info';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 获取数据地址列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function dataIpList(array $body = array())
    {
        
        $url = $this -> url . 'node/data_ip_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 修改数据地址
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyDataIp(array $body = array())
    {
        
        $url = $this -> url . 'node/data_ip';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 获取 fc 客户端 hba卡信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHbaInfo(array $body = array())
    {
        
        $url = $this -> url . 'node/hba_info';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 解绑云主机检查
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkUnbindEcs(array $body = array())
    {
        
        $url = $this -> url . 'node/check_unbind_ecs';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  version
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getNodeVersion(array $body = array())
    {
        
        $url = $this -> url . 'node/version';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  激活
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function activeNode(array $body = array())
    {
        
        $url = $this -> url . 'node/active';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     *  待激活列表
     * 
     * @return array
     */
    public function listWaitingActiveNode()
    {
        
        $url = $this -> url . 'node/inactive_list';
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     *  Linux安装脚本下载
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadNodeInstallScript(array $body = array())
    {
        
        $url = $this -> url . 'node/install_script';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  获取安装包下载链接-URL
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getNodePackageUrl(array $body = array())
    {
        
        $url = $this -> url . 'node/packge_url';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 获取节点关联规则列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRules(array $body = array())
    {
        
        $url = $this -> url . 'node/rules';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     *  删除待激活节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteInactiveNode(array $body = array())
    {
        
        $url = $this -> url . 'node/inactive';
        
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }
    /**
     *  获取关联的ukey
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodeUkey(array $body = array())
    {
        
        $url = $this -> url . 'node/ukey';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 获取关联平台列表（云平台 Fusion）
     * 
     * @return array
     */
    public function listPlatform()
    {
        
        $url = $this -> url . 'node/platform';
        
        $res = $this -> httpRequest('get', $url);
        return $res;
    }
    /**
     * 获取Mysql数据库
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMysqlDatabases(array $body = array())
    {
        
        $url = $this -> url . 'node/mysql_databases';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 获取Mysql（库当中的）表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMysqlTables(array $body = array())
    {
        
        $url = $this -> url . 'node/mysql_tables';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 查询节点进程
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodeProcess(array $body = array())
    {
        
        $url = $this -> url . 'node/process_list';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 操作节点进程
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function operateNodeProcess(array $body = array())
    {
        
        $url = $this -> url . 'node/process_operate';
        
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }
    /**
     * 查询内核模块
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listKernels(array $body = array())
    {
        
        $url = $this -> url . 'node/kernels';
        
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }
    /**
     * 批量设置节点auth.conf
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchAuthNode(array $body = array())
    {
        
        $url = $this -> url . 'node/batch_auth';
        
        $res = $this -> httpRequest('post', $url, $body);
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