<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<link rel="icon" href="/homecss/xdcss/images/idid_ifqwmmrygrqtgnjumezdambqgyyde_57x57.png" type="image/x-icon">
<title>{{$shop->sname}}_小店管理系统</title>
<link href="/homecss/xdcss/admin/css/main.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/homecss/xdcss/admin/js/jquery.min.js"></script>

<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/spinner/ui.spinner.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/spinner/jquery.mousewheel.js"></script>

<script type="text/javascript" src="/homecss/xdcss/admin/js/jquery-ui.min.js"></script>

<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/charts/jquery.flot.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/charts/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/charts/jquery.flot.pie.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/charts/jquery.flot.resize.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/charts/jquery.sparkline.min.js"></script>

<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/forms/uniform.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/forms/jquery.cleditor.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/forms/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/forms/jquery.validationEngine.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/forms/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/forms/autogrowtextarea.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/forms/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/forms/jquery.dualListBox.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/forms/jquery.inputlimiter.min.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/forms/chosen.jquery.min.js"></script>

<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/wizard/jquery.form.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/wizard/jquery.validate.min.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/wizard/jquery.form.wizard.js"></script>

<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/uploader/jquery.plupload.queue.js"></script>

<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/tables/datatable.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/tables/tablesort.min.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/tables/resizable.min.js"></script>

<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/ui/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/ui/jquery.progress.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/ui/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/ui/jquery.breadcrumbs.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/ui/jquery.sourcerer.js"></script>

<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/calendar.min.js"></script>
<script type="text/javascript" src="/homecss/xdcss/admin/js/plugins/elfinder.min.js"></script>

<script type="text/javascript" src="/homecss/xdcss/admin/js/custom.js"></script>

<script type="text/javascript" src="/homecss/xdcss/admin/js/charts/chart.js"></script>

<!-- Shared on MafiaShare.net  --><!-- Shared on MafiaShare.net  --></head>

<body>

<!-- 左侧栏 -->
<div id="leftSide">
    <div class="logo"><b style='font-size:32px;color:white;'>{{$shop->sname}}</b></div>
    
    <div class="sidebarSep mt0"></div>
        
    
    <!-- 侧栏内容 -->
    <ul id="menu" class="nav">
        
        <!-- 本店铺的分类管理 -->
        @section('xdtype')
        <li class="forms"><a href="#" title="" class="exp"><span>分类管理</span><strong>2</strong></a>
            <ul class="sub">
                <li><a href="" title="">分类添加</a></li>
                <li><a href="" title="">分类列表</a></li>
            </ul>
        </li>
        @show
   

    </ul>


</div>


<!-- 横条 -->
<div id="rightSide">

    <!-- Top fixed navigation -->
    <div class="topNav">
        <div class="wrapper">
            <div class="welcome"><a href="#" title=""><img src="images/userPic.png" alt="" /></a><span>Howdy, Eugene!</span></div>
            <div class="userNav">
                <ul>
                    <li><a href="login.html" title=""><img src="images/icons/topnav/logout.png" alt="" /><span>Logout</span></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>

</div>

<!-- 内容区 -->

@section('con')
<p style="font-size:20px">&nbsp;&nbsp;&nbsp;&nbsp;欢迎回来,{{$shop->sname}}店铺管理员...</p>
@show


<div class="clear"></div>

</body>
</html>