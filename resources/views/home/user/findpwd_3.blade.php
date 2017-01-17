@extends('home.user.layout')
@section('contitle')
            <ul class="clearfix nanji">
              <li>
                <span class="seqNumber">01/</span>
                <span>输入登录名</span></li>
              <li class="">
                <span class="seqNumber">02/</span>
                <span>验证信息</span></li>
              <li class="">
                <span class="seqNumber">03/</span>
                <span>重置密码</span></li>
            </ul>
@endsection
@section('con')
          <div id="modelform" class="formbox info_verify_box" style="display: block;">
            <form class="formelem" method="post" action="/user/uppwd">
            {{csrf_field()}}
              <div class="pl40">
                <p class="right_box mb30">恭喜你！验证成功，请重置密码并妥善保管：</p></div>
              <ul>
                <li>
                  <label class="label_title">新密码：</label>
                  <div class="ui-item inputbox validateitem">
                    <input name="newpwd1" data-type="newpassword" id="js_passbox" class="ui-input normalText display_u js_text_input newpwd1" type="password" placeholder="请输入新密码">
                    <span class="span1" style="color:#777;"></span>
                    <span class="tips error display_u s1" style="display:none">请输入新密码</span>
                    </div>
                </li>
                <li>
                  <label class="label_title">确认密码：</label>
                  <div class="ui-item inputbox validateitem">
                    <input name="newpwd2" data-type="repass" data-rebox="js_passbox" class="ui-input normalText display_u js_text_input newpwd2" type="password" placeholder="请再次输入新密码">
                    <span class="span2" style="color:#777;"></span>
                    <span class="tips error display_u s2" style="display:none">请再次确认密码</span></div>
                </li>
              </ul>
              <div class="subbox">
                <input id="asdasd" type="submit" class="btn_check btn_sub_form" style="border:none" value="完成">
              </div>
            </form>
          </div>
@endsection
@section('js')
    <script type="text/javascript" src="/homecss/usercss/js/findpwd3.js"></script>
@endsection