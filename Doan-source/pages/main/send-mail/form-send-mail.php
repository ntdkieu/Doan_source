<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gửi Email</title>
  <link rel="stylesheet" href="style_send-mail.css">
  <style></style>
</head>

<body class="mail-body">
  <img src="https://www.dtvietnam.com/storage/pagedata/100303/img/upload/z3680619917958_5cdf257b58abca16916c440ca79f046a.jpg" alt="" decoding="async" class="lazyload mail-img" loading="lazy">
  
  <img src="img/cskh.png" alt="Chăm sóc khách hàng" style="margin-top: 2%;" class="mail-img">
  <form method="post" action="pages/main/send-mail/send-mail.php" enctype="multipart/form-data" class="mail-form">
    <label class="mail-label" for="from_email">Email người gửi:</label>
    <input class="mail-input" type="email" id="from_email" name="from_email" class="mail-input" required><br><br>

    <label class="mail-label" for="subject">Chủ đề:</label>
    <input class="mail-input" type="text" id="subject" name="subject" class="mail-input" required><br><br>

    <label class="mail-label" for="message">Nội dung:</label><br>
    <textarea class="mail-textarea" id="message" name="message" rows="5" class="mail-input" required></textarea><br><br>

    <label class="mail-label" for="attachment">Đính kèm tệp (nếu cần):</label>
    <input class="mail-input" type="file" id="attachment" name="attachment" class="mail-input"><br><br>

    <div class="mail-center-button">
      <input class="mail-input-submit" type="submit" value="Gửi Email">
    </div>
  </form>
  <img src="https://lh3.googleusercontent.com/UsEi_hesb8CfR7G0PQ6gPP4hT7oExxvLe-sADipaiY9qzGdq9K-LF_E0DYm6d6-NlLzWasC670gWcboz9L2EZtKogx2z0mOp=rw-w1233" alt="" decoding="async" class="lazyload mail-img" loading="lazy" style="margin: 1% auto;">
</body>

</html>