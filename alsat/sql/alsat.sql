-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 26 Oca 2021, 11:24:48
-- Sunucu sürümü: 10.4.10-MariaDB
-- PHP Sürümü: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `alsat`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_nick` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `admin_kadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nick`, `admin_kadi`, `admin_sifre`) VALUES
(1, 'Admin', 'admin@alsat.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `altkategori`
--

DROP TABLE IF EXISTS `altkategori`;
CREATE TABLE IF NOT EXISTS `altkategori` (
  `altkat_id` int(11) NOT NULL AUTO_INCREMENT,
  `altkat_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `altkat_ustid` int(50) NOT NULL,
  PRIMARY KEY (`altkat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `altkategori`
--

INSERT INTO `altkategori` (`altkat_id`, `altkat_ad`, `altkat_ustid`) VALUES
(1, 'Konut', 1),
(2, 'Arsa', 1),
(3, 'Bina', 1),
(4, 'Otomobil', 2),
(5, 'Arazi,Suv & Pick- Up', 2),
(6, 'Motorsiklet', 2),
(7, 'Bilgisayar', 3),
(8, 'Telefon', 3),
(9, 'Giyim & Aksesuar', 3),
(10, 'İş Makinaları', 4),
(11, 'Tarım Makinaları', 4),
(12, 'Sanayi', 4),
(13, 'Ev Tadilat', 5),
(14, 'Nakliye', 5),
(15, 'Araç Bakım', 5),
(16, 'Bilgisayar Mühendisi', 6),
(17, 'Yazılım Mühendisi', 6),
(18, 'Satış Sorumlusu', 6);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

DROP TABLE IF EXISTS `ayarlar`;
CREATE TABLE IF NOT EXISTS `ayarlar` (
  `ayar_id` int(200) NOT NULL AUTO_INCREMENT,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_footer` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_fax` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `uye_sozlesme` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ayar_id`),
  UNIQUE KEY `ayar_id` (`ayar_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_logo`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_mail`, `ayar_footer`, `ayar_tel`, `ayar_adres`, `ayar_fax`, `uye_sozlesme`) VALUES
(1, 'png', 'Alalım Satalım Birlikte Kazanalım  ', 'Alım Satım Sitesi Proje Konusu ', 'al,sat,kazan,ticaret,sahibinden', 'proje@alsat.com ', 'Proje konusudur. Tüm hakları saklıdır. 2021 Emre Yazıcı ', '0212 485 8888', ' İstanbul / Bahçelievler', '0212 465 8797', 'Site Kullanım Şartları - Üyelik Sözleşmesi İçerik Örneği\r\nBu sayfada yer alan sözleşme tamamen örnek olması için eklenmiştir. Maddeler sektöre göre değişiklik gösterilebilir.Sözleşme içeriğini firmanıza göre düzenleyerek sitenize eklemelisiniz. Sözleşme içeriğinden site sahibi sorumludur, Firmamızın örnek sözleşmelerin eklenmesinden kaynaklı herhangi bir yükümlülüğü bulunmamaktadır.\r\nSözleşmeleri İçerik Yönetimi >> Sayfalar bölümünden düzenleyebilirsiniz. Sayfalar bölümü ile ilgili hazırladığımız yardım sayfası için buraya tıklayınız.\r\n \r\n \r\nSİTE KULLANIM ŞARTLARI\r\nLütfen sitemizi kullanmadan evvel bu ‘site kullanım şartları’nı dikkatlice okuyunuz. \r\nBu alışveriş sitesini kullanan ve alışveriş yapan müşterilerimiz aşağıdaki şartları kabul etmiş varsayılmaktadır:\r\nSitemizdeki web sayfaları ve ona bağlı tüm sayfalar (‘site’) ……………………… adresindeki ……………………………….firmasının (Firma) malıdır ve onun tarafından işletilir. Sizler (‘Kullanıcı’) sitede sunulan tüm hizmetleri kullanırken aşağıdaki şartlara tabi olduğunuzu, sitedeki hizmetten yararlanmakla ve kullanmaya devam etmekle; Bağlı olduğunuz yasalara göre sözleşme imzalama hakkına, yetkisine ve hukuki ehliyetine sahip ve 18 yaşın üzerinde olduğunuzu, bu sözleşmeyi okuduğunuzu, anladığınızı ve sözleşmede yazan şartlarla bağlı olduğunuzu kabul etmiş sayılırsınız. \r\n\r\nİşbu sözleşme taraflara sözleşme konusu site ile ilgili hak ve yükümlülükler yükler ve taraflar işbu sözleşmeyi kabul ettiklerinde bahsi geçen hak ve yükümlülükleri eksiksiz, doğru, zamanında, işbu sözleşmede talep edilen şartlar dâhilinde yerine getireceklerini beyan ederler.\r\n\r\n1. SORUMLULUKLAR\r\na.Firma, fiyatlar ve sunulan ürün ve hizmetler üzerinde değişiklik yapma hakkını her zaman saklı tutar. \r\nb.Firma, üyenin sözleşme konusu hizmetlerden, teknik arızalar dışında yararlandırılacağını kabul ve taahhüt eder.\r\nc.Kullanıcı, sitenin kullanımında tersine mühendislik yapmayacağını ya da bunların kaynak kodunu bulmak veya elde etmek amacına yönelik herhangi bir başka işlemde bulunmayacağını aksi halde ve 3. Kişiler nezdinde doğacak zararlardan sorumlu olacağını, hakkında hukuki ve cezai işlem yapılacağını peşinen kabul eder. \r\nd.Kullanıcı, site içindeki faaliyetlerinde, sitenin herhangi bir bölümünde veya iletişimlerinde genel ahlaka ve adaba aykırı, kanuna aykırı, 3. Kişilerin haklarını zedeleyen, yanıltıcı, saldırgan, müstehcen, pornografik, kişilik haklarını zedeleyen, telif haklarına aykırı, yasa dışı faaliyetleri teşvik eden içerikler üretmeyeceğini, paylaşmayacağını kabul eder. Aksi halde oluşacak zarardan tamamen kendisi sorumludur ve bu durumda ‘Site’ yetkilileri, bu tür hesapları askıya alabilir, sona erdirebilir, yasal süreç başlatma hakkını saklı tutar. Bu sebeple yargı mercilerinden etkinlik veya kullanıcı hesapları ile ilgili bilgi talepleri gelirse paylaşma hakkını saklı tutar.\r\ne.Sitenin üyelerinin birbirleri veya üçüncü şahıslarla olan ilişkileri kendi sorumluluğundadır. \r\n\r\n2.  Fikri Mülkiyet Hakları\r\n\r\n2.1. İşbu Site’de yer alan ünvan, işletme adı, marka, patent, logo, tasarım, bilgi ve yöntem gibi tescilli veya tescilsiz tüm fikri mülkiyet hakları site işleteni ve sahibi firmaya veya belirtilen ilgilisine ait olup, ulusal ve uluslararası hukukun koruması altındadır. İşbu Site’nin ziyaret edilmesi veya bu Site’deki hizmetlerden yararlanılması söz konusu fikri mülkiyet hakları konusunda hiçbir hak vermez.\r\n2.2. Site’de yer alan bilgiler hiçbir şekilde çoğaltılamaz, yayınlanamaz, kopyalanamaz, sunulamaz ve/veya aktarılamaz. Site’nin bütünü veya bir kısmı diğer bir internet sitesinde izinsiz olarak kullanılamaz. \r\n\r\n3. Gizli Bilgi\r\n3.1. Firma, site üzerinden kullanıcıların ilettiği kişisel bilgileri 3. Kişilere açıklamayacaktır. Bu kişisel bilgiler; kişi adı-soyadı, adresi, telefon numarası, cep telefonu, e-posta adresi gibi Kullanıcı’yı tanımlamaya yönelik her türlü diğer bilgiyi içermekte olup, kısaca ‘Gizli Bilgiler’ olarak anılacaktır.\r\n\r\n3.2. Kullanıcı, sadece tanıtım, reklam, kampanya, promosyon, duyuru vb. pazarlama faaliyetleri kapsamında kullanılması ile sınırlı olmak üzere, Site’nin sahibi olan firmanın kendisine ait iletişim, portföy durumu ve demografik bilgilerini iştirakleri ya da bağlı bulunduğu grup şirketleri ile paylaşmasına muvafakat ettiğini kabul ve beyan eder. Bu kişisel bilgiler firma bünyesinde müşteri profili belirlemek, müşteri profiline uygun promosyon ve kampanyalar sunmak ve istatistiksel çalışmalar yapmak amacıyla kullanılabilecektir.\r\n\r\n3.3. Gizli Bilgiler, ancak resmi makamlarca usulü dairesinde bu bilgilerin talep edilmesi halinde ve yürürlükteki emredici mevzuat hükümleri gereğince resmi makamlara açıklama yapılmasının zorunlu olduğu durumlarda resmi makamlara açıklanabilecektir.\r\n\r\n4. Garanti Vermeme: İŞBU SÖZLEŞME MADDESİ UYGULANABİLİR KANUNUN İZİN VERDİĞİ AZAMİ ÖLÇÜDE GEÇERLİ OLACAKTIR. FİRMA TARAFINDAN SUNULAN HİZMETLER \"OLDUĞU GİBİ” VE \"MÜMKÜN OLDUĞU” TEMELDE SUNULMAKTA VE PAZARLANABİLİRLİK, BELİRLİ BİR AMACA UYGUNLUK VEYA İHLAL ETMEME KONUSUNDA TÜM ZIMNİ GARANTİLER DE DÂHİL OLMAK ÜZERE HİZMETLER VEYA UYGULAMA İLE İLGİLİ OLARAK (BUNLARDA YER ALAN TÜM BİLGİLER DÂHİL) SARİH VEYA ZIMNİ, KANUNİ VEYA BAŞKA BİR NİTELİKTE HİÇBİR GARANTİDE BULUNMAMAKTADIR. \r\n\r\n5. Kayıt ve Güvenlik \r\nKullanıcı, doğru, eksiksiz ve güncel kayıt bilgilerini vermek zorundadır. Aksi halde bu Sözleşme ihlal edilmiş sayılacak ve Kullanıcı bilgilendirilmeksizin hesap kapatılabilecektir.\r\nKullanıcı, site ve üçüncü taraf sitelerdeki şifre ve hesap güvenliğinden kendisi sorumludur. Aksi halde oluşacak veri kayıplarından ve güvenlik ihlallerinden veya donanım ve cihazların zarar görmesinden Firma sorumlu tutulamaz.\r\n\r\n6. Mücbir Sebep\r\n\r\nTarafların kontrolünde olmayan; tabii afetler, yangın, patlamalar, iç savaşlar, savaşlar, ayaklanmalar, halk hareketleri, seferberlik ilanı, grev, lokavt ve salgın hastalıklar, altyapı ve internet arızaları, elektrik kesintisi gibi sebeplerden (aşağıda birlikte \"Mücbir Sebep” olarak anılacaktır.) dolayı sözleşmeden doğan yükümlülükler taraflarca ifa edilemez hale gelirse, taraflar bundan sorumlu değildir. Bu sürede Taraflar’ın işbu Sözleşme’den doğan hak ve yükümlülükleri askıya alınır. \r\n\r\n7. Sözleşmenin Bütünlüğü ve Uygulanabilirlik\r\n\r\nİşbu sözleşme şartlarından biri, kısmen veya tamamen geçersiz hale gelirse, sözleşmenin geri kalanı geçerliliğini korumaya devam eder.\r\n\r\n8. Sözleşmede Yapılacak Değişiklikler\r\n\r\nFirma, dilediği zaman sitede sunulan hizmetleri ve işbu sözleşme şartlarını kısmen veya tamamen değiştirebilir. Değişiklikler sitede yayınlandığı tarihten itibaren geçerli olacaktır. Değişiklikleri takip etmek Kullanıcı’nın sorumluluğundadır. Kullanıcı, sunulan hizmetlerden yararlanmaya devam etmekle bu değişiklikleri de kabul etmiş sayılır.\r\n\r\n9. Tebligat\r\nİşbu Sözleşme ile ilgili taraflara gönderilecek olan tüm bildirimler, Firma’nın bilinen e.posta adresi ve kullanıcının üyelik formunda belirttiği e.posta adresi vasıtasıyla yapılacaktır. Kullanıcı, üye olurken belirttiği adresin geçerli tebligat adresi olduğunu, değişmesi durumunda 5 gün içinde yazılı olarak diğer tarafa bildireceğini, aksi halde bu adrese yapılacak tebligatların geçerli sayılacağını kabul eder.\r\n\r\n10. Delil Sözleşmesi\r\nTaraflar arasında işbu sözleşme ile ilgili işlemler için çıkabilecek her türlü uyuşmazlıklarda Taraflar’ın defter, kayıt ve belgeleri ile ve bilgisayar kayıtları ve faks kayıtları 6100 sayılı Hukuk Muhakemeleri Kanunu uyarınca delil olarak kabul edilecek olup, kullanıcı bu kayıtlara itiraz etmeyeceğini kabul eder.\r\n\r\n11. Uyuşmazlıkların Çözümü\r\nİşbu Sözleşme’nin uygulanmasından veya yorumlanmasından doğacak her türlü uyuşmazlığın çözümünde İstanbul (Merkez) Adliyesi Mahkemeleri ve İcra Daireleri yetkilidir.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int(15) NOT NULL AUTO_INCREMENT,
  `kategori_ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(50) DEFAULT NULL,
  `kategori_icon` varchar(250) COLLATE utf8_turkish_ci DEFAULT 's.png',
  PRIMARY KEY (`kategori_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_ad`, `kategori_sira`, `kategori_icon`) VALUES
(1, 'Emlak', 1, '1.png'),
(2, 'Vasıta', 2, '2.png'),
(3, 'Alışveriş', 3, 'buy_16.png'),
(4, 'İş Makineleri / Sanayi', 4, 'is.png'),
(5, 'Hizmet', 5, 'hiz.png'),
(6, 'İş İlanları', 6, 'is.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunfoto`
--

DROP TABLE IF EXISTS `urunfoto`;
CREATE TABLE IF NOT EXISTS `urunfoto` (
  `urunfoto_id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_id` int(11) NOT NULL,
  `urunfoto_resimurl` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`urunfoto_id`),
  KEY `urun_id` (`urun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunfoto`
--

INSERT INTO `urunfoto` (`urunfoto_id`, `urun_id`, `urunfoto_resimurl`) VALUES
(2, 1, 'uploads/urunler/a2.jpg'),
(3, 1, 'uploads/urunler/a3.jpg'),
(4, 1, 'uploads/urunler/a4.jpg'),
(5, 1, 'uploads/urunler/a5.jpg'),
(6, 2, 'uploads/urunler/b2.jpg'),
(7, 2, 'uploads/urunler/b3.jpg'),
(8, 2, 'uploads/urunler/b4.jpg'),
(10, 3, 'uploads/urunler/c2.jpg'),
(11, 3, 'uploads/urunler/c3.jpg'),
(18, 4, 'uploads/urunler/d2.jpg'),
(19, 4, 'uploads/urunler/d3.jpg'),
(50, 15, 'uploads/urunler/27067Anasayfa.jpg'),
(51, 15, 'uploads/urunler/239595.png'),
(53, 14, 'uploads/urunler/22069123123.png'),
(54, 14, 'uploads/urunler/21720Anasayfa.jpg'),
(55, 21, 'uploads/urunler/203242.jpg'),
(63, 22, 'uploads/urunler/2197718abd969-6ead-4e5f-9a5c-87f70f790221_image_for_silan_16488010_1920x1080.jpg'),
(64, 22, 'uploads/urunler/303450a7e0150-e8d9-41a6-9d76-56cf177dcc9f_image_for_silan_16488010_1920x1080.jpg'),
(65, 22, 'uploads/urunler/21497a76864e5-b0b4-452a-bb51-4b859d09f038_image_for_silan_16488010_1920x1080.jpg'),
(66, 22, 'uploads/urunler/27080553b3c00-44d6-4c6e-9758-f7b5a582569f_image_for_silan_16488010_1920x1080.jpg'),
(67, 22, 'uploads/urunler/30876d32ad22c-aa97-4a9d-b816-3ed9dc849658_image_for_silan_16488010_1920x1080.jpg'),
(68, 23, 'uploads/urunler/20720081e072c-b94b-40ac-92dd-c90f895d4451_image_for_silan_16475752_1920x1080.jpg'),
(69, 23, 'uploads/urunler/309800468b789-193b-4724-a56a-dd3ced65fcd1_image_for_silan_16475752_1920x1080.jpg'),
(70, 23, 'uploads/urunler/31531ba02466c-4d84-4656-aacf-99e5a723c312_image_for_silan_16475752_1920x1080.jpg'),
(71, 24, 'uploads/urunler/230073f766179-93b7-4db3-859c-d5a7c2e2a621_image_for_silan_16486569_800x600.jpg'),
(72, 24, 'uploads/urunler/273539739eb6c-d977-4eac-92cf-cad36c460a7f_image_for_silan_16486569_800x600.jpg'),
(73, 24, 'uploads/urunler/30633b0039b91-7b9b-4600-8839-900585497395_image_for_silan_16486569_800x600.jpg'),
(74, 24, 'uploads/urunler/27758ecd691ce-0a40-4b52-b530-db809740c64a_image_for_silan_16486569_800x600.jpg'),
(75, 25, 'uploads/urunler/234770a20ba92-5a92-4e4a-af6f-ad8850f96670_image_for_silan_16295300_1920x1080.jpg'),
(76, 25, 'uploads/urunler/29318171a1eb8-7004-4102-8e9a-979249bd192d_image_for_silan_16295300_1920x1080.jpg'),
(77, 25, 'uploads/urunler/24768cb10b564-749e-4853-8b2e-6604bbb6b784_image_for_silan_16295300_1920x1080.jpg'),
(78, 26, 'uploads/urunler/23064868f47e1-c527-45f9-b848-4af7cf4beb43_image_for_silan_16450114_800x600.jpg'),
(79, 26, 'uploads/urunler/234458f7936da-b2d3-451d-ae80-add19571c760_image_for_silan_16450114_800x600.jpg'),
(81, 64, 'uploads/urunler/220841611141507536-36586027.jpg'),
(82, 64, 'uploads/urunler/227031611141507542-36586027.jpg'),
(83, 64, 'uploads/urunler/309911611141507549-36586027.jpg'),
(84, 65, 'uploads/urunler/302501611073479257-36582884.jpg'),
(85, 65, 'uploads/urunler/204291611073479264-36582884.jpg'),
(86, 65, 'uploads/urunler/286021611073479289-36582884.jpg'),
(87, 66, 'uploads/urunler/3151924da99ba-64a5-48cf-9ade-9772acba1ae6_image_for_silan_16481847_1920x1080.jpg'),
(88, 66, 'uploads/urunler/2691986cb5a28-5ecb-4891-94d4-454baebe785a_image_for_silan_16481847_1920x1080.jpg'),
(89, 66, 'uploads/urunler/203217582de16-2eb9-487e-a2c7-d150e9095ec0_image_for_silan_16481847_1920x1080.jpg'),
(90, 66, 'uploads/urunler/24087acc51dd8-121c-4667-83eb-1204a6632d93_image_for_silan_16481847_1920x1080.jpg'),
(91, 66, 'uploads/urunler/21523f8f92c5f-833b-47b4-9522-0d7b62ac037e_image_for_silan_16481847_1920x1080.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `urun_id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_ad` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `urun_aciklama` varchar(10000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_fiyat` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `urun_foto` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_model` int(15) NOT NULL,
  `urun_ustid` int(11) NOT NULL,
  `urun_ilantarih` date NOT NULL DEFAULT current_timestamp(),
  `urun_kimden` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `urun_durum` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `urun_garanti` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `urun_renk` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `urun_il` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `urun_kulid` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `urun_vitrin` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`urun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_ad`, `urun_aciklama`, `urun_fiyat`, `urun_foto`, `urun_model`, `urun_ustid`, `urun_ilantarih`, `urun_kimden`, `urun_durum`, `urun_garanti`, `urun_renk`, `urun_il`, `urun_kulid`, `urun_vitrin`) VALUES
(22, 'Galeriden Nissan Qashqai 1.6 dCi Sky Pack 2018 Model', '<p><strong>ARACIMIZ&nbsp;</strong></p>\r\n\r\n<p><strong>2018 MODEL NİSSAN QASHQAİ&nbsp;</strong><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>&lsquo;SKY PACK&rsquo;PAKETTİR</strong></p>\r\n\r\n<p><strong>CAM TAVAN MEVCUTTUR</strong></p>\r\n\r\n<p><strong>HATASIZ BOYASIZ DEĞİŞENSİZDİR</strong></p>\r\n\r\n<p><strong>HASAR KAYDI YOKTUR</strong></p>\r\n\r\n<p><strong>İ&Ccedil; PANEL ŞASE DİREK PODYE GİBİ &Ouml;NEMLİ YERLERE ANAHTAR DAHİ DEĞMEMİŞTİR.</strong></p>\r\n\r\n<p><strong>ORJİNAL 98 BİN KMDEDİR</strong></p>\r\n\r\n<p><strong>PERİYODİK BAKIMI YENİ YAPILMIŞTIR</strong></p>\r\n\r\n<p><strong>STEPNESİ DAHA KULLANILMAMIŞTIR.</strong></p>\r\n\r\n<p><strong>ARACIMIZDA S&Ouml;K&Uuml;L&Uuml;P TAKILAN HERHANGİ BİR PAR&Ccedil;A YOKTUR</strong></p>\r\n\r\n<p><strong>MOTOR Y&Uuml;R&Uuml;YEN SIKINTISIZDIR</strong></p>\r\n\r\n<p><strong>T&Uuml;M BAKIMLARI YAPILMIŞTIR.</strong></p>\r\n\r\n<p><strong>MUAYENESİ DEVAM ETMEKTEDİR&nbsp;</strong></p>\r\n\r\n<p><strong>Dediğimizin haricinde&nbsp;herhangi birşey &ccedil;ıkarsa gelecek arkadaşların masrafları tarafımızca karşılanacaktır...</strong></p>\r\n\r\n<p><strong>SEMBOL OTOMOTİV</strong></p>\r\n', '257.750', 'uploads/urunler/317766b6f5c89-85f7-4ba0-b0a6-50da2c612b35_image_for_silan_16488010_1920x1080.jpg', 2018, 5, '2021-01-25', 'Galeriden', 'İkinci El', 'Garanti Yok', 'Beyaz', 'Adıyaman', '1', 1),
(23, '2016 FORD FOCUS 1.5 TDCİ TREND X-POWERSHİFT-CRUISE-', '<p>2016 FORD FOCUS&nbsp;</p>\r\n\r\n<p>1.6 TDCİ TREND X POWERSHİFT</p>\r\n\r\n<p>DEĞİŞENSİZ,ORJİNAL</p>\r\n\r\n<p>4,5 PAR&Ccedil;A BOYA MEVCUT</p>\r\n\r\n<p>HASAR KAYITSIZ..</p>\r\n\r\n<p>YETKİLİ SERVİS BAKIMLI</p>\r\n\r\n<p>İ&Ccedil; AKSAMINDA EN UFAK DEFORME YOKTUR..</p>\r\n\r\n<p>DETAYLI BİLGİ İ&Ccedil;İN ARAYINIZ..</p>\r\n', '169.000', 'uploads/urunler/28821ba02466c-4d84-4656-aacf-99e5a723c312_image_for_silan_16475752_1920x1080.jpg', 2016, 4, '2021-01-25', 'Galeriden', 'İkinci El', 'Garanti Yok', 'Beyaz', 'Denizli', '1', 0),
(24, 'HASAR KAYITSIZ DEĞİŞENSİZ S 320L HİÇ LPG TAKILMAMIŞTIR', '<p><strong>ARACIMIZ TAVAN HARİ&Ccedil; BOYALIDIR</strong></p>\r\n\r\n<p><strong>DARBE DEĞİŞEN YOKTUR.</strong></p>\r\n\r\n<p><strong>HASAR KAYDI TRAMER YOKTUR.</strong></p>\r\n\r\n<p><strong>ŞİMDİYE KADAR Hİ&Ccedil; LPG TAKILMAMIŞTIR.</strong></p>\r\n\r\n<p><strong>ARACIMIZDA &Ccedil;ALIŞMAYAN Hİ&Ccedil;BİR AKSAM YOKTUR.</strong></p>\r\n\r\n<p><strong>VAKUMLU KAPILAR</strong></p>\r\n\r\n<p><strong>BUZDOLABI</strong></p>\r\n\r\n<p><strong>DIŞI MOR İ&Ccedil;İ BEJ RENGİ TUTULAN RENK MODELİDİR.</strong></p>\r\n\r\n<p><strong>ORJİNAL TEYP</strong></p>\r\n\r\n<p><strong>ELEKTRİKLİ &Ouml;N KOLTUKLAR</strong></p>\r\n\r\n<p><strong>ELEKTRİKLİ ARKA KOLTUKLAR</strong></p>\r\n\r\n<p><strong>ISITMALI VE SOĞUTMALI KOLTUKLAR</strong></p>\r\n\r\n<p><strong>&Ouml;N VE ARKA PARK SENS&Ouml;RLERİ</strong></p>\r\n\r\n<p><strong>HIZ SABİTLEYİCİ</strong></p>\r\n\r\n<p><strong>HIZ LİMİTLEYİCİ</strong></p>\r\n\r\n<p><strong>&Ouml;N VE ARKA KOL DAYAMA</strong></p>\r\n\r\n<p><strong>YAĞMUR SENS&Ouml;R&Uuml;</strong></p>\r\n\r\n<p><strong>FAR SENS&Ouml;R&Uuml;</strong></p>\r\n\r\n<p><strong>DUAL DİGİTAL &Ccedil;İFT B&Ouml;LGE KLİMA</strong></p>\r\n\r\n<p><strong>ABS - ESP - ASR</strong></p>\r\n\r\n<p><strong>AİRMATİC</strong></p>\r\n\r\n<p><strong>START STOP</strong></p>\r\n\r\n<p><strong>YOKUŞ&nbsp; KALKIŞ DESTEĞİ</strong></p>\r\n\r\n<p><strong>ELEKTRİKLİ PERDE</strong></p>\r\n\r\n<p><strong>LASTİKLER İYİ DURUMDA</strong></p>\r\n\r\n<p><strong>ALT TAKIMLAR GAYET İYİ</strong></p>\r\n\r\n<p><strong>AMG &Ccedil;ELİK CANTLAR</strong></p>\r\n\r\n<p><strong>AİR S&Uuml;SPANSİYON DA ARIZA YOKTUR &Ccedil;ALIŞIYOR.</strong></p>\r\n\r\n<p><strong>VE DAHA BİR &Ccedil;OK &Ouml;ZELLİK VARDIR.</strong></p>\r\n\r\n<p><strong>ARA&Ccedil; &Ccedil;OK TEMİZ VE BAKIMLI KULLANILMIŞTIR.</strong></p>\r\n\r\n<p><strong>TAKAS VARDIR. TAKAS FİYATIMIZ FARKLIDIR.</strong></p>\r\n\r\n<p><strong>ALICISINA ŞİMDİDEN HAYIRLI OLSUN.</strong></p>\r\n', '149.000', 'uploads/urunler/289102ceb3734-46f6-4627-b6c1-4d1ea68b3591_image_for_silan_16486569_800x600.jpg', 2000, 4, '2021-01-25', 'Sahibinden', 'İkinci El', 'Garanti Yok', 'Mavi', 'Çorum', '1', 1),
(25, 'VW PASSAT R-LİNE 1.6TDİ HATASIZ-BOYASIZ CAMTVN-E.BGJ-19JANT 2020', '<p>&nbsp; &nbsp; TUNER AUTO &#39;DAN</p>\r\n\r\n<p>​</p>\r\n\r\n<p>VW PASSAT 1.6 BLUEMOTİON DSG ELEGANCE / R-LİNE</p>\r\n\r\n<p>LACİVERT SADECE 8.000 KM&rsquo;DE</p>\r\n\r\n<p>19&#39;&#39; VERONA JANT+SPOR S&Uuml;SPANSİYON+R-LİNE DİREKSİYON+R-LİNE &Ouml;N IZGARA - R-LİNE KAPI &Ccedil;İTALARI+ELEKTRİKLİ BAGAJ+APP CONNECT+<br />\r\nCAM TAVAN</p>\r\n\r\n<p>Yedek Anahtarı Mevcuttur.</p>\r\n\r\n<p>ARA&Ccedil; &Ouml;ZELLİKLERİ&nbsp;</p>\r\n\r\n<p><strong><strong>&Ccedil;ift B&ouml;lgeli Hayalet Ekran</strong></strong></p>\r\n\r\n<p><strong><strong>Cam Tavan</strong></strong></p>\r\n\r\n<p><strong><strong>Elektrikli 14 Y&ouml;nde Ayarlanabilir &Ouml;n Koltuklar</strong></strong></p>\r\n\r\n<p><strong><strong>S&uuml;r&uuml;c&uuml; Koltuğu Hafıza ve Masaj Koltuk</strong></strong></p>\r\n\r\n<p><strong><strong>Elektrikli Bagaj</strong></strong></p>\r\n\r\n<p><strong><strong>Elektronik Dinamik Difrensiyel Kilidi XDS</strong></strong></p>\r\n\r\n<p><strong><strong>Adaptif Şasi Kontroll&uuml; DCC S&uuml;r&uuml;ş Profil Se&ccedil;imi Driving Profile Selection</strong></strong></p>\r\n\r\n<p><strong><strong>Discover Pro Radyo Navigasyon Sistemi ve Dijital G&ouml;sterge Paneli</strong></strong></p>\r\n\r\n<p><strong><strong>19 Verona Aliminyum Alaşım Jantlar 235/45/R19</strong></strong></p>\r\n\r\n<p><strong><strong>Geri G&ouml;r&uuml;ş Kamerası</strong></strong></p>\r\n\r\n<p><strong><strong>Cruise Control Hız Sabitleyici</strong></strong></p>\r\n\r\n<p><strong><strong>&Ouml;n ve Arka Park Sens&ouml;rl&uuml;</strong></strong></p>\r\n\r\n<p><strong><strong>Ambiyans Aydınlatma Paketi</strong></strong></p>\r\n\r\n<p><strong><strong>Led Stop Lambaları</strong></strong></p>\r\n\r\n<p><strong><strong>Led Far Matrix &Ouml;n Farlar Dinamik Viraj Farları</strong></strong></p>\r\n\r\n<p><strong><strong>Start Stop Fren Enerjisi Geri Kazanımı</strong></strong></p>\r\n\r\n<p><strong><strong>S&uuml;r&uuml;c&uuml; Ve Yolcu Hava Yastıkları</strong></strong></p>\r\n\r\n<p><strong><strong>Elektro Mekanik Park Freni</strong></strong></p>\r\n\r\n<p><strong><strong>Isofix</strong></strong></p>\r\n\r\n<p><strong><strong>Yorgunluk Tespit Sistemi</strong></strong></p>\r\n\r\n<p><strong><strong>3 B&ouml;lgeli Klimatronik Djital Klima</strong></strong></p>\r\n\r\n<p><strong><strong>Aux-Usb</strong></strong></p>\r\n\r\n<p><strong><strong>Lastik Basın&ccedil; Kontrol Sistemi</strong></strong></p>\r\n\r\n<p><strong><strong>F1 Vites</strong></strong></p>\r\n\r\n<p><strong><strong>Deri Nubuk Koltuk</strong></strong></p>\r\n\r\n<p><strong><strong>Yağmur Sens&ouml;r&uuml;</strong></strong></p>\r\n\r\n<p><strong><strong>Far Sens&ouml;r&uuml;</strong></strong></p>\r\n\r\n<p><strong><strong>Kayar Led</strong></strong></p>\r\n\r\n<p><strong><strong>Abs-Asr-Esp</strong></strong></p>\r\n\r\n<p><strong><strong>Anahtarsız &Ccedil;alıştırma</strong></strong></p>\r\n\r\n<p><strong><strong>App Connect</strong></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '510.000', 'uploads/urunler/215237c86ae81-32f7-4784-b43e-f4d28958813a_image_for_silan_16295300_1920x1080.jpg', 2020, 4, '2021-01-25', 'Galeriden', 'İkinci El', 'Garanti Var', 'Mavi', 'Tekirdağ', '1', 1),
(26, 'AL TRAK MOTORLU ARAÇLARDAN 2010 MODEL TT 55 DT', '<p>2010&nbsp;model 4,65 NEW HOLLAND klimalı &ccedil;ift &ccedil;eker 700 saatde lastikler %90&nbsp;şimdiden yeni alacak sahibine hayırlı olsun</p>\r\n', '100.000', 'uploads/urunler/233882cdff023-3629-4ff7-946b-4598ca69e9c1_image_for_silan_16450114_800x600.jpg', 2010, 11, '2021-01-25', 'Galeriden', 'İkinci El', 'Garanti Yok', 'Mavi', 'Manisa', '1', 1),
(64, 'Alanya Tosmur da 2+1 uygun daire', '<p>Alanya,Tosmur&#39;da<br />\r\nDenize 100 metre<br />\r\n<br />\r\n2+1<br />\r\nAYRI MUTFAK<br />\r\n110 m&sup2;<br />\r\nKat sayısı 5<br />\r\nBulunduğu Kat 5<br />\r\nBina yaşı 20<br />\r\nKuzey Batı Cephe<br />\r\nAsans&ouml;r var<br />\r\nŞuan &ccedil;alışmıyor<br />\r\n<br />\r\nFiyat 310.000 TL</p>\r\n', ' 310.000', 'uploads/urunler/289691611141507526-36586027.jpg', 2001, 1, '2021-01-25', 'Sahibinden', 'İkinci El', 'Garanti Yok', 'Beyaz', 'Antalya', '1', 0),
(65, 'ALANYA NORDIC LIFE DA SATILIK 2+1', '<p>Otel konseptinde site icinde<br />\r\nAra kat gull deniz ve havuz manzarali<br />\r\n<br />\r\n2+1 120m2 cift banyo<br />\r\nKapali otopark + havuz + cocuk oyun alani +fitness sauna.<br />\r\n<br />\r\nAlanya Tosmur b&ouml;lgesinde yer alan site de&nbsp;&nbsp; 117 daire mevcuttur<br />\r\nToplam 5.500 m2 alana sahip deniz manzaralı bir konuma sahiptir.<br />\r\nDenize 250 m Sehir merkezine ise 2 km mesafe uzakliktatir...</p>\r\n', '1.600.000', 'uploads/urunler/307731611073479249-36582884.jpg', 2018, 1, '2021-01-25', 'Galeriden', 'İkinci El', 'Garanti Yok', 'Beyaz', 'Antalya', '1', 0),
(66, 'Sahibinden VolvoBL71 takaslı', '<p>Makinam oldukma temiz ve rahat kullanislidir satis sebebim ust model makina almak icindir . Ust modelle takas ve satis icin tel numaramdan ulasabilirsinulasabilirsiniz.</p>\r\n', '215.000 ', 'uploads/urunler/22814d4ceed8b-9509-4b29-bcaa-94291532086b_image_for_silan_16481847_1920x1080.jpg', 2008, 10, '2021-01-25', 'Sahibinden', 'İkinci El', 'Garanti Yok', 'Beyaz', 'Sivas', '1', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `uye_id` int(155) NOT NULL AUTO_INCREMENT,
  `uye_kayittarih` date DEFAULT current_timestamp(),
  `uye_kadi` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `uye_ad` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `uye_soyad` varchar(155) COLLATE utf8_turkish_ci NOT NULL,
  `uye_mail` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `uye_telefon` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `uye_sifre` varchar(2000) COLLATE utf8_turkish_ci NOT NULL,
  `uye_cinsiyet` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uye_onay` tinyint(1) DEFAULT 0,
  `uye_il` varchar(58) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`uye_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `uye_kayittarih`, `uye_kadi`, `uye_ad`, `uye_soyad`, `uye_mail`, `uye_telefon`, `uye_sifre`, `uye_cinsiyet`, `uye_onay`, `uye_il`) VALUES
(1, '2021-01-20', 'admin', 'Proje', 'Yöneticisi', 'admin@nku.edu.tr', '0282 654 45 45', '21232f297a57a5a743894a0e4a801fc3', 'Bay', 1, 'Tekirdağ'),
(2, '2021-01-20', 'test', 'Test', 'Üyesi', 'test@nku.edu.tr', '0212 685 45 45', '098f6bcd4621d373cade4e832627b4f6', 'Bayan', 0, 'Tekirdağ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
