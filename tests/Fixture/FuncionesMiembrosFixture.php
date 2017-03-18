<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FuncionesMiembrosFixture
 *
 */
class FuncionesMiembrosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'funcion_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'miembro_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'miembro_id' => ['type' => 'index', 'columns' => ['miembro_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['funcion_id', 'miembro_id'], 'length' => []],
            'funciones_miembros_ibfk_1' => ['type' => 'foreign', 'columns' => ['funcion_id'], 'references' => ['funciones', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'funciones_miembros_ibfk_2' => ['type' => 'foreign', 'columns' => ['miembro_id'], 'references' => ['miembros', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
            'funcion_id' => 1,
            'miembro_id' => 1
        ],
    ];
}
