@extends('dashboard.dasmin')
@section('content')

@include('sweetalert::alert')
<div class="right_col" role="main">
    <div class="page-title">
      <div class="title_left">
        <h3>Table Acara</h3>
      </div>

      <div class="title_right">
          <div class="text-right my-4">
              <a href="{{ route('artikel.create')}}" class="btn btn-success"><span class="fa fa-plus-circle"></span>Tambah Data</a>
          </div>
        </div>

    </div>
<div class="table-responsive">
  <table class="table table-striped jambo_table bulk_action">
    <thead>
      <tr class="headings">
        <th class="column-title">No </th>
        <th class="column-title">Tittle </th>
        <th class="column-title">Deskripsi </th>
        <th class="column-title">Kategori </th>
        <th class="column-title">Image </th>
        <th class="column-title no-link last"><span class="nobr">Action</span>
        </th>

      </tr>
    </thead>

    <tbody>
      @forelse ($artikels as $key => $artikel)
      <tr class="even pointer">
        <td class=" ">{{ $artikels->firstItem() + $key }}</td>
        <td class=" "><a class="btn"
        href="{{ route('artikel.show', $artikel->id) }}">{{ $artikel->tittle }}</a></td>
        <td class=" ">{{ $artikel->deskripsi }}</td>
        <td class=" ">{{ $artikel->kategori->nama_kategori }}</td>
        <td class=" last"><img src="{{ asset ('storage/' . $artikel->image) }}" alt="" width="50px" class="tumbnail img-fluid">
            <td>
                <a href="{{ route('artikel.edit', $artikel->id) }}" class="btn btn-info btn-xs">
                    <i class='fa fa-pencil'></i></a>
                <form action="{{ route('artikel.destroy', $artikel->id) }}" method="POST"
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
      {{ $artikels->firstItem() }}
      of
      {{ $artikels->lastItem() }}
  </div>
  <div class="py-4">
      {{ $artikels->links() }}
  </div>
</div>
</div>
</div>
</div>
@endsection
