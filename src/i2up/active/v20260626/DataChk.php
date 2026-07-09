<?php
namespace i2up\active\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class DataChk {
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
     * 对象比较 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDatacheckObjCmp(array $body = array())
    {
        $url = $this -> url . '/datacheck/obj_cmp';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createDatacheckObjCmp(array $body = array())
    {
        $url = $this -> url . '/datacheck/obj_cmp';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteDatacheckObjCmp(array $body = array())
    {
        $url = $this -> url . '/datacheck/obj_cmp';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeDatacheckObjCmp(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/datacheck/obj_cmp/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 对象比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopObjCmp(array $body = array())
    {
        $url = $this -> url . '/datacheck/obj_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartObjCmp(array $body = array())
    {
        $url = $this -> url . '/datacheck/obj_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmpStopTimeObjCmp(array $body = array())
    {
        $url = $this -> url . '/datacheck/obj_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmpResumeTimeObjCmp(array $body = array())
    {
        $url = $this -> url . '/datacheck/obj_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function cmpImmediateObjCmp(array $body = array())
    {
        $url = $this -> url . '/datacheck/obj_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较-比较结果时间列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDatacheckObjCmpResultTimeList(array $body = array())
    {
        $url = $this -> url . '/datacheck/obj_cmp/result_time_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 对象比较-比较任务结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeDatacheckObjCmpResult(array $body = array())
    {
        $url = $this -> url . '/datacheck/obj_cmp/result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 获取对象比较状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDatacheckObjCmpStatus(array $body = array())
    {
        $url = $this -> url . '/datacheck/obj_cmp/status';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 对象比较-比较结果的删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeDatacheckObjCmpResultTimeList(array $body = array())
    {
        $url = $this -> url . '/datacheck/obj_cmp/result_time_list';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 对象比较-比较结果详细信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listDatacheckObjCmpCmpInfo(array $body = array())
    {
        $url = $this -> url . '/datacheck/obj_cmp/cmp_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTbCmp(array $body = array())
    {
        $url = $this -> url . '/datacheck/tb_cmp';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较 - 获取单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmp(array $body = array())
    {
        $url = $this -> url . '/datacheck/tb_cmp/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTbCmp(array $body = array())
    {
        $url = $this -> url . '/datacheck/tb_cmp';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 表比较 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTbCmp(array $body = array())
    {
        $url = $this -> url . '/datacheck/tb_cmp';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较 历史结果（查看表比较时间结果集）
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTbCmpResultTimeList(array $body = array())
    {
        $url = $this -> url . '/datacheck/tb_cmp/result_time_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较-操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopTbCmp(array $body = array())
    {
        $url = $this -> url . '/datacheck/tb_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较-操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function restartTbCmp(array $body = array())
    {
        $url = $this -> url . '/datacheck/tb_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较-操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function resumeTbCmp(array $body = array())
    {
        $url = $this -> url . '/datacheck/tb_cmp/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 表比较-比较结果的删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmpResuluTimeList(array $body = array())
    {
        $url = $this -> url . '/datacheck/tb_cmp/result_time_list';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 表比较-比较任务结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmpResult(array $body = array())
    {
        $url = $this -> url . '/datacheck/tb_cmp/result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较-错误信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmpErrorMsg(array $body = array())
    {
        $url = $this -> url . '/datacheck/tb_cmp/error_msg';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较-比较结果
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmpCmpResult(array $body = array())
    {
        $url = $this -> url . '/datacheck/tb_cmp/cmp_result/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较-表比对的详细信息
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeTbCmpCmpDesc(array $body = array())
    {
        $url = $this -> url . '/datacheck/tb_cmp/' . $body['uuid'] . '/describe';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 表比较-启动表比对
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeTbCmpStart(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/datacheck/tb_cmp/' . $body['uuid'] . '/start';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
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