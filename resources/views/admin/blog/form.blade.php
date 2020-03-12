
<div class="form-row">
    <div class="col-lg-1 col-md-2 col-xs-2">
        <label>Title</label>
    </div>
    <div class="form-group col-lg-5 col-md-4 col-xs-4">
        {!! Form::text("email", $blog->email,['class'=>'form-control']) !!}
    </div>
    <div class="col-lg-1 col-md-2 col-xs-2">
        <label>Name</label>
    </div>
    <div class="form-group col-lg-5 col-md-4 col-xs-4">
        {!! Form::text("username", $blog->username,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-row">
    <div class="col-lg-1 col-md-2 col-xs-2">
        <label>Password</label>
    </div>
    <div class="form-group col-lg-5 col-md-4 col-xs-4">
        {!! Form::password("password", ['class'=>'form-control']) !!}
    </div>
    <div class="col-lg-1 col-md-2 col-xs-2">
        <label>Branch</label>
    </div>
    <div class="form-group col-lg-5 col-md-4 col-xs-4">
        {{-- {!! Form::select("branch", $branches, $blog->branch, ['class' => 'form-control select2']) !!} --}}
    </div>
</div>