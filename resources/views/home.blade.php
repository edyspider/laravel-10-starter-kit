<x-guest-layout>
    @if (Route::has('login'))
        <livewire:welcome.navigation />
    @endif
    <div>
        <section class="flex flex-col items-center min-h-screen lg:py-12 lg:flex lg:justify-center" id="welcome">
            <div class="overflow-hidden bg-gray-100 dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-6xl lg:w-full lg:shadow-md lg:rounded-xl">
                <div class="lg:w-1/2">
                    <div class="h-64 bg-cover bg-gray-50 dark:bg-gray-950 lg:h-full">
                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 863 826.71426" xmlns:xlink="http://www.w3.org/1999/xlink"><title>laravel and vue</title><path d="M908.58458,346.02969C863.66819,169.40825,708.46793,41.91226,526.2964,36.79851,429.98777,34.095,328.64421,66.0363,254.85863,177.81049c-131.89969,199.80845,8.10555,337.88223,105.7135,403.49213a610.75776,610.75776,0,0,1,126.24112,113.4651c65.931,78.23772,192.76719,175.45908,343.82337,23.12816C940.12233,607.48624,938.50333,463.677,908.58458,346.02969Z" transform="translate(-168.5 -36.64287)" fill="#f2f2f2"/><path d="M1030.5,739.35713c0,43.35436-189.18913,124-427.5,124s-434.5-75.64564-434.5-119,196.18913-38,434.5-38S1030.5,696.00278,1030.5,739.35713Z" transform="translate(-168.5 -36.64287)" fill="#3f3d56"/><path d="M1030.5,739.35713c0,43.35436-189.18913,124-427.5,124s-434.5-75.64564-434.5-119,196.18913-38,434.5-38S1030.5,696.00278,1030.5,739.35713Z" transform="translate(-168.5 -36.64287)" opacity="0.1"/><ellipse cx="431.5" cy="707.21426" rx="431.5" ry="78.5" fill="#3f3d56"/><polygon points="594.859 440.238 594.859 650.182 629.976 707.413 632.649 711.766 771.212 711.766 774.011 440.238 594.859 440.238" fill="#2f2e41"/><polygon points="594.859 440.238 594.859 650.182 629.976 707.413 632.131 440.238 594.859 440.238" opacity="0.1"/><polygon points="260.348 434.639 260.348 644.583 225.231 701.814 222.558 706.167 83.994 706.167 81.195 434.639 260.348 434.639" fill="#2f2e41"/><polygon points="260.348 434.639 260.348 644.583 225.231 701.814 223.075 434.639 260.348 434.639" opacity="0.1"/><polygon points="816 430.44 816 443.037 63 443.037 63 424.842 132.981 388.452 754.416 388.452 816 430.44" fill="#2f2e41"/><polygon points="816 430.44 816 443.037 63 443.037 63 424.842 816 430.44" opacity="0.1"/><polygon points="170.771 493.424 137.18 493.424 123.184 483.626 186.167 483.626 170.771 493.424" opacity="0.1"/><polygon points="170.771 534.013 137.18 534.013 123.184 524.215 186.167 524.215 170.771 534.013" opacity="0.1"/><polygon points="170.771 591.398 137.18 591.398 123.184 581.6 186.167 581.6 170.771 591.398" opacity="0.1"/><polygon points="170.771 648.782 137.18 648.782 123.184 638.985 186.167 638.985 170.771 648.782" opacity="0.1"/><polygon points="684.435 499.022 718.026 499.022 732.022 489.225 669.039 489.225 684.435 499.022" opacity="0.1"/><polygon points="684.435 539.611 718.026 539.611 732.022 529.814 669.039 529.814 684.435 539.611" opacity="0.1"/><polygon points="684.435 596.996 718.026 596.996 732.022 587.199 669.039 587.199 684.435 596.996" opacity="0.1"/><polygon points="684.435 654.381 718.026 654.381 732.022 644.583 669.039 644.583 684.435 654.381" opacity="0.1"/><path d="M701.01569,390.06945,696.347,419.877s-22.98411,12.2103-6.8234,12.56943,92.29556,0,92.29556,0,14.72419,0-8.619-12.92856l-4.66865-31.244Z" transform="translate(-168.5 -36.64287)" fill="#3f3d56"/><path d="M686.27261,432.123a63.5688,63.5688,0,0,1,10.07442-6.66854l4.66865-29.80753,67.51582.06351,4.66865,29.38488a61.30417,61.30417,0,0,1,10.78841,7.09889c2.99811-.68405,6.2745-3.22612-10.78841-12.67635l-4.66865-31.244-67.51582,1.79564L696.347,419.877S677.03363,430.13851,686.27261,432.123Z" transform="translate(-168.5 -36.64287)" opacity="0.1"/><rect x="413.82432" y="145.67179" width="304.18032" height="211.88475" rx="10.6948" fill="#3f3d56"/><rect x="424.05943" y="156.98428" width="283.71009" height="158.734" fill="#f2f2f2"/><circle cx="565.91447" cy="151.9565" r="1.79563" fill="#f2f2f2"/><path d="M886.50463,364.93058v18.574a10.69346,10.69346,0,0,1-10.6948,10.69481H593.01912a10.69346,10.69346,0,0,1-10.6948-10.69481v-18.574Z" transform="translate(-168.5 -36.64287)" fill="#3f3d56"/><circle cx="565.91447" cy="343.01191" r="6.82341" fill="#f2f2f2"/><polygon points="555.281 415.196 555.281 418.788 362.071 418.788 362.071 415.915 362.337 415.196 367.099 402.268 551.331 402.268 555.281 415.196" fill="#3f3d56"/><path d="M798.13506,448.32338c-.35194,1.50472-1.68071,3.09212-4.683,4.59324-10.77381,5.3869-32.68053-1.4365-32.68053-1.4365s-16.879-2.873-16.879-10.41468a13.46778,13.46778,0,0,1,1.4796-.87984c4.52961-2.3964,19.54831-8.3097,46.17806.25038a11.10594,11.10594,0,0,1,5.06187,3.31716A5.29644,5.29644,0,0,1,798.13506,448.32338Z" transform="translate(-168.5 -36.64287)" fill="#3f3d56"/><path d="M798.13506,448.32338c-13.18712,5.05294-24.94133,5.43-37.00441-2.94842-6.0836-4.22333-11.61057-5.2684-15.75848-5.18936,4.52961-2.3964,19.54831-8.3097,46.17806.25038a11.10594,11.10594,0,0,1,5.06187,3.31716A5.29644,5.29644,0,0,1,798.13506,448.32338Z" transform="translate(-168.5 -36.64287)" opacity="0.1"/><ellipse cx="613.10087" cy="407.29559" rx="4.66865" ry="1.43651" fill="#f2f2f2"/><polygon points="555.281 415.196 555.281 418.788 362.071 418.788 362.071 415.915 362.337 415.196 555.281 415.196" opacity="0.1"/><path d="M834.19367,268.59416c-1.52438-1.52439-21.08732-26.1686-24.39014-30.23362-3.55691-4.065-5.08129-3.30284-7.36787-3.04877s-26.93078,4.57315-29.72549,4.82721c-2.7947.50813-4.57315,1.52439-2.7947,4.065,1.52438,2.28657,17.78447,25.15234,21.34137,30.48768l-64.78633,15.4979-51.32094-86.1277c-2.03251-3.04877-2.54064-4.065-7.11379-3.811s-40.39618,3.30283-42.93682,3.30283c-2.54064.25407-5.33535,1.27032-2.79471,7.36786s43.19089,93.49557,44.20714,96.03621,4.065,6.60566,10.92475,5.08128c7.1138-1.77845,31.504-8.13,44.96934-11.68694,7.11379,12.7032,21.34138,38.61773,24.13609,42.42869,3.5569,5.08128,6.09754,4.065,11.43288,2.54064,4.31909-1.27032,66.56478-23.62795,69.35948-24.89827s4.57316-2.03251,2.54064-4.82722c-1.52438-2.03251-17.78448-24.13609-26.42267-35.569,5.84349-1.52438,26.93079-7.11379,29.21737-7.876,2.54064-.76219,3.04876-2.03251,1.52438-3.5569ZM716.562,292.73024c-.76219.25406-37.09335,8.89225-38.8718,9.40038-2.03251.50813-2.03251.25406-2.03251-.50813-.50813-.76219-43.19088-89.17648-43.95307-90.19274-.50813-1.01626-.50813-2.03251,0-2.03251s34.29863-3.04877,35.31488-3.04877c1.27032,0,1.01626.25406,1.52439,1.01625,0,0,47.51,82.06268,48.27216,83.333,1.01626,1.27032.50813,1.77845-.25406,2.03251Zm102.13375,19.05481c.50812,1.01626,1.27032,1.52438-.7622,2.03251-1.77844.76219-61.22943,20.83325-62.49975,21.34137s-2.03251.76219-3.5569-1.52438-20.83326-35.569-20.83326-35.569l63.26194-16.51416c1.52438-.50813,2.03252-.76219,3.04876.76219,1.01626,1.77845,20.83325,28.70924,21.34139,29.47144Zm4.065-44.71527c-1.52438.25406-24.64421,6.09753-24.64421,6.09753l-19.0548-25.91453c-.50813-.76219-1.01626-1.52439.25406-1.77845s22.86576-4.065,23.882-4.31909,1.77844-.50813,3.04876,1.27032c1.27032,1.52438,17.53043,22.35763,18.29261,23.11982s-.25406,1.27033-1.77844,1.52439Z" transform="translate(-168.5 -36.64287)" fill="#fb503b"/><circle cx="394.63903" cy="155.89453" r="38.24668" fill="#ffb9b9"/><path d="M534.95727,211.66073v60.38949h62.40247s-8.05193-50.32457-4.026-65.42194Z" transform="translate(-168.5 -36.64287)" fill="#ffb9b9"/><path d="M658.75572,293.18654s-59.383-29.18825-59.383-31.20123-6.03894-15.09737-10.06491-15.09737-38.24668-11.07141-57.37,5.03245l-2.013,13.08439-73.47387,48.31159,20.12983,73.47388s13.08438,14.09088,9.05842,24.1558,3.01947,61.396,3.01947,61.396l158.01916-5.03245V398.86815s5.03246-16.10387,8.05194-21.13632,0-20.12983,0-20.12983l24.15579-30.19475S675.86608,299.22549,658.75572,293.18654Z" transform="translate(-168.5 -36.64287)" fill="#d0cde1"/><path d="M458.96717,337.97541l4.52921-24.659S437.3276,427.04991,440.34707,440.1343s25.16229,33.21422,28.18176,34.22071,31.20124-86.55827,31.20124-86.55827Z" transform="translate(-168.5 -36.64287)" opacity="0.1"/><path d="M473.56129,310.2969l-17.11035,3.01947S430.28216,427.04991,433.30163,440.1343s25.16229,33.21422,28.18176,34.22071,31.20124-86.55827,31.20124-86.55827Z" transform="translate(-168.5 -36.64287)" fill="#d0cde1"/><path d="M664.29142,344.01436l8.55518-16.60711s12.0779,113.73354,4.026,124.805-39.90294,15.21422-39.90294,15.21422l-.35672-82.64915Z" transform="translate(-168.5 -36.64287)" opacity="0.1"/><path d="M665.80116,314.32286l13.08439,13.08439s12.0779,113.73354,4.026,124.805-39.90294,15.21422-39.90294,15.21422l-.35672-82.64915Z" transform="translate(-168.5 -36.64287)" fill="#d0cde1"/><path d="M470.54182,487.4394s-29.18826-11.07141-34.22071,10.06491S448.399,613.25083,448.399,613.25083s11.07141,71.46089,18.11685,73.47388,38.24668,3.01947,43.27913-6.03895-15.09737-101.65564-15.09737-101.65564l116.753-2.013s-7.04544,80.51931-11.0714,87.56475-4.026,31.20124,0,31.20124,48.31159-2.013,51.33106-8.05193,20.12983-141.9153,20.12983-141.9153,14.09088-47.3051-2.013-44.28562S470.54182,487.4394,470.54182,487.4394Z" transform="translate(-168.5 -36.64287)" fill="#3f3d56"/><path d="M642.65186,683.70523s10.06491-7.04544,15.09737,0,7.04544,15.09737-15.09737,27.17527-39.25317,9.05843-39.25317,7.04544V688.73769Z" transform="translate(-168.5 -36.64287)" fill="#2f2e41"/><path d="M468.52883,680.68576s-10.06491-7.04544-15.09737,0S446.386,695.78313,468.52883,707.861s39.25317,9.05842,39.25317,7.04544V685.71822Z" transform="translate(-168.5 -36.64287)" fill="#2f2e41"/><path d="M563.38706,144.31209a32.34794,32.34794,0,0,0-11.23352,1.60112,43.42778,43.42778,0,0,0-8.00273,4.2341L527.26546,160.6475a7.90785,7.90785,0,0,0-4.76623,7.37l-2.11,15.80182c-.53248,3.98775-1.02331,8.25232.7618,11.85776,1.49,3.00929,4.3314,5.06856,6.66782,7.4804a27.456,27.456,0,0,1,7.23648,14.06091c1.20795,6.59754.43461,14.5425,5.65567,18.75287,2.827,2.27972,6.6803,2.71095,10.30576,2.92289a153.78563,153.78563,0,0,0,29.70069-1.14315,11.81912,11.81912,0,0,0,4.48748-1.25739c1.775-1.04988,2.89248-2.90316,3.93692-4.68137,3.77061-6.41971,7.657-13.24892,7.61606-20.69395-.02026-3.68318-.96268-7.6389.8058-10.8698a42.49668,42.49668,0,0,1,3.03759-3.945c2.18963-3.07677,2.61589-7.03,2.97274-10.7897,1.13978-12.00866-.05177-21.1472-8.90224-29.60633C586.41,148.011,574.65448,144.38477,563.38706,144.31209Z" transform="translate(-168.5 -36.64287)" fill="#2f2e41"/><polygon points="300.937 569.703 267.346 740.458 284.141 740.458 316.333 572.503 300.937 569.703" fill="#2f2e41"/><polygon points="408.708 583.7 429.703 779.648 443.699 779.648 431.102 578.101 408.708 583.7" fill="#2f2e41"/><polygon points="466.093 578.101 495.485 708.267 509.481 708.267 481.489 575.302 466.093 578.101" fill="#2f2e41"/><polygon points="354.123 578.101 349.924 681.674 361.121 681.674 369.519 578.101 354.123 578.101" fill="#2f2e41"/><path d="M445.64312,588.15108s-22.394-149.76023,40.58922-153.95911,152.55948,0,152.55948,0,51.78625-4.19889,36.39034,153.95911c0,0,13.99628,46.18773-111.97026,41.98884S445.64312,588.15108,445.64312,588.15108Z" transform="translate(-168.5 -36.64287)" fill="#00b0ff"/><path d="M1019.5,649.30794c0,26.1153-15.52513,35.23378-34.67635,35.23378s-34.67635-9.11848-34.67635-35.23378,34.67635-59.33808,34.67635-59.33808S1019.5,623.19264,1019.5,649.30794Z" transform="translate(-168.5 -36.64287)" fill="#00b0ff"/><polygon points="815.416 622.048 830.195 595.009 815.471 618.619 815.631 608.792 825.817 589.229 815.673 606.191 815.96 588.516 826.868 572.942 816.005 585.737 816.185 553.327 815.106 594.394 804.06 577.487 814.972 597.859 813.939 617.599 813.908 617.075 801.123 599.212 813.869 618.926 813.74 621.395 813.717 621.432 813.728 621.635 811.106 647.977 814.609 647.977 815.029 645.849 827.744 626.182 815.06 643.904 815.416 622.048" fill="#3f3d56"/><polygon points="838.47 704.549 797.129 704.549 786.445 644.163 846.831 644.163 838.47 704.549" fill="#2f2e41"/><rect x="145" y="296.30047" width="86" height="100.82759" fill="#3f3d56"/><rect x="158.34483" y="311.94613" width="59.31034" height="69.53627" fill="#f2f2f2"/><path d="M362.4444,363.35713l-6.02314,10.4315-6.02315-10.4315H330.34252l26.07874,45.17047L382.5,363.35713Z" transform="translate(-168.5 -36.64287)" fill="#4dba87"/><path d="M362.4444,363.35713l-6.02314,10.4315-6.02315-10.4315H340.774l15.64724,27.101,15.64724-27.101Z" transform="translate(-168.5 -36.64287)" fill="#435466"/></svg>
                    </div>
                </div>

                <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-white md:text-3xl">
                        Laravel 10 <span class="text-blue-500">Starter Kit</span>
                    </h2>

                    <p class="mt-4 text-gray-500 dark:text-gray-300">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Quidem modi reprehenderit vitae exercitationem aliquid dolores ullam temporibus enim expedita aperiam
                        mollitia iure consectetur dicta tenetur, porro consequuntur saepe accusantium consequatur.
                    </p>

                    <div class="inline-flex w-full mt-6 sm:w-auto">
                        <a href="#" class="inline-flex items-center justify-center w-full px-6 py-2 text-sm text-gray-100 duration-300 bg-gray-900 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                            Start Now
                        </a>
                    </div>
                </div>
                <div class="">
                    <a href="/" wire:navigate>
                        <x-application-logo class="w-20 h-20 fill-current" />
                    </a>
                </div>
            </div>
        </section>

        <section class="flex flex-col items-center min-h-screen lg:py-12 lg:flex lg:justify-center" id="features">
            <div class="overflow-hidden bg-gray-100 dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-6xl lg:w-full lg:shadow-md lg:rounded-xl">
                <div class="container px-6 py-10 mx-auto">
                    <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">explore our <br> awesome <span class="underline decoration-blue-500">Components</span></h1>

                    <p class="mt-4 text-gray-500 xl:mt-6 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quam voluptatibus
                    </p>

                    <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
                        <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                            <span class="inline-block text-blue-500 dark:text-blue-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                                </svg>
                            </span>

                            <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">elegant Dark Mode</h1>

                            <p class="text-gray-500 dark:text-gray-300">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
                            </p>

                            <a href="#" class="inline-flex p-2 text-blue-500 capitalize transition-colors duration-300 transform bg-blue-100 rounded-full rtl:-scale-x-100 dark:bg-blue-500 dark:text-white hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </a>
                        </div>

                        <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                            <span class="inline-block text-blue-500 dark:text-blue-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                                </svg>
                            </span>

                            <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Easy to customiztions</h1>

                            <p class="text-gray-500 dark:text-gray-300">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
                            </p>

                            <a href="#" class="inline-flex p-2 text-blue-500 capitalize transition-colors duration-300 transform bg-blue-100 rounded-full rtl:-scale-x-100 dark:bg-blue-500 dark:text-white hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </a>
                        </div>

                        <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                            <span class="inline-block text-blue-500 dark:text-blue-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                            </span>

                            <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">Simple & clean designs</h1>

                            <p class="text-gray-500 dark:text-gray-300">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
                            </p>

                            <a href="#" class="inline-flex p-2 text-blue-500 capitalize transition-colors duration-300 transform bg-blue-100 rounded-full rtl:-scale-x-100 dark:bg-blue-500 dark:text-white hover:underline hover:text-blue-600 dark:hover:text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="flex flex-col items-center min-h-screen lg:py-12 lg:flex lg:justify-center" id="contact">
            <div class="overflow-hidden bg-gray-100 dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-6xl lg:w-full lg:shadow-md lg:rounded-xl">
                <div class="container px-6 py-12 mx-auto">
                    <div class="text-center">
                        <p class="font-medium text-blue-500 dark:text-blue-400">Contact us</p>

                        <h1 class="mt-2 text-2xl font-semibold text-gray-800 md:text-3xl dark:text-white">Get in touch</h1>

                        <p class="mt-3 text-gray-500 dark:text-gray-400">Our friendly team is always here to chat.</p>
                    </div>

                    <div class="grid grid-cols-1 gap-12 mt-10 md:grid-cols-2 lg:grid-cols-3">
                        <div class="flex flex-col items-center justify-center text-center">
                            <span class="p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </span>

                            <h2 class="mt-4 text-lg font-medium text-gray-800 dark:text-white">Email</h2>
                            <p class="mt-2 text-gray-500 dark:text-gray-400">Our friendly team is here to help.</p>
                            <p class="mt-2 text-blue-500 dark:text-blue-400">hello@edyspider.com</p>
                        </div>

                        <div class="flex flex-col items-center justify-center text-center">
                            <span class="p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </span>

                            <h2 class="mt-4 text-lg font-medium text-gray-800 dark:text-white">Office</h2>
                            <p class="mt-2 text-gray-500 dark:text-gray-400">Come say hello at our office HQ.</p>
                            <p class="mt-2 text-blue-500 dark:text-blue-400">50 Percent Street River Walf VIS 3500 PT</p>
                        </div>

                        <div class="flex flex-col items-center justify-center text-center">
                            <span class="p-3 text-blue-500 rounded-full bg-blue-100/80 dark:bg-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                            </span>

                            <h2 class="mt-4 text-lg font-medium text-gray-800 dark:text-white">Phone</h2>
                            <p class="mt-2 text-gray-500 dark:text-gray-400">Mon-Fri from 8am to 5pm.</p>
                            <p class="mt-2 text-blue-500 dark:text-blue-400">+351 (23) 0-000-000</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="flex flex-col items-center min-h-screen lg:py-12 lg:flex lg:justify-center" id="about">
            <div class="overflow-hidden bg-gray-100 dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-6xl lg:w-full lg:shadow-md lg:rounded-xl">
                <div class="container px-6 py-10 mx-auto">
                    <h1 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">Our Executive Team</h1>

                    <p class="max-w-2xl mx-auto my-6 text-center text-gray-500 dark:text-gray-300">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error alias, adipisci rem similique, at omnis eligendi optio eos harum.
                    </p>

                    <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-4">
                        <div class="flex flex-col items-center p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
                            <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">arthur melo</h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">design director</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white" aria-label="Reddit">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                        </path>
                                    </svg>
                                </a>

                                <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white" aria-label="Facebook">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                        </path>
                                    </svg>
                                </a>

                                <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white" aria-label="Github">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-col items-center p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
                            <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80" alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">Amelia. Anderson</h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Lead Developer</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white" aria-label="Reddit">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                        </path>
                                    </svg>
                                </a>

                                <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white" aria-label="Facebook">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                        </path>
                                    </svg>
                                </a>

                                <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white" aria-label="Github">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-col items-center p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
                            <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="https://images.unsplash.com/photo-1488508872907-592763824245?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">Olivia Wathan</h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Lead designer</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white" aria-label="Reddit">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                        </path>
                                    </svg>
                                </a>

                                <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white" aria-label="Facebook">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                        </path>
                                    </svg>
                                </a>

                                <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white" aria-label="Github">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="flex flex-col items-center p-8 transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600 dark:border-gray-700 dark:hover:border-transparent">
                            <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">

                            <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white group-hover:text-white">John Doe</h1>

                            <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">Full stack developer</p>

                            <div class="flex mt-3 -mx-2">
                                <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white" aria-label="Reddit">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                        </path>
                                    </svg>
                                </a>

                                <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white" aria-label="Facebook">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                        </path>
                                    </svg>
                                </a>

                                <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300 group-hover:text-white" aria-label="Github">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-guest-layout>
