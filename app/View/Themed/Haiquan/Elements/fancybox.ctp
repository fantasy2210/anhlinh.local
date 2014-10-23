<!-- Add fancyBox -->
<?php
echo $this->Html->css('/fancybox/source/jquery.fancybox');
echo $this->Html->css('/fancybox/source/helpers/jquery.fancybox-buttons');
echo $this->Html->css('/fancybox/source/helpers/jquery.fancybox-thumbs');
echo $this->Html->script('/fancybox/source/jquery.fancybox.pack',array('block' => 'scriptBottom', 'inline' => false));
echo $this->Html->script('/fancybox/source/helpers/jquery.fancybox-media',array('block' => 'scriptBottom', 'inline' => false));
?>
