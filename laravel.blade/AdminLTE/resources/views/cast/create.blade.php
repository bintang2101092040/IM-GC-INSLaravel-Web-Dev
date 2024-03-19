@extends('layouts.main')

@section('content')
<div class="col-lg-6 mb-5">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Entri Cast</h1>
</div>
<form method="post" action="/cast">
    @csrf
    <div class="mb-2">
      <label for="nama" class="form-label">Nama Cast</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama')}}">
      @error('nama')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-2">
        <label for="umur" class="form-label">Umur</label>
        <input type="text" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ old('umur')}}">
        @error('umur')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-2">
        <label for="bio" class="form-label">Bio</label>
        <input type="text" class="form-control @error('bio') is-invalid @enderror" name="bio" value="{{ old('bio')}}">
        @error('bio')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>

    <br><br>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection