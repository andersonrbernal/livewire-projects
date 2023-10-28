<div class="container max-w-md mx-auto p-6">
    <form wire:submit.prevent='save' class="flex flex-col py-16">
        <div class="flex items-center justify-center w-full">
            <label wire:loading.class='animate-pulse'
                class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">

                @if ($image)
                    @foreach ($image as $im)
                        <img src={{ $im->temporaryUrl() }} loading='lazy' class='max-w-full max-h-full object-cover'>
                    @endforeach
                @else
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <x-codicon-cloud-upload class="w-5 h-5" wire:loading.class='animate-bounce' />
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                                upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPEG, JPG, WEBP or GIF (MAX.
                            800x400px)
                        </p>

                        @error('image')
                            <p class="my-2 text-sm text-center text-red-500 dark:text-red-400">
                                Make sure the image you're uploading has a correct file extension
                            </p>
                        @enderror
                    </div>
                @endif

                <input wire:model='image' type="file" class="hidden" multiple />
            </label>
        </div>

        <button
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-36 px-5 py-2.5 my-2 mx-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 flex justify-center">
            <x-css-spinner-alt wire:loading wire:loading.class='disabled' class="animate-spin mr-2" />
            Save Photo
        </button>
    </form>

    <div>
        <h1 class="text-lg font-semibold capitalize mb-2">Images</h1>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($images as $image)
                <div class="flex justify-center items-center border rounded-lg p-2">
                    <img class="h-auto max-w-full object-contain" src={{ $image }} alt="image">
                </div>
            @endforeach
        </div>
    </div>
</div>
