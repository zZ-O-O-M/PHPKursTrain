<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="form">
    <form class='appForm' method="post">
        Name: <br>
        <input type="text" name="name"><br>
        Phone: <br>
        <input type="text" name="phone"><br>
        <button>send</button>
        <p class="err"></p>
    </form>
</div>
<script>
  let form = document.querySelector('.appForm');
  let errorBox = document.querySelector('.err');
  form.addEventListener('submit', function (e) {
    e.preventDefault();

    let formData = new FormData(form);

    fetch('form-api/send.php', {
      method: 'POST',
      body: formData
    }).then(response => response.json())
      .then(data => {
        console.log(data);

        if (data['res']) {
          form.innerHTML = "Your app is done!";
        } else {
          errorBox.innerHTML = data.error;
        }
      })

  })
</script>
</body>
</html>