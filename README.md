     ####环境配置
nginx >= 1.18
php  >=7.4
mysql >=5.7

## 1.拉取项目
```angular2html
git clone ...
```
### 2. 设置文件权限，生成key
```angular2html
[root@VM-0-5-centos blog]# sudo chown -R www:www storage
[root@VM-0-5-centos blog]# sudo chown -R www:www bootstrap/cache
[root@VM-0-5-centos blog]# php artisan key:generate
Application key set successfully.

```
