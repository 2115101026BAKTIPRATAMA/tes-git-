<?php if (isset($component)) { $__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597 = $component; } ?>
<?php $component = App\View\Components\HomeLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\HomeLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!--  <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?> -->
    <div class="py-12 mt-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <main class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="flex items-baseline justify-between pt-2 pb-6 border-b border-gray-200">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900">PESAN SEKARANG</h1>
                    <div class="flex items-center">
                    <div date-rangepicker class="flex items-center">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                    </div>
                    <span class="mx-4 text-gray-500">to</span>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none pl-3">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text- gray- 400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                    </div>
                </div>
                <button type="button" class="inline-block bg-violet-600 rounded-full px-6 h-10 py-2 mx-4 text-xs font-medium leading-tight text-white uppercase transition ease-in-out hover:bg-violet-200 focus:outline-none focus:ring-0 duration- 150">Check</button>
                </div>
            </div>
        <section>
            <div class="pt-8 font-sans md:flex">
                <div class="md:shrink-0">
                    <img src="https://i1.wp.com/helloindonesia.id/wp-content/uploads/2018/12/Tari-Kecak-Ulu-Watu_edited.jpg?fit=1920%2C1080" alt="" class="inset-0 object-cover w-full h-full rounded-lg md:h-full md:w-56 w- full" loading="lazy" />
                </div>
                <form class="p-6">
                    <div class="flex flex-wrap">
                        <h1 class="flex-auto font-medium text-slate-900">
                        KECAK FIRE GIANYAR 
                        </h1>
                        <div class="flex-none order-1 w-full mt-2 text-3xl font- bold text-violet-600">
                        Rp. 120.000
                        </div>
                        <div class="text-sm font-medium text-slate-400">
                        Tersedia
                        </div>
                    </div>
                    <div class="flex items-baseline pb-6 mt-4 mb-6 border-b border- slate-200">
                        First, one of the most-visited tourist attractions in Bali is Ubud, visited by either local or international tourists.
                        Ubud Bali tourist attraction has astonished many visitors who always want to return
                    </div>
                    <div class="flex mb-5 space-x-4 text-sm font-medium">
                    <div class="flex flex-auto space-x-4">
                        <button class="h-10 px-6 font-semibold text-white rounded-full bg-violet-600" type="submit">
                        Pesan Sekarang
                        </button>
                        <button data-bs-toggle="modal" data-bs-target="#exampleModalLg" class="h-10 px-6 font-semibold border rounded-full border-slate- 200 text-slate-900" type="button">
                        Lihat Ketersediaan
                        </button>
                    </div>
                    <button class="flex items-center justify-center flex-none rounded-full w-9 h- 9 text-violet-600 bg-violet-50" type="button" aria-label="Like">
                        <svg width="20" height="20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
                        </svg>
                    </button>
                    </div>
                    <p class="text-sm text-slate-500">
                    Free welcome drink, mask, and lunch.
                    </p>
                </form>
            </div>
            <div class="pt-8 font-sans md:flex">
                <div class="md:shrink-0">
                    <img src="https://factsofindonesia.com/wp-content/uploads/2017/06/Indonesia-2012-996_web-lrg.jpg" alt="" class="inset-0 object-cover w-full h-full rounded-lg md:h-full md:w-56 w- full" loading="lazy" />
                </div>
                <form class="p-6">
                <div class="flex flex-wrap">
                <h1 class="flex-auto font-medium text-slate-900">
                KECAK FIRE & TRANCE DANCE (PURA DALEM TAMAN KAJA)
                </h1>
                <div class="flex-none order-1 w-full mt-2 text-3xl font- bold text-violet-600">
                Rp. 150.000
                </div>
                <div class="text-sm font-medium text-slate-400">
                Tersedia
                </div>
            </div>
            <div class="flex items-baseline pb-6 mt-4 mb-6 border-b border- slate-200">
            First, one of the most-visited tourist attractions in Bali is Ubud, visited by either local or international tourists.
            Ubud Bali tourist attraction has astonished many visitors who always want to return
            </div>
            <div class="flex mb-5 space-x-4 text-sm font-medium">
                <div class="flex flex-auto space-x-4">
                    <button class="h-10 px-6 font-semibold text-white rounded-full bg-violet-600" type="submit">
                    Pesan Sekarang
                    </button>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModalLg" class="h-10 px-6 font-semibold border rounded-full border-slate- 200 text-slate-900" type="button">
                    Lihat Ketersediaan 
                    </button>
                </div>
                <button class="flex items-center justify-center flex-none rounded-full w-9 h- 9 text-violet-600 bg-violet-50" type="button" aria-label="Like">
                <svg width="20" height="20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" /></svg>
                </button>
            </div>
            <p class="text-sm text-slate-500">
            Free welcome drink, mask, and lunch.
            </p>
        </form>
    </div>
    <div class="pt-8 font-sans text-center ">
        <a href="#" class="inline-flex items-center px-4 py-2 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg font- medium hover:bg-gray-100 hover:text- gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray- 700 dark:hover:text-white">
        Previous 
        </a>
        <!-- Next Button -->
        <a href="#" class="inline-flex items-center px-4 py-2 ml-3 text-sm text-gray-500 bg-white border border-gray-300 rounded-lg font- medium hover:bg-gray-100 hover:text- gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray- 700 dark:hover:text-white">
        Next
        </a>
        </div>
    </section>
    </main>
    </div>
</div>
</div>
    
    <div class="fixed top-0 left-0 hidden w-full h-full overflow-y-auto outline-none modal fade overflow-x-" id="exampleModalLg" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
        <div class="relative w-auto pointer-events-none modal-dialog modal-lg">
        <div class="relative flex flex-col text-current bg-white border-none rounded-md shadow-lg outline-none pointer-events-auto modal-content w- full bg-clip-padding">
        <?php echo $__env->make('frontpage.calendar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    </div>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597)): ?>
<?php $component = $__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597; ?>
<?php unset($__componentOriginal501e81491cdd9b61e2d9ba717a17361860b8d597); ?>
<?php endif; ?><?php /**PATH D:\2 0 2 2\KULIAH SEMESTER 3 UNDIKSHA 2022\TEKNOLOGI WEB\Kecak\kecak\resources\views/frontpage/detailpemesanan.blade.php ENDPATH**/ ?>