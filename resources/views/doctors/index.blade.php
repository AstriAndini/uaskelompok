@extends('layouts.main')

@section('content')
<a href="{{ route('doctors.create') }}" class="btn btn-info mt-3">Tambah Data Doktor</a>
<div class="col-sm-12">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
</div>
<div class="card mt-3">

<div class="card-header">
   Data Dokter
</div>

<div class="card-body">
    <table class="table table-stripped table-teal">
        <tr>
            <th>No</th>
            <th>No. Registrasi</th>
            <th>Nama Dokter</th>
            <th>Nama Poli</th>
            <th>Action</th>
        </tr>
        @foreach ($doctors as $doctor)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $doctor->registration_code }}</td>
            <td>{{ $doctor->name }}</td>
            <td>{{ $doctor->polyclinics->name }}</td>
            <td>
                <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-secondary">Edit</a>
            </td>
            <td>
                <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
@endsection
