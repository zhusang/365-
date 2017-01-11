@extends('home.user.layout')
@section('contitle')

@endsection
@section('con')
          <div id="modelform" class="formbox info_verify_box" style="display: block;">
            <form data-action="" class="formelem" method="post" action="http://portal.mogujie.com/user/findpwd?token=gold37jdn5vfpoci&amp;ptp=1.bGvSub.0.0.Vgw5y">
              <div class="pl40">
                <p class="right_box mb30">恭喜你！验证成功，请重置密码并妥善保管：</p></div>
              <ul>
                <li>
                  <label class="label_title">新密码：</label>
                  <div class="ui-item inputbox validateitem">
                    <input name="newPwd1" data-type="newpassword" id="js_passbox" class="ui-input normalText display_u js_text_input" type="password"></div>
                </li>
                <li>
                  <label class="label_title">确认密码：</label>
                  <div class="ui-item inputbox validateitem">
                    <input name="newPwd2" data-type="repass" data-rebox="js_passbox" class="ui-input normalText display_u js_text_input" type="password"></div>
                </li>
              </ul>
              <input name="userName" value="" type="hidden">
              <div class="subbox">
                <a href="javascript:;" class="btn_check btn_sub_form">完成</a></div>
            </form>
          </div>
@endsection
@section('js')

@endsection