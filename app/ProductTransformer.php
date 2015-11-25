<?php
namespace App;

use League\Fractal\TransformerAbstract;
class ProductTransformer extends TransformerAbstract
{
    public function transform(Product $product)
    {
        return [
            'id' => (int)$product->id,
            'title' => $product->name,
        ];
    }
}