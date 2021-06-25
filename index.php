<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">


<title> Hello on PHP сайт!</title>
</head>
<body>
  <div slass="container">
    <h3>Мой сайт</h3>
  </div>

<form action="index.php" method="post">
<div class="card mb-4 shadow-sm">
                      <div class="card-header">
                        <h4 class="my-0 font-weight-normal">See image</h4>
                      </div>
                      <div class="card-body">
                        <img  src="img/1.jpg" class="img-thumbnail">
                        <ul class="list-unstyled mt-3 mb-4">
                          <?php
                          $i = 0;
                          $rang = 0;
                          $sum = 0;
                          $n=0;
                          //$n = 0;
                          session_start();
                          if(isset($_POST['button1']))
                          {
                            if (!isset($_SESSION['i'])) {
                                $_SESSION['i'] = 0;
                                } else {
                              $_SESSION['i']++;
                            }
                            if (!isset($_SESSION['sum'])) {
                                $_SESSION['sum'] = 0;
                                } else {
                                  if ((int)$_POST['text'] == '1' or (int)$_POST['text'] == '2' or (int)$_POST['text'] == '3' or (int)$_POST['text'] == '4' or (int)$_POST['text'] == '5')
                                  {
                                  $_SESSION['sum'] += $_POST['text'];
                                  $sum = $_SESSION['sum'];
                                  if (!isset($_SESSION['n'])) {
                                      $_SESSION['n'] = 0;
                                      }
                                  else
                                      $_SESSION['n']++;
                                  $n = $_SESSION['n'];
                                  $_SESSION['rang'] = $_SESSION['sum']/$_SESSION['n'];

                                  }
                            }


                            //unset($_SESSION['i']);
                            //$_SESSION['i'] = '0';
                            //$_SESSION['n'] = '0';
                            //$_SESSION['sum'] = '0';
                            //$_SESSION['rang'] = '0';


                            //print_r($_POST);
                            $i = $_SESSION['i'];
                            $rang = $_SESSION['rang'];
                            if (!isset($_SESSION['rang'])) {
                                $rang = 0;
                                } else {
                            $rang = $_SESSION['rang'];
                            }
                            //echo $i;
                            //if(trim($_POST['text']) == )
                          }
                           ?>
                          <li>просмотров = <?php echo $i ?> </li>
                          <li>средняя оценка = <?php echo $rang ?> </li>
                          <li>n = <?php echo $n ?> </li>
                          <li>sum = <?php echo $sum ?> </li>
                          <li>поставьте оценку от 1 до 5!</li>
                          <textarea name="text" class="form-control"></textarea>
                        </ul>
                        <button type="submit" class="w-100 btn btn-lg btn-outline-primary" name="button1" value="go"/>обновить страницу</button>
                      </div>
                    </div>

</form>
            <?php

            ?>





</body>
</html>
