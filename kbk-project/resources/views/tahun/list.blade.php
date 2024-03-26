@extends('template')
@section('content')

<h2 >data dosen</h2>

<a href="{{ url('/tahun/insert') }}">Tambah</a>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>ID SEMESTER</th>
        <th>TAHUN AKADEMIK</th>
        <th>STATUS</th>
    </tr>
    @foreach ($tahuns as $tahun)
    <tr>
        <td>{{ $tahun->id_smt_thn_akd }}</td>
        <td>{{ $tahun->smt_thn_akd }}</td>
        <td>{{ $tahun->status }}</td>
        <td>
            <a href="{{ url('tahun/update' . $tahun->id) }}">update</a>
            <a href="{{ url('tahun/delete' . $tahun->id) }}">delete</a>
        </td>
    </tr>
        
    @endforeach
</table>

@endsection