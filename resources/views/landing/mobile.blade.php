<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Hachinet Mobile Application Development</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="Mobile Application,Application Development, mobile, app, landing, ios, android, responsive">

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('landing/mobile/css/bootstrap.min.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('landing/mobile/css/themify-icons.css') }}">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{ asset('landing/mobile/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('web/css/font-awesome.min.css') }}">
    <!-- Main css -->
    <link href="{{ asset('landing/mobile/css/style.css') }}" rel="stylesheet">
    <style>
    .logo_h img {
        height: 50px;
    }
    </style>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- Nav Menu -->

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand logo_h"  href="{{ url('home') }}"><img src="{{ url('/upload/setting') }}/{{ $settings->logo}}" alt="hachinet jsc"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#features">FEATURES</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#gallery">GALLERY</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#pricing">PRICING</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#contact">CONTACT</a> </li>
                                <li class="nav-item"><a href="{{asset('Profile_Hachinet.pdf')}}" target="_blank" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Download PROFILE</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1>モバイル開発 , アプリ開発</h1>
            <p class="tagline">お客様の業務内容を理解する上で、企画・発案～設計・開発～運用・マーケット申請・保守・管理といった一連のアプリ開発を提供いたします。</p>
        </div>
        <div class="img-holder mt-3"><img src="images/iphonex.png" alt="phone" class="img-fluid"></div>
    </header>

    <!--<div class="client-logos my-5">
        <div class="container text-center">
            <img src="{{ asset('landing/mobile/images/client-logos.png') }}" alt="client logos" class="img-fluid">
        </div>
    </div> -->

    <div class="section light-bg" id="features">


        <div class="container">

            <div class="section-title">
                <small>Hachinet Application Development</small>
                <h3>このようなお悩みはございませんか？</h3>
            </div>


            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Simple</h4>
                                    <p class="card-text">操作性が良く、仕様変更にも柔軟に対応できるモバイルアプリを作りたい。 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-settings gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Customize</h4>
                                    <p class="card-text">開発コストを抑えて、開発効率を追求したい</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-lock gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Secure</h4>
                                    <p class="card-text">国内で優秀なスマホアプリ開発エンジニアが不足している。 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
    <!-- // end .section -->
    <div class="section">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
                    <h2>スマホアプリ開発における強み</h2>
                    <p class="mb-4">iOS、Androidのネーティブ アプリ開発からReactNativeやIonic、Cordovaなどのハイブリッドアプリ開発までの長年経験を活かして、お客様のニーズに最も適した手段を選択し、快適な動作と保守管理性の高い理想的な業務アプリケーションを実現いたします。お客様の業務内容を理解する上で、企画・発案～設計・開発～運用・マーケット申請・保守・管理といった一連のアプリ開発を提供いたします。</p>
                </div>
            </div>
            <div class="perspective-phone">
                <img src="images/perspective.png" alt="mobile application outsource" class="img-fluid">
            </div>
        </div>

    </div>
    <!-- // end .section -->


    <div class="section light-bg">
        <div class="container">
            <div class="section-title">
                <small>開発実績</small>
                <h3>サービスに関するご相談やご質問など、</h3><h3>こちらからお問い合わせください。</h3>
            </div>

            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#communication">Chúng tôi có</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#schedule">Các bạn sẽ nhận được</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages">Công nghệ phát triển</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#livechat">Ứng dụng đã phát triển</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="communication">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>

                            <h2>Chúng tôi có</h2>
                            <ul>
                            	<li>Phòng lập trình di động với nhiều thành viên có nhiều kinh nghiệm trong lĩnh vực phát triển ứng dụng mobile.</li>
                            	<li>Tư vấn và Phát triển ứng dụng theo yêu cầu, thiết kế.</li>
                            	<li>Phát triển ứng dụng mobile theo quy chuẩn bảo mật tuyệt đối.</li>
                            	<li>Xây dựng ứng dụng mobile chạy trên mọi nền tảng, android, ios.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="schedule">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>Các bạn sẽ nhận được:</h2>
                            <ul>
                            	<li>Sản phẩm bạn mong muốn</li>
                            	<li>Phát triển ứng dụng của bạn theo quy trình tiêu chuẩn quốc tế từ lập kế hoạch cho tới lập trình và kiểm thử, cũng như viết tài liệu.</li>
                            	<li>Chế độ bảo hành bảo trì theo yêu cầu từ khách hàng.</li>
                            	<li>Xây dựng sản phẩm mẫu demo cho khách hàng trước khi bắt đầu phát triển.</li>
                            	<li>Hỗ trợ deploy và đăng lên App Store, Google Play,…</li>
                            </ul>
                        </div>
                        <img src="images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    </div>
                </div>
                <div class="tab-pane fade" id="messages">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>
                            <h2>Công nghệ phát triển</h2>
                            <ul>
                            	<li>Android</li>
                            	<li>IOS</li>
                            	<li>Cross Platform: Xamarin, Titanium, Phonegap, Meteor.</li>
                            	<li>Unity</li>
                            	<li>Cocos2dx,…</li>
                            	<li>Maps, GPS, sensor, socket,…</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="livechat">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>Ứng dụng đã phát triển</h2>
                            <ul>
                            <li>Chăm sóc sức khoẻ</li>
                            <li>Tuyển dụng , tìm việc làm</li>
                            <li>Game mobile 2D , 3D</li>
                            <li>Ứng dụng nội bộ cho doanh nghiệp</li>
                            <li>Du lịch</li>
                            </ul>
                        </div>
                        <img src="images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- // end .section -->

    <div class="section">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/dualphone.png" alt="dual phone" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <div class="box-icon"><span class="ti-rocket gradient-fill ti-3x"></span></div>
                        <h2>Phát triển ứng dụng của bạn ngay bây giờ</h2>
                        <p class="mb-4">Nếu bạn đang mong muốn tìm kiếm một đối tác phát triển Application lâu dài , đừng ngần ngại hãy liên hệ cho chúng tôi</p>
                        <a href="#" class="btn btn-primary">Yêu cầu báo giá</a></div>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->


    <div class="section light-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <ul class="list-unstyled ui-steps">
                        <li class="media">
                            <div class="circle-icon mr-4">1</div>
                            <div class="media-body">
                                <h5>Làm rõ yêu cầu</h5>
                                <p>Đầu tiên bạn hãy gửi mô tả của ứng dụng mà bạn muốn thực hiện , chúng tôi sẽ gửi báo giá lại cho phía bạn .</p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <div class="circle-icon mr-4">2</div>
                            <div class="media-body">
                                <h5>Lên kế hoạch thực hiện</h5>
                                <p>Sau khi đã chốt hợp đồng với phía khách hàng , Hachinet sẽ gửi kế hoạch thực thi để phù hợp nhất với mong muốn của bạn</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-icon mr-4">3</div>
                            <div class="media-body">
                                <h5>Thực hiện</h5>
                                <p>Với đầy đủ quy trình sau khi phát triển xong phía chúng tôi sẽ phát triển ứng dụng di động của bạn và bàn giao đúng thời hạn đã thống nhất .</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="images/iphonex.png" alt="iphone" class="img-fluid">
                </div>

            </div>

        </div>

    </div>
    <!-- // end .section -->


    <div class="section light-bg" id="gallery">
        <div class="container">
            <div class="section-title">
                <small>GALLERY</small>
                <h3>Một số hình ảnh sản phẩm</h3>
            </div>

            <div class="img-gallery owl-carousel owl-theme">
                <img src="images/screen1.jpg" alt="image">
                <img src="images/screen2.jpg" alt="image">
                <img src="images/screen3.jpg" alt="image">
                <img src="images/screen1.jpg" alt="image">
            </div>

        </div>

    </div>
    <!-- // end .section -->





    <div class="section" id="pricing">
        <div class="container">
            <div class="section-title">
                <small>Đơn giá</small>
                <h3>Chi phí phát triển tham khảo</h3>
            </div>

            <div class="card-deck">
                <div class="card pricing">
                    <div class="card-head">
                        <small class="text-primary">Project Base</small>
                        <span class="price">25万<sub>/MM</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">Dự án project base</div>
                        <div class="list-group-item">Dự án 1 người làm</div>
                        <div class="list-group-item">Hợp đồng dưới 3 tháng</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block">お問合わせ</a>
                    </div>
                </div>
                <div class="card pricing popular">
                    <div class="card-head">
                        <small class="text-primary">LABO PROJECT</small>
                        <span class="price">240万<sub>/Năm</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">Hợp đồng 6 tháng trở lên</div>
                        <div class="list-group-item">Hợp đồng labo dài hạn</div>
                        <div class="list-group-item">Team từ 2 người trở lên</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block">お問合わせ</a>
                    </div>
                </div>
                <div class="card pricing ">
                    <div class="card-head">
                        <small class="text-primary">LABO PROJECT</small>
                        <span class="price">22万<sub>/MM</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">Từ 3 người trở lên</div>
                        <div class="list-group-item">Hợp đồng LABO</div>
                        <div class="list-group-item">Hợp đồng từ 3 tháng trở lên</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block">お問合わせ</a>
                    </div>
                </div>
                
            </div>
            <!-- // end .pricing -->


        </div>

    </div>
    <!-- // end .section -->


    <div class="section pt-0">
        <div class="container">
            <div class="section-title">
                <small>FAQ</small>
                <h3>Frequently Asked Questions</h3>
            </div>

            <div class="row pt-4">
                <div class="col-md-6">
                    <h4 class="mb-3">Chế độ bảo hành kéo dài bao nhiêu lâu?</h4>
                    <p class="light-font mb-5">Dịch vụ phát triển Mobile Application tại Hachinet được bảo hành suốt đời.Nếu có lỗi phát sinh sau khi đã ra thị trường.Bất kỳ thời điểm nào chúng tôi đều sửa chữa lỗi một cách miễn phí</p>
                    <h4 class="mb-3">Yêu cầu sản phẩm được bảo mật như thế nào?</h4>
                    <p class="light-font mb-5">Chúng tôi ký cam kết bảo mật với khách hàng ngay tại thời điểm bắt đầu dự án.Tiến hành cam kết không public thông tin sản phẩm ra ngoài.</p>

                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">Nếu quá trình phát triển chậm trễ xử lý như thế nào?</h4>
                    <p class="light-font mb-5">Theo hợp đồng nếu quá trình phát triển bị chậm trễ do phía Hachinet làm chậm trễ , chúng tôi sẽ tiến hành đền bù thiệt hại cho khách hàng 8 JPY/ mỗi phút chậm.</p>
                    <h4 class="mb-3">Thủ tục thanh toán như thế nào?</h4>
                    <p class="light-font mb-5">Phía chúng tôi sẽ gửi invoice cho phía khách hàng để thanh toán hàng tháng. </p>

                </div>
            </div>
        </div>

    </div>
    <!-- // end .section -->
    @include('layouts.footer')

    <!-- jQuery and Bootstrap -->
    <script src="{{ asset('landing/mobile/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('landing/mobile/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('landing/mobile/js/owl.carousel.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('landing/mobile/js/script.js') }}"></script>

</body>

</html>
