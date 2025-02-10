<!DOCTYPE html>
<html lang="tr" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8kaan Burger - Online Yemek Siparişi</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <h1>8kaan Burger</h1>
        </div>
        <div class="nav-right">
            <button class="theme-toggle">
                <i class="fas fa-sun"></i>
            </button>
            <ul class="nav-links">
                <li><a href="#menu"><i class="fas fa-utensils"></i> Menü</a></li>
                <li><a href="#sepet"><i class="fas fa-shopping-cart"></i> Sepetim</a></li>
                <li><a href="#siparislerim"><i class="fas fa-history"></i> Siparişlerim</a></li>
                <li><a href="#profil"><i class="fas fa-user"></i> Profilim</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- Menü Bölümü -->
        <section id="menu" class="menu-section">
            <h2>Menümüz</h2>
            <div class="kategoriler">
                <button class="kategori-btn aktif">Tümü</button>
                <button class="kategori-btn">Ana Yemekler</button>
                <button class="kategori-btn">Pizzalar</button>
                <button class="kategori-btn">Burgerler</button>
                <button class="kategori-btn">İçecekler</button>
                <button class="kategori-btn">Tatlılar</button>
            </div>
            
            <div class="urunler">
                <!-- Ana Yemekler -->
                <div class="urun-karti" data-kategori="ana-yemekler">
                    <img src="https://i.lezzet.com.tr/images-xxlarge-secondary/adana-kebap-nasil-yapilir-221f5068-aa1a-4f8a-90a9-b1373a9e7f4d.jpg" alt="Adana Kebap">
                    <h3>Adana Kebap</h3>
                    <p>Özel baharatlarla marine edilmiş dana kıyma</p>
                    <div class="fiyat">₺120.00</div>
                    <div class="urun-adet">
                        <button class="adet-btn azalt">-</button>
                        <input type="number" value="1" min="1" max="10">
                        <button class="adet-btn artir">+</button>
                    </div>
                    <button class="sepete-ekle">Sepete Ekle</button>
                </div>

                <div class="urun-karti" data-kategori="ana-yemekler">
                    <img src="https://i.lezzet.com.tr/images-xxlarge-secondary/iskender-kebap-nasil-yapilir-ad9446c2-9f24-4ed2-97c9-42593c1e358d.jpg" alt="İskender">
                    <h3>İskender</h3>
                    <p>Döner, tereyağı, domates sosu ve yoğurt ile</p>
                    <div class="fiyat">₺140.00</div>
                    <div class="urun-adet">
                        <button class="adet-btn azalt">-</button>
                        <input type="number" value="1" min="1" max="10">
                        <button class="adet-btn artir">+</button>
                    </div>
                    <button class="sepete-ekle">Sepete Ekle</button>
                </div>

                <!-- Pizzalar -->
                <div class="urun-karti" data-kategori="pizzalar">
                    <img src="https://i.lezzet.com.tr/images-xxlarge-secondary/ev-yapimi-karisik-pizza-33c350a4-fa36-4398-95f8-80052f05bdff.jpg" alt="Karışık Pizza">
                    <h3>Karışık Pizza</h3>
                    <p>Sucuk, salam, mantar, zeytin, biber ve mozarella</p>
                    <div class="fiyat">₺160.00</div>
                    <div class="urun-adet">
                        <button class="adet-btn azalt">-</button>
                        <input type="number" value="1" min="1" max="10">
                        <button class="adet-btn artir">+</button>
                    </div>
                    <button class="sepete-ekle">Sepete Ekle</button>
                </div>

                <div class="urun-karti" data-kategori="pizzalar">
                    <img src="https://i.lezzet.com.tr/images-xxlarge-secondary/margarita-pizza-tarifi-2a9e8570-fa13-4b83-96ba-610b488b02a0.jpg" alt="Margarita Pizza">
                    <h3>Margarita Pizza</h3>
                    <p>Domates sosu, fesleğen ve mozarella peyniri</p>
                    <div class="fiyat">₺140.00</div>
                    <div class="urun-adet">
                        <button class="adet-btn azalt">-</button>
                        <input type="number" value="1" min="1" max="10">
                        <button class="adet-btn artir">+</button>
                    </div>
                    <button class="sepete-ekle">Sepete Ekle</button>
                </div>

                <!-- Burgerler -->
                <div class="urun-karti" data-kategori="burgerler">
                    <img src="https://i.lezzet.com.tr/images-xxlarge-secondary/ev-yapimi-hamburger-tarifi-6d19f69f-9bdc-4da3-af24-339a2740a0c7.jpg" alt="Klasik Burger">
                    <h3>Klasik Burger</h3>
                    <p>Dana eti, cheddar peyniri, marul, domates</p>
                    <div class="fiyat">₺130.00</div>
                    <div class="urun-adet">
                        <button class="adet-btn azalt">-</button>
                        <input type="number" value="1" min="1" max="10">
                        <button class="adet-btn artir">+</button>
                    </div>
                    <button class="sepete-ekle">Sepete Ekle</button>
                </div>

                <!-- İçecekler -->
                <div class="urun-karti" data-kategori="icecekler">
                    <img src="https://i.lezzet.com.tr/images-xxlarge-secondary/ayran-nasil-yapilir-0ea25d25-e1b9-4614-9111-f559f19c5f7b.jpg" alt="Ayran">
                    <h3>Ayran</h3>
                    <p>Geleneksel Türk içeceği</p>
                    <div class="fiyat">₺15.00</div>
                    <div class="urun-adet">
                        <button class="adet-btn azalt">-</button>
                        <input type="number" value="1" min="1" max="10">
                        <button class="adet-btn artir">+</button>
                    </div>
                    <button class="sepete-ekle">Sepete Ekle</button>
                </div>

                <!-- Tatlılar -->
                <div class="urun-karti" data-kategori="tatlilar">
                    <img src="https://i.lezzet.com.tr/images-xxlarge-secondary/firin-sutlac-nasil-yapilir-5a7f6e79-1a3f-4564-8f72-808c0c53c8f2.jpg" alt="Fırın Sütlaç">
                    <h3>Fırın Sütlaç</h3>
                    <p>Geleneksel fırın sütlaç</p>
                    <div class="fiyat">₺45.00</div>
                    <div class="urun-adet">
                        <button class="adet-btn azalt">-</button>
                        <input type="number" value="1" min="1" max="10">
                        <button class="adet-btn artir">+</button>
                    </div>
                    <button class="sepete-ekle">Sepete Ekle</button>
                </div>
            </div>
        </section>

        <!-- Sepet Bölümü -->
        <section id="sepet" class="sepet-section" style="display: none;">
            <h2>Sepetim</h2>
            <div class="sepet-urunler">
                <!-- Sepetteki ürünler buraya dinamik olarak eklenecek -->
            </div>
            <div class="siparis-notu">
                <h3>Sipariş Notu</h3>
                <textarea placeholder="Siparişiniz için özel notunuzu buraya yazabilirsiniz..."></textarea>
            </div>
            <div class="sepet-ozet">
                <div class="ara-toplam">Ara Toplam: ₺0.00</div>
                <div class="teslimat">Teslimat Ücreti: ₺15.00</div>
                <div class="toplam">Toplam: ₺0.00</div>
                <button class="siparisi-tamamla">Siparişi Tamamla</button>
            </div>
        </section>

        <!-- Siparişlerim Bölümü -->
        <section id="siparislerim" class="siparisler-section" style="display: none;">
            <h2>Siparişlerim</h2>
            <div class="siparis-listesi">
                <!-- Geçmiş siparişler buraya dinamik olarak eklenecek -->
            </div>
        </section>

        <!-- Profil Bölümü -->
        <section id="profil" class="profil-section" style="display: none;">
            <h2>Profilim</h2>
            <div class="profil-bilgileri">
                <div class="profil-form">
                    <div class="form-grup">
                        <label>Ad Soyad</label>
                        <input type="text" value="Kullanıcı Adı">
                    </div>
                    <div class="form-grup">
                        <label>E-posta</label>
                        <input type="email" value="kullanici@email.com">
                    </div>
                    <div class="form-grup">
                        <label>Telefon</label>
                        <input type="tel" value="+90 555 123 4567">
                    </div>
                    <div class="form-grup">
                        <label>Adres</label>
                        <textarea>Örnek Mahallesi, Örnek Sokak No:1 D:2 İstanbul</textarea>
                    </div>
                    <button class="bilgileri-guncelle">Bilgileri Güncelle</button>
                </div>
            </div>
        </section>
    </div>

    <script src="script.js"></script>
</body>
</html>
