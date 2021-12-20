<?php

    function test(){
        echo func_num_args()."<br>"; // Fonksiyona kaç adet parametre geldiğini sayar.
        print_r(func_get_args())."<br>"; // Fonksiyondaki parametreleri dizi içerisine alır.
        echo func_get_arg(2)."<br>"; // Parametrelere no ile erişim sağlar.
    }

    test("Veysel","Taha","Doğukan","Samet");

?>