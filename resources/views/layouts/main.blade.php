<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KedaiKopi Sederhana</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <!-- Icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @livewireStyles
</head>
<body class="font-poppins bg-primary">
    <!-- Navbar Menu -->
    <nav class="navbar fixed inset-x-0 top-0 w-full flex mx-auto px-20 py-4 items-center justify-between bg-blue-102 border-b border-third/50 z-999">
        <a href="#" class="navbar-brand text-white text-base md:text-lg lg:text-2xl font-bold italic whitespace-nowrap">KedaiKopi <span class="text-second">Sederhana.</span></a>
        <div class="navbar-nav text-primary lg:text-white flex flex-col lg:flex-row absolute lg:relative top-full -right-full lg:right-0 bg-second lg:bg-blue-102 w-130 lg:w-auto h-screen lg:h-auto rounded lg:rounded-none">
            <a href="#home" class="inline-block mx-2 my-2 lg:my-0 hover:text-white lg:hover:text-second hover:border-b hover:border-third/50 transition ease-linear duration-200">Home</a>
            <a href="#about" class="inline-block mx-2 my-2 lg:my-0 hover:text-white lg:hover:text-second hover:border-b hover:border-third/50 transition ease-linear duration-200">Tentang Kami</a>
            <a href="#menu" class="inline-block mx-2 my-2 lg:my-0 hover:text-white lg:hover:text-second hover:border-b hover:border-third/50 transition ease-linear duration-200">Menu</a>
            <a href="#product" class="inline-block mx-2 my-2 lg:my-0 hover:text-white lg:hover:text-second hover:border-b hover:border-third/50 transition ease-linear duration-200">Product</a>
            <a href="#contact" class="inline-block mx-2 my-2 lg:my-0 hover:text-white lg:hover:text-second hover:border-b hover:border-third/50 transition ease-linear duration-200">Contact</a>
        </div>
        <div class="navbar-extra flex text-white ">
            <a href="#" id="search-btn" class="hover:text-second"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart" class="hover:text-second ml-4"><i data-feather="shopping-cart"></i></a>
            <a href="#" id="hamburger-menu" class="inline-block lg:hidden hover:text-second ml-4"><i data-feather="menu"></i></a>
        </div>
        <!-- Search Form -->
        <div class="search-form absolute top-full right-7% bg-second w-4/6 md:w-30 h-12 flex items-center rounded-md px-4">
            <input type="search" name="search-box" id="search-box" class="h-full w-full bg-transparent border-0 focus:shadow-none focus:ring-0 active:bg-transparent focus:ring-offset-transparent" placeholder="Search here...">
            <label for="search-box"><i data-feather="search"></i></label>
        </div>
        <!-- Search Form End -->
        <!-- Shopping Cart -->
        <div class="shopping-cart absolute top-full -right-full bg-second w-130 h-screen rounded transition duration-300 ">
            <div class="cart-items text-primary items-center flex mx-auto px-4 gap-8 border-b border-primary border-dotted my-2">
                <img src="{{('img/products/product.jpg')}}" alt="Espresso Beans" class="h-20 w-auto justify-self-center object-center rounded-full">
                <div class="cart-detail">
                    <h3 class="text-lg font-semibold">Coffee Beans 1</h3>
                    <p class="text-base">IDR 30K</p>
                </div>
                <i data-feather="trash-2" class="remove-items absolute right-4 cursor-pointer hover:text-third"></i>
            </div>
            <div class="cart-items text-primary items-center flex mx-auto px-4 gap-8 border-b border-primary border-dotted my-2">
                <img src="{{('img/products/product.jpg')}}" alt="Espresso Beans" class="h-20 w-auto justify-self-center object-center rounded-full">
                <div class="cart-detail">
                    <h3 class="text-lg font-semibold">Coffee Beans 1</h3>
                    <p class="text-base">IDR 30K</p>
                </div>
                <i data-feather="trash-2" class="remove-items absolute right-4 cursor-pointer hover:text-third"></i>
            </div>
            <div class="cart-items text-primary items-center flex mx-auto px-4 gap-8 border-b border-primary border-dotted my-2">
                <img src="{{('img/products/product.jpg')}}" alt="Espresso Beans" class="h-20 w-auto justify-self-center object-center rounded-full">
                <div class="cart-detail">
                    <h3 class="text-lg font-semibold">Coffee Beans 1</h3>
                    <p class="text-base">IDR 30K</p>
                </div>
                <i data-feather="trash-2" class="remove-items absolute right-4 cursor-pointer hover:text-third"></i>
            </div>
        </div>
        <!-- Shopping Cart -->
    </nav>
    <!-- Navbar Menu End -->
    <!-- Content Section -->
    <section id="home" class="hero relative flex text-center min-h-screen bg-gambar bg-no-repeat bg-cover bg-center">
        <livewire:home />
    </section>
    <!-- Content Section End-->

    <!-- About Section Start-->
    <section id="about" class="about text-white px-20 mb-4 pt-20">
        <livewire:about />
    </section>
    <!-- About Section End-->

    <!-- Menu Section Start-->
    <section id="menu" class="menu text-white px-20 mb-4 pt-20">
        <livewire:menu />
    </section>
    <!-- Menu Section End-->

    <!-- Product Section -->
    <section id="product" class="text-white px-20 mb-4 pt-20">
        <livewire:product />
    </section>
    <!-- Product Section End-->

    <!-- Contact Section -->
    <section id="contact" class="contact text-white px-20 mb-4 pt-20">
        <livewire:contact />
    </section>
    <!-- Contact Section End-->

    <!-- Footer -->
    <footer class="bg-second text-white flex flex-col mx-auto items-center bottom-0 mt-16">
        <livewire:footer />
    </footer>
    <!-- Footer End -->

    <!-- Modal box -->
    <div id="items-detail-product" class="modal hidden fixed z-999 left-0 top-0 w-full h-full overflow-auto bg-gray-900/75">
        <div class="modal-container relative bg-gray-500 text-primary mx-auto my-15 p-5 items-center border-primary w-4/5 h-max">
            <a href="#" class="modal-close absolute right-4"><i data-feather="x"></i></a>
            <div class="modal-body flex flex-wrap md:flex-nowrap mt-8">
                <img src="{{('img/products/product.jpg')}}" alt="Espresso Beans" class="h-96 mr-8 mb-8 w-auto justify-self-center object-center">
                <div class="modal-content">
                    <h3 class="text-second text-2xl font-semibold">Coffee Beans 1</h3>
                    <p class="text-base mt-4 leading-7">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia ipsa illo repudiandae sed eos expedita delectus! Repellat, architecto ducimus. Quae voluptatem a iusto laborum nisi.</p>
                    <div class="rating-product flex mt-2">
                        <i data-feather="star" class="stroke-second fill-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second fill-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second fill-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second hover:stroke-white"></i>
                    </div>
                    <p class="my-2 text-base">IDR 30K <span class="line-through text-sm">IDR 50K</span></p>
                    <a href="#" class="flex gap-4 w-48 bg-second px-6 py-4 text-white rounded-md"><i data-feather="shopping-cart"></i><span>Add to cart</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal box End -->

    
    <!-- Feather Icon -->
    <script>
      feather.replace()
    </script>    
    <!-- Javascrip Asset -->
    <script src="{{asset('js/app.js')}}"></script>
    @livewireScripts
</body>
</html>