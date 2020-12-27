<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- details card section starts from here -->
<section class="details-card ">
    <div class="container mt-md-5">
        <div class="row">
            @foreach ($std as $student)

            <div class="col-md-4 mt-md-5">
                <div class="card-content">
                    <div class="card-img">
                        <img src="images/{{$student['student_image']}}" alt="" style="height: 100px; width:100px;">
                        <span><h4>{{ $student['student_name'] }}</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>{{ $student['student_email'] }}</h3>
                        <p>{{ $student['student_phone'] }}</p>
                            <a href="{{ url('details'.$student['id']) }}" class="btn-card">Read</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- details card section starts from here -->
