@extends('layouts.default')
@section('title', '重置密码')

@section('content')
    <div class="container-fluid" style="margin-top:80px">
        <div class="row">
            <div class="col-md-6 col-md-offset-4">
                <div class="panel panel-default" style="width:730px ">
                    <div class="panel-heading">重置密码</div>
                    <div class="panel-body">
                        @include('shared.errors')
                        <form method="POST" action="{{ route('password.reset') }}">
                            {{ csrf_field() }}

                            <div class="form-group" >
                                <label class="col-md-4 control-label">邮箱地址：</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" style="margin-bottom:15px" name="email" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                &nbsp
                                    <button type="submit" class="btn btn-primary">
                                        重置
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- FOOTER -->
    <hr>
@stop