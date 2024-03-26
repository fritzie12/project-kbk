@extends('template')
@section('content')

<h2 >data dosen</h2>

<a href="{{ url('/prodi/insert') }}">Tambah</a>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>ID PRODI</th>
        <th>KODE PRODI</th>
        <th>PRODI</th>
        <th>JENJANG</th>
    </tr>
    @foreach ($prodis as $prodi)
    <tr>
        <td>{{ $prodi->id_prodi }}</td>
        <td>{{ $prodi->kode_prodi }}</td>
        <td>{{ $prodi->prodi }}</td>
        <td>{{ $prodi->id_jenjang }}</td>
        <td>
            <a href="{{ url('prodi/update' . $prodi->id) }}">update</a>
            <a href="{{ url('prodi/delete' . $prodi->id) }}">delete</a>
        </td>
    </tr>
        
    @endforeach
</table>

@endsection