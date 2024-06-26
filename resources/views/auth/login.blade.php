<!DOCTYPE html>
<html lang="en">

<head>
    
<!-- META -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
<title>Login</title>
<!-- CSS -->
@include('admin.layouts.include.css')

</head>


<body class="form">

    <!-- BEGIN LOADER -->
    @include('admin.layouts.include.loader')
    <!--  END LOADER -->

    <div class="auth-container d-flex">

        <div class="container mx-auto align-self-center">
    
            <div class="row">
    
                <div class="col-6 d-lg-flex d-none h-100 my-auto top-0 start-0 text-center justify-content-center flex-column">
                    <div class="auth-cover-bg-image"></div>
                    <div class="auth-overlay"></div>
                        
                    <div class="auth-cover">
    
                        <!-- <div class="position-relative mt-4">
    
                           
                            <img src="{{asset('assets/image/hysteria.jpeg')}}" alt="auth-img" style="width:500px; border-radius: 25px;">
                            <h2 class="mt-5 text-white font-weight-bolder px-2">Welcome Hysteria</h2>
                            
                        </div> -->
                        
                    </div>

                </div>

                <div class="  col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mt-5">
                    <div class="card">
                        <div class="card-body">
                            <form id="login-form">
                                <div class="row">
                                <div class="col-md-12 mb-3">
                                    
                                    <h2>Sign In</h2>
                                    <p>Enter your email and password to login</p>
                                    
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" name="username" id="username" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="text" name="password" id="password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                            <label class="form-check-label" for="form-check-default">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="mb-4">
                                        <button type="submit" class="btn btn-secondary w-100">SIGN IN</button>
                                    </div>
                                </div>
                           
                            </form>   

                            
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

    </div>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/src/plugins/src/global/vendors.min.js') }}"></script>
    <script src=" {{ asset('assets/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src=" {{ asset('assets/js/overly.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script>
    var base_url = '<?php echo url(''); ?>';  


    $('#login-form').on('submit', function(e) {
        e.preventDefault();

        var username = $('input[name=username]').val();
        var password = $('input[name=password]').val();
        
        $.ajax({
            
            type: "POST",
            url: base_url + '/auth/verify',
            data: {
             username : username,
             password : password,
             _token   : '{{ csrf_token() }}'
            },
            dataType: 'json',
            beforeSend: function() {
                   
                JsLoadingOverlay.show({
                    'overlayBackgroundColor': '#666666',
                    'overlayOpacity': 0.6,
                    'spinnerIcon': 'pacman',
                    'spinnerColor': '#000',
                    'spinnerSize': '2x',
                    'overlayIDName': 'overlay',
                    'spinnerIDName': 'spinner',
                  }); 
            },
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function(data)
            {            

                console.log(data)

            }

        });
    });
   
    </script>

</body>


</html>