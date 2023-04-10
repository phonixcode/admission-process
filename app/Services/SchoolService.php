<?php

namespace App\Services;

use App\Models\School;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class SchoolService
{
    public function getAllSchools()
    {
        return School::all();
    }

    public function getSchoolById($id)
    {
        return School::findOrFail($id);
    }

    protected function handleFileUpload(UploadedFile $file, ?string $oldFilename = null): ?string
    {
        if ($oldFilename && file_exists(public_path("media/courses/{$oldFilename}"))) {
            unlink(public_path("media/courses/{$oldFilename}"));
        }

        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('media/courses/', $filename);

        return $filename;
    }

    public function createSchool(array $data): bool
    {
        $slug = Str::slug($data['title']);
        $data['slug'] = $slug;

        $image = $data['photo'] ?? null;
        if ($image) {
            $data['photo'] = $this->handleFileUpload($image);
        }

        return School::create($data) !== null;
    }

    public function updateSchool(int $id, array $data): bool
    {
        $school = School::findOrFail($id);

        $slug = Str::slug($data['title']);
        $data['slug'] = $slug;

        $image = $data['photo'] ?? null;
        if ($image) {
            $data['photo'] = $this->handleFileUpload($image, $school->photo);
        }

        return $school->update($data);
    }

    public function deleteSchool(int $id): bool
    {
        $school = School::findOrFail($id);

        if ($school->photo) {
            unlink(public_path("media/courses/{$school->photo}"));
        }

        return $school->delete();
    }
}
