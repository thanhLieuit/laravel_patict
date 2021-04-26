<?php echo '<?xml version="1.0" encoding="utf-8" ?>'; ?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<url>
<loc>https://patict.vn</loc>
    <priority>1.0</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>
<url>
<loc>https://patict.vn/gioi-thieu</loc>
    <priority>1.0</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>

<url>
<loc>https://patict.vn/dich-vu</loc>
    <priority>1.0</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>

<url>
<loc>https://patict.vn/du-an</loc>
    <priority>1.0</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>

<url>
<loc>https://patict.vn/giai-phap</loc>
    <priority>1.0</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>

<url>
<loc>https://patict.vn/tin-tuc</loc>
    <priority>1.0</priority>
   <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>

<url>
<loc>https://patict.vn/tuyen-dung</loc>
    <priority>1.0</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>

<url>
<loc>https://patict.vn/lien-he</loc>
    <priority>1.0</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>

@foreach($tintuc as $tintuc)
<url>
<loc>https://patict.vn/chi-tiet-tin-tuc/{!! $tintuc->slug !!}</loc>
    <priority>1</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>
@endforeach
@foreach($dichvu as $dichvu)
<url>
<loc>https://patict.vn/dich-vu/{!! $dichvu->slug !!}</loc>
    <priority>1</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>
@endforeach
<url>
<loc>https://patict.vn/chi-tiet-giai-phap/thuong-mai-dien-tu</loc>
    <priority>1</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>
<url>
<loc>https://patict.vn/chi-tiet-giai-phap/quan-ly-doanh-nghiep</loc>
    <priority>1</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>
<url>
<loc>https://patict.vn/chi-tiet-giai-phap/giai-phap-y-te</loc>
    <priority>1</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>
<url>
<loc>https://patict.vn/chi-tiet-giai-phap/giai-phap-giao-duc</loc>
    <priority>1</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>
<url>
<loc>https://patict.vn/chi-tiet-giai-phap/chinh-phu-dien-tu</loc>
    <priority>1</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>
<url>
<loc>https://patict.vn/chi-tiet-giai-phap/maketing-online</loc>
    <priority>1</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>
<url>
<loc>https://patict.vn/tuyen-dung-design</loc>
    <priority>1</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>
<url>
<loc>https://patict.vn/tuyen-dung-engineering</loc>
    <priority>1</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>
<url>
<loc>https://patict.vn/tuyen-dung-sale-marketing</loc>
    <priority>1</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>
<url>
<loc>https://patict.vn/tuyen-dung-seo</loc>
    <priority>1</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>
@foreach($chitietdichvu as $chitietdichvu)
<url>
<loc>https://patict.vn/chi-tiet-san-pham/{!! $chitietdichvu->slug !!}</loc>
    <priority>1</priority>
    <lastmod>2020-06-29T11:08:48+07:00</lastmod>
    <changefreq>daily</changefreq>
</url>
@endforeach
</urlset>