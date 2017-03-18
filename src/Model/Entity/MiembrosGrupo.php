<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MiembrosGrupo Entity
 *
 * @property int $miembro_id
 * @property int $grupo_id
 * @property string $rol
 *
 * @property \App\Model\Entity\Miembro $miembro
 * @property \App\Model\Entity\Grupo $grupo
 */
class MiembrosGrupo extends Entity
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
        'miembro_id' => false,
        'grupo_id' => false
    ];
}
