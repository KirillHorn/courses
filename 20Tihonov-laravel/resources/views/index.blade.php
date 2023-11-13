<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head> -->
<style>
    .hero{
        height: 75vh;
        width: 100%;
        overflow: hidden;
        background-image: url('images/cover.jpg');
        background-repeat: no-repeat;
        background-size: cover;background-position: 50% 20% ;

    }
</style>
<body>
  <x-header/>
<main>
    <section class="hero">
    <div class="card text-bg-dark">
  <img src="\images\photo_2023-09-06_11-28-57.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
 <h1 class="">Онлайн курсы - это круто!</h1>
   
  </div>
</div>
    </section>
    <section id="about">
            <div class="container" style="margin: 50px auto;">
                <h2>О нас</h2>
                <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Special title treatment</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </section>
        <section id="courses">
            <div class="container" style="margin: 50px auto;">
            <h2 class="m-3"> Наши курсы </h2>
            <div class="d-flex" style="gap: 40px">
                @foreach ($courses as $item)
            <div class="card" style="width: 18rem;">
                <img src="storage\image\{{$item->img}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$item->title}}</h5>
                  <p class="card-text">{{$item->description}}</p>
                  <p class="card-text">{{$item->cost}}</p>
                  <p class="card-text">{{$item->duration}}</p>
                  <a href="#" class="btn btn-primary">Записаться</a>
                </div>
              </div>
              @endforeach
              </div>
              </div>
        </section>
    
        <section id="enroll">
            <div class="container">
                <form method="POST" action="/enroll">
                  @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Ваш email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Ваше имя</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Выберите курс</label>
                    <select class="form-select" name="course">
                    <option selected>Список курсов...</option>
                    @foreach ($courses as $item)
                       
                        <option value="{{$item->id}}">{{$item->title}}</option>
                        
                        @endforeach
                      </select>
                </div>
                <button type="submit" class="btn btn-primary">Оставить заявку</button>
            </form>
            </div>
            
        </section>
        <section>
</main>
</body>
</html>