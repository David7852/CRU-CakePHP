<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Abono Entity
 *
 * @property int $id
 * @property float $monto_abonado
 * @property int $miembro_id
 * @property int $balance_id
 * @property int $mensualidad_id
 *
 * @property \App\Model\Entity\Miembro $miembro
 * @property \App\Model\Entity\Balance $balance
 * @property \App\Model\Entity\Mensualidad $mensualidad
 */
class Abono extends Entity
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
