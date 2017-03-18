<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Componente Entity
 *
 * @property int $id
 * @property int $modelo_id
 * @property string $observacion
 * @property string $dato
 *
 * @property \App\Model\Entity\Modelo $modelo
 * @property \App\Model\Entity\Solicitud[] $solicitudes
 */
class Componente extends Entity
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
