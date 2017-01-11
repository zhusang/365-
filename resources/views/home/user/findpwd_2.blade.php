@extends('home.user.layout')
@section('contitle')

@endsection
@section('con')
          <div id="modelform" class="formbox info_verify_box" style="display: block;">
            <form data-action="" class="formelem" method="post" action="http://portal.mogujie.com/user/findpwd?code=z9x6t9a63n9luq6s">
              <h3>已向你的手机号码
                <span class="red_txt">187****9648</span>发送验证码，请在下方输入：</h3>
              <ul>
                <li class="phonecheck_box">
                  <label for="" class="label_title">手机验证码：</label>
                  <div class="ui-item inputbox validateitem">
                    <input class="ui-input normalText display_u js_text_input" data-errormsg="请输入验证码" data-type="code" name="validNum" value="" type="text">
                    <a href="javascript:;" class="btn_phone js_getcheck">重新发送</a></div>
                </li>
                <li class="lg_chk_wrap">
                  <span id="lg_chk_wrap"></span>
                </li>
              </ul>
              <input value="" id="imgcheckvalue" type="hidden">
              <div class="subbox">
                <a href="javascript:;" class="btn_check btn_sub_form">下一步</a>
                <a href="http://portal.mogujie.com/user/findpwd" class="gray_txt u_line ui-line-btn ml5">更换邮箱验证</a></div>
            </form>
          </div>
@endsection
@section('js')

@endsection

          