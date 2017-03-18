<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoordinacionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoordinacionesTable Test Case
 */
class CoordinacionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CoordinacionesTable
     */
    public $Coordinaciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.coordinaciones',
        'app.funciones',
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
        'app.funciones_miembros',
        'app.clases',
        'app.miembros_clases',
        'app.miembros_coordinaciones',
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
        $config = TableRegistry::exists('Coordinaciones') ? [] : ['className' => 'App\Model\Table\CoordinacionesTable'];
        $this->Coordinaciones = TableRegistry::get('Coordinaciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Coordinaciones);

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
}
