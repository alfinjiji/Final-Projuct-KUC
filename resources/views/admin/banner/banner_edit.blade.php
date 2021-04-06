@extends('admin.layout')
@section('title', 'Edit-Banner')
@section('heading', 'Edit-Banner')
@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Banner</h3>
              <a href="{{url()->previous()}}"><button class="btn btn-success float-right">Back</button></a>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form  action="{{route('do.banner.edit',['id'=>encrypt($banner->banner_id)])}}" method="POST"  enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                    <div class="form-group">
                      <label>Banner Name</label>
                      <input type="text" class="form-control"  value={{$banner->banner_name}} name="bannername">
                    </div>
                    <div class="form-group">
                        <label>Url</label>
                        <input type="text" class="form-control"  value={{$banner->url}} name="url">
                    </div>
                    <div class="form-group">
                        <label>Date From</label>
                        <input type="text" class="form-control" placeholder="yyyy-mm-dd" value={{$banner->date_from}} name="fromdate" id="datepicker" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label>Date To</label>
                      <input type="text" class="form-control" placeholder="yyyy-mm-dd" value={{$banner->date_to}} name="duedate" id="datepicker1" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label>Image</label><br>
                      <img id="view" src="{{asset('storage/app/image/'.$banner->image)}}"  style="max-width:100px;max-height: 100px "/>
                      <div class="custom-file">
                        <input class="form-control" type="file" id="formFileDisabled"  onchange="previewFile()" name="image" value="{{$banner->image}}"/>
                        
                    </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#view").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }

    }
  
  </script>
  <!-- /.content -->
@endsection