@extends('Layout.master')

@section('title', 'Stock')

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
        <form action="{{ route('stock.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama_roti">Nama Roti</label>
                <input type="text" class="form-control" name="nama_roti" placeholder="Enter nama roti">

                @error('nama_roti')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="Rasa_roti">Rasa Roti</label>
                <input type="text" class="form-control" name="rasa_roti" placeholder="Enter rasa roti">

                @error('rasa_roti')
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