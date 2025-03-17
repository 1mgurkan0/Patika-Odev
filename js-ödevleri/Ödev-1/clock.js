let isim = prompt("Adınızı Giriniz :")
let yazdirma = document.querySelector("#myName")
yazdirma.innerHTML = isim  // Prompt ile İsim değeri alındı ve yazdırıldı
let tarih = new Date()     // Date ile gün ile ilgili bilgiler alındı 
let tarihYazdirma = document.querySelector("#myClock") 
let gunler = ["Pazartesi" , "Salı" , "Çarşamba" , "Perşembe" , "Cuma" , "Cumartesi" , "Pazar"] // Bu Diziyi Girmeseydik günü 1 , 2 diye gösterirdi
let gun = gunler[tarih.getDay()]; // Günü aldık
let saat = tarih.getHours();      // Saati aldık
let dakika = tarih.getMinutes();  // Dakikayı aldık
let saniye = tarih.getSeconds();  // Saniyeyi aldık
tarihYazdirma.innerHTML = `${saat}:${dakika}:${saniye} ${gun}` // alınan değerleri Burada Girdik 