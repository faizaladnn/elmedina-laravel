@if(session()->has('success'))
<div class="alert alert-fixed alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{ session()->get('success') }}
</div>
@elseif(isset($success))
<div class="alert alert-fixed alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {!! $success !!}
</div>
@endif