<?php

include 'index.php';
include 'fileTwo.php';
class One extends Two {
    final public function functionOne() {
        return 'This is function One';
    }
}
?>