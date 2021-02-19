<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Title Page-->
    <title>CPLUSCO Badminton Brisbane | QR Registration</title>
    <?php
         if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL = $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
           } else {
            $pageURL = $_SERVER["SERVER_NAME"];
           }
    ?>
    <!-- Icons font CSS-->
    <link href="{{asset('assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" media="all">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    
    <style>
        .applyBtn {
            color: #08482b;
        }
        .cancelBtn {
            color: #08482b;
        }
    </style>
</head>

<body>
   
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h3 class="title">Registration Info</h3>
                    <form class="needs-validation add-product-form" novalidate="novalidate" method="POST" action= "{{url('/reserve')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="First Name" name="firstname" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Last Name" name="lastname" required>
                        </div>
                        <div class="col-4">
                            <div class="input-group">
                                <input class="input--style-2 js-datepicker" type="text" placeholder="The date and time period of patronage" name="date_reservation">
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            </div>
                            <div class="input-group">
                                <input class="input--style-2" type="email" placeholder="Email Address (Input residential address if unavailable)" name="email">
                            </div>

                            <div class="input-group">
                                <input class="input--style-2" type="text" placeholder="Residential address " name="residential">
                            </div>

                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
       
    <div id="ex1" class="modal">
        <p>Thank you. Your information has been recorded.</p>
        <p>Disclaimer:</p>
        <br>
        <p> > Your contact information is being collected for the purpose of contact tracing in the event of positive COVID-19 diagnosis involving this business. Information is being collected under the Queensland Chief Health Officer’s Restrictions on Businesses, Activities and Undertakings Direction (No. 3) (or its successor). Should your duration in premises not be indicated on this form you may be contacted by Health compliance officers.</p>
        <br>
        <p> > Your personal information will be stored securely and destroyed after 56 days, unless otherwise required by public health officials in the event of a Coronavirus (COVID-19) outbreak. It will NOT be used for marketing or research purposes, given or sold to third parties.</p>
        <br>
        <p> > Depending on the nature of your dealings with us, we may collect and hold other types of personal information ordinarily collected by us, such as loyalty cards, booking information, etc., which will only be used to provide you with those services.</p>

    </div>
    
    
    <!-- Vendor JS-->
    <script src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{asset('assets/js/global.js')}}"></script>

    <script>
        $('#ex1').on($.modal.BEFORE_CLOSE, function(event, modal) {
          location.replace('/home')
        });
    </script>
    @if (Session::has('flash_status'))
        <?php $status = (Session::get('flash_status') == 200)?'success':'error';?>
        <?php $status_type = (Session::get('flash_status') == 200)?'Success':'Failed';?>

        <script> $('#ex1').modal(); </script>
    @endif

   
</body>
</html>