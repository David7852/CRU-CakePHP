<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Miembros Grupo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Miembros'), ['controller' => 'Miembros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Miembro'), ['controller' => 'Miembros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="miembrosGrupos index large-9 medium-8 columns content">
    <h3><?= __('Miembros Grupos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('miembro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grupo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rol') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($miembrosGrupos as $miembrosGrupo): ?>
            <tr>
                <td><?= $miembrosGrupo->has('miembro') ? $this->Html->link($miembrosGrupo->miembro->id, ['controller' => 'Miembros', 'action' => 'view', $miembrosGrupo->miembro->id]) : '' ?></td>
                <td><?= $miembrosGrupo->has('grupo') ? $this->Html->link($miembrosGrupo->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $miembrosGrupo->grupo->id]) : '' ?></td>
                <td><?= h($miembrosGrupo->rol) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $miembrosGrupo->miembro_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $miembrosGrupo->miembro_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $miembrosGrupo->miembro_id], ['confirm' => __('Are you sure you want to delete # {0}?', $miembrosGrupo->miembro_id)]) ?>
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
