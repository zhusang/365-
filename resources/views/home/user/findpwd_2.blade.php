@extends('home.user.layout')
@section('contitle')
            <ul class="clearfix nanji">
              <li>
                <span class="seqNumber">01/</span>
                <span>输入登录名</span></li>
              <li class="">
                <span class="seqNumber">02/</span>
                <span>验证信息</span></li>
              <li class="no3">
                <span class="seqNumber">03/</span>
                <span>重置密码</span></li>
            </ul>
@endsection
@section('con')
          <div id="modelform" class="formbox info_verify_box" style="display: block;">
            <form  class="formelem" method="get" action="/user/findpwdc">
            
              <h3>已向你的手机号码
                <span class="red_txt"> {{$mphone}} </span>发送验证码，请在下方输入：</h3><br>
              <ul>
                <li class="phonecheck_box">
                  <label for="" class="label_title">手机验证码：</label>
                  <div class="ui-item inputbox validateitem">
                    <input class="ui-input normalText display_u js_text_input" data-errormsg="请输入验证码"  name="pcode" type="text">
                    <a href="javascript:;" class="btn_phone js_getcheck">重新发送</a></div>
                </li>
                <li class="lg_chk_wrap">
                  <span id="lg_chk_wrap"></span>
                </li>
              </ul>
              <input value="" id="imgcheckvalue" type="hidden">
              <div class="subbox">
                <input type="submit" class="btn_check btn_sub_form" value="下一步" style="border:none">
              </div>
            </form>
          </div>
          <input type="hidden" name="tel" value="{{$phone}}">

@endsection
@section('js')
        <script type="text/javascript" src="/homecss/usercss/js/findpwd2.js"></script>
@endsection

          