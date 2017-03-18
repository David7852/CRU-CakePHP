<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DonacionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DonacionesTable Test Case
 */
class DonacionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DonacionesTable
     */
    public $Donaciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.donaciones',
        'app.contactos',
        'app.miembros',
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
        'app.miembros_coordinaciones',
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
        $config = TableRegistry::exists('Donaciones') ? [] : ['className' => 'App\Model\Table\DonacionesTable'];
        $this->Donaciones = TableRegistry::get('Donaciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Donaciones);

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
