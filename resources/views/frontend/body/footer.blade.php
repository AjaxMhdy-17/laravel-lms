<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mr-auto col-sm-6 col-md-6">
                <div class="widget footer-widget mb-5 mb-lg-0">
                    <h5 class="widget-title">{{config('global.app.WebSiteName')}}</h5>
                    <p class="mt-3">Veniam Sequi molestias aut necessitatibus optio magni at natus accusamus.Lorem
                        ipsum dolor sit amet, consectetur adipisicin gelit, sed do eiusmod tempor incididunt .</p>
                    <ul class="list-inline footer-socials">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"> <a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-sm-6 col-md-6">
                <div class="footer-widget mb-5 mb-lg-0">
                    <h5 class="widget-title">Company</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 col-md-6">
                <div class="footer-widget mb-5 mb-lg-0">
                    <h5 class="widget-title">Courses</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#">SEO Business</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Site Development</a></li>
                        <li><a href="#">Social Marketing</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="footer-widget footer-contact mb-5 mb-lg-0">
                    <h5 class="widget-title">Contact </h5>

                    <ul class="list-unstyled">
                        <li style="display: flex;"><i class="bi bi-headphone ml-1"></i>{{config('global.app.Phone')}}</li>
                        <li style="display: flex;"> <i class="bi bi-envelop"></i>
                            <div>{{config('global.app.Email')}}</div>
                        </li>
                        <li style="display: flex;"><i class="bi bi-location-pointer"></i>{{config('global.app.Address')}}</li>
                    </ul>

                    <form action="#" class="form-subscribe">
                        <input type="text" class="form-control" placeholder="Email Address">
                        <button><i class="fa fa-angle-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-btm">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="footer-logo">
                        {{config('global.app.WebSiteName')}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="copyright text-lg-center">
                        <p>2023 Demo  {{config('global.app.WebSiteName')}}. All Rights Reserved. <a href="#">Become Instructor</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Main jQuery -->
<script src="{{asset('assets/vendors/jquery/jquery.js')}}"></script>
<!-- Bootstrap 4.5 -->
<script src="{{asset('assets/vendors/bootstrap/bootstrap.js')}}"></script>
<!-- Counterup -->
<script src="{{asset('assets/vendors/counterup/waypoint.js')}}"></script>
<script src="{{asset('assets/vendors/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/vendors/jquery.isotope.js')}}"></script>
<script src="{{asset('assets/vendors/imagesloaded.html')}}"></script>
<!--  Owlk Carousel-->


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{asset('assets/vendors/owl/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>



@if (Session::has('message'))
<script>
    toastr.success("{{ Session::get('message') }}") ; 
</script>
@endif




</body>

</html>