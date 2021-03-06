<?php if (!defined('THINK_PATH')) exit();?> <!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="/lottery/Public/assets//img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/lottery/Public/assets//img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title> 博彩后台 </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="/lottery/Public/assets//css/bootstrap.min.css" rel="stylesheet" />
    <link href="/lottery/Public/assets//css/animate.min.css" rel="stylesheet"/>
    <link href="/lottery/Public/assets//css/paper-dashboard.css" rel="stylesheet"/>
    <link href="/lottery/Public/assets//css/demo.css" rel="stylesheet" />
    <link href="/lottery/Public/assets//css/style.min.css" rel="stylesheet">
    <link href='/lottery/Public/assets//css/googleapis.css' rel='stylesheet' type='text/css'>
    <link href="/lottery/Public/assets//css/themify-icons.css" rel="stylesheet">

    <script src="/lottery/Public/assets//js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="/lottery/Public/assets//js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/lottery/Public/assets//js/bootstrap-checkbox-radio.js"></script>
    <script src="/lottery/Public/assets//js/chartist.min.js"></script>
    <script src="/lottery/Public/assets//js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="/lottery/Public/assets//js/paper-dashboard.js"></script>
    <script src="/lottery/Public/assets//js/demo.js"></script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/lottery/index.php/admin/index/index" class="simple-text">  博 彩 后 台 管 理 系 统  </a>
            </div>

            <ul class="nav">
                <li id="a">
                    <a href="/lottery/index.php/admin/index/index?id=1">
                        <i class="ti-panel"></i>
                        <p>综合统计</p>
                    </a>
                </li>
                <li id="b">
                    <a href="/lottery/index.php/admin/index/user?id=2">
                        <i class="ti-user"></i>
                        <p>用户管理</p>
                    </a>
                </li>
                <li id="c">
                    <a href="/lottery/index.php/admin/index/table?id=3">
                        <i class="ti-view-list-alt"></i>
                        <p>彩票管理</p>
                    </a>
                </li>
                <li id="d">
                    <a href="/lottery/index.php/admin/index/typography?id=4">
                        <i class="ti-text"></i>
                        <p>财务管理</p>
                    </a>
                </li>
                <li id="e">
                    <a href="/lottery/index.php/admin/index/icons?id=5">
                        <i class="ti-pencil-alt2"></i>
                        <p>彩种统计</p>
                    </a>
                </li>
                <li id="f">
                    <a href="/lottery/index.php/admin/index/maps?id=6">
                        <i class="ti-map"></i>
                        <p>系统设置</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

        <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" id="navss">综合统计</a>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a  class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-face-smile"></i>
                                <p>欢迎用户登录</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-user"></i>
                                    <p>用户名</p>
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">管理人信息</a></li>
                                <li><a href="/lottery/index.php/admin/login/exit">退出</a></li>
                              </ul>
                        </li>
                        <!-- <li>
                            <a href="#">
                                <i class="ti-settings"></i>
                                <p>Settings</p>
                            </a>
                        </li> -->
                    </ul>

                </div>


            </div>
        </nav>
<script type="text/javascript">

function GetQueryString(name)
{
     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);
     if(r!=null)return  unescape(r[2]); return null;
}
var ids = GetQueryString("id");

if(ids == 1){
    $("#a").addClass("active");
    $("#navss").text("综合统计");
}
if(ids == 2){
    $("#b").addClass("active");
    $("#navss").text("用户管理");
}
if(ids == 3){
    $("#c").addClass("active");
    $("#navss").text("彩票管理");
}
if(ids == 4){
    $("#d").addClass("active");
    $("#navss").text("财务管理");
}
if(ids == 5){
    $("#e").addClass("active");
    $("#navss").text("彩种统计");
}
if(ids == 6){
    $("#f").addClass("active");
    $("#navss").text("系统设置");
}

</script>

   


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Striped Table</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Salary</th>
                                    	<th>Country</th>
                                    	<th>City</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Dakota Rice</td>
                                        	<td>$36,738</td>
                                        	<td>Niger</td>
                                        	<td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Minerva Hooper</td>
                                        	<td>$23,789</td>
                                        	<td>Curaçao</td>
                                        	<td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Sage Rodriguez</td>
                                        	<td>$56,142</td>
                                        	<td>Netherlands</td>
                                        	<td>Baileux</td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>Philip Chaney</td>
                                        	<td>$38,735</td>
                                        	<td>Korea, South</td>
                                        	<td>Overland Park</td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>Doris Greene</td>
                                        	<td>$63,542</td>
                                        	<td>Malawi</td>
                                        	<td>Feldkirchen in Kärnten</td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>Mason Porter</td>
                                        	<td>$78,615</td>
                                        	<td>Chile</td>
                                        	<td>Gloucester</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Table on Plain Background</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Salary</th>
                                    	<th>Country</th>
                                    	<th>City</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Dakota Rice</td>
                                        	<td>$36,738</td>
                                        	<td>Niger</td>
                                        	<td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Minerva Hooper</td>
                                        	<td>$23,789</td>
                                        	<td>Curaçao</td>
                                        	<td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Sage Rodriguez</td>
                                        	<td>$56,142</td>
                                        	<td>Netherlands</td>
                                        	<td>Baileux</td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>Philip Chaney</td>
                                        	<td>$38,735</td>
                                        	<td>Korea, South</td>
                                        	<td>Overland Park</td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>Doris Greene</td>
                                        	<td>$63,542</td>
                                        	<td>Malawi</td>
                                        	<td>Feldkirchen in Kärnten</td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>Mason Porter</td>
                                        	<td>$78,615</td>
                                        	<td>Chile</td>
                                        	<td>Gloucester</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="#">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="#/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; 博彩后台管理系统
                </div>
            </div>
        </footer>

    </div>
</div>
</body>
</html>