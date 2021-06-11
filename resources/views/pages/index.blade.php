@extends('layouts.master')
@section('content')


<style>
    .header{
  background-image: url('images/ape.png');
  /* animation: holoCard 15s ease infinite; */
  background-repeat: no-repeat;
  background-position: center;

  
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
  background-image: url('images/angrybg.png');
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

  
</style>

    <!-- Header -->
    <div class="header" >
        <div class="ocean">
            <div class="wave"></div>
            <div class="wave" ></div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
<a href="https://logwork.com/countdown-phzj" class="countdown-timer" data-timezone="America/New_York" data-date="2021-06-11 21:22" style="color:white;">B</a>

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
                        <h3 style="font-family: 'Creepster', cursive;  color:red; font-size:50px;">Bape Ape</h3>
                        <p class="p-large">“Test words”</p>
                        <img  src="images/ape.png" style="animation: holoCard 1s ease infinite;" alt="alternative">
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of statement -->


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
                                <h4 style=" font-size: 18px; color: white; font-family: 'Creepster', cursive;padding-left:10px; ">Total Supply: 1,000,000,000,000 </h4>
                            </li>

                             <li class="media">
                                <img src="images/gorilla.png" height="30px" width="30px" padding-right:10px; >
                                <h4 style=" font-size:18px; color: white; font-family: 'Creepster', cursive;  padding-left:10px;">Dev Team: 10% Of Total Supply.</h4>
                            </li>
                             <li class="media">
                                <img src="images/gorilla.png" height="30px" width="30px" padding-right:10px; >
                                <h4 style=" font-size:18px; color: white; font-family: 'Creepster', cursive;  padding-left:10px;">Marketing: 5% Of Total Supply.</h4>
                            </li>
                            <li class="media">
                                <img src="images/gorilla.png" height="30px" width="30px" padding-right:10px; >
                                <h4 style=" font-size:18px; color: white; font-family: 'Creepster', cursive;  padding-left:10px;"> 6.9% Redistribution To Our Community Holders.</h4>
                            </li>
                            <li class="media">
                                <img src="images/gorilla.png" height="30px" width="30px" >
                                <h4 style=" font-size: 18px; color: white; font-family: 'Creepster', cursive;padding-left:10px; ">  4.20% Burn of Total Supply.</h4>
                            </li>
                        </ul> 
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->


    <!-- Details Lightbox -->
    <!-- Lightbox -->
	<div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
			<div class="col-lg-8">
                <div class="image-container">
                    <img class="img-fluid" src="images/details-lightbox.jpg" alt="alternative">
                </div> <!-- end of image-container -->
			</div> <!-- end of col -->
			<div class="col-lg-4">
                <h3>Goals Setting</h3>
				<hr>
                <p>The app can easily help you track your personal development evolution if you take the time to set it up.</p>
                <h4>User Feedback</h4>
                <p>This is a great app which can help you save time and make your live easier. And it will help improve your productivity.</p>
                <ul class="list-unstyled li-space-lg">
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Splash screen panel</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Statistics graph report</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Events calendar layout</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Location details screen</div>
                    </li>
                    <li class="media">
                        <i class="fas fa-check"></i><div class="media-body">Onboarding steps interface</div>
                    </li>
                </ul>
                <a class="btn-solid-reg mfp-close page-scroll" href="#contact">Contact Us</a> <button class="btn-outline-reg mfp-close as-button" type="button">Back</button>
			</div> <!-- end of col -->
		</div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of details lightbox -->




    <!-- Features -->
    <div id="features" class="basic-4" style="background: black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-box bg-gray">
                        <h4 style="font-family: 'Creepster', cursive;  color:red;">Web framework</h4>
                        <p>Gemdev is a young and popular web framework designed to help users build websites and web apps in half the time it would take without it</p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box bg-gray">
                        <h4 style="font-family: 'Creepster', cursive;  color:red;">Unlimited components</h4>
                        <p>Browse the enormous component collection and find the right parts for your online project. Cards, lists, image sliders, everything you need</p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box bg-gray">
                        <h4 style="font-family: 'Creepster', cursive;  color:red;">Easy to download</h4>
                        <p>It's very easy to download Gemdev just login with your credentials and click the green download button. The package will download instantly</p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
       
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of features -->


    <!-- About -->
    <div id="about" class="basic-5" style="background: black;">
        <div class="container">
            <div class="row">
               <div class="col-lg-12">                     
                <video width="100%" height="100%" controls>
                  <source src="/video/render.mp4"   type="video/mp4">
                </video>

               </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-5 -->
    <!-- end of about -->




@endsection