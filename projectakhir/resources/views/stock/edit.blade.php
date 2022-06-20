@extends('layout.master')

@section('title', 'Edit Barang')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Ubah Data</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('stock.update', ['stock' => $stock->id]) }}" method="POST">
            @method('PATCH')
            @csrf

            <div class="form-group">
                <label for="roti_id">Nama Roti</label>
                <select name="roti_id" class="form-control select2">
                    <option value="">Ubah Nama Roti</option>
                    @foreach ($roti as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $stock->roti_id ? 'selected' : null }}> {{
                        $item->nama_roti }}
                    </option>
                    @endforeach
                </select>

                @error('roti_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="roti_id">Rasa Roti</label>
                <select name="roti_id" class="form-control select2">
                    <option value="">Ubah Rasa Roti</option>
                    @foreach ($roti as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $stock->roti_id ? 'selected' : null }}> {{
                        $item->rasa_roti }}
                    </option>
                    @endforeach
                </select>

                @error('roti_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="text" class="form-control" name="jumlah" placeholder="Ubah Jumlah Product"
                    value="{{ old('jumlah') ?? $stock->jumlah }}">

                @error('nama_prodi')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" placeholder="Ubah Tanggal Product"
                    value="{{ old('tanggal') ?? $stock->tanggal }}">

                @error('tanggal')
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