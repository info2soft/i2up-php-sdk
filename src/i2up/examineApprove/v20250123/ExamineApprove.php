<?php
namespace i2up\examineApprove\v20250123;

use i2up\Http\Client;
use i2up\Http\Error;

class ExamineApprove {
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
     * 审批 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createExamineApprove(array $body = array())
    {
        $url = $this -> url . '/examine_approve';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 审批 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listExamineApprove(array $body = array())
    {
        $url = $this -> url . '/examine_approve';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 审批 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function approveExamineApprove(array $body = array())
    {
        $url = $this -> url . '/examine_approve/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 审批 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function enableExamineApprove(array $body = array())
    {
        $url = $this -> url . '/examine_approve/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 审批 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function receiptExamineApprove(array $body = array())
    {
        $url = $this -> url . '/examine_approve/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 审批 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteExamineApprove(array $body = array())
    {
        $url = $this -> url . '/examine_approve/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 审批 - 审批人列表
     * 
     * @return array
     */
    public function listExamineApproveApproverList()
    {
        $url = $this -> url . '/examine_approve/approver_list';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 审批 - 新建 - 文件上传
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function examineApproveImport(array $body = array())
    {
        $url = $this -> url . '/examine_approve/import';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 审批 - 查看文件信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listExamineApproveFileInfo(array $body = array())
    {
        $url = $this -> url . '/examine_approve/file_info';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 审批 - 文件下载
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function examineApproveDownlowdFile(array $body = array())
    {
        $url = $this -> url . '/examine_approve/download';
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
        }
        
        if (!$ret->ok()) {
            return array(null, new Error($url, $ret));
        }
        $r = ($ret->body === null) ? array() : $ret->json();
        $r['ret'] = $ret->statusCode;
        return array($r, null);
    }
}