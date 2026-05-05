<a href="/">⬅️ Kembali ke Beranda</a>
<hr>

<h1>Data Nilai</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Pelajaran</th>
        <th>Nilai</th>
    </tr>

    @foreach($data as $index => $d)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $d->nama_siswa }}</td>
        <td>{{ $d->pelajaran }}</td>
        <td>{{ $d->nilai }}</td>
    </tr>
    @endforeach
</table>