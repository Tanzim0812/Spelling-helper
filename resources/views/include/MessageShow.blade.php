@if(Session('add_success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{Session('add_success')}}</strong>
    </div>
@endif
