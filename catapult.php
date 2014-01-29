<html>
	<head>
			<title> catapult </title>
			<script type="text/javascript" src="jquery.js"></script>
			<script type="text/javascript" src="jqueryRotate.js"></script>
			<style type="text/css">
				
				#thrower img
				{
					height: 100%;
					width:50%;
				}
				#thrower
				{
					position: absolute;
					width: 30%;
					height: 20%;
					left:3%;
					bottom: 4%;
				}

				#catapult img
				{
					width: 100%;
					height: 100%;
				}
				#catapult
				{
					position: absolute;
					width: 30%;
					height: 20%;
					left: 2.2%;
					bottom: 4%;
				}

				#rock img
				{
					height: 100%;
					width: 100%;
				}
				#rock
				{
					position: absolute;
					width: 4%;
					height: 14%;
					left:3.4%;
					bottom: 13%;
					z-index:-1;
				}

				#summa
				{
					position: absolute;
					height: 20%;
					width: 10%;
					right:20%;
					top:5%;
				}
			</style>
			<script type="text/javascript">
					
					function rotation()
					{
						launch();
   					$("#thrower").rotate({
      				angle:0, 
      				animateTo:90
   					});
   					setTimeout("rotateback();",1000);
					}


					function rotateback()
					{
					$("#thrower").rotate({
						angle:90,
						animateTo:0
					});
					}

					function launch(){
						$("#rock").animate({
							left : "+77%",
						 	bottom: "+80%",
						},500);
					}
			</script>
	</head>
	<body>
			<div id="thrower">
				<img  src="images/nittfest14/thrower.png"></img>
			</div>	
			<div id="catapult">
				<img src="images/nittfest14/catapult.png"></img>
			</div>
			<div id="rock">
				<img src="images/nittfest14/rock.png"></img>
			</div>
		<div id="button">
			<input type="button" value="click me!" onclick="rotation();"></input>
		</div>
		<img id="summa" src="images/nittfest14/arc_N13.png"></img>
	</body>
</html>