<div class="sudungvcs index">

	<div class="row">

		<div class="col-md-12">
			<div class="portlet portlet-white">
			<div class="portlet-header pam mbn">
				<div class="caption"><?php echo __('Sudungvcs'); ?></div>
				<div class="actions">
				<?php echo $this->Html->link(__('<i class="fa fa-plus"></i>&nbsp;Thêm mới'), array('action' => 'add'), array('escape' => false,'class'=>'btn btn-info btn-sm')); ?>					<div class="btn-group"><a href="#" data-toggle="dropdown" class="btn btn-warning btn-sm dropdown-toggle"><i class="fa fa-wrench"></i>&nbsp;Công cụ</a>
						<ul class="dropdown-menu pull-right">
							<li><a href="#">Export to Excel</a>
							</li>
							<li><a href="#">Export to CSV</a>
							</li>
							<li><a href="#">Export to XML</a>
							</li>							
						</ul>
					</div>
				</div>
			</div>
			<div class="portlet-body pan">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('vatchat_id'); ?></th>
						<th><?php echo $this->Paginator->sort('ngaysudung'); ?></th>
						<th><?php echo $this->Paginator->sort('nguoisudung_id'); ?></th>
						<th><?php echo $this->Paginator->sort('mucdich'); ?></th>
						<th><?php echo $this->Paginator->sort('ngaytra'); ?></th>
						<th><?php echo $this->Paginator->sort('tinhtrangmuon'); ?></th>
						<th><?php echo $this->Paginator->sort('tinhtrangtra'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($sudungvcs as $sudungvc): ?>
					<tr>
						<td><?php echo h($sudungvc['Sudungvc']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($sudungvc['Vatchat']['tenvc'], array('controller' => 'vatchats', 'action' => 'view', $sudungvc['Vatchat']['id'])); ?>
		</td>
						<td><?php echo h($sudungvc['Sudungvc']['ngaysudung']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($sudungvc['Nguoisudung']['hovaten'], array('controller' => 'danhsaches', 'action' => 'view', $sudungvc['Nguoisudung']['id'])); ?>
		</td>
						<td><?php echo h($sudungvc['Sudungvc']['mucdich']); ?>&nbsp;</td>
						<td><?php echo h($sudungvc['Sudungvc']['ngaytra']); ?>&nbsp;</td>
						<td><?php echo h($sudungvc['Sudungvc']['tinhtrangmuon']); ?>&nbsp;</td>
						<td><?php echo h($sudungvc['Sudungvc']['tinhtrangtra']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $sudungvc['Sudungvc']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $sudungvc['Sudungvc']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $sudungvc['Sudungvc']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $sudungvc['Sudungvc']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			<div class="portlet-footer pam">
			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>
			</div>
			</div>
		</div> <!-- end col md 9 -->
	</div><!-- end row -->

</div>
</div><!-- end containing of content -->