@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="box box-solid box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Study Materials</h3>
                        <div class="box-tools pull-right">
                            {{--<span class="label label-default">Upload File</span>--}}
                            <button type="button" class="btn btn-primary btn-flat">Upload File</button>
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-hover">
                            <!-- On cells (`td` or `th`) -->
                            <tr>
                                <th>File Name</th>
                                <th>Class</th>
                                <th>Upload date</th>
                                <th>Uploaded By</th>
                                <th>File size</th>
                                <th>Actions</th>
                            </tr>
                            <tr>
                                <td class="info">Chapter1.pdf</td>
                                <td class="info">2</td>
                                <td class="info">3-march-17</td>
                                <td class="info">Alex</td>
                                <td class="info">2MB</td>
                                <td class="info">
                                    <!-- Single button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Download</a></li>
                                            <li><a href="#">Preview</a></li>
                                            <li><a href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="info">Chapter1.pdf</td>
                                <td class="info">2</td>
                                <td class="info">3-march-17</td>
                                <td class="info">Alex</td>
                                <td class="info">2MB</td>
                                <td class="info">
                                    <!-- Single button -->
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Download</a></li>
                                            <li><a href="#">Preview</a></li>
                                            <li><a href="#">Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </div>
@stop