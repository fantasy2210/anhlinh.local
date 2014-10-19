<div class="sudungvcs view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Sudungvc'); ?></h1>
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
			<?php echo h($sudungvc['Sudungvc']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Vatchat'); ?></th>
		<td>
			<?php echo $this->Html->link($sudungvc['Vatchat']['tenvc'], array('controller' => 'vatchats', 'action' => 'view', $sudungvc['Vatchat']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ngaysudung'); ?></th>
		<td>
			<?php echo h($sudungvc['Sudungvc']['ngaysudung']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nguoisudung'); ?></th>
		<td>
			<?php echo $this->Html->link($sudungvc['Nguoisudung']['hovaten'], array('controller' => 'danhsaches', 'action' => 'view', $sudungvc['Nguoisudung']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Mucdich'); ?></th>
		<td>
			<?php echo h($sudungvc['Sudungvc']['mucdich']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ngaytra'); ?></th>
		<td>
			<?php echo h($sudungvc['Sudungvc']['ngaytra']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tinhtrangmuon'); ?></th>
		<td>
			<?php echo h($sudungvc['Sudungvc']['tinhtrangmuon']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tinhtrangtra'); ?></th>
		<td>
			<?php echo h($sudungvc['Sudungvc']['tinhtrangtra']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

