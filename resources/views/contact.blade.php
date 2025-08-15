@extends('index')
@push('style')
    <title>Contact - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3f37c9;
            --accent: #4cc9f0;
            --light: #f8f9fa;
            --dark: #212529;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f8fa;
            color: var(--dark);
        }

        .contact-section {
            padding: 5rem 0;
        }

        .contact-header {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            padding: 5rem 0;
            color: white;
            margin-bottom: 4rem;
            position: relative;
            overflow: hidden;
        }

        .contact-header h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .contact-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .contact-info {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            color: white;
            padding: 2rem;
            height: 100%;
        }

        .contact-info h3 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 2rem;
        }

        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .info-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 1.2rem;
        }

        .social-links {
            margin-top: 2rem;
        }

        .social-icon {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            color: white;
            font-size: 1.2rem;
            margin-right: 1rem;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            background: white;
            color: var(--primary);
            transform: translateY(-5px);
        }

        .contact-form {
            padding: 2rem;
        }

        .contact-form h3 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 2rem;
            color: var(--dark);
        }

        .form-control {
            border: 1px solid #e1e5ea;
            padding: 0.8rem 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: var(--primary);
        }

        .submit-btn {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .map-container {
            height: 400px;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-top: 4rem;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
        }

        .shape {
            position: absolute;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .shape-1 {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            top: -50px;
            right: 10%;
        }

        .shape-2 {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            bottom: -150px;
            left: -100px;
        }
    </style>
@endpush

@section('main-content')
    <div class="contact-header">
        <div class="shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>
        <div class="container text-center">
            <h1>Get in Touch</h1>
            <p>Have a question or want to work together? Feel free to contact me!</p>
        </div>
    </div>

    <div class="container">
        <div class="row g-4">
            <div class="col-lg-5">
                <div class="contact-card h-100">
                    <div class="contact-info">
                        <h3>Contact Information</h3>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h5>Address</h5>
                                <p>Dhaka, Bangladesh</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h5>Email</h5>
                                <p>emtiaz@example.com</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h5>Phone</h5>
                                <p>+880 1234 567890</p>
                            </div>
                        </div>
                        <div class="social-links">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-card">
                    <div class="contact-form">
                        <h3>Send Me a Message</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Your Email" required>
                                </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Subject">
                            <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                            <button type="submit" class="submit-btn">
                                <i class="far fa-paper-plane me-2"></i>Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233667.8223908687!2d90.27923710646989!3d23.780887457084543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1628632605190!5m2!1sen!2sbd"
                allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection