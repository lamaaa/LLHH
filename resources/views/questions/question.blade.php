 @foreach($questions as $question)
        <div class="panel panel-default" >
            <div class="panel-heading">
                        <span class="lead">难度：
                            @for($countStar = 0; $countStar < $question->difficulty; $countStar++)
                                <img src="/img/sts.gif" alt="a start">
                            @endfor
                            @for($countStar = 0; $countStar < 5 - $question->difficulty; $countStar++)
                                <img src="/img/nsts.gif" alt="a null start">
                            @endfor
                        </span>
                <span class="lead">&nbsp入库时间：{{$question->created_at}}</span>
                <button id="button{{$question->id}}" onclick="changeQuestionState({{$question->id}})"
                        class="btn @if($question->isAdd) btn-danger @else btn-success @endif btn-style pull-right">
                    <span id="">@if($question->isAdd == 1) 移出收集箱 @else 加入收集箱 @endif</span>
                </button>
                <input id="input{{$question->id}}" type="hidden" value="{{$question->isAdd}}">
            </div>

            <div class="panel-body">
                <p>
                    {!!$question->description!!}
                </p>
            </div>
            <div class="panel-footer">
                <!--答案按钮-->
                <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#answerButton{{$question->id}}" aria-expanded="false"
                        aria-controls="answerButton">
                    答案</button>
                <!--对错按钮-->
                <button type="button" class="btn btn-default pull-right"  data-toggle="modal"
                        id="falseBtn{{$question->id}}" onclick="addWrongRecord({{$question->id}})" >
                    错误</button>
                <button type="button" class="btn btn-default pull-right" data-toggle="modal"
                        id="trueBtn{{$question->id}}" onclick="addRightRecord({{$question->id}})" >
                    正确</button>
            </div>
            <div class="collapse" id="answerButton{{$question->id}}">
                {!! $question->answer !!}
            </div>
        </div>
@endforeach
<!--引入做对模态框和做错模态框-->
@include('chapters.rightModal')
@include('chapters.wrongModal')
