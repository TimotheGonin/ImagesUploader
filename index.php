<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images Uploader</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/reset.css">
</head>
<body>
    <header>
        <h1>Upload Your Images</h1>
    </header>
    <section>
        <form method="post" action="test.php">
            <table>
                <thead>
                    <tr>
                        <th>Choose your image :</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="file" name="image"></td>
                    </tr>
                    <tr>
                        <td><button type="submit">Send</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </section>
</body>
</html>