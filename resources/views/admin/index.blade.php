@extends ('admin.layouts.master')

@section ('content')

<div class="content content-fixed">
    <div class="container-fluid">
        <div class="align-items-center justify-content-between">
            <div class="row">
                <div class="col-lg-6 col-xs-4">
                    <h3>Admin List</h3>
                </div>
                <div class="col-lg-6 col-xs-4 text-right">
                    <a href="{{ route('admin.create') }}"
                       class="btn btn-sm btn-primary btn-uppercase mg-l-5">
                       <i data-feather="user-plus" class="wd-10 mg-r-5"></i>Create Admin
                    </a>
                </div>
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
                                        <div class="row">

                                            <div class="col-6 pl-0 pr-0">
                                                <a class="btn btn-edit"
                                                   href="{{ route('admin.edit', [$admin->id]) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                            </div>

                                            <div class="col-4 pl-0 pr-0">
                                                <a class="btn btn-delete" href="#deleteModal{{$admin->slug()}}"
                                                   role="button" data-toggle="modal">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </div>
                                        </div>
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