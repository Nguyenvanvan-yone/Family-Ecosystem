@extends('Admin-Layout')
@section('Admin_NoiDung')

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                        <center> <h1>Thêm  Sản Phẩm</h1></center> 
                        </header>
                        <?php
                         use Illuminate\Support\Facades\Session;
                            $message = Session::get('message');
                            if($message){
                                echo '  <div class="alert alert-success">
                                      <center>      <strong>Hoàn Thành!</strong> '. $message.'</center>
                                        </div>';
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="{{URL::to('/Luu-San-Pham')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Sản Phẩm">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail5">Slug</label>
                                        <input type="text" name="product_slug" class="form-control" id="exampleInputEmail5" placeholder="Slug">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail4">Giá sản phẩm</label>
                                        <input type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số tiền" name="product_price" class="form-control" id="exampleInputEmail4" placeholder="Giá Sản Phẩm(number)">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail6">Số Lương sản phẩm</label>
                                        <input type="text" data-validation="number" data-validation-error-msg="Làm ơn điền số tiền" name="product_num" class="form-control" id="exampleInputEmail6" placeholder="Số Lượng Sản Phẩm(number)">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Cách Hiển Thị</label>
                                        <select name="product_display" class="form-control input-sm m-bot15">
                                                <option value="0">Sản Phẩm Mới</option>

                                                <option value="1"> Sản Phẩm Nổi Bật </option>
                                                <option value="2"> Sản Phẩm Đặt Biệt</option>
                                                <option value="4"> Sản Phẩm Siêu Rẽ</option>
                                                <option value="5"> Sản Phẩm Thường</option>
                                                
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail3">Hình ảnh sản phẩm</label>
                                        <input type="file" name="product_image" class="form-control" id="exampleInputEmail3">
                                    </div>
                                </div>    
                                <div class="form-group">
                                    <label for="exampleInputPassword2">Mô tả sản phẩm</label>
                                    <textarea style="resize: none"  rows="8" class="form-control" name="product_content" id="editor3" placeholder="Mô tả sản phẩm"></textarea>
                                    <script>
                                            CKEDITOR.replace( 'editor3' );
                                    </script>
                                </div>
                                
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                        <select name="product_cate" class="form-control input-sm m-bot15">
                                                    <?php
                                                    showCategories($categories);
                                                ?>
                                                
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Hiển thị</label>
                                        <select name="product_status" class="form-control input-sm m-bot15">
                                                <option value="0">Ẩn</option>
                                                <option value="1">Hiển thị</option>
                                                
                                        </select>
                                    </div>
                                </div>
                               
                                <button type="submit"  class="btn btn-info">Thêm sản phẩm</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection
<?php
function showCategories($categories, $category_id = 0, $char = '')
{
    foreach ($categories as $key => $item)
    {
       
        // Nếu là chuyên mục con thì hiển thị
        if ($item->category_parent == $category_id)
        {
            
              echo '<option value="'.$item->category_id.'">'.$char.$item->category_name.'</option>';
            // Xóa chuyên mục đã lặp
            unset($categories[$key]);
             
            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            showCategories($categories, $item->category_id, $char.'--');
        }
    
    }
}
?>