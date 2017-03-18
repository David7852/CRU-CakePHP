<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventosTable Test Case
 */
class EventosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EventosTable
     */
    public $Eventos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.eventos',
        'app.utilerias',
        'app.miembros',
        'app.contactos',
        'app.abonos',
        'app.balances',
        'app.mensualidades',
        'app.solicitudes',
        'app.proyectos',
        'app.componentes',
        'app.modelos',
        'app.funciones',
        'app.coordinaciones',
        'app.miembros_coordinaciones',
        'app.funciones_miembros',
        'app.clases',
        'app.miembros_clases',
        'app.cursos',
        'app.miembros_cursos',
        'app.miembros_eventos',
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
        $config = TableRegistry::exists('Eventos') ? [] : ['className' => 'App\Model\Table\EventosTable'];
        $this->Eventos = TableRegistry::get('Eventos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Eventos);

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
