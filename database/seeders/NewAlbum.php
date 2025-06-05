<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NewAlbum extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            ThongTinLienLacSeeder::class,
            KhachHangSeeder::class,
            QuanLySeeder::class,
            NhomNhacCaSiSeeder::class,
            LoaiSPSeeder::class,
            SanPhamSeeder::class,
            KhoHangSeeder::class,
            SanPham_KhohangSeeder::class,
            HoaDonSeeder::class,
            ChiTietHoaDonSeeder::class,
            BlogSeeder::class,
            BinhLuanSeeder::class,
            SanPhamYeuThichSeeder::class,
        ]);
    }
}
class ThongTinLienLacSeeder extends Seeder
{
    public function run()
    {
        DB::table('thongtinlienlac')->insert([
            [
                'Email' => 'nguyenchitai16092004@gmail.com',
                'Facebook' => 'https://www.facebook.com/profile.php?id=61571754895453&mibextid=ZbWKwL',
                'Twitter' => 'https://www.facebook.com/profile.php?id=61571754895453&mibextid=ZbWKwL',
                'Instagram' => 'https://www.facebook.com/profile.php?id=61571754895453&mibextid=ZbWKwL',
                'SDT' => '0394378614',
                'created_at' => '2025-01-10 17:13:37',
                'updated_at' => '2025-01-10 17:13:37',
            ],
        ]);
    }
}
class KhachHangSeeder extends Seeder
{
    public function run()
    {
        DB::table('khachhang')->insert([
            [
                'MaKH' => 1,
                'TenKH' => 'Nguyen Van A',
                'Email' => 'nguyenvana@example.com',
                'NgaySinh' => '1990-05-15',
                'SDT' => '0987654321',
                'TenDN' => 'nguyenvana',
                'MatKhau' => '12345678',
                'TrangThai' => 1,
                'GioiTinh' => 0,
                'HinhAnh' => 'image_a.jpg',
                'DiaChiKH' => '123 Le Loi, Quan 1, TP.HCM',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'MaKH' => 2,
                'TenKH' => 'Tran Thi B',
                'Email' => 'tranthib@example.com',
                'NgaySinh' => '1995-08-25',
                'SDT' => '0978123456',
                'TenDN' => 'tranthib',
                'MatKhau' => 'password_hash_2',
                'TrangThai' => 1,
                'GioiTinh' => 0,
                'HinhAnh' => 'image_b.jpg',
                'DiaChiKH' => '456 Nguyen Trai, Quan 5, TP.HCM',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'MaKH' => 3,
                'TenKH' => 'Le Hoang C',
                'Email' => 'lehoangc@example.com',
                'NgaySinh' => '1988-12-10',
                'SDT' => '0967890123',
                'TenDN' => 'lehoangc',
                'MatKhau' => 'password_hash_3',
                'TrangThai' => 0,
                'GioiTinh' => 0,
                'HinhAnh' => 'image_c.jpg',
                'DiaChiKH' => '789 Hai Ba Trung, Quan 3, TP.HCM',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'MaKH' => 4,
                'TenKH' => 'Pham Minh D',
                'Email' => 'phamminhd@example.com',
                'NgaySinh' => '2000-03-20',
                'SDT' => '0934567890',
                'TenDN' => 'phamminhd',
                'MatKhau' => 'password_hash_4',
                'TrangThai' => 1,
                'GioiTinh' => 0,
                'HinhAnh' => 'image_d.jpg',
                'DiaChiKH' => '12 Tran Hung Dao, Quan 1, TP.HCM',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'MaKH' => 5,
                'TenKH' => 'Vu Thi E',
                'Email' => 'vuthie@example.com',
                'NgaySinh' => '1993-07-30',
                'SDT' => '0923456789',
                'TenDN' => 'vuthie',
                'MatKhau' => 'password_hash_5',
                'TrangThai' => 1,
                'GioiTinh' => 0,
                'HinhAnh' => 'image_e.jpg',
                'DiaChiKH' => '34 Le Thanh Ton, Quan 1, TP.HCM',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'MaKH' => 6,
                'TenKH' => 'Dang Quoc F',
                'Email' => 'dangquocf@example.com',
                'NgaySinh' => '1985-11-05',
                'SDT' => '0912345678',
                'TenDN' => 'dangquocf',
                'MatKhau' => 'password_hash_6',
                'TrangThai' => 1,
                'GioiTinh' => 0,
                'HinhAnh' => 'image_f.jpg',
                'DiaChiKH' => '56 Dong Khoi, Quan 1, TP.HCM',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'MaKH' => 7,
                'TenKH' => 'Hoang My G',
                'Email' => 'hoangmyg@example.com',
                'NgaySinh' => '1998-02-18',
                'SDT' => '0981122334',
                'TenDN' => 'hoangmyg',
                'MatKhau' => 'password_hash_7',
                'TrangThai' => 1,
                'GioiTinh' => 0,
                'HinhAnh' => 'image_g.jpg',
                'DiaChiKH' => '78 Pham Ngu Lao, Quan 1, TP.HCM',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'MaKH' => 8,
                'TenKH' => 'Nguyen Thi H',
                'Email' => 'nguyenthih@example.com',
                'NgaySinh' => '2001-09-12',
                'SDT' => '0979112233',
                'TenDN' => 'nguyenthih',
                'MatKhau' => 'password_hash_8',
                'TrangThai' => 1,
                'GioiTinh' => 0,
                'HinhAnh' => 'image_h.jpg',
                'DiaChiKH' => '90 Vo Van Kiet, Quan 1, TP.HCM',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'MaKH' => 9,
                'TenKH' => 'Pham Thanh I',
                'Email' => 'phamthanh@example.com',
                'NgaySinh' => '1996-06-21',
                'SDT' => '0933445566',
                'TenDN' => 'phamthanh',
                'MatKhau' => 'password_hash_9',
                'TrangThai' => 1,
                'GioiTinh' => 0,
                'HinhAnh' => 'image_i.jpg',
                'DiaChiKH' => '123 Nguyen Hue, Quan 1, TP.HCM',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
            [
                'MaKH' => 10,
                'TenKH' => 'Le Thi J',
                'Email' => 'lethij@example.com',
                'NgaySinh' => '1989-04-14',
                'SDT' => '0901234567',
                'TenDN' => 'lethij',
                'MatKhau' => 'password_hash_10',
                'TrangThai' => 1,
                'GioiTinh' => 0,
                'HinhAnh' => 'image_j.jpg',
                'DiaChiKH' => '234 Cach Mang Thang 8, Quan 10, TP.HCM',
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
        ]);
    }
}
class QuanLySeeder extends Seeder
{
    public function run()
    {
        DB::table('quanly')->insert([
            [
                'MaQL' => 1,
                'TenQL' => 'Ca Zan Lo',
                'NgaySinh' => '1985-06-15',
                'ChucVu' => 'Quản lý',
                'Email' => 'nguyenvana@gmail.com',
                'MatKhau' => '123456',
                'TenDN' => 'CaZanLo',
                'SDT' => '0987654321',
                'GioiTinh' => 0,
                'HinhAnh' => 'hinh_anh.png',
                'TrangThai' => 0,
                'created_at' => '2025-01-08 16:51:10',
                'updated_at' => '2025-01-08 16:51:10',
            ],
        ]);
    }
}
class NhomNhacCaSiSeeder extends Seeder
{
    public function run()
    {
        DB::table('nhomnhaccasi')->insert([
            [
                'MaNhomNhacCaSi' => 1,
                'TenNhomNhacCaSi' => 'BTS',
                'GioiTinh' => 1,
                'Loai' => 0,
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaNhomNhacCaSi' => 2,
                'TenNhomNhacCaSi' => 'BlackPink',
                'GioiTinh' => 0,
                'Loai' => 0,
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaNhomNhacCaSi' => 3,
                'TenNhomNhacCaSi' => 'NewJeans',
                'GioiTinh' => 0,
                'Loai' => 0,
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaNhomNhacCaSi' => 4,
                'TenNhomNhacCaSi' => 'Twice',
                'GioiTinh' => 0,
                'Loai' => 0,
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaNhomNhacCaSi' => 5,
                'TenNhomNhacCaSi' => 'EXO',
                'GioiTinh' => 1,
                'Loai' => 0,
                'TrangThai' => 1,
                'created_at' =>
                now(),
                'updated_at' =>
                now(),
            ],
            [
                'MaNhomNhacCaSi' => 6,
                'TenNhomNhacCaSi' => 'ASTRO',
                'GioiTinh' => 1,
                'Loai' => 1,
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaNhomNhacCaSi' => 7,
                'TenNhomNhacCaSi' => 'BIGBANG',
                'GioiTinh' => 1,
                'Loai' => 1,
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaNhomNhacCaSi' => 8,
                'TenNhomNhacCaSi' => 'VIXX',
                'GioiTinh' => 1,
                'Loai' => 1,
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' =>  now(),
            ],
            [
                'MaNhomNhacCaSi' => 9,
                'TenNhomNhacCaSi' => 'SEVENTEEN',
                'GioiTinh' => 1,
                'Loai' => 1,
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaNhomNhacCaSi' => 10,
                'TenNhomNhacCaSi' => 'Jeon Somi',
                'GioiTinh' => 0,
                'Loai' => 1,
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaNhomNhacCaSi' => 11,
                'TenNhomNhacCaSi' => 'Wonho',
                'GioiTinh' => 1,
                'Loai' => 1,
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

class LoaiSPSeeder extends Seeder
{
    public function run()
    {
        DB::table('loaisp')->insert([
            [
                'MaLoaiSP' => 1,
                'Slug' => 'k-pop',
                'TenLoaiSP' => 'K-POP',
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaLoaiSP' => 2,
                'Slug' => 'k-goods',
                'TenLoaiSP' => 'K-GOODS',
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaLoaiSP' => 3,
                'Slug' => 'poster',
                'TenLoaiSP' => 'POSTER',
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
class SanPhamSeeder extends Seeder
{
    public function run()
    {
        DB::table('sanpham')->insert([
            [
                'MaSP' => 13,
                'MaNhomNhacCaSi' => 7,
                'MaSPGG' => null,
                'MaLoaiSP' => 2,
                'TenSP' => 'Cha Eun Woo - Las Vegas 2024 Official Photobook Day Ver',
                'GiaNhap' => 700000.00,
                'GiaBan' => 800000.00,
                'TieuDe' => '800000.00',
                'MoTa' => 'Celebrate your love for BIGBANG with the adorable KRUNK x BIGBANG Scented Chocolate Mascot! Featuring charming KRUNK bear designs inspired by each BIGBANG member, this collectible is packed with sweetness and fun. Perfect as a gift or a treat for yourself, it brings the unique world of BIGBANG into your hands with a delightful scent and playful design.',
                'SoLuong' => 100,
                'LoaiHang' => 0,
                'TrangThai' => 1,
                'LuotXem' => 0,
                'Slug' => 'cha-eun-woo-las-vegas-2024-official-photobook-day-ver',
                'HinhAnh' => 'BIGBANG - Chocolate Mascot.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaSP' => 14,
                'MaNhomNhacCaSi' => 7,
                'MaSPGG' => null,
                'MaLoaiSP' => 3,
                'TenSP' => '[Poster] BIGBANG - MADE',
                'GiaNhap' => 700000.00,
                'GiaBan' => 905000.00,
                'TieuDe' => '905000.00',
                'MoTa' => 'Dive into the iconic era of BIGBANG with the \"MADE\" official poster. Featuring a bold black-and-white design with striking red accents, this poster showcases the legendary group\'s unforgettable style and charisma. Perfect for VIPs, it commemorates one of the most groundbreaking moments in K-pop history. \"Starting this April\" – relive the magic today!',
                'SoLuong' => 100,
                'LoaiHang' => 0,
                'TrangThai' => 1,
                'LuotXem' => 0,
                'Slug' => 'poster-bigbang-made',
                'HinhAnh' => '[Poster] BIGBANG - MADE.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaSP' => 15,
                'MaNhomNhacCaSi' => 1,
                'MaSPGG' => null,
                'MaLoaiSP' => 1,
                'TenSP' => '[Album] GD x TEAYANG - Good Boy',
                'GiaNhap' => 700000.00,
                'GiaBan' => 1200000.00,
                'TieuDe' => '1200000.00',
                'MoTa' => 'Experience the dynamic collaboration between GD and TAEYANG in their hit album \"Good Boy.\" This album captures the vibrant energy and unique style of two of K-pop\'s biggest icons, featuring bold beats and unforgettable performances. A must-have for VIPs and music enthusiasts!',
                'SoLuong' => 100,
                'LoaiHang' => 0,
                'TrangThai' => 1,
                'LuotXem' => 0,
                'Slug' => 'album-gd-x-teayang-good-boy',
                'HinhAnh' => '1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaSP' => 16,
                'MaNhomNhacCaSi' => 2,
                'MaSPGG' => null,
                'MaLoaiSP' => 2,
                'TenSP' => 'BLACKPINK – [ANNIVERSARY] HOODIE',
                'GiaNhap' => 700000.00,
                'GiaBan' => 1200000.00,
                'TieuDe' => '1200000.00',
                'MoTa' => 'Stay cozy and stylish with BLACKPINK\'s \"Pink Venom\" official hoodie! Featuring a sleek black design with the iconic BLACKPINK logo on the front and stunning member visuals on the back, this hoodie is perfect for BLINKs who want to showcase their love for the group. A must-have item to celebrate BLACKPINK\'s unforgettable era and bold charm.',
                'SoLuong' => 100,
                'LoaiHang' => 0,
                'TrangThai' => 1,
                'LuotXem' => 0,
                'Slug' => 'blackpink-anniversary-hoodie',
                'HinhAnh' => 'BLACKPINK – [ANNIVERSARY] HOODIE.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaSP' => 17,
                'MaNhomNhacCaSi' => 2,
                'MaSPGG' => null,
                'MaLoaiSP' => 1,
                'TenSP' => 'ROSÉ first studio album – rosie (Retail Exclusive)',
                'GiaNhap' => 700000.00,
                'GiaBan' => 1500000.00,
                'TieuDe' => 'ROSÉ first studio album – rosie',
                'MoTa' => 'Stay cozy and stylish with BLACKPINK\'s \"Pink Venom\" official hoodie! Featuring a sleek black design with the iconic BLACKPINK logo on the front and stunning member visuals on the back, this hoodie is perfect for BLINKs who want to showcase their love for the group. A must-have item to celebrate BLACKPINK\'s unforgettable era and bold charm.',
                'SoLuong' => 100,
                'LoaiHang' => 0,
                'TrangThai' => 1,
                'LuotXem' => 0,
                'Slug' => 'rose-first-studio-album-rosie-retail-exclusive',
                'HinhAnh' => 'ROSÉ first studio album – rosie (Retail Exclusive).jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

class KhoHangSeeder extends Seeder
{
    public function run()
    {
        DB::table('khohang')->insert([
            [
                'MaQL' => 1,
                'NgayNhap' => '2025-06-01',
                'NgayXuat' => '2025-06-10',
                'DiaChi' => '123 Đường A, Quận 1',
                'TenKho' => 'Kho A',
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaQL' => 1,
                'NgayNhap' => '2025-06-02',
                'NgayXuat' => '2025-06-11',
                'DiaChi' => '456 Đường B, Quận 2',
                'TenKho' => 'Kho B',
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaQL' => 1,
                'NgayNhap' => '2025-06-03',
                'NgayXuat' => '2025-06-12',
                'DiaChi' => '789 Đường C, Quận 3',
                'TenKho' => 'Kho C',
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

class SanPham_KhohangSeeder extends Seeder
{
    public function run()
    {
        DB::table('sanpham_khohang')->insert([
            [
                'MaSP' => 13,
                'MaKho' => 1,
                'SoLuongTon' => 50,
                'GiaNhap' => 100000,
                'GiaBan' => 150000,
            ],
            [
                'MaSP' => 14,
                'MaKho' => 2,
                'SoLuongTon' => 30,
                'GiaNhap' => 200000,
                'GiaBan' => 250000,
            ],
            [
                'MaSP' => 15,
                'MaKho' => 3,
                'SoLuongTon' => 20,
                'GiaNhap' => 300000,
                'GiaBan' => 350000,
            ],
        ]);
    }
}

class HoaDonSeeder extends Seeder
{
    public function run()
    {
        DB::table('hoadon')->insert([
            [
                'MaHD' => 3,
                'MaKH' => 1,
                'TongTien' => 905000.00,
                'PTTT' => 1,
                'TrangThaiTT' => 1,
                'TrangThai' => 3,
                'DiaChi' => '19a Tân Thuận Tây, Quận 7, HCM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
class ChiTietHoaDonSeeder extends Seeder
{
    public function run()
    {
        DB::table('chitiethoadon')->insert([
            [
                'MaHD' => 3,
                'MaSP' => 14,
                'SoLuong' => 1,
                'DonGia' => 905000.00,
                'TongTien' => 905000.00,
                'TrangThaiBL' => 1,
                'created_at' => now(),
                'updated_at' => null,
            ],
        ]);
    }
}
class BlogSeeder extends Seeder
{
    public function run()
    {
        DB::table('blog')->insert([
            [
                'MaBL' => 1,
                'MaQL' => 1,
                'TieuDeBlog' => 'Kpop Gen 3',
                'NoiDung' => "The Global Wave of K-Pop 🌟\r\n\r\nK-Pop has taken the world by storm with its unique blend of music, stunning visuals, and charismatic idols. From vibrant girl groups to powerful boy bands, each artist brings their unique charm and talent to the stage.\r\n\r\nThis image showcases the diversity and unity of K-Pop artists, symbolizing the passion and dedication of an industry that continues to inspire millions worldwide. With intricate choreography, memorable tunes, and a global fanbase, K-Pop is more than music—it's a cultural phenomenon.\r\n\r\nWho is your favorite K-Pop group or artist? Share in the comments! 💬",
                'HinhAnh' => 'OIP.jpg',
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaBL' => 2,
                'MaQL' => 1,
                'TieuDeBlog' => 'Kpop Gen 3',
                'NoiDung' => "The Global Wave of K-Pop 🌟\r\n\r\nK-Pop has taken the world by storm with its unique blend of music, stunning visuals, and charismatic idols. From vibrant girl groups to powerful boy bands, each artist brings their unique charm and talent to the stage.\r\n\r\nThis image showcases the diversity and unity of K-Pop artists, symbolizing the passion and dedication of an industry that continues to inspire millions worldwide. With intricate choreography, memorable tunes, and a global fanbase, K-Pop is more than music—it's a cultural phenomenon.\r\n\r\nWho is your favorite K-Pop group or artist? Share in the comments! 💬",
                'HinhAnh' => 'OIP.jpg',
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaBL' => 3,
                'MaQL' => 1,
                'TieuDeBlog' => 'Kpop Gen 3',
                'NoiDung' => "The Global Wave of K-Pop 🌟\r\n\r\nK-Pop has taken the world by storm with its unique blend of music, stunning visuals, and charismatic idols. From vibrant girl groups to powerful boy bands, each artist brings their unique charm and talent to the stage.\r\n\r\nThis image showcases the diversity and unity of K-Pop artists, symbolizing the passion and dedication of an industry that continues to inspire millions worldwide. With intricate choreography, memorable tunes, and a global fanbase, K-Pop is more than music—it's a cultural phenomenon.\r\n\r\nWho is your favorite K-Pop group or artist? Share in the comments! 💬",
                'HinhAnh' => 'OIP.jpg',
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaBL' => 4,
                'MaQL' => 1,
                'TieuDeBlog' => 'Kpop Gen 3',
                'NoiDung' => "The Global Wave of K-Pop 🌟\r\n\r\nK-Pop has taken the world by storm with its unique blend of music, stunning visuals, and charismatic idols. From vibrant girl groups to powerful boy bands, each artist brings their unique charm and talent to the stage.\r\n\r\nThis image showcases the diversity and unity of K-Pop artists, symbolizing the passion and dedication of an industry that continues to inspire millions worldwide. With intricate choreography, memorable tunes, and a global fanbase, K-Pop is more than music—it's a cultural phenomenon.\r\n\r\nWho is your favorite K-Pop group or artist? Share in the comments! 💬",
                'HinhAnh' => 'OIP.jpg',
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'MaBL' => 5,
                'MaQL' => 1,
                'TieuDeBlog' => 'Kpop Gen 3',
                'NoiDung' => "The Global Wave of K-Pop 🌟\r\n\r\nK-Pop has taken the world by storm with its unique blend of music, stunning visuals, and charismatic idols. From vibrant girl groups to powerful boy bands, each artist brings their unique charm and talent to the stage.\r\n\r\nThis image showcases the diversity and unity of K-Pop artists, symbolizing the passion and dedication of an industry that continues to inspire millions worldwide. With intricate choreography, memorable tunes, and a global fanbase, K-Pop is more than music—it's a cultural phenomenon.\r\n\r\nWho is your favorite K-Pop group or artist? Share in the comments! 💬",
                'HinhAnh' => 'OIP.jpg',
                'TrangThai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
class BinhLuanSeeder extends Seeder
{
    public function run()
    {
        DB::table('binhluan')->insert([
            [
                'MaBL' => 1,
                'MaSP' => 13,
                'MaKH' => 1,
                'SoSao' => 5,
                'NoiDung' => 'This album is fantastic! Every track is a masterpiece.',
                'TrangThai' => 1,
                'created_at' => '2025-01-14 18:15:08',
                'updated_at' => '2025-01-10 16:49:34',
                'deleted_at' => null,
            ],
            [
                'MaBL' => 2,
                'MaSP' => 14,
                'MaKH' => 2,
                'SoSao' => 4,
                'NoiDung' => 'The vocals are amazing, but the choreography could be better.',
                'TrangThai' => 1,
                'created_at' => '2025-01-14 18:15:18',
                'updated_at' => '2025-01-10 16:49:40',
                'deleted_at' => null,
            ],
            [
                'MaBL' => 3,
                'MaSP' => 15,
                'MaKH' => 3,
                'SoSao' => 5,
                'NoiDung' => 'A perfect comeback! I can’t stop listening to it.',
                'TrangThai' => 1,
                'created_at' => '2025-01-14 18:15:26',
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'MaBL' => 4,
                'MaSP' => 16,
                'MaKH' => 1,
                'SoSao' => 3,
                'NoiDung' => 'The concept is unique, but I expected more variety in songs.',
                'TrangThai' => 1,
                'created_at' => '2025-01-14 18:15:32',
                'updated_at' => null,
                'deleted_at' => null,
            ],
            [
                'MaBL' => 5,
                'MaSP' => 17,
                'MaKH' => 2,
                'SoSao' => 4,
                'NoiDung' => 'The visuals are stunning, and the lead single is catchy.',
                'TrangThai' => 1,
                'created_at' => '2025-01-14 18:15:38',
                'updated_at' => null,
                'deleted_at' => null,
            ],
        ]);
    }
}
class SanPhamYeuThichSeeder extends Seeder
{
    public function run()
    {
        DB::table('sanphamyeuthich')->insert([
            [
                'MaKH' => 1,
                'MaSP' => 14,
                'HinhAnh' => '[Poster] BIGBANG - MADE.jpg',
                'created_at' => now(),
                'updated_at' =>  now(),
            ],
            [
                'MaKH' => 1,
                'MaSP' => 15,
                'HinhAnh' => '1.jpg',
                'created_at' =>  now(),
                'updated_at' =>  now(),
            ],
        ]);
    }
}