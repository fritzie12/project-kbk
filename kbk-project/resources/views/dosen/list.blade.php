@extends('template')
@section('content')

<h2 >data dosen</h2>

<a href="{{ url('/dosen/insert') }}">Tambah</a>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>ID DOSEN</th>
        <th>NAMA</th>
        <th>NIDN</th>
        <th>NIP</th>
        <th>GENDER</th>
        <th>EMAIL</th>
    </tr>
    @foreach ($dosens as $dosen)
    <tr>
        <td>{{ $dosen->id_dosen }}</td>
        <td>{{ $dosen->nama }}</td>
        <td>{{ $dosen->nidn }}</td>
        <td>{{ $dosen->nip }}</td>
        <td>{{ $dosen->gender }}</td>
        <td>{{ $dosen->email }}</td>
        <td>
            <a href="{{ url('dosen/update' . $dosen->id) }}">update</a>
            <a href="{{ url('dosen/delete' . $dosen->id) }}">delete</a>
        </td>
    </tr>
        
    @endforeach
</table>

@endsection