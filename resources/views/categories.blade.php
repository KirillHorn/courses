<x-header /> 
<section>
  
    <div class="container" style="margin: 50px auto;">
            <h2 class="m-3">Курсы по категориям </h2>
            <div class="d-flex flex-wrap" style="gap: 40px">
            @foreach ($courses as $course) 
            <div class="card" style="width: 18rem;">
                <img src="storage\image\" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$course->title}}</h5>
                  <p class="card-text">{{$course->description}}</p>
                  <p class="card-text">{{$course->cost}}</p>
                  <p class="card-text">{{$course->duration}}</p>
                  <a href="#" class="btn btn-primary">Записаться</a>
                </div>
          
                </div>
                @endforeach
               
              
             
              </div>
</div>
           
            

  
</section>