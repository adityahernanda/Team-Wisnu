<?php
function uploadFile($file, $path)
{
    $randomName = $file->getRandomName();
    $file->move('uploads/' . $path, $randomName);
    return $randomName;
}
function deleteFile($path, $imgName)
{
    unlink('uploads/' . $path . '/' . $imgName);
}
function editFile($file, $path, $oldImgName)
{
    deleteFile($path, $oldImgName);
    return uploadFile($file, $path);
}
