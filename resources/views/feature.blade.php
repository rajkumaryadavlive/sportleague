@extends('layouts.app')

@section('content')

  

<!--// SubHeader \\-->
<div class="sportsmagazine-subheader">
            <span class="subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Fixtures</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="sportsmagazine-breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li>Fixtures</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--// SubHeader \\-->

		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section sportsmagazine-modren-fixturefull">
				<div class="container">
					<div class="row">
						
						<div class="col-md-12">
                            <div class="sportsmagazine-fixture sportsmagazine-modren-fixture">
                              
                                <ul class="row">
                                    
                                    <li class="col-md-6">
                                        <div class="sportsmagazine-modren-fixture-wrap">
                                            <div class="sportsmagazine-modren-fixture-text">
                                                <div class="sportsmagazine-modren-team-one">
                                                    <a href="player-detail.php">
                                                        <figure><img src="assets/extra-images/fixture-classic-img3.png" alt=""></figure>
                                                        <section>
                                                            <h6>Team 1</h6>
                                                            <span>simply dummy text</span>
                                                        </section>
                                                        <span></span>
                                                    </a>
                                                </div>
                                                <div class="sportsmagazine-modren-match-text">
                                                    <h5>League <br> xx match yy</h5>
                                                    <time datetime="2008-02-14 20:00">01 Jan 2022</time>
                                                    <div class="clearfix"></div>
                                                    <span>VS</span>
                                                    
                                                    
                                                </div>
                                                <div class="sportsmagazine-modren-team-two">
                                                    <a href="player-detail.php">
                                                        <figure><img src="assets/extra-images/fixture-classic-img4.png" alt=""></figure>
                                                        <section>
                                                            <h6>Team 2</h6>
                                                            <span>simply dummy text</span>
                                                        </section>
                                                        <span></span>
                                                    </a>
                                                </div>
                                                <div class="clearfix"></div>
                                                 <div class="timer-fixture">
                                                         <div class="timer">
                                                            <div id="daysTicker" class="countdown"></div>
                                                            <div class="counter-text">DAYS</div>
                                                        </div>
                                                        <div class="timer">
                                                            <div id="hoursTicker" class="countdown"></div>
                                                            <div class="counter-text">HOURS</div>
                                                        </div>
                                                        <div class="timer">
                                                            <div id="minsTicker" class="countdown"></div>
                                                            <div class="counter-text">MINUTES</div>
                                                        </div>
                                                        <div class="timer">
                                                            <div id="secsTicker" class="countdown last"></div>
                                                            <div class="counter-text">SECONDS</div>
                                                        </div>
                                                   </div>
                                            </div>
                                                    
                                        </div>
                                    </li>

                                     <li class="col-md-6">
                                        <div class="sportsmagazine-modren-fixture-wrap">
                                            <div class="sportsmagazine-modren-fixture-text">
                                                <div class="sportsmagazine-modren-team-one">
                                                    <a href="player-detail.php">
                                                        <figure><img src="assets/extra-images/fixture-classic-img3.png" alt=""></figure>
                                                        <section>
                                                            <h6>Team 1</h6>
                                                            <span>simply dummy text</span>
                                                        </section>
                                                        <span></span>
                                                    </a>
                                                </div>
                                                <div class="sportsmagazine-modren-match-text">
                                                    <h5>League <br> xx match yy</h5>
                                                    <time datetime="2008-02-14 20:00">01 Jan 2022</time>
                                                    <div class="clearfix"></div>
                                                    <span>VS</span>
                                                    
                                                    
                                                </div>
                                                <div class="sportsmagazine-modren-team-two">
                                                    <a href="player-detail.php">
                                                        <figure><img src="assets/extra-images/fixture-classic-img4.png" alt=""></figure>
                                                        <section>
                                                            <h6>Team 2</h6>
                                                            <span>simply dummy text</span>
                                                        </section>
                                                        <span></span>
                                                    </a>
                                                </div>
                                                <div class="clearfix"></div>
                                                 <div class="timer-fixture">
                                                         <div class="timer">
                                                            <div id="daysTicker" class="countdown">115</div>
                                                            <div class="counter-text">DAYS</div>
                                                        </div>
                                                        <div class="timer">
                                                            <div id="hoursTicker" class="countdown">17</div>
                                                            <div class="counter-text">HOURS</div>
                                                        </div>
                                                        <div class="timer">
                                                            <div id="minsTicker" class="countdown">31</div>
                                                            <div class="counter-text">MINUTES</div>
                                                        </div>
                                                        <div class="timer">
                                                            <div id="secsTicker" class="countdown last">08</div>
                                                            <div class="counter-text">SECONDS</div>
                                                        </div>
                                                   </div>
                                            </div>
                                                    
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!--// Pagination \\-->
                            <div class="sportsmagazine-pagination">
                              <ul class="page-numbers">
                                 <li><a class="previous page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-left"></i></span></a></li>
                                 <li><span class="page-numbers current">1</span></li>
                                 <li><a class="page-numbers" href="404.html">2</a></li>
                                 <li><a class="page-numbers" href="404.html">3</a></li>
                                 <li><a class="page-numbers" href="404.html">4</a></li>
                                 <li><a class="next page-numbers" href="404.html"><span aria-label="Next"><i class="fa fa-angle-right"></i></span></a></li>
                              </ul>
                            </div>
                            <!--// Pagination \\-->
                        </div>


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->
           


  <script>
             
            // Set the date we're counting down to
                    var countDownDate = new Date("1 Jan, 2022 12:00:00").getTime();

                    // Update the count down every 1 second
                    var x = setInterval(function() {

                      // Get todays date and time
                      var now = new Date().getTime();

                      // Find the distance between now an the count down date
                      var distance = countDownDate - now;

                      // Time calculations for days, hours, minutes and seconds
                      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                      var seconds = Math.floor((distance % (1000 * 60)) / 1000); 
                      
                      //Zeros
                    var hours = (hours.toLocaleString(undefined,{minimumIntegerDigits: 2}));  
                      
                    var minutes = (minutes.toLocaleString(undefined,{minimumIntegerDigits: 2}));
                      
                    var seconds = (seconds.toLocaleString(undefined,{minimumIntegerDigits: 2}));
                      
                     
                      
                      // Display the result in the element with id="demo"
                      document.getElementById("daysTicker").innerHTML = days;
                      document.getElementById("hoursTicker").innerHTML = hours;
                      document.getElementById("minsTicker").innerHTML = minutes;
                      document.getElementById("secsTicker").innerHTML = seconds;
                      
                      // If the count down is finished, write some text 
                      if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("countdown").innerHTML = "THE CAMPAIGN BEGINS";
                      }
                    }, 1000);

            </script>
  

@endsection
