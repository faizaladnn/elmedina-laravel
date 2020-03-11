@extends ('admin.layouts.master')

@section ('content')

<div class="content content-fixed">
    <div class="container-fluid pr-2 pl-2">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h3>Blog / Article List</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-6"></div>
            <div class="col-2"></div>
            <div class="col-4">
                <!-- Action Buttons -->
                <div class="float-right">
                    <a href="{{ route('admin.blog.create') }}"
                       class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="user-plus"
                                                                                      class="wd-10 mg-r-5"></i>Create
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
                                <tr class="text-center">
                                    <td></td>
                                    <td>Title</td>
                                    <td>Description</td>
                                    <td>Created At</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $key => $blog)
                                    <tr class="text-center">
                                        <td>{{$key + 1}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->description}}</td>
                                        <td>{{date('d-m-Y', strtotime($blog->created_at))}}</td>
                                        <td>
                                            Edit Delete
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