<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class ArticleRequest extends ApiBaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'title' => 'required',
            'content' => 'required|max:5000',
            'category_id' => 'required|exists:categories,id',
            'status' => 'required|in:draft,published,schedualed',
            'schedualed_at' => 'required_if:status,schedualed|date_format:Y-m-d H:i:s'
        ];

        return $rules;
    }
}
