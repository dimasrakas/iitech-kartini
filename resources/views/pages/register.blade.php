@extends('layouts.default')

@section('content')

    <section class="h-full w-full border-box bg-white">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

            .content-2-1 .btn-outline {
                border: 1px solid #979797;
                color: #979797;
                transition: 0.2s;
            }

            .content-2-1 .btn-outline:hover {
                border: 1px solid #ff7c57;
                color: #ff7c57;
                transition: 0.2s;
            }

            .content-2-1 .btn-fill {
                background-color: #ff7c57;
                border: 1px solid #ff7c57;
                transition: 0.2s;
            }

            .content-2-1 .card-header {
                background-color: #fff7f4;
                border: 1px solid #ff7c57;
            }

            .content-2-1 .text-medium-black {
                color: #121212;
            }

            .content-2-1 .text-gray {
                color: #565656;
            }

        </style>
        <div class="content-2-1" style="font-family: 'Poppins', sans-serif">
            <div class="container lg:px-32 md:px-8 sm:px-12 px-5 pt-20 pb-12 mx-auto">
                <!-- Title Text -->
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="text-4xl font-semibold title-font mb-2.5 text-medium-black">Register</h1>
                </div>
                <div class="flex flex-col text-left w-full mb-12">
                    <h1 class="text-3xl font-semibold title-font mb-2.5 text-medium-black">Profile</h1>
                    <label class="block">
                        <span class="text-gray-700">User Name</span>
                        <input type="text" class="form-input mt-1 block w-full" placeholder="KimSoHyun">
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Password</span>
                        <input type="text" class="form-input mt-1 block w-full" placeholder="">
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Repeat Password</span>
                        <input type="text" class="form-input mt-1 block w-full" placeholder="">
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Validation</span>
                        <input type="text" class="form-input mt-1 block w-full" placeholder="">
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Firt Name</span>
                        <input type="text" class="form-input mt-1 block w-full" placeholder="Lee">
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Middle Name</span>
                        <input type="text" class="form-input mt-1 block w-full" placeholder="Jong">
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Last Name</span>
                        <input type="text" class="form-input mt-1 block w-full" placeholder="Suk">
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Affiliation</span>
                        <input type="text" class="form-input mt-1 block w-full"
                            placeholder="Your institution, e.g. Simon Fraser University">
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Email</span>
                        <input type="text" class="form-input mt-1 block w-full" placeholder="yooksungjae@gmail.com">
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Phone</span>
                        <input type="text" class="form-input mt-1 block w-full" placeholder="08123456789">
                    </label>
                    <div class="flex flex-col text-justify w-full mb-12 space-y-4">
                        <div class="inline-block mt-8"> <button class="__btn__green">
                                Register
                            </button>
                            <div class="inline-block mt-8"> <button class="__btn__green">
                                    Login
                                </button>

                            </div>
                        </div>
                    </div>
                </div>

    </section>

@stop
