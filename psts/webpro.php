<?php
$module = (isset($_GET['m'])) ? $_GET['m'] : 'home';
switch ($module) {
    case 'home': default:
        include('home.php');
        break;
    case 'kelas':
        include('mapel/index.php');
        break;
    case 'siswa':
        include('guru/index.php');
        break;
}