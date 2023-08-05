@extends('dashboard.dasmin')
@section('content')

<div class="right_col" role="main">
    <div class="page-title">
      <div class="title_left">
        <h3 class=""> Detail Kategori </h3>
      </div>

      <div class="title_right">
          <div class="text-right my-4">
              <a href="{{ route('kategori.index')}}" class="btn btn-success"><span class="fa-fw select-all fas"></span>Kembali</a>
          </div>

    </div>
<div class="table-responsive">
  <table class="table table-striped jambo_table bulk_action">
    <thead>
      <tr class="headings">
        <th class="column-title">Kategori </th>
        </th>

      </tr>
    </thead>

    <tbody>

      <tr class="even pointer">
        <td class=" text-center ">{{ $kategori->nama_kategori }}</td>
      </tr>

    </tbody>
  </table>
</div>
</div>
</div>
</div>

@endsection
