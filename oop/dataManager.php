<?php
class Manager {
    var string $name;

    // void digunakan untuk fungsi yang tidak mereturn nilai apapun
    function sayhallo(string $name): void {
        echo "hi $name, my name is $this->name " . PHP_EOL;
    }
}

// mewariskan kelas parent kepada kelas child menggunakan extends
class VicePresident extends Manager {

}