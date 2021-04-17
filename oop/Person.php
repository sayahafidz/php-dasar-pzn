<?php

// belajar mengenai class dan object
// membuat class
// ini adalah contoh pembuatan class
class Person {
    // mengakses constant harus dengan class
    const AUTHOR = 'hafidz';

    // membuat properties
    // dengan type declaration
    // membuat properties dimulai dengan var
    // nullable variabel dideklarasikan didepan tipe data dengan '?'
    var string $name;
    var  ? string $address = null;
    var string $country = 'indonesia';

    //konstruktor adalah fungsi yang dipanggil saat pertama kali membuat objek
    function __construct(string $name, ?string $address) {
        $this->name = $name;
        $this->address = $address;
    }

    // fungsi didalam objek
    function sayhallo(?string $name) {
        if (is_null($name)) {
            echo "hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "hallo $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info() {
        //cara mengakses constant di dalam class yang sama menggunakan self
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    //destructor adalah fungsi yang dipangil untuk menghapus fungsi setelah program selesai
    function __destruct() {
        echo "object person $this->name is destroyed" . PHP_EOL;
    }
}
