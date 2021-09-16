@extends('layouts.app')

@section('content')

  <!--// Main Content \\-->
  <div class="sportsmagazine-main-content sportsmagazine-main-contentminus">
            
            <!--// Main Section \\-->
            <div class="sportsmagazine-main-section sportsmagazine-thumb sportsmagazine-player-thumb">
                <span class="thumb-transparent"></span>

                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="sportsmagazine-player-thumb-wrap">
                                <figure><img src="assets/extra-images/player-text-img.png" alt=""></figure>
                                <div class="sportsmagazine-player-thumb-text">
                                    <h2>10</h2>
                                    <h3 style="margin-bottom: 0;margin-top: 25px;"><span> Team A</span></h3>
                                    <ul class="sportsmagazine-player-info">
                                        <li>
                                            <h5>League:</h5>
                                            <span>#2</span>
                                        </li>
                                        <li>
                                            <h5>Form:</h5>
                                            <span>WWDLW</span>
                                        </li>
                                        <li>
                                            <h5>Points Per Game:</h5>
                                            <span>1.25 Avg</span>
                                        </li>
                                        <li>
                                            <h5>Owner:</h5>
                                            <span>Wallet address: ghj5555gj53</span>
                                        </li>
                                        <li>
                                            <h5>Best match:</h5>
                                            <span>Match #xx  v Team C Win 8-2</span>
                                        </li>
                                        <li>
                                            <h5>Worst Match:</h5>
                                            <span>Match #xx  v Team B Lose 3-0</span>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section">
				<div class="container">
					<div class="row">

                        <div class="col-md-9">
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="sportsmagazine-player-accuracy">
                                        <div class="sportsmagazine-section-heading"><h2>Team Performance</h2></div>
                                        <p>Team A's match performance and ratios</p>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="sportsmagazine-player-skillbar">
                                        <div class="skillst">
                                            <h6>WIN </h6>
                                            <span>68%</span>
                                            <div class="progressbar1" data-width="68" data-target="68"></div>
                                        </div>
                                        <div class="skillst">
                                            <h6>DRAW</h6>
                                            <span>85%</span>
                                            <div class="progressbar1" data-width="85" data-target="85"></div>
                                        </div>
                                        <div class="skillst">
                                            <h6>LOST</h6>
                                            <span>72%</span>
                                            <div class="progressbar1" data-width="72" data-target="72"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                           

                        </div>
                        
                        <!--// SideBar \\-->
                        <aside class="col-md-3">
                            
                            <!--// Widget Upcoming Matches \\-->
                            <div class="sportsmagazine-widget-heading"><h2>Upcoming Matches</h2></div>
                            <div class="widget widget_matches">
                                <ul>
                                    <li>
                                        <div class="sportsmagazine-team-one">
                                            <h6><a href="fixture-detail.html">Ocean Kings</a></h6>
                                            <span>St. Patrick’s</span>
                                        </div>
                                        <span>VS</span>
                                        <div class="sportsmagazine-team-two">
                                            <h6><a href="fixture-detail.html">Bloody Wave</a></h6>
                                            <span>Marine College</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sportsmagazine-team-one">
                                            <h6><a href="fixture-detail.html">LA Pirates</a></h6>
                                            <span>Bebop Institute</span>
                                        </div>
                                        <span>VS</span>
                                        <div class="sportsmagazine-team-two">
                                            <h6><a href="fixture-detail.html">Ocean Kings</a></h6>
                                            <span>Marine College</span>
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                            <!--// Widget Upcoming Matches \\-->
                            
                           

                           

                            

                        </aside>
                        <!--// SideBar \\-->


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
		<!--// Main Content \\-->

@endsection