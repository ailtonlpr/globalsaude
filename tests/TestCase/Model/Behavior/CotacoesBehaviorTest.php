<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\CotacoesBehavior;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\CotacoesBehavior Test Case
 */
class CotacoesBehaviorTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Behavior\CotacoesBehavior
     */
    public $Cotacoes;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Cotacoes = new CotacoesBehavior();
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
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
