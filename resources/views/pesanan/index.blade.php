<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Tanggal & Jam</th>
        <th>Jumlah Orang</th>
    </tr>
    @foreach($pesanan as $p)
    <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->nama}}</td>
        <td>{{$p->email}}</td>
        <td>{{$p->tanggal_jam}}</td>
        <td>{{$p->jumlah_org}}</td>
    </tr>
    @endforeach()
</table>