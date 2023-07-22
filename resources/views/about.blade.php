<x-layout>

    <!-- Hero Section -->
    <header class="bg-putih z-0 flex items-center w-full justify-between overflow-hidden relative">
        <div class="pt-[180px] px-[9.313rem] mb-[80px] flex items-end justify-between">
            <div class="w-[663px]">
                <h1 class="font-semibold font-poppins text-[#0F172A] text-[2.5rem] w-full">Kami hanya akan memberikan
                    hidangan
                    <span class="text-hijau"> terbaik dan berkualitas</span> untukmu.</h1>
            </div>
            <div class="w-[435px]">
                <h2 class="font-poppins font-normal text-xl text-[#747474]">Lorem ipsum dolor sit amet consectetur. Sodales
                    fermentum aenean nisi dui purus accumsan sit amet vel. </h2>
            </div>
        </div>
    </header>

    <!--Image Section-->
    <section>
        <div class="w-full">
            <img src="images/about.png" class="" alt="">
        </div>
    </section>

    <!--Teks Section-->
    <section class="pt-[80px] px-[140px] pb-[100px]">
        <div class="flex w-full gap-[100px] items-start">
            <div class="w-1/2">
                <h1 class="font-semibold font-poppins text-[#0F172A] text-[40px]">Pelayanan terbaik dengan harga terjangkau</h1>
            </div>
            <div class="w-1/2 flex flex-col gap-5">
                <p class="font-poppins font-semibold text-xl text-[#747474]">Lorem ipsum dolor sit amet consectetur. Sodales fermentum aenean nisi dui purus accumsan sit amet
                    vel. </p>
                <p class="font-normal font-poppins text-xl text-[#747474]">Lorem ipsum dolor sit amet consectetur. Ultrices nisi ornare non nunc sit. Sem turpis sit tellus sed
                    fringilla suspendisse. Faucibus in in velit mauris amet tempor tempor. Vestibulum at amet vivamus
                    ridiculus nibh aenean purus vitae. Enim urna adipiscing massa dictum faucibus. Nulla porttitor cras
                    fermentum justo. Nisl in purus non adipiscing placerat.
                    Velit risus mattis dolor nam vitae vulputate augue. Scelerisque tortor viverra in libero malesuada augue
                    viverra. Consequat vehicula fringilla et velit habitant tincidunt mollis sem quis. Sit cras auctor
                    rutrum feugiat. Faucibus ante at tempor laoreet. Pharetra risus libero bibendum posuere consequat
                    consequat nibh. Feugiat cras nunc eget cras gravida in nam aliquet imperdiet. Suspendisse egestas
                    pulvinar ut pulvinar est ligula. Sollicitudin dui nibh eu tellus. Condimentum amet integer elit in
                    cras.</p>
            </div>
        </div>
    </section>

    <!--Section Pelanggan-->
    <section class="container h-[360px] ">
        <div class="text-center flex flex-col gap-12 justify-center">
            <h1 class="font-poppins font-semibold text-[#444444] text-[32px]">Pelanggan Kami</h1>
            <div class="flex justify-center gap-14 items-center h-32">
                <img src="images/kian.png" class="w-[198px]">
                <img src="images/don.png" class="w-[316px]">
                <img src="images/jumat.png" class="w-[213px]">
            </div>
        </div>
    </section>

    <!--Section langganan-->
    <section class="pt-[114px] pl-[165px] pr-[100px] pb-[134px] bg-[#EDF5E7]">
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
