<!-- Perubahan script coding untuk bisa menampilkan about dalam bentuk tampilan bootstrap (AdminLTE)  -->
<div class="box-header with-border">
	<h3 class="box-title"><strong>Anda sedang menggunakan Aplikasi SiDedi</strong></h3>
</div>
<div class="box-body">
	<div class="box-group" id="accordion">
		<div class="panel box box-default">
			<div class="box-header with-border">
				<h4 class="box-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Aplikasi SiDedi</a>
				</h4>
			</div>
			<div id="collapse1" class="panel-collapse collapse in">
				<div class="box-body">
					<p>SiDedi adalah Aplikasi Sistem Informasi Desa Digital yang dibuat sejak Februari 2021.</p>
				</div>
			</div>
		</div>
		<div class="panel box box-default">
			<div class="box-header with-border">
				<h4 class="box-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Apakah SiDedi ?</a>
				</h4>
			</div>
			<div id="collapse2" class="panel-collapse collapse">
				<div class="box-body">
					<p>Aplikasi Sistem Informasi Desa Digital (SiDedi) adalah sistem olah data dan informasi berbasis komputer yang dapat dikelola oleh pemerintah dan komunitas desa dalam dua ranah:</p>
					<dl>
						<dt>1. Offline</dt>
						<dd>Aplikasi diinstall dalam komputer server di kantor desa dan dioperasikan sebagai server (pusat data) yang bersifat lokal. Karena tidak terhubung ke internet, SiDedi offline hanya bisa diakses dalam jaringan lokal. Sistem offline ini direkomendasikan untuk diterapkan dalam penggunaan aplikasi SiDedi harian. Database dari hasil proses olah data secara offline itu dapat diunggah ke sistem online secara berkala.</dd>						<dt>2. Online</dt>
						<dd>SiDedi akan optimal jika terhubung ke internet sebagai sistem online berbasis web. SiDedi online akan otomatis berfungsi juga sebagai website desa. Website desa ini memiliki fungsi yang terbagi dalam dua bagian, yakni bagian depan yang bisa diakses oleh publik dan bagian dalam yang hanya bisa diakses oleh administrator sistem.</dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="panel box box-default">
			<div class="box-header with-border">
				<h4 class="box-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Manajemen Akses SiDedi</a>
				</h4>
			</div>
			<div id="collapse3" class="panel-collapse collapse">
				<div class="box-body">
					<p>Aplikasi SiDedi dirancang untuk mengelola data dasar desa dan informasi desa. Data dasar yang dikelola meliputi data dasar kependudukan dan data dasar aset/sumber daya desa. Data dasar ini menjadi tanggung jawab pemerintah desa dalam pengelolaannya. Hanya pengguna (user) dari pemerintah desa dan tim yang dikoordinasikan oleh pemerintah desa saja yang akan memiliki kewenangan dan hak akses ke dalam sistem. Sementara, user di luar pemerintah desa hanya akan memiliki akses terbatas pada fungsi olah informasi untuk website desa.</p>
					<p>Tingkat user (pengguna) dalam SiDedi:</p>
					<p>
						<ol>
							<li>
								Administrator : adalah orang/tim yang bertanggung jawab penuh atas olah data dan informasi dalam SiDedi dan website desa. Orang/tim ini ditunjuk oleh pemerintah desa disahkan dengan surat keputusan kepala desa.
								<ol>
									<li>Peran olah data : entry, edit, delete data dasar</li>
									<li>Peran olah informasi : tulis, edit, publish artikel website</li>
								</ol>
							</li>
							<li>
								Operator: adalah orang/tim yang bertugas membantu administrator mengelola data dan informasi, tetapi dengan kewenangan yang lebih terbatas.
								<ol>
									<li>Peran olah data : entry, edit data dasar</li>
									<li>Peran olah informasi : tulis, edit artikel website.</li>
								</ol>
							</li>
							<li>
								Redaksi: adalah orang/tim yang bertugas sebagai redaksi media website desa dan hanya dapat melakukan olah informasi berupa artikel website.
								<ol>
									<li>Peran olah informasi : tulis, edit artikel. Redaksi boleh mengubah semua artikel, termasuk menjadikan headline, aktif/non-aktifkan, masukkan ke slider, dsbnya</li>
								</ol>
							</li>
							<li>
								Kontributor: adalah orang/tim yang bertugas menulis artikel untuk disetujui redaksi untuk ditampilkan di website desa.
								<ol>
									<li>Peran olah informasi : tulis, edit artikel yang dibuatnya sendiri. Kontributor tidak dapat menjadikan artikel manapun menjadi headline, aktif/non-aktifkan atau memasukkan ke slider.</li>
								</ol>
							</li>
						</ol>
					</p>
				</div>
			</div>
		</div>
		<div class="panel box box-default">
			<div class="box-header with-border">
				<h4 class="box-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Tahapan Membangun SiDedi</a>
				</h4>
			</div>
			<div id="collapse4" class="panel-collapse collapse">
				<div class="box-body">
					<P>Bagaimana memulai membangun Sistem Informasi Desa (SiDedi) di desa kita? Caranya sangat mudah, tetapi pasti perlu proses yang harus sabar dan cermat untuk dijalani. Siapa pun Anda, baik perorangan maupun mewakili organisasi/lembaga, dapat mencoba mulai membangun SiDedi di desa masing-masing mengikuti langkah-langkah berikut.</P>
					<ol>
						<li>Bentuk tim kerja bersama pemerintah desa</li>
						<li>Diskusikan basis data apa saja yang diperlukan untuk warga</li>
						<li>Himpun data kependudukan warga dari Kartu Keluarga (KK)</li>
						<li>Install aplikasi software SiDedi di komputer desa</li>
						<li>Entry data penduduk ke SiDedi</li>
						<li>Basis data kependudukan sudah bisa dimanfaatkan</li>
						<li>Diskusikan rencana pengembangan SiDedi sesuai kebutuhan desa</li>
						<li>Sebarluaskan informasi desa melalui beragam media untuk warga</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="panel box box-default">
			<div class="box-header with-border">
				<h4 class="box-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Hak Cipta, Syarat, Dan Ketentuan</a>
				</h4>
			</div>
			<div id="collapse5" class="panel-collapse collapse">
				<div class="box-body">
					<p>Aplikasi Sistem Informasi Desa Digital (SiDedi) dibangun dan dikembangkan pada awalnya oleh COMBINE Resource Institution sejak tahun 2009. Sistem ini dikelola dengan merujuk pada lisensi GNU General Public License Version 3.</p>
					<p>Dengan lisensi GPL v3, semua ubahan SiDedi juga berlisensi GPL v3.<p>
					<p>SiDedi dikembangkan sejak Februari 2021.</p>
					<p>Sejak Januari 2021, SiDedi dikelola oleh Sicxsoulja. Sicxsoulja adalah pemegang hak cipta utama SiDedi.
				</div>
			</div>
		</div>
		<div class="panel box box-default">
			<div class="box-header with-border">
				<h4 class="box-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Kontak Dan Informasi</a>
				</h4>
			</div>
			<div id="collapse6" class="panel-collapse collapse">
				<div class="box-body">
					<ol>
						<li>Website SiDedi, pengelola SiDedi: </li>
						<a href="https://sicxsoulja.com" target="_blank">SiDedi</a>
						<li>Website resmi SiDedi: </li>
						<a href="https://sicxsoulja.com" target="_blank">SiDedi</a>
						<li>Group Facebook, tempat mendapatkan bantuan dan berbagi pengalaman: </li>
						<a href="#" target="_blank">Forum Pengguna dan Pegiat SiDedi </a>
						<li>Tempat mengunduh rilis SiDedi:</li>
						<a href="#" target="_blank">-</a>
						<li>Panduan SiDedi:</li>
						<a href="#" target="_blank">-</a>
						<li>Channel Youtube SiDedi: </li>
						<a href="#" target="_blank">-</a>
						<li>Repository (tempat pengelolaan) SiDedi:</li>
						<a href="#" target="_blank">-</a>
						<li>Tempat mendaftarkan masalah dan usulan fitur:</li>
						<a href="#" target="_blank" sclass="text-green">-</a>
						<li>Forum diskusi teknis pengembangan SiDedi:</li>
						<a href="#" target="_blank">-</a>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="box-header with-border"></div>
</div>