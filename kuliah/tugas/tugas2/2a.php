<?php

$ nama_depan = " Akbar ";
$ nama_belakang = " Abdi ";

untuk ( $ i = 1 ; $ i <= 100 ; $ i ++) {
    jika ( $ i % 3 == 0 && $ i %   5 == 0 ) {
        gema  $ nama_depan . "  " . $ nama_belakang   . " <br> ";
    } elseif ( $ i % 3 == 0 ) {
        gema  $ nama_depan . " <br> ";
    } elseif ( $ i % 5 == 0 ) {
        echo  $ nama_belakang . " <br> ";
    } lain {
        gema  $ i . " <br> ";
    }
}