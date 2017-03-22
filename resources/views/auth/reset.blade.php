@extends('layouts._link')
@section('title', '更新密码')

@section('content')
    <div class="container-fluid" style="margin-top:80px">
        <div class="row">
            <div class="col-md-8 col-md-offset-4" style="width:730px">
                <div class="panel panel-default">
                    <div class="panel-heading">更新密码</div>
                    <div class="panel-body">
                        @include('shared.errors')

                        <form method="POST" action="{{ route('password.update') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group">
                                <label class="col-md-8 control-label">邮箱地址：</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" style="margin-bottom:15px" name="email" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-8 control-label">密码：</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" style="margin-bottom:15px" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-8 control-label">确认密码：</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" style="margin-bottom:15px" name="password_confirmation">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-7 ">
                                    <button type="submit" class="btn btn-primary">
                                        更新密码
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop