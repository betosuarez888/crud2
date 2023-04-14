<div>

    <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
        <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <h1>Ficha de la Persona</h1>

                <!--aqui el codigo copiado de mamba
                -->
                <div class="max-w-md p-8 sm:flex sm:space-x-6 bg-gray-50 text-gray-800">
                    <div class="flex-shrink-0 w-full mb-6 h-44 sm:h-32 sm:w-32 sm:mb-0">
                        <img src="https://source.unsplash.com/100x100/?portrait?1" alt=""
                            class="object-cover object-center w-full h-full rounded bg-gray-500">
                    </div>
                    <div class="flex flex-col space-y-4">
                        <div>
                            <h2 class="text-2xl font-semibold">Nombre</h2>
                        </div>
                        <div class="space-y-1">
                            <span class="flex items-center space-x-2">
                                <span class="text-gray-600">Edad</span>
                            </span>
                            <span class="flex items-center space-x-2">
                                <span class="text-gray-600">Fecha de alta</span>
                            </span>
                            <span class="flex items-center space-x-2">
                                <span class="text-gray-600">Ultima modificacion</span>
                            </span>
                        </div>
                    </div>
                </div>








                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click="cerrar" type="button"
                            class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cerrar</button>
                    </span>
                </div>



            </div>
        </div>
    </div>
</div>
