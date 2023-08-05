@extends('dashboard.dasmin')
@section('content')
                <div class="right_col" role="main">
                      <div class="page-title">
                        <div class="title_left">
                          <h3 class=""> Detail Acara </h3>
                        </div>

                        <div class="title_right">
                            <div class="text-right my-4">
                                <a href="{{ route('acara.index')}}" class="btn btn-success"><span class="fa-fw select-all fas"></span>Kembali</a>
                            </div>

                      </div>
                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                      <thead>
                        <tr class="headings">
                          <th class="column-title">Tittle </th>
                          <th class="column-title">Deskripsi </th>
                          <th class="column-title">Jadwal </th>
                          <th class="column-title">Lokasi </th>
                          <th class="column-title">Kategori </th>
                          <th class="column-title">Image </th>
                          </th>

                        </tr>
                      </thead>

                      <tbody>

                        <tr class="even pointer">
                          <td class=" ">{{ $acara->tittle }}</td>
                          <td class=" ">{{ $acara->deskripsi }}</td>
                          <td class=" ">{{ $acara->jadwal }}</td>
                          <td class=" ">{{ $acara->lokasi }}</td>
                          <td class=" ">{{ $acara->kategori->nama_kategori }}</td>
                          <td class=" last"><img src="{{ asset ('storage/' . $acara->image) }}" alt="" width="50px" class="tumbnail img-fluid">
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>

@endsection
