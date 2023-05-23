<?php
    $dta[0]["nama"] = "Putu Agus Hendrawan";
    $dta[0]["alamat"] = "Jln Utama 5 Blok A17";
    $dta[0]["tgl_lahir"] = "2002-08-03";

    $dta[1]["nama"] = "Luh Putu Dian Sariani";
    $dta[1]["alamat"] = "Jln Pura Puseh,Br.Denjalan";
    $dta[1]["tgl_lahir"] = "2004-05-11";

    $dta[2]["nama"] = "Luh Natih Anamaya Santi";
    $dta[2]["alamat"] = "Jln Utama 2 Blok A11";
    $dta[2]["tgl_lahir"] = "2003-12-18";

    $dta[3]["nama"] = "Ni Kadek Juni Antari";
    $dta[3]["alamat"] = "Jln Utama 3 Blok A01";
    $dta[3]["tgl_lahir"] = "2004-06-03";

    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($dta);