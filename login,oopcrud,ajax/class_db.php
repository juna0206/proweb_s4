<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "unpku");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;

    $id =
    $npm = $data["npm"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $prodi = htmlspecialchars($data["prodi"]);



    $query = "INSERT INTO mahasiswa
                VALUE
            ('$id', '$npm', '$nama', '$alamat', '$prodi')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}






function hapus($id) {
    global $conn;
    mysqli_query( $conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $npm = htmlspecialchars($data["npm"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $prodi = htmlspecialchars($data["prodi"]);


    $query = "UPDATE mahasiswa SET 
            nama ='$nama', npm = '$npm', alamat = '$alamat', prodi = '$prodi'
            WHERE id = $id 
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function cari($keyword) {
    $query = "SELECT * FROM mahasiswa
                WHERE
                nama LIKE '%$keyword%'OR 
                npm LIKE '%$keyword%'OR
                alamat LIKE '%$keyword%'OR
                prodi LIKE '%$keyword%'
                ";
    return query($query);
}

?>