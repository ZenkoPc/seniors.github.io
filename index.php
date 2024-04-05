<?php
include_once("config/config-medicare.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" description="noindex,nofollow,noarchive">
    <title>
        <?php echo (($domainName == "Dental Benefit Finder") ? "Benefits For Seniors" : $domainName) ?>

    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body class="h-screen flex flex-col justify-between">
    <main>
        <a href="https://cdn.sppoints.xyz/click" class="hidden" id="rtRef"></a>
        <nav class="bg-blue-700 p-3 mt-0 w-full">
            <div class="container mx-auto flex items-center justify-between align-middle md:px-48">
                <div class="flex text-white font-extrabold">
                    <?php //echo (($domainName == "Dental Benefit Finder") ? "Benefits For Seniors" : $domainName) ?>
                </div>
            </div>
        </nav>
        <div id="mainContainer" class="mx-auto md:pt-4 pt-1 px-4 md:px-0 max-w-5xl text-center container">
            <div id="mainContent">
            <h1 class="font-black px-1 capitalize text-left break-normal text-lg md:text-3xl mx-auto">
                [STATE] seniors: 2024 medicare advantage plans can help you save thousands in additional benefits.
                check your eligibility now
            </h1>
            <div class="text-left px-4 mt-4">
                <img class="mx-auto my-2 w-full aspect-auto" src="<?php //echo $cdnPath; ?>assets/images/hero2.jpg" />
                <p class="my-2 text-sm md:text-md">
                    Millions of Seniors are rushing the hotlines to secure their 2024 Medicate Advantage benefit.
                </p>
            </div>
            <p class="my-5 md:text-xl text-left">
                <span class="font-bold">
                    Benefit plans and options are always changing,
                </span>
                so speak to our licensed sales agents and choose the right Medicare Advantage plan before enrollment ends!
            </p>
            </div>
            <div>
                <div id="display1" class="md:mt-8 mt-4">
                    <h3 class="font-bold text-center md:text-4xl text-2xl my-8">
                        Tap your age
                    </h3>
                    <div class="grid grid-cols-1  gap-6">

                        <button id="btn-2" class="flex justify-center bg-blue-500 hover:bg-blue-700  tracking-wide text-white font-bold rounded-2xl md:w-2/5 sm:w-2/4 w-3/4 mx-auto border-b-2 border-blue-900 hover:border-blue-800 transition-all uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center">
                            64 - 74
                        </button>
                        <button id="btn-3" class="flex justify-center bg-blue-500 hover:bg-blue-700  tracking-wide text-white font-bold rounded-2xl md:w-2/5 sm:w-2/4 w-3/4 mx-auto border-b-2 border-blue-900 hover:border-blue-800 transition-all uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center">
                            over 75
                        </button>
                    </div>
                </div>
                <div id="display2" class="md:mt-8 mt-4 hidden">
                    <h3 class="font-bold text-center md:text-4xl text-3xl my-8">
                        Are you enrolled in Medicare <br>
                        Part A Or Part B?
                    </h3>
                    <div class="grid grid-cols-1 gap-6">
                        <button id="btn-yes" class="flex justify-center bg-lime-600 hover:bg-lime-700 transition-all  tracking-wide text-white font-bold rounded-2xl md:w-2/5 sm:w-2/4 w-3/4 mx-auto border-b-2 border-lime-900 uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center cta_btn btn_2">

                            Yes
                        </button>
                        <button id="btn-no" class="flex justify-center bg-lime-600 hover:bg-lime-700 transition-all  tracking-wide text-white font-bold rounded-2xl md:w-2/5 sm:w-2/4 w-3/4 mx-auto border-b-2 border-lime-900 uppercase shadow-md md:py-6 py-4 md:text-2xl px-6 items-center cta_btn btn_2">
                            No
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="display4" class="hidden hidden mx-auto md:pt-4 pt-1 px-4 md:px-0 max-w-5xl container ">
            <div class="p-6 mt-4 text-center">
                <h3 class="text-xl md:text-4xl text-lime-600 font-bold">
                    Congratulations!
                </h3>
                <p class="mt-3 md:text-lg text-sm capitalize font-bold">
                    You may be elegible for additional benefits and <br>
                    Savings that may include:
                </p>
                <ul class="mt-3 max-w-max mx-auto text-lg pt-6">
                    <li class="flex gap-2 justify-left items-center">
                        <img src="assets/images/verified.png" class="w-10" alt="verified icon">
                        Dental Hearing <br> and Vision Care
                    </li>
                    <li class="flex gap-2 justify-left items-center">
                        <img src="assets/images/verified.png" class="w-10" alt="verified icon">
                        Groceries
                    </li>
                    <li class="flex gap-2 justify-left items-center">
                        <img src="assets/images/verified.png" class="w-10" alt="verified icon">
                        Prescriptions
                    </li>
                </ul>
                <a href="tel:<?php echo $ringbaNumberPrimary; ?>">
                    <button class="uppercase rounded-lg border-b-2 border-b-lime-800 bg-lime-600 hover:bg-lime-800 transition-all text-white my-4 p-5  shadow-2xl md:text-2xl text-base">
                        Call
                        <?php echo $ringbaNumberPrimaryTel; ?>
                    </button>
                </a>

                <p class="text-lg my-4">
                    <span class="bg-yellow-200 rounded-lg px-3 py-1">
                        Make a <strong>quick call</strong> to our licensed sales
                    </span> <br>
                    <span class="bg-yellow-200 rounded-lg px-3 py-1">
                        agent to learn more before enroll.
                    </span>
                </p>

                <div id="countdown" class="border-2 mt-10 border-red-500 border-dashed w-max px-6 py-2 mx-auto">
                    <span class="text-red-500" id="time"></span>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer mt-12 footer-center p-4 mt-12 mb-2 text-center max-w-6xl mx-auto text-xs">
        <div>
            <p>By clicking the above button and submitting this form, I agree that I am 18+ years old and I provide my signature expressly consenting to receive emails, calls, postal mail, text messages and other forms of marketing communication regarding Medicare and Health Insurance, or other offers from <?php echo $currentDomain; ?> and agents to the number(s) I provided, including a mobile phone, even if I am on a state or federal Do Not Call and/or Do Not Email registry. The list of companies participating are subject to change. I will receive calls and/or texts from multiple companies in the list and/or <?php echo $currentDomain; ?>. Such calls and text messages may use automated telephone dialing systems, artificial or pre-recorded voices. I understand my wireless carrier may impose charges for calls or texts. I understand that my consent to receive communications is not a condition of purchase and I may revoke my consent at any time. </p>
        </div>
        <div class="mb-4">
            <p>
                This information is for educational purposes only and not endorsed by
                Facebook , Instagram YouTube or any news publication.
            </p>
        </div>
        <div class="grid grid-flow-col gap-3 md:w-1/3 mx-auto my-8">
            <a class="link link-hover" href="https://<?php echo $currentDomain; ?>/terms"> Terms & Conditions </a>
            <p class="text-blue-500">|</p>
            <a class="link link-hover" href="https://<?php echo $currentDomain; ?>/privacy"> Privacy Policy </a>

            <p class="text-blue-500">|</p>
            <a class="link link-hover" href="https://<?php echo $currentDomain; ?>/privacy.php#caresidents"> CCPA </a>
        </div>
        <div class="mt-8">
            <p>Copyright © 2024 - All right reserved
                <?php echo $domainName ?>
            </p>
        </div>
    </footer>
    <script src="https://cdn.sppoints.xyz/track.js?rtkcmpid=<?php echo $rtkCmpId; ?>"></script>
    <script>
        const setRtClickId = () => {
            var anchorTag = document.getElementById("rtRef");
            var anchorUrl = new URL(anchorTag.href);
            var anchorParams = new URLSearchParams(anchorUrl.search);

            // Assume your window location is something like /path?param2=value2
            var windowUrl = new URL(window.location.href);
            var windowParams = new URLSearchParams(windowUrl.search);

            windowUrl.searchParams.set('age', '64');
            window.history.pushState({
                path: windowUrl.toString()
            }, '', windowUrl.toString());
            // Append params from the anchor tag to the main URL's params
            for (let pair of anchorParams.entries()) {
                windowParams.append(pair[0], pair[1]);
            }

            // Set the window's location search params
            windowUrl.search = windowParams.toString();
            history.replaceState({}, "", windowUrl.toString());

        }

        const loadRingba = () => {
            var script = document.createElement("script");
            script.src =
                "<?php echo $ringbaScriptPrimary; ?>";
            document.head.appendChild(script);
        }

        function scrollToTop() {
            window.scrollTo({
                top: 0, // Scroll to the top of the window
                behavior: 'smooth' // Smooth scroll
            });
        }

        const runCountdownTimer = () => {
            var now = new Date().getTime();
            var countDownDate = new Date(now + 3 * 60000).getTime();

            setInterval(function() {
                var now = new Date().getTime();

                var distance = countDownDate - now;

                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                if (distance <= 0) {
                    document.getElementById("time").innerHTML = "EXPIRED";
                    clearInterval(x);
                }

                if(distance > 0){
                    document.getElementById("time").innerHTML = minutes + ":" + seconds;
                }
            }, 500);
        };
        
        const btn2 = document.getElementById("btn-2");
        const btn3 = document.getElementById("btn-3");
        const btnYes = document.getElementById("btn-yes");
        const btnNo = document.getElementById("btn-no");

        const mainContainer = document.getElementById("mainContainer");
        const mainContent = document.getElementById("mainContent");
        const display1 = document.getElementById("display1");
        const display2 = document.getElementById("display2");
        const display3 = document.getElementById("display3");
        const display4 = document.getElementById("display4");

        btn2.addEventListener("click", () => {
            mainContent.style.display = "none"
            display1.style.display = "none";
            display2.style.display = "block";
            const newUrl = new URL(window.location.href);
            newUrl.searchParams.set('age', '64');
            window.history.pushState({
                path: newUrl.href
            }, '', newUrl.href);

            setRtClickId();
        })
        btn3.addEventListener("click", () => {
            mainContent.style.display = "none"
            display1.style.display = "none";
            display2.style.display = "block";
            const newUrl = new URL(window.location.href);
            newUrl.searchParams.set('age', '76');
            window.history.pushState({
                path: newUrl.href
            }, '', newUrl.href);

            setRtClickId();

        })

        btnYes.addEventListener("click", () => {
            display2.style.display = "none";
            mainContainer.style.display = "none";
            display4.style.display = "block";

            loadRingba()
            scrollToTop()
            runCountdownTimer()

        })

        btnNo.addEventListener("click", () => {
            display2.style.display = "none";
            window.location.href =
                "<?php echo $mbOfferSite; ?>";
            display5.style.display = "block";
            scrollToTop()
        })
    </script>
</body>

</html>