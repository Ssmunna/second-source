<?php

namespace App\Traits;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Str;

trait FileSaver
{
    /**
     * Upload file locally or to Cloudinary
     *
     * @param object $file Uploaded file
     * @param string $basePath Subfolder for upload
     * @param string|null $stringName Optional name for file slug
     * @param string|null $oldPath Optional old file path to delete
     * @param string $type 'image' or 'video'
     * @param bool $useCloudinary If true, upload to Cloudinary
     * @return string File path or Cloudinary URL
     */
    public function upload_file(
        object $file,
        string $basePath,
        string $type = 'image',
        bool $useCloudinary = false,
        string $stringName = null,
        string $oldPath = null,
    ): string {
        $extension = $file->getClientOriginalExtension();
        $fileName = Str::slug($stringName ?: 'file') . '-' . uniqid() . '.' . $extension;

        // Delete old file if exists (local)
        if (!$useCloudinary && $oldPath) {
            $fullOldPath = public_path($oldPath);
            if (file_exists($fullOldPath)) {
                @unlink($fullOldPath); // suppress warning if file cannot be deleted
            }
        }

        if ($useCloudinary) {
            // Upload to Cloudinary
            $uploadOptions = [
                'folder' => 'uploads/' . $basePath,
            ];

            if ($type === 'video') {
                $uploadOptions['resource_type'] = 'video';
            }

//            if (env('CLOUDINARY_UPLOAD_PRESET')) {
//                $uploadOptions['upload_preset'] = env('CLOUDINARY_UPLOAD_PRESET');
//            }

            $uploadResult = Cloudinary::upload($file->getRealPath(), $uploadOptions);
            dd($uploadResult);

            try {
                $uploadResult = Cloudinary::upload($file->getRealPath(), $uploadOptions);
                return $uploadResult->getSecurePath(); // Return Cloudinary URL
            } catch (\Exception $e) {
                report($e);
                return '';
            }
        } else {
            // Upload locally
            $directory = public_path('uploads/' . $basePath);

            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }

            $file->move($directory, $fileName);

            return 'uploads/' . $basePath . '/' . $fileName; // relative path
        }
    }
}
