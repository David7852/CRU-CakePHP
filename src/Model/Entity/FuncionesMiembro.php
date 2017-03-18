<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FuncionesMiembro Entity
 *
 * @property int $funcion_id
 * @property int $miembro_id
 *
 * @property \App\Model\Entity\Funcion $funcion
 * @property \App\Model\Entity\Miembro $miembro
 */
class FuncionesMiembro extends Entity
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
        'funcion_id' => false,
        'miembro_id' => false
    ];
}
