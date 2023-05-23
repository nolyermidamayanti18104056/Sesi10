<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 02</title>
</head>
<body>

<form name="Latihan02" id="Latihan 02" method="POST" onsubmit="return checkform()">
    <div>
        NIM
        <input type="text" id="nim"name="txNIM">
    </div>

    <div>
        NAMA
        <input type="text" id="nama" name="txNAMA">
    </div>

    <div>
        JENIS KELAMIN
        <input type="radio" id="JK" name="txJK" value="L">Laki-Laki 
        <input type="radio" id="JK" name="txJK" value="P">Perempuan
    </div>

    <div>
        JURUSAN
        <select id="jurusan" name="txJURUSAN">
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
        <input type="checkbox" id="txhobi" name="Musik">Musik
        <input type="checkbox" id="txhobi" name="Tari">Tari
        <input type="checkbox" id="txhobi" name="Membaca">Membaca
        <input type="checkbox" id="txhobi" name="Tidur">Tidur
        <input type="checkbox" id="txhobi" name="Jogging">Jogging
        <input type="checkbox" id="txhobi" name="Lari">Lari
        <input type="checkbox" id="txhobi" name="Menangis">Menangis
    </div>
    <div>
        <button type="submit"> Kirim Data </button> 
    </div>

<script>
    function checkform(){
        let f = document.getElementById("Latihan 02").elemnts;
        let nim = f.nim.value;
        let nama = f.nama.value;
        let jeniskelamin = f.jk.value;
        let jurusan = f.jurusan.value;

        let hobi_musik=f.txhobi[0].checked;
        let hobi_tari=f.txhobi[1].checked;
        let hobi_membaca=f.txhobi[2].checked;
        let hobi_tidur=f.txhobi[3].checked;
        let hobi_jogging=f.txhobi[4].checked;
        let hobi_lari=f.txhobi[5].checked;
        let hobi_menangis=f.txhobi[6].checked;

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