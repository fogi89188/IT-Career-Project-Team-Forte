<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanks of Gramble</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    form {
        margin-top: 150px;
        background-color: #4f505e;
        width: 300px;
        opacity: 0.88;
    }
</style>
<div class="bg">

    <body>
        <div id="wrap">
            <a href="index.php"><button class="btn btn-warning" style="position:absolute; margin-top: 31%; margin-left: -9%;">Обратно към Вход</button></a>
            <form action="register_form.php" method="POST" id="form" style="display: inline-block; text-align: center;  margin-top: 30%; position:absolute; height: 200px;">
                <table>
                    <tr>
                        <th colspan="2">
                            <h2>Регистрация</h2>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="u_name" required placeholder="Потребителско име">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="name" required placeholder="Име">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="pass" required placeholder="Парола">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="phone" required placeholder="Телефонен номер">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="email" placeholder="Имейл">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" class="btn btn-success font-size-18" value="Регистрация" style="width: 150px;">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</div>

</html>