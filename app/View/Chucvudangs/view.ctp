<div class="chucvudangs view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Chucvudang'); ?></h1>
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
			<?php echo h($chucvudang['Chucvudang']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ten'); ?></th>
		<td>
			<?php echo h($chucvudang['Chucvudang']['ten']); ?>
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
	<h3><?php echo __('Related Danhsaches'); ?></h3>
	<?php if (!empty($chucvudang['Danhsach'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Hovaten'); ?></th>
		<th><?php echo __('Ngaysinh'); ?></th>
		<th><?php echo __('Ngaynhapngu'); ?></th>
		<th><?php echo __('Quequan'); ?></th>
		<th><?php echo __('Noithuongtru'); ?></th>
		<th><?php echo __('Donvi Id'); ?></th>
		<th><?php echo __('Chucvudang Id'); ?></th>
		<th><?php echo __('Chucvuchinhquyen Id'); ?></th>
		<th><?php echo __('Capbac Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($chucvudang['Danhsach'] as $danhsach): ?>
		<tr>
			<td><?php echo $danhsach['id']; ?></td>
			<td><?php echo $danhsach['hovaten']; ?></td>
			<td><?php echo $danhsach['ngaysinh']; ?></td>
			<td><?php echo $danhsach['ngaynhapngu']; ?></td>
			<td><?php echo $danhsach['quequan']; ?></td>
			<td><?php echo $danhsach['noithuongtru']; ?></td>
			<td><?php echo $danhsach['donvi_id']; ?></td>
			<td><?php echo $danhsach['chucvudang_id']; ?></td>
			<td><?php echo $danhsach['chucvuchinhquyen_id']; ?></td>
			<td><?php echo $danhsach['capbac_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'danhsaches', 'action' => 'view', $danhsach['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'danhsaches', 'action' => 'edit', $danhsach['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'danhsaches', 'action' => 'delete', $danhsach['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $danhsach['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Danhsach'), array('controller' => 'danhsaches', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Quatrinhcongtacs'); ?></h3>
	<?php if (!empty($chucvudang['Quatrinhcongtac'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tu'); ?></th>
		<th><?php echo __('Den'); ?></th>
		<th><?php echo __('Lamgi'); ?></th>
		<th><?php echo __('Capbac Id'); ?></th>
		<th><?php echo __('Chucvudang Id'); ?></th>
		<th><?php echo __('Chucvuchinhquyen Id'); ?></th>
		<th><?php echo __('Donvi Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($chucvudang['Quatrinhcongtac'] as $quatrinhcongtac): ?>
		<tr>
			<td><?php echo $quatrinhcongtac['id']; ?></td>
			<td><?php echo $quatrinhcongtac['tu']; ?></td>
			<td><?php echo $quatrinhcongtac['den']; ?></td>
			<td><?php echo $quatrinhcongtac['lamgi']; ?></td>
			<td><?php echo $quatrinhcongtac['capbac_id']; ?></td>
			<td><?php echo $quatrinhcongtac['chucvudang_id']; ?></td>
			<td><?php echo $quatrinhcongtac['chucvuchinhquyen_id']; ?></td>
			<td><?php echo $quatrinhcongtac['donvi_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'quatrinhcongtacs', 'action' => 'view', $quatrinhcongtac['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'quatrinhcongtacs', 'action' => 'edit', $quatrinhcongtac['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'quatrinhcongtacs', 'action' => 'delete', $quatrinhcongtac['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $quatrinhcongtac['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Quatrinhcongtac'), array('controller' => 'quatrinhcongtacs', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
