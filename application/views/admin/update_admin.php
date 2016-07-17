<!doctype html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin table Examples</title>
    <meta name="description" content="这是一个 table 页面">
    <meta name="keywords" content="table">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <base href="<?php echo site_url();?>">

    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
    <link rel="stylesheet" href="assets/css/admin.css">
    <style>
        .am-g form{
            width: 100%;
            height: 250px;


            margin-top: 50px;
            border: 1px solid gainsboro;
            position: relative;

        }
        .am-g  label{
            display: block;
            font-size: 0.8125em;
            color: #000;
            display: block;
            font-weight: bold;
            margin-top: 50px;

        }
        .am-g  input[type="text"]{

            width: 200px;
            color: #9198A3;
            background: #fff;
            border: 1px solid cadetblue;

        }
        .pwd{
            margin-right: 10px;

        }
        .am-g  input[type="submit"]{
            display: block;
           margin-top: 60px;
            margin-right: 0;
            background: #b2e2fa;
            width: 100px;
            position: absolute;

            left: 30px;
            top:100px;

        }
        .am-g button{
            background: #b2e2fa;
            display: block;
            margin-left: 120px;
            margin-top:54px;

        }
        .wrap{
            margin: 0 auto;
            margin-top: 50px;
            margin-left: 50px;
        }
    </style>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->

<?php include 'admin-header.php'; ?>

<div class="am-cf admin-main">
    <?php include 'admin-sidebar.php'; ?>

    <!-- content start -->
    <div class="admin-content">

        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">表格</strong> / <small>Table</small></div>
        </div>

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-6">
                <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                        <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
                        <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="am-g">

                <form  method="post" action="admin/update_admin">
                    <div class="wrap">
                        <input type="hidden" name="admin_id" value="<?php echo $this ->input ->get('admin_id'); ?>">
                        <lable>用户名：</lable>
                        <input type="text" name="username"<?php echo $row -> admin_name; ?> value="">
                        <br>
                        <lable class="pwd"> 密 码：</lable>
                        <input type="text" name="pwd">
                        <input type="submit" value="保存修改">
                        <button type="button"><span>取消修改</span></button>

                    </div>
                </form>

        </div>
    </div>
    <!-- content end -->
</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
    <hr>
    <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
<script>

    $(function(){
        $('.am-btn').on('click', function(){
            var adminId =  $(this).data('id');
            if(confirm('确定是否删除记录，不可恢复!?')){
                location.href = 'admin/delete_admin?admin_id='+adminId;
            }
        });
    });
</script>
</body>
</html>

