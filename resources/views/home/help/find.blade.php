@extends('home.help.layout')
         
         @section('con')
          <!-- 内容区 -->
          <div class="detail_content">
            <div class="content_nav" id="content_nav">
              <span>根据您搜索的“</span>
              <span class="questionTitle">{{$seach}}</span>
              <span>”共有{{$len}}条相关问题。</span></div>
            <div class="content_detail">
              <div id="probem_detail">
                <ul>
                  <!-- 问题遍历 -->
                  @if($len == 0)
                  <li>
                    暂无数据
                  </li>
                  @else
                  @foreach($help as $k=>$v)
                  <li>
                    <a href="/help/faqdetail?id={{$v->cid}}">{{$v->name}}</a>
                  </li>
                  @endforeach
                  @endif
  
                </ul>
              </div>
            </div>
          </div>
          @endsection
