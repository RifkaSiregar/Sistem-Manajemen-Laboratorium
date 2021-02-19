<table class ="table" style="border:1px solid #ddd">
<thead>
<tr>
        <th>User ID</th>
        <th>Aktivitas</th>
        <th>Created at</th>
        <th>Updated at</th>
      </tr>
</thead>
<tbody>
      @foreach($aktivitas as $a)
    <tr>
    <td>{{$a->kode}}</td>
    <td>{{$a->aktivitas}}</td>
    <td>{{$a->created_at}}</td>
    <td>{{$a->updated_at}}</td>
    @endforeach
    </tbody>
</table> 