<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Company Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>
    <nav>
        <div class="logo" onclick="window.location.href='{{ route('home') }}'">
            <img src="{{ asset('assets/bg.png') }}">
        </div>
        <div class="nav-links">
            <ul>
                <li onclick="scrollToSection('#about')">About Us</li>
                <li onclick="scrollToSection('#works')">Works</li>
                <li class="divider">|</li>
                <li class="login" onclick="window.location.href='{{ route('home') }}'">Home</li>
            </ul>
        </div>
        @if (session('success'))
        <div class="success">
            <p>{{session('success')}}</p>
        </div>
        @endif
    </nav>
    <section>
      
        <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data" id="about">
            @csrf
            <div class="group-1">
                <legend>About Us</legend>
                <label for="profile_image">Picture:</label>
                <input type="file" name="profile_picture">
                <label for="name">Company Name</label>
                <input type="text" placeholder="Name" name="profile_name" value="{{ $user->profile_name }}" autocomplete="off">
                <label for="name">Description</label>
                <textarea name="about" id="about" cols="30" rows="10">{{ $user->about }}</textarea>
            </div>
            <button type="submit">Update</button>
        </form>
        <form action="{{ route('work.update') }}" method="POST" enctype="multipart/form-data" id="works">
            @csrf
            <div class="group-1">
                <legend>Works</legend>
                <label for="profile_image">Add Work Image:</label>
                <input type="file" name="image_path">
            </div>
            <button type="submit">Add</button>
            <label for="images" style="margin-top: 20px; font-weight: 600">Current Images</label>
            <div class="current-image">
                @foreach ($works as $work)
                <div class="image">
                    <p>{{ $work->image_path }}</p>
                    <p class="delete" title="Delete" onclick="window.location.href='{{ route('work.delete', ['id' => $work->id]) }}'">+</p>
                </div>
                @endforeach
            </div>
        </form>
    </section>

<script>
    window.addEventListener('scroll', function () {
            const navbar = document.querySelector('nav');
            if (window.scrollY > 10) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

         // Get the element with the class 'success'
        const successElement = document.querySelector('.success');

        // Check if the element exists
        if (successElement) {
            // Add a timeout to hide the element after 0.5 seconds
            setTimeout(() => {
                successElement.style.display = 'none';
            }, 2000);
        }

        
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