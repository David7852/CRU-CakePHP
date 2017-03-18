<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FuncionesMiembrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FuncionesMiembrosTable Test Case
 */
class FuncionesMiembrosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FuncionesMiembrosTable
     */
    public $FuncionesMiembros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.funciones_miembros',
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
        $config = TableRegistry::exists('FuncionesMiembros') ? [] : ['className' => 'App\Model\Table\FuncionesMiembrosTable'];
        $this->FuncionesMiembros = TableRegistry::get('FuncionesMiembros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FuncionesMiembros);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
