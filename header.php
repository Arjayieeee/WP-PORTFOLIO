<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://kit.fontawesome.com/25db722303.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <?php wp_head(); ?>
</head>
<body>


    <div class="header fixed bg-primary w-full shadow-xl z-10 lg:z-[999] lg:shadow-xl">
        <div class="container relative ">
            <div class="header__wrapper flex justify-between items-center ">
                <div class="branding flex items-center justify-between w-full lg:w-auto ">
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri()?> ./img/lOGO.png" alt="">
                    </div>
                    <div class="toggle__menu fixed right-[1rem] lg:hidden z-[999]  ">
                        <span class="ease-in-out duration-[300ms]"></span>
                        <span class="ease-in-out duration-[300ms]"></span>
                        <span class="ease-in-out duration-[300ms]"></span>
                        
                    </div>
                </div>
                <div class="header__nav fixed z-[99] right-[-20rem] top-0 bg-primary h-[100%] pt-[5rem] lg:pt-0 w-[20rem] text-[1.2rem] font-bold text-center lg:z-[999] lg:h-auto lg:static ease-in duration-[300ms]  ">
                    <ul class="  lg:absolute lg:flex lg:top-[50%] lg:left-[50%] lg:translate-x-[-50%] lg:translate-y-[-50%] lg:gap-[2rem] ">
                        <li class="active my-[2rem] lg:my-0"><a href="#banner" class="  text-white hover:text-secondary ">HOME</a></li>
                        <li class="my-[2rem] lg:my-0"><a href="#about" class="text-white hover:text-secondary  ">ABOUT</a></li> 
                        <li class="my-[2rem] lg:my-0"><a href="#services" class="text-white hover:text-secondary ">SERVICES</a></li>
                        <li class="my-[2rem] lg:my-0"><a href="#contact" class="text-white hover:text-secondary ">CONTACT</a></li>
                    </ul>
                    <div class="contact   right-[4rem] top-[27rem]  ">
                        <ul class="icons text-white flex gap-[2rem] items-center justify-center mt-[3rem] lg:mt-0">
                            <li><a href=""><i class="fa-solid fa-paper-plane text-[1.5rem] items-center hover:text-secondary "></i></a></li>
                            <li><a href=""><i class="fa-solid fa-phone text-[1.5rem] hover:text-secondary "></i></a></li>
                            <li><a href=""><i class="fa-brands fa-github text-[1.8rem] hover:text-secondary "></i></a></li>
                            <li><a href=""><i class="fa-brands fa-linkedin-in text-[2rem] hover:text-secondary "></i></a></li>
                            
                        </ul>
                    </div>

                </div>
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>