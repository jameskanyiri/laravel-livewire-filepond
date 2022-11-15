<div>

<div class="flex mx-8 mt-5 rounded-md border border-black">
    <div class="block p-6 rounded-lg shadow-lg bg-white w-full">

        
        @if (Session::has('message'))
        <div class="bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full" role="alert">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
            </svg>
                {{ Session::get('message') }}
          </div>
        @endif
        <form wire:submit.prevent="updateProfile">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <x-forms.filepond wire:model="image" multiple allowImagePreview imagePreviewMaxHeight="200"
                        allowFileTypeValidation acceptedFileTypes="['image/png', 'image/jpg']" allowFileSizeValidation
                        maxFileSize="4mb" />
                </div>
                <div>
                    <x-forms.filepond wire:model="images" multiple allowImagePreview imagePreviewMaxHeight="200"
                        allowFileTypeValidation acceptedFileTypes="['image/png', 'image/jpg']" allowFileSizeValidation
                        maxFileSize="4mb" />
                </div>
            </div>

            <div class="flex mt-5 space-x-2 justify-center">
                <button type="submit" data-mdb-ripple="true" data-mdb-ripple-color="light"
                    class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Upload
                    File</button>
            </div>
        </form>
    </div>
</div>

</div>