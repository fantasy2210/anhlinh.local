<div class="vatchats view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Vatchat'); ?></h1>
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
			<?php echo h($vatchat['Vatchat']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tenvc'); ?></th>
		<td>
			<?php echo h($vatchat['Vatchat']['tenvc']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Kyhieu'); ?></th>
		<td>
			<?php echo h($vatchat['Vatchat']['kyhieu']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Dacdiem'); ?></th>
		<td>
			<?php echo h($vatchat['Vatchat']['dacdiem']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nhomvc'); ?></th>
		<td>
			<?php echo $this->Html->link($vatchat['Nhomvc']['tennhom'], array('controller' => 'nhomvcs', 'action' => 'view', $vatchat['Nhomvc']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Giatien'); ?></th>
		<td>
			<?php echo h($vatchat['Vatchat']['giatien']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Noicap'); ?></th>
		<td>
			<?php echo h($vatchat['Vatchat']['noicap']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ngaycap'); ?></th>
		<td>
			<?php echo h($vatchat['Vatchat']['ngaycap']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nguoinhan'); ?></th>
		<td>
			<?php echo $this->Html->link($vatchat['Nguoinhan']['hovaten'], array('controller' => 'danhsaches', 'action' => 'view', $vatchat['Nguoinhan']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Chatluong'); ?></th>
		<td>
			<?php echo h($vatchat['Vatchat']['chatluong']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nguoiquanly'); ?></th>
		<td>
			<?php echo $this->Html->link($vatchat['Nguoiquanly']['hovaten'], array('controller' => 'danhsaches', 'action' => 'view', $vatchat['Nguoiquanly']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Vitri'); ?></th>
		<td>
			<?php echo h($vatchat['Vatchat']['vitri']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Huongdan'); ?></th>
		<td>
			<?php echo h($vatchat['Vatchat']['huongdan']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Suachuavcs'); ?></h3>
	<?php if (!empty($vatchat['Suachuavc'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Vatchat Id'); ?></th>
		<th><?php echo __('Ngaysuachua'); ?></th>
		<th><?php echo __('Lydosuachua'); ?></th>
		<th><?php echo __('Nguoidenghi Id'); ?></th>
		<th><?php echo __('Nguondenghi'); ?></th>
		<th><?php echo __('Cososuachua'); ?></th>
		<th><?php echo __('Sotiensuachua'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($vatchat['Suachuavc'] as $suachuavc): ?>
		<tr>
			<td><?php echo $suachuavc['id']; ?></td>
			<td><?php echo $suachuavc['vatchat_id']; ?></td>
			<td><?php echo $suachuavc['ngaysuachua']; ?></td>
			<td><?php echo $suachuavc['lydosuachua']; ?></td>
			<td><?php echo $suachuavc['nguoidenghi_id']; ?></td>
			<td><?php echo $suachuavc['nguondenghi']; ?></td>
			<td><?php echo $suachuavc['cososuachua']; ?></td>
			<td><?php echo $suachuavc['sotiensuachua']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'suachuavcs', 'action' => 'view', $suachuavc['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'suachuavcs', 'action' => 'edit', $suachuavc['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'suachuavcs', 'action' => 'delete', $suachuavc['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $suachuavc['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Suachuavc'), array('controller' => 'suachuavcs', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Sudungvcs'); ?></h3>
	<?php if (!empty($vatchat['Sudungvc'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Vatchat Id'); ?></th>
		<th><?php echo __('Ngaysudung'); ?></th>
		<th><?php echo __('Nguoisudung Id'); ?></th>
		<th><?php echo __('Mucdich'); ?></th>
		<th><?php echo __('Ngaytra'); ?></th>
		<th><?php echo __('Tinhtrangmuon'); ?></th>
		<th><?php echo __('Tinhtrangtra'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($vatchat['Sudungvc'] as $sudungvc): ?>
		<tr>
			<td><?php echo $sudungvc['id']; ?></td>
			<td><?php echo $sudungvc['vatchat_id']; ?></td>
			<td><?php echo $sudungvc['ngaysudung']; ?></td>
			<td><?php echo $sudungvc['nguoisudung_id']; ?></td>
			<td><?php echo $sudungvc['mucdich']; ?></td>
			<td><?php echo $sudungvc['ngaytra']; ?></td>
			<td><?php echo $sudungvc['tinhtrangmuon']; ?></td>
			<td><?php echo $sudungvc['tinhtrangtra']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'sudungvcs', 'action' => 'view', $sudungvc['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'sudungvcs', 'action' => 'edit', $sudungvc['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'sudungvcs', 'action' => 'delete', $sudungvc['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $sudungvc['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Sudungvc'), array('controller' => 'sudungvcs', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
