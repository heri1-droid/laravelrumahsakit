document.getElementById('sendWa').addEventListener('click', function() {
    var phoneNumber = '6289677231836'; // Nomor WhatsApp tujuan
    var userPhone = document.getElementById('telp').value; // Mengambil nomor telepon dari input
    var userMessage = document.getElementById('isi').value; // Mengambil pesan dari input

    // Gabungkan nomor telepon dan pesan dengan format yang lebih baik
    var fullMessage = `: Halo%20RSI%20Ar-Rasyid%20Palembang%0ASaya%20ingin%20menyampaikan%20hal%20berikut%0ANomor%20Telepon${userPhone}%3A%20089823%0ASaran%2FPertanyaan%3Aetetrert${userMessage}%0ATerima%20kasih.`;

    // Encode pesan untuk URL
    var encodedMessage = encodeURIComponent(fullMessage);

    // Buat URL WhatsApp
    var whatsappUrl = `https://api.whatsapp.com/send/?phone=${phoneNumber}&text=${encodedMessage}&type=phone_number&app_absent=0`;

    // Redirect ke URL WhatsApp
    window.open(whatsappUrl, '_blank');
});
