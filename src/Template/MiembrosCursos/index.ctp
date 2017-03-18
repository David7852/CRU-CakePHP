<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Miembros Curso'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="miembrosCursos index large-9 medium-8 columns content">
    <h3><?= __('Miembros Cursos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('curso_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('miembro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rol') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($miembrosCursos as $miembrosCurso): ?>
            <tr>
                <td><?= $miembrosCurso->has('curso') ? $this->Html->link($miembrosCurso->curso->id, ['controller' => 'Cursos', 'action' => 'view', $miembrosCurso->curso->id]) : '' ?></td>
                <td><?= $miembrosCurso->has('miembro') ? $this->Html->link($miembrosCurso->miembro->id, ['controller' => 'Miembros', 'action' => 'view', $miembrosCurso->miembro->id]) : '' ?></td>
                <td><?= h($miembrosCurso->rol) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $miembrosCurso->curso_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $miembrosCurso->curso_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $miembrosCurso->curso_id], ['confirm' => __('Are you sure you want to delete # {0}?', $miembrosCurso->curso_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
