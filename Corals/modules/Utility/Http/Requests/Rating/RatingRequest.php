<?php

namespace Corals\Modules\Utility\Http\Requests\Rating;

use Corals\Foundation\Http\Requests\BaseRequest;
use Corals\Modules\Utility\Models\Rating\Rating;

class RatingRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $this->setModel(Rating::class);

        return $this->isAuthorized();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $this->setModel(Rating::class);
        $rules = parent::rules();

        if ($this->isUpdate() || $this->isStore()) {
            $rules = array_merge($rules, [
                'review_subject' => 'required|max:191',
                'review_text' => 'required|max:191',
                'review_rating' => 'required|integer',
            ]);
        }


        return $rules;
    }


}
