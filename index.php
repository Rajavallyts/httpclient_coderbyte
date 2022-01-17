<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> HTTP client application</title>
</head>
<body>
<section>
    <form action="httpclientApp.php" method="post">
        <h1> HTTP client application </h1>
		<div>
            <label for="username">Method:</label>
            <select name="method">
				<option value="OPTIONS">OPTIONS</option>
				<option value="POST">POST</option>
				<option value="GET">GET</option>
			</select>
        </div>
        <div>
            <label for="username">Url:</label>
            <input placeholder="Please enter API endpoint" type="text" name="url" id="url" />
        </div>
        <div>
            <label for="email">Headers:</label>
            <textarea placeholder='{"Content-type":"application/x-www-form-urlencode"}' rows="5" name="headers" id="headers"></textarea></div>
        </div>
        <div>
            <label for="password">Payload:</label>
            <textarea placeholder='{"name": "John Doe","email": "spamwelcomedhere@gmail.com","url": "https://github.com/john-doe/http-client"}' rows="5" name="params" id="params"></textarea></div>
        </div>
        <button type="submit">Submit</button>
    </form>
</section>
</body>
</html>