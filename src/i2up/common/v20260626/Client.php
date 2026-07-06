<?php
namespace i2up\common\v20260626;

use i2up\Http\Client as HttpClient;
use i2up\Http\Error;

class Client {
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
     * 获取控制机IP或节点代理开关
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listRestRpcCcip(array $body = array())
    {
        $url = $this -> url . '/api/client/rest_rpc/cc_ip';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 磁带信息更新
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateTapeMedia(array $body = array())
    {
        $url = $this -> url . '/api/client/rest_rpc/tape_media';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 快速注册节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function registerNodeFromNode(array $body = array())
    {
        $url = $this -> url . '/api/client/rest_rpc/node';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 同步修改从类型节点
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateSlaveNode(array $body = array())
    {
        $url = $this -> url . '/api/client/update_slave_node';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 上报结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function addRestRpcresult(array $body = array())
    {
        $url = $this -> url . '/api/client/rest_rpc/result';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * Ha动态节点切换后上报接口
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function addRestRpcHa(array $body = array())
    {
        $url = $this -> url . '/api/client/rest_rpc/ha';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 服务器池更新底层传上来的中心节点IP
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function addRestRpcCluster(array $body = array())
    {
        $url = $this -> url . '/api/client/rest_rpc/cluster';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 复制/NAS规则，创建比较结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createCompareResult(array $body = array())
    {
        $url = $this -> url . '/api/client/create_compare_result';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 上传比较与同步执行差异详情
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function uploadCompareDiffDetail(array $body = array())
    {
        $url = $this -> url . '/api/client/upload_diff_detail';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 上传比较与同步任务执行结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function collectCompareResult(array $body = array())
    {
        $url = $this -> url . '/api/client/collect_compare_result';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 云主机 - 创建结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyEcs(array $body = array())
    {
        $url = $this -> url . '/api/client/rest_rpc/cloud_ecs';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 获取所有虚拟平台
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getVirtualPlatforms(array $body = array())
    {
        $url = $this -> url . '/api/client/get_virtual_platforms';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取指定虚拟平台上的所有规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getVirtualPlatformRules(array $body = array())
    {
        $url = $this -> url . '/api/client/get_virtual_platform_rules';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取所有对象存储
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getDtoStorageList(array $body = array())
    {
        $url = $this -> url . '/api/client/get_dto_storage_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取数据库同步规则（返回rpc下发的格式）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function getAllActiveRules(array $body = array())
    {
        $url = $this -> url . '/api/client/get_active_rules';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * HDFS差异比较结果上传
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function uploadHdfsCompareResult(array $body = array())
    {
        $url = $this -> url . '/api/client/upload_hdfs_compare_result';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * CFS - 机头迁移
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cfsNodeMove(array $body = array())
    {
        $url = $this -> url . '/api/client/cfs_node_move';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * CFS - 机头迁移前停止规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cfsStopRule(array $body = array())
    {
        $url = $this -> url . '/api/client/cfs_stop_rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 磁带组名 - 列表
     * 
     * @return array
     */
    public function listSlotTapeName()
    {
        $url = $this -> url . '/api/client/rest_rpc/slot_tapename';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 文件复制 - 修改规则自动启动配置
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateRepBackupNoStart(array $body = array())
    {
        $url = $this -> url . '/api/client/update_nostart';
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
            $ret = HttpClient::get($url, $body, $header);
        } else if ($method === 'post') {
            $ret = HttpClient::post($url, $body, $header);
        } else if ($method === 'put') {
            $ret = HttpClient::put($url, $body, $header);
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}