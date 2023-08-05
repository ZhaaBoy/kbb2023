@extends('dashboard.dasmin')
@section('content')
    @include('sweetalert::alert')
    <div class="right_col" role="main">
        <div class="page-title">
          <div class="title_left">
            <h3>Table Anggota</h3>
          </div>

          <div class="title_right">
              <div class="text-right my-4">
                <a href="{{ route('anggota.create')}}" class="btn btn-success"><span class="fa fa-plus-circle"></span>Tambah Data</a>
                <a href="{{ route('anggota.excel') }}" class="btn btn-success">Excel</a>
                <a href="{{ route('anggota.pdf') }}" class="btn btn-danger">PDF</a>
              </div>
            </div>

        </div>
  <div class="table-responsive">
      <table class="table table-striped jambo_table bulk_action">
        <thead>
          <tr class="headings">
            <th class="column-title">No </th>
            <th class="column-title">Nama </th>
            <th class="column-title">Nim </th>
            <th class="column-title">Email </th>
            <th class="column-title">Handphone </th>
            <th class="column-title">Angkatan </th>
            <th class="column-title no-link last"><span class="nobr">Action</span>
            </th>

          </tr>
        </thead>

        <tbody>
          @forelse ($anggotas as $key => $anggota)
          <tr class="even pointer">
            <td class=" ">{{ $anggotas->firstItem() + $key }}</td>
            <td class=" "><a class="btn"
            href="{{ route('anggota.show', $anggota->id) }}">{{ $anggota->nama }}</a></td>
            <td class=" ">{{ $anggota->nim }}</td>
            <td class=" ">{{ $anggota->email }}</td>
            <td class=" ">{{ $anggota->no_hp }}</td>
            <td class=" ">{{ $anggota->angkatan->angkatan }}</td>
            <td>
                <a href="{{ route('anggota.edit', $anggota->id) }}" class="btn btn-info btn-xs">
                    <i class='fa fa-pencil'></i></a>
                <form action="{{ route('anggota.destroy', $anggota->id) }}" method="POST"
                    class="pt-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-xs">
                        <i class="fa fa-trash"></i></button>
                </form>
            </td>
            </td>
            @empty
                  <tr>
                      <td colspan="9" class="text-center">Data Kosong</td>
                  </tr>
              @endforelse
          </tr>

        </tbody>
      </table>
      <div>
          showing
          {{ $anggotas->firstItem() }}
          of
          {{ $anggotas->lastItem() }}
      </div>
      <div class="py-4">
          {{ $anggotas->links() }}
      </div>
    </div>
</div>
</div>
</div>

@endsection
