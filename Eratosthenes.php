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
namespace TinyMathLib;

/** エラトステネスの篩 */
class Eratosthenes {

    /**
     * 指定した整数以下の素数を全て返却
     *
     * <p>落ちつけ…………心を平静にして考えるんだ…こんな時どうするか……<br>
     * 2…3、5…7…1…13…17……19。
     * 落ちつくんだ…『素数』を数えて落ちつくんだ…
     * 『素数』は１と自分の数でしか割ることのできない孤独な数字……
     * わたしに勇気を与えてくれる。</p>
     *
     * @param int 検索する整数の上限値
     * @return array 発見した素数のリスト
     * @see http://ja.wikipedia.org/wiki/%E3%82%A8%E3%83%A9%E3%83%88%E3%82%B9%E3%83%86%E3%83%8D%E3%82%B9%E3%81%AE%E7%AF%A9
     */
    public static function primes($n) {
        $primeBits = array();
        for ($i = 0, $l = (int)$n; $i < $l; $i++) {
            $primeBits[$i] = true;
        }
        $primeBits[0] = false;

        $sqrt = (int)sqrt((float)$n);
        for ($i = 1; $i < $sqrt; $i++) {
            if ($primeBits[$i]) {
                for ($j = ($i + 1), $l = (int)$n; (($i + 1) * $j) <= $l; $j++) {
                    // 素数の倍数 = 合成数（非素数）
                    $index = ((($i + 1) * $j) - 1);
                    $primeBits[$index] = false;
                }
            }
        }

        $primes = array();
        for ($i = 0, $l = (int)$n; $i < $l; $i++) {
            if ($primeBits[$i]) {
                $primes[] = ($i + 1);
            }
        }

        return $primes;
    }
}
