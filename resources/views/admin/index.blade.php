@extends ('admin.layouts.master')

@section ('content')

<div class="content content-fixed">
    <div class="container-fluid pr-5 pl-5">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h3>Admin List</h3>
            </div>
        </div>

        <div class="row row-xs">
            <div class="col mg-t-10">
                <div class="card card-dashboard-table">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <td>Email</td>
                                    <td>Username</td>
                                    <td>Branch</td>
                                    <td>Created At</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admins as $admin)
                                <tr>
                                    <td>{{$admin->email}}</td>
                                    <td>{{$admin->username}}</td>
                                    <td>{{$admin->branch}}</td>
                                    <td>{{date('d/m/Y', strtotime($admin->created_at))}}</td>
                                    <td>
                                        
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <div class="float-right p-2">{{ $bookings->links() }}</div> --}}
                    </div><!-- table-responsive -->
                </div><!-- card -->
            </div><!-- col -->
        </div>

    </div>
</div>

@endsection
@section('js')

<script type="text/javascript">

</script>
@endsection