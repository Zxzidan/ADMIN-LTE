<?php
include 'koneksi.php';

// Ambil aksi dari parameter GET
$act = isset($_GET['act']) ? $_GET['act'] : '';

if ($act == 'insert_dosen') {
    $nip = isset($_POST['nip']) ? trim($_POST['nip']) : '';
    $nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
    $jk_code = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
    $jk = ($jk_code == 'L') ? 'Laki-laki' : 'Perempuan';
    
    $prodi_code = isset($_POST['prodi']) ? $_POST['prodi'] : '';
    $prodi = '';
    if ($prodi_code == 'TI') $prodi = 'Teknik Informatika';
    elseif ($prodi_code == 'SI') $prodi = 'Sistem Informasi';
    elseif ($prodi_code == 'MI') $prodi = 'Manajemen Informatika';
    else $prodi = $prodi_code;

    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $telepon = isset($_POST['telepon']) ? trim($_POST['telepon']) : '';
    $alamat = isset($_POST['alamat']) ? trim($_POST['alamat']) : '';
    $status = isset($_POST['status']) ? 'Aktif' : 'Tidak Aktif';

    // Query INSERT menggunakan prepared statement
    $stmt = $mysqli->prepare("INSERT INTO dosen (nip_dosen, nama_dosen, jenis_kelamin, program_studi, email, no_telepon, alamat, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssssssss", $nip, $nama, $jk, $prodi, $email, $telepon, $alamat, $status);
        if ($stmt->execute()) {
            header("Location: datadosen.php?msg=success_add");
        } else {
            header("Location: datadosen.php?msg=error_add");
        }
        $stmt->close();
    } else {
        header("Location: datadosen.php?msg=error_db");
    }
} 
elseif ($act == 'edit_dosen') {
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $nip = isset($_POST['nip']) ? trim($_POST['nip']) : '';
    $nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
    $jk_code = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
    $jk = ($jk_code == 'L' || $jk_code == 'Laki-laki') ? 'Laki-laki' : 'Perempuan';
    
    $prodi_code = isset($_POST['prodi']) ? $_POST['prodi'] : '';
    $prodi = '';
    if ($prodi_code == 'TI') $prodi = 'Teknik Informatika';
    elseif ($prodi_code == 'SI') $prodi = 'Sistem Informasi';
    elseif ($prodi_code == 'MI') $prodi = 'Manajemen Informatika';
    else $prodi = $prodi_code;

    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $telepon = isset($_POST['telepon']) ? trim($_POST['telepon']) : '';
    $alamat = isset($_POST['alamat']) ? trim($_POST['alamat']) : '';
    $status = isset($_POST['status']) ? 'Aktif' : 'Tidak Aktif';

    // Query UPDATE menggunakan prepared statement
    $stmt = $mysqli->prepare("UPDATE dosen SET nip_dosen = ?, nama_dosen = ?, jenis_kelamin = ?, program_studi = ?, email = ?, no_telepon = ?, alamat = ?, status = ? WHERE id_dosen = ?");
    if ($stmt) {
        $stmt->bind_param("ssssssssi", $nip, $nama, $jk, $prodi, $email, $telepon, $alamat, $status, $id);
        if ($stmt->execute()) {
            header("Location: datadosen.php?msg=success_edit");
        } else {
            header("Location: datadosen.php?msg=error_edit");
        }
        $stmt->close();
    } else {
        header("Location: datadosen.php?msg=error_db");
    }
} 
elseif ($act == 'delete_dosen') {
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // Query DELETE menggunakan prepared statement
    $stmt = $mysqli->prepare("DELETE FROM dosen WHERE id_dosen = ?");
    if ($stmt) {
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            header("Location: datadosen.php?msg=success_delete");
        } else {
            header("Location: datadosen.php?msg=error_delete");
        }
        $stmt->close();
    } else {
        header("Location: datadosen.php?msg=error_db");
    }
} 
elseif ($act == 'insert_mahasiswa') {
    $npm = isset($_POST['npm']) ? trim($_POST['npm']) : '';
    $nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
    $jurusan = isset($_POST['jurusan']) ? trim($_POST['jurusan']) : '';

    // Query INSERT menggunakan prepared statement
    $stmt = $mysqli->prepare("INSERT INTO mahasiswa (npm_mahasiswa, nama_mahasiswa, jurusan_mahasiswa) VALUES (?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sss", $npm, $nama, $jurusan);
        if ($stmt->execute()) {
            header("Location: dataMahasiswa.php?msg=success_add");
        } else {
            header("Location: dataMahasiswa.php?msg=error_add");
        }
        $stmt->close();
    } else {
        header("Location: dataMahasiswa.php?msg=error_db");
    }
} 
elseif ($act == 'edit_mahasiswa') {
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $npm = isset($_POST['npm']) ? trim($_POST['npm']) : '';
    $nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
    $jurusan = isset($_POST['jurusan']) ? trim($_POST['jurusan']) : '';

    // Query UPDATE menggunakan prepared statement
    $stmt = $mysqli->prepare("UPDATE mahasiswa SET npm_mahasiswa = ?, nama_mahasiswa = ?, jurusan_mahasiswa = ? WHERE id_mahasiswa = ?");
    if ($stmt) {
        $stmt->bind_param("sssi", $npm, $nama, $jurusan, $id);
        if ($stmt->execute()) {
            header("Location: dataMahasiswa.php?msg=success_edit");
        } else {
            header("Location: dataMahasiswa.php?msg=error_edit");
        }
        $stmt->close();
    } else {
        header("Location: dataMahasiswa.php?msg=error_db");
    }
} 
elseif ($act == 'delete_mahasiswa') {
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // Query DELETE menggunakan prepared statement
    $stmt = $mysqli->prepare("DELETE FROM mahasiswa WHERE id_mahasiswa = ?");
    if ($stmt) {
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            header("Location: dataMahasiswa.php?msg=success_delete");
        } else {
            header("Location: dataMahasiswa.php?msg=error_delete");
        }
        $stmt->close();
    } else {
        header("Location: dataMahasiswa.php?msg=error_db");
    }
} 
else {
    header("Location: index.php");
}
?>
