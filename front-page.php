<?php //get_template_part('templates/page', 'header'); ?>

<div class="story-block dark bg-overlay-wall-st">
	<div class="cols-2 align-center">
		<div class="summary hero">
			<h2 class="entry-title">Millions of Dollars of Investor Losses Recovered</h2>
			<p>The experienced stock fraud lawyers at Fitapelli Kurta focus their practice on all aspects of investment fraud and misrepresentation. When you suspect misconduct by your broker, our team of securities attorneys will investigate the specific circumstances of your case and guide you through the process of pursuing recovery from any responsible party.</p>
			<h5>Stock fraud arbitration process</h5>
			<ul class="boxes list-unstyled">
				<li> <a href="contact-us.html"> <span>FREE CASE <br/>EVALUATION</span> Learn if you have a valid claim, and <br> how we will recover your funds. </a> </li>
				<li> <a href="stock-fraud-claims.html"> <span>FINRA <br/>ARBITRATION</span> We advocate on your behalf to <br> reclaim your losses. </a> </li>
				<li> <a href="loss-recovery-process.html"> <span>HEARING <br/>/ AWARD</span> You receive a check in the mail with <br> your losses (less our attorney fee). </a></li>
			</ul>
			<a class="btn btn-fw btn-outline btn-arrow" href="<?= esc_url(home_url('/contact/')); ?>"><span>Explore our full 10-step process</span></a>
<!--
			<ul class="list-unstyled">
				<li>Best in class bioavailability enhancers</li>
				<li>Advanced multi-phase extended release</li>
				<li>Maximizing every single muscle potential</li>
			</ul>
-->
			<p>
		</div>
<!--
		<figure class="align-bottom">
			<img class="img-responsive" src="http://atomic.dev/brokerfraud/atomic-core/img/losses-2.png">
		</figure>
-->
		<figure class="align-bottom" style="position: absolute;bottom:80px;right:20px;background:radial-gradient(center center, circle cover, #ffeda3, #ffc800);">
			<img class="img-responsive" src="http://digimix.dev/app/uploads/sites/2/2016/07/avvo-badge.png">
		</figure>


	</div>
</div>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>


<!--
<?php while (have_posts()) : the_post(); ?>
	<div class="cols-2">
		<aside class="sidebar" style="flex-basis: 20%">
			<?php dynamic_sidebar('sidebar-primary'); ?>
		</aside>
		<div class="page-content" style="flex-basis: 80%;position:relative;">
			<div class="curl"><a href="<?= esc_url(home_url('/contact')); ?>">Recover your losses</a></div>
		<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
		</div>
	</div>
<?php endwhile; ?>
-->

<!--
<?php while (have_posts()) : the_post(); ?>
		<div class="white-paper" style="position: relative;">
			<div class="curl"><a href="<?= esc_url(home_url('/contact')); ?>">Recover your losses</a></div>
		<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
		</div>
<?php endwhile; ?>
-->

<div class="page-content" style="margin: 30px;">
	<div class="cols-2" style="padding:4% 6%;">
		<div style="flex-basis: 33.333%;padding-right: 25px;">
			<p class="text--deci caps">
				About Fitapelli | Kurta
			</p>
			<h1 class="entry-title text--hecto">Knowledgeable Stock and Investment Fraud Attorneys representing investors nationwide.</h1>
			<div class="cta-box lady-justice">
				<figure>
					<img src="http://digimix.dev/app/uploads/sites/2/2016/07/lady-justice-1.png">
				</figure>
				<div class="summary">
					<p class="text--base">Proven Results</p>
					<p class="text--deci">Sampling of recent and representative cases we have handled.</p>
					<a class="btn btn-1 btn-arrow" href="/recent-cases"><span>Recent Cases</span></a>
				</div>
			</div>
		</div>

		<div style="flex-basis: 66.667%;">
			<p>Investors often ask professionals to handle their investment decisions because they lack the expertise to conduct them on their own. In doing so, people place their trust and money in a broker who has a duty to serve their interests. However, this can result in disastrous consequences if a financial adviser engages in wrongdoing or otherwise betrays the client’s confidence. The experienced <a href="stock-fraud-claims.html">stock fraud</a> lawyers at Fitapelli Kurta focus their practice on all aspects of investment fraud and misrepresentation.</p>
			<p>When you suspect misconduct by your broker, our team of securities attorneys will investigate the specific circumstances of your case and guide you through the process of pursuing recovery from any responsible party.</p>
			<p>The founding members of Fitapelli Kurta began their legal careers working at large defense firms, representing investment professionals and organizations before dedicating their energies to serve investors. Now, we use the valuable knowledge gained during that time to help individuals protect their rights against brokers who have acted carelessly or in bad faith. Armed with considerable skill and resources, the securities attorneys at Fitapelli Kurta have earned significant results on behalf of investors across the United States. We have obtained arbitration settlements totaling millions of dollars, among other successes. Our staff is proud of our reputation as aggressive but highly ethical professionals who will fight vigorously to assert the interests of our clients.</p>
		</div>
	</div><!-- end cols -->
	<hr>
	<div class="sitemap-links show-1" style="padding:3% 6%;">
		<?php dynamic_sidebar('sidebar-primary'); ?>
	</div>

