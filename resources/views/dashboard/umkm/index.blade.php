@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Action</th>
            </tr>
          </thead>
        @foreach ($umkm as $umkm)
             <tbody>
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $umkm->name }}</td>
              <td>{{ $umkm->username }}</td>
              <td>
                <a href="/dashboard/umkm/{{ $umkm->slug }}" class="badge bg-info"><i class="bi bi-eyeglasses"></i></a>
                <a href="/dashboard/umkm/{{ $umkm->slug }}/edit" class="badge bg-secondary"><i class="bi bi-pencil-square"></i></a>
                <form class="d-inline" action="/dashboard/umkm/{{ $umkm->slug }}" method="post">
                  @csrf
                  @method('delete')
                  <button class="badge bg-danger" onclick="return confirm('are you sure?')"><i class="bi bi-trash3"></i></button>
              </form>
                
              </td>
            </tr>
          </tbody> 
          @endforeach
          
        </table>
      </div>
</div>
@endsection