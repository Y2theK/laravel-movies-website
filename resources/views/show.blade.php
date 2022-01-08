@extends('layouts.main')
@section('content')
{{-- movie info --}}
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <img src="{{ asset('images/milkshake.jpg')}}" alt="" class="w-96">
        <div class="md:ml-24">
            <h2 class="text-4xl font-semiblod">Milkshake (2020)</h2>
            <div class="flex flex-wrap mt-2 items-center text-gray-400 text-sm">
                <span><svg class="w-4 fill-current text-orange-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                        </path>
                    </svg></span>
                <span> 85%</span>
                <span class="mx-2">|</span>
                <span>Feb 8, 2020</span>
                <span class="mx-2">|</span>
                <span>Action , Triller, Drama</span>
            </div>
            <p class="text-gray-300 mt-8">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi distinctio consequatur iure porro
                assumenda reiciendis molestiae cum ipsum deserunt saepe voluptas, odio ea placeat quam nobis tempora
                cupiditate. Facilis recusandae error libero at quidem obcaecati eligendi, adipisci dolorem iusto sequi
                quae ea officia, reprehenderit, modi repellat soluta quod nam nemo.
            </p>
            <div class="mt-12">
                <h4 class="text-white font-semiblod">Featured Cast</h4>
                <div class="flex mt-4">
                    <div>
                        <div> Song Jihyo</div>
                        <div class="text-sm-gray-400">Screenpay, Director,Story</div>
                    </div>
                    <div class="ml-8">
                        <div>Song Jihyo</div>
                        <div class="text-sm-gray-400">Screenpay, Director,Story</div>
                    </div>

                </div>
                <div class="mt-12">
                    <button
                        class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Play Now
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end moive-info --}}
{{-- movie cast --}}
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 ">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semifold">Casts</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:g  gap-8">
            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('images/milkshake.jpg') }}" alt="img"
                        class="rounded  hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="" class="text-lg mt-2 hover:text-gray-300">MilkShake</a>

                    <div class="text-gray-400 text-sm mt-1">
                        Action, Triller , Comedy
                    </div>
                </div>

            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('images/milkshake.jpg') }}" alt="img"
                        class="rounded  hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="" class="text-lg mt-2 hover:text-gray-300">MilkShake</a>

                    <div class="text-gray-400 text-sm mt-1">
                        Action, Triller , Comedy
                    </div>
                </div>

            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('images/milkshake.jpg') }}" alt="img"
                        class="rounded  hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="" class="text-lg mt-2 hover:text-gray-300">MilkShake</a>

                    <div class="text-gray-400 text-sm mt-1">
                        Action, Triller , Comedy
                    </div>
                </div>

            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('images/milkshake.jpg') }}" alt="img"
                        class="rounded  hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="" class="text-lg mt-2 hover:text-gray-300">MilkShake</a>

                    <div class="text-gray-400 text-sm mt-1">
                        Action, Triller , Comedy
                    </div>
                </div>

            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('images/milkshake.jpg') }}" alt="img"
                        class="rounded  hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="" class="text-lg mt-2 hover:text-gray-300">MilkShake</a>

                    <div class="text-gray-400 text-sm mt-1">
                        Action, Triller , Comedy
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
{{-- end movie cast --}}

{{-- movie images --}}
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 ">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semifold">Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:g  gap-8">
            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('images/milkshake.jpg') }}" alt="img"
                        class="rounded  hover:opacity-75 transition ease-in-out duration-150">
                </a>


            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('images/milkshake.jpg') }}" alt="img"
                        class="rounded  hover:opacity-75 transition ease-in-out duration-150">
                </a>


            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('images/milkshake.jpg') }}" alt="img"
                        class="rounded  hover:opacity-75 transition ease-in-out duration-150">
                </a>


            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('images/milkshake.jpg') }}" alt="img"
                        class="rounded  hover:opacity-75 transition ease-in-out duration-150">
                </a>


            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('images/milkshake.jpg') }}" alt="img"
                        class="rounded  hover:opacity-75 transition ease-in-out duration-150">
                </a>


            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="{{ asset('images/milkshake.jpg') }}" alt="img"
                        class="rounded  hover:opacity-75 transition ease-in-out duration-150">
                </a>


            </div>


        </div>
    </div>
</div>
{{-- end movie cast --}}

@endsection