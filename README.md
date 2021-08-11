# 禅道 Docker
禅道开源版本 12.5.3

镜像仅包含 php 运行时和禅道文件，不包含 mysql

Docker Hub : [zentao](https://hub.docker.com/r/leoskey/zentao)

# 快速开始
## 执行命令
``` shell
docker run --name zentao -v data:/var/www -p 80:80 leoskey/zentao:12.5.3
```
## 配置网站
通过浏览器访问 `http://ip:80` 会自动转入安装程序

# 使用 docker-compose 结合 MariaDB
```
version: '2'

services: 
  zentao:
    image: leoskey/zentao:12.5.3
    ports: 
      - 80:80
    depends_on: 
      - mariadb
  mariadb:
    image: mariadb:latest
    environment:
      MYSQL_ROOT_PASSWORD: #root密码
```
## 配置数据库
通过浏览器访问 `http://ip:80` 会自动转入安装程序。生成配置文件页面修改以下配置：
1. 数据库服务器地址: mariadb
2. 数据库密码: #root密码