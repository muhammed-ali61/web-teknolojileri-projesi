function jsDogrula(){

    let hatalar = [];

// Ad kontrolü
    let ad = document.getElementById('ad').value.trim();

    if(ad === '') {

        hatalar.push('Ad boş bırakılmaz!');
    }

 // Soyad kontrolü
    let soyad = document.getElementById('soyad').value.trim();

    if (soyad === '') {

        hatalar.push('Soyad boş bırakılamaz!');
    }

 // Email kontrolü
     let email = document.getElementById('email').value.trim();

     if(email === '') {

         hatalar.push('E-posta boş bırakılamaz!');
      } else if (!email.includes('@') || !email.includes('.') ){

         hatalar.push('Geçerli bir e-posta giriniz!');
      }

 // Telefon kontrolü

      let telefon = document.getElementById('telefon').value.trim();

      if (telefon === '') {

        hatalar.push('telefon kısmı boş bırakılamaz!');

    }else if (!/^\d+$/.test(telefon)) {

        hatalar.push('Telefon sadece rakamlardan oluşmalıdır!');
    }
 // Konu kontrolü
     let konu = document.getElementById('konu').value;

    if (konu === '') {

        hatalar.push('Konu seçiniz!');
    }
    
 // Cinsiyet kontrolü
    let cinsiyet = document.querySelector('input[name="cinsiyet"]:checked');

    if (!cinsiyet) {

        hatalar.push('Cinsiyet seçiniz!');
    }

 // Mesaj kontrolü
    let mesaj = document.getElementById('mesaj').value.trim();

    if (mesaj === '') {

        hatalar.push('Mesaj boş bırakılamaz!');
    }

// Sözleşme kontrolü
    let sozlesme = document.getElementById('sozlesme').checked;

    if (!sozlesme) {

        hatalar.push('Sözleşmeyi kabul etmelisiniz!');
    }

// Sonuç
    if (hatalar.length > 0) {

        alert('Hatalar:\n' + hatalar.join('\n'));

    } else {

        alert('JS Doğrulama başarılı!');

        document.getElementById('iletisimForm').submit();
    }

}