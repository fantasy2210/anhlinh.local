<div class="ykienchidaos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Ykienchidao'); ?></h1>
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
			<?php echo h($ykienchidao['Ykienchidao']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Thoigian'); ?></th>
		<td>
			<?php echo h($ykienchidao['Ykienchidao']['thoigian']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Noidung'); ?></th>
		<td>
			<?php echo h($ykienchidao['Ykienchidao']['noidung']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Linhvuc'); ?></th>
		<td>
			<?php echo h($ykienchidao['Ykienchidao']['linhvuc']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Thoigianhoanthanh'); ?></th>
		<td>
			<?php echo h($ykienchidao['Ykienchidao']['thoigianhoanthanh']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Donvi'); ?></th>
		<td>
			<?php echo $this->Html->link($ykienchidao['Donvi']['ten'], array('controller' => 'donvis', 'action' => 'view', $ykienchidao['Donvi']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Danhsach'); ?></th>
		<td>
			<?php echo $this->Html->link($ykienchidao['Danhsach']['hovaten'], array('controller' => 'danhsaches', 'action' => 'view', $ykienchidao['Danhsach']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Danhsach Id1'); ?></th>
		<td>
			<?php echo h($ykienchidao['Ykienchidao']['danhsach_id1']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

