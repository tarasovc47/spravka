<?php


namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class ImageUpload extends Model
{
    public $image;

    public function rules()
    {
        return [
            [['image'], 'required'],
            [['image'], 'file', 'extensions' => 'jpg, png']
        ];
    }

    public function uploadFile(UploadedFile $file, $currentImage)
    {
        $this->image = $file;
        if ($this->validate()) {
            $this->deleteCurrentImage($currentImage);
            return $this->saveImage();
        }
    }
    public function deleteCurrentImage($currentImage)
    {
        if ($this->fileExist($currentImage))
        {
            unlink($this->getFolder().$currentImage);
        }
    }
    public function fileExist($currentImage)
    {
        if (!empty($currentImage)&& $currentImage != null)
        {
            return file_exists($this->getFolder() . $currentImage);
        }
    }

    private function getFolder()
    {
        return Yii::getAlias('@web') . 'uploads/';
    }

    private function setFileName()
    {
        return md5(uniqid($this->image->baseName)) . '.' . $this->image->extension;
    }
    public function saveImage()
    {
        $filename = $this->setFileName();
        $this->image->saveAs($this->getFolder() . $filename);
        return $filename;
    }
    public function deleteImage()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image);
    }
    public function getImage()
    {
        if ($this->image)
        {
            return '/uploads/'.$this->image;
        }
        return '/no-image.png';
        /*return ($this->image)?'/uploads/'.$this->image:'/no-image.png';*/
    }
}