<html>
    <head> 
        <title> </title>
     
     <script type="text/javascript">
    $(document).ready(function() {
    <!-- event textbox keyup
    $("#searchbox").keyup(function() {
    var strcari = $("#searchbox").val(); /* mendapatkan nilai dari textbox */
    if (strcari != "") /* jika value strcari tidak kosong */
    {
    $("#hasil").html("<img src='images/rolling.gif'/>") /* menampilkan animasi loading */
    /* request data ke cari.php lalu menampilkan ke <div id="hasil"></div> */
    $.ajax({
     type:"post",
     url:"cari_siswa_proses.php",
     data:"cari="+ strcari,
     success: function(data){
      $("#hasil").html(data);
     }
    });
   }
    });
    });
     </script>

    </head>

    <body>
    <h1 align="center"> <label class="label label-primary"> Pencarian data siswa </label> </h1>
    <div class="table-responsive">
    <center>
    <div class="input-group" >
    <input class="form-control" type="text" name="search" id="searchbox" placeholder="Search" style="width: 500px;margin-top: 10px;"> </input> 
    </div>
    </center>
     
    <div id="hasil"> </div>

    </table>
    </div>
    </body>
    </html>