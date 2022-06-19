@extends('Layout.master')

@section('title', 'Tambah Data')

@section('content')

<div class="card">
    <div class="card-header">

        <div class="card-body">
            <form action="{{ route('keranjang.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="stock_id">Nama Roti</label>

                    <select name="stock_id" class="form-group">
                        <option value="">Pilih Nama Roti</option>
                        @foreach($stock as $item)
                        <option value="{{ $item->id }}">{{$item->roti->nama_roti}}
                            {{$item->roti->rasa_roti}}
                        </option>
                        @endforeach
                    </select>

                    @error('stock_id')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jumlah"> Jumlah </label>
                    <input type="text" class="form-control" name="jumlah" placeholder="Enter jumlah roti">

                    @error('jumlah')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>

        <div class="card-footer">

        </div>

    </div>
    @endsection