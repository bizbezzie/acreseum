<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithFileUploads;

class Welcome extends Component
{
    use WithFileUploads;

    public int $quantity = 1;

    public float $total_amount;
    public float $total_mrp;
    public int $required_image_width;
    public int $required_image_height;
    public int $canvas_height;
    public int $canvas_width;
    public $image_local_path;
    public int $current_image_height;
    public int $current_image_width;
    public bool $is_print_quality_sufficient = false;

    public array $data = [
        "Portrait" => [
            "9x12" => [
                "3mm" => 799.0,
                "5mm" => 899.0,
            ],
            "10x14" => [
                "3mm" => 999.0,
                "5mm" => 1099.0,
            ],
            "12x16" => [
                "3mm" => 1599.0,
                "5mm" => 1799.0,
            ],
            "12x18" => [
                "3mm" => 1799.0,
                "5mm" => 1999.0,
            ],
            "15x21" => [
                "3mm" => 1999.0,
                "5mm" => 2799.0,
            ],
            "23x35" => [
                "3mm" => 5499.0,
                "5mm" => 5499.0,
                "8mm" => 7999.0,
            ],
            "36x48" => [
                "8mm" => 19999.0,
            ],
        ],
        "Landscape" => [
            "12x9" => [
                "3mm" => 799.0,
                "5mm" => 899.0,
            ],
            "14x10" => [
                "3mm" => 999.0,
                "5mm" => 1099.0,
            ],
            "16x12" => [
                "3mm" => 1599.0,
                "5mm" => 1799.0,
            ],
            "18x12" => [
                "3mm" => 1799.0,
                "5mm" => 1999.0,
            ],
            "21x15" => [
                "3mm" => 1999.0,
                "5mm" => 2799.0,
            ],
            "35x23" => [
                "3mm" => 5499.0,
                "5mm" => 5499.0,
                "8mm" => 7999.0,
            ],
            "48x36" => [
                "8mm" => 19999.0,
            ],
        ],
        "Round" => [
            "11x11" => [
                "3mm" => 1099.0,
                "5mm" => 1199.0,
            ],
            "16x16" => [
                "3mm" => 1699.0,
                "5mm" => 1799.0,
            ],
        ],
        "Square" => [
            "11x11" => [
                "3mm" => 1099.0,
                "5mm" => 1199.0,
            ],
            "16x16" => [
                "3mm" => 1699.0,
                "5mm" => 1799.0,
            ],
        ],
        "Hexagon" => [
            "10x8" => [
                "3mm" => 699.0,
                "5mm" => 799.0,
            ],
            "12x10" => [
                "3mm" => 999.0,
                "5mm" => 1099.0,
            ],
            "14x12" => [
                "3mm" => 1399.0,
                "5mm" => 1499.0,
            ],
        ],
        "Heart" => [
            "9x10" => [
                "3mm" => 699.0,
                "5mm" => 799.0,
            ],
            "11x12" => [
                "3mm" => 999.0,
                "5mm" => 1099.0,
            ],
            "13x14" => [
                "3mm" => 1399.0,
                "5mm" => 1499.0,
            ],
        ],
    ];
    /**
     * @var int[]|string[]
     */
    public array $categories;
    public string $selected_category;
    /**
     * @var int[]|string[]
     */
    public array $available_sizes;
    public string $selected_size;
    /**
     * @var int[]|string[]
     */
    public array $available_thicknesses;
    public string $selected_thickness;

    public function mount(): void
    {
        $this->categories = array_keys($this->data);
        $this->selected_category = $this->categories[0];
        $this->updatedSelectedCategory($this->selected_category);
    }

    public function updateSelectedCategory(string $stock_category): void
    {
        $this->selected_category = $stock_category;
        $this->updatedSelectedCategory($this->selected_category);
    }

    public function updatedSelectedCategory(string $stock_category): void
    {
        $this->available_sizes = array_keys($this->data[$stock_category]);
        $this->selected_size = $this->available_sizes[0];
        $this->updatedSelectedSize($this->selected_size);
    }

    public function updateSelectedSize(string $size): void
    {
        $this->selected_size = $size;
        $this->updatedSelectedSize($this->selected_size);
    }

    public function updatedSelectedSize(string $size): void
    {
        $this->available_thicknesses = array_keys($this->data[$this->selected_category][$size]);
        $this->selected_thickness = $this->available_thicknesses[0];
        $this->calculateRequiredData();
    }

    public function updateSelectedThickness(string $stock_variant): void
    {
        $this->selected_thickness = $stock_variant;
        $this->calculateRequiredData();
    }

    public function updatedQuantity(): void
    {
        $this->calculateRequiredData();
    }

    public function calculateRequiredData(): void
    {
        $this->total_amount = $this->quantity * $this->data[$this->selected_category][$this->selected_size][$this->selected_thickness];

        $ppi = 600;
        $dimensions = explode('x', $this->selected_size);

        $this->canvas_height = (int) $dimensions[0];
        $this->canvas_width = (int) $dimensions[1];
        $this->required_image_height = $this->canvas_height * $ppi;
        $this->required_image_width = $this->canvas_width * $ppi;

        $this->checkImageQuality();
    }

    public function checkImageQuality(): void
    {
        // TODO: replace with original values
        $this->current_image_height = 10000;
        $this->current_image_width = 10000;

        $this->is_print_quality_sufficient = $this->current_image_height >= $this->required_image_height
            && $this->current_image_width >= $this->required_image_width;

        $this->dispatch('image-aspect-ratio-changed', json_encode(['width' => $this->canvas_width, 'height' => $this->canvas_height]));
    }

    public function addToCart(): void
    {
        OrderItem::create([
            'user_id' => auth()->id(),
            'stock_variant_id' => $this->selected_thickness->id,
            'quantity' => $this->quantity,
            'in_cart' => true,
            'delivery_address_id' => auth()->user()->defaultAddress->id
        ]);

        // TODO: Attach original and cropped image to Cart Item

        redirect(url('ecommerce.cart.index'));
    }

    public function updatedImageLocalPath()
    {
        dd($this->image_local_path);
    }

    public function render()
    {
        return view('livewire.welcome');
    }
}
