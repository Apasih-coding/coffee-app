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
    <section id="home" class="hero relative flex items-center min-h-screen bg-gambar bg-no-repeat bg-cover bg-center">
        <main class="content px-20 py-4 text-white w-4/6 md:w-3/5 lg:w-2/4">
            <h1 class="text-2xl md:text-4xl lg:text-6xl font-semibold leading-tight">Mari Nikmati Secangkir <span class="text-second">Kopi.</span></h1>
            <p class="text-sm md:text-base lg:text-xl font-thin mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, iure?</p>
            <a href="#" class="flex w-fit text-sm lg:text-base text-white bg-second px-4 py-2 outline-none rounded-md mt-4">Beli Sekarang</a>
        </main>
    </section>
    <!-- Content Section End-->

    <!-- About Section Start-->
    <section id="about" class="about text-white px-20 mb-4 pt-20">
        <h2 class="text-2xl font-semibold text-center"><span class="text-second">Tentang</span> Kami</h2>
        <div class="flex flex-col lg:flex-row mt-6">
            <div class="about-img flex ">
                <img src="{{asset('img/coffee.jpg')}}" alt="Tentang Kami" class="w-full h-96 lg:h-full object-cover object-center">
            </div>
            <div class="about-content flex flex-col pl-0 lg:pl-8 mt-2 lg:mt-0 basis-1/2">
                <h3 class="text-lg font-semibold mb-2">Kenapa memilih kopi kami?</h3>
                <p class="text-base font-thin leading-normal mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut possimus explicabo dolorum, illum dignissimos distinctio!</p>
                <p class="text-base font-thin leading-normal">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum eaque eius molestias. Eaque, sint qui laborum reprehenderit saepe sit delectus!</p>
            </div>
        </div>
    </section>
    <!-- About Section End-->

    <!-- Menu Section Start-->
    <section id="menu" class="menu text-white px-20 mb-4 pt-20">
        <h2 class="text-2xl font-semibold text-center"><span class="text-second">Menu</span> Kami</h2>
        <p class="max-w-md mx-auto mt-4 text-center text-sm lg:text-base font-thin leading-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe natus aspernatur nulla illum voluptates autem.</p>
        <div class="flex flex-wrap mx-auto mt-8 justify-center">
            <div class="menu-card w-1/2 md:w-1/3 lg:w-1/4 mb-6 grid text-center">
                <img src="{{('img/menu/menu.jpg')}}" alt="Espresso" class="w-4/5 max-h-300 max-w-300 justify-self-center rounded-full object-center">
                <h3 class="text-lg mt-2 font-semibold">- Espresso -</h3>
                <p>IDR 15K</p>
            </div>
            <div class="menu-card w-1/2 md:w-1/3 lg:w-1/4 mb-6 grid text-center">
                <img src="{{('img/menu/menu.jpg')}}" alt="Espresso" class="w-4/5 max-h-300 max-w-300 justify-self-center rounded-full object-center">
                <h3 class="text-lg mt-2 font-semibold">- Espresso -</h3>
                <p>IDR 15K</p>
            </div>
            <div class="menu-card w-1/2 md:w-1/3 lg:w-1/4 mb-6 grid text-center">
                <img src="{{('img/menu/menu.jpg')}}" alt="Espresso" class="w-4/5 max-h-300 max-w-300 justify-self-center rounded-full object-center">
                <h3 class="text-lg mt-2 font-semibold">- Espresso -</h3>
                <p>IDR 15K</p>
            </div>
            <div class="menu-card w-1/2 md:w-1/3 lg:w-1/4 mb-6 grid text-center">
                <img src="{{('img/menu/menu.jpg')}}" alt="Espresso" class="w-4/5 max-h-300 max-w-300 justify-self-center rounded-full object-center">
                <h3 class="text-lg mt-2 font-semibold">- Espresso -</h3>
                <p>IDR 15K</p>
            </div>
            <div class="menu-card w-1/2 md:w-1/3 lg:w-1/4 mb-6 grid text-center">
                <img src="{{('img/menu/menu.jpg')}}" alt="Espresso" class="w-4/5 max-h-300 max-w-300 justify-self-center rounded-full object-center">
                <h3 class="text-lg mt-2 font-semibold">- Espresso -</h3>
                <p>IDR 15K</p>
            </div>
            <div class="menu-card w-1/2 md:w-1/3 lg:w-1/4 mb-6 grid text-center">
                <img src="{{('img/menu/menu.jpg')}}" alt="Espresso" class="w-4/5 max-h-300 max-w-300 justify-self-center rounded-full object-center">
                <h3 class="text-lg mt-2 font-semibold">- Espresso -</h3>
                <p>IDR 15K</p>
            </div>
        </div>
    </section>
    <!-- Menu Section End-->

    <!-- Product Section -->
    <section id="product" class="text-white px-20 mb-4 pt-20">
        <h2 class="text-2xl font-semibold text-center"><span class="text-second">Produk Unggulan</span> Kami</h2>
        <p class="max-w-md mx-auto mt-4 text-center text-sm lg:text-base font-thin leading-normal">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis iste error minima facere dicta qui maiores quidem perspiciatis. Explicabo, enim?</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 items-center mx-auto mt-8 gap-8 justify-center">
            <div class="w-full mb-6 grid text-center justify center border-2 border-second">
                <div class="flex mx-auto gap-2 justify-center">
                    <a href="#" class="p-2 border-2 border-gray-500 rounded-full my-2 hover:bg-second hover:border-third"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="btn-detail p-2 border-2 border-gray-500 rounded-full my-2 hover:bg-second hover:border-third"><i data-feather="eye"></i></a>
                </div>
                <img src="{{('img/products/product.jpg')}}" alt="Espresso Beans" class="h-96 w-auto justify-self-center object-center">
                <div class="product-content">
                    <h3 class="text-lg my-2 font-semibold">Coffe Beans 1</h3>
                    <div class="rating-product flex justify-center">
                        <i data-feather="star" class="stroke-second fill-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second fill-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second fill-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second hover:stroke-white"></i>
                    </div>
                    <p class="my-2 text-base">IDR 30K <span class="line-through font-thin text-sm">IDR 50K</span></p>
                </div>
            </div>
            <div class="w-full mb-6 grid text-center justify center border-2 border-second">
                <div class="flex mx-auto gap-2 justify-center">
                    <a href="#" class="p-2 border-2 border-gray-500 rounded-full my-2 hover:bg-second hover:border-third"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="btn-detail p-2 border-2 border-gray-500 rounded-full my-2 hover:bg-second hover:border-third"><i data-feather="eye"></i></a>
                </div>
                <img src="{{('img/products/product.jpg')}}" alt="Espresso Beans" class="h-96 w-auto justify-self-center object-center">
                <div class="product-content">
                    <h3 class="text-lg my-2 font-semibold">Coffe Beans 1</h3>
                    <div class="rating-product flex justify-center">
                        <i data-feather="star" class="stroke-second fill-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second fill-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second fill-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second hover:stroke-white"></i>
                    </div>
                    <p class="my-2 text-base">IDR 30K <span class="line-through font-thin text-sm">IDR 50K</span></p>
                </div>
            </div>
            <div class="w-full mb-6 grid text-center justify center border-2 border-second">
                <div class="flex mx-auto gap-2 justify-center">
                    <a href="#" class="p-2 border-2 border-gray-500 rounded-full my-2 hover:bg-second hover:border-third"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="btn-detail p-2 border-2 border-gray-500 rounded-full my-2 hover:bg-second hover:border-third"><i data-feather="eye"></i></a>
                </div>
                <img src="{{('img/products/product.jpg')}}" alt="Espresso Beans" class="h-96 w-auto justify-self-center object-center">
                <div class="product-content">
                    <h3 class="text-lg my-2 font-semibold">Coffe Beans 1</h3>
                    <div class="rating-product flex justify-center">
                        <i data-feather="star" class="stroke-second fill-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second fill-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second fill-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second hover:stroke-white"></i>
                    </div>
                    <p class="my-2 text-base">IDR 30K <span class="line-through font-thin text-sm">IDR 50K</span></p>
                </div>
            </div>
            <div class="w-full mb-6 grid text-center justify center border-2 border-second">
                <div class="flex mx-auto gap-2 justify-center">
                    <a href="#" class="p-2 border-2 border-gray-500 rounded-full my-2 hover:bg-second hover:border-third"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="btn-detail p-2 border-2 border-gray-500 rounded-full my-2 hover:bg-second hover:border-third"><i data-feather="eye"></i></a>
                </div>
                <img src="{{('img/products/product.jpg')}}" alt="Espresso Beans" class="h-96 w-auto justify-self-center object-center">
                <div class="product-content">
                    <h3 class="text-lg my-2 font-semibold">Coffe Beans 1</h3>
                    <div class="rating-product flex justify-center">
                        <i data-feather="star" class="stroke-second fill-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second fill-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second fill-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second hover:stroke-white"></i>
                        <i data-feather="star" class="stroke-second hover:stroke-white"></i>
                    </div>
                    <p class="my-2 text-base">IDR 30K <span class="line-through font-thin text-sm">IDR 50K</span></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End-->

    <!-- Contact Section -->
    <section id="contact" class="contact text-white px-20 mb-4 pt-20">
        <h2 class="text-2xl font-semibold text-center"><span class="text-second">Contact</span> Kami</h2>
        <p class="max-w-md mx-auto mt-4 text-center text-sm lg:text-base font-thin leading-normal">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, nobis.</p>
        <div class="flex flex-col lg:flex-row mx-auto items-center justify-center bg-gray-500 mt-8">
            <iframe class="flex w-full h-96 object-cover object-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126578.29505744515!2d108.96434834679059!3d-7.512438620450076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65659e732de2b9%3A0x4027a76e352e3a0!2sKec.%20Wangon%2C%20Kabupaten%20Banyumas%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1690876319898!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form action="" method="post" class="flex flex-col w-full mx-4 px-8 lg:px-0 items-center">
                <div class="input-group flex items-center mt-8 lg:mt-2 bg-primary px-4 py-4 w-full rounded-md">
                    <i data-feather="user"></i>
                    <input type="text" name="nama" placeholder="Nama" class="bg-transparent border-0 text-white w-full h-full focus:shadow-none focus:ring-0 active:bg-transparent focus:ring-offset-transparent">
                </div>
                <div class="input-group flex items-center mt-2 bg-primary px-4 py-4 w-full rounded-md">
                    <i data-feather="mail"></i>
                    <input type="email" name="email" placeholder="E-Mail" class="bg-transparent border-0 text-white w-full h-full focus:shadow-none focus:ring-0 active:bg-transparent focus:ring-offset-transparent">
                </div>
                <div class="input-group flex items-center mt-2 bg-primary px-4 py-4 w-full rounded-md">
                    <i data-feather="phone"></i>
                    <input type="text" name="phone" placeholder="Phone" class="bg-transparent border-0 text-white w-full h-full focus:shadow-none focus:ring-0 active:bg-transparent focus:ring-offset-transparent">
                </div>
                <button type="submit" class="mt-4 mb-4 lg:mb-0 px-6 py-4 bg-second text-white rounded-md">Kirim Pesan</button>
            </form>
        </div>
    </section>
    <!-- Contact Section End-->

    <!-- Footer -->
    <footer class="bg-second text-white flex flex-col mx-auto items-center bottom-0 mt-16">
        <div class="social flex text-white mx-auto items-center mt-8 mb-4">
            <a href="#" class="mr-2 hover:text-primary">
                <i data-feather="instagram"></i>
            </a>
            <a href="#" class="mr-2 hover:text-primary">
                <i data-feather="facebook"></i>
            </a>
            <a href="#" class="hover:text-primary">
                <i data-feather="twitter"></i>
            </a>
        </div>
        <div class="links flex text-white mx-auto items-center mb-4">
            <a href="#home" class="mr-4 hover:text-primary">Home</a>
            <a href="#about" class="mr-4 hover:text-primary">Tentang Kami</a>
            <a href="#menu" class="mr-4 hover:text-primary">Menu</a>
            <a href="#product" class="mr-4 hover:text-primary">Product</a>
            <a href="#contact" class="mr-4 hover:text-primary">Contact</a>
        </div>
        <div class="credit flex text-white mx-auto items-center mb-6">
            <p>Created by <a href="#" class="text-primary hover:font-semibold">apasih-coding.</a> | &copy; 2023.</p>
        </div>
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
</body>
</html>