<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Asep Barbershop | Gallery</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/Logo_Asep.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>
	
	{{-- <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends--> --}}

    {{-- gallery --}}
    <main class="gallery">
      <div class="gallery-track">
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model1.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model2.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model3.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model4.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model5.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model6.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model7.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model8.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model9.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model10.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model11.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model12.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model13.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model14.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model15.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model16.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model17.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model18.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model19.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model20.jpg" />
          </div>
        </div>
        <div class="card">
          <div class="card-image-wrapper">
            <img src="assets/img/model21.jpg" />
          </div>
        </div>
      </div>
    </main>

    <script>
      const gallery = document.querySelector(".gallery");
      const track = document.querySelector(".gallery-track");
      const cards = document.querySelectorAll(".card");
      const easing = 0.05;
      let startY = 0;
      let endY = 0;
      let raf;

      const lerp = (start, end, t) => start * (1 - t) + end * t;

      function updateScroll() {
        startY = lerp(startY, endY, easing);
        gallery.style.height = `${track.clientHeight}px`;
        track.style.transform = `translateY(-${startY}px)`;
        activateParallax();
        raf = requestAnimationFrame(updateScroll);
        if (startY.toFixed(1) === window.scrollY.toFixed(1))
          cancelAnimationFrame(raf);
      }

      function startScroll() {
        endY = window.scrollY;
        cancelAnimationFrame(raf);
        raf = requestAnimationFrame(updateScroll);
      }

      function parallax(card) {
        const wrapper = card.querySelector(".card-image-wrapper");
        const diff = card.offsetHeight - wrapper.offsetHeight;
        const { top } = card.getBoundingClientRect();
        const progress = top / window.innerHeight;
        const yPos = diff * progress;
        wrapper.style.transform = `translateY(${yPos}px)`;
      }

      const activateParallax = () => cards.forEach(parallax);

      function init() {
        activateParallax();
        startScroll();
      }

      window.addEventListener("load", updateScroll, false);
      window.addEventListener("scroll", init, false);
      window.addEventListener("resize", updateScroll, false);
    </script>
</body>

</html>