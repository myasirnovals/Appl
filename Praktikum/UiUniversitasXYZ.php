<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portal Tugas Akhir Universitas XYZ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Portal Tugas Akhir Universitas XYZ</h1>
    <nav>
        <a href="#pendaftaran-ta">Pendaftaran TA</a>
        <a href="#pengajuan-proposal">Pengajuan Proposal</a>
        <a href="#bimbingan">Bimbingan</a>
        <a href="#pendaftaran-seminar">Pendaftaran Seminar</a>
        <a href="#penilaian-seminar">Penilaian Seminar</a>
        <a href="#validasi">Validasi Koordinator</a>
    </nav>
</header>
<main>
    <!-- Pendaftaran TA -->
    <section id="pendaftaran-ta">
        <h2>Pendaftaran Tugas Akhir</h2>
        <form>
            <label>Nama Mahasiswa</label>
            <input type="text" placeholder="Nama Lengkap" required>
            <label>NIM</label>
            <input type="text" placeholder="NIM" required>
            <label>Judul TA</label>
            <input type="text" placeholder="Judul Tugas Akhir" required>
            <button type="submit">Daftar TA</button>
        </form>
    </section>

    <!-- Pengajuan Proposal -->
    <section id="pengajuan-proposal">
        <h2>Pengajuan Proposal</h2>
        <form>
            <label>Judul Proposal</label>
            <input type="text" placeholder="Judul Proposal" required>
            <label>Upload Proposal (PDF)</label>
            <input type="file" accept=".pdf" required>
            <button type="submit">Ajukan Proposal</button>
        </form>
    </section>

    <!-- Bimbingan -->
    <section id="bimbingan">
        <h2>Pelaksanaan Bimbingan</h2>
        <form>
            <label>Catatan Bimbingan</label>
            <textarea placeholder="Isi catatan bimbingan..." required></textarea>
            <button type="submit">Ajukan Bimbingan</button>
        </form>
        <div class="bimbingan-list">
            <h3>Daftar Bimbingan</h3>
            <ul>
                <li>01/06/2024 - Revisi Bab 1 (Disetujui Pembimbing)</li>
                <li>10/06/2024 - Konsultasi metodologi</li>
            </ul>
        </div>
    </section>

    <!-- Pendaftaran Seminar -->
    <section id="pendaftaran-seminar">
        <h2>Pendaftaran Seminar</h2>
        <form>
            <label>Upload Proposal</label>
            <input type="file" accept=".pdf" required>
            <label>Upload Surat Kelayakan</label>
            <input type="file" accept=".pdf" required>
            <button type="submit">Daftar Seminar</button>
        </form>
    </section>

    <!-- Penilaian Seminar -->
    <section id="penilaian-seminar">
        <h2>Penilaian Seminar</h2>
        <form>
            <label>Pilih Seminar</label>
            <select>
                <option>Seminar TA - Mahasiswa A</option>
                <option>Seminar TA - Mahasiswa B</option>
            </select>
            <label>Nilai</label>
            <input type="number" min="0" max="100" required>
            <button type="submit">Input Nilai</button>
        </form>
    </section>

    <!-- Validasi Koordinator -->
    <section id="validasi">
        <h2>Validasi Pendaftaran (Koordinator TA)</h2>
        <table>
            <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Mahasiswa A</td>
                <td>Pendaftaran TA</td>
                <td>Menunggu Validasi</td>
                <td>
                    <button>Validasi</button>
                </td>
            </tr>
            <tr>
                <td>Mahasiswa B</td>
                <td>Pendaftaran Seminar</td>
                <td>Menunggu Validasi</td>
                <td>
                    <button>Validasi</button>
                </td>
            </tr>
            </tbody>
        </table>
    </section>
</main>
<footer>
    <p>&copy; 2024 Universitas XYZ</p>
</footer>
</body>
</html>
