<a href="/">⬅️ Kembali ke Beranda</a>
<hr>

<h1>Data Kelas</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Kelas</th>
        <th>Jurusan</th>
    </tr>

    @php $no = 1; @endphp

    @foreach($data as $d)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $d->nama_kelas }}</td>
        <td>{{ $d->jurusan }}</td>
    </tr>
    @endforeach
</table>