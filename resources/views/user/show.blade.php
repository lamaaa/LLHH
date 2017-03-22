@extends('layouts.default')
@section('title', $user->name)
@section('content')
    <div class="row" style="margin-top:80px">
        <div class="col-md-offset-4 col-md-8">
            <div class="col-md-12">
                <div class="col-md-offset-2 col-md-8">
                    <section class="user_info">
                        @include('shared.user_info', ['user' => $user])
                    </section>
                </div>
            </div>
        </div>
    </div>
    <hr>
@stop