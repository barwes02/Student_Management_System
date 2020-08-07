<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Student Management System</title>
</head>

<body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <script>

    </script>
    <div style="position:absolute;top:50%;left:45.5%;" id="loading" class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>

    <div style="display:none;" id="content">
        @include("navBar")



        <div class="row header-container justify-content-center">
            <div class="header">
                <h1>Student Management System</h1>
            </div>
        </div>

        @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-7">
                    @include("studentslist")
                </section>
            </div>
        </div>
        @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-lg-7">
                    @include("studentslist")
                </section>
                <section class="col-lg-5">

                    <div class="card lg-3">
                        <img src="https://www.apa.org/images/sia-science-teaching-title_tcm7-165543.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Enter the information of a new Student</h5>

                            <form action="{{ url('/store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>CN</label>
                                    <input name="cne" type="text" class="form-control" placeholder="Enter CN" required>
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input pattern="[A-Za-z]{1,30}" name=" firstName" type="text" class="form-control" placeholder="Enter First Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input pattern="[A-Za-z -]{1,30}" name=" lastName" type="text" class="form-control" placeholder="Enter Last Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Age</label>
                                    <input max="100" name="age" type="number" class="form-control" placeholder="Enter Age" required>
                                </div>
                                <div class="form-group">
                                    <label>Speciality</label>
                                    <input pattern="[A-Za-z -]{1,30}" name=" speciality" type="text" class="form-control" placeholder="Enter Speciality" required>
                                </div>
                                <input id="confirm" type="submit" class="btn btn-info" value="Save">
                                <input type="reset" class="btn btn-warning" value="Reset">
                            </form>

                        </div>
                    </div>


                </section>
            </div>
        </div>
        @elseif($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include("studentslist")
                </section>
                <section class="col"></section>
            </div>
        </div>
        @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-lg-7">
                    @include("studentslist")
                </section>
                <section class="col-lg-5">

                    <div class="card lg-3">
                        <img src="https://greatergood.berkeley.edu/images/made/images/uploads/Four_ways_schools_can_support_the_whole_child_640_480_c1-fb.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Update Student information</h5>
                            <form action="{{ url('/update/'.$student->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>CN</label>
                                    <input value="{{ $student->cne }}" name="cne" type="text" class="form-control" placeholder="Enter CN" required>
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input pattern="[A-Za-z]{1,30}" value="{{ $student->firstName }}" name="firstName" type="text" class="form-control" placeholder="Enter First Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input pattern="[A-Za-z -]{1,30}" value="{{ $student->lastName }}" name="lastName" type="text" class="form-control" placeholder="Enter Last Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Age</label>
                                    <input max="100" value="{{ $student->age }}" name="age" type="number" class="form-control" placeholder="Enter Age" required>
                                </div>
                                <div class="form-group">
                                    <label>Speciality</label>
                                    <input pattern="[A-Za-z -]{1,40}" value=" {{ $student->speciality }}" name="speciality" type="text" class="form-control" placeholder="Enter Speciality" required>
                                </div>
                                <input id="confirm" type="submit" class="btn btn-info" value="Update">
                                <input type="reset" class="btn btn-warning" value="Reset">
                            </form>
                        </div>
                    </div>

                </section>
            </div>
        </div>
        @endif


        <footer></footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script>
        $("a, #confirm").click(function() {
            document.getElementById("loading").style.display = "block"
            document.getElementById("content").style.display = "none"
        });
        $(window).on('load', function() {
            document.getElementById("loading").style.display = "none"
            document.getElementById("content").style.display = "block"

        });
    </script>
</body>

</html>