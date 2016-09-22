<?php namespace League\Fractal\Test\Stub\Transformer;

class CircularDefaultIncludeBookTransformer extends DefaultIncludeBookTransformer
{
   public function includeAuthor()
    {
        return $this->item(['c' => 'd'], new CircularDefaultIncludeAuthorTransformer());
    }
}
