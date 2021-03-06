@extends('back.index')

@section('title')
    ویرایش نمونه کار
@endsection

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header">
                <div class="col-12">
                    <div class="page-header">
                        <h4 class="page-title">ویرایش نمونه کار</h4>
                    </div>
                </div>

            </div>
            <!-- Page Title Header Ends-->


            <div class="row">


                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            @include('back.messages')
                            <form action="{{route('admin.portfolios.update',$portfolio->id)}}" method="POST">

                                @csrf
                                <div class="form-group">
                                    <label for="title">نام نمونه کار</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{$portfolio->name}}">
                                    @error('name')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="title">لینک</label>
                                    <input type="text" class="form-control @error('link') is-invalid @enderror" name="link"
                                           value="{{$portfolio->link}}">
                                    @error('link')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="title">تگ</label>
                                    <input type="text" class="form-control @error('tag') is-invalid @enderror" name="tag"
                                           value="{{$portfolio->tag}}">
                                    @error('tag')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="title">توضیحات</label>
                                    <textarea type="text" class="form-control @error('description') is-invalid @enderror"
                                              name="description">{{$portfolio->description}}</textarea>
                                    @error('description')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>


                                <div class="form-group">

                                    <label for="image">نام تصویر</label>

                                    <input type="text" class="form-text"  name="image" value="{{$portfolio->image}}" >

                                    <img src="{{asset('/images/'.$portfolio->image)}}" style="height:100px;width:100px;">
                                    <input type="file" class="form-control-file"   name="image" value="{{$portfolio->image}}" >

                                </div>


                                   <hr>


                                <div class="form-group">
                                    <label for="title"></label>
                                    <button type="submit" class="btn btn-success">ویرایش</button>
                                    <a href="{{route('admin.portfolios')}}" class="btn btn-warning"> انصراف </a>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>          </div>
        </div>
        <!-- content-wrapper ends -->
        @include('back.footer')
    </div>
@endsection
