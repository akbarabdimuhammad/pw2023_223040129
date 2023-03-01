<!DOCTYPE html >
< html  lang =" en " >

<kepala> _ _
    < meta  charset =" UTF-8 " >
    < meta  http-equiv =" Kompatibel dengan X-UA " konten =" IE=edge " >
    < meta  name =" viewport " content =" width=device-width, initial-scale=1.0 " >
    < judul > tugas 2 </ judul >
</kepala> _ _
<gaya> _ _
    tubuh {
        font-family : arial;
    }

    . table-utama {
        batas :  1 px hitam pekat;
    }

    . latar belakang {
        background-color : hitam;
        lebar :  60 piksel ;
        tinggi :  60 piksel ;
        batas :  3 px hitam pekat;
    }

    . latar belakang-2 {
        background-color : putih;
        lebar :  60 piksel ;
        tinggi :  60 piksel ;
    }
</ gaya >

<tubuh> _ _

    < kelas tabel  =" tabel-utama " cellpadding =" 10 " cellspacing =" 0 " >
        <?php untuk ( $ i = 1 ; $ i <= 5 ; $ i ++) : ?>
            <tr> _ _
                <?php untuk ( $ j = 1 ; $ j <= 5 ; $ j ++) : ?>
                    <?php  jika (( $ i + $ j ) % 2 == 0 ) : ?>
                        < td  kelas =" latar belakang " >
                        <?php  lain : ?>
                        < kelas td  =" latar belakang-2 " >
                        <?php  endif ; ?>
                        </td> _ _
                    <?php endfor; ?>
            </tr> _ _
        <?php endfor; ?>


    </meja> _ _

</tubuh> _ _

</html> _ _