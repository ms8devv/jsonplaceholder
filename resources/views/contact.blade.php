<!doctype html>
<html lang="en">

<head>
	<title>Contact Form 10</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{url('css/bootstrap.css')}}">


	<link rel="stylesheet" href="{{url('css/style.css')}}">

</head>

<body>

	<section class="ftco-section img bg-hero" style="background-image: url(img/bg_1.jpg);">

	<!-- NavBar -->
	<nav class="navbar navbar-expand-lg navbar-dark mx-md-5">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">ms8dev</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				<a class="nav-link " aria-current="page" href="{{route('index')}}">صفحه اصلی</a>
				</li>
				<li class="nav-item">
				<a class="nav-link active" href="{{route('contact')}}">ارتباط با ما</a>
				</li>
			
			</ul>
			<a class="navbar-brand" href="#">JSONplaceholder</a>
			</div>
			
		</div>
	</nav>
		<div class="container mt-5">

			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">لطفا برای بهتر شدن کیفیت سایت ،نظرات ، پیشنهادات و انتقادات خود را با من درمیان بگذارید.</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-11">
					<div class="wrapper">
						<div class="row no-gutters justify-content-between">
							<div class="col-lg-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5">
									<h3 class="mb-4">راه های ارتباطی</h3>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-paper-plane"></span>
										</div>
										<div class="text pl-4">
											<p><span>ایمیل:</span> <a
													href="mailto:info@yoursite.com">ms8dev.dark@gmail.com</a></p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-instagram"></span>
										</div>
										<div class="text pl-4">
											<p><span>اینستاگرام:</span> <a href="https://www.instagram.com/ms8dev">@ms8dev</a>
											</p>
										</div>
									</div>
									<div class="dbox w-100 d-flex align-items-start">
										<div class="icon d-flex align-items-center justify-content-center">
											<span class="fa fa-telegram"></span>
										</div>
										<div class="text pl-4">
											<p><span>تلگرام:</span> <a href="https://t.me/ms8dev">@ms8dev</a></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4 text-dark text-center fs-4">‏با ما در تماس باشید‏</h3>
									<div id="form-message-warning" class="mb-4"></div>
									<div id="form-message-success" class="mb-4">
										Your message was sent, thank you!
									</div>
									@if (session()->exists('result'))
										@if (session()->get('result') == "success")
											<div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
												<strong>پیام شما با موفقیت ارسال شد. باتشکر</strong>
												<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
											</div>
										@else
											<div class="alert alert-danger alert-dismissible fade show" role="alert" id="alert">
												<strong>در ارسال پیام خطایی وجود دارد!</strong>
												<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
											</div>
										@endif
	
									@endif


									<form method="POST" id="contactForm" name="contactForm"  action="{{route('contact.message')}}">
										@csrf
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name"
														placeholder="نام ">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group" >
													<input type="email" class="form-control  text-start" name="email" id="email"
														placeholder="ایمیل">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject"
														placeholder="موضوع">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30"
														rows="5" placeholder="متن پیام"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group text-center ">
													<input type="submit" value="ارسال پیام" class="btn btn-primary px-4"> 
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{url('js/jquery.min.js')}}"></script>
	<script src="{{url('js/popper.js')}}"></script>
	<script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{url('js/jquery.validate.min.js')}}"></script>
	<script src="{{url('js/main.js')}}"></script>

</body>

</html>