@extends('Layout.master')

@section('title','Stock')

@section('content')

<div class="card">
    <div class="card-header">
        <hr>
        {{-- <h3 class="card-title">@yield('title')</h3> --}}
        <a href="{{ url('stock/create') }}" class="btn btn-primary">Tambah</a>

        {{-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div> --}}
    </div>

    {{-- @if (session()->has('info'))
    <div class="alert alert-success">
        {{ session()->get('info') }}
    </div>
    @endif --}}

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    {{-- <th>Gambar</th> --}}
                    <th>Nama Roti</th>
                    <th>Rasa Roti</th>
                    <th> Jumlah </th>
                    <th> Tanggal </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stock as $item)
                <td>{{ $item->id }}</td>
                {{-- <td><img src="{{ asset('storage/'.$item->foto) }}" alt="Logo" width="100px"></td> --}}
                <td>{{ $item->roti->nama_roti }}</td>
                <td>{{ $item->roti->Rasa_roti }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->tanggal }}</td>

                <td>
                    <a href="{{ url('stock/' . $item->id) }}" class="btn btn-sm btn-primary">Tampil</a>
                    <a href="{{ url('stock/' . $item->id . '/edit') }}" class="btn btn-sm btn-warning">Ubah</a>
                    <button class="btn btn-sm btn-danger btn-hapus" data-id="{{ $item->id }}" data-toggle="modal"
                        data-target="#deleteModal">Hapus</button>

                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer">
    </div>

    {{-- modal hapus
    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <form action="" method="POST" id="formDelete">
                    @method('DELETE')
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Hapus Data </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Anda yakin akan menghapus data ini ?
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-outline-light">Ya, Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}

</div>


<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script>
    // jika tombol hapus ditekan, generate alamat URL untuk proses hapus
        $('.btn-hapus').click(function() {
            let id = $(this).attr('data-id');
            $('#formDelete').attr('action', '/stock/' + id);
        })

        // jika tombol Ya, hapus ditekan, submit form hapus
        $('#formDelete [type="submit"]').click(function() {
            $('#formDelete').submit();
        })
</script>

@endsection