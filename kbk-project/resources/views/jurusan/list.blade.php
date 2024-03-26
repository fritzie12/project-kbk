@extends('template')
@section('content')

<h2 >data dosen</h2>

<a href="{{ url('/jurusan/insert') }}">Tambah</a>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>ID JURUSAN</th>
        <th>KODE JURUSAN</th>
        <th>JURUSAN</th>
    </tr>
    @foreach ($jurusans as $jurusan)
    <tr>
        <td>{{ $jurusan->id_jurusan }}</td>
        <td>{{ $jurusan->kode_jurusan }}</td>
        <td>{{ $jurusan->jurusan }}</td>
        <td>
            <a href="{{ url('jurusan/update' . $jurusan->id) }}">update</a>
            <a href="{{ url('jurusan/delete' . $jurusan->id) }}">delete</a>
        </td>
    </tr>
        
    @endforeach
</table>

@endsection