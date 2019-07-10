<?php include('header.php'); ?>

<div class="s-intro">

	<div class="intro-slide">
		<div class="intro-slide__bg" style="background-image: url('/img/home/intro-bg.jpg')"></div>
		<div class="intro-slide__video">
			<video autoplay loop muted id="head_video">
				<source src="" type="video/mp4" id="source_mp4">
			</video>
		</div>
		<div class="intro-slide__content">
			<div class="intro-slide__title h1">AGS engineering</div>
			<div class="intro-slide__subtitle">Ижиниринговая компания полного цикла</div>
			<div class="intro-slide__text">Проектирование, производсто, поставка и&nbsp;ввод в&nbsp;эксплуатацию сложного технического оборудования.</div>
			<a href="#" class="btn btn--white intro-slide__btn fancy-modal" data-src="#modal-order">Заказать проект</a>
		</div>
	</div>

	<div class="intro-left">
		<div class="intro-left__content">
			<div class="intro-left__descr">Ижиниринговая компания полного цикла</div>
			<div class="intro-left__title">AGS Adsorption<br>Gas System</div>
		</div>
	</div>

	<div class="intro-bottom">
		<span class="intro-bottom__text">Надежный подрядчик EPC контрактов.</span>
	</div>

	<div class="intro-nav"></div>

</div>

<script>
	const aboutHeaderCheck = function() {
		const video = document.getElementById("head_video");
		const video_mp4 = document.getElementById("source_mp4");
		const mp4Src = "/img/video.mp4";
		if (window.matchMedia("(max-width: 1025px)").matches) {
			if (document.body.contains(video)) {
				video.parentNode.removeChild(video);
			}
		} else {
			if (document.body.contains(video) && video_mp4.getAttribute('src') === ""){
				video_mp4.setAttribute('src',mp4Src);
				video.load();
				video.play();
			}
		}
	};
	aboutHeaderCheck();
	window.addEventListener('resize',aboutHeaderCheck);
</script>


<?php include('footer.php'); ?>
