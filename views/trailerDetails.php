
<section class="main-content details">
	<section class="full-trailer">
		<!-- <img src="imgs/placeholder_940x450.gif" /> -->
		<video controls>
			<source src="videos/webm/<? echo $data[0]["webM"]; ?>"/>
		</video>
	</section>

	<section class="movie-details">
		<h2><? echo $data[0]["movie_title"] ?></h2>
		<h3>Release Date: <? echo $data[0]["release_date"] ?></h3>
		<p><? echo $data[0]["movie_description"] ?></p>
	</section>

	<section class="screenshots">
		<p><a href="#"><img src="imgs/placeholder_220x150.gif" /></a></p>
		<p><a href="#"><img src="imgs/placeholder_220x150.gif" /></a></p>
		<p><a href="#"><img src="imgs/placeholder_220x150.gif" /></a></p>
		<p><a href="#"><img src="imgs/placeholder_220x150.gif" /></a></p>
	</section>
</section>





<section id="galleria" style="display:none"></section>