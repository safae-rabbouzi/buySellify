<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="./js/owlcarousel/jquery.min.js"></script>
<script src="./js/owlcarousel/owl.carousel.min.js"></script>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

<script src="./js/main.js"></script>

<script>
        //nav links
        navbar_links = document.querySelectorAll("nav.navbar a.nav-link");
        navbar_links.forEach(link => {
            link.addEventListener("click", function() {
                link.classList.add('active');
                console.log('acivet');
            });
        });

    </script>