
<x-header/>
<div class="container" style="margin-top: 5%;">
@if (session("error"))
 {{session("error")}}
@endif
<h1>Войти</h1>
<form method="POST" action="/login_user">
@csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Введите email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="{{old('email')}}">
  </div>
  @error("email")
  <div class="alert alert-damger" role="alert">
{{$message}}
  </div>
  @enderror
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Введите пароль</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="{{old('password')}}">
  </div>

 
  <button type="submit" class="btn btn-primary">Поехали</button>
</form>
</div>