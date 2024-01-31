@extends('layouts.main')

@section('pageContent')
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-3">
                <form action="/login-voter" method="POST">
                    @csrf
                    <!-- NIC input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="v_nicp" id="v_nicp" class="form-control" />
                        <label class="form-label" for="form2Example1">NIC</label>
                    </div>

                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="v_name" id="v_name" class="form-control" />
                        <label class="form-label" for="form2Example2">Name</label>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row" align="center">
                        <button type="submit" id="loginButton" class="btn btn-primary btn-lg d-block mx-auto">Sign in</button>
                    </div>
                </form>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>

<!-- jQuery Library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">


    $(document).ready(function () {
        //document.getElementById('loginButton').style.visibility='hidden';
        console.log('Page loaded. Hiding login sds.');
        //alert('Form submitted. Login button is now visible.');

        Swal.fire({
                icon: 'success',
                title: 'Form Submitted',
                text: 'I am in login!',
                showConfirmButton: false, // To hide the "OK" button
                timer: 2000 // Automatically close after 2 seconds
            });
    });

</script>
@endsection
