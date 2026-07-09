<?php
namespace i2up\backupWork\v20260626;

use i2up\Http\Client;
use i2up\Http\Error;

class BackupWork {
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
     * 定时任务 - 获取列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackupWork(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_work';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 定时任务 - 获取单个任务
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBackupWork(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/backup_work/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 定时任务 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBackupWork(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_work';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 定时任务 - 获取日志
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackupWorkLogs(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_work/' . $body['uuid'] . '/logs';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 定时任务 - 获取关键事件
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function listBackupWorkKeyEvents(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/backup_work/' . $body['uuid'] . '/key_events';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 定时任务 - 查看任务结果
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeBackupWorkResult(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_work/result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 定时任务 - 查看备份集相关任务结果
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function describeBackupMigrateWorkResult(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_work/' . $body['uuid'] . '/result_list';
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 定时任务 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function rebootBackupWork(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_work/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 定时任务 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function stopBackupWork(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_work/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 定时任务 - 下载失败文件清单
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadFailedFileList(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_work/download_failed_file_list';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 定时任务 - 下载转储记录
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function downloadMigrateWorkList(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_work/download_migrate_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 定时任务 - 设置虚机优先级
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function seVmpriority(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_work/set_vm_priority';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 定时任务 - 获取任务CDP延迟信息
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackupWorkCdpResult(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_work/cdp_result';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 过滤器 - 列表
     * 
     * @return array
     */
    public function listBackupWorkFilter()
    {
        $url = $this -> url . '/vers/v3/backup_work_filter';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 过滤器 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createBackupWorkFilter(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_work_filter';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 过滤器 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyBackupWorkFilter(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_work_filter/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 过滤器 - 详情
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBackupWorkFilter(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/backup_work_filter/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 过滤器 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBackupWorkFilter(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_work_filter';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 备份集验证任务 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBackupVerifyWork(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_work/verify_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 备份集验证记录 - 获取单个任务
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeBackupVerifyWork(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/vers/v3/backup_work/verify_list/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 备份集验证记录 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteBackupVerify(array $body = array())
    {
        $url = $this -> url . '/vers/v3/backup_work/verify_list';
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