<?php
class ProductController extends Controller {
    public function index() {
        $product = $this->model('Product');
        $data['products'] = $product->getAll();
        $this->view('product/index', $data);
    }
}
?>
