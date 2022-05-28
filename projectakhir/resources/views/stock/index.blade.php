@extends('Layout.master')

@section('title','Stock')

@section('content')

<div class="card">
    <div class="card-header">
        <hr>
        {{-- <h3 class="card-title">@yield('title')</h3> --}}
        <a href="{{ url('stock/create') }}" class="btn btn-primary">Tambah</a>
        {{-- <a href="{{ url('prodi/create') }}" class="btn btn-primary">Tambah</a>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div> --}}
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    {{-- <th>Gambar</th> --}}
                    <th>Nama Roti</th>
                    <th>Detail Roti</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stock as $item)
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_roti }}</td>
                <td>{{ $item->Rasa_roti }}</td>

                {{-- <td>
                    <a href="{{ url('stock/' . $item->id) }}" class="btn btn-sm btn-primary">Tampil</a>
                    <a href="{{ url('stock/' . $item->id . '/edit') }}" class="btn btn-sm btn-warning">Ubah</a>
                </td> --}}


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer">
    </div>


</div>

@endsection