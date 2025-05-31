<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- <link rel="icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon" /> -->

    <!------------CSS-START---------------->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/site.css') }}" rel="stylesheet" />

    <!------------CSS-END------------------>

    <!------------JS-START----------------->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/site.js') }}"></script>
    <script src="{{ asset('frontend/js/aos.js') }}"></script>


    <!------------JS-END------------------->
    <script>
        $("ducoment").ready(function () {
            AOS.init();
        });
    </script>
</head>
<body>
    <!-- <a href="#" class="scrollUp "><i class="fa fa-arrow-up"></i></a> -->
    <div class="gettouch">
        <div class="open"></div>
        <div class="enquiry-form-box text-center mx-auto">
            <div class="alert alert-success alert-dismissable print-success-msg" style="display:none">
            </div>
            <form name="frmEnq" id="frmEnq">
                <div class="form-group">
                    <input class="form-control" type="text" id="name" name="name" placeholder="Name" maxlength="45">
                </div>
                <div class="form-group">
                    <input class="form-control Input_form" type="text" id="phone" name="phone" maxlength="10" placeholder="Mobile No">
                </div>
                <div class="form-group">
                    <input class="form-control Input_form" type="text" id="email" name="email" placeholder="Email Id" maxlength="75">
                </div>
                <div class="form-group">
                    <select class="form-control Input_form" id="location" name="location">
                        <option value="">City</option>
                        <option value="Gurgaon">Gurgaon</option>
                        <option value="Noida">Noida</option>
                        <option value="New Delhi">New Delhi</option>
                        <option value="Faridabad">Faridabad</option>
                        <option value="Mumbai">Mumbai</option>
                    </select>
                </div>

                <div>
                    <span><input type="submit" class="btn_submit" value="Submit Now"></span>
                </div>
            </form>
        </div>
    </div>

    <section class="top_header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 wc_msg">
                    <i class="fa fa-phone mr-2"></i>
                    <a href="tel:{{ $setting->contact_phone }}">{{ $setting->contact_phone }}</a>
                </div>
                <div class="col-sm-6">
                    <ul class="nav nav-pills justify-content-end">
                        <li><a href="{{ $setting->facebook_url }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{ $setting->twitter_url }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{ $setting->linkedin_url }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="{{ $setting->instagram_url }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <header class="HeaderSet">
        <div class="container-fluid">
            <div class="row socil">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ !empty($setting->header_logo) ? asset('storage/app/public/settings/'.$setting->header_logo) : asset('frontend/images/m_logo.png') }}" class="img-fluid"></a>
                    <a href="{{ url('/') }}" class="taglines">{{ $setting->application_name }}</a>
                </div>
                <div class="secrh_box">
                    <div class="input-group border rounded-pill p-1">
                        <input type="search" placeholder="What're you searching for?" aria-describedby="button-addon3"
                            class="form-control border-0 rounded-pill">
                        <div class="input-group-append">
                            <button id="button-addon3" type="button" class="btn btn-link text_blue">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="clear"></div>
    
    @yield('content')

    <!----------Footer-Start---------------------------->
    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="topfoter">
                        <img src="{{ !empty($setting->footer_logo) ? asset('storage/app/public/settings/'.$setting->footer_logo) : asset('frontend/images/m_logo.png') }}" class="img-fluid">

                        <p class="footerpera mt-3">{{ $setting->footer_text }}</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="topfoter ml-5">
                        <h2>Quick links</h2>
                        <div class="navis">
                            <ul>
                                <li><a href="{{ url('/about-us') }}"><i class="fa fa-angle-right"></i> About Us</a></li>
                                <li><a href="{{ url('/features') }}"><i class="fa fa-angle-right"></i> Features</a></li>
                                <li><a href="{{ url('/pricing') }}"><i class="fa fa-angle-right"></i> Pricing</a></li>
                                <li><a href="{{ url('/privacy-policy') }}"><i class="fa fa-angle-right"></i> Privacy Policy</a></li>
                                <li><a href="{{ url('/terms-conditions') }}"><i class="fa fa-angle-right"></i> Tearms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="topfoter">
                        <h2>Connect With us</h2>
                        <p><i class="fa fa-map-marker"></i><a class="hovercolor">{{ $setting->contact_address }}</a></p>
                        <p><i class="fa fa-phone"></i><a class="hovercolor" href="tel:{{ $setting->contact_phone }}">{{ $setting->contact_phone }}</a></p>
                        <p><i class="fa fa-envelope"></i><a class="hovercolor" href="mailto:{{ $setting->contact_email }}">{{ $setting->contact_email }}</a></p>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!----------Footer-End------------------------------>
    <script>
        $('.CreativeSlider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>
    <script>
        $('.Ugc_Slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    </script>
    <script>
        $('.tab-link').click(function () {

            var tabID = $(this).attr('data-tab');

            $(this).addClass('active').siblings().removeClass('active');

            $('#tab-' + tabID).addClass('active').siblings().removeClass('active');
        });
    </script>
    
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
      
        $("#frmEnq .btn_submit").click(function(e){
            e.preventDefault();
         
            var data = {
                name:$("#name").val(), 
                phone:$("#phone").val(), 
                email:$("#email").val(), 
                location:$("#location").val()
            };
                     
            $.ajax({
                type:'POST',
                url:"{{ route('contacts.store') }}",
                data:data,
                success: function(data) {
                    resetErrorMsg();
                    printSuccessMsg(data);
                },
                error: function(err) {
                    resetErrorMsg();
                    printErrorMsg(err);
                }
            });
        });

        function printSuccessMsg (data) {
            $(".print-success-msg").css('display', 'block');
            $(".print-success-msg").html('');
            $(".print-success-msg").html(data.success).delay(5000).fadeOut();
            document.getElementById("frmEnq").reset();
        }
      
        function printErrorMsg (err) {
            if (err.status == 422) {
                // display errors on each form field
                $.each(err.responseJSON.errors, function (i, error) {
                    var el = $(document).find('#frmEnq [name="'+i+'"]');
                    el.after($('<span class="form-text text-danger" id="error-'+i+'">'+error[0]+'</span>'));
                });
            }
        }

        function resetErrorMsg() {
            $("form#frmEnq input, form#frmEnq select").each(function() {
                var id = $(this).attr("id");
                if(id !== undefined) {
                    $('#' +id).next("span").remove();
                }
            });
        }
    </script>
</body>
</html>
