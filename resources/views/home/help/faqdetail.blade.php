@extends('home.help.layout')

         @section('con')
          <div class="detail_content">
          <div class="content_detail">
            <div id="problem_title">{{$text->name}}</div>
            <div id="problem_detail">
              <p style="font-size: 14px; line-height: 2;">{{$text->text}}</p></div>
          </div>
          <div class="content_review">
            <div class="detailRe_title">
              <p>本文是否解决了您的问题</p>
              <button class="solve" >解决了</button>
              <button class="doubt" >还有疑问</button></div>
            <div class="detailRe_solve" style="display:none">
              <span>ヾ(*´∀ ˋ*)ﾉ&nbsp;&nbsp;&nbsp;&nbsp; 感谢您的反馈</span>
            </div>
            
            <div class="detailRe_doubt" style="display:none">
              <div class="doubt_title">
                <span>/(ㄒoㄒ)/~~ &nbsp;&nbsp;&nbsp;&nbsp; 非常抱歉没能为你解决问题，我会努力更新的。</span>
              </div>
            </div>
          </div>
        </div>
          @endsection
