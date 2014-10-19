<div class="suachuavcs view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Suachuavc'); ?></h1>
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
			<?php echo h($suachuavc['Suachuavc']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Vatchat'); ?></th>
		<td>
			<?php echo $this->Html->link($suachuavc['Vatchat']['tenvc'], array('controller' => 'vatchats', 'action' => 'view', $suachuavc['Vatchat']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ngaysuachua'); ?></th>
		<td>
			<?php echo h($suachuavc['Suachuavc']['ngaysuachua']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Lydosuachua'); ?></th>
		<td>
			<?php echo h($suachuavc['Suachuavc']['lydosuachua']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nguoidenghi'); ?></th>
		<td>
			<?php echo $this->Html->link($suachuavc['Nguoidenghi']['hovaten'], array('controller' => 'danhsaches', 'action' => 'view', $suachuavc['Nguoidenghi']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nguondenghi'); ?></th>
		<td>
			<?php echo h($suachuavc['Suachuavc']['nguondenghi']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cososuachua'); ?></th>
		<td>
			<?php echo h($suachuavc['Suachuavc']['cososuachua']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sotiensuachua'); ?></th>
		<td>
			<?php echo h($suachuavc['Suachuavc']['sotiensuachua']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

