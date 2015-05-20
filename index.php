<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="fonts/stylesheet.css"> 
        <link rel="stylesheet" type="text/css" href="css/styles.css"> 
        <script src="http://code.jquery.com/jquery-2.1.4.min.js" type="text/javascript" charset="utf-8"></script>
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
                $('#alert_text').addClass('green').html('Thanks, ' + name + ' - we\'ll get at you if there is any news, otherwise, we\'ll see you at GJ2015').show();
                setTimeout('$("#alert_text").hide()', 5000);
            }
        </script>
    </head>
    <body>
        <div class="green" id="alert_text">
            test copy
        </div>
        <div id="marquee_text">
            <span class="bigger"><?= "GRAMS JAM: 2015" ?></span>
        </div>

        <div id="nav">
            <div id="centered-container">
                <ul>
                    <li>nav1</li>
                    <li>nav2</li>
                </ul>
            </div>
        </div>

        <div id="content">
            
            <div id="info_content">
                <h1>Info</h1>
                <ul>
                    <li><b>What:</b>The 2015 version of the 2014 smash hit, Grams Jam. But also just an amazing party/music festival with a lot of your friends. And there's food (made by a better chef than Sarah) and cocktails and more Dawson's Creek themed games/prizes than ever before!</li>
                    <li><b>When:</b>Saturday June 27th, bands start at 2pm</li>
                    <li><b>Where:</b>Point of the Bluff Vineyards 8524 Broadview Heights Dr. Keuka Park, NY 14478</li>
                    <li><b>Food/Drink:</b> Garbage plates and late night pizzas created by our favorite chef Brian Durnin, Fordham Beer, Point of the Bluff Wine and Specialty Dawson's Creek themed cocktails created by mixologist Chris McCleod. Brian and Chris will also be serving breakfast burritos, mimosas, and bloody marys for those staying the night</li>
                    <li><b>More info coming this week!</b></li>
                </ul>
            </div>
            <div id="info_content">
                <h1>RSVP</h1>
                <h4>You really should do this. There are benefits (making things easier for us)</h4>
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
        </div>
    </body>
</html>
