<div class="submitFeeds index">

	<p>
		<?php
		echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>
	</p>
	<div class="paging">
		<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
	</div>

	<h2>
		<?php echo __('Submit Feeds'); ?>
	</h2>
	<table cellpadding="0" cellspacing="0">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?>
				</th>
				<th><?php echo $this->Paginator->sort('FeedSubmissionId'); ?>
				</th>
				<th><?php echo $this->Paginator->sort('FeedType'); ?>
				</th>
				<th><?php echo $this->Paginator->sort('Processed'); ?>
				</th>
				<th><?php echo $this->Paginator->sort('Successful'); ?>
				</th>
				<th><?php echo $this->Paginator->sort('WithError'); ?>
				</th>
				<th><?php //echo $this->Paginator->sort('SubmittedDate'); ?>
				</th>
				<th><?php //echo $this->Paginator->sort('FeedProcessingStatus'); ?>
				</th>
				<th><?php //echo $this->Paginator->sort('RequestId'); ?>
				</th>
				<th><?php //echo $this->Paginator->sort('Response'); ?>
				</th>
				<th><?php //echo $this->Paginator->sort('File'); ?>
				</th>
				<th><?php //echo $this->Paginator->sort('created'); ?>
				</th>
				<th><?php echo $this->Paginator->sort('updated'); ?>
				</th>
				<th class="actions"><?php echo __('Actions'); ?>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($submitFeeds as $submitFeed): ?>
			<tr>
				<td><?php echo h($submitFeed['SubmitFeed']['id']); ?>&nbsp;</td>
				<td><?php echo h($submitFeed['SubmitFeed']['FeedSubmissionId']); ?>&nbsp;</td>
				<td><?php echo h($feedType[$submitFeed['SubmitFeed']['FeedType']]); ?>&nbsp;</td>
				<td><?php echo h($submitFeed['ProcessingReport']['MessagesProcessed']); ?>&nbsp;</td>
				<td><?php echo h($submitFeed['ProcessingReport']['MessagesSuccessful']); ?>&nbsp;</td>
				<td><?php echo h($submitFeed['ProcessingReport']['MessagesWithError']); ?>&nbsp;</td>
				<td><?php //echo h($submitFeed['SubmitFeed']['SubmittedDate']); ?>&nbsp;</td>
				<td><?php //echo h($submitFeed['SubmitFeed']['FeedProcessingStatus']); ?>&nbsp;</td>
				<td><?php //echo h($submitFeed['SubmitFeed']['RequestId']); ?>&nbsp;</td>
				<td><?php //echo h($submitFeed['SubmitFeed']['Response']); ?>&nbsp;</td>
				<td><?php //echo h($submitFeed['SubmitFeed']['File']); ?>&nbsp;</td>
				<td><?php //echo h($submitFeed['SubmitFeed']['created']); ?>&nbsp;</td>
				<td><?php echo h($submitFeed['SubmitFeed']['updated']); ?>&nbsp;</td>
				<td class="actions"><?php echo $this->Html->link(__('View'), array('action' => 'view', $submitFeed['SubmitFeed']['id'])); ?>
					<?php echo $this->Html->link(__('Report'),     array(
							'controller' => 'ProcessingReports',
							'action' => 'view/'.$submitFeed['ProcessingReport']['id']
					)
					); ?> <?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $submitFeed['SubmitFeed']['id'])); ?>
					<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $submitFeed['SubmitFeed']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $submitFeed['SubmitFeed']['id']))); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p>
		<?php
		echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>
	</p>
	<div class="paging">
		<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
	</div>
</div>
<div class="actions">
	<h3>
		<?php echo __('Actions'); ?>
	</h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Submit Feed'), array('action' => 'add')); ?>
		</li>
		<li><?php echo $this->Html->link(__('Execute'), array('controller' => 'SubmitFeeds', 'action' => 'execute')); ?> </li>
	</ul>
</div>
