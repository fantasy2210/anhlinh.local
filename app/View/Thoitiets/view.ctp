<div class="thoitiets view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Thoitiet'); ?></h1>
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
			<?php echo h($thoitiet['Thoitiet']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Thoigian'); ?></th>
		<td>
			<?php echo h($thoitiet['Thoitiet']['thoigian']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Noidung'); ?></th>
		<td>
			<?php echo h($thoitiet['Thoitiet']['noidung']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Vungbien'); ?></th>
		<td>
			<?php echo $this->Html->link($thoitiet['Vungbien']['ten'], array('controller' => 'vungbiens', 'action' => 'view', $thoitiet['Vungbien']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

