<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Solicitud Entity
 *
 * @property int $id
 * @property string $motivo
 * @property \Cake\I18n\Time $fecha_solicitud
 * @property int $proyecto_id
 * @property int $miembro_id
 * @property int $componente_id
 * @property string $estado
 *
 * @property \App\Model\Entity\Proyecto $proyecto
 * @property \App\Model\Entity\Miembro $miembro
 * @property \App\Model\Entity\Componente $componente
 */
class Solicitud extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
