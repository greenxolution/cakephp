<div class="submitFeeds view">
<h2><?php echo __('Submit Feed'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($submitFeed['SubmitFeed']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FeedSubmissionId'); ?></dt>
		<dd>
			<?php echo h($submitFeed['SubmitFeed']['FeedSubmissionId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FeedType'); ?></dt>
		<dd>
			<?php echo h($submitFeed['SubmitFeed']['FeedType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SubmittedDate'); ?></dt>
		<dd>
			<?php echo h($submitFeed['SubmitFeed']['SubmittedDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FeedProcessingStatus'); ?></dt>
		<dd>
			<?php echo h($submitFeed['SubmitFeed']['FeedProcessingStatus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RequestId'); ?></dt>
		<dd>
			<?php echo h($submitFeed['SubmitFeed']['RequestId']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Response'); ?></dt>
		<dd>
			<?php echo h($submitFeed['SubmitFeed']['Response']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File'); ?></dt>
		<dd>
			<?php echo h($submitFeed['SubmitFeed']['File']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($submitFeed['SubmitFeed']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($submitFeed['SubmitFeed']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Submit Feed'), array('action' => 'edit', $submitFeed['SubmitFeed']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Submit Feed'), array('action' => 'delete', $submitFeed['SubmitFeed']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $submitFeed['SubmitFeed']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Submit Feeds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submit Feed'), array('action' => 'add')); ?> </li>
	</ul>
</div>
