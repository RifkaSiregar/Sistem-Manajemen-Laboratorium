<table class ="table" style="border:1px solid #ddd">
<thead>
<tr>
        <th>Kode</th>
        <th>Nama Inventaris</th>
        <th>Jumlah</th>
        <th>Kondisi</th>
        <th>Status</th>
      </tr>
</thead>
<tbody>
      @foreach($inventaris as $i)
    <tr>
    <td>{{$i->kode}}</td>
    <td>{{$i->nama_inventaris}}</td>
    <td>{{$i->jumlah}}</td>
    <td>{{$i->kondisi}}</td>
    <td>{{$i->status}}</td>
    
    @endforeach
    </tbody>
</table> 