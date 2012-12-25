	<?php
		foreach ($users as $user)
		{
	?>
			<blockquote class="activity-item">
				<p>
					<div class="activity-item-title pull-left">
						<?php echo $user->first_name .' '.$user->last_name; ?>
					</div>
				</p>
				<br><small>
					
				</small>
			</blockquote>
	<?php
		}
	?>