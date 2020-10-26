<?php

    $connect = mysqli_connect("127.0.0.1","root","","twitter");
											$text_query = 'SELECT * FROM followings';
											$query = mysqli_query($connect,$text_query);


											$text_zaprosa_vstavit = "INSERT INTO followings(name,channel,img)
											VALUES('{$_GET['name']}','{$_GET['channel']}','{$_GET['img']}')";

											$zapros_vvoda = mysqli_query($connect,$text_zaprosa_vstavit);
                                            // запрос для ввода в таблицу
                                            
                                            header("Location: index.php");

                                           
											

										?>