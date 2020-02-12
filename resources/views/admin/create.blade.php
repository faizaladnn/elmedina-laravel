@extends ('admin.layouts.master')

@section ('content')

<div class="content content-fixed">
    <div class="container-fluid">
        <div class="align-items-center justify-content-between">
            <div class="row">
                <div class="col-lg-6 col-xs-4">
                    <h3>Create Admin</h3>
                </div>
                <div class="col-lg-6 col-xs-4 text-right">
                    
                </div>
            </div>
        </div>

        <div class="row row-xs">
            <div class="col mg-t-10">
                @include ('error_message')

                {!! Form::open(array('url' => route('admin.store'),'method' => 'POST', 'data-parsley-validate')) !!}
                
                @include('admin.form')

               <div class="form-group ">
                   <div class="col-sm-10">
                       <a class="btn btn-secondary"
                          href="{{url('/admin/dashboard')}}" data-dismiss="modal">Cancel
                       </a>
                       {{ Form::submit('Submit', ['class' => 'btn btn-primary ']) }}
                       {!! Form::close() !!}
                   </div>
               </div>
            </div><!-- col -->
        </div>

    </div>
</div>
@endsection

@section('js')

<script type="text/javascript">

</script>
@endsection