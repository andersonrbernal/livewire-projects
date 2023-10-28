<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;

    /**
     * @var TemporaryUploadedFile[]
     */
    public $image = [];

    /**
     * @var string
     */
    public string $imagesFolder = 'public';

    /**
     * @var string[]
     */
    public $acceptedImageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'webp'];

    public function render()
    {
        return view('livewire.image-upload', [
            'images' => collect(Storage::files($this->imagesFolder))
                ->filter(function (string $file) {
                    $fileArray = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                    return in_array($fileArray, $this->acceptedImageExtensions);
                })
                ->map(function (string $file) {
                    return Storage::url($file);
                })
        ]);
    }

    public function save()
    {
        $this->validate(['image.*' => 'image|max:1024']); // 1Mb Max;

        foreach ($this->image as $image) {
            $image->store($this->imagesFolder);
        }
    }
}
