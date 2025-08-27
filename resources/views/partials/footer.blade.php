<!-- Start Footer
============================================= -->
<footer class="default-padding">
    <div class="container">
        <div class="f-items">
            <div class="row">
                <!-- Alamat & Maps -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item">
                        <img src="{{ asset('assets/img/logo-icon.png') }}" alt="Logo" />
                        <p class="mt-3">
                            <i class="fas fa-map-marker-alt me-2 text-theme"></i>
                            Jl. Raya Jakarta-Bogor No.27B, Nanggewer, Kec. Cibinong,
                            Kabupaten Bogor, Jawa Barat 16810
                        </p>
                        <div class="mt-3 rounded overflow-hidden" style="width: 100%; max-width: 350px; height: 220px;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.077734840933!2d106.83888327360522!3d-6.511844893480534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c10a55555555%3A0xab4677308822649b!2sBalai%20POM%20di%20Bogor!5e0!3m2!1sen!2sid!4v1754621203644!5m2!1sen!2sid"
                                width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Tautan -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item link">
                        <h4 class="mb-3">Tautan Terkait</h4>
                        <ul class="list-unstyled">
                            <li><a href="https://www.pom.go.id/" target="_blank">Website Utama Badan BPOM</a></li>
                            <li><a href="https://www.kemkes.go.id/" target="_blank">Kementerian Kesehatan</a></li>
                            <li><a href="https://bnn.go.id/" target="_blank">Badan Narkotika Nasional</a></li>
                            <li><a href="https://insw.go.id/" target="_blank">INSW</a></li>
                            <li><a href="https://kpk.go.id/id/splash" target="_blank">Komisi Pemberantasan Korupsi</a></li>
                            <li><a href="https://www.who.int" target="_blank">World Health Organization</a></li>
                            <li><a href="https://cekbpom.pom.go.id/" target="_blank">Cekbpom</a></li>
                            <li><a href="https://ppid.pom.go.id/" target="_blank">ppid.pom.go.id</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Statistik + Kontak -->
                <div class="col-lg-4 col-md-12 item">
                    <div class="row">
                        <!-- Statistik -->
                        <div class="col-12 mb-4">
                            <div class="f-item">
                                <h4 class="mb-3">Statistik Pengunjung</h4>
                                <ul class="list-unstyled">
                                    <li>Hari ini: <strong>{{ $visitStats['daily'] }}</strong></li>
                                    <li>Minggu ini: <strong>{{ $visitStats['weekly'] }}</strong></li>
                                    <li>Bulan ini: <strong>{{ $visitStats['monthly'] }}</strong></li>
                                    <li>Tahun ini: <strong>{{ $visitStats['yearly'] }}</strong></li>
                                    <li>Total: <strong>{{ $visitStats['total'] }}</strong></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Kontak (pakai gaya baru dari lo) -->
                        <div class="col-12">
                            <div class="f-item contact-widget h-100 d-flex flex-column shadow-sm p-4 rounded bg-light">
                                <div class="address flex-grow-1">
                                    <ul class="list-unstyled">
                                        <li class="mb-3 d-flex">
                                            <div class="icon me-2 text-primary">
                                                <i class="fas fa-home"></i>
                                            </div>
                                            <div class="info">
                                                <h5>Subsite:</h5>
                                                <span>
                                                    <a href="https://bogor.pom.go.id/" target="_blank" class="link-grey">
                                                        bogor.pom.go.id
                                                    </a>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="mb-3 d-flex">
                                            <div class="icon me-2 text-danger">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="info">
                                                <h5>Email:</h5>
                                                <span>
                                                    <a href="mailto:bpom_bogor@pom.go.id" target="_blank" class="link-grey">
                                                        bpom_bogor@pom.go.id
                                                    </a>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="d-flex">
                                            <div class="icon me-2 text-success">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                            <div class="info">
                                                <h5>Telepon/Fax/Whatsapp</h5>
                                                <span>
                                                    <a href="https://wa.me/08111188378" target="_blank" class="link-grey">
                                                        08111188378
                                                    </a>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Kontak -->

                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
