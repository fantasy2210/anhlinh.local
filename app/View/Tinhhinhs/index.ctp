<div class="tinhhinhs index">

	<div class="row">

		<div class="col-md-12">
			<div class="portlet portlet-white">
			<div class="portlet-header pam mbn">
				<div class="caption"><?php echo __('Tinhhinhs'); ?></div>
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
						<th><?php echo $this->Paginator->sort('thoigian'); ?></th>
						<th><?php echo $this->Paginator->sort('tentau'); ?></th>
						<th><?php echo $this->Paginator->sort('khoangcach'); ?></th>
						<th><?php echo $this->Paginator->sort('loaihoatdong'); ?></th>
						<th><?php echo $this->Paginator->sort('dao_id'); ?></th>
						<th><?php echo $this->Paginator->sort('vungbien_id'); ?></th>
						<th><?php echo $this->Paginator->sort('quocgia_id'); ?></th>
						<th><?php echo $this->Paginator->sort('tauca_id'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($tinhhinhs as $tinhhinh): ?>
					<tr>
						<td><?php echo h($tinhhinh['Tinhhinh']['id']); ?>&nbsp;</td>
						<td><?php echo h($tinhhinh['Tinhhinh']['thoigian']); ?>&nbsp;</td>
						<td><?php echo h($tinhhinh['Tinhhinh']['tentau']); ?>&nbsp;</td>
						<td><?php echo h($tinhhinh['Tinhhinh']['khoangcach']); ?>&nbsp;</td>
						<td><?php echo h($tinhhinh['Tinhhinh']['loaihoatdong']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($tinhhinh['Dao']['ten'], array('controller' => 'daos', 'action' => 'view', $tinhhinh['Dao']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($tinhhinh['Vungbien']['ten'], array('controller' => 'vungbiens', 'action' => 'view', $tinhhinh['Vungbien']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($tinhhinh['Quocgia']['ten'], array('controller' => 'quocgias', 'action' => 'view', $tinhhinh['Quocgia']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($tinhhinh['Tauca']['tentau'], array('controller' => 'taucas', 'action' => 'view', $tinhhinh['Tauca']['id'])); ?>
		</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $tinhhinh['Tinhhinh']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $tinhhinh['Tinhhinh']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $tinhhinh['Tinhhinh']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $tinhhinh['Tinhhinh']['id'])); ?>
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