<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <nav>
        @if (session('success'))
            <div class="success">
                <p>{{session('success')}}</p>
            </div>
        @endif
        <div class="logo" onclick="scrollToSection('header')">
            <img src="{{ asset('assets/bg.png') }}">
        </div>
        <div class="nav-links">
            <ul>
                <li onclick="scrollToSection('#about')">About Us</li>
                <li onclick="scrollToSection('#works')">Works</li>
                <li onclick="scrollToSection('#contacts')">Contact</li>
                <li class="divider">|</li>
                @auth
                <li class="login" onclick="window.location.href='{{ route('logout') }}'">Logout</li>
                <li class="edit" onclick="window.location.href='{{ route('edit') }}'">Edit</li>
                @else
                <li class="login" onclick="window.location.href='{{ route('login') }}'">Login</li>
                @endauth
            </ul>
        </div>
    </nav>
    <header>
        <div class="header-text">
            <div class="text">
                <p class="text1">We are the</p>
                <p class="text2">{{ $user->profile_name }}</p>
                <div class="text3">
                    <p>We make Software and Websites</p>
                </div>
            </div>
        </div>
        <figure>
            <img src="{{ $user->image }}">
        </figure>
    </header>
    <section>
        <div class="aboutMe" id="about">
            <div class="content-container">
                <figure>
                    <div class="img">
                    </div>
                </figure>
                <div class="content-text">
                    <h1>
                        Hello!
                    </h1>
                    <p>{{ $user->about }}</p>
                </div>
            </div>
        </div> 


        <div class="works" id="works">
           <div class="work-text">
            <h1>Works</h1>
            <p>Explore our "Projects" section to embark on a visual journey through our dynamic portfolio. The interactive slider on the right showcases our expertise in software development and website design, featuring a spectrum of projects ranging from cutting-edge software solutions to captivating website interfaces. Each slide encapsulates a distinctive facet of our innovative journey, providing a glimpse into our dynamic and adaptable approach to crafting digital solutions. We're enthusiastic about sharing these success stories and partnering with you to transform your ideas into impactful digital experiences.</p>
           </div>
            <div class="slider-container">
                <div class="slides">
                    @foreach ($works as $work)
                    <div class="slide"><img src="{{ $work->image_path }}" alt="Slide 1"></div>
                    @endforeach
                  </div>
              
                <button class="prev" onclick="prevSlide()">&#10094;</button>
                <button class="next" onclick="nextSlide()">&#10095;</button>
              </div>
        </div>


    </section>
    <footer id="contacts">

        <h2>Contacts</h2>
        <div class="socials">
            <div class="social-card" onclick="window.open('')">
                <img src="{{ asset('assets/facebook.png') }}" onclick="window.location.href='">
                <p>Facebook</p>
            </div>
            <div class="social-card">
                <img src="{{ asset('assets/linkedin.png') }}">
                <p>LinkedIn</p>
            </div>
            <div class="social-card" onclick="window.open()">
                <img src="{{ asset('assets/upwork.png') }}">
                <p>Upwork</p>
            </div>
            <div class="social-card" onclick="window.location.href='">
                <img src="{{ asset('assets/behance.png') }}">
                <p>Behance</p>
            </div>
        </div>

    </footer>

    <script>
    let currentSlide = 0;
      
      function showSlide(index) {
        const slides = document.querySelector('.slides');
        const totalSlides = document.querySelectorAll('.slide').length;
    
        if (index >= totalSlides) {
          currentSlide = 0;
        } else if (index < 0) {
          currentSlide = totalSlides - 1;
        } else {
          currentSlide = index;
        }
    
        slides.style.transform = `translateX(${-currentSlide * 100}%)`;
      }
    
      function nextSlide() {
        showSlide(currentSlide + 1);
      }
    
      function prevSlide() {
        showSlide(currentSlide - 1);
      }
    
      // Auto slide change every 3 seconds (adjust as needed)
      setInterval(nextSlide, 2000);

      window.addEventListener('scroll', function () {
            const navbar = document.querySelector('nav');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        function scrollToSection(sectionId) {
            const section = document.querySelector(sectionId);
            if (section) {
                section.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }

    </script>

    

</body>
</html>