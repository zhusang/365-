@extends('admin.layout.layout')
@section('title','用户详情修改')
@section('con')        
<!-- 主内容区 -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">用户详情修改</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <form role="form" action="/admin/users/updetail" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>昵称：&nbsp;</label>
                                    <span>{{$user->uname}}</span>
                                </div>
                                 <div class="form-group">
                                    <label>性别：&nbsp;</label>
                                    
                                    <input  name="sex" value="w" id="female" style="margin: 0px;" type="radio">女
                                    <input  name="sex" value="m" id="male"  type="radio">男
                                   
                                    <!-- <input name="password" value="" type="password" class="form-control"> -->
                                </div>
                                <div class="form-group">
                                    <label>所在地：&nbsp;</label>
                                    <select id="s_province" name="province"></select>
                                    <select id="s_city" name="city" ></select>
                                </div>
                                <div class="form-group">
                                    <label>生日：&nbsp;</label>
                                    <select name="year" id="year">
                                  <option></option>
                                  <option value="2012" id="2012">2012</option>
                                  <option value="2011" id="2011">2011</option>
                                  <option value="2010" id="2010">2010</option>
                                  <option value="2009" id="2009">2009</option>
                                  <option value="2008" id="2008">2008</option>
                                  <option value="2007" id="2007">2007</option>
                                  <option value="2006" id="2006">2006</option>
                                  <option value="2005" id="2005">2005</option>
                                  <option value="2004" id="2004">2004</option>
                                  <option value="2003" id="2003">2003</option>
                                  <option value="2002" id="2002">2002</option>
                                  <option value="2001" id="2001">2001</option>
                                  <option value="2000" id="2000">2000</option>
                                  <option value="1999" id="1999">1999</option>
                                  <option value="1998" id="1998">1998</option>
                                  <option value="1997" id="1997">1997</option>
                                  <option value="1996" id="1996">1996</option>
                                  <option value="1995" id="1995">1995</option>
                                  <option value="1994" id="1994">1994</option>
                                  <option value="1993" id="1993">1993</option>
                                  <option value="1992" id="1992">1992</option>
                                  <option value="1991" id="1991">1991</option>
                                  <option value="1990" id="1990">1990</option>
                                  <option value="1989" id="1989">1989</option>
                                  <option value="1988" id="1988">1988</option>
                                  <option value="1987" id="1987">1987</option>
                                  <option value="1986" id="1986">1986</option>
                                  <option value="1985" id="1985">1985</option>
                                  <option value="1984" id="1984">1984</option>
                                  <option value="1983">1983</option>
                                  <option value="1982">1982</option>
                                  <option value="1981">1981</option>
                                  <option value="1980">1980</option>
                                  <option value="1979">1979</option>
                                  <option value="1978">1978</option>
                                  <option value="1977">1977</option>
                                  <option value="1976">1976</option></select>&nbsp;年&nbsp;
                                <select name="month" id="month">
                                  <option></option>
                                  <option value="01">01</option>
                                  <option value="02">02</option>
                                  <option value="03">03</option>
                                  <option value="04">04</option>
                                  <option value="05">05</option>
                                  <option value="06">06</option>
                                  <option value="07">07</option>
                                  <option value="08">08</option>
                                  <option value="09">09</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option></select>&nbsp;月&nbsp;
                                <select name="day" id="day">
                                  <option></option>
                                  <option value="01">01</option>
                                  <option value="02">02</option>
                                  <option value="03">03</option>
                                  <option value="04">04</option>
                                  <option value="05">05</option>
                                  <option value="06">06</option>
                                  <option value="07">07</option>
                                  <option value="08">08</option>
                                  <option value="09">09</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                  <option value="13">13</option>
                                  <option value="14">14</option>
                                  <option value="15">15</option>
                                  <option value="16">16</option>
                                  <option value="17">17</option>
                                  <option value="18">18</option>
                                  <option value="19">19</option>
                                  <option value="20">20</option>
                                  <option value="21">21</option>
                                  <option value="22">22</option>
                                  <option value="23">23</option>
                                  <option value="24">24</option>
                                  <option value="25">25</option>
                                  <option value="26">26</option>
                                  <option value="27">27</option>
                                  <option value="28">28</option>
                                  <option value="29">29</option>
                                  <option value="30">30</option>
                                  <option value="31">31</option>
                                </select>&nbsp;日
                            </div>
                            <div class="form-group">
                                <label>职业：&nbsp;</label>
                                <select id="profession" name="work">
                                  <option></option>
                                  <option value="白领">白领</option>
                                  <option value="学生">学生</option>
                                  <option value="时尚妈咪">时尚妈咪</option>
                                  <option value="模特">模特</option>
                                  <option value="时尚店主">时尚店主</option>
                                  <option value="传媒">传媒</option>
                                  <option value="艺术">艺术</option>
                                  <option value="其他">其他</option>
                                </select>
                            </div>
                            <input type="hidden" name="uid" value="{{$user->uid}}">
                            <div class="form-group">
                            <label>个人信息：&nbsp;</label>
                            <textarea name="message" class="form-control" cols="5" placeholder="随便写点什么，让大家了解你吧。" id="field-5"></textarea>   
                            </div>
                                {{csrf_field()}}
                                <br>
                                <button class="btn btn-success" type="submit">修改</button>
                                <button class="btn btn-danger" type="reset">重置</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>

<!-- 主内容区结束 -->
@endsection
@section('js')

    <script class="resources library" src="/admincss/assets/js/area.js" type="text/javascript"></script>
    <script type="text/javascript">_init_area();</script>
@endsection