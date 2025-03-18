<html>

<head>
    <title>Home</title>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
@vite('resources/css/app.css')

<body>

    {{-- <div class="h-8 bg-amber-500">

    </div> --}}
    <div class="w-full bg-[#f7f5b0]">
        <div class="container mx-auto">
            <nav class="">
                <div class="mx-auto max-w-full px-2 sm:px-6 lg:px-8">
                    <div class="relative flex h-auto items-center justify-between">
                        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                        </div>
                        <div class="flex flex-1 items-center justify-between sm:items-stretch ">
                            <div class="flex  items-center">
                                <img src="{{ asset('uploads/logo-right.png') }}" alt="Description of image">
                            </div>
                            <div class="flex  items-center">
                                <img src="{{ asset('uploads/logo.png') }}" alt="Description of image">
                            </div>

                        </div>


                    </div>

                </div>

            </nav>
        </div>
        <div class="bg-[#4f0913] w-full flex h-8 mb-5">
            <ul class="flex gap-3 justify-center items-center space-x-2.5 w-full text-white text-sm leading-normal">
                <li class="border-r border-white pr-2">Home</li>
                <li class="border-r border-white pr-2">Research</li>
                <li class="border-r border-white pr-2">Education</li>
                <li class="border-r border-white pr-2">Publications</li>
                <li class="border-r border-white pr-2">News & Events</li>
                <li class="border-r border-white pr-2">Facilities</li>
                <li class="border-r border-white pr-2">Staff</li>
                <li class="border-r border-white pr-2">Contact Us</li>
                <li class="border-r border-white pr-2">Publications</li>
                <li class="border-r border-white pr-2">News & Events</li>
                <li class="border-r border-white pr-2">Facilities</li>
                <li class="border-r border-white pr-2">Staff</li>
                <li class=" pr-2">Contact Us</li>
            </ul>

        </div>

    </div>
    <div class="px-3">
        <div class="w-full flex h-auto flex-col md:flex-row gap-3">
            <!-- Image Slider Section -->
            <div class="w-full md:w-[55%] rounded-md bg-amber-300 md:bg-gray-200 h-[400px] relative">
                <!-- Swiper Slider -->
                <div class="swiper mySwiper h-full">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/600x400/FF5733/FFFFFF?text=Slide+1"
                                class="w-full h-full object-cover rounded-md" alt="Slide 1">
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/600x400/33FF57/FFFFFF?text=Slide+2"
                                class="w-full h-full object-cover rounded-md" alt="Slide 2">
                        </div>
                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/600x400/5733FF/FFFFFF?text=Slide+3"
                                class="w-full h-full object-cover rounded-md" alt="Slide 3">
                        </div>
                    </div>

                    <!-- Navigation Icons -->
                    <div class="swiper-button-next text-gray-700"></div>
                    <div class="swiper-button-prev text-gray-700"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!-- Static Image Section -->
            <div class="w-full md:w-[45%]">
                <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image"
                    class="w-full rounded-md h-[400px] object-cover">
            </div>
        </div>

        <!-- SwiperJS Initialization -->
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var swiper = new Swiper(".mySwiper", {
                    loop: true,
                    autoplay: {
                        delay: 5000, // 5 seconds auto-slide
                        disableOnInteraction: false, // Keeps autoplay even after user interaction
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                });
            });
        </script>
        <div class="w-full">
            <div class="flex justify-between  mb-4 items-center bg-[#4f0913]  text-white py-2 px-4">
                <div class="flex items-center flex-grow w-[25%] md:w-[15%] justify-center">
                    <span class="font-bold">Notification :</span>
                </div>
                <marquee class="overflow-hidden whitespace-nowrap" behavior="scroll" direction="left"
                    onmouseover="this.stop();" onmouseout="this.start();">
                    <span class="flex items-center space-x-4">
                        <img src="https://atarijodhpur.res.in/wp-content/themes/pilcrow/img/newimg.gif" alt="New"
                            class="inline-block">
                        <a href="https://atarijodhpur.res.in/wp-content/uploads/2025/01/YP-Notification-MPV.pdf"
                            target="_blank" rel="noopener" class="text-white hover:underline">Notification for
                            engagement of Young Professional -II (YP-II) under Model Pulse Village project.</a>
                        <img src="https://atarijodhpur.res.in/wp-content/themes/pilcrow/img/newimg.gif" alt="New"
                            class="inline-block">
                        <a href="https://atarijodhpur.res.in/wp-content/uploads/2025/01/YP-Notification-FOM-and-LFOM.pdf"
                            target="_blank" rel="noopener" class="text-white hover:underline">Notification for
                            engagement of Young Professional -II (YP-II) FOM/LFOM project.</a>
                        <img src="https://atarijodhpur.res.in/wp-content/themes/pilcrow/img/newimg.gif" alt="New"
                            class="inline-block">
                        <a href="https://atarijodhpur.res.in/wp-content/uploads/2025/01/1696396597.RECRUITMENT-POST.pdf"
                            target="_blank" rel="noopener" class="text-white hover:underline">Filling up of vacant posts
                            of Private Secretary, LDC and Skilled Supporting staff at ICAR-ATARI, Zone-II, Jodhpur.</a>
                    </span>
                </marquee>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row w-full  h-auto mb-4">
            <div class="flex flex-col mx-auto">
                <h2 class="text-[32px]">Welcome</h2>
                <h2 class="text-[18px] font-bold">भाकृअनुप - कृषि विज्ञान केन्द्र, काजरी. जोधपुर (केवीके, जोधपुर-1) : एक
                    झलक</h2>
                <h2 class="text-[24px]  text-[#ee7425]">Krishi Vigyan Kendra, ICAR-CAZRI, Jodhpur (KVK, Jodhpur-1) : An
                    Overview</h2>
                <p>
                    Krishi Vigyan Kendra is an innovative district level science based institution engaged in transfer
                    of latest agricultural technologies to the farming community for bridging the gap between production
                    and productivity. The KVK Jodhpur was established in 1983 by the Indian Council of Agricultural
                    Research, New Delhi under the administrative control of Central Arid Zone Research Institute
                    (CAZRI), Jodhpur (Rajasthan). Since inception this KVK has been endeavoring for uplifting of socio
                    economic condition of the potential farming community of the district through scientific
                    intervention in the agricultural and allied sectors. The Krishi Vigyan Kendra undertakes short
                    duration as well as long duration vocational trainings for farmers, farm women and rural youths,
                    conducts On Farm Trials (OFTs) for assessment of technology and Front Line Demonstrations (FLDs) to
                    establish production potential of the latest technologies in the field of agriculture and allied
                    sectors to the farming community and extension workers.
                </p>
            </div>
            <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image"
                class="lg:w-[50%] w-full ml-4 mt-5 lg:mt-0  object-contain bg-no-repeat rounded-md ">

        </div>
        <div class="w-full h-auto flex flex-row gap-4 justify-between mt-6">

            <div class="w-1/3 h-auto flex flex-col ">

                <h2 class="text-white text-center  text-[18px] rounded-t-lg bg-[#4f0913] p-2.5 w-[35%]">Recent news</h2>

                <div
                    class=" w-full h-[500px]  mt-[-5px] flex flex-col relative bg-white overflow-hidden rounded-lg shadow-lg border border-gray-100 ">
                    <div class="w-full flex gap-4 p-4 flex-col h-full overflow-y-auto">
                        <div class=" flex gap-4 p-4 border border-gray-300  rounded-md">
                            <div class="w-[35%]">
                                <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image" </div>
                            </div>
                            <div class="w-[65%]">
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                    ICAR-CAZRI</h3>
                                <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                    Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>
                            </div>
                        </div>
                        <div class=" flex gap-4 p-4 border border-gray-300  rounded-md">
                            <div class="w-[35%]">
                                <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image" </div>
                            </div>
                            <div class="w-[65%]">
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                    ICAR-CAZRI</h3>
                                <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                    Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>
                            </div>
                        </div>
                        <div class=" flex gap-4 p-4 border border-gray-300  rounded-md">
                            <div class="w-[35%]">
                                <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image" </div>
                            </div>
                            <div class="w-[65%]">
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                    ICAR-CAZRI</h3>
                                <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                    Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>
                            </div>
                        </div>
                        <div class=" flex gap-4 p-4 border border-gray-300  rounded-md">
                            <div class="w-[35%]">
                                <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image" </div>
                            </div>
                            <div class="w-[65%]">
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                    ICAR-CAZRI</h3>
                                <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                    Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>
                            </div>
                        </div>
                        <div class=" flex gap-4 p-4 border border-gray-300  rounded-md">
                            <div class="w-[35%]">
                                <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image" </div>
                            </div>
                            <div class="w-[65%]">
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                    ICAR-CAZRI</h3>
                                <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                    Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>
                            </div>
                        </div>
                        <div class=" flex gap-4 p-4 border border-gray-300  rounded-md">
                            <div class="w-[35%]">
                                <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image" </div>
                            </div>
                            <div class="w-[65%]">
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                    ICAR-CAZRI</h3>
                                <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                    Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>
                            </div>
                        </div>
                        <div class=" flex gap-4 p-4 border border-gray-300  rounded-md">
                            <div class="w-[35%]">
                                <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image" </div>
                            </div>
                            <div class="w-[65%]">
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                    ICAR-CAZRI</h3>
                                <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                    Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>
                            </div>
                        </div>
                        <div class=" flex gap-4 p-4 border border-gray-300  rounded-md">
                            <div class="w-[35%]">
                                <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image" </div>
                            </div>
                            <div class="w-[65%]">
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                    ICAR-CAZRI</h3>
                                <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                    Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-1/3 h-auto flex flex-col ">

                <h2 class="text-white text-center  text-[18px] rounded-t-lg bg-[#4f0913] p-2.5 w-[35%]">KVK's News</h2>

                <div
                    class=" w-full h-[500px]  mt-[-5px] flex flex-col relative bg-white overflow-hidden rounded-lg shadow-lg border border-gray-100 ">
                    <div class="w-full flex gap-4 p-4 flex-col h-full overflow-y-auto">
                        <div class=" flex gap-4 p-4 border border-gray-300  rounded-md">
                            <div class="w-[35%]">
                                <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image" </div>
                            </div>
                            <div class="w-[65%]">
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                    ICAR-CAZRI</h3>
                                <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                    Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>
                            </div>
                        </div>
                        <div class=" flex gap-4 p-4 border border-gray-300  rounded-md">
                            <div class="w-[35%]">
                                <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image" </div>
                            </div>
                            <div class="w-[65%]">
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                    ICAR-CAZRI</h3>
                                <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                    Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>
                            </div>
                        </div>
                        <div class=" flex gap-4 p-4 border border-gray-300  rounded-md">
                            <div class="w-[35%]">
                                <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image" </div>
                            </div>
                            <div class="w-[65%]">
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                    ICAR-CAZRI</h3>
                                <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                    Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>
                            </div>
                        </div>
                        <div class=" flex gap-4 p-4 border border-gray-300  rounded-md">
                            <div class="w-[35%]">
                                <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image" </div>
                            </div>
                            <div class="w-[65%]">
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                    ICAR-CAZRI</h3>
                                <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                    Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>
                            </div>
                        </div>
                        <div class=" flex gap-4 p-4 border border-gray-300  rounded-md">
                            <div class="w-[35%]">
                                <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image" </div>
                            </div>
                            <div class="w-[65%]">
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                    ICAR-CAZRI</h3>
                                <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                    Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>
                            </div>
                        </div>
                        <div class=" flex gap-4 p-4 border border-gray-300  rounded-md">
                            <div class="w-[35%]">
                                <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image" </div>
                            </div>
                            <div class="w-[65%]">
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                    ICAR-CAZRI</h3>
                                <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                    Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>
                            </div>
                        </div>
                        <div class=" flex gap-4 p-4 border border-gray-300  rounded-md">
                            <div class="w-[35%]">
                                <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image" </div>
                            </div>
                            <div class="w-[65%]">
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                    ICAR-CAZRI</h3>
                                <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                    Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>
                            </div>
                        </div>
                        <div class=" flex gap-4 p-4 border border-gray-300  rounded-md">
                            <div class="w-[35%]">
                                <img src="{{ asset('uploads/kvk.jpg') }}" alt="Description of image" </div>
                            </div>
                            <div class="w-[65%]">
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                    ICAR-CAZRI</h3>
                                <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                    Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-1/3 h-auto flex flex-col ">

                <h2 class="text-white   text-[18px] rounded-t-lg bg-[#4f0913] p-2.5 w-[65%]  text-center ">Notice |
                    Tender | Recruitment</h2>

                <div
                    class=" w-full h-[500px]  mt-[-5px] flex flex-col relative bg-white overflow-hidden rounded-lg shadow-lg border border-gray-100 ">
                    <div class="w-full flex gap-4 p-4 flex-col h-full overflow-y-auto">
                        <div class=" flex   flex-col p-4 border-b border-gray-300  ">
                            <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                ICAR-CAZRI</h3>
                            <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>

                        </div>
                        <div class=" flex   flex-col p-4 border-b border-gray-300  ">
                            <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                ICAR-CAZRI</h3>
                            <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>

                        </div>
                        <div class=" flex   flex-col p-4 border-b border-gray-300  ">
                            <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                ICAR-CAZRI</h3>
                            <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>

                        </div>
                        <div class=" flex   flex-col p-4 border-b border-gray-300  ">
                            <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                ICAR-CAZRI</h3>
                            <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>

                        </div>
                        <div class=" flex   flex-col p-4 border-b border-gray-300  ">
                            <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                ICAR-CAZRI</h3>
                            <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>

                        </div>
                        <div class=" flex   flex-col p-4 border-b border-gray-300  ">
                            <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                ICAR-CAZRI</h3>
                            <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>

                        </div>
                        <div class=" flex   flex-col p-4 border-b border-gray-300  ">
                            <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                ICAR-CAZRI</h3>
                            <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>

                        </div>
                        <div class=" flex   flex-col p-4 border-b border-gray-300  ">
                            <h3 class="text-ellipsis line-clamp-1 overflow-hidden">Annual Review Meeting of
                                ICAR-CAZRI</h3>
                            <p class="text-ellipsis line-clamp-3 overflow-hidden">In the inaugural session Dr. J. P.
                                Mishra, Director, ICAR-ATARI, Zone-II, Jodhpur mentioned</p>

                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="flex w-full mt-5 border-b mb-4 pb-2">

            <h3 class="font-bold text-[26px] text-[#4f0913]">
                Publications
            </h3>

        </div>
        <div class="flex-col flex">
            <div class="w-full h-auto border border-gray-300 rounded-md p-4">
                <div class="swiper mySwiper2 overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="flex flex-col border p-2 border-gray-300 rounded-md w-full">
                                <img src="{{ asset('uploads/kvk.jpg') }}"
                                    class="w-full h-[200px] object-cover rounded-md" alt="Description of image" />
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden text-center">Annual title 1</h3>
                                <div
                                    class="text-white text-center p-[10px] font-medium w-full h-auto rounded-md bg-[#4f0913]">
                                    Download Publication
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col border p-2 border-gray-300 rounded-md w-full">
                                <img src="{{ asset('uploads/kvk.jpg') }}"
                                    class="w-full h-[200px] object-cover rounded-md" alt="Description of image" />
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden text-center">Annual title 1</h3>
                                <div
                                    class="text-white text-center p-[10px] font-medium w-full h-auto rounded-md bg-[#4f0913]">
                                    Download Publication
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col border p-2 border-gray-300 rounded-md w-full">
                                <img src="{{ asset('uploads/kvk.jpg') }}"
                                    class="w-full h-[200px] object-cover rounded-md" alt="Description of image" />
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden text-center">Annual title 1</h3>
                                <div
                                    class="text-white text-center p-[10px] font-medium w-full h-auto rounded-md bg-[#4f0913]">
                                    Download Publication
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col border p-2 border-gray-300 rounded-md w-full">
                                <img src="{{ asset('uploads/kvk.jpg') }}"
                                    class="w-full h-[200px] object-cover rounded-md" alt="Description of image" />
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden text-center">Annual title 1</h3>
                                <div
                                    class="text-white text-center p-[10px] font-medium w-full h-auto rounded-md bg-[#4f0913]">
                                    Download Publication
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col border p-2 border-gray-300 rounded-md w-full">
                                <img src="{{ asset('uploads/kvk.jpg') }}"
                                    class="w-full h-[200px] object-cover rounded-md" alt="Description of image" />
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden text-center">Annual title 1</h3>
                                <div
                                    class="text-white text-center p-[10px] font-medium w-full h-auto rounded-md bg-[#4f0913]">
                                    Download Publication
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col border p-2 border-gray-300 rounded-md w-full">
                                <img src="{{ asset('uploads/kvk.jpg') }}"
                                    class="w-full h-[200px] object-cover rounded-md" alt="Description of image" />
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden text-center">Annual title 1</h3>
                                <div
                                    class="text-white text-center p-[10px] font-medium w-full h-auto rounded-md bg-[#4f0913]">
                                    Download Publication
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="flex flex-col border p-2 border-gray-300 rounded-md w-full">
                                <img src="{{ asset('uploads/kvk.jpg') }}"
                                    class="w-full h-[200px] object-cover rounded-md" alt="Description of image" />
                                <h3 class="text-ellipsis line-clamp-1 overflow-hidden text-center">Annual title 1</h3>
                                <div
                                    class="text-white text-center p-[10px] font-medium w-full h-auto rounded-md bg-[#4f0913]">
                                    Download Publication
                                </div>
                            </div>
                        </div>
                        <!-- Add more slides here -->
                    </div>

                    <!-- Navigation buttons -->
                    {{-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> --}}
                    {{-- <div class="swiper-pagination"></div> --}}
                </div>

            </div>
            {{-- <div class="w-[20%] flex flex-col items-center gap-4">
                <button class="custom-prev bg-blue-600 text-white px-4 py-2 rounded-md">
                    ⟨ Prev
                </button>
                <button class="custom-next bg-blue-600 text-white px-4 py-2 rounded-md">
                    Next ⟩
                </button> --}}
            </div>
            <script>
                var swiper = new Swiper(".mySwiper2", {
                slidesPerView: 4, // Default: Show 4 items
                spaceBetween: 10,
                loop: true, // Enable looping
                autoplay: {
                    delay: 5000, // 5 seconds auto-slide
                    disableOnInteraction: false, // Keeps autoplay running even after interaction
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    1024: { slidesPerView: 6 }, // Show 7 items on large screens
                    768: { slidesPerView: 4 },  // Show 4 items on medium screens
                    480: { slidesPerView: 2 }   // Show 2 items on small screens
                }
            });

            </script>


        </div>
        <div class="w-full justify-end flex items-center pr-4 mt-3 mb-5">
            <div class="rounded-md bg-[#ee5325] text-white px-4 py-2">View All</div>
        </div>
        <div class="flex  gap-5 w-full px-3 mt-8">
            <div class="flex flex-col rounded-md  bg-[#4f0913] h-[600px] w-[60%] mb-5">
                <h4 class="text-white text-center text-[26px] p-[10px] font-medium w-full h-auto rounded-md">Head Of
                    Message</h4>
                <img src="{{ asset('uploads/massager.png') }}"
                    class="w-[60%] h-auto justify-center mx-auto  flex items-center object-cover rounded-md"
                    alt="Description of image" />
                <div class="flex flex-col w-full p-8 bg-white h-auto border border-gray-200 shadow-md">
                    <p>
                        Krishi Vigyan Kendra (KVK) is an innovative district level science based institution engaged in
                        transfer of latest agricultural technologies to the farming community for bridging the gap
                        between production and potential productivity. The KVK has been endeavoring for uplifting of
                        socio economic condition of the farming community of the district through scientific
                        intervention in the agricultural and allied sectors since inception. It undertakes short
                        duration as well as long duration vocational trainings for farmers, farm women and rural youths,
                        conducts On Farm Trials (OFTs) for assessment of technology and Front Line Demonstrations (FLDs)
                        to establish production potential of the latest technologies in the field of agriculture and
                        allied sectors to the farming community and extension workers.
                    </p>
                    <div class="w-full flex justify-end">
                        <div class="rounded-md text-center cursor-pointer p-[8px] border border-gray-300 bg-white ">Read
                            More</div>
                    </div>

                </div>

            </div>
            <div class="flex flex-col rounded-md h-auto bg-white w-[30%] mb-5">
                <h2 class="text-white text-center text-[22px] rounded-t-lg  bg-[#4f0913] p-2.5 w-[50%]">All Important
                    Links</h2>
                <div class="rounded-md border p-2 border-gray-300 h-[650px] w-full overflow-y-auto">
                    <ul class="list-disc pl-5 ">
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                        <li>Krishi Portal</li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="w-full gap-5 flex px-[60px] h-[350px] mb-8 items-center">
            <div class="w-[50%] flex flex-col">
                <h2 class="text-[28px] ">District Profile</h2>
                <p class="text-[#393e39]">
                    Jodhpur district is among the largest districts in the state of Rajasthan. It is centrally situated
                    in the western region of the state, and covers a total geographical area of 22850 Sq. kilometers.
                    Jodhpur district lies between 26 degrees 0 minutes and 27 degrees 37 minutes north latitude and 72
                    degrees 55 minutes and 73 degrees 52 minutes east longitude. It is bounded by Nagaur in the east,
                    Jaisalmer in the west, Bikaner in the north and Barmer and Pali in the South. The total length of
                    the district from north to south is about 197 Kms and from east to west it is about 208 Kms. The
                    district of Jodhpur lies at a height of 250-300 metres above sea level.
                </p>
                <h3 class="text-[16px] mt-3">
                    Typogaraphy
                </h3>
                <p class="text-[#393e39]">
                    This district comes under the arid zone of the Rajasthan state. It covers 11.60 percent of the total
                    area of arid zone of the state. Some of the area of the great Thar Desert in India also comes within
                    the district. General slope of the terrain is towards west. </p>
            </div>
            <div class="w-[50%] flex flex-col bg-[#eca908] h-[350px] overflow-hidden relative">
                <div class="flex items-end pl-6 pb-2 h-[15%]">
                    <h3 class="text-white text-[22px]">Latest News</h3>
                </div>
                <div class="absolute bottom-0 w-full h-[85%]">
                    <div class="news-container p-6">
                        <div class="news-content">
                            <p class="text-white text-start text-[12px]">🔴 KVK, ICAR-CAZRI, Jodhpur organized Webcast
                                programme of Launching of NADCP for FMD & Brucellosis and National Artificial
                                Insemination Programme & Workshop on 11th September, 2019</p>
                            <p class="text-white text-start text-[12px]">📢 KVK, ICAR-CAZRI, Jodhpur organized Webcast
                                programme of Launching of NADCP for FMD & Brucellosis and National Artificial
                                Insemination Programme & Workshop on 11th September, 2019</p>
                            <p class="text-white text-start text-[12px]">🌧️KVK, ICAR-CAZRI, Jodhpur organized Webcast
                                programme of Launching of NADCP for FMD & Brucellosis and National Artificial
                                Insemination Programme & Workshop on 11th September, 2019</p>
                            <p class="text-white text-start text-[12px]">🌱 KVK, ICAR-CAZRI, Jodhpur organized Webcast
                                programme of Launching of NADCP for FMD & Brucellosis and National Artificial
                                Insemination Programme & Workshop on 11th September, 2019</p>
                            <p class="text-white text-start text-[12px]">📅 KVK, ICAR-CAZRI, Jodhpur organized Webcast
                                programme of Launching of NADCP for FMD & Brucellosis and National Artificial
                                Insemination Programme & Workshop on 11th September, 2019</p>
                            <p class="text-white text-start text-[12px]">🚜 KVK, ICAR-CAZRI, Jodhpur organized Webcast
                                programme of Launching of NADCP for FMD & Brucellosis and National Artificial
                                Insemination Programme & Workshop on 11th September, 2019</p>
                            <p class="text-white text-start text-[12px]">📰 KVK, ICAR-CAZRI, Jodhpur organized Webcast
                                programme of Launching of NADCP for FMD & Brucellosis and National Artificial
                                Insemination Programme & Workshop on 11th September, 2019</p>
                            <p class="text-white text-start text-[12px]">⚡ KVK, ICAR-CAZRI, Jodhpur organized Webcast
                                programme of Launching of NADCP for FMD & Brucellosis and National Artificial
                                Insemination Programme & Workshop on 11th September, 2019</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="w-full items-center justify-center p-4 bg-[#f0f4f8] px-6 h-auto flex flex-col ">

            <h2 class="  items-center justify-center flex mt-5"> Contact Us : Krishi Vigyan Kendra, Jodhpur, CAZRI
                Campus, Dist - Jodhpur - 342 005 (Rajasthan) INDIA</h2>
            <div class="w-full flex items-center gap-3 justify-center mt-3">
                <!-- Phone Number Button -->
                <div
                    class="bg-[#0055a5] p-3 rounded-md flex items-center justify-center w-auto text-white hover:bg-[#003f7d] transition-colors">
                    (092) 2992139
                </div>
                <!-- Get in Touch Button -->
                <div
                    class="bg-[#1ab21d] p-3 rounded-md flex items-center justify-center w-auto text-white hover:bg-[#148a16] transition-colors">
                    Get in touch
                </div>
            </div>

        </div>
        <div class="w-full flex justify-between h-auto p-6 px-[60px] bg-green-600">
            <div class="flex items-center flex-col">
                <ul class="flex flex-col gap-1">
                    <li class="text-white text-[12px]">Home</li>
                    <li class="text-white text-[12px]">About Us</li>
                    <li class="text-white text-[12px]">Contact Us</li>
                    <li class="text-white text-[12px]">Feedback</li>
                    <li class="text-white text-[12px]">Privacy Policy</li>
                    <li class="text-white text-[12px]">Disclaimer</li>
                    <li class="text-white text-[12px]">Linking Policy</li>
                    <li class="text-white text-[12px]">Terms & Conditions</li>
                    <li class="text-white text-[12px]">Copyright</li>
                    <li class="text-white text-[12px]">Sitemap</li>
                </ul>
            </div>
            <div class="flex items-center flex-col">
                <ul class="flex flex-col gap-1">
                    <li class="text-white text-[12px]">Home</li>
                    <li class="text-white text-[12px]">About Us</li>
                    <li class="text-white text-[12px]">Contact Us</li>
                    <li class="text-white text-[12px]">Feedback</li>
                    <li class="text-white text-[12px]">Privacy Policy</li>
                    <li class="text-white text-[12px]">Disclaimer</li>
                    <li class="text-white text-[12px]">Linking Policy</li>
                    <li class="text-white text-[12px]">Terms & Conditions</li>
                    <li class="text-white text-[12px]">Copyright</li>
                    <li class="text-white text-[12px]">Sitemap</li>
                </ul>
            </div>
            <div class="flex items-center flex-col">
                <ul class="flex flex-col gap-1">
                    <li class="text-white text-[12px]">Home</li>
                    <li class="text-white text-[12px]">About Us</li>
                    <li class="text-white text-[12px]">Contact Us</li>
                    <li class="text-white text-[12px]">Feedback</li>
                    <li class="text-white text-[12px]">Privacy Policy</li>
                    <li class="text-white text-[12px]">Disclaimer</li>
                    <li class="text-white text-[12px]">Linking Policy</li>
                    <li class="text-white text-[12px]">Terms & Conditions</li>
                    <li class="text-white text-[12px]">Copyright</li>
                    <li class="text-white text-[12px]">Sitemap</li>
                </ul>
            </div>
            <div class="flex items-center flex-col">
                <ul class="flex flex-col gap-1">
                    <li class="text-white text-[12px]">Home</li>
                    <li class="text-white text-[12px]">About Us</li>
                    <li class="text-white text-[12px]">Contact Us</li>
                    <li class="text-white text-[12px]">Feedback</li>
                    <li class="text-white text-[12px]">Privacy Policy</li>
                    <li class="text-white text-[12px]">Disclaimer</li>
                    <li class="text-white text-[12px]">Linking Policy</li>
                    <li class="text-white text-[12px]">Terms & Conditions</li>
                    <li class="text-white text-[12px]">Copyright</li>
                    <li class="text-white text-[12px]">Sitemap</li>
                </ul>
            </div>
            <div class="flex items-center flex-col">
                <ul class="flex flex-col gap-1">
                    <li class="text-white text-[12px]">Home</li>
                    <li class="text-white text-[12px]">About Us</li>
                    <li class="text-white text-[12px]">Contact Us</li>
                    <li class="text-white text-[12px]">Feedback</li>
                    <li class="text-white text-[12px]">Privacy Policy</li>
                    <li class="text-white text-[12px]">Disclaimer</li>
                    <li class="text-white text-[12px]">Linking Policy</li>
                    <li class="text-white text-[12px]">Terms & Conditions</li>
                    <li class="text-white text-[12px]">Copyright</li>
                    <li class="text-white text-[12px]">Sitemap</li>
                </ul>
            </div>
        </div>
        <div class="flex flex-col w-full p-4 bg-[#002147] text-white justify-center items-center">
            <h3 class="mt-3 text-center text-yellow-400 font-semibold">
                Home | Privacy Policy | Disclaimer | Linking Policy | Contact Us | Feedback
            </h3>
            <h3 class="text-center text-white">© 2025 jodhpur1.kvk2.in, All Rights Reserved</h3>
            <h3 class="text-center text-white">
                Contents by: <span class="font-bold">Dr. M. S. Meena</span>, Principal Scientist (Agricultural Extension), ICAR - ATARI, Jodhpur
            </h3>
            <h3 class="text-center text-white">
                Krishi Vigyan Kendra, Jodhpur-1, CAZRI Campus, Dist - Jodhpur - 342 005 (Rajasthan), INDIA
            </h3>
        </div>
        
    </div>
</body>

</html>