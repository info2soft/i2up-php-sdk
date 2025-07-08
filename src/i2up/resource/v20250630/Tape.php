<?php
namespace i2up\resource\v20250630;

use i2up\Http\Client;
use i2up\Http\Error;

class Tape {
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
     * 磁带库 - 扫描
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function sanTapeLibraries(array $body = array())
    {
        $url = $this -> url . '/tape_library/scan';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 磁带库 - 获取带库驱动器列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTapeLibraryDrivers(array $body = array())
    {
        $url = $this -> url . '/tape_library/drivers';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 磁带库 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTapeLibrary(array $body = array())
    {
        $url = $this -> url . '/tape_library';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 磁带库 - 列表
     * 
     * @return array
     */
    public function listTapeLibrary()
    {
        $url = $this -> url . '/tape_library';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 磁带库 - 单个
     * 
     * @body['uuid'] String  必填 节点uuid
     * @return array
     */
    public function describeTapeLibrary(array $body = array())
    {
        if (empty($body) || !isset($body['uuid'])) return $body;
        $url = $this -> url . '/tape_library/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 磁带库 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyTapeLibrary(array $body = array())
    {
        $url = $this -> url . '/tape_library/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 磁带库 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTapeLibrary(array $body = array())
    {
        $url = $this -> url . '/tape_library';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 磁带库 - 清点 - 刷新
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function refreshTapeLibrarySlot(array $body = array())
    {
        $url = $this -> url . '/tape_library/refresh_slot';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 磁带库 - 出库 - 获取Slot
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBusySlot(array $body = array())
    {
        $url = $this -> url . '/tape_library/busy_slot';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 磁带库 - 入库 - 扫描I/O插槽
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listBusyIeSlot(array $body = array())
    {
        $url = $this -> url . '/tape_library/busy_ie_slot';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 磁带库 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function importTapeLibrary(array $body = array())
    {
        $url = $this -> url . '/tape_library/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 磁带库 - 获取备份主机状态
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTapeLibraryStatus(array $body = array())
    {
        $url = $this -> url . '/tape_library/status';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 磁带库 - 驱动器管理 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function enableTapeLibraryDrivers(array $body = array())
    {
        $url = $this -> url . '/tape_library/drivers_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 磁带库 - 驱动器管理 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function moveTapeLibraryDrivers(array $body = array())
    {
        $url = $this -> url . '/tape_library/drivers_operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 介质 - 磁带池列表
     * 
     * @return array
     */
    public function listTapePools()
    {
        $url = $this -> url . '/tape_media/tape_pools';
        $res = $this -> httpRequest('get', $url);
        return $res;
    }

    /**
     * 介质 - 磁带池 - 新建
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function createTapePool(array $body = array())
    {
        $url = $this -> url . '/tape_media/tape_pool';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 介质 - 磁带池 - 修改
     * 
     * @body['uuid'] String  必填 节点uuid
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function updateTapePool(array $body = array())
    {
        $url = $this -> url . '/tape_media/tape_pool/' . $body['uuid'];
        unset($body['uuid']);
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 介质 - 磁带池 - 删除
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTapePool(array $body = array())
    {
        $url = $this -> url . '/tape_media/tape_pool';
        $res = $this -> httpRequest('delete', $url, $body);
        return $res;
    }

    /**
     * 介质 - 磁带 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function freezeTapeMedia(array $body = array())
    {
        $url = $this -> url . '/tape_media/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 介质 - 磁带 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function browseTapeMedia(array $body = array())
    {
        $url = $this -> url . '/tape_media/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 介质 - 磁带 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function rebuildTapeMedia(array $body = array())
    {
        $url = $this -> url . '/tape_media/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 介质 - 磁带 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function exportTapeMedia(array $body = array())
    {
        $url = $this -> url . '/tape_media/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 介质 - 磁带 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function moveTapeMedia(array $body = array())
    {
        $url = $this -> url . '/tape_media/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 介质 - 磁带 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function refreshTapeMedia(array $body = array())
    {
        $url = $this -> url . '/tape_media/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 介质 - 磁带 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function formatTapeMedia(array $body = array())
    {
        $url = $this -> url . '/tape_media/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 介质 - 磁带 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function eraseTapeMedia(array $body = array())
    {
        $url = $this -> url . '/tape_media/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 介质 - 磁带 - 操作
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function deleteTapeMedia(array $body = array())
    {
        $url = $this -> url . '/tape_media/operate';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 介质 - 磁带 - 列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTapeMedia(array $body = array())
    {
        $url = $this -> url . '/tape_media';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 查看磁带
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTapeMediaBkData(array $body = array())
    {
        $url = $this -> url . '/tape_media/bkdata';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 查看磁带 - 磁带数据
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTapeMediaBkFiles(array $body = array())
    {
        $url = $this -> url . '/tape_media/bkfiles';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 查看磁带 - 磁带详情
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTapeMediaDetails(array $body = array())
    {
        $url = $this -> url . '/tape_media/details';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 磁带库 - 发现新带库
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function refreshTapeLibrary(array $body = array())
    {
        $url = $this -> url . '/tape_library/refresh';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 磁带库 - 机械臂主机列表
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTapeLibraryRoboticArm(array $body = array())
    {
        $url = $this -> url . '/tape_library/robotic_arm_list';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 设置驱动/磁带冻结次数
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function setTapeLibraryFreezeNumber(array $body = array())
    {
        $url = $this -> url . '/tape_library/freeze_number';
        $res = $this -> httpRequest('post', $url, $body);
        return $res;
    }

    /**
     * 磁带库 - 机械臂主机 - 修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyTapeLibraryRoboticArm(array $body = array())
    {
        $url = $this -> url . '/tape_library/robotic_arm';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 磁带库 - 修改备份服务器 获取驱动
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function listTapeLibraryBackupSvrDrivers(array $body = array())
    {
        $url = $this -> url . '/tape_library/backup_svr_drivers';
        $res = $this -> httpRequest('get', $url, $body);
        return $res;
    }

    /**
     * 磁带库 - 备份服务器 - 修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyTapeLibraryBackupSvr(array $body = array())
    {
        $url = $this -> url . '/tape_library/backup_svr';
        $res = $this -> httpRequest('put', $url, $body);
        return $res;
    }

    /**
     * 磁带库 - 驱动器 - 修改
     * 
     * @param array $body  参数详见 API 手册
     * @return array
     */
    public function modifyTapeLibraryDrivers(array $body = array())
    {
        $url = $this -> url . '/tape_library/drivers';
        $res = $this -> httpRequest('put', $url, $body);
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