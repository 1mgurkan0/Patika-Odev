let yeniEleman = document.querySelector("#liveToast") //Ekle butonu id si alındı
let yeniElemanIcerik = document.querySelector("#task") //Girilen metnin id si alındı
let elemanListesi = document.querySelector("#list")   // Listin id si alındı

function newElement(){  // Ekle butonuna tıklanınca item istenilen şekilde ekleniyor.
    let eklenecekEleman = document.createElement("li") // li etiketi oluşturuyoruz
    if(yeniElemanIcerik.value.trim() !== ""){ // boş etiket oluşmasın diye if ile kontrol ediyoruz
    eklenecekEleman.innerHTML= `${yeniElemanIcerik.value}<span onclick="newElementDelete(event, this)"> x</span>`  // Eklenecek li nin içeriğini ekliyoruz
    localStorage.setItem("bilgiEkle" , `${yeniElemanIcerik.value}`)
    eklenecekEleman.onclick = function() {  // yeni eklenecek li ye fonksiyon ile li ye onclick ekliyoruz
        newElementClick(eklenecekEleman)
    }
    elemanListesi.append(eklenecekEleman) // ul nin içerisine li yi ekliyoruz
    alert("Eleman Eklemesi Yapıldı") // Bootstrap kullanmadığım için alert verdim
    yeniElemanIcerik.value = ""      // ekleme yapıldıgında içerik ekleme kısmının içeriğini sıfırladım
}
   else{
    alert("Listeye Boş ekleme yapılamaz ! ") 
   }
}
function newElementDelete(event , element){ // Bootstrap kullanmadığım için x yazısına basınca silmesi için fonk atadım
    event.stopPropagation()  // bunu kullanma sebebim ise metnini üstünü çiz deyince fonksiyonların çakışmaması için
    element.parentElement.remove()
}
function newElementClick(elementcizme) { // metnin üstünü çizdirmek için yazdıgım fonksiyon
    if (elementcizme.classList.contains('strikethrough')) {
        elementcizme.classList.remove('strikethrough'); // Üstü çizili metni düzelt
    } else {
        elementcizme.classList.add('strikethrough'); // Üstünü çiz
    }
}