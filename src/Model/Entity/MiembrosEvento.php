<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MiembrosEvento Entity
 *
 * @property int $miembro_id
 * @property int $evento_id
 * @property string $confirmacion
 *
 * @property \App\Model\Entity\Miembro $miembro
 * @property \App\Model\Entity\Evento $evento
 */
class MiembrosEvento extends Entity
{

}
