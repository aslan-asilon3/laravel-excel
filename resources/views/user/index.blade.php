@extends('layouts.app')



@push('script')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@endpush

@section('content')

{{-- <form action="/data-member/import-excel" method="POST" enctype="multipart/form-data"> --}}
<form action="" method="POST" enctype="multipart/form-data">
    @csrf

    <br>

    <a type="text" class="btn btn-primary btn-flat" id="filter-show"><i class="fas fa-search fa-beat"></i> Filter</a>
    {{-- <button type="submit" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Import Excel</button> --}}
    
    <div class="btn-group" role="group">
        <a id="btnGroupDrop1"  class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-file-import fa-beat "></i> Import
        </a>
        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <li><button type="submit" class="dropdown-item" href="#">Import Excel</button></li>
          <li><a class="dropdown-item" href="#">Import CSV</a></li>
        </ul>
    </div>

    <div class="btn-group" role="group">
        <a id="btnGroupDrop1"  class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-file-export fa-beat"></i> Export
        </a>
        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <li><a class="dropdown-item" href="{{route('user-export-excel')}}" id="export_excel">Export Excel</a></li>
          <li><a class="dropdown-item" href="#">Export PDF</a></li>
          <li><a class="dropdown-item" href="#">Export CSV</a></li>
        </ul>
        <input type="file" name="file" class="form-control ml-1">
    </div>

      

    {{-- <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a> --}}
</form>



    <table class=" table table-success table-striped" id="users-table">
                   <tr>
                <th scope="col" class="px-6 py-3">Id</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Created At</th>
                <th scope="col" class="px-6 py-3">Updated At</th>
            </tr>
    </table>
</div>


@endsection

