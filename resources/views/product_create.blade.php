{{--@csrf--}}
{{--{{csrf_token()}}--}}

<form  method="POST" action="/products">
    {{csrf_field()}}
    <div class="form-group">
        <label for="inputName">Название</label>
        <input type="text" name="name" class="form-control" id="inputName" placeholder="Название товара"></input>
    </div>
    </br>
        <div class="row">
            <div class="col">
                <p>Выберите категорию</p>
                <div class="form-group" >
                    <select class="form-control">
                       <option selected disabled>Категория</option>
                        @foreach($categories as $category)
                            <option value="{{$category['id' ]}}">{{$category['name']}}</option>
                        @endforeach
                    </select>

                </div>
            </div>
        </div>
        </br>
        <div class="col">
            <p>Выберите производителя</p>
            <div class="form-group">
                <select class="form-control">
                    <option selected disabled>Производитель</option>
                    @foreach($brands as $brand)
                        <option>{{$brand['name']}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </br>
        <div class="form-check">
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
