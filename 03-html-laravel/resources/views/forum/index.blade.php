@extends('layouts.master')

@section('content')
<title>Forum</title>
    <div class="main"> 
         <div class="main-content">
             <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                    <h3 class="panel-title">Forum</h3>
                                    <div class="panel">  
                                        <div class="right">
                                          <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">Add New forum</button>
                                        </div>
                                        <br><br><br><br><br><br><br>                                     
                                      </div>  
                                                        
                                      <div class="panel-body">
                                        <table id="datatableid" class="table table-hover">
                                          <thead>
                                            <tr>
                                            <th>Judul</th>
                                            <th>Slug</th>
                                            <th>Konten</th>
                                            <th>User ID</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                          @foreach($forum as $frm)
                                        <tr>
                                        <td>{{$frm->judul}}</td>
                                        <td>{{$frm->slug}}</td>
                                        <td>{{$frm->konten}}</td>
                                        <td>{{$frm->user_id}}</td>
                                        <td>
                                          <a href="/forum/{{$frm->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                          <a href="/forum/{{$frm->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
                                          </td>
                                        </tr>
                                        @endforeach
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                    
                                    <!-- END TABLE HOVER -->
                                    
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Forum</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                    
                                                <form action="/forum/adds" method="POST">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                        <label for="exampleInputEmail1">Judul</label>
                                        <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Slug</label>
                                        <input name="slug" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Slug">
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Konten</label>
                                        <input name="konten" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Konten">
                                      </div>
                                      {{-- <div class="form-group">
                                        <label for="exampleInputEmail1">User ID</label>
                                        <input name="user_id" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Konten" >
                                      </div> --}}
                                        </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                              </form>  
                                              </div>
                                                </div>
                                            </div>
                                    </div>
                                <div class="panel-body">
                                <ul class="list-unstyled activity-list">
                                    @foreach($forum as $frm)
										<li>
											<img src="assets/img/user1.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="/forum/{{$frm->id}}/edit">{{$frm->judul}} <span class="timestamp">{{$frm->created_at}}</span></p>
										</li>
                                        @endforeach
									</ul>
                             </div>
                         </div>
                 </div>
             </div>
         </div>
     </div>
</div>
  
@endsection

