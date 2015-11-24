<h1>Войти на сайт</h1>
<form name="login" class="col-md-8" action="/user/login" method="post">
    <div class="form-group">
        <label for="emailID">Email</label>
        <input type="email" name="email" class="form-control" id="emailID" placeholder="Введите email">
    </div>
    <div class="form-group">
        <label for="passwordID">Пароль</label>
        <input type="password" name="password" class="form-control" id="passwordID" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-default">Войти</button>
</form>