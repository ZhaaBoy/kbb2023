@extends('dashboard.dasmin')
@section('content')

<div class="right_col" role="main">
    <div class="page-title">
      <div class="title_left">
        <h3>Detail Anggota</h3>
      </div>

      <div class="title_right">
          <div class="text-right my-4">
            <a href="{{ route('anggota.index')}}" class="btn btn-success"><span class="fa-fw select-all fas"></span>Kembali</a>
          </div>
        </div>

    </div>
<div class="table-responsive">
  <table class="table table-striped jambo_table bulk_action">
    <thead>
      <tr class="headings">
        <th class="column-title">Nama </th>
        <th class="column-title">Nim </th>
        <th class="column-title">Email </th>
        <th class="column-title">Handphone </th>
        <th class="column-title">Angkatan </th>

      </tr>
    </thead>

    <tbody>
      <tr class="even pointer">
        <td class=" ">{{ $anggotum->nama }}</td>
        <td class=" ">{{ $anggotum->nim }}</td>
        <td class=" ">{{ $anggotum->email }}</td>
        <td class=" ">{{ $anggotum->no_hp }}</td>
        <td class=" ">{{ $anggotum->angkatan->angkatan }}</td>
        </td>
      </tr>

    </tbody>
  </table>
</div>
</div>
</div>
</div>
@endsection
