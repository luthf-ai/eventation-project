@extends('layouts.template')
@section('title', 'Katalog Undangan')
@section('content')

    <x-header></x-header>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Undangan basic</h2>

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @for($i = 0; $i < 100; $i++)
                <div class="group relative">
                    <div
                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                        <img src="https://cdn0.hitched.co.uk/article/1084/3_2/960/jpg/64801-wedding-evites-etsy.jpeg"
                            alt="Front of men&#039;s Basic Tee in black."
                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="undangan/1">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Black</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$35</p>
                    </div>
                </div>
                @endfor
                <!-- More products... -->
            </div>
        </div>
    </div>
