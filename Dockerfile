#Görüntüyü temel ubuntu sistemi ve php ile birlikte uzantılar yükleyin.
Sandymadaan'dan / php7.3-docker'dan: 0.4

# Yerel kodu kapsayıcı görüntüsüne kopyalayın.
KOPYA. / Var / www / html/

# Apache2'yi yeniden başlat
RUN hizmeti apache2 yeniden başlat

# Apache yapılandırma dosyalarında PORT ortam değişkenini kullanın.
RUN sed -i / 80 / $ { PORT } / g '/ etc / apache2 / sites-available / 000-default.conf /etc/apache2/ports.conf


# htaccess dosyalarını yetkilendirme
RUN sed -i 's / AllowOverride Yok / AllowOverride All /' / etc / apache2 / apache2.conf

RUN sed -ri -e 's!/Var / www / html!/var / www / html / public!g '/ etc / apache2 / sites-available / * .conf
RUN sed -ri -e 's!/Var / www/!/var / www / html / public!g '/ etc / apache2 / apache2.conf / etc / apache2 / conf-available / * .conf

KOPYA .env.example .env

ARG GOOGLE_CLOUD_PROJECT

RUN sed -ri -e / project_id / $ { GOOGLE_CLOUD_PROJECT } / g '.env

# Besteci paketlerini yükle
RUN besteci kurulumu -n --prefer-dist

RUN chown -R www-data: www-veri depolama bootstrap
RUN chmod -R 777 depolama bootstrap

RUN php artisan tuşu: oluştur
