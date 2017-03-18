<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * Miembro Entity
 *
 * @property int $id
 * @property string $nombre_de_usuario
 * @property string $clave
 * @property string $foto
 * @property string $correo
 * @property \Cake\I18n\Time $fecha_de_registro
 * @property string $estado
 * @property int $contacto_id
 *
 * @property \App\Model\Entity\Contacto $contacto
 * @property \App\Model\Entity\Abono[] $abonos
 * @property \App\Model\Entity\Solicitud[] $solicitudes
 * @property \App\Model\Entity\Utileria[] $utilerias
 * @property \App\Model\Entity\Funcion[] $funciones
 * @property \App\Model\Entity\Clase[] $clases
 * @property \App\Model\Entity\Coordinacion[] $coordinaciones
 * @property \App\Model\Entity\Curso[] $cursos
 * @property \App\Model\Entity\Evento[] $eventos
 * @property \App\Model\Entity\Grupo[] $grupos
 */
class Miembro extends Entity
{
    protected function _setClave($value)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }

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
