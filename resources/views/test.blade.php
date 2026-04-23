<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>明信片</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Microsoft JhengHei', '微軟正黑體', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .postcard {
            width: 600px;
            height: 400px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            position: relative;
            overflow: hidden;
        }

        /* 明信片正面 */
        .postcard-front {
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
            position: relative;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .postcard-front::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border: 20px solid #fff;
            border-radius: 10px;
            pointer-events: none;
        }

        /* 郵票 */
        .stamp {
            position: absolute;
            top: 30px;
            right: 30px;
            width: 80px;
            height: 100px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: 5px dashed #fff;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-size: 12px;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .stamp-inner {
            text-align: center;
            padding: 5px;
        }

        .stamp .value {
            font-size: 24px;
            margin: 5px 0;
        }

        /* 主要內容區 */
        .content {
            z-index: 1;
            text-align: center;
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 450px;
        }

        .title {
            font-size: 28px;
            color: #667eea;
            margin-bottom: 20px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .info {
            margin: 15px 0;
            padding: 15px;
            background: linear-gradient(135deg, #667eea15 0%, #764ba215 100%);
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }

        .label {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }

        .value-text {
            font-size: 20px;
            color: #333;
            font-weight: bold;
            letter-spacing: 1px;
        }

        /* 裝飾元素 */
        .decoration {
            position: absolute;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            opacity: 0.1;
        }

        .decoration-1 {
            top: -30px;
            left: -30px;
            background: #764ba2;
        }

        .decoration-2 {
            bottom: -40px;
            right: 100px;
            background: #667eea;
            width: 120px;
            height: 120px;
        }

        /* 底部標記 */
        .postcard-mark {
            position: absolute;
            bottom: 20px;
            left: 30px;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.8);
            font-style: italic;
        }

        /* 響應式設計 */
        @media (max-width: 650px) {
            .postcard {
                width: 90%;
                height: auto;
                aspect-ratio: 3/2;
            }

            .content {
                padding: 20px;
            }

            .title {
                font-size: 22px;
            }

            .value-text {
                font-size: 16px;
            }

            .stamp {
                width: 60px;
                height: 75px;
                top: 20px;
                right: 20px;
            }

            .stamp .value {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="postcard">
        <div class="postcard-front">
            <!-- 裝飾圓圈 -->
            <div class="decoration decoration-1"></div>
            <div class="decoration decoration-2"></div>

            <!-- 郵票 -->
            <div class="stamp">
                <div class="stamp-inner">
                    <div>TAIWAN</div>
                    <div class="value">$12</div>
                    <div>2026</div>
                </div>
            </div>

            <!-- 主要內容 -->
            <div class="content">
                <div class="title">✦ 學生資訊 ✦</div>
                
                <div class="info">
                    <div class="label">系級</div>
                    <div class="value-text">智慧商務系三乙</div>
                </div>

                <div class="info">
                    <div class="label">學號</div>
                    <div class="value-text">C112156205</div>
                </div>

                <div class="info">
                    <div class="label">姓名</div>
                    <div class="value-text">陳禹璋</div>
                </div>
            </div>

            <!-- 底部標記 -->
            <div class="postcard-mark">Laravel Postcard Design</div>
        </div>
    </div>
</body>
</html>