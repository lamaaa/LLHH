       
       
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
                        
                            @include('layouts._thePanel')
                            @include('layouts._thePanel')
                            @include('layouts._thePanel')
                            @include('layouts._thePanel')
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <!--<button type="button" class="btn btn-primary">加入收集箱</button>-->
                    </div>
                </div>
            </div>
        </div>