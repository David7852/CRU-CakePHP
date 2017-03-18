<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SolicitudesFixture
 *
 */
class SolicitudesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'motivo' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'fecha_solicitud' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'proyecto_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'miembro_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'componente_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estado' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'proyecto_id' => ['type' => 'index', 'columns' => ['proyecto_id'], 'length' => []],
            'miembro_id' => ['type' => 'index', 'columns' => ['miembro_id'], 'length' => []],
            'componente_id' => ['type' => 'index', 'columns' => ['componente_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'solicitudes_ibfk_1' => ['type' => 'foreign', 'columns' => ['proyecto_id'], 'references' => ['proyectos', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'solicitudes_ibfk_2' => ['type' => 'foreign', 'columns' => ['miembro_id'], 'references' => ['miembros', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'solicitudes_ibfk_3' => ['type' => 'foreign', 'columns' => ['componente_id'], 'references' => ['componentes', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'motivo' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'fecha_solicitud' => '2017-03-14',
            'proyecto_id' => 1,
            'miembro_id' => 1,
            'componente_id' => 1,
            'estado' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
