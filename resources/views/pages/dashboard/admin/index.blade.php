@extends('pages.dashboard.master')

@section('title')
    Admin
@endsection



@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Admin</h1>
            </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Data Member
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Email</th>
                                        <th>No tlp</th>
                                        <th>edit </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>
                                                <div class="d-flex" style="display: flex">
                                                    <a href="{{ route('user-admin.edit', $item->id) }}" class="text-danger btn btn-link">Edit </a>
                                                    <span>
                                                        <form action="{{ route('user-admin.destroy' ,$item->id) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" onclick="return confirm('Are you sure?')" class="text-danger btn btn-link">Hapus </button>
                                                        </form>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty

                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="btn btn-primary">Save</button>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
    </div>
@endsection
