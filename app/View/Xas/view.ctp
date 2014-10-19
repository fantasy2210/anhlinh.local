<div class="xas view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Xa'); ?></h1>
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
			<?php echo h($xa['Xa']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ten'); ?></th>
		<td>
			<?php echo h($xa['Xa']['ten']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Huyen'); ?></th>
		<td>
			<?php echo $this->Html->link($xa['Huyen']['ten'], array('controller' => 'huyens', 'action' => 'view', $xa['Huyen']['id'])); ?>
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
	<h3><?php echo __('Related Donvis'); ?></h3>
	<?php if (!empty($xa['Donvi'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ten'); ?></th>
		<th><?php echo __('Dienthoai'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Website'); ?></th>
		<th><?php echo __('Tinh Id'); ?></th>
		<th><?php echo __('Huyen Id'); ?></th>
		<th><?php echo __('Xa Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($xa['Donvi'] as $donvi): ?>
		<tr>
			<td><?php echo $donvi['id']; ?></td>
			<td><?php echo $donvi['ten']; ?></td>
			<td><?php echo $donvi['dienthoai']; ?></td>
			<td><?php echo $donvi['fax']; ?></td>
			<td><?php echo $donvi['website']; ?></td>
			<td><?php echo $donvi['tinh_id']; ?></td>
			<td><?php echo $donvi['huyen_id']; ?></td>
			<td><?php echo $donvi['xa_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'donvis', 'action' => 'view', $donvi['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'donvis', 'action' => 'edit', $donvi['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'donvis', 'action' => 'delete', $donvi['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $donvi['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Donvi'), array('controller' => 'donvis', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
