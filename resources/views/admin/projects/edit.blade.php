@extends('layouts.admin')
@section('admin.css')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WebLabs | Edit Project</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
    </head>
@endsection
@section('admin.body')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Project </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Project</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            @if(session()->has('messages'))
                <div class="alert alert-success">
                    {{ session()->get('messages') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br/>
                    @endforeach
                </div>
            @endif
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="POST" action="{{route('projects.update',$project->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12 col-sm-12">
                                        <div class="card card-primary card-tabs">
                                            <div class="card-body">
                                                <div class="tab-content">

                                                    <div class="card-body">
                                                        <div class="card-body">
                                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($project->image) }}">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Image </label>
                                                                <input type="file" class="form-control @error("image") is-invalid @enderror"
                                                                       name="image"
                                                                       value="{{ $project->image}}"
                                                                       placeholder="image">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Title </label>
                                                                <input type="text" class="form-control @error("title") is-invalid @enderror"
                                                                       name="title"
                                                                       value="{{ $project->title }}"
                                                                       placeholder="Title">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Title </label>
                                                                <input type="text" class="form-control @error("url") is-invalid @enderror"
                                                                       name="url"
                                                                       value="{{ $project->url }}"
                                                                       placeholder="Url">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Category </label>
                                                                <select name="category_id" class="form-control" required>
                                                                    <option value="">-Sec</option>
                                                                    @foreach($categories as $category)
                                                                        <option value="{{ $category->id }}" @if($project->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div  class="form-group">
                                                                <label for="exampleInputEmail1">Text </label>

                                                                <textarea  type="text" class="form-control @error("text") is-invalid @enderror"
                                                                           name="text"

                                                                           placeholder="Text">{{ $project->text }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                    <div class="card-footer" style="background: none">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('admin.js')
    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- jquery-validation -->
    <script src="{{ asset('admin/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <!-- AdminLTE App -->

    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>

    <script>
        $(function () {
            // Summernote

            $('#summernote_EN').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai",

            });



        })
        $(function () {
            // Summernote

            $('#summernote_AZ').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai",

            });

        })
        $(function () {
            // Summernote


            $('#summernote_RU').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai",

            });




        })

    </script>

@endsection
