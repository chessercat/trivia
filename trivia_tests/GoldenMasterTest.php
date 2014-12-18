<?php
class GoldenMasterTest extends PHPUnit_Framework_TestCase {

    function testGenerateOutput() {
        ob_start();
        srand(1); //seed random number generator with 1 so that output is always the same for testing purposes
        require_once dirname(dirname(__FILE__)) . '/php/GameRunner.php'; //run code in this file
        $output = ob_get_contents(); //buffers output into $output variable
        ob_end_clean();

        var_dump($output);
    }
}