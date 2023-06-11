<?php

if(isset($_POST['search'])) 
  include "koneksi.php";
  $no=1;
  $search = $_POST['search'];
  $ambildata = mysqli_query($conn, "SELECT * FROM tb_user WHERE firstname LIKE '%".$search."%' OR
  lastname LIKE '%".$search."%' OR username LIKE '%".$search."%' OR password LIKE '%".$search."%' ");
  while($tampil = mysqli_fetch_array($ambildata)) 

    
    {
      echo 
      "<tr>
      <td>$no</td>
      <td>$tampil[firstname]</td>
      <td>$tampil[lastname]</td>
      <td>$tampil[username]</td>
        <td>$tampil[password]</td>
        <td><a href='datauser.php?kode=$tampil[username]'>hapus</a></td>
        <td><a href='ubah.php?    kode=$tampil[username]'>ubah</a></td>
        <tr>";
        $no++;
      }
      ?>

<?php