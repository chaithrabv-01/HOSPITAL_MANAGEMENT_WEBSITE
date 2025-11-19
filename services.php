<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Our Services</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .services-section {
        text-align: center;
        padding: 60px 20px;
    }

    .services-section h1 {
        font-size: 32px;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .services-section p {
        font-size: 15px;
        color: #666;
        max-width: 600px;
        margin: 0 auto 50px;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 40px;
        max-width: 1100px;
        margin: auto;
    }

    .service-box {
        text-align: left;
        padding: 20px;
        transition: 0.3s ease;
        cursor: default;
    }

    .service-box:hover {
        transform: translateY(-5px);
    }

    .icon-circle {
        width: 55px;
        height: 55px;
        border: 2px solid #4cc0a9;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
        font-size: 24px;
        color: #4cc0a9;
    }

    .service-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 8px;
    }

    .service-box p {
        font-size: 14px;
        color: #666;
        line-height: 1.6;
    }
</style>

</head>
<body>

<section class="services-section">
    <h1>Our Services</h1>
    <p>A brief introduction of your services. You can introduce this section here and list them below.</p>

    <div class="services-grid">

        <div class="service-box">
            <div class="icon-circle">⛑️</div>
            <div class="service-title">24/7 Emergency Care</div>
            <p>Immediate medical attention available round the clock for critical conditions.</p>
        </div>

        <div class="service-box">
            <div class="icon-circle">💻</div>
            <div class="service-title">Online Consultation</div>
            <p>Connect with certified doctors from the comfort of your home.</p>
        </div>

        <div class="service-box">
            <div class="icon-circle">🧪</div>
            <div class="service-title">Medical Laboratory</div>
            <p>Accurate and fast diagnostic laboratory services.</p>
        </div>

        <div class="service-box">
            <div class="icon-circle">💊</div>
            <div class="service-title">Pharmacy Services</div>
            <p>All essential medicines and health products available.</p>
        </div>

        <div class="service-box">
            <div class="icon-circle">🩻</div>
            <div class="service-title">Radiology & Scans</div>
            <p>Advanced imaging services including X-ray, CT, and MRI.</p>
        </div>

        <div class="service-box">
            <div class="icon-circle">❤️</div>
            <div class="service-title">Organ Donor</div>
            <p>Support life-saving organ donation through our certified program.</p>
        </div>

    </div>
</section>

</body>
</html>
