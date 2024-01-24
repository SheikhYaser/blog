@extends('test.main')

@section('title' , 'Home')

@section('content')
<!-- Start Hero Section -->
<div class="hero"> <div class="container"> <div class="row justify-content-between"> <div class="col-lg-5"> <div
	class="intro-excerpt"> <h1>Bosh Saxifa <span clsas="d-block"></span></h1> <p class="mb-4">Donec vitae odio quis nisl
	dapibus malesuada.
	Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
	<p><a href="" class="btn btn-secondary me-2">Sotib Olish</a><a href="#"
	class="btn btn-white-outline">Saqlalsh</a></p>
	</div> </div> <div class="col-lg-7"> <div class="hero-img-wrap"> <img src="images/couch.png" class="img-fluid">
		</div> </div>
</div>
</div>
</div> <!-- End Hero Section --> <!-- Start Blog Section --> <div class="blog-section"> <div class="container">
<div class="row mb-5">
	<div class="col-md-6">
		<h2 class="section-title">Recent Blog</h2>
	</div>
	<div class="col-md-6 text-start text-md-end">
		<a href="#" class="more">View All Posts</a>
	</div>
</div>

<div class="row">
	@foreach ($models as $model)

	<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
		<div class="post-entry">
			<a href="#" class="post-thumbnail"><img src="images/post-1.jpg" alt="Image" class="img-fluid"></a>
			<div class="post-content-entry">
				<h3><a href="#"><br> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
							class="bi bi-person-fill" viewBox="0 0 16 16">
							<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
						</svg> - {{ $model->title }}</a></h3>
				<div class="meta">
					<span><a href="#"><br> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
								fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
								<path
									d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
							</svg> - {{ $model->description }}</a></span> <span>
						<a href="#"> <br> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
								fill="currentColor" class="bi bi-calendar2-week" viewBox="0 0 16 16">
								<path
									d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
								<path
									d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
							</svg> - {{ $model->created_at->format('d-M-Y,H:i') }}</a>
					</span>
				</div>
			</div>
		</div>
	</div>

	@endforeach

</div>
</div>
</div>
<!-- End Blog Section -->
@endsection
