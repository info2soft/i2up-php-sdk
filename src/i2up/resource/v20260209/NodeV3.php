<?php
namespace i2up\resource\v20260209;

use i2up\Http\Client;
use i2up\Http\Error;

class NodeV3 {
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
     * 0 准备-节点认证
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function authNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/auth';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 0 准备-获取节点安装包列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodePackageList(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/package_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 0 准备-获取节点容量
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkCapacity(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/check_capacity';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 0 准备-获取节点卷组列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listVg(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/vg';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 节点- 扫描集群IP获取节点信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listHostInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/host_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 0 准备-检查节点在线
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function checkNodeOnline(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/hello';
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
        $url = $this -> url . '/vers/v3/node/hello_port_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 节点 - 获取绑定云主机信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodeBindEcs(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/ecs_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 1 单项-新建节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 1 单项-脚本预创建节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function precreateNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/precreate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 1 单项-修改节点
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 1 单项-获取单个节点
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeNode(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/node/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 1 单项-新建节点 - 批量
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBatchNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/batch';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 1 单项-获取节点存储信息
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDeviceInfo(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/node/' . $body['uuid'] . '/device_info';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 单项 - (Win)节点获取磁盘挂载点
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDriverLetter(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/node/' . $body['uuid'] . '/driver_letter';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 1 单项-添加从类型节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function addSlaveNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/add_slave_node';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 1 多项-修改节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function batchModifyNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/batch_update';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 单项 - 获取节点信息
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeNodeInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/' . $body['uuid'] . '/info';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2 列表-节点列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2 列表-节点操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function upgradeNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2 列表-节点操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function maintainNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2 列表-节点操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function renewKeyNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 2 列表-节点状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodeStatus(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 2 列表-删除节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 获取Oracle DB信息 - 表空间
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function nodeGetOracleInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/oracle_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取MySQL信息 - 数据库名
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function nodeGetMysqlInfo(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/mysql_info';
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
        $url = $this -> url . '/vers/v3/node/data_ip_list';
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
        $url = $this -> url . '/vers/v3/node/data_ip';
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
        $url = $this -> url . '/vers/v3/node/hba_info';
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
        $url = $this -> url . '/vers/v3/node/check_unbind_ecs';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 节点 - version
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getNodeVersion(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/version';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 节点 - 激活
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function activeNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/active';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 节点 - 待激活列表
     * 
     * @return array
     */
    public function listWaitingActiveNode()
    {
        $url = $this -> url . '/vers/v3/node/inactive_list';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 节点 - Linux安装脚本下载
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadNodeInstallScript(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/install_script';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 节点 - 获取安装包下载链接-URL
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getNodePackageUrl(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/packge_url';
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
        $url = $this -> url . '/vers/v3/node/rules';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 节点 - 删除待激活节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteInactiveNode(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/inactive';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 节点 - 获取关联的ukey
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listNodeUkey(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/ukey';
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
        $url = $this -> url . '/vers/v3/node/platform';
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
        $url = $this -> url . '/vers/v3/node/mysql_databases';
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
        $url = $this -> url . '/vers/v3/node/mysql_tables';
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
        $url = $this -> url . '/vers/v3/node/process_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 操作节点进程
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startNodeProcess(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/process_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作节点进程
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopNodeProcess(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/process_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作节点进程
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartNodeProcess(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/process_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作节点进程
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function insmodNodeProcess(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/process_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作节点进程
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function rmmodNodeProcess(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/process_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作节点进程
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function installNodeProcess(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/process_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作节点进程
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function upgradeNodeProcess(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/process_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作节点进程
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function reinstallNodeProcess(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/process_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作节点进程
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function reinsmodNodeProcess(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/process_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作节点进程
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function upgradeAndReinsmodNodeProcess(array $body = array())
    {
        $url = $this -> url . '/vers/v3/node/process_operate';
        $res = $this -> httpRequest('post', $url, $body);
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
        $url = $this -> url . '/vers/v3/node/batch_auth';
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
        $url = $this -> url . '/vers/v3/node/kernels';
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