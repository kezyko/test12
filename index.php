<!DOCTYPE html>
<html>
<head>
    <title>UAP CI/CD Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            text-align: center;
        }
        h1 { color: #667eea; margin: 0 0 20px 0; }
        .version { color: #666; font-size: 14px; }
        .timestamp { color: #999; font-size: 12px; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 UAP CI/CD Project</h1>
        <p>Deployment berhasil!</p>
        <div class="version">Version: 1.0.5 - Auto Deploy Test - Auto Deploy Test - Auto Deploy Test - Auto Deploy Test - Auto Deploy Test</div>
        <div class="timestamp">
            <?php echo "Last updated: " . date('Y-m-d H:i:s'); ?>
        </div>
    </div>
</body>
</html>
