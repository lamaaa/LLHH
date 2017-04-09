       
       
       <!--做题页面-->
        <div class="modal fade bs-example-modal-lg" id="paperModal" tabindex="-1" role="dialog" aria-labelledby="paperModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="paperModalLabel">LLHH试题库</h4>
                    </div>
                    <div class="modal-body">
                        {{--@foreach($questions as $question)--}}
                        {{--<div class="panel panel-default" >--}}
                            {{--<div class="panel-heading">--}}
                                {{--<input type="hidden" name="question_id" value="{{$question->id}}">--}}
                                {{--<span class="lead">难度：--}}
                                    {{--@for($countStar = 0; $countStar < $question->difficulty; $countStar++)--}}
                                        {{--<img src="/img/sts.gif" alt="a start">--}}
                                    {{--@endfor--}}
                                    {{--@for($countStar = 0; $countStar < 5 - $question->difficulty; $countStar++)--}}
                                        {{--<img src="/img/nsts.gif" alt="a null start">--}}
                                    {{--@endfor--}}
              {{--</span> <span class="lead">&nbsp收藏时间：{{ $question->collected_at }}</span>--}}
                                {{--</span> <span class="lead">&nbsp错误次数：{{ $question->mistake_times }}</span>--}}
                                {{--<form style="display:block;float: right;" action="{{ route('collections.destroy', $question->id) }}" method="POST">--}}
                                    {{--{{csrf_field()}}--}}
                                    {{--{{method_field('DELETE')}}--}}
                                    {{--<button type="submit" class="btn btn-danger btn-style pull-right">--}}
                                        {{--<span>取出收集箱</span>--}}
                                    {{--</button>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                            {{--<div class="panel-body">--}}
                                {{--{!! $question->description !!}--}}
                            {{--</div>--}}
                            {{--<div class="panel-footer">--}}
                                {{--<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#answerButton{{$question->id}}" aria-expanded="false"--}}
                                        {{--aria-controls="answerButton">--}}
                                    {{--答案</button>--}}
                                {{--<button type="button" class="btn btn-default pull-right"  data-toggle="modal"--}}
                                        {{--id="falseBtn{{$question->id}}" onclick="addWrongRecord({{$question->id}})" >--}}
                                    {{--错误</button>--}}
                                {{--<button type="button" class="btn btn-default pull-right" data-toggle="modal"--}}
                                        {{--id="trueBtn{{$question->id}}" onclick="addRightRecord({{$question->id}})" >--}}
                                    {{--正确</button>--}}
                            {{--</div>--}}
                            {{--<div class="collapse" id="answerButton{{$question->id}}">--}}
                                {{--{!! $question->answer !!}--}}
                            {{--</div>--}}
                            {{--<!--对错按钮-->--}}
                        {{--</div><!--结束做题面板-->--}}
                        {{--@endforeach--}}
                        {{--{{ $questions->render() }}--}}
                        {{--@include('chapters.rightModal')--}}
                        {{--@include('chapters.wrongModal')--}}

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <!--<button type="button" class="btn btn-primary">加入收集箱</button>-->
                    </div>
                </div>
            </div>
        </div>