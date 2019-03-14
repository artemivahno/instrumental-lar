<h1>Создание категории</h1>
<form  method="POST" action="/category">
    {{csrf_field()}}
    <div class="form-group">
        <label for="inputName">Название Категории</label>
        <input type="text" name="name" class="form-control" id="inputName" placeholder="Название Категории"></input>
    </div>
    </br>
        <div class="form-check">
        <button type="submit" class="btn btn-primary">Создать</button>
        </div>
    </form>
