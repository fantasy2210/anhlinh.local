<div class="huyens view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Huyen'); ?></h1>
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
			<?php echo h($huyen['Huyen']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ten'); ?></th>
		<td>
			<?php echo h($huyen['Huyen']['ten']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tinh'); ?></th>
		<td>
			<?php echo $this->Html->link($huyen['Tinh']['ten'], array('controller' => 'tinhs', 'action' => 'view', $huyen['Tinh']['id'])); ?>
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
	<?php if (!empty($huyen['Donvi'])): ?>
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
	<?php foreach ($huyen['Donvi'] as $donvi): ?>
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
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Xas'); ?></h3>
	<?php if (!empty($huyen['Xa'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ten'); ?></th>
		<th><?php echo __('Huyen Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($huyen['Xa'] as $xa): ?>
		<tr>
			<td><?php echo $xa['id']; ?></td>
			<td><?php echo $xa['ten']; ?></td>
			<td><?php echo $xa['huyen_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'xas', 'action' => 'view', $xa['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'xas', 'action' => 'edit', $xa['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'xas', 'action' => 'delete', $xa['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $xa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Xa'), array('controller' => 'xas', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
