<x-layout>
    <!-- Hero Section -->
    <header class="bg-putih z-0 flex items-center w-full justify-between overflow-hidden relative">
        <div class="pt-[14.25rem] pl-[9.313rem] w-[600px] mb-[11.625rem]">
            <h1 class="font-semibold font-poppins text-[#0F172A] text-[2.5rem] mb-8">Nikmati Produk Pilihan Terbaik dari
                Kami</h1>
            <a href="#" class="flex bg-hijau rounded-full w-56 h-12 px-6 py-3">
                <span class="text-putih font-poppins font-semibold text-base">Langganan Sekarang</span>
            </a>
        </div>
        <div class="absolute right-32 -top-60 transform translate-x-1/2 z-0">
            <img src="images/produk_hero.png" alt="" class="w-[80%] relative">
        </div>
    </header>

    <!--Section Produk-->
    <section class="pt-[100px] pb-[102px] relative overflow-hidden">
        <div class="px-16 flex flex-col items-center z-20">
            <h1 class="text-center font-poppins font-semibold text-5xl text-[#2E2F33]">Produk Kami</h1>
            <div class="mt-12 flex flex-wrap justify-start w-full">
                <div class="w-[400px]">
                    <img src="images/produk1.png" class="w-full h-[345px] ">
                    <div class="flex flex-col gap-5 px-6 py-3">
                        <h2 class="font-roboto font-semibold text-[32px] text-[#2D2D2D]">Ready to Cook</h2>
                        <p class="font-roboto font-normal text-[#929292] text-xl">Dapur Panen hadir dengan solusi praktis
                            memasak dengan produk siap masak dari bahan-bahan dan
                            bumbu segar berkualitas. Buat hidangan spesial di rumah dengan mudah.</p>
                    </div>
                </div>
                <div class="w-[400px]">
                    <img src="images/produk2.png" class="w-full h-[345px] ">
                    <div class="flex flex-col gap-5 px-6 py-3">
                        <h2 class="font-roboto font-semibold text-[32px] text-[#2D2D2D]">Ready to Cook</h2>
                        <p class="font-roboto font-normal text-[#929292] text-xl">Nikmati hidangan spesial praktis dari
                            Dapur Panen dengan produk siap saji berkualitas tinggi, aman dikonsumsi, dan terjaga
                            kebersihannya.</p>
                    </div>
                </div>
                <div class="w-[400px]">
                    <img src="images/produk3.png" class="w-full h-[345px] ">
                    <div class="flex flex-col gap-5 px-6 py-3">
                        <h2 class="font-roboto font-semibold text-[32px] text-[#2D2D2D]">Ready to Cook</h2>
                        <p class="font-roboto font-normal text-[#929292] text-xl">Berbagai hidangan lezat dan berkualitas
                            tinggi tersedia dalam produk catering kami, yang siap memenuhi kebutuhan acara Anda dengan
                            beragam pilihan menu.</p>
                    </div>
                </div>
                <div class="w-[400px]">
                    <img src="images/burger2.png" class="w-full h-[345px] ">
                    <div class="flex flex-col gap-5 px-6 py-3">
                        <h2 class="font-roboto font-semibold text-[32px] text-[#2D2D2D]">Burger Panen</h2>
                        <p class="font-roboto font-normal text-[#929292] text-xl">Hidangan yang gurih dan praktis ini cocok
                            untuk dinikmati kapan saja dan di mana saja. Rasakan kenikmatan sensasi gigitan pertama dari
                            hidangan burger yang lezat dan bergizi!</p>
                    </div>
                </div>
                <div class="w-[400px]">
                    <img src="images/kopi.png" class="w-full h-[345px] ">
                    <div class="flex flex-col gap-5 px-6 py-3">
                        <h2 class="font-roboto font-semibold text-[32px] text-[#2D2D2D]">Kopi Panen</h2>
                        <p class="font-roboto font-normal text-[#929292] text-xl">Nikmati sensasi kopi yang kaya aroma dan
                            cita rasa dengan produk kopi kami yang terbuat dari biji kopi pilihan. Segera cicipi dan rasakan
                            pengalaman kopi yang memikat lidah!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Section langganan-->
    <section class="pt-[114px] pl-[165px] pr-[100px] pb-[134px]">
        <div class="flex gap-[97px]">
            <div class="">
                <img src="images/langganan.png" class="w-[475px]" alt="">
            </div>
            <div class="w-[605px] flex flex-col gap-[30px]">
                <h1 class="font-poppins font-semibold text-[#0F172A] text-5xl">Pesan catering, solusi makan bebas
                    pusing</h1>
                <p class="font-poppins font-normal text-[#2D2D2D] text-lg w-[612px]">Kami mengerti bahwa di kantor atau
                    sekolah, makanan bukanlah hanya kebutuhan, tetapi juga faktor penting dalam produktivitas dan kesehatan.
                    Oleh karena itu, kami menawarkan layanan catering yang dapat memenuhi kebutuhan nutrisi dan selera Anda,
                    serta mempermudah Anda dalam menyediakan makanan berkualitas untuk karyawan atau siswa Anda.</p>
                <a href="#" class="bg-hijau px-5 py-3 w-[197px] rounded-full text-putih text-base font-semibold">
                    Langganan Sekarang
                </a>
            </div>
        </div>

    </section>

    @include('partials._footer')
</x-layout>
