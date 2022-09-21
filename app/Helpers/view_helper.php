<?php
function viewInterface($type, $path, $data = [])
{
    if (isset($_SESSION['role'])) {
        if ($_SESSION['role'] == $type) {
            return view($path, $data);
        } else {
            if ($_SESSION['role'] == 'client') {
                return redirect()->to(base_url('/dashboard/client'));
            } else if ($_SESSION['role'] == 'admin') {
                return redirect()->to(base_url('/dashboard/admin'));
            } else if ($_SESSION['role'] == 'sa') {
                return redirect()->to(base_url('/dashboard/sa'));
            }
        }
    } else {
        return redirect()->to(base_url('/'));
    }
}

function viewClient($path, $data = [])
{
    return viewInterface('client', $path, $data);
}

function viewAdmin($path, $data = [])
{
    return viewInterface('admin', $path, $data);
}

function viewSA($path, $data = [])
{
    return viewInterface('sa', $path, $data);
}
