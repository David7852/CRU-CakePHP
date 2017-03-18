<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $miembrosCurso->curso_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $miembrosCurso->curso_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Miembros Cursos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="miembrosCursos form large-9 medium-8 columns content">
    <?= $this->Form->create($miembrosCurso) ?>
    <fieldset>
        <legend><?= __('Edit Miembros Curso') ?></legend>
        <?php
            echo $this->Form->input('rol');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
