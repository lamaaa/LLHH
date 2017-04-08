        
        
        <!--点击后，弹出做错模态框-->
        <div class="modal fade" id="wrongModal{{$question->id}}" tabindex="-1" role="dialog" aria-labelledby="wrongModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="wrongModalLabel">LLHH试题库</h4>
                    </div>
                    <div class="modal-body">
                        你是第{{$question->thisUser_mistake_times}}次做错这道哦，要加油了哦！！！！
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">加入收集箱</button>
                    </div>
                </div>
            </div>
        </div>