 <?php 
    include "koneksi.php";
        $cari=$_POST['cari'];

        // query untuk melakukan pencarian
        $query=mysql_query("SELECT * from tbl_pembayaran where nama like '%".$cari."%'");
        // mendapatkan jumlah baris
        $row=mysql_num_rows($query);

        if ($row > 0) // jika baris lebih dari 0 / data ditemukan
        {
         while ($data=mysql_fetch_array($query)) // perulangan untuk menampilkan data
         {
          // menampilkan data dalam bentuk table
          echo "<div class='table-responsive'> 

            <table class='table' >
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>".$data['nis']."</td>
                <td>".$data['nama']."</td>
                <td>".$data['kelas']."</td>
                <td>".$data['status']."</td>
            </tr>
           </table>
           </div>"; 
         }
        }
        else // jika data tidak ditemukan
        {
         echo "<strong>Data tidak ditemukan</strong>"; 
        }
        ?>