GitHub.PHP
-------------
>GitHub API client for PHP - [github.piscdong.com](http://github.piscdong.com/)

>GitHub的账号登录及api操作，使用oauth 2.0 

>提供简单的账号登录、获取代码仓库、代码片段等功能，如果需要其他功能可以根据官方的api文档自行添加

    //示例：获取登录用户的issues
    $result=$github->api('user/issues', array(), 'GET');

文件说明
-------------
>github.php	主文件

>demo.php	示例程序

>config.php	示例程序配置

>callback.php	示例程序回调文件

开发者信息
-------------
>[PiscDong studio](http://www.piscdong.com/)
