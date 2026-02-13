# Bio Link Site - Kurulum Rehberi

Bu proje, hosting üzerinde çalışacak şekilde tasarlanmıştır.

## 📂 Dosya Yapısı
Hostinginize yüklemeniz gereken dosyalar şunlardır:
1. `index.html` - Ana sayfa
2. `admin.html` - Yönetim paneli (Şifre: mitamers2026makrit)
3. `config.json` - Ayarlar dosyası
4. `save.php` - Ayarları kaydetmek için gereken PHP dosyası

## 🚀 Hosting Kurulumu
1. Bir web hosting (cPanel, Plesk vb.) satın alın veya mevcut hostinginize girin.
2. `public_html` veya sitenizin ana dizinine yukarıdaki 4 dosyayı yükleyin.
3. **ÖNEMLİ:** `config.json` dosyasına **yazma izni (CHMOD 777 veya 755)** verin.
   - cPanel'de Dosya Yöneticisi -> config.json -> Sağ Tık -> Permissions (İzinler) -> 777 yapın.
   - Bu izin verilmezse Admin panelinden yaptığınız değişiklikler kaydedilmez!

## 🔐 Admin Paneli
- Siteniz yüklendikten sonra `siteadiniz.com/admin.html` adresine gidin.
- Şifre: `mitamers2026makrit`
- Buradan tüm ayarları (İsim, Müzik, Arka Plan vb.) değiştirebilirsiniz.

## ⚠️ Notlar
- Bu sistem PHP destekleyen hostinglerde çalışır (GoDaddy, Hostinger, Cenuta vb.).
- GitHub Pages veya Vercel gibi sadece statik HTML sunan yerlerde "Kaydet" butonu çalışmaz.
