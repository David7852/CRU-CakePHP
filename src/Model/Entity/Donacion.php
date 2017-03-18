<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Donacion Entity
 *
 * @property int $id
 * @property float $monto
 * @property string $descripcion
 * @property string $motivo
 * @property int $institucion_id
 * @property \Cake\I18n\Time $fecha_de_realizacion
 * @property int $referente
 *
 * @property \App\Model\Entity\Contacto $contacto
 */
class Donacion extends Entity
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
