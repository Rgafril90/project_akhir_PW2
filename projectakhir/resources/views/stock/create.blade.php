@extends('Layout.master')

@section('title', 'Tambah Data')

@section('content')

<div class="card">
    <div class="card-header">
        {{-- <h3 class="card-title">@yield('title')</h3> --}}

        {{-- <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div> --}}

    <div class="card-body">
        <form action="{{ route('stock.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="roti_id">Nama Roti</label>

                <select name="roti_id" class="form-group">
                    <option value="">Pilih Nama Roti</option>
                    @foreach($roti as $item)
                    <option value="{{ $item->id }}">{{$item->nama_roti}} {{$item->rasa_roti}}
                    </option>
                    @endforeach
                </select>

                @error('roti_id')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            {{-- <div class="form-group">
                <label for="roti_id">Rasa Roti</label>

                <select name="roti_rasa_id" class="form-group">
                    <option value="">pilih Rasa Roti</option>
                    @foreach($roti as $item)
                    <option value="{{ $item->id}}">{{ $item->rasa_roti}}
                    </option>
                    @endforeach
                </select>

                @error('roti_rasa_id')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div> --}}


            <div class="form-group">
                <label for="jumlah"> Jumlah </label>
                <input type="text" class="form-control" name="jumlah" placeholder="Enter jumlah roti">

                @error('jumlah')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="tanggal"> Tanggal </label>
                <input type="date" name="tanggal" placeholder="Enter Tanggal">

                @error('tanggal')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <div class="card-footer">

    </div>

</div>
@endsection