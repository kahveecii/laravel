@extends('admin.parent')

@section('content')
    <div class=" card p-3">
        <h1>ini adalah halaman index admin</h1>
        <div class="d-flex justify-content-end">
            <a href="{{ route('admin.create') }}"><div class="btn btn-primary">Tambah</div></a>
        </div>
    </div>
@endsection
