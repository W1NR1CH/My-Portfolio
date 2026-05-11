<!DOCTYPE html>
<html lang="en
        .container {
            text-align: center;
        }
        
        h1 {
            color: white;
            margin-bottom: 40px;
            font-size: 2.5rem;
        }
        
        .cards-wrapper {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .card {
            background: white;
            border-radius: 15px;
            width: 320px;
            text-decoration: none;
            color: #333;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }
        
        .browser-header {
            background: #f0f0f0;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            gap: 8px;
            border-bottom: 1px solid #ddd;
        }
        
        .browser-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }
        
        .dot-red { background: #ff5f56; }
        .dot-yellow { background: #ffbd2e; }
        .dot-green { background: #27c93f; }
        
        .browser-url {
            background: white;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.75rem;
            color: #666;
            margin-left: 10px;
        }
        
        .preview-content {
            height: 180px;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        
        .preview-icon {
            font-size: 3rem;
            margin-bottom: 10px;
        }
        
        .preview-text {
            font-size: 0.85rem;
            color: #666;
            text-align: center;
            padding: 0 10px;
        }
        
        .card-footer {
            background: #667eea;
            padding: 12px;
            text-align: center;
            color: white;
            font-weight: bold;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>My Portfolio</h1>
        <div class="cards-wrapper">
            <a href="https://github.com" target="_blank" class="card">
                <div class="browser-header">
                    <span class="browser-dot dot-red"></span>
                    <span class="browser-dot dot-yellow"></span>
                    <span class="browser-dot dot-green"></span>
                    <span class="browser-url">github.com</span>
                </div>
                <div class="preview-content">
                    <div class="preview-icon">🐙</div>
                    <div class="preview-text">GitHub Profile</div>
                </div>
                <div class="card-footer">Visit Website →</div>
            </a>
            
            <a href="https://linkedin.com" target="_blank" class="card">
                <div class="browser-header">
                    <span class="browser-dot dot-red"></span>
                    <span class="browser-dot dot-yellow"></span>
                    <span class="browser-dot dot-green"></span>
                    <span class="browser-url">linkedin.com</span>
                </div>
                <div class="preview-content">
                    <div class="preview-icon">💼</div>
                    <div class="preview-text">LinkedIn Profile</div>
                </div>
                <div class="card-footer">Visit Website →</div>
            </a>
            
            <a href="https://twitter.com" target="_blank" class="card">
                <div class="browser-header">
                    <span class="browser-dot dot-red"></span>
                    <span class="browser-dot dot-yellow"></span>
                    <span class="browser-dot dot-green"></span>
                    <span class="browser-url">twitter.com</span>
                </div>
                <div class="preview-content">
                    <div class="preview-icon">🐦</div>
                    <div class="preview-text">Twitter Profile</div>
                </div>
                <div class="card-footer">Visit Website →</div>
            </a>
        </div>
    </div>
</body>
</html>
