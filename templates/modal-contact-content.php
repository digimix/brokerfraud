<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="contactModalLabel">Request a free case consultation:</h4>
				</div>
			<div class="modal-body">
				<div class="flex">
					<div>
						<h4>Fitapelli | Kurta</h4>
						<div class="address info-address">
							<?php echo Roots\Sage\Customizer\grabContact(); ?>
						</div>
					</div>
					<?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
				</div>
			</div>
			<div class="modal-footer hidden">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>