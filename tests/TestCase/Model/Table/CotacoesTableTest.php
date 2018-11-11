<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CotacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CotacoesTable Test Case
 */
class CotacoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CotacoesTable
     */
    public $Cotacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cotacoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cotacoes') ? [] : ['className' => CotacoesTable::class];
        $this->Cotacoes = TableRegistry::getTableLocator()->get('Cotacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cotacoes);

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
