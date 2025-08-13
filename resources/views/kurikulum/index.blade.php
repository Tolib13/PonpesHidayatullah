@extends('layouts.layouts')

@section('content')

<section id="berita" style="margin-top: 50px;" class="py-5">
<div class="container my-5">
    <h2 class="text-center fw-bold mb-5"><img src="{{ asset('assets/icons/logoppmh.jpg') }}" height="55" width="55" alt=""> Kurikulum Pondok Pesantren Modern Hidayatullah</h2>

    {{-- ===================== Tingkat Awaliyah ===================== --}}
    <h3 class="text-primary fw-bold mb-3">Awaliyah</h3>
    <div class="row g-4">

        {{-- Kelas I --}}
        <div class="col-md-4">
            <div class="card shadow border-0 h-100">
                <div class="card-header bg-primary text-white text-center fw-bold">Kelas I</div>
                <div class="card-body">
                    <table class="table table-sm table-striped">
                        <tbody>
                            <tr><td>1</td><td>Al Qur'an</td><td>Al Qur'an</td></tr>
                            <tr><td>2</td><td>Akhlaq</td><td>Washoyaa-dul Abnaa' <br> Ta'limul Muta'alim</td></tr>
                            <tr><td>3</td><td>Fiqh</td><td>Qodhaya Fiqh mu ashirah <br> At tadzhib fi adillati ghoyah<br> wat taqrib</td></tr>
                            <tr><td>4</td><td>Tarikh</td><td>Khulasoh Nurul Yaqin</td></tr>
                            <tr><td>5</td><td>Nahwu Shorof</td><td>Amtsilah Tashrifiyah</td></tr>
                            <tr><td>6</td><td>Tafsir</td><td>Tafsir Yasin</td></tr>
                            <tr><td>7</td><td>Hadits</td><td>Lubabul Hadits</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Kelas II --}}
        <div class="col-md-4">
            <div class="card shadow border-0 h-100">
                <div class="card-header bg-primary text-white text-center fw-bold">Kelas II</div>
                <div class="card-body">
                    <table class="table table-sm table-striped">
                        <tbody>
                            <tr><td>1</td><td>Al Qur'an</td><td>Al Qur'an</td></tr>
                            <tr><td>2</td><td>Akhlaq</td><td>Washoyatul aba' lil Abna'<br>Ta'limul Muta'alim</td></tr>
                            <tr><td>3</td><td>Fiqh</td><td>Qodhaya fiqh mu Ashirahm<br> At tadzhib fi adillati ghoyah<br> wat taqrib</td></tr>
                            <tr><td>4</td><td>Tarikh</td><td>Khulasoh nurul yaqin</td></tr>
                            <tr><td>5</td><td>Nahwu Shorof</td><td>Jurumiyyah</td></tr>
                            <tr><td>6</td><td>Tafsir</td><td>Tafsir Yaasin</td></tr>
                            <tr><td>7</td><td>Hadits</td><td>Lubabul Hadits</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Kelas III --}}
        <div class="col-md-4">
            <div class="card shadow border-0 h-100">
                <div class="card-header bg-primary text-white text-center fw-bold">Kelas III</div>
                <div class="card-body">
                    <table class="table table-sm table-striped">
                        <tbody>
                            <tr><td>1</td><td>Al Qur'an</td><td>Al Qur'an</td></tr>
                            <tr><td>2</td><td>Akhlaq</td><td>Washoyatul aba' lil Abna'<br> Ta'limul Muta'alim</td></tr>
                            <tr><td>3</td><td>Fiqh</td><td>Qadhaya fiqh mu ashirah <br>At tadzhib fi adillati ghoyah<br> wat taqrib</td></tr>
                            <tr><td>4</td><td>Tarikh</td><td>Khulasoh Nurul Yaqin</td></tr>
                            <tr><td>5</td><td>Nahwu Shorof</td><td>Jurumiyyah</td></tr>
                            <tr><td>6</td><td>Tafsir</td><td>Tafsir Yaasin</td></tr>
                            <tr><td>7</td><td>Hadits</td><td>Lubabul Hadits</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- Wustho -->
