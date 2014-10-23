<div class="tinhHinhVenBiens view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Tinh Hinh Ven Bien'); ?></h1>
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
			<?php echo h($tinhHinhVenBien['TinhHinhVenBien']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Thoi Diem'); ?></th>
		<td>
			<?php echo h($tinhHinhVenBien['TinhHinhVenBien']['thoi_diem']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tinh'); ?></th>
		<td>
			<?php echo $this->Html->link($tinhHinhVenBien['Tinh']['ten'], array('controller' => 'tinhs', 'action' => 'view', $tinhHinhVenBien['Tinh']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Huyen'); ?></th>
		<td>
			<?php echo $this->Html->link($tinhHinhVenBien['Huyen']['ten'], array('controller' => 'huyens', 'action' => 'view', $tinhHinhVenBien['Huyen']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Xa'); ?></th>
		<td>
			<?php echo $this->Html->link($tinhHinhVenBien['Xa']['ten'], array('controller' => 'xas', 'action' => 'view', $tinhHinhVenBien['Xa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tieu De'); ?></th>
		<td>
			<?php echo h($tinhHinhVenBien['TinhHinhVenBien']['tieu_de']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Noi Dung'); ?></th>
		<td>
			<?php echo h($tinhHinhVenBien['TinhHinhVenBien']['noi_dung']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nguon'); ?></th>
		<td>
			<?php echo h($tinhHinhVenBien['TinhHinhVenBien']['nguon']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nguoi Lay Tin'); ?></th>
		<td>
			<?php echo h($tinhHinhVenBien['TinhHinhVenBien']['nguoi_lay_tin']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($tinhHinhVenBien['TinhHinhVenBien']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($tinhHinhVenBien['TinhHinhVenBien']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

