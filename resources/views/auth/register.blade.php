@extends('layouts._link')
@section('title', '注册')

@section('content')
    <div class="col-md-offset-5 col-md-12" style="margin-top:100px">
        <div class="panel panel-default" style="width:300px">
            <div class="panel-heading">
                <h3>注册帐号</h3>
            </div>
            <div class="panel-body">
                @include('shared.errors')
                <form action="{{ route('register') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name"></label>
                        <input type="text" name="name" class="form-control" placeholder="请设置用户名" required value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email" class="sr-only">邮箱：</label>
                        <input type="text" name="email" class="form-control" placeholder="请设置邮箱" required value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password" class="sr-only">密码：</label>
                        <input type="password" name="password" class="form-control" placeholder="请设置登录密码" required value="{{ old('password') }}">
                    </div>

                    <div class="form-group" style="margin-bottom:17px">
                        <label for="password_confirmation" class="sr-only">确认密码：</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="请确认密码" required value="{{ old('password_confirmation') }}">
                    </div>
                    
                    <button type="submit" class="btn btn-log btn-primary btn-block">注册</button>
                </form>
            </div>
        </div>
    </div>
          <!-- FOOTER -->
      <footer style="margin-top:800px">
          <hr>
        <p class="text-center">&copy; Copyright 2016 -LLHH项目小组- 林浩阳 林键燃 何瑞博 何玥  <br>
            <p class="text-center"> 
                <a href="#" >粤ICP14151106号</a>
            </p>  
        </p>
      </footer>
@stop