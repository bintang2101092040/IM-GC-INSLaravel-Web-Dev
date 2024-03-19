@extends('layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Cast</h1>
</div>

@if (session()->has('pesan'))
    <div class="alert alert-success mt-3" role="alert">
        {{ session('pesan') }}
    </div>    
@endif

<a href="/cast/create" class="btn btn-primary"><span data-feather="plus-circle"></span> Create Cast</a>
<table class="table table-bordered table-sm my-4">
<tr>
    <th>No</th>
    <th>Nama Cast</th>
    <th>Umur Cast</th>
    <th>Bio</th>
    <th>Aksi</th>

</tr>

@foreach ($casts as $cast)
<tr>
    <td>{{ $casts->firstItem()+$loop->index	}}</td>
    <td>{{ $cast->nama }}</td>
    <td>{{ $cast->umur }}</td>
    <td>{{ $cast->bio }}</td>
    <td>
        <a href="/cast/{{ $cast->id }}/edit" class="btn btn-warning btn-sm"><span data-feather="edit"></span> Edit</a>
        
        <form action="/cast/{{ $cast->id }}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ?')"><span data-feather="trash-2"></span> Delete</button>
        </form>       

    </td>
   
</tr>    
@endforeach
</table>
{{ $casts->links() }}
@endsection