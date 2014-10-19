<div class="danhsaches view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Danhsach'); ?></h1>
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
			<?php echo h($danhsach['Danhsach']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Hovaten'); ?></th>
		<td>
			<?php echo h($danhsach['Danhsach']['hovaten']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ngaysinh'); ?></th>
		<td>
			<?php echo h($danhsach['Danhsach']['ngaysinh']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ngaynhapngu'); ?></th>
		<td>
			<?php echo h($danhsach['Danhsach']['ngaynhapngu']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Quequan'); ?></th>
		<td>
			<?php echo h($danhsach['Danhsach']['quequan']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Noithuongtru'); ?></th>
		<td>
			<?php echo h($danhsach['Danhsach']['noithuongtru']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Donvi'); ?></th>
		<td>
			<?php echo $this->Html->link($danhsach['Donvi']['ten'], array('controller' => 'donvis', 'action' => 'view', $danhsach['Donvi']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Chucvudang'); ?></th>
		<td>
			<?php echo $this->Html->link($danhsach['Chucvudang']['ten'], array('controller' => 'chucvudangs', 'action' => 'view', $danhsach['Chucvudang']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Chucvuchinhquyen'); ?></th>
		<td>
			<?php echo $this->Html->link($danhsach['Chucvuchinhquyen']['ten'], array('controller' => 'chucvuchinhquyens', 'action' => 'view', $danhsach['Chucvuchinhquyen']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Capbac'); ?></th>
		<td>
			<?php echo $this->Html->link($danhsach['Capbac']['ten'], array('controller' => 'capbacs', 'action' => 'view', $danhsach['Capbac']['id'])); ?>
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
	<h3><?php echo __('Related Baocaotins'); ?></h3>
	<?php if (!empty($danhsach['Baocaotin'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Thoigiannamtin'); ?></th>
		<th><?php echo __('Thoigianbaocao'); ?></th>
		<th><?php echo __('Noidungtin'); ?></th>
		<th><?php echo __('Nguontin'); ?></th>
		<th><?php echo __('Bienphapxuly'); ?></th>
		<th><?php echo __('Dexuat'); ?></th>
		<th><?php echo __('Tunhanxet'); ?></th>
		<th><?php echo __('Ykienchihuy'); ?></th>
		<th><?php echo __('Danhsach Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($danhsach['Baocaotin'] as $baocaotin): ?>
		<tr>
			<td><?php echo $baocaotin['id']; ?></td>
			<td><?php echo $baocaotin['thoigiannamtin']; ?></td>
			<td><?php echo $baocaotin['thoigianbaocao']; ?></td>
			<td><?php echo $baocaotin['noidungtin']; ?></td>
			<td><?php echo $baocaotin['nguontin']; ?></td>
			<td><?php echo $baocaotin['bienphapxuly']; ?></td>
			<td><?php echo $baocaotin['dexuat']; ?></td>
			<td><?php echo $baocaotin['tunhanxet']; ?></td>
			<td><?php echo $baocaotin['ykienchihuy']; ?></td>
			<td><?php echo $baocaotin['danhsach_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'baocaotins', 'action' => 'view', $baocaotin['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'baocaotins', 'action' => 'edit', $baocaotin['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'baocaotins', 'action' => 'delete', $baocaotin['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $baocaotin['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Baocaotin'), array('controller' => 'baocaotins', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Dangkyhoatdongs'); ?></h3>
	<?php if (!empty($danhsach['Dangkyhoatdong'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Thoigian'); ?></th>
		<th><?php echo __('Noidung'); ?></th>
		<th><?php echo __('Danhsach Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($danhsach['Dangkyhoatdong'] as $dangkyhoatdong): ?>
		<tr>
			<td><?php echo $dangkyhoatdong['id']; ?></td>
			<td><?php echo $dangkyhoatdong['thoigian']; ?></td>
			<td><?php echo $dangkyhoatdong['noidung']; ?></td>
			<td><?php echo $dangkyhoatdong['danhsach_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'dangkyhoatdongs', 'action' => 'view', $dangkyhoatdong['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'dangkyhoatdongs', 'action' => 'edit', $dangkyhoatdong['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'dangkyhoatdongs', 'action' => 'delete', $dangkyhoatdong['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $dangkyhoatdong['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Dangkyhoatdong'), array('controller' => 'dangkyhoatdongs', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Ykienchidaos'); ?></h3>
	<?php if (!empty($danhsach['Ykienchidao'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Thoigian'); ?></th>
		<th><?php echo __('Noidung'); ?></th>
		<th><?php echo __('Linhvuc'); ?></th>
		<th><?php echo __('Thoigianhoanthanh'); ?></th>
		<th><?php echo __('Donvi Id'); ?></th>
		<th><?php echo __('Danhsach Id'); ?></th>
		<th><?php echo __('Danhsach Id1'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($danhsach['Ykienchidao'] as $ykienchidao): ?>
		<tr>
			<td><?php echo $ykienchidao['id']; ?></td>
			<td><?php echo $ykienchidao['thoigian']; ?></td>
			<td><?php echo $ykienchidao['noidung']; ?></td>
			<td><?php echo $ykienchidao['linhvuc']; ?></td>
			<td><?php echo $ykienchidao['thoigianhoanthanh']; ?></td>
			<td><?php echo $ykienchidao['donvi_id']; ?></td>
			<td><?php echo $ykienchidao['danhsach_id']; ?></td>
			<td><?php echo $ykienchidao['danhsach_id1']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'ykienchidaos', 'action' => 'view', $ykienchidao['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'ykienchidaos', 'action' => 'edit', $ykienchidao['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'ykienchidaos', 'action' => 'delete', $ykienchidao['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $ykienchidao['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Ykienchidao'), array('controller' => 'ykienchidaos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Quanhegiadinhs'); ?></h3>
	<?php if (!empty($danhsach['Quanhegiadinh'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Hovaten'); ?></th>
		<th><?php echo __('Namsinh'); ?></th>
		<th><?php echo __('Quenquan'); ?></th>
		<th><?php echo __('Nghenghiep'); ?></th>
		<th><?php echo __('Tinhtrang'); ?></th>
		<th><?php echo __('Loaiquanhe Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($danhsach['Quanhegiadinh'] as $quanhegiadinh): ?>
		<tr>
			<td><?php echo $quanhegiadinh['id']; ?></td>
			<td><?php echo $quanhegiadinh['hovaten']; ?></td>
			<td><?php echo $quanhegiadinh['namsinh']; ?></td>
			<td><?php echo $quanhegiadinh['quenquan']; ?></td>
			<td><?php echo $quanhegiadinh['nghenghiep']; ?></td>
			<td><?php echo $quanhegiadinh['tinhtrang']; ?></td>
			<td><?php echo $quanhegiadinh['loaiquanhe_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'quanhegiadinhs', 'action' => 'view', $quanhegiadinh['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'quanhegiadinhs', 'action' => 'edit', $quanhegiadinh['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'quanhegiadinhs', 'action' => 'delete', $quanhegiadinh['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $quanhegiadinh['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Quanhegiadinh'), array('controller' => 'quanhegiadinhs', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Quatrinhcongtacs'); ?></h3>
	<?php if (!empty($danhsach['Quatrinhcongtac'])): ?>
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
	<?php foreach ($danhsach['Quatrinhcongtac'] as $quatrinhcongtac): ?>
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
