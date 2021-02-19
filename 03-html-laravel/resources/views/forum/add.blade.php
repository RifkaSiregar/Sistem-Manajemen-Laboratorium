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
					<h3 class="panel-title">Inputs</h3>
				</div>
				<div class="panel-body">
                <form action="/forum/{{$forum->id}}/update" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
            <label for="exampleInputEmail1">Judul</label>
            <input name="judul" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Judul" value="{{$forum->judul}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Slug</label>
            <input name="slug" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Slug" value="{{$forum->slug}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Konten</label>
            <input name="konten" type="integer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Konten" value="{{$forum->konten}}">
        </div>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
                </form>  
            </div>
            </div>
            </div>
            </div>
            </div>
            
@stop
