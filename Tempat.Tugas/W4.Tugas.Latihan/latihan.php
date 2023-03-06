<html>

<body>
    <form action="panggillatihan.php" method="get">
        <table cellspacing="3" cellpadding="5" border="1px">
            <tr>
                <th colspan="2"> Sign Up </th>
            </tr>
            <tr>
                <td>Name :</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>E-mail :</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir :</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td>Program Study :</td>
                <td><select name="dropdown">
                        <option value="Managemen">Managemen</option>
                        <option value="Ilmu Komputer" selected>Ilmu Komputer</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                </td>
            </tr>
            <tr>
                <td>Alamat :</td>
                <td><textarea name="alamat" cols="25px" rows="5px" placeholder="Silakan Masukan alamat anda"></textarea></td>
            </tr>
            <tr>
                <td>Handphone</td>
                <td><input type="text" name="telpon"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jeniskelamin" value="Laki-laki" checked>Laki-laki
                    <input type="radio" name="jeniskelamin" value="Perempuan">Perempuam
                </td>
            </tr>
            <tr>
                <th colspan="2">
                    <button type="submit" value="save" name="save">Save
                    </button>
                    <button type="reset" value="cancel" name="cancel">Cancel</button>
                </th>
            </tr>
        </table>
    </form>
</body>

</html>