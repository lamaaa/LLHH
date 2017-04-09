  <header class="navbar-jumbotron">
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom:0;height:50px">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost:8000/"><span class="navFontSize"><img src="" alt="LLHH"></span>  </a>
        </div>
        <div class="collapse navbar-collapse navFontSize" id="navbar">
          <ul class="nav navbar-nav">
              <li @if($active == 'home') class="active" @endif><a href="{{url()}}">首页</a></li>
              <li @if($active == 'chapters') class="active" @endif><a href="{{ route('chapters.show', 1) }}">题库</a></li>
              <li @if($active == 'collections') class="active" @endif><a href="{{ route('collections.index') }}">收集箱</a></li>
              <li @if($active == 'papers') class="active" @endif><a href="{{ route('papers.index') }}">试卷</a></li>
              <li @if($active == 'about') class="active" @endif><a href="{{ route('about') }} " >关于</a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right ">
                    @if (Auth::check())
                        <li><a href="{{ route('user.index') }}">用户列表</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{ Auth::user()->name }} <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('questions.wrong', Auth::user()->id)}}">我的错题</a></li>
                                <li><a href="{{route('questions.done'), Auth::user()->id}}">做过的题</a></li>
                                <li><a href="{{ route('user.show', Auth::user()->id) }}">个人中心</a></li>
                                <li><a href="{{ route('user.edit', Auth::user()->id) }}">编辑资料</a></li>
                                <li class="divider"></li>
                                <li>
                                    <a id="logout" href="#">
                                        <form action="{{ route('logout') }}" method="GET">
                                            <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('help') }}">帮助</a></li>
                        <li><a href="{{ route('login') }}">登录</a></li>
                    @endif
            </ul>
        </div>
      </div>
    </nav>
  </header>