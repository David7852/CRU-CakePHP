<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BalancesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BalancesTable Test Case
 */
class BalancesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BalancesTable
     */
    public $Balances;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.balances',
        'app.abonos',
        'app.miembros',
        'app.contactos',
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
        'app.miembros_grupos',
        'app.mensualidades'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Balances') ? [] : ['className' => 'App\Model\Table\BalancesTable'];
        $this->Balances = TableRegistry::get('Balances', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Balances);

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
