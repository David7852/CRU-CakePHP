<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MiembrosCursosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MiembrosCursosTable Test Case
 */
class MiembrosCursosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MiembrosCursosTable
     */
    public $MiembrosCursos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.miembros_cursos',
        'app.cursos',
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
        'app.miembros_coordinaciones',
        'app.funciones_miembros',
        'app.clases',
        'app.miembros_clases',
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
        $config = TableRegistry::exists('MiembrosCursos') ? [] : ['className' => 'App\Model\Table\MiembrosCursosTable'];
        $this->MiembrosCursos = TableRegistry::get('MiembrosCursos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MiembrosCursos);

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
