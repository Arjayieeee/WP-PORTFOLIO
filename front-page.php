<?php  get_header(); ?>

<section id="banner" style=" background-image: url('<?php echo get_template_directory_uri()?> ./img/bg_image.png')" class="banner h-[60vh] lg:h-[100vh] bg-no-repeat bg-cover"> 
    <div class="container">
        <div class="banner__wrapper h-[50vh] flex flex-col items-center justify-center lg:items-start lg:justify-center ">
            <div class="banner__content text-center lg:flex lg:flex-col lg:items-start lg:mt-[25rem]   ">
                <h3 class="text-[1rem] font-bold text-white lg:text-[2rem]"> <?php echo get_field('h3')?> </h3>
                <h1 class="text-[2.5rem] font-bold text-secondary lg:text-[4rem]"><?php echo get_field('h1')?></h1>
                <p class="text-white font-bold lg:text-[2rem]"><?php echo get_field('paragraph')?></p>
                <div class="buttons flex justify-center gap-[1rem]  my-[1.5rem] lg:justify-start">
                    <h2 class="text-white text-center font-semibold lg:m-0 lg:hover:bg-white lg:hover:text-primary "> <a href=""><?php echo get_field('button_1')?></a> </h2>
                    <h3 class=" text-primary text-center font-bold   lg:m-0 lg:mt-0"><a href="#contact"></a><?php echo get_field('button_2')?></h3>
                </div>
            </div>
            
        </div>
    </div>
    </section>


    <section id="about" class="about py-[1rem] ">
        <div class="container ">
            <div class="about__wrapper py-[2rem] border-b-[1px] border-solid border-black">
                <div class="about__title text-center leading-[2.3rem]">
                    <h3 class="text-secondary text-[1rem] font-bold"><?php echo get_field('about_h3') ?></h3>
                    <h1 class="text-primary text-[2rem] font-bold"><?php echo get_field('about_h1') ?></h1>
                </div>
                <div class="about__content text-primary lg:flex lg:justify-between lg:items-center lg:gap-[10rem]">
                    <div class="about__image flex flex-col items-center justify-center">
                        <img src="<?php echo get_template_directory_uri()?>  ./img/ABOUT.png" alt="" class="w-[20rem] pb-[3rem] lg:w-[30rem]">
                    </div>
                    <div class="context py-[1.5rem] lg:max-w-[50rem] lg:text-[1.5rem]">
                        <p class="text-justify mx-[1.5rem] lg:mx-0 "> <?php echo get_field('about_paragraph') ?></p>
                        <div class="socmed pt-[1rem] lg:pt-[1.8rem]">
                            <ul class="flex items-center justify-center gap-[1.7rem]">
                            <?php 
                                if( have_rows('social_icons') ):

                                    // Loop through rows.
                                    while( have_rows('social_icons') ) : the_row();
                                
                                        // Load sub field value.
                                        $icons = get_sub_field('icon');
                                        $icons_link = get_sub_field('icon_link');
                                        // Do something...?>
                                <li><a href="<?php echo $icons_link ?>"><i class=" <?php echo $icons ?> text-[1.7rem] lg:text-[1.7rem]  ease-in-out duration-[300ms]"></i></a></li>
                                <?php
                                    // End loop.
                                    endwhile;
                                
                                // No value.
                                else :
                                    // Do something...      
                                endif;

                            ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="skills">
        <div class="container">
            <div class="skills__wrapper">
                <div class="skills__tittle text-center">
                    <h2 class="text-secondary text-[1rem] font-bold">SKILLS</h2>
                    <h1 class="text-primary text-[2rem] font-bold">What Am I Capable Of</h1>
                </div>
                <div class="skills__content flex flex-wrap items-center justify-center gap-[.5rem] lg:flex lg:justify-center lg:mx-0">
                    <div class="card relative">
                        <img src="<?php echo get_template_directory_uri()?> ./img/figma.svg" alt="" class="picture ease-in duration-[300ms] absolute right-[4rem] bg-primary py-[1.7rem] px-[1.9rem] rounded lg:z-10 lg:w-[9rem] border-solid  border-[1px]  lg:top-[7rem] hidden lg:block lg:rounded-[50%]">
                        <div class="circles mt-[4rem] py-3 lg:opacity-0 ">
                            <div class="card flex flex-col items-center m-auto  ">
                                <div class="images absolute translate-y-[-3rem]  py-[.9rem] px-[1.5rem]  bg-light  w-fit rounded-full border-solid border-white border-[2.5px] shadow-2xl z-99   ">
                                    <img src="<?php echo get_template_directory_uri()?>  ./img/figma.png" alt="">
                                </div>
                                <div class="box  top-[5rem] py-[4rem] text-center  h-[15rem] w-[12.5rem] -z-999 rounded-[1rem] lg:w-[15rem] ">
                                    <h2 class="text-[1.5rem] font-bold py-[1rem]">FIGMA</h2>
                                    <p class="max-w-[12rem] m-auto text-[.8rem]">This software used for creating Web user interfaces, graphics, and prototypes</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="card relative">
                        <img src="<?php echo get_template_directory_uri()?> ./img/html.svg" alt="" class="picture ease-in duration-[300ms] absolute  right-[4rem] bg-primary py-[1.7rem] px-[1.9rem] rounded lg:z-10 lg:w-[8.9rem] border-solid  border-[1px]  lg:top-[7rem] hidden lg:block lg:rounded-[50%]">
                        <div class="circles mt-[4rem] py-2 lg:opacity-0 ">
                            <div class="card flex flex-col items-center m-auto  ">
                                <div class="images absolute translate-y-[-3rem]  py-[.9rem] px-[1.4rem]  bg-light  w-fit rounded-full border-solid border-white border-[2.5px] shadow-2xl z-99   ">
                                    <img src="<?php echo get_template_directory_uri()?>  ./img/HTML.png" alt="" class="w-[4.3rem]">
                                </div>
                                <div class="box  top-[5rem] py-[4rem] text-center  h-[15rem] w-[12rem] -z-999 rounded-[1rem] lg:w-[15rem] ">
                                    <h2 class="text-[1.5rem] font-bold py-[1rem]">HTML,CSS,JS</h2>
                                    <p class="max-w-[12rem] text-[.8rem] m-auto">This software used for creating Web user interfaces, graphics, and prototypes</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="card relative">
                        <img src="<?php echo get_template_directory_uri()?>  ./img/sass.svg" alt="" class="picture ease-in duration-[300ms] absolute  right-[4rem] bg-primary py-[1.7rem] px-[1.9rem] rounded lg:z-10 lg:w-[9rem] border-solid  border-[1px]  lg:top-[7rem] hidden lg:block lg:rounded-[50%] ">
                        <div class="circles mt-[4rem] py-2 lg:opacity-0 ">
                            <div class="card flex flex-col items-center m-auto  ">
                                <div class="images absolute translate-y-[-3rem]  py-[.9rem] px-[.8rem]  bg-light  w-fit rounded-full border-solid border-white border-[2.5px] shadow-2xl z-99   ">
                                    <img src="<?php echo get_template_directory_uri()?>  ./img/SASS.png" alt="" class="w-[5.5rem]">
                                </div>
                                <div class="box  top-[5rem] py-[4rem] text-center  h-[15rem] w-[12rem] -z-999 rounded-[1rem] lg:w-[15rem] ">
                                    <h2 class="text-[1.5rem] font-bold py-[1rem]">SASS</h2>
                                    <p class="max-w-[12rem] text-[.8rem] m-auto">This software used for creating Web user interfaces, graphics, and prototypes</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card relative">
                            <img src="<?php echo get_template_directory_uri()?> ./img/tailwind.svg" alt="" class="picture absolute ease-in duration-[300ms]  right-[4rem] bg-primary py-[1.7rem] px-[1.9rem] rounded lg:z-10 lg:w-[9rem] border-solid  border-[1px]  lg:top-[7rem] hidden lg:block lg:rounded-[50%]">
                        <div class="circles mt-[4rem] py-2 lg:opacity-0 ">
                            <div class="card flex flex-col items-center m-auto  ">
                                <div class="images absolute translate-y-[-3rem]  py-[.9rem] px-[.8rem]  bg-light  w-fit rounded-full border-solid border-white border-[2.5px] shadow-2xl z-99   ">
                                    <img src="<?php echo get_template_directory_uri()?> ./img/TAILWIND.png" alt="" class="w-[5.5rem]">
                                </div>
                                <div class="box  top-[5rem] py-[4rem] text-center  h-[15rem] w-[12rem] lg:w-[15rem]  -z-999 rounded-[1rem]">
                                    <h2 class="text-[1.5rem] font-bold py-[1rem]">TAILWIND</h2>
                                    <p class="max-w-[12rem] text-[.8rem] m-auto">This software used for creating Web user interfaces, graphics, and prototypes</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card relative">
                        <img src="<?php echo get_template_directory_uri()?> ./img/wordpress.svg" alt="" class=" picture absolute ease-in duration-[300ms]  right-[4rem] bg-primary py-[1.7rem] px-[1.9rem] rounded lg:z-10 lg:w-[9rem] border-solid  border-[1px]  lg:top-[7rem] hidden lg:block lg:rounded-[50%]">
                    <div class="circles mt-[4rem] py-2 lg:opacity-0 ">
                        <div class="card flex flex-col items-center m-auto  ">
                            <div class="images absolute translate-y-[-3rem]  py-[.9rem] px-[.8rem]  bg-light  w-fit rounded-full border-solid border-white border-[2.5px] shadow-2xl z-99   ">
                                <img src="<?php echo get_template_directory_uri()?> ./img/WORDPRESS.png" alt="" class="w-[5.5rem]">
                            </div>
                            <div class="box  top-[5rem] py-[4rem] text-center  h-[15rem] w-[13.5rem] lg:w-[15rem] -z-999 rounded-[1rem]">
                                <h2 class="text-[1.5rem] font-bold py-[1rem]">WORDPRESS</h2>
                                <p class="max-w-[12rem] text-[.8rem] m-auto">This software used for creating Web user interfaces, graphics, and prototypes</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section id="services" style="background-image: url('<?php echo get_template_directory_uri()?> ./img/UNSPLASH2.png ')" class="services bg-primary  bg-[url('img/UNSPLASH2.png')] bg-no-repeat bg-cover lg:bg-center ">
        <div class=" bg-[rgb(38,43,51,0.7)] py-[3rem] ">
            <div class="services__wrapper">
                <div class="services__tittle text-center py-[2rem]">
                    <h2 class="text-secondary text-[1rem] font-bold">SERVICES</h2>
                    <h1 class="text-white text-[2rem] font-bold">What Am I Great At</h1>
                </div>
                <div class="services__content lg:flex lg:items-center lg:justify-center  lg:max-w-[80rem] gap-[3.5rem] m-auto ease-in-out duration-[300ms]">
                    <div class="services__card text-center py-[2rem] bg-white rounded-[1rem] w-[25rem] m-auto ">
                        <ul><li><i class="fa-solid fa-code text-[3.5rem] font-[900]"></i></li></ul>
                        <h1 class="py-[1.5rem] text-[1.5rem] font-medium"><span class="font-bold text-secondary ">Web </span>Design</h1>
                        <p class="max-w-[20rem] m-auto pb-[1rem] text-center ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quaerat cumque placeat consequatur</p>
                        <a href="" class="font-[600] hover:underline">Red more...</a>
                    </div>  
                    <div class="services__card text-center py-[2rem] bg-white rounded-[1rem] w-[25rem] m-auto ">
                        <ul><li><i class="fa-solid fa-laptop-code text-[3.5rem] font-[900]"></i></li></ul>
                        <h1 class="py-[1.5rem] text-[1.5rem] font-medium"><span class="font-bold text-secondary ">Web </span>Development</h1>
                        <p class="max-w-[20rem] m-auto pb-[1rem] text-center ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quaerat cumque placeat consequatur</p>
                        <a href="" class="font-[600] hover:underline">Red more...</a>
                    </div>
                    <div class="services__card text-center py-[2rem] bg-white rounded-[1rem] w-[25rem] m-auto ">
                        <ul><li><i class="fa-solid fa-chart-pie text-[3.5rem] font-[900]"></i></li></ul>
                        <h1 class="py-[1.5rem] text-[1.5rem] font-medium"><span class="font-bold text-secondary">Graphic </span>Design</h1>
                        <p class="max-w-[20rem] m-auto pb-[1rem] text-center ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quaerat cumque placeat consequatur</p>
                        <a href="" class="font-[600] hover:underline">Red more...</a>
                    </div>
                </div>
            </div>
            </div>
    </section>

    <section id="works" class="works pb-[6rem]">
        <div class="container">
            <div class="works__wrapper">
                <div class="works__tittle text-center py-[2rem] pb-[5rem]">
                    <h2 class="text-secondary text-[1rem] font-bold">WORKS</h2>
                    <h1 class="text-primary text-[2rem] font-bold">Some of my Projects</h1>
                </div>
            <div class="swiper ">
                    <div class="swiper-wrapper pb-[3rem]">
                        <div class="swiper-slide" >
                            <img src="<?php echo get_template_directory_uri()?>  ./img/CVD.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri()?> ./img/Spotify (1).png" alt="">
                        </div>
                        <div class="swiper-slide" >
                            <img src="<?php echo get_template_directory_uri()?> ./img/VSCODE.png" alt="">
                        </div>
                        <div class="swiper-slide" >
                            <img src="<?php echo get_template_directory_uri()?> ./img/WORDTOUR.png" alt="">
                        </div>
                        <div class="swiper-slide" >
                            <img src="<?php echo get_template_directory_uri()?> ./img/STARBUCKS.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-next">
                    </div>
                    <div class="swiper-button-prev">
                    </div>
                    <div class="swiper-pagination "></div>
            </div>
            </div>
        </div>
    </section>

    

    <section id="contact" style="background-image: url('<?php echo get_template_directory_uri()?> ./img/bg_contact.png')" class="contact  bg-[url('img/bg_contact.png')] bg-no-repeat bg-center lg:bg-cover ">
            <div class=" bg-[rgb(38,43,51,0.7)] ">
                    <div class="contact__wrapper">
                        <div class="contact__tittle text-center py-[2rem]">
                            <h2 class="text-secondary text-[1rem] font-bold">CONTACT</h2>
                            <h1 class="text-white text-[2rem] font-bold">Ways To Contact Me</h1>
                        </div>
                        <div class="branding lg:flex  lg:justify-center  lg:gap-[2rem] lg:mt-[4rem]">
                            <div class="contact__platform text-justify flex flex-col items-center justify-center lg:justify-start ">
                                <ul class="lg:pt-[1.5rem]">
                                    <li class="lg:border-[1px] lg:border-white lg:py-[1rem] lg:rounded-[.5rem] lg:px-[1.5rem] lg:w-[22rem]"><a href="" class="text-white font-bold text-[.9rem]"><i class="fa-solid fa-paper-plane text-white text-[1.5rem] mr-[1.5rem]"></i>federioarjay16@gmail.com</a></li>
                                    <li class="lg:border-[1px] lg:border-white lg:py-[1rem] lg:rounded-[.5rem] lg:px-[1.5rem] lg:w-[22rem]"><a href="" class="text-white font-bold text-[.9rem]"><i class="fa-brands fa-linkedin  text-white text-[1.5rem] mr-[1.5rem]"></i>Arjay Federio</a></li>
                                    <li class="lg:border-[1px] lg:border-white lg:py-[1rem] lg:rounded-[.5rem] lg:px-[1.5rem] lg:w-[22rem] "><a href="" class="text-white font-bold text-[.9rem]"><i class="fa-solid fa-phone text-white text-[1.5rem] mr-[1.2rem]"></i>+63104576142</a></li>
                                </ul>
                            </div>
                            <div class="contact__input my-[1.5rem]">
                                <form action="" class="lg:flex lg:justify-between lg:gap-[2rem]">
                                    <div class="inputgroup text-center">
                                    <input type="text"  placeholder="Name" id="" class="w-[27rem] py-[1rem] rounded-[.5rem] ">
                                    <br>
                                    <input type="email"  placeholder="Email" id="" class="my-[1rem] w-[27rem] py-[1rem] rounded-[.5rem] lg:my-[1rem]">
                                    <br>
                                    <input type="text"  placeholder="Subject" id="" class="w-[27rem] py-[1rem] rounded-[.5rem] ">
                                    <br>

                                    </div>
                                    <div class="send flex flex-col pb-[1rem] items-center lg:items-start lg:gap-[1rem] ">
                                        <textarea name="message" id="" cols="30" rows="10" placeholder="Message" class="my-[1rem] lg:my-0 w-[27rem] h-[12rem] py-[.5rem] rounded-[.5rem] lg:h-[15rem]"></textarea>
                                        <input type="submit" value="SUBMIT" class="bg-primary py-[.4rem] border-[1px] border-solid border-white px-[1.5rem] rounded-[20rem] text-white font-bold lg:w-[7rem] ">
                                    </div>
                                </form>
                            </div>  
                            
                        </div>
                        
                    </div>
            </div>
    </section>

<?php  get_footer(); ?>