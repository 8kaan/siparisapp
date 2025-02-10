document.addEventListener('DOMContentLoaded', function() {
    // Tüm sekmeleri gizle ve sadece menüyü göster
    function initializePage() {
        document.querySelectorAll('section').forEach(section => {
            section.style.display = 'none';
        });
        document.getElementById('menu').style.display = 'block';
    }

    // Sayfa yüklendiğinde menüyü göster
    initializePage();

    // Navigasyon linklerine tıklama olaylarını ekle
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Tüm sekmeleri gizle
            document.querySelectorAll('section').forEach(section => {
                section.style.display = 'none';
            });
            
            // Tıklanan linkin hedef sekmesini göster
            const targetId = this.getAttribute('href').substring(1);
            document.getElementById(targetId).style.display = 'block';
            
            // Mobil görünümde menüyü kapat (eğer açıksa)
            if (window.innerWidth <= 768) {
                document.querySelector('.nav-links').style.display = 'none';
            }
        });
    });

    // Kategori butonlarına tıklama olaylarını ekle
    document.querySelectorAll('.kategori-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            // Aktif kategori butonunu güncelle
            document.querySelectorAll('.kategori-btn').forEach(b => {
                b.classList.remove('aktif');
            });
            this.classList.add('aktif');

            // Seçilen kategoriyi al
            const selectedCategory = this.textContent.toLowerCase().replace(/\s+/g, '-');

            // Tüm ürünleri göster/gizle
            document.querySelectorAll('.urun-karti').forEach(urun => {
                if (selectedCategory === 'tümü') {
                    urun.style.display = 'block';
                } else {
                    if (urun.dataset.kategori === selectedCategory) {
                        urun.style.display = 'block';
                    } else {
                        urun.style.display = 'none';
                    }
                }
            });
        });
    });

    // Ürün miktarı artırma/azaltma işlemleri
    document.querySelectorAll('.adet-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const input = this.parentElement.querySelector('input');
            const currentValue = parseInt(input.value);
            
            if (this.classList.contains('azalt') && currentValue > 1) {
                input.value = currentValue - 1;
            } else if (this.classList.contains('artir') && currentValue < 10) {
                input.value = currentValue + 1;
            }
        });
    });

    // Mobil menü için hamburger menü işlevselliği
    const hamburgerMenu = document.createElement('div');
    hamburgerMenu.className = 'hamburger-menu';
    hamburgerMenu.innerHTML = '<i class="fas fa-bars"></i>';
    document.querySelector('.navbar').appendChild(hamburgerMenu);

    hamburgerMenu.addEventListener('click', function() {
        const navLinks = document.querySelector('.nav-links');
        navLinks.style.display = navLinks.style.display === 'flex' ? 'none' : 'flex';
    });

    // Tema değiştirme işlevselliği
    const themeToggle = document.querySelector('.theme-toggle');
    const html = document.documentElement;
    
    // Kaydedilmiş temayı yükle
    const savedTheme = localStorage.getItem('theme') || 'light';
    html.setAttribute('data-theme', savedTheme);
    updateThemeIcon(savedTheme);

    themeToggle.addEventListener('click', function() {
        const currentTheme = html.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        
        html.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        updateThemeIcon(newTheme);
    });

    function updateThemeIcon(theme) {
        const icon = themeToggle.querySelector('i');
        if (theme === 'dark') {
            icon.className = 'fas fa-moon';
        } else {
            icon.className = 'fas fa-sun';
        }
    }
}); 