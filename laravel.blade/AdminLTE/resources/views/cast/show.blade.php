@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detail Cast Member</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" value="{{ $cast->nama }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur:</label>
                        <input type="text" class="form-control" id="umur" value="{{ $cast->umur }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio:</label>
                        <textarea class="form-control" id="bio" rows="3" readonly>{{ $cast->bio }}</textarea>
                    </div>
                    <a href="{{ url('/cast/' . $cast->id . '/edit') }}" class="btn btn-primary">Edit</a>
                    <form action="{{ url('/cast/' . $cast->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this cast member?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
