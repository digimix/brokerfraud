<div <?php post_class(); ?> itemtype="http://schema.org/Review" itemscope="" itemprop="review">
	<div itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating">
		<p class="star-rating text--deca">
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
			<i class="fa fa-star" aria-hidden="true"></i>
		</p>
		<meta content="1" itemprop="worstRating">
		<span content="5" itemprop="ratingValue"></span>
		<span content="5" itemprop="bestRating"></span>
	</div>
	<div class="text--deci" itemprop="description"><?php the_content(); ?></div>
	<div class="text--centi">
	<span itemscope="" itemtype="http://schema.org/Person" itemprop="author">
		&mdash;<span itemprop="name"><?php the_title(); ?></span>
	</span>
	</div>
	<div itemtype="http://schema.org/Attorney" itemscope="" itemprop="itemReviewed">
		<link href="http://www.stopbrokerfraud.com/" itemprop="url">
		<meta content="Fitapelli | Kurta" itemprop="name">
	</div>
</div>