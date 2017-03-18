<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProyectosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProyectosTable Test Case
 */
class ProyectosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProyectosTable
     */
    public $Proyectos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.proyectos',
        'app.solicitudes',
        'app.miembros',
        'app.contactos',
        'app.abonos',
        'app.balances',
        'app.mensualidades',
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
        'app.miembros_grupos',
        'app.componentes',
        'app.modelos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Proyectos') ? [] : ['className' => 'App\Model\Table\ProyectosTable'];
        $this->Proyectos = TableRegistry::get('Proyectos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Proyectos);

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
