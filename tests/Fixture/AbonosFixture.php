<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AbonosFixture
 *
 */
class AbonosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'monto_abonado' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'miembro_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'balance_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'mensualidad_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'miembro_id' => ['type' => 'index', 'columns' => ['miembro_id'], 'length' => []],
            'balance_id' => ['type' => 'index', 'columns' => ['balance_id'], 'length' => []],
            'mensualidad_id' => ['type' => 'index', 'columns' => ['mensualidad_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'abonos_ibfk_1' => ['type' => 'foreign', 'columns' => ['miembro_id'], 'references' => ['miembros', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'abonos_ibfk_2' => ['type' => 'foreign', 'columns' => ['balance_id'], 'references' => ['balances', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'abonos_ibfk_3' => ['type' => 'foreign', 'columns' => ['mensualidad_id'], 'references' => ['mensualidades', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'monto_abonado' => 1,
            'miembro_id' => 1,
            'balance_id' => 1,
            'mensualidad_id' => 1
        ],
    ];
}
