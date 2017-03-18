<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Balance'), ['action' => 'edit', $balance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Balance'), ['action' => 'delete', $balance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $balance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Balances'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Balance'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Abonos'), ['controller' => 'Abonos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Abono'), ['controller' => 'Abonos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="balances view large-9 medium-8 columns content">
    <h3><?= h($balance->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($balance->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Balance General') ?></th>
            <td><?= $this->Number->format($balance->balance_general) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio') ?></th>
            <td><?= h($balance->fecha_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha De Cierre') ?></th>
            <td><?= h($balance->fecha_de_cierre) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Abonos') ?></h4>
        <?php if (!empty($balance->abonos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Monto Abonado') ?></th>
                <th scope="col"><?= __('Miembro Id') ?></th>
                <th scope="col"><?= __('Balance Id') ?></th>
                <th scope="col"><?= __('Mensualidad Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($balance->abonos as $abonos): ?>
            <tr>
                <td><?= h($abonos->id) ?></td>
                <td><?= h($abonos->monto_abonado) ?></td>
                <td><?= h($abonos->miembro_id) ?></td>
                <td><?= h($abonos->balance_id) ?></td>
                <td><?= h($abonos->mensualidad_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Abonos', 'action' => 'view', $abonos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Abonos', 'action' => 'edit', $abonos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Abonos', 'action' => 'delete', $abonos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $abonos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
