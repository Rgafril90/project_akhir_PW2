@extends('Layout.master')

@section('title', 'Stock')

@section('content')

    <div class="card">
        <div class="card-header">
            <hr>
            <a href="{{ url('stock/create') }}" class="btn btn-primary">Tambah</a>
        </div>

        @if (session()->has('info'))
            <div class="alert alert-success">
                {{ session()->get('info') }}
            </div>
        @endif


        <div class="card-body">
            <div class="row">
                @foreach ($stock as $item)
                    <div class=col-lg-4>
                        <div><img src="assets/images/rasa bagel.jpg"></div>
                        <div>{{ $item->roti->nama_roti }} {{ $item->roti->rasa_roti }} {{ $item->jumlah }}
                            <br>{{ $item->tanggal }}
                        </div>
                        <center>
                            <a href="{{ url('stock/' . $item->id) }}" class="btn btn-sm btn-primary">Tampil</a>
                            <a href="{{ url('stock/' . $item->id . '/edit') }}" class="btn btn-sm btn-warning">Ubah</a>

                            <a action="{{ url('stock/' . $item->id) }}" method="POST" id="formDelete">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Ya, Hapus</button>
                            </a>
                        </center>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--Nomor Halaman -->
    <div class="wrap-pagination-info">
        <ul class="page-numbers">
            <li><span class="page-number-item current">3</span></li>
            <li class="result-count">Menampilkan Slide Stock</li>
        </ul>
    </div>


    <div class="card-footer">
    </div>



    </div>


    <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
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
