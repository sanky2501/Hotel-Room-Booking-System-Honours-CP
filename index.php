<!DOCTYPE html>
<html lang = "en">

	<body>   
    <?php include 'menu.html'?>;
	<div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
		</ol>
		<div style = "margin: auto;" class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="center-block" src="images/a.jpg" style = "width:60%; height:550px;" />
			</div>
		
			<div class="item">
				<img class="center-block" src="images/b.jpg" style = "width:60%; height:550px;"  />
			</div>
		
			<div class="item">
				<img class="center-block" src="images/c.jpg" style = "width:60%; height:550px;" />
			</div>
		
			<div class="item">
				<img class="center-block" src="images/d.jpg" style = "width:60%; height:550px;" />
			</div>
			
			<div class="item">
				<img class="center-block" src="images/e.jpg" style = "width:60%; height:550px;" />
			</div>
			
			<div class="item">
				<img class="center-block" src="images/f.jpeg" style = "width:60%; height:550px;" />
			</div>
			
			<div class="item">
				<img class="center-block" src="images/g.png" style = "width:60%; height:550px;" />
			</div>
			
			
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>	
	</div>
	<br />
	<br />

</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>