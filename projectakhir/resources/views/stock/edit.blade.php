@extends('layout.master')

@section('title', 'Program Studi')

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
                <label for="nama_prodi">Nama Roti</label>
                <input type="text" class="form-control" name="nama_prodi" placeholder="Enter nama program studi"
                    value="{{ old('nama_roti') ?? $stock->nama_roti }}">

                @error('nama_roti')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama_prodi">Nama Roti</label>
                <input type="text" class="form-control" name="nama_prodi" placeholder="Enter nama program studi"
                    value="{{ old('Rasa_roti') ?? $stock->Rasa_roti }}">

                @error('Rasa_roti')
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