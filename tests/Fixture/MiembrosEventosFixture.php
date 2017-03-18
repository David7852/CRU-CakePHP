<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MiembrosEventosFixture
 *
 */
class MiembrosEventosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'miembro_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'evento_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'confirmacion' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'evento_id' => ['type' => 'index', 'columns' => ['evento_id'], 'length' => []],
            'miembro_id' => ['type' => 'index', 'columns' => ['miembro_id'], 'length' => []],
        ],
        '_constraints' => [
            'miembros_eventos_ibfk_1' => ['type' => 'foreign', 'columns' => ['evento_id'], 'references' => ['eventos', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'miembros_eventos_ibfk_2' => ['type' => 'foreign', 'columns' => ['miembro_id'], 'references' => ['miembros', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
            'evento_id' => 1,
            'confirmacion' => 'Lorem ipsum d'
        ],
    ];
}
