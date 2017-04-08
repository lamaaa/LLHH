@extends('layouts.default')

@section('content')
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide " data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="/img/carousel_page1.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>我的收集箱</h1>
                        <p>练习</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">刷题</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="/img/carousel_page2.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>试卷</h1>
                        <p>综合练习</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">刷题</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="img/carousel_page3.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>我的错题</h1>
                        <p>针对性练习</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">刷题</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- /.carousel -->

    
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- two columns of text below the carousel -->
      <div id="exePro" class="row">
        <div class="col-lg-6">
        <!-- <img class="img-circle" src="img/too.jpg" alt="Generic placeholder image" width="140" height="140"> -->
          
          <h2><strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp真题</strong></h2>

          <hr>
               
                @include('layouts._thePanel')
                @include('layouts._thePanel')
                @include('layouts._thePanel')
                @include('layouts._thePanel')
          <ul >
          
          </ul>
          <p><a class="btn btn-default fr" href="#" role="button">阅读更多&raquo;</a></p>
        </div><!-- /.col-lg-6 -->
        <div text-decoration:underline class="col-lg-6">
        <!-- <img class="img-circle" src="img/too.jpg" alt="Generic placeholder image" width="140" height="140"> -->
          
        <h2><strong>&nbsp&nbsp&nbsp&nbsp&nbsp易错题</strong></h2>

        <hr class="default">
                @include('layouts._thePanel')
                @include('layouts._thePanel')
                @include('layouts._thePanel')
                @include('layouts._thePanel')
          <ul>

          </ul>
          <p><a class="btn btn-default fr" href="#" role="button">阅读更多&raquo;</a></p>
        </div><!-- /.col-lg-6 -->
      
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">头脑风暴法 <!-- <span class="text-muted">It'll blow your mind.</span>--></h2>
          <p class="lead">头脑风暴何以能激发创新思维？根据A·F·奥斯本本人及其他研究者的看法，主要有以下几点：
                  </br>
              　　第一，联想反应。联想是产生新观念的基本过程。在集体讨论问题的过程中，每提出一个新的观念，都能引发他人的联想。相继产生一连串的新观念，产生连锁反应，形成新观念堆，为创造性地解决问题提供了更多的可能性。
                  </br>
              　　第二，热情感染。在不受任何限制的情况下，集体讨论问题能激发人的热情。人人自由发言、相互影响、相互感染，能形成热潮，突破固有观念的束缚，最大限度地发挥创造性地思维能力</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/too.jpg" alt="jpg" ><!--data-src="holder.js/500x500/auto" alt="Generic placeholder image" -->
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading"> 学习曲线 <!-- <span class="text-muted"></span> --></h2>
          <p class="lead">学习曲线学习曲线表示了经验与效率之间的关系，指的是越是经常地执行一项任务，每次所需的时间就越少。将学习效果数量化绘制于坐标纸上，横轴代表练习次数（或产量），纵轴代表学习的效果（单位产品所耗时间），这样绘制出的一条曲线，就是学习曲线。学习效果受许多因素的影响，主要有：操作者的动作熟练程度。这是影响学习曲线的最基本因素。管理技术的改善，正确的培训、指导，充分的生产准备与周到的服务，工资奖励及惩罚等管理政策的运用产品设计的改善生产设备与工具的质量各种材料的 连续供应和 质量信息反馈的及时性专业化分工程度</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/too.jpg" alt="img/love-story-03.jpg">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">批判性思考 <!-- <span class="text-muted">Checkmate.</span>--></h2>
          <p class="lead">我们认为批判性思考是一种有目的而自律的判断，并对判断的基础就证据、概念、方法学、标准釐定、背景因素层面加以诠释、分析、评估、推理与解释……有理想批判性思考能力的人凡事习惯追根究柢，认知务求全面周到，判断必出于理据，心胸保持开放，态度保有弹性，评价必求公正，能坦然面对主观偏见，判断必求谨慎，且必要时愿意重新思量，对争议点清楚了解，处理复杂事物有条不紊，蓃集相关资料勤奋不懈，选取标准务求合理，专注于探索问题，而且在该问题该环境许可的情况下坚持寻求最精确的结果。</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/too.jpg" alt="img/love-story-03.jpg">
        </div>
      </div>

    <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
@stop