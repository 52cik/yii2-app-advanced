# Yii2 高级模板

> 自己项目用，请勿直接使用，出任何问题概不负责，项目仅供参考。

## 安装

克隆后执行下面命令：

``` sh
$ composer install --prefer-dist --optimize-autoloader
```

安装依赖即可，composer 镜像都配置好了的。

### 1. 初始化项目

``` sh
$ php init
```

### 2. 数据库迁移

yii 默认的 user 表，可自行修改。

``` sh
$ php yii migrate/up
```

### 3. 添加管理员

用户名: admin
密码: 123123
自定义修改: console/controllers/InitController.php

``` sh
$ php yii init/admin
```

### 4. 配置完成

可以使用了。


## nginx 配置

其他配置都一样，但是要开启 pathinfo 支持以及 rewrite。

``` 
# 开启 php 并支持 pathinfo
include enable-php-pathinfo.conf;

# yii2 rewrite
location / {
    try_files $uri $uri/ /index.php?$args;
}
```

默认开启了 `urlManager` 前后端也都配置好了规则。

---

**以下是 Yii2 官方描述。**

---


Yii 2 Advanced Project Template
===============================

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).


DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
tests                    contains various tests for the advanced application
    codeception/         contains tests developed with Codeception PHP Testing Framework
```
