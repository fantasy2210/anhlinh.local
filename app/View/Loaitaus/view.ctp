<div class="loaitaus view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Loaitaus'); ?></h1>
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
			<?php echo h($loaitau['Loaitau']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ten'); ?></th>
		<td>
			<?php echo h($loaitau['Loaitau']['ten']); ?>
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
	<h3><?php echo __('Related Taucas'); ?></h3>
	<?php if (!empty($loaitau['Tauca'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tentau'); ?></th>
		<th><?php echo __('Kyhieu'); ?></th>
		<th><?php echo __('Sohieu'); ?></th>
		<th><?php echo __('Tenchutau'); ?></th>
		<th><?php echo __('Thuyentruong'); ?></th>
		<th><?php echo __('Sothuyenvien'); ?></th>
		<th><?php echo __('Hanhnghe'); ?></th>
		<th><?php echo __('Diachict'); ?></th>
		<th><?php echo __('Diachitt'); ?></th>
		<th><?php echo __('Loaitau Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($loaitau['Tauca'] as $tauca): ?>
		<tr>
			<td><?php echo $tauca['id']; ?></td>
			<td><?php echo $tauca['tentau']; ?></td>
			<td><?php echo $tauca['kyhieu']; ?></td>
			<td><?php echo $tauca['sohieu']; ?></td>
			<td><?php echo $tauca['tenchutau']; ?></td>
			<td><?php echo $tauca['thuyentruong']; ?></td>
			<td><?php echo $tauca['sothuyenvien']; ?></td>
			<td><?php echo $tauca['hanhnghe']; ?></td>
			<td><?php echo $tauca['diachict']; ?></td>
			<td><?php echo $tauca['diachitt']; ?></td>
			<td><?php echo $tauca['loaitau_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'taucas', 'action' => 'view', $tauca['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'taucas', 'action' => 'edit', $tauca['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'taucas', 'action' => 'delete', $tauca['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $tauca['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Tauca'), array('controller' => 'taucas', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
