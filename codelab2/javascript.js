// Fungsi untuk menghitung penjumlahan
function hitung() {
    var angka1 = parseFloat(document.getElementById('angka1').value);
    var angka2 = parseFloat(document.getElementById('angka2').value);
    var hasil = angka1 + angka2;
    document.getElementById('hasil').innerText = hasil;
}

// Fungsi untuk mereset form
function resetForm() {
    document.getElementById('angka1').value = '';
    document.getElementById('angka2').value = '';
    document.getElementById('hasil').innerText = '';
}
