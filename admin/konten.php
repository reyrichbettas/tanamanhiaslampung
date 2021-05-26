<?php
if(isset($_GET['tampil'])) $tampil=$_GET['tampil'];
else if ($tampil=="menu_edit")
include("menu_edit/produk.php");