</div>

<div class="text-center" style="padding:3% 0">
	<h3 class="entry-title">As Seen On</h3>
	<p style="color:#999;">Fitapelli | Kurta has been featured on national media outlets.</p>
	<?php get_template_part('templates/badges'); ?>
</div>
<!-- <div style="padding:10%; -moz-column-count: 3; -moz-column-gap: 20px; -webkit-column-count: 3;"> -->
<div class="page-content" style="margin: 30px;">
	<div class="cols-2" style="padding:5% 8%;">
		<div style="flex-basis: 33.333%;padding-right: 25px;">
			<p class="text--deci caps">
				Recover Losses
			</p>
			<h2 class="entry-title text--hecto">Take legal action to protect your rights against broker misconduct.</h2>
			<h5 style="color:#08214d;">Fortunately for investors, the securities industry is generally well-regulated. If you have reason to believe that you have been the victim of fraud or misrepresentation, you likely will have the opportunity to seek justice.</h5>
			<div class="cta-box gavel">
				<figure>
					<img src="http://digimix.dev/app/uploads/sites/2/2016/07/gavel.png">
				</figure>
				<div class="summary">
					<p class="text--base">Get in touch</p>
					<p class="text--deci">Call us by phone at 877-238-4175 or via our <a href="/contact">contact form</a>.</p>
					<a class="btn btn-1 btn-arrow" href="/contact"><span>Contact us</span></a>
				</div>
			</div>
		</div>
		<div style="flex-basis: 66.667%;">
			<p>The Securities and Exchange Commission (SEC), which is a federal regulatory and enforcement agency, has set forth guidelines for brokers in conducting investment transactions. These professionals owe their clients a duty of fair dealing, meaning they must disclose certain information, charge prevailing market rates, candidly discuss conflicts of interest, and follow instructions promptly. Furthermore, they must evaluate potential investments according to whether they may be suitable for a client’s particular needs. If these conditions are not met by your investment professional, contact the experienced securities lawyers at Fitapelli Kurta for a case evaluation.</p>
			<p>At its core, the fiduciary duty of a broker requires acting in the best interests of the individuals whom they serve. This means that he or she cannot carry out a transaction solely for the purpose of making a commission, or even take that factor into account when advising an investor.</p>
			<p>Claims against investment professionals may be brought under either state or federal laws, and they often involve fraud, negligence, or both. To establish a claim for fraud, an individual must show that his or her broker made a knowingly false statement with the intention of inducing reliance. It is also necessary to show that the investor did rely on the statement and suffered losses as a result.</p>
			<p>However, you may have a claim even if you are not able to prove the elements of fraud. In this situation, you could still take action against an investment professional who acted carelessly by using a theory of negligence. To succeed as a plaintiff in a negligence claim, an investor must prove that the broker had a duty and breached that duty. Additionally, the plaintiff must show that he or she was harmed by the financial adviser’s breach and incurred damages because of it. In general, the standard to which a broker will be held in a negligence lawsuit is defined as how a reasonably prudent and similarly trained investment professional would behave under the same circumstances.</p>
		</div>
	</div><!-- end cols -->
	<hr>
	<div class="sitemap-links show-2" style="padding:3% 6%;">
		<?php dynamic_sidebar('sidebar-primary'); ?>
	</div>
</div>

<?php the_posts_navigation(); ?>
<?php get_template_part('templates/story-reviews'); ?>

<?php get_template_part('templates/home-footer'); ?>

<div class="sitemap-links show-3">
	<?php dynamic_sidebar('sidebar-primary'); ?>
</div>