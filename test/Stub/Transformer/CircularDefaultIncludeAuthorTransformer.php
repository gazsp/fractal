<?php namespace League\Fractal\Test\Stub\Transformer;

class CircularDefaultIncludeAuthorTransformer extends GenericAuthorTransformer
{
    protected $defaultIncludes = [
        'book',
    ];

    public function includeBook()
    {
        return $this->item(['c' => 'd'], new CircularDefaultIncludeBookTransformer());
    }
}
