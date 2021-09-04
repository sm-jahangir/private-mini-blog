@extends('layouts.backend.app')
@push('css')
    
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('backend') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Post</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Post Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Post List</h3>
                  <a class="btn btn-success btn-lg float-right" href="{{ route('admin.post.create') }}">Add New</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th width="2%">ID</th>
                      <th width="7%">Image</th>
                      <th width="20%">Title</th>
                      <th width="25%">Excerpt</th>
                      <th width="20%">Status</th>
                      <th width="10%">Created At</th>
                      <th width="15%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($post as $key=>$row)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>
                          <img style="width: 100px;height: 100px" src="{{asset('images/thumbnail') . '/' . $row->image}}" alt="Image">
                        </td>
                        <td> {{$row->title}} </td>
                        <td>{{$row->excerpt}}</td>
                        <td>
                          @if ($row->status == true)
                            <span class="badge badge-pill badge-success">active</span>
                          @else
                            <span class="badge badge-pill badge-warning">Deactive</span>
                          @endif
                          @if ($row->featured == true)
                            <span class="badge badge-pill badge-success">Featured</span>
                          @else
                            <span class="badge badge-pill badge-warning">Non-featured</span>
                          @endif
                          @if ($row->trending == true)
                            <span class="badge badge-pill badge-success">trending</span>
                          @else
                            <span class="badge badge-pill badge-warning">non-trending</span>
                          @endif
                          @if ($row->popular == true)
                            <span class="badge badge-pill badge-success">popular</span>
                          @else
                            <span class="badge badge-pill badge-warning">non-popular</span>
                          @endif
                        </td>
                        <td>{{$row->created_at->diffForHumans()}}</td>
                        <td>
                          <a class="btn btn-primary btn-sm" href="{{route('admin.post.edit',$row->id)}}" role="button"><i class="fas fa-edit"></i></a>
                          <a class="btn btn-info btn-sm" href="{{route('admin.post.edit',$row->id)}}" role="button">
                            <i class="fas fa-eye"></i>
                          </a>
                          <button type="button" class="btn btn-danger btn-sm" onclick="deleteData({{ $row->id }})">
                            <span><i class="fas fa-trash"></i></span>
                          </button>                          
                          <form id="delete-form-{{ $row->id }}"
                            action="{{ route('admin.post.destroy',$row->id) }}" method="POST"
                            style="display: none;">
                          @csrf()
                          @method('DELETE')
                      </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th width="2%">ID</th>
                      <th width="7%">Image</th>
                      <th width="20%">Title</th>
                      <th width="25%">Excerpt</th>
                      <th width="20%">Status</th>
                      <th width="10%">Created At</th>
                      <th width="15%">Action</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
          <script>
            function deleteData(id) {
              Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                  if (result.value) {
                      document.getElementById('delete-form-' + id).submit();
                  }
              })
          }
          </script>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
@push('js')
    
<!-- DataTables  & Plugins -->
<script src="{{ asset('backend') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('backend') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('backend') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('backend') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('backend') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('backend') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endpush