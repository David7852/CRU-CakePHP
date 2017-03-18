<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Miembros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contactos'), ['controller' => 'Contactos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contacto'), ['controller' => 'Contactos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Abonos'), ['controller' => 'Abonos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Abono'), ['controller' => 'Abonos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Solicitudes'), ['controller' => 'Solicitudes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Solicitud'), ['controller' => 'Solicitudes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Utilerias'), ['controller' => 'Utilerias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Utileria'), ['controller' => 'Utilerias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Funciones'), ['controller' => 'Funciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Funcion'), ['controller' => 'Funciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clases'), ['controller' => 'Clases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Clase'), ['controller' => 'Clases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coordinaciones'), ['controller' => 'Coordinaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coordinacion'), ['controller' => 'Coordinaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="miembros form large-9 medium-8 columns content">
    <?= $this->Form->create($miembro) ?>
    <fieldset>
        <legend><?= __('Add Miembro') ?></legend>
        <?php
            echo $this->Form->input('nombre_de_usuario');
            echo $this->Form->input('clave');
            echo $this->Form->input('foto');
            echo $this->Form->input('correo');
            echo $this->Form->input('fecha_de_registro', ['empty' => true]);
            echo $this->Form->input('estado');
            echo $this->Form->input('contacto_id', ['options' => $contactos, 'empty' => true]);
            echo $this->Form->input('funciones._ids', ['options' => $funciones]);
            echo $this->Form->input('clases._ids', ['options' => $clases]);
            echo $this->Form->input('coordinaciones._ids', ['options' => $coordinaciones]);
            echo $this->Form->input('cursos._ids', ['options' => $cursos]);
            echo $this->Form->input('eventos._ids', ['options' => $eventos]);
            echo $this->Form->input('grupos._ids', ['options' => $grupos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
