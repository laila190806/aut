<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel</title>
</head>
<body>
    <h1>Buat Acount Baru!</h1>
    <h2>sign up form</h2>

    <form action="/wel" method="post">
       @csrf
        <label>First name:</label><br>
        <input type="text" name="nama"> <br> <br>
        <label>Last name:</label><br>
        <input type="text"> <br> <br>
        <label>Gender</label><br> <br>
        <input type="radio" name="status">Male<br>
        <input type="radio" name="status">Female<br>
        <input type="radio"name="status">Other<br> <br>

        <label>Nationaly</label> <br> 
        <select name="nactionality">
            <option value="">Bahasa indonesia</option>
            <option value="">English</option>
            <option value="">Other</option>

</select> <br> <br>

<label>Language Spoken :</label>
<input type="checkbox" name="language spoken"> Bahasa indonesia<br>
<input type="checkbox" name="language spoken"> English<br>
<input type="checkbox" name="language spoken">Arabic<br>
<input type="checkbox" name="language spoken"> Japanes<br>

<label>Bio :</label> <br>
<textarea cols="30" rows="10"></textarea> <br> <br>

<input type="submit" value="Sign up">

</form>


</body>
</html>