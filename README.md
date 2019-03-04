# i2up SDK for PHP

此 SDK 适用于 **PHP >= 5.3.0**。使用此 SDK 构建您的网络应用程序，无论您的网络应用是一个网站程序，还是包括从云端（服务端程序）到终端（手持设备应用）的架构服务或应用，都能让您以非常便捷地方式使用英方统一数据管理平台（下简称“英方平台”）管理您的业务。

I2UP PHP SDK 属于英方服务端SDK之一，主要用于管理您英方平台上的服务器保护配置。

* 
* [PHP SDK 源码地址](https://github.com/info2soft/i2up-php-sdk)

## 安装
支持以下2种安装SDK的方法，推荐通过Composer安装SDK。

1、使用Composer安装

  * 运行 Composer 命令安装SDK：

    通过composer，你可以在composer.json 声明依赖：

    ```json
    {
        "require": {
            "i2soft/i2up-sdk": "^2.0.0"
        }
    }
    ```

    或者运行命令:

```bash
composer require i2soft/i2up-sdk
```

​	然后执行 `composer install`

  * 引用自动加载代码：


```bash
<?php
require 'vendor/autoload.php';
```
2、下载SDK代码zip包

[PHP SDK 下载地址](https://github.com/info2soft/i2up-php-sdk/releases)

因为有版本更新的维护问题，这种安装方法并不推荐，仅作为Composer 安装 
有问题的情况下的一种备选。

下载源代码包后，解压到您的项目中。 然后在您的项目中引入 autoloader：

```bash
<?php
require 'path_to_sdk/autoload.php';
```

## 运行环境
| PHP 版本 |
|:---------------------------:|
|cURL extension, 5.3 - 5.6,7.0 |

## 使用方法
安装好SDK后，下面将介绍SDK具体的使用方法：

` 英方平台的节点认证 `

1、准备英方平台的地址： 您安装英方平台的服务器地址，格式为：` http://[ip]:[port]/ `。

2、准备 SDK 本地缓存路径：本地会保存访问凭证以减少网络请求次数，您需要提供一个有读写权限的路径，格式为 ` "D:\cache\" `。

3、获取凭证（Auth）：英方PHP SDK的所有的功能，都需要合法的授权。授权凭证需要英方平台下的一对有效的` 用户名 `和` 密码 `。

4、实例化具体业务管理类： 如此处为 ` Node类 `。

5、调用对应业务方法： 如此处为 ` 节点认证 `。 

### 节点认证
```bash
use i2up\common\Auth;
use i2up\resource\v20181217\Node;
use i2up\Config;

/**
 *  获取token
 *  params['ip'] 服务器地址
 *  params['username'] 用户名
 *  params['password'] 密码
 *  params['cache_addr'] 缓存路径
 */
$auth = new Auth(Config::baseUrl, 'admin','Info1234', __DIR__);
$Node = new Node($auth);

/**
 * 节点认证
 */
$auth_node_arr = array(
    'auth_type'=>0,
    'config_addr'=>'192.168.88.75',
    'config_port'=>26821,
    'node_uuid'=>'',
    'os_user'=>'admin',
    'os_pwd'=>'i2soft',
    'i2id'=>''
);
/**
 * $res为返回结果
 */
$res = $Node->authNode($auth_node_arr);
```

## API参考

* SDK具体方法的详细参数请参照[API参考](https://i2up-api-doc.info2soft.com/apiref/)

## 常见问题
* API 的使用，demo 可以参考[单元测试](https://code.info2soft.com/web/sdk/php-sdk/tree/develop/tests/i2up/Tests)。

## 相关资源

如果您有任何关于我们文档或产品的建议和想法，欢迎您通过以下方式与我们互动讨论：

- [服务与支持](https://www.info2soft.com/support) \- 在这里您可以获得直接的一对一支持。
- [提交工单](http://support.info2soft.com/welcome/) \- 如果您的问题不适合在论坛讨论或希望及时解决，您也可以提交一个工单，我们的技术支持人员会第一时间回复您。
- [微博](https://weibo.com/info2soft)
- [常见问题FAQ](http://support.info2soft.com/service/public.pl)

## 贡献代码

1. Fork

2. 创建您的特性分支 git checkout -b my-new-feature

3. 提交您的改动 git commit -am 'Added some feature'

4. 将您的修改记录提交到远程 git 仓库 git push origin my-new-feature

5. 然后到 github 网站的该 git 远程仓库的 my-new-feature 分支下发起 Pull Request

