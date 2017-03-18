<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Componente'), ['action' => 'edit', $componente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Componente'), ['action' => 'delete', $componente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $componente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Componentes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Componente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modelos'), ['controller' => 'Modelos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modelo'), ['controller' => 'Modelos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Solicitudes'), ['controller' => 'Solicitudes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Solicitud'), ['controller' => 'Solicitudes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="componentes view large-9 medium-8 columns content">
    <h3><?= h($componente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Modelo') ?></th>
            <td><?= $componente->has('modelo') ? $this->Html->link($componente->modelo->id, ['controller' => 'Modelos', 'action' => 'view', $componente->modelo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observacion') ?></th>
            <td><?= h($componente->observacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dato') ?></th>
            <td><?= h($componente->dato) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($componente->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Solicitudes') ?></h4>
        <?php if (!empty($componente->solicitudes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Motivo') ?></th>
                <th scope="col"><?= __('Fecha Solicitud') ?></th>
                <th scope="col"><?= __('Proyecto Id') ?></th>
                <th scope="col"><?= __('Miembro Id') ?></th>
                <th scope="col"><?= __('Componente Id') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($componente->solicitudes as $solicitudes): ?>
            <tr>
                <td><?= h($solicitudes->id) ?></td>
                <td><?= h($solicitudes->motivo) ?></td>
                <td><?= h($solicitudes->fecha_solicitud) ?></td>
                <td><?= h($solicitudes->proyecto_id) ?></td>
                <td><?= h($solicitudes->miembro_id) ?></td>
                <td><?= h($solicitudes->componente_id) ?></td>
                <td><?= h($solicitudes->estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Solicitudes', 'action' => 'view', $solicitudes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Solicitudes', 'action' => 'edit', $solicitudes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Solicitudes', 'action' => 'delete', $solicitudes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
