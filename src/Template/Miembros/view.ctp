<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Miembro'), ['action' => 'edit', $miembro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Miembro'), ['action' => 'delete', $miembro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $miembro->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Miembros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Miembro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contactos'), ['controller' => 'Contactos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contacto'), ['controller' => 'Contactos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Abonos'), ['controller' => 'Abonos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Abono'), ['controller' => 'Abonos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Solicitudes'), ['controller' => 'Solicitudes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Solicitud'), ['controller' => 'Solicitudes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Utilerias'), ['controller' => 'Utilerias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Utileria'), ['controller' => 'Utilerias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Funciones'), ['controller' => 'Funciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcion'), ['controller' => 'Funciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clases'), ['controller' => 'Clases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Clase'), ['controller' => 'Clases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coordinaciones'), ['controller' => 'Coordinaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coordinacion'), ['controller' => 'Coordinaciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="miembros view large-9 medium-8 columns content">
    <h3><?= h($miembro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre De Usuario') ?></th>
            <td><?= h($miembro->nombre_de_usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Clave') ?></th>
            <td><?= h($miembro->clave) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foto') ?></th>
            <td><?= h($miembro->foto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo') ?></th>
            <td><?= h($miembro->correo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($miembro->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contacto') ?></th>
            <td><?= $miembro->has('contacto') ? $this->Html->link($miembro->contacto->id, ['controller' => 'Contactos', 'action' => 'view', $miembro->contacto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($miembro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha De Registro') ?></th>
            <td><?= h($miembro->fecha_de_registro) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Abonos') ?></h4>
        <?php if (!empty($miembro->abonos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Monto Abonado') ?></th>
                <th scope="col"><?= __('Miembro Id') ?></th>
                <th scope="col"><?= __('Balance Id') ?></th>
                <th scope="col"><?= __('Mensualidad Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($miembro->abonos as $abonos): ?>
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
    <div class="related">
        <h4><?= __('Related Solicitudes') ?></h4>
        <?php if (!empty($miembro->solicitudes)): ?>
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
            <?php foreach ($miembro->solicitudes as $solicitudes): ?>
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
    <div class="related">
        <h4><?= __('Related Utilerias') ?></h4>
        <?php if (!empty($miembro->utilerias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Evento Id') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col"><?= __('Miembro Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($miembro->utilerias as $utilerias): ?>
            <tr>
                <td><?= h($utilerias->id) ?></td>
                <td><?= h($utilerias->evento_id) ?></td>
                <td><?= h($utilerias->estado) ?></td>
                <td><?= h($utilerias->miembro_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Utilerias', 'action' => 'view', $utilerias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Utilerias', 'action' => 'edit', $utilerias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Utilerias', 'action' => 'delete', $utilerias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utilerias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Funciones') ?></h4>
        <?php if (!empty($miembro->funciones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Coordinacion Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($miembro->funciones as $funciones): ?>
            <tr>
                <td><?= h($funciones->id) ?></td>
                <td><?= h($funciones->nombre) ?></td>
                <td><?= h($funciones->coordinacion_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Funciones', 'action' => 'view', $funciones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Funciones', 'action' => 'edit', $funciones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Funciones', 'action' => 'delete', $funciones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funciones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Clases') ?></h4>
        <?php if (!empty($miembro->clases)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tema') ?></th>
                <th scope="col"><?= __('Horario') ?></th>
                <th scope="col"><?= __('Costo') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($miembro->clases as $clases): ?>
            <tr>
                <td><?= h($clases->id) ?></td>
                <td><?= h($clases->tema) ?></td>
                <td><?= h($clases->horario) ?></td>
                <td><?= h($clases->costo) ?></td>
                <td><?= h($clases->estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Clases', 'action' => 'view', $clases->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Clases', 'action' => 'edit', $clases->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clases', 'action' => 'delete', $clases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clases->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Coordinaciones') ?></h4>
        <?php if (!empty($miembro->coordinaciones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($miembro->coordinaciones as $coordinaciones): ?>
            <tr>
                <td><?= h($coordinaciones->id) ?></td>
                <td><?= h($coordinaciones->nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Coordinaciones', 'action' => 'view', $coordinaciones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Coordinaciones', 'action' => 'edit', $coordinaciones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Coordinaciones', 'action' => 'delete', $coordinaciones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordinaciones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cursos') ?></h4>
        <?php if (!empty($miembro->cursos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tema') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Lugar') ?></th>
                <th scope="col"><?= __('Costo') ?></th>
                <th scope="col"><?= __('Duracion') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($miembro->cursos as $cursos): ?>
            <tr>
                <td><?= h($cursos->id) ?></td>
                <td><?= h($cursos->tema) ?></td>
                <td><?= h($cursos->fecha) ?></td>
                <td><?= h($cursos->lugar) ?></td>
                <td><?= h($cursos->costo) ?></td>
                <td><?= h($cursos->duracion) ?></td>
                <td><?= h($cursos->estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cursos', 'action' => 'view', $cursos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cursos', 'action' => 'edit', $cursos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cursos', 'action' => 'delete', $cursos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cursos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Eventos') ?></h4>
        <?php if (!empty($miembro->eventos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Titulo') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Lugar') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($miembro->eventos as $eventos): ?>
            <tr>
                <td><?= h($eventos->id) ?></td>
                <td><?= h($eventos->titulo) ?></td>
                <td><?= h($eventos->fecha) ?></td>
                <td><?= h($eventos->lugar) ?></td>
                <td><?= h($eventos->estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Eventos', 'action' => 'view', $eventos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Eventos', 'action' => 'edit', $eventos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Eventos', 'action' => 'delete', $eventos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Grupos') ?></h4>
        <?php if (!empty($miembro->grupos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($miembro->grupos as $grupos): ?>
            <tr>
                <td><?= h($grupos->id) ?></td>
                <td><?= h($grupos->nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Grupos', 'action' => 'view', $grupos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Grupos', 'action' => 'edit', $grupos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Grupos', 'action' => 'delete', $grupos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grupos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
