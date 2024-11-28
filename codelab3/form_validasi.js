function validasiForm() {
    var nama = document.getElementById('nama').value;
    var email = document.getElementById('email').value;
    var alamat = document.getElementById('alamat').value; 

    // Memeriksa apakah input kosong
    if (nama === "" || email === "" || alamat === "") {
        alert("Harap masukkan semua data.");
    } else {
        alert("Form berhasil dikirim!");
    }
}
