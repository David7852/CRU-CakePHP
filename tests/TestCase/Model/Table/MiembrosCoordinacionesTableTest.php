<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MiembrosCoordinacionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MiembrosCoordinacionesTable Test Case
 */
class MiembrosCoordinacionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MiembrosCoordinacionesTable
     */
    public $MiembrosCoordinaciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.miembros_coordinaciones',
        'app.miembros',
        'app.contactos',
        'app.abonos',
        'app.balances',
        'app.mensualidades',
        'app.solicitudes',
        'app.proyectos',
        'app.componentes',
        'app.modelos',
        'app.utilerias',
        'app.eventos',
        'app.miembros_eventos',
        'app.funciones',
        'app.coordinaciones',
        'app.funciones_miembros',
        'app.clases',
        'app.miembros_clases',
        'app.cursos',
        'app.miembros_cursos',
        'app.grupos',
        'app.miembros_grupos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MiembrosCoordinaciones') ? [] : ['className' => 'App\Model\Table\MiembrosCoordinacionesTable'];
        $this->MiembrosCoordinaciones = TableRegistry::get('MiembrosCoordinaciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MiembrosCoordinaciones);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
