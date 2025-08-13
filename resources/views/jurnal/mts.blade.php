@extends('layouts.layouts')

@section('content')

<section id="berita" style="margin-top: 100px;" class="py-5">
    <div class="container">
        <div class="header-berita text-center mb-4">
            <h2 class="fw-bold">Jadwal Kegiatan Harian Santri MTS</h2>
            <p>Pondok Pesantren Modern Hidayatullah</p>
        </div>

        {{-- Senin - Rabu --}}
        <h4 class="fw-bold mt-4">Senin - Rabu</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-success text-center">
                    <tr>
                        <th>No</th>
                        <th>Waktu</th>
                        <th>Kegiatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td class="text-center">1</td><td>04.00 - 04.10</td><td>Qiyamul Lail (Sholat Sunnah Tahajud & Hajat)</td></tr>
                    <tr><td class="text-center">2</td><td>04.10 - 04.30</td><td>Sholat Sunnah Rawatib + Sholat Subuh Berjama'ah</td></tr>
                    <tr><td class="text-center">3</td><td>04.30 - 05.30</td><td>Muroja'ah dan Ziyadah Al-Qur'an</td></tr>
                    <tr><td class="text-center">4</td><td>05.30 - 06.00</td><td>Bersih Diri dan Lingkungan</td></tr>
                    <tr><td class="text-center">5</td><td>06.00 - 06.30</td><td>Sarapan</td></tr>
                    <tr><td class="text-center">6</td><td>06.30 - 13.30</td><td>Pembelajaran Formal di Lembaga MTS</td></tr>
                    <tr><td class="text-center">7</td><td>13.30 - 15.00</td><td>Istirahat (Tidur)</td></tr>
                    <tr><td class="text-center">8</td><td>15.00 - 15.30</td><td>Bersih Diri dan Sholat Ashar Berjamaah</td></tr>
                    <tr><td class="text-center">9</td><td>15.30 - 17.00</td><td>Kelas Madrasah Diniyah</td></tr>
                    <tr><td class="text-center">10</td><td>17.15 - 17.30</td><td>Makan Malam</td></tr>
                    <tr><td class="text-center">11</td><td>17.15 - 17.30</td><td>Rutin Pembacaan surat Al Waqiah</td></tr>
                    <tr><td class="text-center">12</td><td>17.30 - 18.00</td><td>Sholat Sunnah Rawatib + Sholat Magrib Berjama'ah</td></tr>
                    <tr><td class="text-center">13</td><td>18.00 - 19.30</td><td>Kelas Madrasah Diniyah</td></tr>
                    <tr><td class="text-center">14</td><td>19.30 - 19.50</td><td>Sholat Sunnah Rawatib + Sholat Isya' Berjama'ah</td></tr>
                    <tr><td class="text-center">15</td><td>19.50 - 20.00</td><td>Rutin Pembacaan Surat Al Mulk</td></tr>
                    <tr><td class="text-center">16</td><td>20.00 - 21.00</td><td>Istirahat + Menyiapkan Pelajaran untuk Besok + <br>Mengerjakan tugas/pr</td></tr>
                    <tr><td class="text-center">17</td><td>21.00 - 21.15</td><td>Persiapan Tidur (cuci muka,tangan kaki,gosok gigi)</td></tr>
                    <tr><td class="text-center">18</td><td>21.15 - 04.00</td><td>Istirahat (Tidur)</td></tr>
                </tbody>
            </table>
        </div>

        {{-- Kamis --}}
        <h4 class="fw-bold mt-5">Kamis</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-warning text-center">
                    <tr>
                        <th>No</th>
                        <th>Waktu</th>
                        <th>Kegiatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td class="text-center">1</td><td>04.00 - 04.10</td><td>Qiyamul Lail (Sholat Sunnah Tahajud & Hajat)</td></tr>
                    <tr><td class="text-center">2</td><td>04.10 - 04.30</td><td>Sholat Sunnah Rawatib + Sholat Subuh Berjama'ah</td></tr>
                    <tr><td class="text-center">3</td><td>04.30 - 05.30</td><td>Muroja'ah dan Ziyadah Al-Qur'an</td></tr>
                    <tr><td class="text-center">4</td><td>05.30 - 06.00</td><td>Bersih Diri dan Lingkungan</td></tr>
                    <tr><td class="text-center">5</td><td>06.00 - 06.30</td><td>Sarapan</td></tr>
                    <tr><td class="text-center">6</td><td>06.30 - 13.30</td><td>Pembelajaran Formal di Lembaga MTS</td></tr>
                    <tr><td class="text-center">7</td><td>13.30 - 15.00</td><td>Istirahat (Tidur)</td></tr>
                    <tr><td class="text-center">8</td><td>15.00 - 15.30</td><td>Bersih Diri dan Sholat Ashar Berjamaah</td></tr>
                    <tr><td class="text-center">9</td><td>15.30 - 17.00</td><td>Kelas Madrasah Diniyah</td></tr>
                    <tr><td class="text-center">10</td><td>17.15 - 17.30</td><td>Makan Malam</td></tr>
                    <tr><td class="text-center">11</td><td>17.15 - 17.30</td><td>Rutin Pembacaan surat Al Waqiah</td></tr>
                    <tr><td class="text-center">12</td><td>17.30 - 18.00</td><td>Sholat Sunnah Rawatib + Sholat Magrib Berjama'ah</td></tr>
                    <tr><td class="text-center">13</td><td>18.00 - 19.30</td><td>Rutin Pembacaan Surah Yasiin dan Tahlil</td></tr>
                    <tr><td class="text-center">14</td><td>19.30 - 19.50</td><td>Sholat Sunnah Rawatib + Sholat Isya' Berjama'ah</td></tr>
                    <tr><td class="text-center">15</td><td>19.50 - 20.00</td><td>Rutin Pembacaan Surat Al Mulk</td></tr>
                    <tr><td class="text-center">16</td><td>20.00 - 21.00</td><td>Pelatihan Soft Skill (Sholawat Banjari)</td></tr>
                    <tr><td class="text-center">17</td><td>21.00 - 21.15</td><td>Persiapan Tidur (cuci muka,tangan kaki,gosok gigi)</td></tr>
                    <tr><td class="text-center">18</td><td>21.15 - 04.00</td><td>Istirahat (Tidur)</td></tr>
                </tbody>
            </table>
        </div>

        {{-- Jumat --}}
        <h4 class="fw-bold mt-5">Jumat</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-primary text-center">
                    <tr>
                        <th>No</th>
                        <th>Waktu</th>
                        <th>Kegiatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td class="text-center">1</td><td>04.00 - 04.10</td><td>Qiyamul Lail (Sholat Sunnah Tahajud & Hajat)</td></tr>
                    <tr><td class="text-center">2</td><td>04.10 - 04.30</td><td>Sholat Sunnah Rawatib + Sholat Subuh Berjama'ah</td></tr>
                    <tr><td class="text-center">3</td><td>04.30 - 05.30</td><td>Rutin Pembacaan Surah Al Kahfi</td></tr>
                    <tr><td class="text-center">4</td><td>05.30 - 06.00</td><td>Bersih Diri dan Lingkungan</td></tr>
                    <tr><td class="text-center">5</td><td>06.00 - 06.30</td><td>Sarapan</td></tr>
                    <tr><td class="text-center">6</td><td>06.30 - 10.00</td><td>Pembelajaran Formal di Lembaga MTS</td></tr>
                    <tr><td class="text-center">7</td><td>10.00 - 11.30</td><td>Istirahat (Tidur)</td></tr>
                    <tr><td class="text-center">8</td><td>11.30 - 12.30</td><td>Persiapan Sholat Jumat dan Sholat Dhuhur Berjama'ah</td></tr>
                    <tr><td class="text-center">9</td><td>12.30 - 13.00</td><td>Makan Siang</td></tr>
                    <tr><td class="text-center">10</td><td>13.00 - 15.00</td><td>Tahsin Al-Qur'an</td></tr>
                    <tr><td class="text-center">11</td><td>15.00 - 15.30</td><td>Bersih Diri dan Sholat Ashar Berjamaah</td></tr>
                    <tr><td class="text-center">12</td><td>15.30 - 17.00</td><td>Kegiatan Bebas</td></tr>
                    <tr><td class="text-center">13</td><td>17.00 - 17.15</td><td>Makan Malam</td></tr>
                    <tr><td class="text-center">14</td><td>17.15 - 17.30</td><td>Rutin Pembacaan surat Al Waqiah</td></tr>
                    <tr><td class="text-center">15</td><td>17.30 - 18.00</td><td>Sholat Sunnah Rawatib + Sholat Magrib Berjama'ah</td></tr>
                    <tr><td class="text-center">16</td><td>18.00 - 19.30</td><td>Kelas Pembentukan Karakter</td></tr>
                    <tr><td class="text-center">17</td><td>19.30 - 19.50</td><td>Sholat Sunnah Rawatib + Sholat Isya' Berjama'ah</td></tr>
                    <tr><td class="text-center">18</td><td>19.50 - 20.00</td><td>Rutin Pembacaan Surat Al Mulk</td></tr>
                    <tr><td class="text-center">19</td><td>20.00 - 21.00</td><td>Pelatihan Soft Skill (Sholawat Banjari)</td></tr>
                    <tr><td class="text-center">20</td><td>21.00 - 21.15</td><td>Persiapan Tidur (cuci muka,tangan kaki,gosok gigi)</td></tr>
                    <tr><td class="text-center">21</td><td>21.15 - 04.00</td><td>Istirahat (Tidur)</td></tr>
                </tbody>
            </table>
        </div>

        {{-- Sabtu --}}
        <h4 class="fw-bold mt-5">Sabtu</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-danger text-center">
                    <tr>
                        <th>No</th>
                        <th>Waktu</th>
                        <th>Kegiatan</th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                    <tr><td class="text-center">1</td><td>04.00 - 04.10</td><td>Qiyamul Lail (Sholat Sunnah Tahajud & Hajat)</td></tr>
                    <tr><td class="text-center">2</td><td>04.10 - 04.30</td><td>Sholat Sunnah Rawatib + Sholat Subuh Berjama'ah</td></tr>
                    <tr><td class="text-center">3</td><td>04.30 - 05.30</td><td>Ngaji Kitab Siroh Nabawiyah (Asyifa Bi Ta'rifil Huquqil Mustofa)</td></tr>
                    <tr><td class="text-center">4</td><td>05.30 - 06.00</td><td>Bersih Diri dan Lingkungan</td></tr>
                    <tr><td class="text-center">5</td><td>06.00 - 06.30</td><td>Sarapan</td></tr>
                    <tr><td class="text-center">6</td><td>06.30 - 10.00</td><td>Pembelajaran Formal di Lembaga MTS</td></tr>
                    <tr><td class="text-center">7</td><td>10.00 - 11.30</td><td>Kegiatan Bebas</td></tr>
                    <tr><td class="text-center">8</td><td>11.30 - 12.00</td><td>Sholat Dhuhur Berjama'ah</td></tr>
                    <tr><td class="text-center">9</td><td>12.00 - 12.30</td><td>Makan Siang</td></tr>
                    <tr><td class="text-center">10</td><td>12.30 - 15.00</td><td>Istirahat (Tidur)</td></tr>
                    <tr><td class="text-center">11</td><td>15.00 - 15.30</td><td>Bersih Diri dan Sholat Ashar Berjamaah</td></tr>
                    <tr><td class="text-center">12</td><td>15.30 - 16.30</td><td>Tahsin AL Qur'an</td></tr>
                    <tr><td class="text-center">13</td><td>16.30 - 17.00</td><td>Kegiatan Bebas</td></tr>
                    <tr><td class="text-center">14</td><td>17.00 - 17.15</td><td>Makan Malam</td></tr>
                    <tr><td class="text-center">15</td><td>17.15 - 17.30</td><td>Rutin Pembacaan surat Al Waqiah</td></tr>
                    <tr><td class="text-center">16</td><td>17.30 - 18.00</td><td>Sholat Sunnah Rawatib + Sholat Magrib Berjama'ah</td></tr>
                    <tr><td class="text-center">17</td><td>18.00 - 19.30</td><td>Istighosah + Ngaji Kitab Hadist Arbain Nawawi</td></tr>
                    <tr><td class="text-center">18</td><td>19.30 - 19.50</td><td>Sholat Sunnah Rawatib + Sholat Isya' Berjama'ah</td></tr>
                    <tr><td class="text-center">19</td><td>19.50 - 20.00</td><td>Rutin Pembacaan Surat Al Mulk</td></tr>
                    <tr><td class="text-center">20</td><td>20.00 - 21.00</td><td>Kegiatan Bebas (Nonton Film)</td></tr>
                    <tr><td class="text-center">21</td><td>21.00 - 21.15</td><td>Persiapan Tidur (cuci muka,tangan kaki,gosok gigi)</td></tr>
                    <tr><td class="text-center">22</td><td>21.15 - 04.00</td><td>Istirahat (Tidur)</td></tr>
                </tbody>
            </table>
        </div>

        {{-- Minggu --}}
        <h4 class="fw-bold mt-5">Minggu</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-secondary text-center">
                    <tr>
                        <th>No</th>
                        <th>Waktu</th>
                        <th>Kegiatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td class="text-center">1</td><td>04.00 - 04.10</td><td>Qiyamul Lail (Sholat Sunnah Tahajud & Hajat)</td></tr>
                    <tr><td class="text-center">2</td><td>04.10 - 04.30</td><td>Sholat Sunnah Rawatib + Sholat Subuh Berjama'ah</td></tr>
                    <tr><td class="text-center">3</td><td>04.30 - 06.00</td><td>Ngaji Bersama tartila</td></tr>
                    <tr><td class="text-center">4</td><td>06.00 - 06.30</td><td>Sarapan</td></tr>
                    <tr><td class="text-center">5</td><td>06.00 - 08.00</td><td>Ro'an (Kerja bakti Bersama)</td></tr>
                    <tr><td class="text-center">6</td><td>08.00 - 11.00</td><td>Olahraga dan Kegiatan Bebas</td></tr>
                    <tr><td class="text-center">7</td><td>11.00 - 11.30</td><td>Bersih Diri</td></tr>
                    <tr><td class="text-center">8</td><td>11.30 - 12.30</td><td>Sholat Sunnah Rawatib dan Sholat Dhuhur Berjama'ah</td></tr>
                    <tr><td class="text-center">9</td><td>12.30 - 13.00</td><td>Makan Siang</td></tr>
                    <tr><td class="text-center">10</td><td>13.00 - 16.00</td><td>Istirahat (Tidur)</td></tr>
                    <tr><td class="text-center">11</td><td>16.00 - 17.00</td><td>Sholat Sunnah Rawatib + Sholat Ashar Berjamaah</td></tr>
                    <tr><td class="text-center">12</td><td>17.00 - 17.15</td><td>Makan Malam</td></tr>
                    <tr><td class="text-center">13</td><td>17.15 - 17.30</td><td>Rutin Pembacaan surat Al Waqiah</td></tr>
                    <tr><td class="text-center">14</td><td>17.30 - 18.00</td><td>Sholat Sunnah Rawatib + Sholat Magrib Berjama'ah</td></tr>
                    <tr><td class="text-center">15</td><td>18.00 - 19.30</td><td>Kelas Madrasah Diniyah</td></tr>
                    <tr><td class="text-center">16</td><td>19.30 - 19.50</td><td>Sholat Sunnah Rawatib + Sholat Isya' Berjama'ah</td></tr>
                    <tr><td class="text-center">17</td><td>19.50 - 20.00</td><td>Rutin Pembacaan Surat Al Mulk</td></tr>
                    <tr><td class="text-center">18</td><td>20.00 - 21.00</td><td>Istirahat + Menyiapkan Pelajaran untuk Besok + <br>Mengerjakan tugas/pr</td></tr>
                    <tr><td class="text-center">19</td><td>21.00 - 21.15</td><td>Persiapan Tidur (cuci muka,tangan kaki,gosok gigi)</td></tr>
                    <tr><td class="text-center">20</td><td>21.15 - 04.00</td><td>Istirahat (Tidur)</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection
