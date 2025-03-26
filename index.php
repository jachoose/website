<?php
$title = "Dataflee Analytics India Pvt Ltd";
$company_email = "info@dataflee.com";
$company_phone = "+91 98765 43210";
$company_address = "Bangalore, India";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #eef1f7;
            color: #333;
        }
        header {
            background: #004080;
            padding: 20px;
            text-align: center;
            color: white;
            font-size: 26px;
        }
        nav {
            display: flex;
            justify-content: center;
            background: #0059b3;
            padding: 15px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-size: 18px;
            transition: 0.3s;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .hero {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 70vh;
            background: url('https://source.unsplash.com/1600x900/?data,analytics,technology') no-repeat center;
            background-size: cover;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .hero h1 {
            font-size: 48px;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.5);
        }
        .section {
            max-width: 1200px;
            margin: auto;
            padding: 60px 20px;
            text-align: center;
        }
        .services, .charts-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .service-item, .chart-box {
            background: white;
            padding: 25px;
            margin: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            flex: 1;
            min-width: 280px;
        }
        .slider {
            display: flex;
            overflow: auto;
            gap: 15px;
            padding: 20px;
        }
        .slider img {
            width: 320px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        footer {
            background: #004080;
            color: white;
            text-align: center;
            padding: 20px;
        }
        #chatbot {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #0059b3;
            color: white;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header><?php echo $title; ?></header>
    <nav>
        <a href="#services">Services</a>
        <a href="#analytics">Analytics</a>
        <a href="#contact">Contact</a>
    </nav>
    <div class="hero">
        <h1>Data-Driven Sales Insights for B2B Success</h1>
    </div>
    <section class="section" id="services">
        <h2>Our Services</h2>
        <div class="services">
            <div class="service-item">📊 AI-Powered Sales Forecasting</div>
            <div class="service-item">📦 Inventory & Demand Planning</div>
            <div class="service-item">📈 Business Intelligence Dashboards</div>
            <div class="service-item">📡 Real-Time Market Trends Analysis</div>
        </div>
    </section>
    <section class="section" id="analytics">
        <h2>Sales Performance Trends</h2>
        <div class="charts-container">
            <div class="chart-box">
                <canvas id="salesChart"></canvas>
            </div>
        </div>
    </section>
    <section class="section">
        <h2>Case Studies</h2>
        <div class="slider">
            <img src="https://source.unsplash.com/300x200/?analytics,business" alt="Case 1">
            <img src="https://source.unsplash.com/300x200/?technology,charts" alt="Case 2">
            <img src="https://source.unsplash.com/300x200/?data,finance" alt="Case 3">
        </div>
    </section>
    <section class="section" id="contact">
        <h2>Contact Us</h2>
        <p>Email: <a href="mailto:<?php echo $company_email; ?>"><?php echo $company_email; ?></a></p>
        <p>Phone: <?php echo $company_phone; ?></p>
        <p>Address: <?php echo $company_address; ?></p>
    </section>
    <footer>
        &copy; 2025 <?php echo $title; ?> | All Rights Reserved
    </footer>
    <div id="chatbot">💬 Chat with us</div>
    <script>
        var ctx = document.getElementById('salesChart').getContext('2d');
        var salesChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Q1', 'Q2', 'Q3', 'Q4'],
                datasets: [{
                    label: 'Revenue (in lakhs)',
                    data: [120, 150, 180, 200],
                    backgroundColor: 'rgba(54, 162, 235, 0.7)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
