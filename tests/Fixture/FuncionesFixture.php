<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FuncionesFixture
 *
 */
class FuncionesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 75, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'coordinacion_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'coordinacion_id' => ['type' => 'index', 'columns' => ['coordinacion_id'], 'length' => []],
            'coordinacion_id_2' => ['type' => 'index', 'columns' => ['coordinacion_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'funciones_ibfk_1' => ['type' => 'foreign', 'columns' => ['coordinacion_id'], 'references' => ['coordinaciones', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'funciones_ibfk_2' => ['type' => 'foreign', 'columns' => ['coordinacion_id'], 'references' => ['coordinaciones', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'id' => 1,
            'nombre' => 'Lorem ipsum dolor sit amet',
            'coordinacion_id' => 1
        ],
    ];
}
