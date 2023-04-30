/* 2540120603 - Nicolas Saputra Gunawan - LA07*/

/* Buat suatu sql file dengan nama “redlock-db.sql” yang berisi backup database "Redlock" */
CREATE DATABASE Redlock; /* Create database named 'Redlock' */
USE Redlock;
CREATE TABLE users(
    ID VARCHAR(7) PRIMARY KEY NOT NULL, 
    Nama VARCHAR(50) NOT NULL,
    Alamat VARCHAR(100) NOT NULL, 
    Jabatan VARCHAR(25) NOT NULL 
);

/* Database berisi table “users” dengan kolom “ID(PK), Nama, Alamat, Jabatan” dengan value apa saja */
INSERT INTO users (ID, Nama, Alamat, Jabatan) VALUES
('SNA001', 'Nicolas Saputra Gunawan', 'Jl. XXX (bogor)', 'Mahasiswa'),
('SNA002', 'Bob', 'Jl. XXX (Jakarta)', 'Mahasiswa'),
('SNA003', 'John', 'Jl. XXX (Bandung)', 'Mahasiswa'),
('SNA004', 'Steve', 'Jl. XXX (Tangerang)', 'Mahasiswa'),
('SNA005', 'Alex', 'Jl. XXX (Jakarta)', 'Mahasiswa'),
('SNA006', 'Ed', 'Jl. XXX (Jakarta)', 'Mahasiswa');



