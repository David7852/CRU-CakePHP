<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Miembros Curso'), ['action' => 'edit', $miembrosCurso->curso_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Miembros Curso'), ['action' => 'delete', $miembrosCurso->curso_id], ['confirm' => __('Are you sure you want to delete # {0}?', $miembrosCurso->curso_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Miembros Cursos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Miembros Curso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="miembrosCursos view large-9 medium-8 columns content">
    <h3><?= h($miembrosCurso->curso_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Curso') ?></th>
            <td><?= $miembrosCurso->has('curso') ? $this->Html->link($miembrosCurso->curso->id, ['controller' => 'Cursos', 'action' => 'view', $miembrosCurso->curso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Miembro') ?></th>
            <td><?= $miembrosCurso->has('miembro') ? $this->Html->link($miembrosCurso->miembro->id, ['controller' => 'Miembros', 'action' => 'view', $miembrosCurso->miembro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rol') ?></th>
            <td><?= h($miembrosCurso->rol) ?></td>
        </tr>
    </table>
</div>
