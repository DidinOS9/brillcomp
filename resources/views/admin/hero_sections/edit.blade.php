<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Hero Section') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg"> 
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="py-3 w-full rounded-3xl bg-red-500 text-white">
                            {{$error}}
                        </div>
                    @endforeach
                @endif

                <form method="POST" action="{{route('admin.hero_sections.update', $heroSection)}}" enctype="multipart/form-data"> 
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="heading" :value="__('heading')" />
                        <x-text-input id="heading" class="block mt-1 w-full" type="text" name="heading" 
                          value="{{$heroSection->heading}}" required autofocus autocomplete="heading" />
                        <x-input-error :messages="$errors->get('heading')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="banner" :value="__('banner')" />
                        <img src="{{Storage::url($heroSection->banner)}}" alt="" class="rounded-2xl object-cover w-[90px] h-[90px]">
                        <x-text-input id="banner" class="block mt-1 w-full" type="file" name="banner" autofocus autocomplete="banner" />
                        <x-input-error :messages="$errors->get('banner')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="subheading" :value="__('subheading')" />
                        <x-text-input id="subheading" class="block mt-1 w-full" type="text" name="subheading" value="{{$heroSection->subheading}}" required autofocus autocomplete="subheading" />
                        <x-input-error :messages="$errors->get('subheading')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="achievment" :value="__('achievment')" />
                        <x-text-input id="achievment" class="block mt-1 w-full" type="text" name="achievment" value="{{$heroSection->achievment}}" required autofocus autocomplete="achievment" />
                        <x-input-error :messages="$errors->get('achievment')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="path_video" :value="__('path_video')" />
                        <x-text-input id="path_video" class="block mt-1 w-full" type="text" name="path_video" value="{{$heroSection->path_video}}" required autofocus autocomplete="path_video" />
                        <x-input-error :messages="$errors->get('path_video')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
            
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Update Hero Section
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
