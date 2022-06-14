@extends('Layout.master')

@section('title', 'Stock')

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

        @if (session()->has('info'))
            <div class="alert alert-success">
                {{ session()->get('info') }}
            </div>
        @endif


        <div class="card-body">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                <div class="product product-style-3 equal-elem ">
                    <div class="row">
                    </div>
                    <tbody>
                        @foreach ($stock as $item)
                            <div class="col-3">
                                <thead>
                                    <tr>
                                        <th><img src="assets/images/rasa bagel.jpg"></th>

                                    </tr>
                                </thead>
                            </div>
                            <div class="col-3">
                    <tbody>
                        <tr>
                            <td>{{ $item->roti->nama_roti }}</td>
                            <td>{{ $item->roti->rasa_roti }}</td>
                            <td>{{ $item->jumlah }}</td>
                        </tr>
                    </tbody>
                </div>
                <div class="col-3">
                    <tfoot>
                        <tr>
                            <td><a href="#" class="btn add-to-cart">Masukan Ke
                                    Keranjang</a></td>

                        </tr>
                    </tfoot>
                </div>
                @endforeach
                </tbody>

            </div>
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
