{"filter":false,"title":"edit.ctp","tooltip":"/app/View/Users/edit.ctp","undoManager":{"mark":12,"position":12,"stack":[[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":22,"column":0},"action":"remove","lines":["<div class=\"users form\">","<?php echo $this->Form->create('User'); ?>","\t<fieldset>","\t\t<legend><?php echo __('Edit User'); ?></legend>","\t<?php","\t\techo $this->Form->input('id');","\t\techo $this->Form->input('fullname');","\t\techo $this->Form->input('username');","\t\techo $this->Form->input('password');","\t\techo $this->Form->input('role');","\t?>","\t</fieldset>","<?php echo $this->Form->end(__('Submit')); ?>","</div>","<div class=\"actions\">","\t<h3><?php echo __('Actions'); ?></h3>","\t<ul>","","\t\t<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>","\t\t<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>","\t</ul>","</div>",""]},{"start":{"row":0,"column":0},"end":{"row":28,"column":6},"action":"insert","lines":["<div class=\"container\">","\t<div class=\"row\">","\t\t<div class=\"col-md-6\">","\t\t\t<?php echo $this->Form->create('User', array('role' => 'form')); ?>","\t\t\t\t<fieldset>","\t\t\t\t\t<h2><?php echo __('Editar Usuario'); ?></h2>","\t\t\t\t<?php","\t\t\t\t\techo $this->Form->input('id');","\t\t\t\t\techo $this->Form->input('fullname', array('class' => 'form-control', 'label' => 'Nombre'));","\t\t\t\t\techo $this->Form->input('username', array('class' => 'form-control', 'label' => 'Usuario'));","\t\t\t\t\t// echo $this->Form->input('password', array('class' => 'form-control', 'label' => 'Contraseña'));","\t\t\t\t\t// echo $this->Form->input('role', array('class' => 'form-control', 'label' => 'Rol', 'type' => 'select', 'options' => array('admin' => 'Administrador', 'user' => 'Usuario'), array('class' => 'form-control')));","\t\t\t\t?>","\t\t\t\t</fieldset>","\t\t\t\t<p>","\t\t\t\t\t<?php echo $this->Form->end(array('label' => 'Editar Usuario', 'class' =>'btn btn-success')); ?>","\t\t\t\t</p>","\t\t\t<div class=\"btn-group\">","\t\t\t  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">","\t\t\t    <?php echo __('Actions'); ?> <span class=\"caret\"></span>","\t\t\t  </button>","\t\t\t  <ul class=\"dropdown-menu\" role=\"menu\">","\t\t\t\t<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>","\t\t\t\t<li><?php echo $this->Html->link(__('Listar usuarios'), array('action' => 'index')); ?></li>","\t\t\t  </ul>","\t\t\t</div>","\t\t</div>","\t</div>","</div>"]}]}],[{"group":"doc","deltas":[{"start":{"row":10,"column":7},"end":{"row":10,"column":8},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":10,"column":6},"end":{"row":10,"column":7},"action":"remove","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":10,"column":5},"end":{"row":10,"column":6},"action":"remove","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":11,"column":5},"end":{"row":11,"column":6},"action":"remove","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":11,"column":5},"end":{"row":11,"column":6},"action":"remove","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":11,"column":5},"end":{"row":11,"column":6},"action":"remove","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":10,"column":5},"end":{"row":10,"column":6},"action":"insert","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":10,"column":6},"end":{"row":10,"column":7},"action":"insert","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":10,"column":7},"end":{"row":10,"column":8},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":11,"column":5},"end":{"row":11,"column":6},"action":"insert","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":11,"column":6},"end":{"row":11,"column":7},"action":"insert","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":11,"column":7},"end":{"row":11,"column":8},"action":"insert","lines":[" "]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":11,"column":8},"end":{"row":11,"column":8},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":true,"wrapToView":true},"firstLineState":{"row":44,"mode":"ace/mode/php"}},"timestamp":1428985589831,"hash":"244a8c42997ccfb5cf7ee60c78eaebd59728958c"}