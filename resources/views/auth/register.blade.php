
<x-header/>
<div class="container" style="margin-top: 5%;">
<h1>Зарегистрироваться</h1>
@if (session("error"))
 {{session("error")}}
@endif
<form method="POST" action="/reg_valid"> 
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Введите Имя</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('name')}}">
 
  </div>
  @error('name')
  <div class="alert alert-damger" role="alert">
{{$message}}
  </div>
  @enderror
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Введите email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="{{old('email')}}">
  </div>
  @error('email')
  <div class="alert alert-damger" role="alert">
{{$message}}
  </div>
  @enderror
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Введите пароль</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="{{old('password')}}">
  </div>
  @error('password')
  <div class="alert alert-damger" role="alert">
{{$message}}
  </div>
  @enderror
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Введите пароль</label>
    <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" value="{{old('confirm_password')}}">
  </div>
 
  <button type="submit" class="btn btn-primary">Поехали</button>
</form>
</div>