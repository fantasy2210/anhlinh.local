<div class="vungbiens view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Vungbien'); ?></h1>
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
			<?php echo h($vungbien['Vungbien']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ten'); ?></th>
		<td>
			<?php echo h($vungbien['Vungbien']['ten']); ?>
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
	<h3><?php echo __('Related Taucannbatgius'); ?></h3>
	<?php if (!empty($vungbien['Taucannbatgiu'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Thoigian'); ?></th>
		<th><?php echo __('Toado'); ?></th>
		<th><?php echo __('Quocgia Id'); ?></th>
		<th><?php echo __('Vungbien Id'); ?></th>
		<th><?php echo __('Tauca Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($vungbien['Taucannbatgiu'] as $taucannbatgiu): ?>
		<tr>
			<td><?php echo $taucannbatgiu['id']; ?></td>
			<td><?php echo $taucannbatgiu['thoigian']; ?></td>
			<td><?php echo $taucannbatgiu['toado']; ?></td>
			<td><?php echo $taucannbatgiu['quocgia_id']; ?></td>
			<td><?php echo $taucannbatgiu['vungbien_id']; ?></td>
			<td><?php echo $taucannbatgiu['tauca_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'taucannbatgius', 'action' => 'view', $taucannbatgiu['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'taucannbatgius', 'action' => 'edit', $taucannbatgiu['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'taucannbatgius', 'action' => 'delete', $taucannbatgiu['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $taucannbatgiu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Taucannbatgiu'), array('controller' => 'taucannbatgius', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Thoitiets'); ?></h3>
	<?php if (!empty($vungbien['Thoitiet'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Thoigian'); ?></th>
		<th><?php echo __('Noidung'); ?></th>
		<th><?php echo __('Vungbien Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($vungbien['Thoitiet'] as $thoitiet): ?>
		<tr>
			<td><?php echo $thoitiet['id']; ?></td>
			<td><?php echo $thoitiet['thoigian']; ?></td>
			<td><?php echo $thoitiet['noidung']; ?></td>
			<td><?php echo $thoitiet['vungbien_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'thoitiets', 'action' => 'view', $thoitiet['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'thoitiets', 'action' => 'edit', $thoitiet['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'thoitiets', 'action' => 'delete', $thoitiet['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $thoitiet['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Thoitiet'), array('controller' => 'thoitiets', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Tinhhinhs'); ?></h3>
	<?php if (!empty($vungbien['Tinhhinh'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Thoigian'); ?></th>
		<th><?php echo __('Tentau'); ?></th>
		<th><?php echo __('Khoangcach'); ?></th>
		<th><?php echo __('Loaihoatdong'); ?></th>
		<th><?php echo __('Dao Id'); ?></th>
		<th><?php echo __('Vungbien Id'); ?></th>
		<th><?php echo __('Quocgia Id'); ?></th>
		<th><?php echo __('Tauca Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($vungbien['Tinhhinh'] as $tinhhinh): ?>
		<tr>
			<td><?php echo $tinhhinh['id']; ?></td>
			<td><?php echo $tinhhinh['thoigian']; ?></td>
			<td><?php echo $tinhhinh['tentau']; ?></td>
			<td><?php echo $tinhhinh['khoangcach']; ?></td>
			<td><?php echo $tinhhinh['loaihoatdong']; ?></td>
			<td><?php echo $tinhhinh['dao_id']; ?></td>
			<td><?php echo $tinhhinh['vungbien_id']; ?></td>
			<td><?php echo $tinhhinh['quocgia_id']; ?></td>
			<td><?php echo $tinhhinh['tauca_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'tinhhinhs', 'action' => 'view', $tinhhinh['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'tinhhinhs', 'action' => 'edit', $tinhhinh['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'tinhhinhs', 'action' => 'delete', $tinhhinh['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $tinhhinh['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Tinhhinh'), array('controller' => 'tinhhinhs', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
