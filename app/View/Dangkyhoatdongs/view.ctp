<div class="dangkyhoatdongs view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Dangkyhoatdong'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-12">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($dangkyhoatdong['Dangkyhoatdong']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Thoigian'); ?></th>
		<td>
			<?php echo h($dangkyhoatdong['Dangkyhoatdong']['thoigian']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Noidung'); ?></th>
		<td>
			<?php echo h($dangkyhoatdong['Dangkyhoatdong']['noidung']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Danhsach'); ?></th>
		<td>
			<?php echo $this->Html->link($dangkyhoatdong['Danhsach']['hovaten'], array('controller' => 'danhsaches', 'action' => 'view', $dangkyhoatdong['Danhsach']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

