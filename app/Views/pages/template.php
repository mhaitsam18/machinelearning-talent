<?= $this->extend('layout/templates') ?>

<!-- title -->
<?= $this->Section('title') ?>
<title>Template Dataset &mdash; Team DPP</title>
<?= $this->endSection(); ?>

<!-- content -->
<?= $this->Section('content') ?>
<section class="section mt-4">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="hero bg-dark text-white text-center">
                <div class="hero-inner">
                    <h2>Template File Excel Yang Dapat Diganakan Untuk</h2>
                    <p class="mb-2">Template Excel ini dapat digunakan untuk melakukan prediksi</p>
                    <a href="<?= base_url('assets/documen/template.xlsx'); ?>" class="btn btn-outline-secondary">
                        <i class="fas fa-download"></i> Download
                    </a>
                    <!-- <p class="lead">Ini adalah Aspek-Aspek yang digunakan untuk mengklasifikasi calon pejabat struktural.</p> -->
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="text-body">Penjelasan Mengenai fitur pada dataset yang dipakai</h4>
            </div>
            <div class="card-body">
                <div id="accordion">
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-1" aria-expanded="true">
                            <h4>INTERPRETASI DISC </h4>
                        </div>
                        <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                            <p class="mb-0">
                            <p>Fitur terdiri : MD,MI,MS,MC,LD,LI,LS,LC,CD,CI,CC</p>
                            <p>
                                Most : Yang Ditampilkan dipublik / ingin terlihat <br>
                                Least : Karakter yang muncuk ketika seseorang dibawah tekanan / stress <br>
                                Change : Karakter Asli Seseorang (Muncul dilingkungan terdekat)<br>
                            </p>
                            - Dominance : Dominance memiliki kecenderungan karakter yang dominan, kuat, dengan ego yang tinggi.
                            They are independent and risk taker. Mereka mudah merasa bosan dengan rutinitas, menyukai
                            tantangan dan inovasi. Kepribadian DISC ini juga menyukai authority, responsibility, decision making,
                            problem solving, multi tasking, maupun hal-hal lain yang membuatnya menjadi lebih dominan.<br>
                            - Influence : Memiliki pengaruh besar bagi sekitar,percaya diri,optimismenya membawa semangat bagi lingkungannya.<br>
                            - Steady : Memahami dan mendengarkan dengan baik,sangat terbuka sering digambarkan sebagai stabil dan dapat diprediksi, mereka berusaha untuk menjaga lingkung poitif dan bisa sangatka ada kritik. sensitif keti
                            - Compliance : biasanya tekun, sistematis, teliti, cermat, fokus pada ketepatan dan
                            kualitas. Cenderung analitis dan kritis, sosok kepribadian DISC ini suka mengejar kualitas dengan standar yang tinggi dan mengerjakan tugas-tugas yang rinci. Karenanya, mereka menyukai batasan, prosedur, dan metode yang jelas.</p>

                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-2">
                            <h4>PAPI KOSTICK</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                            <p class="mb-0">
                                kepemimpinan, aktivitas kerja, arah kerja, relasi sosial, sifat
                                temperamen, gaya bekerja, dan posisi birokrasi (atasan-bawahan).<br>
                            <p>
                                <br>Arah Kerja (N,G,A) <br>
                                N : Kebutuhan menyelesaikan tugas secara mandiri<br>
                                G : Peran pekerja kerja<br>
                                A : Kebutuhan berprestasi
                            <p>
                                Kepemimpinan (L,P,I)<br>
                                L :Peran kepemimpinan<br>
                                P : Kebutuhan mengur orang lain<br>
                                I : Peran membuat keputusan
                            <p>
                                Aktivitas kerja (T,V)<br>
                                T : Peran sibuk<br>
                                V : Peran penuh semangat
                            <p>
                                Relasi Sosial(X,S,B,O)<br>
                                X : Kebutuhan untuk diperhatikan<br>
                                S : Peran hubungan social<br>
                                B : Kebutuhan diterima dalam kelompok<br>
                                O : Kebutuhan kedekatan dan kasih sayang
                            <p>
                                Gaya Kerja(R,D,C)<br>
                                R : Peran orang yang teoritis<br>
                                D : Peran bekerja dengan hal-hal rinci<br>
                                C : Peran mengatur
                            <p>
                                Sifat temprament (Z,E,K)<br>
                                Z : Kebutuhan untuk berubah<br>
                                E : Peran pengendalian emosi<br>
                                K : Kebutuhan untuk agresif
                            <p>
                                Posisi atasan-Bawahan (F,W)<br>
                                F : Kebutuhan membantu atasan<br>
                                W : Kebutuhan mengikuti aturan dan pengawasan
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-3">
                            <h4>DAYA ANALISA</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                            <p class="mb-0">keterampilan dalam mengumpulkan dan menganalisis sebuah informasi, menyelesaikan sebuah masalah, dan juga mengambil keputusan.</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-4">
                            <h4>FLEXIBILITAS</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-4" data-parent="#accordion">
                            <p class="mb-0">Menekankan kemauan dan kemampuan untuk beradaptasi dengan perubahan.</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-6">
                            <h4>KEMAMPUAN MEMIMPIN</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-6" data-parent="#accordion">
                            <p class="mb-0">Seni memotivasi sekelompok orang untuk bertindak mencapai tujuan bersama</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-7">
                            <h4>KEMAMPUAN NUMERIKAL</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-7" data-parent="#accordion">
                            <p class="mb-0">Kemampuan menggunakan, menginterpretasi, dan mengomunikasikan informasi matematis untuk memecahkan permasalahan dunia nyata</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-8">
                            <h4>KEMAMPUAN PERENCANAAN</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-8" data-parent="#accordion">
                            <p class="mb-0">Kemampuan yang membantu Anda untuk melihat ke depan dan mencapai tujuan Anda tanpa mengalami kesulitan emosional,
                                finansial, sosial hingga fisik.
                                Kemampuan ini juga membantu anda dalam membuat keputusan dan mengimplementasikannya.</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-9">
                            <h4>KEMAMPUAN VERBAL</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-9" data-parent="#accordion">
                            <p class="mb-0">Kemampuan verbal merupakan kemampuan seseorang dalam menguasai bahasa baik secara lisan maupun tulisan.</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-10">
                            <h4>KERJASAMA</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-10" data-parent="#accordion">
                            <p class="mb-0">Sebuah sikap mau melakukan suatu pekerjaan secara bersama-sama tanpa melihat latar belakang orang yang
                                diajak bekerjasama untuk mencapai suatu tujuan.</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-11">
                            <h4>KETERAMPILAN INTERPERSONAL</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-11" data-parent="#accordion">
                            <p class="mb-0">Keterampilan interpersonal adalah sifat yang Anda andalkan saat berinteraksi dan berkomunikasi dengan orang lain.</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-12">
                            <h4>LOGIKA BERPIKIR</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-12" data-parent="#accordion">
                            <p class="mb-0">Kemampuan untuk menarik kesimpulan yang benar berdasarkan logika dan bisa dibuktikan
                                kesimpulan tersebut sesuai pengetahuan atau ilmu yang sudah diketahui..</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-13">
                            <h4>MOTIVASI BERPRESTASI</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-13" data-parent="#accordion">
                            <p class="mb-0">Usaha dan keyakinan individu untuk mewujudkan tujuan belajar dengan standar keberhasilan tertentu dan mampu
                                mengatasi segala rintangan yang menghambat pencapaian tujuan.</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-14">
                            <h4>ORIENTASI HASIL</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-14" data-parent="#accordion">
                            <p class="mb-0">Kemampuan mempertahankan komitmen pribadi yang tinggi untuk menyelesaikan tugas, dapat diandalkan, bertanggung jawab, mampu secara sistimatis mengidentifikasi risiko dan peluang dengan memperhatikan
                                keterhubungan antara perencanaan dan hasil, untuk keberhasilan organisasi.</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-15">
                            <h4>PENYELESAIAN MASALAH</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-15" data-parent="#accordion">
                            <p class="mb-0">Pemecahan masalah adalah kemampuan utama dalam bisnis dan menambah kesuksesan tim. Ini membutuhkan logika,
                                pemikiran kreatif, perencanaan dan evaluasi.</p>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion-header" role="button" data-toggle="collapse" data-target="#panel-body-16">
                            <h4>SISTEMATIKA KERJA</h4>
                        </div>
                        <div class="accordion-body collapse" id="panel-body-16" data-parent="#accordion">
                            <p class="mb-0">Suatu cara yang ditempuh untuk mengatur sebuah pekerjaan agar terlaksana dengan baik dan efisien.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<!-- end Content -->