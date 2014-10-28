<div class="tinhhinhs index">

    <div class="row">

        <div class="col-md-12">
            <div class="portlet portlet-white">
                <div class="portlet-header pam mbn">
                    <div class="caption"><?php echo __('Tinhhinhs'); ?></div>
                    <div class="actions">
                        <?php echo $this->Html->link(__('<i class="fa fa-plus"></i>&nbsp;Thêm mới'), array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-info btn-sm')); ?>					<div class="btn-group"><a href="#" data-toggle="dropdown" class="btn btn-warning btn-sm dropdown-toggle"><i class="fa fa-wrench"></i>&nbsp;Công cụ</a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="#">Export to Excel</a>
                                </li>
                                <li><a href="#">Export to CSV</a>
                                </li>
                                <li><a href="#">Export to XML</a>
                                </li>							
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="filter">
                    <?php
//Search
                    echo $this->Form->create(null, array(
                        //'method'=>'post',
                        //'url' => array_merge(array('action' => 'index'), $this->params['pass']),
                        'inputDefaults' => array(
                            'div' => 'form-group',
                            'label' => false,
                            'wrapInput' => false,
                            'class' => 'form-control'
                        ),
                        'class' => 'well form-inline',
                        'id' => 'search_form'
                    ));
                    ?>
                    <div class="form-group ">
                        <div class="keywords">                
                            <input type="text" name="data[khoang_thoi_gian]" placeholder="Từ - đến..."class=" col-xs-1 form-control pull-left" id="reservation"/>
                        </div><!-- /.input group -->
                    </div>
                    <?php
                    echo $this->Form->input('tauca_id', array('label' => false, 'empty' => 'chọn tàu cá', 'style="width:200px"',
                        'required' => false));
                    echo $this->Form->input('dao_id', array(
                        'label' => false, 'empty' => 'chọn đảo', 'style="width:200px"',
                        'required' => false
                    ));
                    echo $this->Form->input('vungbien_id', array(
                        'label' => false, 'empty' => 'chọn vùng biển', 'style="width:200px"',
                        'required' => false
                    ));
                    echo $this->Form->input('quocgia_id', array('label' => false, 'empty' => 'chọn quốc gia', 'style="width:200px"', 'required' => false, 'escape' => false,
                    ));
                    ?>
                    <a href="#" id="submit_button" class="btn btn-primary btn-sm ladda-button" data-style="expand-right" data-size="l"><span class="ladda-label">Tìm</span></a>
                    <?php
                    echo $this->Form->end();
                    ?>
                </div>
                <div class="portlet-body pan" id='datarows'>
                    <table cellpadding="0" cellspacing="0" class="table table-striped">
                        <thead>
                            <tr>
                                <th><?php echo $this->Paginator->sort('id'); ?></th>
                                <th><?php echo $this->Paginator->sort('thoigian'); ?></th>
                                <th><?php echo $this->Paginator->sort('tauca_id'); ?></th>
                                <th><?php echo $this->Paginator->sort('dao_id'); ?></th>
                                <th><?php echo $this->Paginator->sort('vungbien_id'); ?></th>
                                <th><?php echo $this->Paginator->sort('quocgia_id'); ?></th>
                                <th><?php echo $this->Paginator->sort('khoangcach'); ?></th>
                                <th><?php echo $this->Paginator->sort('loaihoatdong'); ?></th>


                                <th class="actions"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stt = (($this->Paginator->params['paging']['Tinhhinh']['page'] - 1) * $this->Paginator->params['paging']['Tinhhinh']['limit']) + 1;
                            ?>
                            <?php foreach ($tinhhinhs as $tinhhinh): ?>
                                <tr>
                                    <td><?php echo $stt++; ?>&nbsp;</td>
                                    <td><?php echo h($tinhhinh['Tinhhinh']['thoigian']); ?>&nbsp;</td>
                                    <td>
                                        <?php echo $this->Html->link($tinhhinh['Tauca']['tentau'], array('controller' => 'taucas', 'action' => 'view', $tinhhinh['Tauca']['id'])); ?>
                                    </td>
                                    <td>
                                        <?php echo $this->Html->link($tinhhinh['Dao']['ten'], array('controller' => 'daos', 'action' => 'view', $tinhhinh['Dao']['id'])); ?>
                                    </td>
                                    <td>
                                        <?php echo $this->Html->link($tinhhinh['Vungbien']['ten'], array('controller' => 'vungbiens', 'action' => 'view', $tinhhinh['Vungbien']['id'])); ?>
                                    </td>
                                    <td>
                                        <?php echo $this->Html->link($tinhhinh['Quocgia']['ten'], array('controller' => 'quocgias', 'action' => 'view', $tinhhinh['Quocgia']['id'])); ?>
                                    </td>

                                    <td><?php echo h($tinhhinh['Tinhhinh']['khoangcach']); ?>&nbsp;</td>
                                    <td><?php echo h($tinhhinh['Tinhhinh']['loaihoatdong']); ?>&nbsp;</td>

                                    <td class="actions">
                                        <?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $tinhhinh['Tinhhinh']['id']), array('escape' => false)); ?>
                                        <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $tinhhinh['Tinhhinh']['id']), array('escape' => false)); ?>
                                        <?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $tinhhinh['Tinhhinh']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $tinhhinh['Tinhhinh']['id'])); ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="portlet-footer pam">
                        <p>
                            <small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}'))); ?></small>
                        </p>

                        <?php
                        $params = $this->Paginator->params();
                        if ($params['pageCount'] > 1) {
                            ?>
                            <ul class="pagination pagination-sm">
                                <?php
                                echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
                                echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentClass' => 'active', 'currentTag' => 'a'));
                                echo $this->Paginator->next('Next &rarr;', array('class' => 'next', 'tag' => 'li', 'escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled', 'tag' => 'li', 'escape' => false));
                                ?>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </div> <!-- end col md 9 -->
        </div><!-- end row -->

    </div>
</div><!-- end containing of content -->