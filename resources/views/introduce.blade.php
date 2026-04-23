<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>個人介紹 - 陳禹璋</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .profile-card h1 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }
        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
            border: 3px solid #3498db;
        }
        .profile-card p {
            color: #7f8c8d;
            line-height: 1.6;
            margin: 0.5rem 0;
        }
        .info-label {
            font-weight: bold;
            color: #34495e;
        }
        .highlight {
            color: #3498db;
            font-weight: 600;
        }
        .contact-btn {
            display: inline-block;
            margin-top: 1.5rem;
            padding: 0.8rem 1.5rem;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            transition: background 0.3s;
        }
        .contact-btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <h1>自我介紹</h1>
        <img src="{{ asset('unnamed.jpg') }}" alt="個人照片" style="width:120px; height:120px; border-radius:50%; object-fit:cover; margin-bottom:1rem;">
        <p><span class="info-label">姓名：</span><span class="highlight">陳禹璋</span></p>
        <p><span class="info-label">學號：</span>C112156205</p>
        <p><span class="info-label">系所：</span>智慧商務系</p>
        <p><span class="info-label">學程：</span>雲端商務學程</p>
        <p><span class="info-label">學校：</span>國立高雄科技大學 (NKUST)</p>
        <p><span class="info-label">Email：</span><br>C112156205@nkust.edu.tw</p>
        
        <a href="mailto:C112156205@nkust.edu.tw" class="contact-btn">聯絡我</a>
    </div>
</body>
</html>
