<?php

namespace App\Services;

use App\Actions\Comment\GetProductComments;
use App\Http\Resources\CommentResource;
use Illuminate\Support\Collection;

class ReviewService
{
    public function __construct(
        private GetProductComments $getProductComments,
    )
    {
    }

    public function getReviews(Collection $products)
    {
        $productIds = $products->pluck('id')->toArray();
        $comments = $this->getProductComments->handle($productIds);

        return $products->map(function ($product) use ($comments) {
            $comments = $comments->firstWhere('product_id', $product->id);
            $comments = $comments['comments'] ?? collect([]);
            $product->comments = CommentResource::collection($comments->take(3));
            $product->total_comments = $comments->count();

            return $product;
        });
    }
}
