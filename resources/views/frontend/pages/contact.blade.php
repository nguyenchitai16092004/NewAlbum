@extends('frontend.layouts.master')
@section('This page is the Contact.', 'Contact')
@section('main')
<link rel="stylesheet" href="css/contact.css">
    <!-- ##### Right Side Cart Area ##### -->
    <!-- ##### Right Side Cart End ##### -->
    <h1 class="contact-header" style="margin-top: 100px">Contact</h1>
    <div class="contact-area d-flex align-items-center" style="margin-top: 10px">
        <div class="form">
            <form>
                <input type="text" placeholder="Name" required>
                <input type="email" placeholder="Email" required>
                <input type="tel" placeholder="Phone Number" required>
                <textarea placeholder="Your message"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
        <div class="contact-info">
        <h2>How to Find Us</h2>
        <div>
            <i class="fas fa-building"></i>  <p><strong>Company name:</strong> SoulSync Co., Ltd</p>
            </div>
            <div>
            <i class="fas fa-volume-up"></i> <p><strong>Slogan:</strong> Credibility builds the brand.</p>
            </div>
            <div>
            <i class="fas fa-globe"></i>  <p><strong>Website:</strong> www.soulsync.com.vn</a></p>
            </div>
            <div>
            <i class="fas fa-phone"></i>  <p><strong>Hotline:</strong> 0123456789</p>
            </div>
            <div>
            <i class="fas fa-envelope"></i> <p><strong>Email:</strong> support@soulsync.com</a></p>
            </div>
            <div>
            <i class="fas fa-map-marker-alt"></i> <p><strong>Address:</strong> 234 DCE Street, District 1, Ho Chi Minh city, Vietnam</p>
            </div>
        </div>

    </div>
    @stop
