@extends('frontend.layouts.master')
@section('title', 'Contact')
@section('main')
    <link rel="stylesheet" href="css/contact.css">
    <h1 class="contact-header" style="margin-top: 100px">Contact</h1>
    <div class="contact-area d-flex align-items-center" style="margin-top: 10px">
        <div class="form">
            <!-- Thông báo thành công -->
            @if (session('success'))
                <div class="alert alert-success"
                    style="margin-bottom: 20px; padding: 10px; border: 1px solid #d4edda; background-color: #d4edda; color: #155724; border-radius: 5px;">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.add') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="Ten" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="SDT" placeholder="Phone Number (10 digits, Vietnam)"
                        pattern="(03|05|07|08|09)[0-9]{8}"
                        title="Số điện thoại phải có 10 chữ số và bắt đầu bằng 03, 05, 07, 08 hoặc 09" required>
                </div>
                <div class="form-group">
                    <input type="email" name="Email" placeholder="Email (example@gmail.com)"
                        pattern="[a-zA-Z0-9._%+-]+@gmail\.com" title="Email phải kết thúc bằng @gmail.com" required>
                </div>
                <div class="form-group">
                    <textarea name="TinNhan" placeholder="Your message" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Send</button>
                </div>
            </form>
        </div>
        <div class="contact-info">
            <h2>How to Find Us</h2>
            <div>
                <i class="fas fa-building"></i>
                <p><strong>Company name:</strong> NewAlbums Co., Ltd</p>
            </div>
            <div>
                <i class="fas fa-volume-up"></i>
                <p><strong>Slogan:</strong> Credibility builds the brand.</p>
            </div>
            <div>
                <i class="fas fa-globe"></i>
                <p><strong>Website:</strong> www.newalbum.com.vn</a></p>
            </div>
            <div>
                <i class="fas fa-phone"></i>
                <p><strong>Hotline:</strong> {{ $contactInfo->SDT ?? 'Not available' }}</p>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <p><strong>Email:</strong> {{ $contactInfo->Email ?? 'Not available' }}</p>
            </div>
            <div>
                <i class="fas fa-map-marker-alt"></i>
                <p><strong>Address:</strong> 234 DCE Street, District 1, Ho Chi Minh city, Vietnam</p>
            </div>
        </div>

    </div>
@stop
