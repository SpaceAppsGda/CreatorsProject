<html>
  <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>The Earth Day Projects</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link href="style2.css" rel="stylesheet" type="text/css" />
		
		<style>
		.info {
			font-family:Verdana, arial, helvetica; 
			font-size: 20pt;
			text-align: center;
			background-color: #6699FF;
			width: 600px;
			color: white;
		}
		
			
			.success{
				
				border: 2px solid #009400;
				background: #B3FFB3;
				color: #555;
				font-weight: bold;
				
			}
			
			.error{
				
				border: 2px solid #DE001A;
				background: #FFA8B3;
				color: #000;
				font-weight: bold;
			}
		</style>
			
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript">
			
			$(document).ready(function(){
							
				$("#myForm").submit(function(){
					
					$.ajax({
						type: "POST",
						url: "postForm.ajax.php",
						data: $("#myForm").serialize(),
						dataType: "json",
						
						success: function(msg){
							$("#formResponse").removeClass('error');
							$("#formResponse").addClass(msg.status);
							$("#formResponse").html(msg.message);

						},
						error: function(){
							$("#formResponse").removeClass('success');
							$("#formResponse").addClass('error');
							$("#formResponse").html("There was an error submitting the form. Please try again.");
						}
					});
					
					//make sure the form doens't post
					return false;
				
				
				});
			
			
			});
		</script>
		
		<script>
        var balls = [];

        function updateBoard() {
            var canvas = document.getElementById("board");
            var context = canvas.getContext("2d");
            context.fillStyle = "#F1F6C1";
            context.fillRect(0, 0, canvas.width, canvas.height);

            for (var i = 0; i<balls.length; i++) {
                var ball = balls[i];

                context.fillStyle = ball.color;
                context.beginPath();
                context.arc(ball.x, ball.y, ball.size, 0, 2*Math.PI, false);
                context.closePath();
                context.fill();

                ball.x += ball.xspeed;
                if ((ball.x+ball.size)>=canvas.width) {
                    ball.xspeed = -ball.xspeed;
                    ball.x += ball.xspeed;
                }
                else if ((ball.x-ball.size)<=0) {
                    ball.xspeed = -ball.xspeed;
                    ball.x += ball.xspeed;
                }
                ball.y += ball.yspeed;
                if ((ball.y+ball.size)>=canvas.height) {
                    ball.yspeed = -ball.yspeed;
                    ball.y += ball.yspeed;
                }
                else if ((ball.y-ball.size)<=0) {
                    ball.yspeed = -ball.yspeed;
                    ball.y += ball.yspeed;
                }
            }
        }

        function rndColor() { return Math.floor(Math.random()*128 + 127); };

        window.onload = function() {
            var canvas = document.getElementById("board");
            canvas.width = window.innerWidth || document.documentElement.clientWidth;
            canvas.height = 200;

            var ballCount = 40;
            for (var i = 0; i<ballCount; i++) {
                balls.push({
                    x: i*(canvas.width/ballCount) + (canvas.width/ballCount/2),
                    y: (canvas.height/2),
                    xspeed: Math.random()*10-5,
                    yspeed: Math.random()*10-5,
                    size: Math.random()*10+10,
                    color: "rgb(" + rndColor() + ", " + rndColor() + ", " + rndColor() + ")"
                });
            }

            window.setInterval(updateBoard, 50);
        };
    </script>
	
	<script type="text/javascript">
            var image1 = "im1.jpg"
            var image2 = "im2.jpg"
            var image3 = "im3.jpg"
    </script>
		
		
	</head>
	<body>
	
	<canvas id="board"></canvas>
	<img src="nasa.png" height="180px" width="218px" style="position: absolute; top: 2%; right: 2%;" onclick="clickedClose()"/>
	<img src="logo1.png" height="180px" width="218px" style="position: absolute; top: 2%; left: 2%;" onclick="clickedClose()"/>

	

<ul id="nav">
	<li class="current"><a href="http://www.webdesignerwall.com">Home</a></li>
	<li><a href="http://climate.nasa.gov/nasa_climate_day/ClimateDayEvents">NASA Events</a></li>	
	<li><a href="http://www.ndesign-studio.com">Other Projects</a>
		<ul>
			<li><a href="http://languagecast.co">Roam App</a></li>
			<li><a href="http://languagecast.co">VirtualTec</a></li>
			<li><a href="http://languagecast.co">Language Cast</a></li>
		</ul>
	</li>
	<li><a href="http://spaceappschallenge.org/project/creators-project/">About</a></li>
	<li><a href="https://github.com/organizations/SpaceAppsGda/teams/387943">Contact Us</a></li>
</ul>

<form name="images">
            <img src="image11.jpg" name="slide" width="600" height="500"/>
			<h1 id="name" class="info"> </h1>
			
            <script>
                //variable that will increment through the images
                var step = 1
                function slideit(){
                    //if browser does not support the image object, exit.
                    switch(step){
                        case 1:
                            document.images.slide.src = image1;
							document.getElementById("name").innerHTML = "10 Years ago...";
                            break;
                        case 2:
                            document.images.slide.src = image2;
							document.getElementById("name").innerHTML = "Today";
                            break;
                        case 3:
                            document.images.slide.src = image3;
							document.getElementById("name").innerHTML = "After 10 years...";
                            break;
                    }
                    if (step < 3) {
                        step++
                    }
                    else {
                        step = 1
                    }
                    //call function "slideit()" every 2 seconds
                    setTimeout("slideit()", 2000)
                }

                slideit();
            </script>
        </form>

	<form id="myForm" name="myForm" method="post" action="" style="margin: 0 auto; width: 300px;">
	
		<div id="formResponse"></div>
		
		<table>
			
			<tr><td>Name:</td><td><input name="name" type="text" value=""></td></tr>
			<tr><td>Email:</td><td><input name="email" type="text" value="earth.app@hotmail.com"></td></tr>
			<tr><td>Message:</td><td><textarea name="message" rows="5" cols="20"></textarea></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" name="submitForm" value="Submit Form"></td></tr>
			
		</table>

	</form>
	
	</body>
</html>
