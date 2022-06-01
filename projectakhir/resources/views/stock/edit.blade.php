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
                <input type="text" class="form-control" name="nama_roti" placeholder="Enter nama roti"
                    value="{{ old('nama_roti') ?? $stock->nama_roti }}">

                @error('nama_roti')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama_prodi">Nama Roti</label>
                <input type="text" class="form-control" name="rasa_roti" placeholder="Enter rasa roti"
                    value="{{ old('rasa_roti') ?? $stock->Rasa_roti }}">

                @error('rasa_roti')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- @foreach ($fakultas as $item)
            <option value="{{ $item->id }}" {{ $item->id == $prodi->fakultas_id ? 'selected' : null }}> {{
                $item->nama_fakultas }}
            </option>
            @endforeach --}}

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <div class="card-footer">

    </div>

</div>
@endsection