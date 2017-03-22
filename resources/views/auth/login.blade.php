@extends('layouts._link')
@section('title', '登录')

@section('content')
    <div class="col-md-offset-5 col-md-12" style="margin-top:100px">
        <div class="panel panel-default" style="width:300px">
            <div class="panel-heading">
                <h3 >登录LLHH</h3>
            </div>
            <div class="panel-body">
                @include('shared.errors')

                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email" class="sr-only">邮箱：</label>
                        <input type="text" name="email" class="form-control"
                         placeholder="邮箱" required autofocus value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password"  class="sr-only" >密码：</label>
                        <input type="password" name="password" class="form-control" placeholder="密码" required value="{{ old('password') }}">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" style="width:10%"> 
                                &nbsp&nbsp记住我
                        </label>
                        <p class="pull-right">
                            <a href="{{ route('register') }}">注册&nbsp|&nbsp</a>
                            <a href="{{ route('password.reset') }}">忘记密码!</a>
                        </p>
                    </div>

                    <button type="submit" class="btn btn-lg btn-primary btn-block" >登录</button>
                </form>
            </div>
        </div>
    </div>

      <!-- FOOTER -->
      <footer style="margin-top:800px">
          <hr>
        <p class="text-center">&copy; Copyright 2016 -LLHH项目小组- 林浩阳 林键燃 何瑞博 何玥  </br>
            <p class="text-center"> 
                <a href="#" >粤ICP14151106号</a>
            </p>  
        </p>
      </footer>
@stop