<h3 class="text-success fw-bold mb-3 mt-5">Wustho</h3>
<div class="row g-4">

    {{-- Kelas I --}}
    <div class="col-md-4">
        <div class="card shadow border-0 h-100">
            <div class="card-header bg-success text-white text-center fw-bold">Kelas I</div>
            <div class="card-body">
                <table class="table table-sm table-striped">
                    <tbody>
                        <tr><td>1</td><td>Al Qur'an</td><td>Al Qur'an</td></tr>
                        <tr><td>2</td><td>Tafsir</td><td>Tafsir Jalalain</td></tr>
                        <tr><td>3</td><td>Hadist</td><td>Mukhtarul Ahadits</td></tr>
                        <tr><td>4</td><td>Nahwu Shorof</td><td>Jurumiyyah</td></tr>
                        <tr><td>5</td><td>Fiqh</td><td>Qadhaya fiqh mu ashirah<br>At tadzhib fi adillati ghoyah wat taqrib</td></tr>
                        <tr><td>6</td><td>Tarikh</td><td>Tarikhul Hawadits</td></tr>
                        <tr><td>7</td><td>Tauhid</td><td>Jawahirul Kalamiyah</td></tr>
                        <tr><td>8</td><td>Akhlaq</td><td>Ta'limul Muta'alim</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Kelas II --}}
    <div class="col-md-4">
        <div class="card shadow border-0 h-100">
            <div class="card-header bg-success text-white text-center fw-bold">Kelas II</div>
            <div class="card-body">
                <table class="table table-sm table-striped">
                    <tbody>
                        <tr><td>1</td><td>Al Qur'an</td><td>Al Qur'an</td></tr>
                        <tr><td>2</td><td>Tafsir</td><td>Tafsir Jalalain</td></tr>
                        <tr><td>3</td><td>Hadist</td><td>Mukhtarul Ahadits</td></tr>
                        <tr><td>4</td><td>Nahwu Shorof</td><td>Imrithi</td></tr>
                        <tr><td>5</td><td>Fiqh</td><td>Qadhaya fiqh mu ashirah<br>At tadzhib fi adillati ghoyah wat taqrib</td></tr>
                        <tr><td>6</td><td>Tarikh</td><td>Tarikhul Hawadits</td></tr>
                        <tr><td>7</td><td>Tauhid</td><td>Jawahirul Kalamiyah</td></tr>
                        <tr><td>8</td><td>Akhlaq</td><td>Ta'limul Muta'alim</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Kelas III --}}
    <div class="col-md-4">
        <div class="card shadow border-0 h-100">
            <div class="card-header bg-success text-white text-center fw-bold">Kelas III</div>
            <div class="card-body">
                <table class="table table-sm table-striped">
                    <tbody>
                        <tr><td>1</td><td>Al Qur'an</td><td>Al Qur'an</td></tr>
                        <tr><td>2</td><td>Tafsir</td><td>Tafsir Jalalain</td></tr>
                        <tr><td>3</td><td>Hadist</td><td>Mukhtarul Ahadits</td></tr>
                        <tr><td>4</td><td>Nahwu Shorof</td><td>Imrithi</td></tr>
                        <tr><td>5</td><td>Fiqh</td><td>Qadhaya fiqh mu ashirah<br>At tadzhib fi adillati ghoyah wat taqrib</td></tr>
                        <tr><td>6</td><td>Tarikh</td><td>Tarikhul Hawadits</td></tr>
                        <tr><td>7</td><td>Tauhid</td><td>Jawahirul Kalamiyah</td></tr>
                        <tr><td>8</td><td>Akhlaq</td><td>Ta'limul Muta'alim</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    {{-- ===================== Tingkat Ullya ===================== --}}
    <h3 class="text-warning fw-bold mb-3 mt-5">Ulya</h3>
