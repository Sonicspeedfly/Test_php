<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telegram Web App</title>
    <style>
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            overflow: hidden;
            font-family: Arial, sans-serif;
            background: url('path/to/your/image.jpg') no-repeat center center fixed; /* Замените на путь к вашему изображению */
            background-size: cover;
        }
        .header {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.8);
        }
        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .user-info {
            flex-grow: 1;
        }
        .name {
            font-size: 18px;
            font-weight: bold;
        }
        .placeholder {
            font-size: 14px;
            color: gray;
        }
        .bottom {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="path/to/telegram/avatar.jpg" alt="Avatar" class="avatar"> <!-- Замените на путь к аватарке Telegram -->
        <div class="user-info">
            <div class="name"><?php echo htmlspecialchars($userName); ?></div> <!-- Имя и фамилия из Telegram -->
            <div class="placeholder">Ноль</div> <!-- Здесь будет загружаться значение из БД -->
        </div>
    </div>
    <div class="bottom">
        <div>Здесь будет загружаться значение из базы данных: 0</div> <!-- Замените на динамическое значение -->
    </div>
</body>
</html>
