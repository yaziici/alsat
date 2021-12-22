# Projenin Kurulumu
## Dosyaları Çıkartma
Rar ‘la sıkıştırılmış dosyayı masaüstünde uygun bir klasöre çıkartıyoruz
### Veritabanı ve Sunucu Programı
PHP ve SQL dosyamısı çalıştırmak için WampServer programını işletim sistemine kuruyoruz.
### Veritabanı Düzenleme İşlemleri
- WampServer programı kurulduktan sonra http://localhost/phpmyadmin/ adresine giriyoruz.
- Kullanıcı Adı : root
- Şifre : (boş) olarak giriş yaptıktan sonra 
- “alsat” adında tablo oluşturuyoruz. Karşılaştırmayı “utf8_turkish_ci” olarak  ayarladıktan sonra tabloyu oluşturuyoruz.
- Tabloyu oluşturduktan sonra tabloyu giriş “İçe Aktar” ı seçip SQL dosyasından çıkan “alsat.sql” isimli dosyayı seçip içeri aktarıyoruz.
### Veritabanı Bağlantı İşlemleri
- İndirdiğimiz dosyanın içinde bulunan “\php\bağlan.php” dosyasını açıyoruz
- “$con = mysqli_connect("hostname "," username "," password "," database ");”  olacak şekilde bilgileri yazıyoruz. 
- Wamp kurulduktan sonra eğer default ayardaysak projenin içinki gibi; “$con = mysqli_connect("localhost","root","","alsat");” kodu işimizi görecektir.
### Localhost’a Taşıma
- İndirdiğimiz proje RAR’ının içindeki alsat klasörünü “C:\wamp64\www” dizininin  içine taşıyoruz.
- Daha sonra tarayıcıyı açıp http://localhost/alsat/ adresinden internet sitesine hatasız erişim sağlayabiliriz.
## Proje Tanıtımı
### Giriş sayfasında 3 bölüm vardır;
1. Anasayfa Vitrini: Yöneticinin seçtiği, (ücretli ilan düşünülebilir) ilanların yer aldığı Maximum 28 adet ürünün sergilendiği bölüm
2. Öne Çıkanlar: Rastgele seçilmiş 21 Adet ürünün sergilendiği bölüm
3. Son Eklenen İlanlar: Son eklenen 7 Adet ürünün sergilendiği bölüm
4. Sol kısımda ürün kategorileri sergilenmiştir
5. Üst kısımda “Üye Girişi” ve “Üye Ol” kısımlarından giriş yapılabilir veya kayıt  olabilir.
6. Üye ol kısmından üye olduktan sonra üyeliğiniz yöneticinin paneline düşecektir. 
7. Yönetici üyeliğinizi onaylamadığı sürece, ilan veremeyeceksiniz. Yönetici onayladıktan sonra  üyeliğiniz “Onaylı Üyelik” statüsüne girecek ve artık “Ücretsiz İlan Ver” butonu aktif hale  gelecektir.
8. Daha sonra (Yönetici onay verdikten sonra) ilan verip, ayrıca verdiğiniz ilana görseller ekleyebileceksiniz.
## Proje Kullanım Kılavuzu
Panelde tanımlı 2 adet üyelik mevcuttur;
- (Onaylı Üyelik): Kullanıcı adı: admin & Şifre: admin
- (Onaylı Olmayan Üyelik): Kullanıcı adı: test & Şifre: test
### Yönetici paneline erişmek için http://localhost/alsat/alsatadmin/ adresine giriyoruz.
- Kullanıcı Adı: admin@alsat.com & Şifre: admin
