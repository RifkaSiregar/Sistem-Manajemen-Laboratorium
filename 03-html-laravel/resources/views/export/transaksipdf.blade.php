<table class ="table" style="border:1px solid #ddd">
<thead>
<tr>
    <th>Kode</th>
    <th>Tanggal</th>
    <th>Jumlah</th>
    <th>Status</th>
</tr>
</thead>
<tbody>
      @foreach($transaksi as $t)
    <tr>
    <td>{{$t->kode}}</td>
    <td>{{$t->tanggal}}</td>
    <td>{{$t->jumlah}}</td>
    <td>{{$t->status}}</td>
    @endforeach
    </tbody>
</table> 