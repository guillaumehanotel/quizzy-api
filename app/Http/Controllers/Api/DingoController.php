<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dingo\Api\Exception\ValidationHttpException;
use Dingo\Api\Routing\Helpers;
use Illuminate\Support\Facades\Validator;

class DingoController extends Controller {
    use Helpers;

    /**
     * This method forces Laravel to put its validation errors
     * into the errors array of a Dingo Response
     *
     * @param Request $request
     * @param \Illuminate\Contracts\Validation\Validator $validator
     */
    protected function throwValidationException(Request $request, $validator) {
        throw new ValidationHttpException($validator->getMessageBag()->toArray());
    }

    protected function validateByValidator(Request $request, \Illuminate\Validation\Validator $validator) {
        if ($validator->fails()){
            $this->throwValidationException($request, $validator);
        }
    }

    protected function created() {

    }

}
