<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MiembrosCoordinacionesFixture
 *
 */
class MiembrosCoordinacionesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'miembro_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'coordinacion_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'rol' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'coordinacion_id' => ['type' => 'index', 'columns' => ['coordinacion_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['miembro_id', 'coordinacion_id'], 'length' => []],
            'miembros_coordinaciones_ibfk_1' => ['type' => 'foreign', 'columns' => ['coordinacion_id'], 'references' => ['coordinaciones', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'miembros_coordinaciones_ibfk_2' => ['type' => 'foreign', 'columns' => ['miembro_id'], 'references' => ['miembros', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'miembro_id' => 1,
            'coordinacion_id' => 1,
            'rol' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
