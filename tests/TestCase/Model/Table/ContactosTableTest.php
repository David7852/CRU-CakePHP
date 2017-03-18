<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactosTable Test Case
 */
class ContactosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactosTable
     */
    public $Contactos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Contactos') ? [] : ['className' => 'App\Model\Table\ContactosTable'];
        $this->Contactos = TableRegistry::get('Contactos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contactos);

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
