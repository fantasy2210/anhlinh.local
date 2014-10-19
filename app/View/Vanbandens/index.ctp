<div class="vanbandens index">

	<div class="row">

		<div class="col-md-12">
			<div class="portlet portlet-white">
			<div class="portlet-header pam mbn">
				<div class="caption"><?php echo __('Vanbandens'); ?></div>
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
						<th><?php echo $this->Paginator->sort('so'); ?></th>
						<th><?php echo $this->Paginator->sort('tenvanban'); ?></th>
						<th><?php echo $this->Paginator->sort('ngayvanban'); ?></th>
						<!--th><?php //echo $this->Paginator->sort('ngaynhan'); ?></th-->						
						<th><?php echo $this->Paginator->sort('noigui_id'); ?></th>
						<th><?php echo $this->Paginator->sort('nguoiky'); ?></th>
						<th><?php echo $this->Paginator->sort('linhvuc_id'); ?></th>
						<!--th><?php //echo $this->Paginator->sort('nguoiduyet_id'); ?></th-->
						<!--th><?php //echo $this->Paginator->sort('nguoinhan_id'); ?></th-->
						<!--th><?php //echo $this->Paginator->sort('noidungchidao'); ?></th-->
						<!--th><?php //echo $this->Paginator->sort('thoigianhoanthanh'); ?></th-->
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($vanbandens as $vanbanden): ?>
					<tr>
						<td><?php echo $this->Sidebar->domat($vanbanden['Vanbanden']['domat']);?></td>
						<td>
						<?php echo $this->Sidebar->duyet($vanbanden['Vanbanden']['trangthaiduyet'],h($vanbanden['Vanbanden']['so'])."/".h($vanbanden['Vanbanden']['kyhieu']));?>
						</td>						
								<td>
								<?php echo $this->Html->link(h($vanbanden['Vanbanden']['tenvanban']), array('action' => 'view', $vanbanden['Vanbanden']['id']), array('escape' => false)); ?>
								
			<?php echo $this->Html->link($vanbanden['Loaivanban']['ten'], array('controller' => 'loaivanbans', 'action' => 'view', $vanbanden['Loaivanban']['id']),array('class'=>'label label-default')); ?>
		</td>
						<td><?php echo h($vanbanden['Vanbanden']['ngayvanban']); ?>&nbsp;</td>
						<!--td><?php //echo h($vanbanden['Vanbanden']['ngaynhan']); ?>&nbsp;</td-->
						
								<td>
			<?php echo $this->Html->link($vanbanden['Noigui']['ten'], array('controller' => 'noiguis', 'action' => 'view', $vanbanden['Noigui']['id'])); ?>
		</td>
						<td><?php echo h($vanbanden['Vanbanden']['nguoiky']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($vanbanden['Linhvuc']['ten'], array('controller' => 'linhvucs', 'action' => 'view', $vanbanden['Linhvuc']['id'])); ?>
		</td>
								<!--td>
			<?php //echo $this->Html->link($vanbanden['Nguoiduyet']['hovaten'], array('controller' => 'danhsaches', 'action' => 'view', $vanbanden['Nguoiduyet']['id'])); ?>
		</td-->
								<!--td>
			<?php //echo $this->Html->link($vanbanden['Nguoinhan']['hovaten'], array('controller' => 'danhsaches', 'action' => 'view', $vanbanden['Nguoinhan']['id'])); ?>
		</td-->
						<!--td><?php //echo h($vanbanden['Vanbanden']['noidungchidao']); ?>&nbsp;</td-->
						<!--td><?php //echo h($vanbanden['Vanbanden']['thoigianhoanthanh']); ?>&nbsp;</td-->
						<td class="actions">
							<?php echo $this->Html->link('<span data-toggle="tooltip" title="Xem chi tiết" class="glyphicon glyphicon-search"></span>', array('action' => 'view', $vanbanden['Vanbanden']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span data-toggle="tooltip" title="Chỉnh sửa" class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $vanbanden['Vanbanden']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span data-toggle="tooltip" title="Xóa văn bản này" class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $vanbanden['Vanbanden']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $vanbanden['Vanbanden']['id'])); ?>
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