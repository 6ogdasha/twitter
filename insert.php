<?php

    $connect = mysqli_connect("127.0.0.1","root","","twitter");
											$text_query = 'SELECT * FROM twits';
											$query = mysqli_query($connect,$text_query);


											$text_zaprosa_vstavit = "INSERT INTO twits(user,img,text)
											VALUES('{$_GET['user']}','{$_GET['img']}','{$_GET['text']}')";

											$zapros_vvoda = mysqli_query($connect,$text_zaprosa_vstavit);
                                            // запрос для ввода в таблицу
                                            
                                            header("Location: index.php");

                                           
											

										?>