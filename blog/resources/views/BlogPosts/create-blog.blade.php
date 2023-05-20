@extends('dashboard-layout')
@section('head')
<script scr="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection

@section('main-page')
<div class="col-sm-6">
                  <h3>Create Post</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('posts.show') }}">Posts</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blog.create') }}">Create Posts</a></li>
                  </ol>
                </div>
 <!-- Container-fluid starts-->
 <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5> Create Post</h5>
                  </div>
                  <form class="form theme-form" method="post" action="{{route('blog.store')}}" encytype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1">Title</label>
                            <input class="form-control input-air-primary" id="exampleFormControlInput1" name="title" type="text" placeholder="input your title here....">
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="exampleInputPassword2">Image</label>
                            <input class="form-control input-air-primary" name="image" id="exampleInputPassword2" type="file" >
                          </div>
                        </div>
                      </div>

        
                      <div class="row">
                        <div class="col">
                          <div>
                            <label class="form-label" for="exampleFormControlTextarea4"> Body </label>
                            <textarea class="form-control input-air-primary" name="body" id="exampleFormControlTextarea4" rows="6"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-end">
                      <button class="btn btn-primary" type="submit">Submit</button>
                      <input class="btn btn-light" type="reset" value="Cancel">
                    </div>
                  </form>
                </div>


                
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->

@endsection

@section('scripts')
<script>
      CKEDITOR.replace('exampleFormControlTextarea4');
</script>
@endsection