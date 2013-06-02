<?php
session_start(); //此示例中要使用session
require_once('config.php');
require_once('github.php');

$github_t=isset($_SESSION['github_t'])?$_SESSION['github_t']:'';

//检查是否已登录
if($github_t!=''){
	$github=new githubPHP($github_k, $github_s, $github_t);

	//获取登录用户信息
	$result=$github->me();
	var_dump($result);

	/**
	//获取登录用户代码仓库
	//$result=$github->repos();
	//var_dump($result);
	**/

	/**
	//获取登录用户代码片段
	$result=$github->gists();
	var_dump($result);
	**/

}else{
	//生成登录链接
	$github=new githubPHP($github_k, $github_s);
	$login_url=$github->login_url($callback_url);
	echo '<a href="',$login_url,'">点击进入授权页面</a>';
}
?>