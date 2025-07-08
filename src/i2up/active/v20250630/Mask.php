<?php
namespace i2up\active\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class Mask {
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
     * 敏感类型列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTypes(array $body = array())
    {
        $url = $this -> url . '/mask/sens_type';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取总览列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSummaryView(array $body = array())
    {
        $url = $this -> url . '/mask/summary/list_view';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 修改敏感类型
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifySensType(array $body = array())
    {
        $url = $this -> url . '/mask/sens_type/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 获取单个类型
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function descriptSensType(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/mask/sens_type/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 新建脱敏算法
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createAlgo(array $body = array())
    {
        $url = $this -> url . '/mask/algo';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 脱敏算法列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listAlgos(array $body = array())
    {
        $url = $this -> url . '/mask/algo';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取单个算法
     * 
     * @body['id'] int  必填 ID
     * @return array
     */
    public function descriptAlgo(array $body = array())
    {
        if (empty($body) || !isset($body['id'])) return $body;
        $url = $this -> url . '/mask/algo/' . $body['id'];
        unset($body['id']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 脱敏规则列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMaskRules(array $body = array())
    {
        $url = $this -> url . '/mask/rule';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 新建脱敏规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createMaskRules(array $body = array())
    {
        $url = $this -> url . '/mask/rule';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作脱敏规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function startMaskRule(array $body = array())
    {
        $url = $this -> url . '/mask/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 操作脱敏规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopMaskRule(array $body = array())
    {
        $url = $this -> url . '/mask/rule/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 删除脱敏规则
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteMaskRule(array $body = array())
    {
        $url = $this -> url . '/mask/rule';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 获取单条脱敏规则
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeMaskRule(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/mask/rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 获取脱敏状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMaskRuleStatus(array $body = array())
    {
        $url = $this -> url . '/mask/rule/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取单个集合
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function descriptMap(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/mask/sens_db_map/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 类型列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listMap(array $body = array())
    {
        $url = $this -> url . '/mask/sens_map';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 新建集合
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createMap(array $body = array())
    {
        $url = $this -> url . '/mask/sens_map';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 修改集合
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyMap(array $body = array())
    {
        $url = $this -> url . '/mask/sens_map/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 删除集合
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteMap(array $body = array())
    {
        $url = $this -> url . '/mask/sens_map';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 新建数据库集合
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDbMap(array $body = array())
    {
        $url = $this -> url . '/mask/sens_db_map';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 数据库集合列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDbMap(array $body = array())
    {
        $url = $this -> url . '/mask/sens_db_map';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 删除数据库集合
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDbMap(array $body = array())
    {
        $url = $this -> url . '/mask/sens_db_map';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 修改数据库集合
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function modifyDbMap(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/mask/sens_db_map/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url);
        return $res;
    }

    /**
     * 新建敏感发现任务
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createSensCheck(array $body = array())
    {
        $url = $this -> url . '/mask/sens_check';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 修改敏感发现任务
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifySensCheck(array $body = array())
    {
        $url = $this -> url . '/mask/sens_check/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 删除敏感发现任务
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteSensCheck(array $body = array())
    {
        $url = $this -> url . '/mask/sens_check/delete';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 获取敏感发现列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSensCheck(array $body = array())
    {
        $url = $this -> url . '/mask/sens_check';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取单个任务详情
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function descriptSensCheck(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/mask/sens_check/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 获取任务状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSensCheckStatus(array $body = array())
    {
        $url = $this -> url . '/mask/sens_check/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 获取结果
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSensCheckResult(array $body = array())
    {
        $url = $this -> url . '/mask/sens_check/result/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 忽略列获取结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listSensCheckIgnoreCol(array $body = array())
    {
        $url = $this -> url . '/mask/sens_check/ignore_col';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 总览页面
     * 
     * @return array
     */
    public function listSummary()
    {
        $url = $this -> url . '/mask/summary';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 算法测试
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function algoTest(array $body = array())
    {
        $url = $this -> url . '/mask/algo/test';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 修改规则·
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyMaskRules(array $body = array())
    {
        $url = $this -> url . '/mask/rule/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 脱敏规则审批
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createApprove(array $body = array())
    {
        $url = $this -> url . '/mask/rule/approve';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 脱敏规则 - 导入脱敏文件配置
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function importMaskRuleInfo(array $body = array())
    {
        $url = $this -> url . '/mask/rule/import_rule/' . $body['uuid'];
        unset($body['uuid']);
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
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}