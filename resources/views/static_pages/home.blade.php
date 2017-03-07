@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Hello LLHH</h1>
        <p class="lead">
            你现在所看到的是LLHH习题库管理系统的示例项目主页。
        </p>
        <p>
            一切，将从这里开始。
        </p>
        <p>
            <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">现在注册</a>
        </p>
    </div>
@stop