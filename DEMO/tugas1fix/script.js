// Insert angka atau operator ke textview
function insert(num) {
    document.form.textarea.value += num; // Menambahkan angka atau operator ke textarea
}

// Fungsi untuk menghitung hasil
function equal() {
    try {
        var hasil = document.form.textarea.value;
        // Mengganti simbol pembagian untuk eval
        hasil = hasil.replace(/÷/g, '/').replace(/x/g, '*'); // Mengubah simbol menjadi operator JavaScript

        // Evaluasi ekspresi dan tampilkan hasil
        let result = eval(hasil); 
        document.form.textarea.value = parseFloat(result.toFixed(10)); // Menampilkan hasil dengan 10 angka desimal
    } catch (e) {
        document.form.textarea.value = "Error"; // Jika terjadi kesalahan
    }
}

// Fungsi untuk membersihkan input
function clean() {
    document.form.textarea.value = ""; // Mengosongkan textarea
}
