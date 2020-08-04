<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="thanks-message">お問い合わせいただきありがとうございます。</div>
    <div class="display-contact">

      <div class="form-title">入力内容</div>

      <div class="form-item">■ 名前</div>
   
      <?php echo $_POST['name']; ?>
      <div class="form-item">■ 内容</div>
  
      <?php echo $_POST['body']; ?>
    </div>

  </div>
</body>
</html>