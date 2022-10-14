<!DOCTYPE html>
<html>


<?php get_header(); ?>


<body>
    <main>
        <!-- First Splash Start -->
        <div class="flex flex-col items-start justify-between p-14 h-[30rem] w-full bg-[length:130%] bg-[position:0rem_-15rem]" style="background-image: url(<?php echo esc_url(get_template_directory_uri()) . '/assets/librarysplash.jpg'; ?>);">
            <div class="p-4 m-0 bg-theme-pastelblue text-8xl text-white font-semibold">
                Get online week 2021
            </div>
            <div class="w-1/2 p-3 bg-white text-3xl text-theme-pastelblue">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.
            </div>
            <button class="bg-white text-theme-purple font-semibold py-2 px-4 rounded-full">
                Get involved now!
            </button>

        </div>
        <!-- /First Splash  -->
        <!-- Second Splash Start -->
        <div class="flex flex-row overflow-hidden">
            <div class="basis-1/2 overflow-hidden">
                <img class="object-cover w-full h-96 object-center" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/laptopsplash.jpg'; ?>" />
            </div>

            <div class="basis-1/2 flex flex-col justify-around bg-theme-pastelgreen p-10 text-white">
                <div class="text-4xl font-semibold">
                    We are a social change charity, helping people to improve their lives through
                    digital.
                </div>
                <div class="text text-2xl font-normal">
                    We tackle the most pressing issues of our time, working with partners in
                    thousands of communities across the UK and around the world
                </div>
                <div>
                    <button class="bg-transparent hover:bg-white hover:text-theme-purple font-semibold py-2 px-4 border border-white rounded-full">
                        Learn more about us
                    </button>
                </div>
            </div>
        </div>
        <!--/Second Splash  -->
        <!-- Help Section Start -->
        <div class="flex flex-col justify-around bg-gray-200 p-10 h-80">
            <div class="text-4xl font-bold">How can we help you?</div>
            <div class="text-3xl">
                Let us know who you are and what you're looking for, and we'll help get you to the
                right place.
            </div>
            <div class="bg-white text-center text-3xl p-4">
                I am
                <span class="text-theme-pastelblue underline underline-offset-2">an Individual</span>
                and I
                <span class="text-theme-pastelblue underline underline-offset-2">want to learn</span>
                <button class="bg-theme-purple rounded-full text-white text-xl font-semibold ml-2 py-2 px-4">
                    Start now
                </button>
            </div>
        </div>
        <!-- \Help Section -->
        <!-- Learn More Start -->
        <div class="flex flex-col justify-around bg-theme-pastelblue text-white p-10">
            <div class="text-4xl font-bold mb-6">What do we do?</div>
            <div class="text-3xl">
                You might not have heard of us, but we're the people behind the following
                impactful programmes.
            </div>
            <div class="flex justify-between text-black">
                <div class="flex flex-col justify-between w-80 h-56 text-center p-8 m-6 bg-white">
                    <div class="font-bold text-3xl">Get online week</div>
                    <div>Lirem ipsum dolor sit amet</div>
                    <div>
                        <button class="bg-transparent hover:bg-theme-pastelblue hover:text-white text-theme-purple font-bold py-2 px-4 border border-black rounded-full">
                            Read more
                        </button>
                    </div>
                </div>
                <div class="flex flex-col justify-between w-80 h-56 text-center p-8 m-6 bg-white">
                    <div class="font-bold text-3xl">Learn my way</div>
                    <div>Lirem ipsum dolor sit amet</div>
                    <div>
                        <button class="bg-transparent hover:bg-theme-pastelblue hover:text-white text-theme-purple font-bold py-2 px-4 border border-black rounded-full">
                            Read more
                        </button>
                    </div>
                </div>
                <div class="flex flex-col justify-between w-80 h-56 text-center p-8 m-6 bg-white">
                    <div class="font-bold text-3xl">Make it click</div>
                    <div>Lirem ipsum dolor sit amet</div>
                    <div>
                        <button class="bg-transparent hover:bg-theme-pastelblue hover:text-white text-theme-purple font-bold py-2 px-4 border border-black rounded-full">
                            Read more
                        </button>
                    </div>
                </div>
                <div class="flex flex-col justify-between w-80 h-56 text-center p-8 m-6 bg-white">
                    <div class="font-bold text-3xl">Digital you</div>
                    <div>Lirem ipsum dolor sit amet</div>
                    <div>
                        <button class="bg-transparent hover:bg-theme-pastelblue hover:text-white text-theme-purple font-bold py-2 px-4 border border-black rounded-full">
                            Read more
                        </button>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="bg-white hover:bg-theme-pastelblue hover:text-white text-theme-purple font-bold py-2 px-4 hover:border border-black rounded-full">
                    More about what we do
                </button>
            </div>
        </div>
        <!-- /Learn More -->
        </div>


    </main>

    <?php wp_footer(); ?>


</body>

</html>