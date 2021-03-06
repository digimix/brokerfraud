<?php
	use Roots\Sage\Titles;
	$claim_title = Titles\title();
	$claim_title_new = preg_replace('/^[^:]*:\s*/', '', $claim_title);
?>
<div class="story-block story-block-contact dark bg-overlay-recover-losses">
	<div class="container-fluid">
		<div class="cols-2 align-center">
			<div class="summary">
				<h2 class="entry-title">Consult Lawyers Skilled in Securities Fraud Claims</h2>
				<p>From our office in New York, we represent individuals throughout the nation in cases of investment fraud, misrepresentation, and negligence.</p>
				<p>Call us by phone at (877) 238-4175 or use our <a href="#contactModal" data-toggle="modal" data-target="#contactModal"><span>contact form</span></a> for a free consultation to evaluate whether you can seek recovery for <?= $claim_title_new; ?>.</p>
				<p>
					<?php get_template_part('templates/modal-contact', 'btn'); ?>
				</p>
			</div>
		</div>
		<div class="buffer"></div>
	</div>
</div>