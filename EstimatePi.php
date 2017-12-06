<?php
/**
 * Created by PhpStorm.
 * User: michelle.foy
 * Date: 2017-12-05
 * Time: 8:05 PM
 */

class EstimatePi {

    function get_distance($x, $y) {
        return sqrt(pow($x, 2) + pow($y, 2));
    }

    function estimate_pi($times) {
        $pi = $this->estimate_pi_r($times, 0, 0, 0);

        echo gettype($pi);

        echo "Estimation of Pi using " . $times . " samples: " . $pi;

    }

    function estimate_pi_r($times, $count, $inside, $total) {
        while ($count < $times) {
            $x = $this->get_random();
            $y = $this->get_random();
            $dist = $this->get_distance($x, $y);

            if ($dist <= 1) {
                $inside++;
            }

            $total++;
            $count++;
        }

        return 4*($inside/$total);

    }

    function get_random() {
        return (float)rand()/(float)getrandmax();
    }
}

$inst_E = new EstimatePi();
$inst_E->estimate_pi(100000);