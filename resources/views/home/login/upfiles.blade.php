@extends('home.login.layout')
@section('title','设置昵称')
@section('css')
<link media="all" href="/homecss/logincss/css/index_u.css" type="text/css" rel="stylesheet">
@endsection

<body class="media_screen_1200">
  <div id="body_wrap">
    <div class="nickname_wrap">
    @section('logo')    
    <div class="logo_wrap">
        <div class="logo">
            <a title="蘑菇街" href="mg.cn" class="logo_img"></a>
        </div>
    </div>
    @endsection
    @section('con')
    <div class="nickname_box">
        <div class="reg_bd reg_bd_other ui-nickname-content">
            <div class="ui-valid-title">
              <div class="ui-valid-nick-title">
                <div class="ui-title-inner">
                  <div id="set-pic" class="ui-set-pic fl">
                    <form class="ui-form" method="post" enctype="multipart/form-data" action="/user/upload">
                      <img id="nickPic" class="ui-pic" src="/homecss/logincss/images/04.jpg" >
                      <div class="ui-tip">
                        <span class="ui-change">更换头像</span>
                        <div class="ui-bg"></div>
                      </div>
                      <input id="uploadAvartar" onchange='show()' value='' class="ui-file" name="pic" type="file">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                  </div>
                  <div class="ui-infor">
                    <p class="ui-text">马上要完成啦</p>
                    <p class="ui-word">
                      给自己换个头像，取个喜欢的名字，做一朵不一样的烟火
                    </p>
                  </div>
                </div>
                <span id="pic-tip" class="ui-pic-tip"></span>
              </div>
            </div>
            <div id="modelform" class="formbox info_add_box">
                <div class="formelem ui-valid-main" style="display: block;">
                  <p id="nameTips" class="ui-name-tip"></p>
                  <div id="setName" class="ui-item ui-set-name validateitem">
                    <input id="nickName" data-type="nickname" class="ui-input" autocomplete="off" name="uname" value="" type="text">
                    <input id="picUrl" class="ui-input" value="/homecss/logincss/images/04.jpg" type="hidden">
                    <ul id="show-name-list" class="ui-name-list"></ul>
                  <span class="tips error display_u span_a" >请设置昵称</span></div>
                  {{csrf_field()}}
                  <div class="subbox clearfix">
                      <button style="border:none" href="javascript:;" id="btn_submit" class="btn_check fl">完成</button>
                  </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
@endsection
@section('js')
    <script type="text/javascript" src="/homecss/logincss/js/index_upfiles.js"></script>
@endsection
