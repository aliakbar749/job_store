@extends('user.master')

@section('content')
    <body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Project Add</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Project Add</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <form action="{{route('admin.form.submit')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">General</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Company Name</label>
                                    <input type="text" id="Cname" name="Cname" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Job_Post Name</label>
                                    <input type="text" id="JPname" name="JPname" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Job Description</label>
                                    <textarea id="JDescription" name="Jdescription" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Vacancy</label>
                                    <input type="integer" id="vacancy" name="Vacancy" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Experience</label>
                                    <textarea id="Experience" name="Experience" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Job Location</label>
                                    <input type="text" id="Jlocation" name="Jlocation" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label for="inputName">Salary</label>
                                    <input type="integer" id="Salary" name="Salary" class="form-control">

                                </div>


                                <div class="form-group">
                                    <label for="inputClientCompany">Last date to apply </label>
                                    <input type="date" id="LDate" name="Ldate" class="form-control">
                                </div>


                                <input type="submit" value="Create new Porject" class="btn btn-success float-right">

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
            </form>





            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Create new Porject" class="btn btn-success float-right">
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

    </body>


@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Job_Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Construction Company Website Template" name="keywords">
    <meta content="Construction Company Website Template" name="description">

    <!-- Favicon -->
    <link href="frontend/img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

<!-- CSS {{asset('frontend')}}/libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/{{asset('frontend')}}/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/lib/slick/slick.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('frontend/dist')}}/UserCss/style.css" rel="stylesheet">
</head>


