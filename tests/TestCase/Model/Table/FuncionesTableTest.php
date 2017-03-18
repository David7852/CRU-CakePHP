<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FuncionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FuncionesTable Test Case
 */
class FuncionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FuncionesTable
     */
    public $Funciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.funciones',
        'app.coordinaciones',
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
        $config = TableRegistry::exists('Funciones') ? [] : ['className' => 'App\Model\Table\FuncionesTable'];
        $this->Funciones = TableRegistry::get('Funciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Funciones);

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
