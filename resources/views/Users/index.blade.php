@extends('layouts.app')

@section('content')


    <div class="container mt-5">
    <div class="card mb-3">
        <div class="card-body">
        <div class="row">
            <div class="col-lg-6">
                <h1>Users</h1>
            </div>
            
        </div>
        </div>
    </div>
    <table  id="example" class="table table-bordered mb-5 ">
        <thead>
            <tr class="table-success">
            <th scope="col">#</th>
                <th  scope="col">Name</th>
                <th  scope="col">Email</th>
             
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $users)
                <tr>
                <th scope="row">{{ $users->id }}</th>
                       
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td>
                           <form method="POST" class="mt-2" action="{{ route('users.destroy', $users) }}">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection