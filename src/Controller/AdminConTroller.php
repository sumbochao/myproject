<?php


namespace MyProject\Controller;


use MyProject\Core\Request;
use MyProject\Core\Session;
use MyProject\Core\URL;
use MyProject\Model\AdminModel;
use MyProject\Model\UserModel;

require_once './function/UploadImages.php';

class AdminConTroller
{
    //login
    public function loginUser()
    {
        $data = $_POST;
        $data['password'] = md5($_POST['password']);
        if (AdminModel::loginUser($data)->num_rows > 0) {
            Session::set('login_true', 'true');
            header('location:' . URL::uri('listProduct'));
        } else {
            Session::set('error_login', 'Email OR PASSWORD KHONG DUNG');
            header('location:' . URL::uri('admin'));
        }
    }

    public function viewAdmin()
    {
        if(isset($_SESSION['login_true'])){
            header('location:' . URL::uri('listProduct'));
        }
        require_once 'views/Admin/Login/viewLogin.php';
    }

    public function viewProfile()
    {
        require_once 'views/Admin/AdminProfile/profileView.php';
    }

    //Product
    public function listProductView()
    {
        require_once 'views/Admin/Product/listProductView.php';
    }

    public function updateView()
    {
        require_once 'views/Admin/Product/updateProductView.php';
    }

    public function addView()
    {
        require_once 'views/Admin/Product/addProductView.php';
    }

    public function updateProduct()
    {
        $uploadedFiles = $_FILES['Images'];
        $errors = uploadFilesUpdate($uploadedFiles);

        if (!empty($errors)) {
            print_r($errors);
            exit;
        } else {

            $allFiles = updateFiles();
            $data = $_POST;
            $data['Images'] = URL::uri() . $allFiles[0];
            $data['NSX'] = (int)$_POST['NSX'];
            $data['Loai'] = (int)$_POST['Loai'];
            if (AdminModel::updateProduct($data)) {
                header('location:' . URL::uri('listProduct'));
            }
        }
    }

    public function addProduct()
    {
        $uploadedFiles = $_FILES['Images'];
        $errors = uploadFiles($uploadedFiles);
        if (!empty($errors)) {
            print_r($errors);
            exit;
        } else {
            $allFiles = getAllFiles();
            $data = $_POST;
            $data['images'] = URL::uri() . $allFiles[0];
            $data['NSX'] = (int)$_POST['NSX'];
            $data['Loai'] = (int)$_POST['Loai'];
            if (AdminModel::isProductExists($data['TenSP'])->num_rows > 0) {
                Session::set('error_AddProduct', 'San Pham Da Ton Tai');
                header('location:' . URL::uri('addProduct'));
            } else {
                if (AdminModel::addProduct($data)) {
                    Session::set('success_addProduct', 'Sản Phẩm Tạo Thành Công');
                    header('location:' . URL::uri('listProduct'));
                }
            }
        }
    }

    public function deleteProduct()
    {
        $id = Request::uri()[1];
        if (AdminModel::deleteProduct($id)) {
            header('location:' . URL::uri('listProduct'));
        }
    }

    //Producer
    public function listViewProducer()
    {
        require_once 'views/Admin/Producer/listViewProducer.php';
    }

    public function addViewProducer()
    {
        require_once 'views/Admin/Producer/addViewProducer.php';
    }

    public function updateViewProducer()
    {
        require_once 'views/Admin/Producer/updateProducer.php';
    }

    public function deleteProducer()
    {
        $id = Request::uri()[1];
        if (AdminModel::deleteProducer($id)) {
            header('location:' . URL::uri('listProducer'));
        }
    }

    public function addProducer()
    {
        $data = $_POST;
        if (AdminModel::isProducerExists($data['TenNSX'])->num_rows > 0) {
            Session::set('error_Producer', 'Tên Nhà Sản Xuất Đã Tồn Tại');
            header('location:' . URL::uri('addProducer'));
        } else {
            if (AdminModel::addProducer($data)) {
                Session::set('success_addProducer', 'Nhà Sản Xuất Tạo Thành Công');
                header('location:' . URL::uri('listProducer'));
            }
        }
    }

    public function updateProducer()
    {
        $data = $_POST;
        if (AdminModel::updateProducer($data)) {
            Session::set('success_updateProducer', 'Nhà Sản Xuất Đã UPDATE');
            header('location:' . URL::uri('listProducer'));
        }
    }

    //Type
    public function listViewType()
    {
        require_once 'views/Admin/Type/listTypeView.php';
    }

    public function addViewType()
    {
        require_once 'views/Admin/Type/addTypeView.php';
    }

    public function updateViewType()
    {
        require_once 'views/Admin/Type/updateTypeView.php';
    }

    public function deleteType()
    {
        $id=Request::uri()[1];
        if (AdminModel::deleteType($id)) {
            header('location:' . URL::uri('listType'));
        }
    }

    public function addType()
    {
        $data = $_POST;
        if (AdminModel::isTypeExists($data['TenLoai'])->num_rows > 0) {
            Session::set('error_addType', 'Tên Loại Đã Tồn Tại');
            header('location:' . URL::uri('addType'));
        } else {
            if (AdminModel::insertType($data)) {
                Session::set('success_addType', 'Tên Loại Đã Được Tạo');
                header('location:' . URL::uri('listType'));
            }
        }
    }

    public function updateType()
    {
        $data = $_POST;
        if (AdminModel::updateType($data)) {
            Session::set('success_updateType', 'Loại Đã UPDATE');
            header('location:' . URL::uri('listType'));
        }
    }

    //UserModel
    public function listViewUser()
    {
        require_once 'views/Admin/User/listViewUser.php';
    }

    public function addViewUser()
    {
        require_once 'views/Admin/User/addViewUser.php';
    }

    public function updateViewUser()
    {
        require_once 'views/Admin/User/updateViewUser.php';
    }

    public function deletewUser()
    {
        
    }
}