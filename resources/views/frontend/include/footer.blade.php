<footer id="footer">
    <div class="container">
        <div class="footer-holder py-5">
            <div class="row">
                <div class="col-12 col-md-3 mb-3">
                    <div class="footer-logo mb-3">
                        <a href="javascript:void"><img src="{{asset('images/logo.png')}}" width="120" class="img-fluid"></a>
                    </div>
                    <p class="mb-3 w-75"> {!! get_setting('about_us_description',null,App::getLocale()) !!}</p>
                    <a class="btn btn-sm btn-learn rounded-0 mb-3" href="javascript:void">Learn More</a>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <strong class="title d-block mb-4">Footer Menulist-1</strong>
                    <ul class="m-0">
                        <li><a href="javascript:void">About Us</a></li>
                        <li><a href="javascript:void">FAQs</a></li>
                        <li><a href="javascript:void">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <strong class="title d-block mb-4">Footer Menulist-2</strong>
                    <ul class="m-0">
                        <li><a href="javascript:void">Login</a></li>
                        <li><a href="javascript:void">Register</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <div>
                        <strong class="title d-inline-block mb-3 border-bottom">Social Icons</strong>
                        @if ( get_setting('show_social_links') )
                        <ul class="list-unstyled m-0 p-0 d-flex align-items-center social-icons mb-4">
                            @if ( get_setting('facebook_link') !=  null )
                            <li><a href="{{ get_setting('facebook_link') }}" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            @endif
                            @if ( get_setting('linkedin_link') !=  null )
                            <li><a href="{{ get_setting('linkedin_link') }}" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            @endif
                            @if ( get_setting('youtube_link') !=  null )
                            <li><a href="{{ get_setting('youtube_link') }}" target="_blank" class="youtube"><i class="fa fa-youtube"></i></a></li>
                            @endif
                            @if ( get_setting('instagram_link') !=  null )
                            <li><a href="{{ get_setting('instagram_link') }}" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            @endif
                            @if (get_setting('pintrest_link') !=  null )
                            <li><a href="{{ get_setting('pintrest_link') }}" target="_blank" class="instagram"><i class="fa fa-pinterest-p"></i></a></li>
                            @endif
                            
                            <li><a href="javascript:void"><i class="fa fa-google"></i></a></li>
                        </ul>
                        <ul class="mb-0">
                            <li><span class="d-block opacity-30">{{ translate('Address') }}:</span>
                                <span class="d-block opacity-70">{{ get_setting('contact_address',null,App::getLocale()) }}</span></li>
                            <li> <span class="d-block opacity-30">{{translate('Phone')}}:</span>
                                <span class="d-block opacity-70">{{ get_setting('contact_phone') }}</span></li>
                            <li><span class="d-block opacity-30">{{translate('Email')}}:</span>
                                <span class="d-block opacity-70">
                                    <a href="mailto:{{ get_setting('contact_email') }}" class="text-reset">{{ get_setting('contact_email')  }}</a>
                                 </span></li>
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-4 d-flex justify-content-between">
            <span> {!! get_setting('frontend_copyright_text',null,App::getLocale()) !!}</span>
            <ul class="list-unstyled m-0 p-0 d-flex">
                <li class="me-3"><a class="text-white" href="{{route('terms')}}">Terms & Condition</a></li>
                <li><a class="text-white" href="{{route('privacypolicy')}}">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
</footer>
