<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <script type="text/javascript">

    var header = document.querySelector("header");
    if(700 > window.innerWidth){
      header.style.backgroundColor = "#000";
    }

    window.addEventListener("scroll", function(){
      if(window.scrollY > 0){
        header.style.backgroundColor = "#000";
      }else{
        header.style.backgroundColor = "transparent";
        if(700 > window.innerWidth){
          header.style.backgroundColor = "#000";
        }
      }
    })
  </script>