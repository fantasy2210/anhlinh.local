<div class="tinhhinhs view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Tinhhinh'); ?></h1>
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
			<?php echo h($tinhhinh['Tinhhinh']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Thoigian'); ?></th>
		<td>
			<?php echo h($tinhhinh['Tinhhinh']['thoigian']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tentau'); ?></th>
		<td>
			<?php echo h($tinhhinh['Tinhhinh']['tentau']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Khoangcach'); ?></th>
		<td>
			<?php echo h($tinhhinh['Tinhhinh']['khoangcach']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Loaihoatdong'); ?></th>
		<td>
			<?php echo h($tinhhinh['Tinhhinh']['loaihoatdong']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Dao'); ?></th>
		<td>
			<?php echo $this->Html->link($tinhhinh['Dao']['ten'], array('controller' => 'daos', 'action' => 'view', $tinhhinh['Dao']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Vungbien'); ?></th>
		<td>
			<?php echo $this->Html->link($tinhhinh['Vungbien']['ten'], array('controller' => 'vungbiens', 'action' => 'view', $tinhhinh['Vungbien']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Quocgia'); ?></th>
		<td>
			<?php echo $this->Html->link($tinhhinh['Quocgia']['ten'], array('controller' => 'quocgias', 'action' => 'view', $tinhhinh['Quocgia']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tauca'); ?></th>
		<td>
			<?php echo $this->Html->link($tinhhinh['Tauca']['tentau'], array('controller' => 'taucas', 'action' => 'view', $tinhhinh['Tauca']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

