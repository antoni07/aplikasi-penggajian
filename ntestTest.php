<?php
require_once 'index.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * ntest test case.
 */
class ntestTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var ntest
     */
    private $ntest;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated ntestTest::setUp()
        
        $this->ntest = new ntest(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated ntestTest::tearDown()
        $this->ntest = null;
        
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests ntest->hitung_gaji()
     */
    public function testHitung_gaji()
    {
        // TODO Auto-generated ntestTest->testHitung_gaji()
        $this->markTestIncomplete("hitung_gaji test not implemented");
        
        $this->ntest->hitung_gaji(/* parameters */);
    }

    /**
     * Tests ntest->tanya()
     */
    public function testTanya()
    {
        // TODO Auto-generated ntestTest->testTanya()
        $this->markTestIncomplete("tanya test not implemented");
        
        $this->ntest->tanya(/* parameters */);
    }
}

