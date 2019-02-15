@extends('admin.layoutAdmin.master')
@section('title', 'Create Product')
@section('style')
    <link href="{{asset('css/layout.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create Product</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-primary">
                <div class="panel-heading text-capitalize">
                    Thêm sản phẩm mới
                </div>
                <div class="panel-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{$action}}" id="add-user" method="POST" enctype="multipart/form-data"
                          class="form-horizontal">
                        @if($method == "PUT")
                            <input name="_method" type="hidden" value="PUT">
                        @endif
                        {{ csrf_field() }}
                        <div class="form-group row fullname-group">
                            <label class="col-md-2 col-form-label text-right">Title hihi</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="title" value="{{$product->title}}"
                                       id="title" placeholder="Nhập tên sản phẩm">
                                <small class="text-danger">{{$errors->first('title')}}</small>

                            </div>
                        </div>

                        <div class=" form-group row phone-group">
                            <label class="col-md-2 col-form-label text-right">Description</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="job_description" id="job_description"
                                       value="{{$product->job_description}}" placeholder="Nhập chú thích cho sản phẩm">
                            </div>
                        </div>

                        <div class=" form-group row password-group">
                            <label class="col-md-2 col-form-label text-right">URL</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="job_url" id="job_url"
                                       value="{{$product->job_url}}" placeholder="Nhập giá cho sản phẩm">
                            </div>
                        </div>
                        <div class=" form-group row password-group">
                            <label class="col-md-2 col-form-label text-right">Location</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="location" id="location"
                                       value="{{$product->location}}" placeholder="Nhập giá cho sản phẩm">
                            </div>
                        </div>
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<div class=" form-group row password-group">--}}
                                {{--<label class="col-md-2 col-form-label text-right">job_description</label>--}}
                                {{--<div class="col-md-8">--}}
                                    {{--<input type="text" class="form-control" name="job_description" id="job_description"--}}
                                           {{--value="{{$product->job_description}}" placeholder="Nhập giá cho sản phẩm">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                            <div class="form-group row">
                                <div class=" form-group row password-group">
                                    <label class="col-md-2 col-form-label text-right">skills_experience</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="skills_experience" id="skills_experience"
                                               value="{{$product->skills_experience}}" placeholder="Nhập giá cho sản phẩm">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class=" form-group row password-group">
                                    <label class="col-md-2 col-form-label text-right">love_working_here</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="love_working_here" id="love_working_here"
                                               value="{{$product->love_working_here}}" placeholder="Nhập giá cho sản phẩm">
                                    </div>
                                </div>
                            </div>
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <label> </label>
                                    </div>
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </div>
                                </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('vendor-admin/datatables/js/jquery.dataTables.min.js')}}"></script>

    <script src="{{asset('vendor-admin/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>

    <script src="{{asset('vendor-admin/datatables-responsive/dataTables.responsive.js')}}"></script>

    <script src="{{asset('vendor-admin/datatables-responsive/dataTables.responsive.js')}}"></script>

    <script src="{{asset('js/admin/formProduct.js')}}"></script>
@endsection