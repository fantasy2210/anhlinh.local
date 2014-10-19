<div class="taucannbatgius view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Taucannbatgius'); ?></h1>
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
			<?php echo h($taucannbatgiu['Taucannbatgiu']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Thoigian'); ?></th>
		<td>
			<?php echo h($taucannbatgiu['Taucannbatgiu']['thoigian']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Toado'); ?></th>
		<td>
			<?php echo h($taucannbatgiu['Taucannbatgiu']['toado']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Quocgia'); ?></th>
		<td>
			<?php echo $this->Html->link($taucannbatgiu['Quocgia']['ten'], array('controller' => 'quocgias', 'action' => 'view', $taucannbatgiu['Quocgia']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Vungbien'); ?></th>
		<td>
			<?php echo $this->Html->link($taucannbatgiu['Vungbien']['ten'], array('controller' => 'vungbiens', 'action' => 'view', $taucannbatgiu['Vungbien']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tauca'); ?></th>
		<td>
			<?php echo $this->Html->link($taucannbatgiu['Tauca']['tentau'], array('controller' => 'taucas', 'action' => 'view', $taucannbatgiu['Tauca']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

