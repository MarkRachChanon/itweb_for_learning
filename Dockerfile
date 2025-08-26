# ใช้ PHP image ที่รองรับ Apache
FROM php:8.1-apache

# เปิดใช้งาน mod_rewrite ของ Apache
RUN a2enmod rewrite

# คัดลอกไฟล์จาก repository ของคุณไปยัง Apache server
COPY . /var/www/html/

# ตั้งค่า DocumentRoot (ถ้าคุณใช้โฟลเดอร์อื่นนอกจาก root)
WORKDIR /var/www/html

# เปิดพอร์ต 80 (สำหรับ HTTP)
EXPOSE 80

# รัน Apache ใน foreground
CMD ["apache2-foreground"]