@extends('layout')

@section('content')
@vite('resources/css/app.css')
<div class="relative h-screen overflow-hidden">
    <!-- Background Image -->
    <img src="{{ asset('Luna.jpg') }}" alt="Stranger Things" class="absolute inset-0 w-full h-full object-cover z-0" style="object-position: center 20%;">

    <!-- Overlay Gradient -->
    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent z-10"></div>

    <!-- Content Overlay -->
    <div class="absolute inset-0 z-20 flex flex-col justify-center ml-10 md:ml-20 space-y-4 max-w-lg">
        <h1 class="text-5xl md:text-6xl font-bold">How to Say Happy Birthday Before the Gift Arrives</h1>
        <p class="text-sm md:text-lg">
            This is how Taufan, someone you probably never expected, expressed his admiration 
            from a distance, he watched your light grow brighter in the hope that one day you would notice. But for now, this is how Taufan says happy birthday to Luna Safira Gusri.
        </p>

        <div class="flex space-x-2">
            <div id="playButton" class="flex items-center justify-center w-[150px] h-[45px] bg-white text-black rounded-[4px] font-bold text-center p-2 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                    <path fill="black" fill-opacity="0" stroke="black" stroke-dasharray="40" stroke-dashoffset="40" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 6l10 6l-10 6Z">
                        <animate fill="freeze" attributeName="fill-opacity" begin="0.5s" dur="0.5s" values="0;1"/>
                        <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.5s" values="40;0"/>
                    </path>
                </svg>
                Play
            </div>
        
            <a href="/gallery" class="flex items-center justify-center w-[150px] h-[45px] bg-gray-600 opacity-70 text-white rounded-[4px] font-bold text-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24" class="mr-1">
                    <path fill="white" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/>
                </svg>
                More Info
            </a>
        </div>
    </div>
</div>

<!-- Gallery Section -->


<!-- Modal -->
<div id="birthdayModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="bg-black p-6 rounded-lg shadow-lg w-11/12 md:w-1/3 max-h-[80vh] overflow-y-auto flex flex-col">
        <img src="{{ asset('Luna.jpg') }}" alt="Stranger Things" class="w-full h-auto rounded-t-lg"> <!-- Ensures full width and auto height -->
        <h2 class="text-xl font-bold mb-4 mt-4">Happy Birthday, Luna Safira Gusri!</h2>
        <p>Hi!! Luna Safira Gusri</p> <br>
        <p class="mb-4">
            Selamat ulang tahun kanjeng ratu luna safira gusri, ciee yang legal semoga tahun depan dan seterusnya aku masih bisa ngucapin sama ngerayain ulang tahun kamu yaa, sama semoga codingan kamu ga error :v wkwk dan maaf banget kado nya terlambat, jadi aku cuma bisa ngasih kamu ini hehe yaa intinya happy birthday buat kamu, salah satu orang spesial di hidup aku yang udah ngerubah kehidupanku 360 derajat. Wish you all the best.
        </p>
        <button id="closeModal" class="mt-4 px-4 py-2 bg-gray-800 text-white rounded">Close</button>
    </div>
</div>

<script>
    document.getElementById('playButton').onclick = function() {
        document.getElementById('birthdayModal').classList.remove('hidden');
    };

    document.getElementById('closeModal').onclick = function() {
        document.getElementById('birthdayModal').classList.add('hidden');
    };
</script>

@endsection
