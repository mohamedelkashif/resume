
<!doctype html>
<html lang="en">
<head>
	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
	<link rel="stylesheet" type="text/css"href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css"href="css/bootstrap.css">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<meta charset="UTF-8">
<style>
@import url(//fonts.googleapis.com/css?family=Lato:700);
body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
			background-image: url("images/url.png");
			
		}
		p{
			text-align: left;
			font-size: 70px;
			color: white;
			font-family: courier;
			position: relative;
			margin-left:250px;
		}
		input{
			border: 0;
      padding: 10px;
      font-size: 18px;
     margin-top: 25px;
     position: relative;
top:60px;
left: 130px;
      

		}
		textarea{
			position: relative;
			top:80px;
			left: 650px;
			width: 500px;
			height: 150px;
			color: black;
		}
		input[type="submit"]{
			position: relative;
			background-color: white;
			left: 650px;

		}
		input[type="text"]{
			position: relative;left: 650px;


		}
		h1{
			position: relative;
			font-family: Courier;
			font-size: 70px;
			top: 200px;
			right: 320px
			

		}
		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 33%;
			margin-left: -150px;
			margin-top: -100px;
			color: #000000;
			font-family:courier;
			
			
		}

		a, a:visited {
			text-decoration:none;
		}

		h3 {
			font-size: 40px;
			margin: 16px 0 0 0;
			font-weight: bold;

		}
		p{
			font-family:courier;
			font-size: 20px;
			color: #FFFFFF;
			float: right;


			
		}
		me{
			text-align: right;
		}
		img{
			position: absolute;
			margin-left: -350px;
			margin-top: -140px
</style>

	<body>
		<div class="navbar navbar-inverse">
		<div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Mohamed Elkashif<br/><h5>Software Engineer<h5/></a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="assets/cv.pdf">Resume</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
	</div>


		<div>
			<h1 style="color:white">
				CONTACT 
			</h1>
	{{ Form::open( array('url'=> 'contact', 'class'=>'navbar-form navbar-left' ))}}
	
	
</br>

	
</br>
	{{ Form::textarea('mess') }}
</br>
{{Form::submit('Send',array('class'=>'btn btn-default'))}}
{{Form::close()}}


		


</div>
	<div class="footer navbar-fixed-bottom" role="navigation">
	<div class="container">
        <div class="navbar-right">

	<ul class="nav navbar-nav">
			
<li><a href="https://www.twitter.com/MohamedElkashif" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
<li><a href="https://www.facebook.com/muhammedelkashif" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a></li>
<li><a href="https://plus.google.com/u/0/100036068955451315871" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a></li>
		</ul>	
		
       </div>
       </div>


	</body>
	