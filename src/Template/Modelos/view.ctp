<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Modelo'), ['action' => 'edit', $modelo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Modelo'), ['action' => 'delete', $modelo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modelo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Modelos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modelo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Componentes'), ['controller' => 'Componentes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Componente'), ['controller' => 'Componentes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="modelos view large-9 medium-8 columns content">
    <h3><?= h($modelo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($modelo->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modelo') ?></th>
            <td><?= h($modelo->modelo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Abstracto') ?></th>
            <td><?= h($modelo->abstracto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Documentacion') ?></th>
            <td><?= h($modelo->documentacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($modelo->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($modelo->descripcion)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Componentes') ?></h4>
        <?php if (!empty($modelo->componentes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Modelo Id') ?></th>
                <th scope="col"><?= __('Observacion') ?></th>
                <th scope="col"><?= __('Dato') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($modelo->componentes as $componentes): ?>
            <tr>
                <td><?= h($componentes->id) ?></td>
                <td><?= h($componentes->modelo_id) ?></td>
                <td><?= h($componentes->observacion) ?></td>
                <td><?= h($componentes->dato) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Componentes', 'action' => 'view', $componentes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Componentes', 'action' => 'edit', $componentes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Componentes', 'action' => 'delete', $componentes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $componentes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
