<div class="kinhphichis view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Kinhphichi'); ?></h1>
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
			<?php echo h($kinhphichi['Kinhphichi']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Noidung'); ?></th>
		<td>
			<?php echo h($kinhphichi['Kinhphichi']['noidung']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nguonkinhphi'); ?></th>
		<td>
			<?php echo h($kinhphichi['Kinhphichi']['nguonkinhphi']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sotien'); ?></th>
		<td>
			<?php echo h($kinhphichi['Kinhphichi']['sotien']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nguoidenghi'); ?></th>
		<td>
			<?php echo $this->Html->link($kinhphichi['Nguoidenghi']['hovaten'], array('controller' => 'danhsaches', 'action' => 'view', $kinhphichi['Nguoidenghi']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nguoiduyet'); ?></th>
		<td>
			<?php echo $this->Html->link($kinhphichi['Nguoiduyet']['hovaten'], array('controller' => 'danhsaches', 'action' => 'view', $kinhphichi['Nguoiduyet']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

