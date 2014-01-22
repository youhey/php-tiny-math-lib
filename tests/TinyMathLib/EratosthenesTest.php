<?php
/**
 * Collection of tiny mathematical functions.
 *
 * PHP 5 >= 5.3.0
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice
 *
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

namespace TinyMathLib\Test;

use TinyMathLib\Eratosthenes;

/**
 * Eratosthenes クラスのテスト
 */
class EratosthenesTest extends \PHPUnit_Framework_TestCase {

    // testcase {{{

    /** @test */
    public function データなしの次LVは1() {
        $expected = array(  2,   3,   5,   7,  11,
                           13,  17,  19,  23,  29,
                           31,  37,  41,  43,  47,
                           53,  59,  61,  67,  71,
                           73,  79,  83,  89,  97,
                          101, 103, 107, 109, 113);
        $result   = Eratosthenes::primes(120);
        $this->assertEquals($expected, $result);
    }

    // }}}
}
