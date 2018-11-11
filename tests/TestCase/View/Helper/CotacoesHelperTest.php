<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\CotacoesHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\CotacoesHelper Test Case
 */
class CotacoesHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\CotacoesHelper
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
        $view = new View();
        $this->Cotacoes = new CotacoesHelper($view);
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
