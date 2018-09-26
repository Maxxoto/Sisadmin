<html>
    <head> 
        <title> </title>

    </head>

    <body>
    <div class="table-responsive">

    
    <a class="btn btn-success" href="tambah_pembayaran.php" style="float: left;">Tambah Siswa &nbsp; <span class="glyphicon glyphicon-plus"></span></a>
    
   

    <table class="table">
    <thead>
        <tr>
            <th> No </th>
            <th> NIS </th>
            <th> Nama </th>
            <th> Kelas </th>
            <th> Status </th>
            <th> Opsi </th>
        </tr>

    </thead>

    <tbody>

        <?php 
        $query = "SELECT * from tbl_pembayaran order by nis " ;
        $sql = mysql_query($query);
        $no = 1 ;
        while ($data=mysql_fetch_array($sql)) {
        ?>

        

        <tr>
            <td> <?php echo $no?> </td>
            <td> <?php echo $data ['nis']; ?> </td>
            <td> <?php echo $data ['nama']; ?> </td>
            <td> <?php echo $data ['kelas']; ?> </td>
            <td> <?php echo $data ['status']; ?> </td>
            <td> <a class="btn btn-primary" href="edit_pembayaran.php?nis=<?php echo $data['nis']; ?>" > <span class="glyphicon glyphicon-pencil">
            </span> </a>&nbsp;

                 <a class="btn btn-danger" href="hapus_pembayaran.php?nis=<?php echo $data['nis']; ?>" onClick = "return confirm('Apakah anda ingin menghapus data bernama <?php echo $data ['nama'] ?> ?') ">
                 
                 <span class="glyphicon glyphicon-trash">
                 </span> </a>
            </td> 
        </tr>
        <?php $no++; } ?>
        

    </tbody>
    


    </table>
    </div>
    </body>
    </html>