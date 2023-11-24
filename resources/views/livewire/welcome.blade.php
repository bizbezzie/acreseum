<div class="container mx-auto flex flex-col gap-5 items-center justify-center">
    <h1 class="text-2xl font-bold">Customized Premium Acrylic Photo</h1>
    <div class="w-full grid grid-cols-[2fr_3fr] gap-[10px]">
        <!-- END: Photo Canvas -->
        <div class=" flex flex-col justify-center gap-5 text-center">
            <!-- START: Available Shapes -->
            <div class="w-full">
                <span class="font-semibold">Available Shapes</span>
                <div class="grid grid-cols-3 gap-[10px]">
                    <button
                        class="{{ $selected_category == 'Portrait' ? 'primary-button' : 'secondary-button' }} max-h-[55px] rounded-[18px]"
                        wire:click="updateSelectedCategory('Portrait')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-rectangle-vertical"
                             width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                             fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M5 3m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                        </svg>
                    </button>
                    <button
                        class="{{ $selected_category == 'Landscape' ? 'primary-button' : 'secondary-button' }} max-h-[55px] rounded-[18px]"
                        wire:click="updateSelectedCategory('Landscape')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-rectangle"
                             width="24"
                             height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M3 5m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                        </svg>
                    </button>
                    <button
                        class="{{ $selected_category == 'Round' ? 'primary-button' : 'secondary-button' }} max-h-[55px] rounded-[18px]"
                        wire:click="updateSelectedCategory('Round')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-letter-i"
                             width="24"
                             height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                        </svg>
                    </button>
                    <button
                        class="{{ $selected_category == 'Square' ? 'primary-button' : 'secondary-button' }} max-h-[55px] rounded-[18px]"
                        wire:click="updateSelectedCategory('Square')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-check"
                             width="24"
                             height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                        </svg>
                    </button>
                    <button
                        class="{{ $selected_category == 'Hexagon' ? 'primary-button' : 'secondary-button' }} max-h-[55px] rounded-[18px]"
                        wire:click="updateSelectedCategory('Hexagon')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hexagon-letter-e"
                             width="24"
                             height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M19.875 6.27a2.225 2.225 0 0 1 1.125 1.948v7.284c0 .809 -.443 1.555 -1.158 1.948l-6.75 4.27a2.269 2.269 0 0 1 -2.184 0l-6.75 -4.27a2.225 2.225 0 0 1 -1.158 -1.948v-7.285c0 -.809 .443 -1.554 1.158 -1.947l6.75 -3.98a2.33 2.33 0 0 1 2.25 0l6.75 3.98h-.033z"></path>
                        </svg>
                    </button>
                    <button
                        class="{{ $selected_category == 'Heart' ? 'primary-button' : 'secondary-button' }} max-h-[55px] rounded-[18px]"
                        wire:click="updateSelectedCategory('Heart')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-heart" width="24"
                             height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- END: Available Shapes -->

            <!-- START: Size Selection -->
            <div class="w-full">
                <span class="font-semibold">Available Sizes</span>
                <div class="grid grid-cols-3 gap-[10px] justify-center w-full">
                    @foreach($available_sizes as $size)
                        <button
                            class="{{ $selected_size == $size ? 'primary-button' : 'secondary-button' }} max-h-[55px] rounded-[18px]"
                            wire:click="updateSelectedSize('{{ $size }}')">
                            {{ $size }}
                        </button>
                    @endforeach
                </div>
            </div>
            <!-- END: PSize Selection -->

            <!-- START:Thickness Selection -->
            <div class="w-full">
                <span class="font-semibold">Thickness</span>
                <div class="grid grid-cols-3 gap-[10px] justify-center w-full">
                    @foreach($available_thicknesses as $thickness)
                            <button
                                class="{{ $selected_thickness == $thickness ? 'primary-button' : 'secondary-button' }} max-h-[55px] rounded-[18px]"
                                wire:click="updateSelectedThickness('{{ $thickness }}')">
                                {{ $thickness }}
                            </button>
                    @endforeach
                </div>
            </div>
            <!-- END: Thickness Selection -->

            <!-- START:Quantity Selection -->
            <div class="w-full max-w-sm">
                <span class="font-semibold">Quantity</span>
                {{--                <x-wireui::inputs.number class="mt-1" wire:model.live="quantity" min="1"/>--}}
            </div>
            <!-- END:Quantity Selection -->

            <!-- START:Buy Now Button -->
            <div class="w-full max-w-sm">
                @if($is_print_quality_sufficient)
                    {{--                    <x-wireui::button class="w-full" wire:click="addToCart" :primary="true">--}}
                    {{--                        ₹ {{ number_format($total_amount) }} /- Buy Now--}}
                    {{--                    </x-wireui::button>--}}
                @else
                    {{--                    <x-wireui::button class="w-full" :primary="true" disabled>--}}
                    {{--                        ₹ {{ number_format($total_amount) }} /- Buy Now--}}
                    {{--                    </x-wireui::button>--}}
                @endif
            </div>
            <!-- END: Buy Now Button -->
        </div>

        <div id="imageDiv">
            @if($selected_category == 'round')
                <style>
                    .cropper-crop-box, .cropper-view-box {
                        border-radius: 50%;
                    }
                </style>
            @endif
            @if($selected_category == 'hexagon')
                <style>
                    .cropper-crop-box, .cropper-view-box {
                        clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
                    }
                </style>
            @endif
            <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.js"
                    integrity="sha512-9KkIqdfN7ipEW6B6k+Aq20PV31bjODg4AA52W+tYtAE0jE0kMx49bjJ3FgvS56wzmyfMUHbQ4Km2b7l9+Y/+Eg=="
                    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.1/cropper.min.css"
                  integrity="sha512-hvNR0F/e2J7zPPfLC9auFe3/SE0yG4aJCOd/qxew74NN7eyiSKjr7xJJMu1Jy2wf7FXITpWS1E/RY8yzuXN7VA=="
                  crossorigin="anonymous" referrerpolicy="no-referrer"/>
            <script>
                // If there's an existing Cropper, destroy it
                let cropper = null;
                Livewire.on('image-aspect-ratio-changed', (data) => {
                    var image = document.querySelector('#image');
                    data = JSON.parse(data);
                    let width = data.width;
                    let height = data.height;
                    let aspectRatio = width / height;
                    if (cropper !== null) {
                        cropper.destroy();
                    }
                    // Create a new Cropper instance
                    cropper = new Cropper(image, {
                        dragMode: 'move',
                        preview: '.img-preview',
                        aspectRatio: aspectRatio,
                        autoCropArea: 0.65,
                        restore: false,
                        guides: false,
                        center: false,
                        highlight: true,
                        cropBoxMovable: false,
                        cropBoxResizable: true,
                        toggleDragModeOnDblclick: false,
                        minCropBoxHeight: 100
                    });
                });
            </script>

            <!-- START: Photo Canvas -->
            <div>
                <img id="image" src="https://picsum.photos/id/237/1000/500" alt="Picture">
            </div>

            {{--                <!-- START: Print Preview -->--}}
            {{--                <div class="h-32 relative mt-5">--}}
            {{--                    <div class="h-32 image absolute img-preview overflow-hidden">--}}
            {{--                    </div>--}}
            {{--                    <div class="h-32 absolute object-none object-center">--}}
            {{--                        <img src="{{ global_asset('images/acreseum/categories/hexagon.png') }}" class="h-32" alt="PNG Image">--}}
            {{--                    </div>--}}
            {{--                </div>--}}

            <!-- START: Photo Quality -->
            <div>
                For {{ $canvas_width }}x{{ $canvas_height }} inch printing photo quality
                is {{ $is_print_quality_sufficient ? '' : 'not' }} good
            </div>
            <!-- END: Photo Quality -->
        </div>
    </div>
</div>
