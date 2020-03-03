@extends ('admin.layouts.master')

@section ('content')

<div class="content content-fixed">
    <div class="container-fluid pr-2 pl-2">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h3>Customer List</h3>
            </div>
        </div>

        <div class="row row-xs">
            <div class="col mg-t-10">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%">
                        <thead class="thead-light">
                            <tr>
                                <td width="2%"></td>
                                <td width="30%">Name</td>
                                <td>Email</td>
                                <td>Phone No</td>
                                <td>Created At</td>
                                {{-- <td>Action</td> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone_no}}</td>
                                    <td>{{date('Y-m-d H:i A', strtotime($user->created_at))}}</td>
                                    {{-- <td></td> --}}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="float-right p-2">{{ $users->links() }}</div>
                </div><!-- table-responsive -->
            </div><!-- col -->
        </div>

    </div>
</div>
@endsection


@section('js')

<script type="text/javascript">

</script>
@endsection