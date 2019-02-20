{{--@csrf--}}
{{--{{csrf_token()}}--}}

<form  method="POST" action="/categories">
    {{csrf_field()}}
    <div class="form-group">
        <label for="inputName">Название</label>
        <input type="text" name="name" class="form-control" id="inputName" placeholder="Название Категории"></input>
    </div>
    </br>
        <div class="form-check">
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
