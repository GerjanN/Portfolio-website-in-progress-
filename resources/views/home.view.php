<header class="sticky top-0 z-50">
    <nav>
        <div class="flex flex-row items-center justify-evenly border-b-2 border-black sticky top-0 bg-[#E4E2E2] overflow-hidden text-[#170202] h-[60px]">
            <a href="#over-mij"><img src="img/logoGerjan.png" alt="Logo" class="w-40 h-auto"></a>
            <a href="#projecten" class="">
                <p>Projecten</p>
            </a>
            <a href="#over-mij" class="">
                <p class="">Over mij</p>
            </a>
            <a href="#contact" class="">
                <p>Contact</p>
            </a>
        </div>
    </nav>
</header>
<div id="over-mij" class="flex flex-col items-center bg-[#857D7D]">
    <div class="sm:ml-[45rem] flex flex-col items-center text-balance text-center text-[#170202] mt-40 mb-[100px]">
        <h1 class="text-3xl mb-5 font-title">Welkom op mijn website!</h1>
        <p class="mx-20 font-body">
            Ik ben Gerjan Nienhuis en dit is een website die ik heb gemaakt om onder andere over mezelf te vertellen en gemaakte projecten te laten zien. ook kun je via deze website contact met me opnemen. Ik ben 17 jaar oud en ik zit in het tweede jaar van de software developer opleiding door Bit Academy. Mijn hobbies zijn onder andere gitaar spelen en muziek luisteren.
        </p>
    </div>
</div>
<div class="flex flex-col justify-center items-center h-[100vh] min-w-[375p] bg-[url(../img/phone1.svg)] sm:bg-[url(../img/bg.svg)] bg-cover bg-center sm:min-w-7xl" id="projecten">
    <h1 class="rotate-[14deg] text-3xl text-[#C3C3C3] mt-[7.5rem] font-title">Projecten</h1>
</div>
<div class="h-[225vh] sm:h-[390vh] sm:bg-[url(../img/bg2.svg)] sm:bg-white bg-cover bg-center sm:min-w-7xl text-[#170202]">
    <div class="flex flex-col  items-center justify-evenly h-[200vh]">
        <div class="grid grid-cols-1 gap-[10rem] sm:grid-cols-2 sm:gap-[25rem] justify-center items-center w-4/5 ">
            <div class="">
                <h1 class="text-3xl font-title">Backend Eindproject</h1>
                <img src="img/eindproject.png" alt="eindproject foto" class="w-[30rem] h-auto">
            </div>
            <div>
                <h1 class="text-3xl font-title">Green Coastal Journey</h1>
                <img src="img/GCJ.png" alt="Green Coastal foto" class="w-[30rem] h-auto">
            </div>
            <div class="">
                <h1 class="text-3xl font-title">SDG House</h1>
                <img src="img/SDG.png" alt="SDG foto" class="w-[30rem] h-auto">
            </div>
            <div>
                <h1 class="text-3xl font-title">PortfolioWebsite</h1>
                <img src="img/portfolio.png" alt="portfolio foto" class="w-[30rem] h-auto">
            </div>
        </div>
    </div>
</div>
<div class="h-[250vh] bg-[#E4E2E2]">
    <img src="img/divider.svg" alt="divider" class="w-full h-auto bg-[#E4E2E2]">
    <div class="flex flex-col justify-center items-center h-[100vh] bg-[url(../img/bg3.svg)] bg-cover bg-center min-w-7xl mt-20" id="contact">
        <h1 class="-rotate-[14deg] text-3xl text-[#C3C3C3] mt-28 font-title">Contact</h1>
    </div>
    <div class="flex flex-col items-center justify-center">
        <div class="flex flex-col items-center justify-center w-4/5 sm:w-1/2">
            <h1 class="text-3xl text-[#170202] mt-20 text-wrap text-center font-body">
                Heb je een vraag voor mij?
                Vul hier onder je informatie in en ik beantwoord hem zo snel mogelijk!
            </h1>
        </div>
    </div>
    <div class="bg-[#E4E2E2] h-[100vh]">
        <div class="flex flex-col items-center justify-center">
            <form action="" method="POST" class="flex flex-col w-4/5 sm:w-1/2">
                <label for="name" class="mb-2 font-body">Naam:</label>
                <input type="text" id="name" name="name" class="mb-4 p-2 border border-gray-300 rounded">

                <label for="email" class="mb-2 font-body">Email:</label>
                <input type="email" id="email" name="email" class="mb-4 p-2 border border-gray-300 rounded">

                <label for="phone" class="mb-2 font-body">Telefoonnummer:</label>
                <input type="phone" id="phone" name="phone" class="mb-4 p-2 border border-gray-300 rounded">

                <label for="message" class="mb-2 font-body">Bericht:</label>
                <textarea id="message" name="message" rows="4" class="mb-4 p-2 border border-gray-300 rounded"></textarea>
                <button type="submit" class="text-white">
                    <div class=" h-[5rem] w-[18rem] bg-[url(../img/button.svg)] bg-cover bg-center">
                        <div class="flex flex-row justify-start items-center h-full ml-[2.5rem] font-body">Verzenden</div>
                    </div>
                </button>
            </form>
        </div>
    </div>
</div>
<footer>
    <div class="h-[250px] bg-[#857D7D] flex flex-row items-center justify-evenly text-[#170202]">
        <div>
            <img src="img/logoGerjan.png" alt="logo" class="w-[27rem] h-auto">
        </div>
        <div class="flex flex-col items-start justify-evenly">
            <p class="font-body">Gerjan Nienhuis</p>
            <p class="font-body">06 23697742</p>
            <p class="font-body">grnienhuis@st.noorderpoort.nl</p>
        </div>
    </div>
</footer>