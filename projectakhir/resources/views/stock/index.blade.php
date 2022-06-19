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
                <div><img src="{{ asset('storage/'.$item->foto) }}" alt="Logo" width="300px"></div>
                <div>{{ $item->roti->nama_roti }} {{ $item->roti->rasa_roti }} {{ $item->jumlah }}</div>
                <center>
                    <div><a href="#" class="btn add-to-cart">Masukan Ke Keranjang</a></div>
                </center>
            </div>
            @endforeach
        </div>
    </div>
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