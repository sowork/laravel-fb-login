# laravel-fb-login
laravel5.5前后台登录分离
* 前台地址 127.0.0.1
* 后台地址 127.0.0.1/admin

项目根目录下执行
* composer install
* 复制.env.example 创建数据库，修改数据库配置
* php artisan key:generate
* php artisan migrate
* php artisan db:seed --class=AdminTableSeeder 生成后台用户 账户：admin 密码：admin
* 注：前台账号密码自己注册
