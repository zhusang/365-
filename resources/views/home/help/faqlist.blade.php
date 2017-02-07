@extends('home.help.layout')

         @section('con')
          <!-- 内容区 -->
          <div class="detail_content">
          <div class="content_nav" id="content_nav">
            <!-- 当前选择的问题 -->
            <span>{{$help->name}}</span>
          </div>
          <div class="content_detail">
            <div id="probem_detail">
              <ul>
                <!-- 遍历问题 -->
                @foreach($types as $k=>$v)
                  @foreach($v->sub as $kk=>$vv)
                  @if($vv->id == $_GET['id'])
                    @foreach($vv->sub as $kkk=>$vvv)
                      
                      <li>
                        <a href="/help/faqdetail?id={{$vvv->id}}">{{$vvv->name}}</a>
                      </li>
                      
                    @endforeach
                  @endif
                  @endforeach
                @endforeach
              </ul>
            </div>
          </div>
          <div id="pagination"></div>
        </div>
          @endsection
