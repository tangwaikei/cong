丛丛网
=========================
有关laravel框架的详细部署及使用要求请参照其官方文档：
http://www.golaravel.com/laravel/docs/4.2/

项目部署
=======
#### 修改配置文件
首先，将app/config目录下的database.php.example重命名为database.php，并将里面有关数据库的设置修改为自己本地的数据库设置
```ruby
cp app/config/database.php.example app/config/database.php
# edit your database password
```

#### 清空数据库并运行迁移和数据填充
重新建立数据库，注意这里数据库的名字要与app/config/database.php文件中设置的相同。
``` ruby
DROP DATABASE congcong;
CREATE DATABASE `congcong` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

php artisan migrate
php artisan db:seed
```

#### 配置虚拟主机
在apache安装目录下的conf目录中，找到httpd.conf文件，确保已经成功在该文件中引入了配置虚拟主机的httpd-vhosts.conf文件
``` php
# Virtual hosts
Include <apache_dir>/extra/httpd-vhosts.conf
```
打开httpd-vhosts.conf文件，将里面原有的内容清除（如果之前没有配置过虚拟主机的话，配置过就可以跳过这里了），
然后加入以下内容：
``` php
<VirtualHost *:80>
	ServerAdmin webmaster@dummy-host.example.com
	DocumentRoot "<path_to_congcong_dir>/public"
	ServerName www.congcong.com
	ErrorLog "<path_to_apache>/logs/cong-error_log"
	CustomLog "<path_to_apache>/logs/cong-access_log" common
	<Directory "<path_to_congcong_dir>/">
		DirectoryIndex index.php index.html
		Order allow,deny
		Allow from all
		AllowOverride All
		Options Indexes FollowSymLinks MultiViews
	</Directory>
</VirtualHost>
```
注意：配置虚拟主机之后，apache默认的服务器访问路径会被覆盖为第一个虚拟主机对应的地址，所以要将原来默认的访问路径也配置成一个虚拟主机放在httpd-vhosts.conf文件的最前面 

#### 修改hosts文件
找到本地系统下的hosts文件，并在文件末尾添加如下内容。
windows系统下的hosts文件路径为：c:\windows\system32\drivers\etc
OS X和Linux系统下的hosts文件路径为：/etc/hosts

``` php
www.congcong.com 		127.0.0.1
```

#### 运行项目
启动apache服务器，在浏览器中输入http://www.congcong.com，即可访问到部署在本地的丛丛网项目

自动化测试
=======
#### 通过运行phpunit进行自动化测试

`phpunit`

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
