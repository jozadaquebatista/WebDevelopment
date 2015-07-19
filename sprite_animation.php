<style>
#ball{
	background: url(images/ball_bounce.png);
	width: 50px;
	height: 50px;
	-webkit-animation: ball-bounce 0.7s steps(6) infinite;
	animation: ball-bounce 0.7s steps(6) infinite;
}
@-webkit-keyframes ball-bounce {
	from { background-position: 0px; }
	to { background-position: -300px; }
}
@keyframes ball-bounce {
	from { background-position: 0px; }
	to { background-position: -300px; }
}
</style>
<div id="ball"></div>