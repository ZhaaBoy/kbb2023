@extends('dashboard.dasmin')
@section('content')
@include('sweetalert::alert')

<div class="right_col" role="main">
    <div class="page-title">
      <div class="title_left">
        <h3>Table kategori</h3>
      </div>

      <div class="title_right">
          <div class="text-right my-4">
              <a href="{{ route('kategori.create')}}" class="btn btn-success"><span class="fa fa-plus-circle"></span>Tambah Data</a>
          </div>
        </div>

    </div>
<div class="table-responsive">
  <table class="table table-striped jambo_table bulk_action">
    <thead>
      <tr class="headings">
        <th class="column-title">No </th>
        <th class="column-title">Kategori </th>
        <th class="column-title">Action
        </th>

      </tr>
    </thead>

    <tbody>
      @forelse ($kategoris as $key => $kategori)
      <tr class="even pointer">
        <td class=" ">{{ $kategoris->firstItem() + $key }}</td>
        <td class=" "><a class="btn"
            href="{{ route('kategori.show', $kategori->id) }}">{{ $kategori->nama_kategori }}</a></td>
            <td>
                <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-info btn-xs">
                    <i class='fa fa-pencil'></i></a>
                <form action="{{ route('kategori.destroy', $kategori->id) }}" method="POST"
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
      {{ $kategoris->firstItem() }}
      of
      {{ $kategoris->lastItem() }}
  </div>
  <div class="py-4">
      {{ $kategoris->links() }}
  </div>
</div>
</div>
</div>
</div>

@endsection
