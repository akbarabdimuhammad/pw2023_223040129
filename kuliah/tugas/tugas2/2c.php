<!DOCTYPE html >
< html  lang =" en " >

<kepala> _ _
    < meta  charset =" UTF-8 " >
    < meta  http-equiv =" Kompatibel dengan X-UA " konten =" IE=edge " >
    < meta  name =" viewport " content =" width=device-width, initial-scale=1.0 " >
    < judul > tugas-2c </ judul >
</kepala> _ _
<gaya> _ _
    tubuh {
        font-family : arial;
        font-berat : tebal;
    }

    . latar belakang {
        background-color : salmon;
        batas :  1 px hitam pekat;
        warna : hitam;
        lebar :  35 piksel ;
        tinggi :  35 piksel ;
        perataan teks : tengah;
    }
</ gaya >

<tubuh> _ _

    < table  cellpadding =" 10 " cellspacing =" 0 " >
        <?php untuk ( $ i = 10 ; $ i >= 1 ; $ i --) : ?>
            <tr> _ _
                <?php untuk ( $ j = 1 ; $ j <= $ i ; $ j ++) : ?>
                    < td  kelas =" latar belakang " >  <?= " $ j "; ? > </td> _
                <?php endfor; ?>
            </tr> _ _
        <?php endfor; ?>


    </meja> _ _

</tubuh> _ _

</html> _ _