<div class="row g-4">

    {{-- Kelas I --}}
    <div class="col-md-4">
        <div class="card shadow border-0 h-100">
            <div class="card-header bg-warning text-white text-center fw-bold">Kelas I</div>
            <div class="card-body">
                <table class="table table-sm table-striped">
                    <tbody>
                        <tr><td>1</td><td>Al Qur'an</td><td>Al Qur'an</td></tr>
                        <tr><td>2</td><td>Tafsir</td><td>Tafsir Jalalain</td></tr>
                        <tr><td>3</td><td>Ilmu Tafsir</td><td>Qawaidul Asasiyah Fi Ulumil Qur'an</td></tr>
                        <tr><td>4</td><td>Hadist</td><td>Riyadush Sholihin</td></tr>
                        <tr><td>5</td><td>Fiqih</td><td>Taqriratus Sadidah</td></tr>
                        <tr><td>6</td><td>Ushil Fiqh</td><td>Mabadi' Awaliyah</td></tr>
                        <tr><td>7</td><td>Nahwu Shorof</td><td>Imrithi</td></tr>
                        <tr><td>8</td><td>Tauhid</td><td>Jawahirut Tauhid</td></tr>
                        <tr><td>9</td><td>Bahasa Arab</td><td>Baina Yadaik</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Kelas II --}}
    <div class="col-md-4">
        <div class="card shadow border-0 h-100">
            <div class="card-header bg-warning text-white text-center fw-bold">Kelas II</div>
            <div class="card-body">
                <table class="table table-sm table-striped">
                    <tbody>
                        <tr><td>1</td><td>Al Qur'an</td><td>Al Qur'an</td></tr>
                        <tr><td>2</td><td>Tafsir</td><td>Tafsir Jalalain</td></tr>
                        <tr><td>3</td><td>Ilmu Tafsir</td><td>Qawaidul Asasiyah Fi Ulumil Qur'an</td></tr>
                        <tr><td>4</td><td>Hadist</td><td>Riyadush Sholihin</td></tr>
                        <tr><td>5</td><td>Fiqih</td><td>Taqriratus Sadidah</td></tr>
                        <tr><td>6</td><td>Ushil Fiqh</td><td>Mabadi' Awaliyah</td></tr>
                        <tr><td>7</td><td>Nahwu Shorof</td><td>Alfiyah Ibnu Malik</td></tr>
                        <tr><td>8</td><td>Tauhid</td><td>Jawahirut Tauhid</td></tr>
                        <tr><td>9</td><td>Bahasa Arab</td><td>Baina Yadaik</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Kelas III --}}
    <div class="col-md-4">
        <div class="card shadow border-0 h-100">
            <div class="card-header bg-warning text-white text-center fw-bold">Kelas III</div>
            <div class="card-body">
                <table class="table table-sm table-striped">
                    <tbody>
                        <tr><td>1</td><td>Al Qur'an</td><td>Al Qur'an</td></tr>
                        <tr><td>2</td><td>Tafsir</td><td>Tafsir Jalalain</td></tr>
                        <tr><td>3</td><td>Ilmu Tafsir</td><td>Qawaidul Asasiyah Fi Ulumil Qur'an</td></tr>
                        <tr><td>4</td><td>Hadist</td><td>Riyadush Sholihin</td></tr>
                        <tr><td>5</td><td>Fiqih</td><td>Taqriratus Sadidah</td></tr>
                        <tr><td>6</td><td>Ushil Fiqh</td><td>Mabadi' Awaliyah</td></tr>
                        <tr><td>7</td><td>Nahwu Shorof</td><td>Alfiyah Ibnu Malik</td></tr>
                        <tr><td>8</td><td>Tauhid</td><td>Jawahirut Tauhid</td></tr>
                        <tr><td>9</td><td>Bahasa Arab</td><td>Baina Yadaik</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
{{-- ===================== Tingkat Sifir ===================== --}}
    <h3 class="text-info fw-bold mb-3 mt-5">Sifir</h3>
<div class="row g-4">

    {{-- Kelas Sifir --}}
    <div class="col-md-4">
        <div class="card shadow border-0 h-100">
            <div class="card-header bg-info text-white text-center fw-bold">Kelas Sifir</div>
            <div class="card-body">
                <table class="table table-sm table-striped">
                    <tbody>
                        <tr><td>1</td><td>Al Qur'an</td><td>Al Qur'an</td></tr>
                        <tr><td>2</td><td>Akhlaq</td><td>Taisirul Kholaq</td></tr>
                        <tr><td>3</td><td>Tauhid</td><td>Aqidatul Awam</td></tr>
                        <tr><td>4</td><td>Fiqh</td><td>Safinatush Sholat</td></tr>
                        <tr><td>5</td><td>Tarikh</td><td>Khulasoh nurul yaqin</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

{{-- ===================== Tingkat Persiapan ===================== --}}
    <h3 class="text-secondary fw-bold mb-3 mt-5">Persiapan</h3>
<div class="row g-4">

    {{-- Kelas Persiapan --}}
    <div class="col-md-4">
        <div class="card shadow border-0 h-100">
            <div class="card-header bg-secondary text-white text-center fw-bold">Kelas Persiapan</div>
            <div class="card-body">
                <table class="table table-sm table-striped">
                    <tbody>
                        <tr><td>1</td><td>Al Qur'an</td><td>Al Qur'an</td></tr>
                        <tr><td>2</td><td>Akhlaq</td><td>Alala</td></tr>
                        <tr><td>3</td><td>Pegon</td><td>Ro'sun Sirah</td></tr>
                        <tr><td>4</td><td>Tarikh</td><td>Khulasoh nurul yaqin</td></tr>
                        <tr><td>5</td><td>Hafalan</td><td>Do'a dan Dzikir selepas sholat</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>


</div>

</section>

@endsection