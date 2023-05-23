<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 01</title>
</head>
<body>

<form name="Latihan01" method="POST" onsubmit="return checkform(this)">
    <div>
        NIM
        <input type="text" name="txNIM">
    </div>

    <div>
        NAMA
        <input type="text" name="txNAMA">
    </div>

    <div>
        JENIS KELAMIN
        <input type="radio" name="txJK" value="L">Laki-Laki 
        <input type="radio" name="txJK" value="P">Perempuan
    </div>

    <div>
        JURUSAN
        <select name="txJURUSAN">
            <option value="TI-KAB">TI-KAB</option>
            <option value="TI-MTI">TI-MTI</option>
            <option value="TI-PAR">TI-PAR</option>
            <option value="SK">SK</option>
            <option value="DKV">DKV</option>
            <option value="DGM">DGM</option>
        </select>
       
    </div>

    <div>
        HOBI
        <input type="checkbox" name="Musik">Musik
        <input type="checkbox" name="Tari">Tari
        <input type="checkbox" name="Membaca">Membaca
        <input type="checkbox" name="Tidur">Tidur
        <input type="checkbox" name="Jogging">Jogging
        <input type="checkbox" name="Lari">Lari
        <input type="checkbox" name="Menangis">Menangis
    </div>
    <div>
        <button type="submit"> Kirim Data </button> 
    </div>

<script>
    function checkform(frm){
        let f = frm.elements;
        let nim = f.namedItem("txNIM").value;
        let nama = f.namedItem("txNAMA").value;
        let jeniskelamin = f.namedItem("txJK").value;
        let jurusan = f.namedItem("txJURUSAN").value;
        let hobi_musik=f.namedItem ("Musik").checked;
        let hobi_tari=f.namedItem ("Tari").checked;
        let hobi_membaca=f.namedItem ("Membaca").checked;
        let hobi_tidur=f.namedItem ("Tidur").checked;
        let hobi_jogging=f.namedItem ("Jogging").checked;
        let hobi_lari=f.namedItem ("Lari").checked;
        let hobi_menangis=f.namedItem ("Menangis").checked;

        console.log("NIM: "+nim);
        console.log("NAMA: "+nama);
        console.log("JENIS KELAMIN: "+jeniskelamin);
        console.log("JURUSAN: "+jurusan);
        console.log("HOBI_MUSIK: "+hobi_musik);
        console.log("HOBI_TARI: "+hobi_tari);
        console.log("HOBI_MEMBACA: "+hobi_membaca);
        console.log("HOBI_TIDUR: "+hobi_tidur);
        console.log("HOBI_JOGGING: "+hobi_jogging);
        console.log("HOBI_LARI: "+hobi_lari);
        console.log("HOBI_MENANGIS: "+hobi_menangis);
        return false;
    }
</script>
    
</body>
</html>