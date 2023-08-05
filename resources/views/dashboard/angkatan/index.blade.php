@extends('dashboard.dasmin')
@section('content')
@include('sweetalert::alert')

        <div class="right_col" role="main">
            <div class="page-title">
            <div class="title_left">
                <h3>Table Angkatan</h3>
            </div>

            <div class="title_right">
                <div class="text-right my-4">
                    <a href="{{ route('angkatan.create')}}" class="btn btn-success"><span class="fa fa-plus-circle"></span>Tambah Data</a>
                </div>
                </div>

            </div>
        <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
            <thead>
            <tr class="headings">
                <th class="column-title">No </th>
                <th class="column-title">Angkatan </th>
                <th class="column-title">Action</th>

            </tr>
            </thead>

            <tbody>
            @forelse ($tambahAngkatan as $key => $angkatan)
            <tr class="even pointer">
                <td class=" ">{{ $tambahAngkatan->firstItem() + $key }}</td>
                <td class=" "><a class="btn"
                    href="{{ route('angkatan.show', $angkatan->id) }}">{{ $angkatan->angkatan }}</a></td>
                    <td>
                        <a href="{{ route('angkatan.edit', $angkatan->id) }}" class="btn btn-info btn-xs">
                            <i class='fa fa-pencil'></i></a>
                        <form action="{{ route('angkatan.destroy', $angkatan->id) }}" method="POST"
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
            {{ $tambahAngkatan->firstItem() }}
            of
            {{ $tambahAngkatan->lastItem() }}
        </div>
        <div class="py-4">
            {{ $tambahAngkatan->links() }}
        </div>
        </div>
        </div>
        </div>
        </div>

@endsection
