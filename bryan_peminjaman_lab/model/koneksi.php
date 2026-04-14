<?php
class Koneksi {
    public static function connect() {
        return new mysqli("localhost", "root", "", "bryan_peminjaman_lab");
    }
}