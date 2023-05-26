@extends('dashboard-layout')
@section('head')
<script scr="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection

@section('main-page')
@if(session('status'))
  <div class="alert alert-primary dark alert-dismissible fade show" role="alert"><i data-feather="thumbs-up"></i>
    <p> {{session('status')}}</p>
    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
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
                  <form class="form theme-form" method="post" action="{{route('blog.store')}}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="exampleFormControlInput1">Title</label>
                            <input class="form-control input-air-primary" id="exampleFormControlInput1" name="title" type="text" value="{{old('title')}}"  placeholder="input your title here....">
                          </div>
                          @error('title')
                          <p style="color: red; margin-bottom:25px ">{{$message}}</p>
                          @enderror
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="exampleInputPassword2">Image</label>
                            <input class="form-control input-air-primary" name="image" id="exampleInputPassword2" type="file" >
                          </div>
                          @error('image')
                          <p style="color: red; margin-bottom:25px ">{{$message}}</p>
                          @enderror
                        </div>
                      </div>

        
                      <div class="row">
                        <div class="col">
                          <div>
                            <label class="form-label" for="exampleFormControlTextarea4"> Body </label>
                            <textarea class="form-control input-air-primary" name="body" id="exampleFormControlTextarea4" rows="6">{{old('body')}}</textarea>
                          </div>
                          @error('body')
                          <p style="color: red; margin-bottom:25px ">{{$message}}</p>
                          @enderror
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