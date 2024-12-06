<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        @csrf
        <label for="">email</label><br>
        <input type="mail" name="email"><br>
        <label for="">name</label><br>
        <input type="text" name="username"><br>
        <label for="">password</label><br>
        <input type="password" name="password"><br>
        <label for="">gioi tinh</label><br>
        <label for="">nam</label> <input type="checkbox"> 
        <label for="">nu</label><input type="checkbox"> <br>
        <label for="">thong tin</label><br>
        <select name="cars" id="cars"><br>
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
        </select>
        <button type="submit">Send</button>
        
    </form>
</body>
</html>