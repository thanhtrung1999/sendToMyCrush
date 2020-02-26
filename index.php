<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>My Crush</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script|Indie+Flower|Lovers+Quarrel|Nanum+Pen+Script|Rouge+Script|Yanone+Kaffeesatz|Satisfy&display=swap" rel="stylesheet"/>
	<link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="./css/animate.css"/>
	<link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="./css/bootstrap.min.css"/>
	<link rel="stylesheet" href="./css/style.css" />
</head>
<body>
	<div class="logo-header" data-anijs="if: mouseover, do: flash animated, after: repeat">
		<div class="logo-header-content row d-flex w-100 pl-4 pr-4 mb-4">
			<div class="logo-brand d-none d-md-block col-md-4 h-100">
				<img src="./images/logo1.png" alt="I Love You" title="I Love You">
			</div>
			<div class="logo-content col-md-4 col-6 d-md-flex justify-content-md-center h-100">
				<img src="https://media.giphy.com/media/yc2pHdAoxVOrJ2m5Ha/giphy.gif" title="I Love You lần 2 :3">
			</div>
			<div class="logo-end col-md-4 col-6 d-md-block">
				<img src="./images/heart2.jpg" title="Heart" class="float-right" />
			</div>
		</div>
	</div>
	<hr/>
	<div class="container-fluid">
		<header id="header" class="container wow rollIn" data-wow-duration="2s" data-wow-delay="0.5s">
			<h1 class="m-auto text-center" data-anijs="if: mouseover, do: rubberBand animated" style="font-family: 'Dancing Script', cursive; padding: 0 10%;">
				Dưới đây là câu chuyện của 1 thanh niên đến nay là đã cô đơn 21 năm <i class="em em-grin" aria-role="presentation" aria-label="GRINNING FACE WITH SMILING EYES"></i> muốn gửi tới cậu, CỜ RÚT của tớ!!! Cũng là lời tỏ tình của tớ luôn nha, nhớ xem hết đó!!
				<i class="em em-heart_eyes" aria-role="presentation" aria-label="SMILING FACE WITH HEART-SHAPED EYES"></i>
			</h1>
			<div class="line"></div>
			<div class="avt d-flex justify-content-center m-auto wow zoomInDown" data-wow-duration="2s" data-wow-delay="1s">
				<img src="./images/avt-doi.jpg" alt="" class="d-block w-25" data-anijs="if: mouseover, do: wobble animated" style="border-radius: 10px;box-shadow: 45px 45px 78px -12px rgba(247,244,247,0.9);"/>
			</div>
			<div class="celebrate text-center pt-2 wow lightSpeedIn" data-wow-duration="1.4s" data-wow-delay="2s" style="color: #e63434; box-shadow: 45px 45px 78px -12px rgba(247,244,247,0.9);">
				<i class="fa fa-heart"></i>
				<span class="text-center" style="font-family: 'Courgette', cursive;">14/2/2020</span>
				<i class="fa fa-heart"></i>
			</div>
		</header><!-- /header -->
		<hr/>
		<main class="lovestory-main">
			<div class="lovestory-head mt-md-0 mb-md-0 mt-5 mb-5" data-anijs="if: scroll, on: window, do: swing animated, before: $scrollReveal repeat">
				<div id="carouselExampleIndicators" class="carousel slide w-75 m-auto p-0 pt-md-5" data-ride="carousel" data-anijs="if: click, do: pulse animated">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
					  </ol>
					  <div class="carousel-inner w-75 m-auto">
					    <div class="carousel-item active">
					      <img src="./images/p9.jpg" class="d-block w-50 m-auto" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="./images/p1.jpg" class="d-block w-50 m-auto" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="./images/p8.jpg" class="d-block w-50 m-auto" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="./images/p6.jpg" class="d-block w-50 m-auto" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="./images/p20.jpg" class="d-block w-50 m-auto" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="./images/p19.jpg" class="d-block w-50 m-auto" alt="...">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="" aria-hidden="true">
					    	<i class="fa fa-chevron-left"></i>
					    </span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="" aria-hidden="true">
					    	<i class="fa fa-chevron-right"></i>
					    </span>
					  </a>
				</div>
			</div>
			<div class="line"></div>
			<div class="lovestory-content row text-capitalize m-1 p-md-5 p-3 pt-4 pt-md-0" data-anijs="if: click, do: pulse animated, to: section" style="font-family:'Yanone Kaffeesatz', cursive;">
				<section class="txt w-100 m-auto p-4" data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: $scrollReveal repeat">
					<div class="content w-100">
						<p>Nếu tớ nhớ không nhầm thì tớ biết cậu từ tháng 4 hay tháng 5 năm ngoái, đó là lần đầu gặp cậu do học chung Quản trị mạng. Tuy lần đầu gặp nhưng không biết vì sao tớ đã say nắng cậu luôn rồi <i class="em em-grin" aria-role="presentation" aria-label="GRINNING FACE WITH SMILING EYES"></i>.</p>
					</div>
				</section>
				<section class="txt w-100 m-auto p-4" data-anijs="if: scroll, on: window, do: fadeInRight animated, before: $scrollReveal repeat">
					<div class="content w-100">
						<p>Mỗi lúc học cùng cậu, thi thoảng tớ lại liếc ngắm cậu xíu <i class="em em-stuck_out_tongue_closed_eyes" aria-role="presentation" aria-label="FACE WITH STUCK-OUT TONGUE AND TIGHTLY-CLOSED EYES"></i> Đơn giản cậu hợp gu tớ thôi và, thấy cậu xinh, dần dần thích cậu rồi tìm cách làm quen <i class="em em-face_with_rolling_eyes" aria-role="presentation" aria-label="FACE WITH ROLLING EYES"></i>. Cuối cùng cũng quen được cậu trên danh nghĩa là "bạn".</p>
					</div>
				</section>
				<section class="txt w-100 m-auto p-4" data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: $scrollReveal repeat">
					<div class="content w-100">
						<p>NHẠT có lẽ là năng lực bẩm sinh của tớ mất rồi <i class="em em-neutral_face" aria-role="presentation" aria-label="NEUTRAL FACE"></i>, ib với cậu mà chả biết nói gì, ngoài bàn chuyện học hành và thi cử(mặc dù tớ có giỏi giang gì đâu :v). Chẳng biết gợi chuyện gì để nói với cậu cả :<.</p>
					</div>
				</section>
				<section class="txt w-100 m-auto p-4" data-anijs="if: scroll, on: window, do: fadeInRight animated, before: $scrollReveal repeat">
					<div class="content w-100">
						<p>Ib cũng kha khá thì 1 hôm rủ cậu đi ăn mì cay, lúc cậu đồng ý thì thôi khỏi phải nói cũng biết cảm xúc tớ ntn rồi :v Đến hôm đi ăn thì chắc 80% là cậu nói chuyện chứ tớ hầu như ngồi nghe <i class="em em-persevere" aria-role="presentation" aria-label="PERSEVERING FACE"></i>, có biết nói gì đâu <i class="em em-no_mouth" aria-role="presentation" aria-label="FACE WITHOUT MOUTH"></i>. Lần đầu face-to-face với cậu, ôi cảm giác lâng lâng thế nào ý, nụ cười + đôi mắt của cậu như đưa tớ vào cơn mê <i class="em em-zany_face" aria-role="presentation" aria-label="GRINNING FACE WITH ONE LARGE AND ONE SMALL EYE"></i>, tiếng sét đánh vào tim tớ là đây chứ đâu <i class="em em-smiling_face_with_3_hearts" aria-role="presentation" aria-label="SMILING FACE WITH SMILING EYES AND THREE HEARTS"></i></p>
					</div>
				</section>
				<section class="txt w-100 m-auto p-4" data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: $scrollReveal repeat">
					<div class="content w-100">
						<p>Nghĩ đến cậu thì thề 100% là ngày nào chả nghĩ, thi thoảng cười mỉm 1 mình như thằng điên <i class="em em-face_with_rolling_eyes" aria-role="presentation" aria-label="FACE WITH ROLLING EYES"></i>. Nhưng dần dần tớ ít ib hơn, 1 phần do để cậu đỡ nghi ngờ tớ crush cậu, 1 phần là có biết gợi chuyện gì để nói đâu.<i class="em em-zipper_mouth_face" aria-role="presentation" aria-label="ZIPPER-MOUTH FACE"></i></p>
					</div>
				</section>
				<section class="txt w-100 m-auto p-4" data-anijs="if: scroll, on: window, do: fadeInRight animated, before: $scrollReveal repeat">
					<div class="content w-100">
						<p>Biết mình nhạt, biết tớ vs cậu cũng chỉ quen biết xã giao; đôi lúc buồn, buồn vì cô đơn, lại nghĩ đến cậu, tưởng tượng lúc tỏ tình thành công, lại cười :3. Tối đến thi thoảng cũng hay mơ tới cậu, sáng dậy biết đó là mơ thì lại hơi rơm rớm vì tiếc, nghĩ "S nó lại đ phải sự thật? <i class="em em-pleading_face" aria-role="presentation" aria-label="FACE WITH PLEADING EYES"></i>"</p>
					</div>
				</section>
				<section class="txt w-100 m-auto p-4" data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: $scrollReveal repeat">
					<div class="content w-100">
						<p>Nhiều lúc ib cho cậu, cậu chỉ seen không thôi à, cậu bảo là cậu hay lười seen tin nhắn lắm. Nhưng nhiều lần thì tớ biết là quá toang rồi :< Mỗi lần như vậy tớ buồn kinh khủng cậu có biết không <i class="em em-sob" aria-role="presentation" aria-label="LOUDLY CRYING FACE"></i>.</p>
					</div>
				</section>
				<section class="txt w-100 m-auto p-4" data-anijs="if: scroll, on: window, do: fadeInRight animated, before: $scrollReveal repeat">
					<div class="content w-100">
						<p>Cách đây hai tuần ib với nhau thì tớ biết cậu bị ốm, mà lại đúng giai đoạn đang dịch corona nữa chứ. Lúc tớ biết tớ phải gọi ngay cho cô tớ hỏi xem huyết áp cao thì nên uống thuốc gì. Tớ thì hay mất bình tĩnh, ib hỏi thăm xem tình hình cậu ntn, nhưng cậu không seen tin, có lẽ cậu mệt quá nên tớ không ib nữa, sợ làm phiền cậu.</p>
					</div>
				</section>
			</div>
			<div class="line"></div>
			<div class="lovestory-end text-center p-4" style="font-family:'Dancing Script', cursive;">
				<div class="content w-75 p-4 m-auto" data-anijs="if: scroll, on: window, do: zoomInDown animated, before: $scrollReveal repeat">
					<p>Sau 1 tuần tớ ib hỏi thăm lại cậu, nhưng cậu vẫn không seen :<<< Đến đây tớ biết toang dần đều rồi, cậu đang dần né tránh tớ <i class="em em-sob" aria-role="presentation" aria-label="LOUDLY CRYING FACE"></i></p>
					<p>Nhưng dù gì đi nữa, tớ vẫn thích cậu, hàng ngày lên fb cậu ngắm cậu(thật nha chứ không phải tớ sến súa nhé <i class="em em-face_with_rolling_eyes" aria-role="presentation" aria-label="FACE WITH ROLLING EYES"></i>). Nói với cậu, dù kết quả ra sao, tớ cũng thấy thoải mái phần nào. Cậu đã cho tớ 1 kỷ niệm của tuổi thanh xuân, khó có thể quên.</p>
					<p>Tớ định sẽ gặp trực tiếp cậu để tỏ tình, nhưng tớ biết chắc chắn giờ để rủ cậu đi là điều không thể, nên tớ mới tỏ tình với cậu đậm chất sinh viên IT :3 Hihiii!!</p>
					<p>Cuối cùng, tớ xin chốt lại</p>
					<h1><i class="em em-heartpulse" aria-role="presentation" aria-label="GROWING HEART"></i> TỚ THÍCH CẬU <i class="em em-heartpulse" aria-role="presentation" aria-label="GROWING HEART"></i></h1>
				</div>
			</div>
			<div class="line"></div>
			<div class="lovestory-footer p-4" data-anijs="if: scroll, on: window, do: fadeInDown animated, before: $scrollReveal repeat">
				<!-- 1,6,8,9,19,20 đã sử dụng -->
				<p style="font-family: 'Courgette', cursive; text-align: center;">Cờ lích vào ảnh để xem cho rõ nha :3</p>
				<div class="list-image pl-3 p-md-0" style="padding-top: 40px!important;">
					<ul class="d-block d-md-flex">
						<li id="crush-1">
							<a data-trigger="gallery" href="./images/p16.jpg" title=""><img src="./images/p16.jpg" alt=""></a>
						</li>
						<li id="crush-2">
							<a data-trigger="gallery" href="./images/p2.jpg" title=""><img src="./images/p2.jpg" alt=""></a>
						</li>
						<li id="crush-3">
							<a data-trigger="gallery" href="./images/p13.jpg" title=""><img src="./images/p13.jpg" alt=""></a>
						</li>
						<li id="crush-4">
							<a data-trigger="gallery" href="./images/p7.jpg" title=""><img src="./images/p7.jpg" alt=""></a>
						</li>
						<li id="crush-5">
							<a data-trigger="gallery" href="./images/p4.jpg" title=""><img src="./images/p4.jpg" alt=""></a>
						</li>
						<li id="crush-6">
							<a data-trigger="gallery" href="./images/p17.jpg" title=""><img src="./images/p17.jpg" alt=""></a>
						</li>
						<li id="crush-7">
							<a data-trigger="gallery" href="./images/p18.jpg" title=""><img src="./images/p18.jpg" alt=""></a>
						</li>
						<li id="crush-8">
							<a data-trigger="gallery" href="./images/p21.jpg" title=""><img src="./images/p21.jpg" alt=""></a>
						</li>
						<li id="crush-9">
							<a data-trigger="gallery" href="./images/p15.jpg" title=""><img src="./images/p15.jpg" alt=""></a>
						</li>
						<li id="crush-10">
							<a data-trigger="gallery" href="./images/p28.jpg" title=""><img src="./images/p28.jpg" alt=""></a>
						</li>
						<li id="crush-11">
							<a data-trigger="gallery" href="./images/p29.jpg" title=""><img src="./images/p29.jpg" alt=""></a>
						</li>
						<li id="crush-12">
							<a data-trigger="gallery" href="./images/p30.jpg" title=""><img src="./images/p30.jpg" alt=""></a>
						</li>
						<li id="crush-13">
							<a data-trigger="gallery" href="./images/p14.jpg" title=""><img src="./images/p14.jpg" alt=""></a>
						</li>
						<li id="crush-14">
							<a data-trigger="gallery" href="./images/p22.jpg" title=""><img src="./images/p22.jpg" alt=""></a>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<hr/>
		<span class="back-to-top text-center fixed-bottom m-5">
			<i class="fa fa-chevron-up" style=""></i>
		</span>
		<footer>
		   <p class="text-center m-0" style="font-family: 'Indie Flower', cursive; font-size: 0.9rem; color: black;">Website lấy ý tưởng từ 
			<a href="https://www.youtube.com/watch?v=CUpjKNZ87VE" target="_blank">video</a>
			<br/>
			Created by Student of Academy of Cryptography Technique
			<br/>
			From 8/2 to 10/2
			</p>
		</footer>
	</div>
	<iframe src="https://www.nhaccuatui.com/lh/background/78bJ2AzF9xIK" width="1" height="1" frameborder="0" allowfullscreen allow="autoplay"></iframe>
	<script type="text/javascript" src="./js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="./js/popper.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/wow.min.js"></script>
	<script type="text/javascript" src="./js/anijs-min.js"></script>
    <script type="text/javascript" src="./js/anijs-helper-scrollreveal-min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="./js/flu.js" type="text/javascript"></script>
	<script type="text/javascript" src="./js/script.js"></script>
</body>
</html>