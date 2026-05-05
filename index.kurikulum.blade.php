<a href="/">⬅️ Kembali ke Beranda</a>
<hr>

<h1>Data Kurikulum</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Kurikulum</th>
        <th>Tahun</th>
    </tr>

    @foreach($data as $index => $d)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $d->nama_kurikulum }}</td>
        <td>{{ $d->tahun }}</td>
    </tr>
    @endforeach

</table>