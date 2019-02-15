@extends('admin.layoutAdmin.master')
@section('title', 'List PC')
@section('content')
    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Table Product </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                   <ul class="nav nav-tabs " style="border-bottom: none">
                       <li class="col-md-9">List </li>
                       <li>
                           <a href="/admin/job/create" style="padding: 0; color: white">Create new product</a>
                       </li>
                   </ul>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody id="demo-get">
                            </tbody>
                            <tbody >
                            @foreach($product as $item)
                                <tr id="{{$item->id}}">
                                    <td>{{$item->id}}</td>
                                    <th class="col-md-2">


                                    </th>
                                    <td id="title-{{$item->title}}">{{$item->title}}</td>
                                    <td>{{$item->job_description}} </td>
                                    {{--<td>{{$item->price}}</td>--}}
                                    <td>
                                        <a href="/admin/job/{{$item->id}}/edit" id="putUser" class="fa fa-edit"> Edit</a> <p> </p>

                                        <a href="/admin/job/{{$item->id}}/delete" id="putUser" class="fa fa-trash btn-delete"> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bạn có chắc muốn xoá?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalContent">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="btnConfirmDelete">Sure</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection