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
                    <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image">
                                <img src="/lottery/Public/assets//img/background.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="/lottery/Public/assets//img/faces/face-2.jpg" alt="..."/>
                                  <h4 class="title">Chet Faker<br />
                                     <a href="#"><small>@chetfaker</small></a>
                                  </h4>
                                </div>
                                <p class="description text-center">
                                    "I like the way you work it <br>
                                    No diggity <br>
                                    I wanna bag it up"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-1">
                                        <h5>12<br /><small>Files</small></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>2GB<br /><small>Used</small></h5>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>24,6$<br /><small>Spent</small></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Team Members</h4>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="/lottery/Public/assets//img/faces/face-0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        DJ Khaled
                                                        <br />
                                                        <span class="text-muted"><small>Offline</small></span>
                                                    </div>

                                                    <div class="col-xs-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="/lottery/Public/assets//img/faces/face-1.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        Creative Tim
                                                        <br />
                                                        <span class="text-success"><small>Available</small></span>
                                                    </div>

                                                    <div class="col-xs-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="/lottery/Public/assets//img/faces/face-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        Flume
                                                        <br />
                                                        <span class="text-danger"><small>Busy</small></span>
                                                    </div>

                                                    <div class="col-xs-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Company</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Company" value="Creative Code Inc.">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control border-input" placeholder="Username" value="michael23">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control border-input" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control border-input" placeholder="Company" value="Chet">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control border-input" placeholder="Last Name" value="Faker">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control border-input" placeholder="Home Address" value="Melbourne, Australia">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control border-input" placeholder="City" value="Melbourne">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control border-input" placeholder="Country" value="Australia">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="number" class="form-control border-input" placeholder="ZIP Code">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
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