@extends('layouts.master')
@section('content')


<style>
    .header{
  background-image: url('images/apepng23size.png');
  /* animation: holoCard 15s ease infinite; */
  background-repeat: no-repeat;
  background-position: center;
      height: auto;
      width: auto;
  
    }


    /* FAQ box */
.question-title h3{
    font-size: 24px;
    background-color: rgba(0, 0, 0, 0.6);
    color: #fff;
    padding: 15px;
    margin: 0;
    cursor: pointer;
    font-family: 'Oswald', sans-serif;
    letter-spacing: 2px;
    position: relative;
}

.question-title h3:after{
    content: '+';
    position: absolute;
    right: 20px;
    font-size: 20px;
    top: 50%;
    transform: translateY(-50%);
}

.question-title.active h3:after{
    content: '-';
}

.content-main{
    background-color: #fff;
    display: none;
}
.content-inner{
    padding: 5%;
}
.content-inner p {
    font-size: 24px;
}
.content-main *{
    margin-top: 0;
    line-height: 1.5;
}
.question-title{
    border-bottom: 1px solid #fff;
}


    
.card {
  
  --color1: rgb(0, 231, 255);
  --color2: rgb(255, 0, 231);
  
  width: 320px;
  height: 446px;
  /* background-color: #FFD700; */
  background-image: url(https://images.pokemontcg.io/swsh3/19_hires.png);
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: center;
  border-radius: 5% / 3.5%;
  box-shadow: -13px -13px 13px -15px var(--color1), 
    13px 13px 13px -15px var(--color2), 
    0 0 4px 2px rgba(255,255,255,0.5),
    0 35px 25px -15px rgba(0, 0, 0, 0.3);
  position: relative;
  overflow: hidden;
  display: block;
  vertical-align: middle;
  margin: 20px 10px;
  animation: holoCard 15s ease infinite;
  transform-origin: center;
  z-index: 10;
  overflow: hidden;
  transform: translate3d(0,0,-1px); 
}

.card.charizard {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
}
.card.pika {
  --color1: #ffdf35;
  --color2: #65f0ff;
  background-image: url(https://images.pokemontcg.io/swshp/SWSH063_hires.png);
}
.card.mew {
  --color1: #eb8bff;
  --color2: #7eeefa;
  background-image: url('images/apepng23size.png');
}

.card > span {
  position: relative;
  top: 45%;
}

.card:before,
.card:after {
  content: "";
  opacity: .1;
  mix-blend-mode: screen;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  background-repeat: no-repeat;
}
.card:before {
  background-position: 50% 50%;
  background-size: 300% 300%;
  animation: holoGradient 15s ease infinite both;
  background-image: linear-gradient(
    115deg,
    transparent 0%,
    var(--color1) 30%,
    transparent 47.5%,
    transparent 52.5%,
    var(--color2) 70%,
    transparent 100%
  );
}
.card:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/UGGe8BBrkuAUM/giphy.gif");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}

.card.active {
  animation: none;
}

.card.active:before {
  opacity: 1;
  animation: none;
  transition: none;
  background-image: linear-gradient(
    115deg,
    transparent 30%,
    var(--color1) 48%,
    var(--color2) 53%,
    transparent 70%
  );
  filter: opacity(0.66);
  mix-blend-mode: screen;
}

.card.active:before,
.card.active:after {
  animation: none;  
}
.card.active:after {
  filter: brightness(2.5);
  mix-blend-mode: screen;
}

.demo .card:nth-of-type(1),
.demo .card:nth-of-type(2),
.demo .card:nth-of-type(3) {
  width: 124px;
  height: 170px;
  box-shadow: 0 0 1px 1px rgba(white,0.4), 0 25px 15px -10px rgba(0, 0, 0, 0.5);
  animation: none;
}

.demo .card:nth-of-type(1),
.demo .card:nth-of-type(2),
.demo .card:nth-of-type(3) {
  &:before, &:after {
    animation: none;
    opacity: 1;
  } 
}
.demo .card:nth-of-type(1) {
  &:before, &:after { display: none; }
}
.demo .card:nth-of-type(2) {
  background: none;
  &:before { display: none; }
}
.demo .card:nth-of-type(3) {
  background: none;
  &:before { background-position: center; }
  &:after { display: none; }
}

.operator {
  display: inline-block;
  vertical-align: middle;
  font-size: 45px;
}

@keyframes holoSparkle {
  0%, 5%, 100% { opacity: 0.2; background-position: 50% 50%; }
  33% { opacity: 1; background-position: 40% 40%; filter: brightness(2); }
  45% { opacity: 0.4; }
  66% { opacity: 1; background-position: 60% 60%; filter: brightness(2); }
}

@keyframes holoGradient {
  0%, 100% {
    opacity: 0.05;
    background-position: 50% 50%;
  }
  33% {
    background-position: 100% 100%;
    opacity: .66;
  }
  66% {
    background-position: 0% 0%;
    opacity: .66;
  }
}

@keyframes holoCard {
  0%, 100% {
    transform: rotateZ(0deg) rotateX(0deg) rotateY(0deg);
  }
  33% {
    transform: rotateZ(-10deg) rotateX(20deg) rotateY(-12deg);
  }
  66% {
    transform: rotateZ(10deg) rotateX(-20deg) rotateY(12deg);
  }
}

.telegramimage{
    height: 45px !important;
    width:  40px !important;
}

.twitterimage{
    height: 45px !important;
    width:  40px !important;
}

.demo,
.cards { 
  display: flex;
  align-items: center;
  justify-content: center;
  perspective: 2000px;
  position: relative;
  z-index: 1;
  transform: translate3d(0.1px, 0.1px, 0.1px )
}

.cards .card {
  &:nth-child(2) {
    &, &:before, &:after {
      animation-delay: 0.2s;
    }
  }
  &:nth-child(3) {
    &, &:before, &:after {
      animation-delay: 0.4s;
    }
  }
}


@media(max-width:430px){
   .header{
      margin-top: 43px;
  
    }
}
  
</style>

    <!-- Header -->
    <div class="header" >
        {{-- <div class="ocean">
            <div class="wave"></div>
            <div class="wave" ></div>
        </div> --}}
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    {{-- <h3 style="font-family: 'Creepster', cursive; text-align:Center; color:red; font-size:50px;">CountDown</h3> --}}

                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header -->


    <!-- Statement -->
    <div id="statement" class="basic-1" style="background: black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h3 style="font-family: 'Creepster', cursive;  color:red; font-size:50px;">Explore Your ($Based) Ape</h3>
                        <a href="https://t.me/basedapetoken" target="_blank"><img  class="telegramimage"  src="images/telegram.png"  alt=""></a>
                        <a href="https://twitter.com/basedapetoken" target="_blank"><img  class="twitterimage"  src="images/twitter.png"  alt=""></a>

                        {{-- <a href="https://logwork.com/countdown-phzj" class="countdown-timer" data-timezone="America/New_York" data-date="2021-06-11 21:22" style="color:white;">based</a> --}}
                        <img  src="images/apepng23size.png" style="animation: holoCard 1s ease infinite;" alt="alternative">
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of statement -->

    
    <!-- About -->
    <div id="about" class="basic-5" style="background: black;">
        <div class="container">
            <div class="row">
               <div class="col-lg-12">                     
                <video width="100%" height="100%" controls>
                  <source src="https://vouch.sfo2.digitaloceanspaces.com/home/forge/voucheryhub.com/storage/app/public/Coupon/couponimage/Render.mp4"   type="video/mp4">
                </video>

               </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-5 -->
    <!-- end of about -->


    <!-- Features -->
    <div id="features" class="basic-4" style="background: black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 style="color:red; font-family: 'Creepster', cursive; font-size:26px; text-align:center;">Marketing Plan</h3>

                </div>

            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-box bg-gray">
                        <h4 style="font-family: 'Creepster', cursive;  color:red; text-align:center;">Phase 1</h4>
                            <ul>
                                <li>    Launch on Uniswap </li>
                                <li>    Start influencer Marketing </li>
                                <li>    CMS Reddit post  </li>
                              
                            </ul>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box bg-gray">
                        <h4 style="font-family: 'Creepster', cursive;  color:red; text-align:center;">Phase 2</h4>
                            <ul>
                                <li>Apply for Coingecko </li>
                                <li>Apply for CoinMarketCap</li>
                                <li>YouTube & TikTok Marketing </li>

                            </ul>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box bg-gray">
                        <h4 style="font-family: 'Creepster', cursive;  color:red; text-align:center;">Phase 3</h4>
                            <ul>
                                <li>Apply for Coinhut </li>
                                <li>Apply for Coinsniper </li>
                                <li>Contract audit done  </li>
                                <li>Listing on CEX </li>

                            </ul>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
       
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of features -->

    <!-- Details 1 -->
    <div id="details" class="basic-2" style="background: black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        {{-- <video src="video/render.mp4" width="600px" height=600px;></video> --}}
                        {{-- <img class="img-fluid" src="images/angrybg.png" alt="alternative"> --}}
                            <div class="card mew"></div>

                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2 style="font-family: 'Creepster', cursive;  color:red;" >Tokenmics</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <img src="images/gorilla.png" height="30px" width="30px" >
                                <h4 style=" font-size: 18px; color: white; font-family: 'Creepster', cursive;padding-left:10px; ">Total Supply:  500,000,000,000,000</h4>
                            </li>

                            
                             <li class="media">
                                <img src="images/gorilla.png" height="30px" width="30px" padding-right:10px; >
                                <h4 style=" font-size:18px; color: white; font-family: 'Creepster', cursive;  padding-left:10px;">Marketing: 3% Of Total Supply.</h4>
                            </li>
                            <li class="media">
                                <img src="images/gorilla.png" height="30px" width="30px" padding-right:10px; >
                                <h4 style=" font-size:18px; color: white; font-family: 'Creepster', cursive;  padding-left:10px;"> 6.9% redistribution To Our Community Holders.</h4>
                            </li>
                            <li class="media">
                                <img src="images/gorilla.png" height="30px" width="30px" >
                                <h4 style=" font-size: 18px; color: white; font-family: 'Creepster', cursive;padding-left:10px; ">  4.20% goes to liquidity .</h4>
                            </li>
                        </ul> 
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->


  



    <section id="Merchant-help"  style="padding-top: 100px; padding-bottom:100px; background:black;" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="vouch-merchant-customerh2" style="text-align: center; padding-bottom:80px; font-size: 60px; font-family: 'Creepster', cursive;  color:red; ">FAQ</h2>

                    <div class="question-title">
                        <h3 style="color: red; font-family: 'Creepster', cursive; font-size:22px;">  What is based Token? </h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p>based Token  is a fully decentralized, peer-to-peer digital currency, owned by it’s holders.</p>
                            </div>

                        </div>

                    </div>

                   

                        <div class="question-title">
                        <h3 style="font-family: 'Creepster', cursive; color:red;font-size:22px;"> Where can I get based Token?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p>
                                    You can buy on Uniswap (HERE) <br>
                                    Contract Address is (HERE)
                                </p>
                            </div>

                        </div>

                    </div>

                    <div class="question-title">
                        <h3 style="font-family: 'Creepster', cursive; color:red; font-size:22px;">          Do you have marketing planned? </h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p>
                                     Yes please see our Marketing Roadmap above!
                                </p>
                            </div>

                        </div>

                    </div>

                    <div class="question-title">
                        <h3 style="font-family: 'Creepster', cursive; color:red;font-size:22px;"> How can i join the Telegram?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p>
                                        <a href="https://t.me/basedapetoken" target="_blank">Click Here Telegram</a>                                    
                                </p>
                            </div>

                        </div>

                    </div>

                        <div class="question-title">
                        <h3 style="font-family: 'Creepster', cursive; color:red;font-size:22px;"> How can i follow us on Twitter?</h3>
                        <div class="content-main">
                            <div class="content-inner">
                                <p>
                                        <a href="https://twitter.com/basedapetoken" target="_blank">Click Here Twitter</a>                                    
                                </p>
                            </div>

                        </div>

                    </div>





            </div>

        </div>
    </div>

</section>





@endsection

@section('javascripts')
<script  type="text/javascript">
$(document).ready(function(){
	$('.question-title h3').click(function(){
		$(this).next('.content-main').slideToggle();
		$(this).parent().toggleClass('active');
		$(this).parent().siblings().children('.content-main').slideUp();
		$(this).parent().siblings().removeClass('active');
	});
});
</script>
@endsection