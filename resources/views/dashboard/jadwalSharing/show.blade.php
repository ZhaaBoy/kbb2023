@extends('dashboard.dasmin')
@section('content')
@include('sweetalert::alert')
<div class="right_col" role="main">
    <div class="page-title">
      <div class="title_left">
        <h3 class=""> Detail Sharing </h3>
      </div>

      <div class="title_right">
          <div class="text-right my-4">
              <a href="{{ route('jadwal-sharing.index')}}" class="btn btn-success"><span class="fa-fw select-all fas"></span>Kembali</a>
          </div>

    </div>
<div class="table-responsive">
  <table class="table table-striped jambo_table bulk_action">
    <thead>
      <tr class="headings">
        <th class="column-title">Tittle </th>
        <th class="column-title">Deskripsi </th>
        <th class="column-title">Jadwal </th>
        <th class="column-title">Kategori </th>
        <th class="column-title">Image </th>
        </th>

      </tr>
    </thead>

    <tbody>

      <tr class="even pointer">
        <td class=" ">{{ $jadwal_sharing->tittle }}</td>
        <td class=" ">{{ $jadwal_sharing->deskripsi }}</td>
        <td class=" ">{{ $jadwal_sharing->jadwal }}</td>
        <td class=" ">{{ $jadwal_sharing->kategori->nama_kategori }}</td>
        <td class=" last"><img src="{{ asset ('storage/' . $jadwal_sharing->image) }}" alt="" width="50px" class="tumbnail img-fluid">
        </td>
      </tr>

    </tbody>
  </table>
</div>
</div>
</div>
</div>

@endsection
