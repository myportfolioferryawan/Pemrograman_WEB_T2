<html>

<body>


    <!-- Form penyewaan.php -->
    <form method="POST" action="penyewaanpost.php">
        <table cellspacing="3" cellpadding="5" border="1">
            <tr>
                <td for="kategori_buku">
                    Kategori Buku:
                </td>
                <td>
                    <select name="kategori_buku" id="kategori_buku">
                        <option value="fiksi">Fiksi</option>
                        <option value="non_fiksi">Non Fiksi</option>
                        <option value="karya_ilmiah">Karya Ilmiah</option>
                        <option value="majalah">Majalah</option>
                    </select>
                </td>
            </tr>


            <tr>
                <td>
                    <label for="tanggal_pinjam">Tanggal Pinjam:</label>
                </td>
                <td>
                    <input type="number" name="tanggal_pinjam" id="tanggal_pinjam" min="1" max="31">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="bulan_pinjam">Bulan Pinjam:</label>
                </td>
                <td>
                    <select name="bulan_pinjam" id="bulan_pinjam">
                        <option value="januari">Januari</option>
                        <option value="februari">Februari</option>
                        <option value="maret">Maret</option>
                        <option value="april">April</option>
                        <option value="mei">Mei</option>
                        <option value="juni">Juni</option>
                        <option value="juli">Juli</option>
                        <option value="agustus">Agustus</option>
                        <option value="september">September</option>
                        <option value="oktober">Oktober</option>
                        <option value="november">November</option>
                        <option value="desember">Desember</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="tahun_pinjam">Tahun Pinjam:</label>
                </td>
                <td>
                    <select name="tahun_pinjam" id="tahun_pinjam">
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="nama_petugas">Nama Petugas:</label><br>
                </td>
                <td>
                    <input type="checkbox" name="nama_petugas[]" value="Agus"> Agus<br>
                </td>
                <td>
                    <input type="checkbox" name="nama_petugas[]" value="Budi"> Budi<br>
                </td>
                <td>
                    <input type="checkbox" name="nama_petugas[]" value="Citra"> Citra
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="simpan">Simpan</button>
                </td>
                <td>
                    <button type="reset" name="batal">Batal</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>