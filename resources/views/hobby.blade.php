<!DOCTYPE html>
<html>
<head>
<title>About me</title>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;700&family=Karla:wght@700&family=Lexend+Peta&family=Lobster&family=Mukta:wght@600&family=Tajawal&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
</head>
<body>
<style>
html,body{
	margin:0;
	padding:0;
	width:100%;
	overflow-x:hidden;
}
.about2{
	background:gray;
	text-align:center;
	background:#121212;
}
.abme2{
	font-family: 'Lobster', cursive;
	font-size:45px;
	color:white;
	padding:10px;
	width:100%;
}
#si{
	color:white;
	position:relative;
	left:36%;
	animation-name:spin;
	animation-duration:1s;
	animation-iteration-count:infinite;
	animation-direction:alternate;
}
#do{
	color:white;
	position:relative;
	left:36%;
	animation-name:spin2;
	animation-duration:1s;
	animation-iteration-count:infinite;
	animation-direction:alternate;
}
.hob{
	display:flex;
	justify-content:center;
}

@keyframes spin{
	
	0%{
		top:20px
	}
	100%{
		top:0px;
	}
}
	@keyframes spin2{
	
	0%{
		top:-20px
	}
	100%{
		top:0px;
	}
	}
	.contacting{
		width:400px;
		line-height:50px;
		background:#121212;
		border-radius:50%;
		text-align:center;
		margin:auto auto;
	}
	#ttt{
	color:white;
	font-size:30px;

	}
	p{
		color:white;
		font-family: 'Lobster', cursive;
	}
	.see{
	background:rgba(0,0,0, .5);
	color:white;
	border:0;
	font-size:30px;
	padding:18px 28px;
	border:3px solid white;
	font-family: 'Lobster', cursive;
	border-radius:40px;
	position:relative;
	top:-30px;
}
.about{
	width:100%;
	text-align:center;
}
.abme{
	font-family: 'Lobster', cursive;
	font-size:45px;
}
.circles{
	display:flex;
	justify-content:space-around;
	margin:30px;
}
.names{
	width:300px;
	line-height:150px;
	background:#121212;
	border-radius:50%;
	text-align:center;
}
h3{
	color:white;
	margin:0;
	font-family: 'Lobster', cursive;
	font-size:30px;
}
h4{
	color:white;
	margin:0;
	position:relative;
	top:-70px;
	font-family: 'Lobster', cursive;
	font-size:25px;
	border-bottom:3px solid white;
}
.dancing{
	display:flex;
	justify-content:space-around;
}
.texts{
	font-family: 'Lobster', cursive;
	font-size:25px;
	border-bottom:3px solid white;
}
span{
	text-align:center;
}

</style>

<div class="about2">
<h1 class="abme2" id="hh">
My hobbies<i class="fas fa-angle-double-down" id="si"></i><i class="fas fa-angle-double-up" id="do"></i>
</h1>
<div class="hobby">
<div class="hob">
<div><img src="img/Blog_thumb-46.jpg" style="width:400px;margin:10px;"/></div>
<div><img src="img/200825133651-runninglead-live-video.jpg" style="width:400px;height:265px;margin:10px;"/></div>
</div>
</div>
</div>
<script src="Portfolio.js"></script>
</body>
</html>