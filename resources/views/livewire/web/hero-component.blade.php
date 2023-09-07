<section class="flex flex-col xl:flex-row lg:p-10 xl:px-0 xl:gap-10 items-center">
    
    <div class="flex flex-col gap-10 lg:gap-12 md:w-4/5 items-center  px-5 lg:px-10 py-20 md:py-32">

        <h1 class="text-4xl md:text-5xl lg:text-6xl text-center font-semibold md:font-bold tracking-tight">
            {{$title}}
        </h1>

        <p class="text-slate-500 md:w-4/5 text-center lg:text-2xl">
            {{$description}}
        </p>

        <div class="flex flex-col md:flex-row gap-5 items-center lg:text-lg">

            <a href="{{$btn_url}}" class="bg-black text-white font-medium px-4 py-2 rounded">
                {{$btn_text}}
            </a>

            <a href="{{$link_url}}" class="font-medium">
                {{$link_text}}
            </a>

        </div>

    </div>

    <img src="{{$image_path}}" alt="{{$image_alt}}" class="w-full hidden xl:block xl:h-[50rem] xl:w-2/5 object-cover rounded-lg xl:rounded-tr-none xl:rounded-br-none shadow-xl">

</section>