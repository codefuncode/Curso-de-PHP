  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Document</title>
  </head>
  <body>

    <?php
if (isset($_POST['submit'])) {
	include 'PHP_Text2Speech.class.php';
	$t2s = new PHP_Text2Speech;
	$content = '<audio controls="controls" autoplay="autoplay">
                    <source src="' . $t2s->speak($_POST['word']) . '" type="audio/mp3" />
                    </audio>
                    <form action="" method="post">
                    <table><tr>
    <td colspan="2"><input type="text" value="' . $_POST['word'] . '" name="word" style="width: 335px;" /></td>
    </tr>
    <tr>
    <td colspan="2"><input type="submit" value="Play" name="submit" /></td>
    </tr>
    </table>

                    </form>';
} else {
	$content = '<form action="" method="post">
                    <table><tr>
    <td colspan="2"><input type="text" value="Hello world" name="word" style="width: 335px;" /></td>
    </tr>
    <tr>
    <td colspan="2"><input type="submit" value="Play" name="submit" /></td>
    </tr>
    </table>

                    </form>';
}
?>


  </body>
  </html>

