<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ImageUploadJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $imageData;

    public function __construct($imageData)
    {
        $this->imageData = $imageData;
    }

    /**
     * Execute the job.
     */


    public function handle()
    {
        // Process the large image data here, for example, save it to storage
        // $path = 'images/' . uniqid() . '.' . $this->imageData->extension();
        // Storage::put($path, file_get_contents($this->imageData->path()));

        $imageName = time() . '_' . $this->imageData->getClientOriginalExtension();
        $this->imageData->storeAs('images', $imageName, 'public');

        // Log or notify when the job is completed
        Log::info('ProcessImage job completed.');
    }
}
