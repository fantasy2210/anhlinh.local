<div class="baocaotins view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Baocaotin'); ?></h1>
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
			<?php echo h($baocaotin['Baocaotin']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Thoigiannamtin'); ?></th>
		<td>
			<?php echo h($baocaotin['Baocaotin']['thoigiannamtin']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Thoigianbaocao'); ?></th>
		<td>
			<?php echo h($baocaotin['Baocaotin']['thoigianbaocao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Noidungtin'); ?></th>
		<td>
			<?php echo h($baocaotin['Baocaotin']['noidungtin']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nguontin'); ?></th>
		<td>
			<?php echo h($baocaotin['Baocaotin']['nguontin']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Bienphapxuly'); ?></th>
		<td>
			<?php echo h($baocaotin['Baocaotin']['bienphapxuly']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Dexuat'); ?></th>
		<td>
			<?php echo h($baocaotin['Baocaotin']['dexuat']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tunhanxet'); ?></th>
		<td>
			<?php echo h($baocaotin['Baocaotin']['tunhanxet']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ykienchihuy'); ?></th>
		<td>
			<?php echo h($baocaotin['Baocaotin']['ykienchihuy']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Danhsach'); ?></th>
		<td>
			<?php echo $this->Html->link($baocaotin['Danhsach']['hovaten'], array('controller' => 'danhsaches', 'action' => 'view', $baocaotin['Danhsach']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

