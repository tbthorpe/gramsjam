<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="fonts/stylesheet.css"> 
        <link rel="stylesheet" type="text/css" href="css/styles.css"> 
        <script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery.waypoint.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/sticky.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/base.js" type="text/javascript" charset="utf-8"></script>
        <title>Grams Jam: 2015 Edition</title>
        
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function(){
                $("#rsvp_submit").click(function(e){
                    $(this).hide();
                    $('#submitted_loading').show();
                    localStorage.setItem('whoareyou',$('#attendee_name').val());
                    localStorage.setItem('email',$('#attendee_email'));
                    $.post( "post.php", $( "#rsvp_form" ).serialize() )
                        .done(function(){});

                    setTimeout(rsvp_alert, 2000);
                    e.preventDefault();
                    return false;
                });

            });

            function rsvp_alert(){
                $('#submitted_loading').hide();
                var name = localStorage.getItem('whoareyou');
				$("#rsvp_form INPUT").val("");
                $('.thankyou').addClass('green').html('Thanks, ' + name + ' - we\'ll get at you if there is any news, otherwise, we\'ll see you at GJ2015').show();
                //setTimeout('$("#alert_text").hide()', 5000);
            }
        </script>
    </head>
    <body>
        <div class="green" id="alert_text">
            test copy
        </div>

		<div id="header">
			<h1>Grams Jam: 2015</h1>
			<div>
				<ul>
					<li href="#header-content-3">RSVP</li>
					<!-- <li>staff</li> -->
					<li href="#header-content-2">info</li>
					<li href="#header-content-1"->lineup</li>
				</ul>
			</div>
		</div>
		<section class="header_block" id="header-content-1">
			<div class="bg_image"> </div>
			<div class="header_content">
				<h1>Grams Jam 2015</h1>
				<h2>It's back. July 27-28, 2015. Keuka.</h2>
				<h1 class="info lineup">Lineup</h1>
			</div>

		</section>

		<section class="content_block lineup-content" id="info-content-1">
			<ul>
				<li class="b1">
					<h4>Tallahassee</h4>
				</li>
				<li class="b2">
					<h4>Last Good Tooth</h4>
				</li>
				<li class="b3">
					<h4>P. Everett</h4>
				</li>
				<li class="b4">
					<h4>Earthquake Lights</h4>
				</li>
				<li class="b5">
					<h4>Skull</h4>
				</li>
				<li class="b6">
					<h4>Jon Lewis</h4>
				</li>
			</ul>
		</section>
            
		<section class="header_block" id="header-content-2">
			<div class="bg_image"> </div>
			<div class="header_content">
				<h1>Info</h1>
			</div>
		</section>
		<section class="content_block info-content" id="info-content-2">
				<h1>Basic Info</h1>
                <ul>
					<li>
						<h2>When</h2>
						<p>Saturday June 27&mdash;28, bands start at 2pm</p>
					</li>
					<li>
						<h2>Where</h2>
						<p>Point of the Bluff Vineyards 8524 Broadview Heights Dr. Keuka Park, NY 14478</p>
					</li>
					<li>
						<h2>Cost</h2>
						<p>$35 per person. Yes yes yes we know it's more than last year, but this year...</p>
					</li>
				</ul>
				<h1>What You Get</h1>
                <ul>
					<li>
						<h2>Dawson's Creek</h2>
						<p>Ha DUH we'll be playing it ALL DAY LONG</p>
					</li>
					<li>
						<h2>Music</h2>
						<p>Bands start at 2pm on Saturday. </p>
					</li>
					<li>
						<h2>Food/Drink</h2>
						<p>Garbage plates and late night pizzas created by our favorite chef Brian Durnin, Fordham Beer, Point of the Bluff Wine and Specialty Dawson's Creek themed cocktails created by mixologist Chris McCleod. Brian and Chris will also be serving breakfast burritos, mimosas, and bloody marys for those staying the night. But for word, don't let yourself see the bottom of your cup.</p>
					</li>
					<li>
						<h2>Games</h2>
						<p>The usual lawn games, volleyball maybe, flipcup, beer 
						pong, and a MASTER SURPRISE GAME THAT WILL BE SO FUN YOU 
						DON'T EVEN KNOW I SWEAR. Seriously though bring a bathing 
						suit.</p>
					</li>
					<li>
						<h2>Camp out</h2>
						<p>If you're coming, bring a tent and stay though the night. 
						Did you read above? You get breakfast burritos and bloodies. 
						Need a tent? We'll FIGURE IT OUT. Need more gear? WE MIGHT BE 
						ABLE TO FIGURE IT OUT.</p>
					</li>
				</ul>
		</section>
		<section class="header_block" id="header-content-3">
			<div class="bg_image"> </div>
			<div class="header_content">
				<h1>R.S.V.P.</h1>
				<h2>It's a pain, sure. But do it. We promise it's worth it.</h2>
			</div>
		</section>
		<section class="content_block rsvp-content" id="info-content-3">
			<div class="form">
				<form action="" method="post" accept-charset="utf-8" id="rsvp_form">
					<input type="text" name="attendee_name" id="attendee_name" placeholder="What's your name?" />
					<input type="text" name="attendee_email" id="attendee_email" placeholder="Hit us with your email" />
					<input type="text" name="attendee_count" id="attendee_count" placeholder="How many people?" />
					<input type="text" name="attendee_camping" id="attendee_camping" placeholder="Are you staying the night/do you need camping gear?" />
					<input type="submit" name="submit" id="rsvp_submit" value="Party On &#10165;" />
					<input type="hidden" name="someone_is_coming" id="someone_is_coming" value="yeah" />
					<div id="submitted_loading">
						<img src="/ajax-loader.gif" alt="" />
						<span class="copy"> Beep boop boop...this takes an annoyingly long time. Pray for Jen in the meantime.</span>
					</div>
				</form>
			</div>
			<div class="thankyou">
			</div>
		</section>
        </div>
    </body>
</html>
