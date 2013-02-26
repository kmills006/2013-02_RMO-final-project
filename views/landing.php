

<section class="main-content">
	<section id="trailer-previews">
		<section id="galleria">
			<? foreach($data as $trailer){ var_dump($trailer);?>
				<img class="lrg-backdrop" src="imgs/<? echo $trailer["backdrop"]?>" alt="<? echo $trailer["movie_title"]?> Backdrop" data-link="?controller=landing&action=details&mid=<? echo $trailer["movie_id"] ?>" />
			<? } ?>
		</section>
	</section>
</section>