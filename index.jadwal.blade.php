<a href="/">⬅️ Kembali ke Beranda</a>
<hr>

<h1>Data Jadwal</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Hari</th>
        <th>Jam</th>
        <th>Pelajaran</th>
        <th>Kelas</th>
        <th>Guru</th>
    </tr>

    @foreach($data as $index => $d)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $d->hari }}</td>
        <td>{{ $d->jam }}</td>
        <td>{{ $d->pelajaran }}</td>
        <td>{{ $d->kelas }}</td>
        <td>{{ $d->guru }}</td>
    </tr>
    @endforeach
</table>
