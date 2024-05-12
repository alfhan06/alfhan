<?php
// susunan file : oopmvc/index.php

// Memanggil model
require_once "model/anggota_model.php";

$anggota = getAnggota();

//Memanngil list.php untuk menampilkan data anggota
require "view/anggota/list.php";

